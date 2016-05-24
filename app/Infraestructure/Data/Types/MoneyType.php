<?php

namespace App\Infraestructure\Data\Types;

use Doctrine\DBAL\Types\Type;
use Doctrine\DBAL\Platforms\AbstractPlatform;
use Doctrine\DBAL\Types\ConversionException;

use App\Domain\Money\Money;
use App\Domain\Money\Currencies;

class MoneyType extends Type
{
    const NAME = 'money';

    public function getSQLDeclaration(array $fieldDeclaration, AbstractPlatform $platform)
    {
        return $platform->getVarcharTypeDeclarationSQL($fieldDeclaration);
    }

    public function convertToPHPValue($value, AbstractPlatform $platform)
    {
        if (is_null($value)) {
            return new Money(0, Currencies::null());
        }else{
            list($currencyCode, $amount) = explode(' ', $value, 2);
            return new Money((int)$amount, Currencies::getFromCode($currencyCode));
        }
    }

    public function convertToDatabaseValue($value, AbstractPlatform $platform)
    {
        if ($value instanceof Money) {
            return $value->getCurrency()->getCode() . ' '. $value->getAmount();
        }
 
        throw ConversionException::conversionFailed($value, self::NAME);
    }

    public function getName()
    {
        return self::NAME;
    }
}