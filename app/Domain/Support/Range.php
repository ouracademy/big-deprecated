<?php

namespace App\Domain\Support;

/**
 * A range between magnitudes
 * Subclasses of Range should be immutable.
 * 
 * @author Arthur Mauricio Delgadillo <amd11dot4@gmail.com>
 * @see Magnitude
 * @see http://martinfowler.com/books/ap.html  Martin Fowler - Fundamental Types
 * @see https://github.com/unitsofmeasurement/unit-ri Unit of Measurement RI
 * 
 */
class Range {
    const EMPTY_RANGE = null;
    const INFINITY = INF;//TODO: ONLY WITH NUMBERS(FLOATS)
    protected $start;
    protected $end;
    
    public static function upTo($end) {
		return new Range(self::INFINITY, $end);
	}
	public static function startingOn($start) {
		return new Range($start, self::INFINITY);
	}
    
    /**
     * Construct an instance of Range with a start and end value.
     *
     * @param start The startimum value for the measurement range.
     * @param end The end value for the measurement range.
     */
    public function __construct($start, $end) {
        $this->assertValidRange($start, $end);
        $this->start = $start;
        $this->end = $end;
    }
    
    private function assertValidRange($start, $end){
        assert($start != null, "start should not be null");
        assert($end != null, "end should not be null");
        assert($start < $end, 'start is lower than end.');
    }

    /**
     * Returns the smallest value of the range. The value is the same as that
     * given as the constructor parameter for the smallest value.
     * 
     * @return the start value
     */
    public function start() {
        return $this->start;
    }

    /**
     * Returns the largest value of the measurement range. The value is the same
     * as that given as the constructor parameter for the largest value.
     * 
     * @return the end value
     */
    public function end() {
        return $this->end;
    }

    /**
     * Checks whether the given <code>Magnitude</code> is within this range
     * @param magnitude
     * @return true if the value is within the range
     */
    public function contains($magnitude) {
        if(is_null($magnitude)) return true;
        return $this->start <= $magnitude && $magnitude <= $this->end;
    }

    /**
     * Checks whether the given <code>Range</code> overlaps this range
     * @param range
     * @return true if the given range overlaps this range
     */
    public function overlaps(Range $range) {
        return $range->contains($this->start) || $range->contains($this->end) || $this->includes($range);
    }

    /**
     * Checks whether the given <code>Range</code> is included in this range
     * @param range
     * @return true if the value is included in this range
     */
    public function includes(Range $range) {
        if(is_null($range) || $range == self::EMPTY_RANGE) return true;
        return $this->contains($range->start) && $this->contains($range->end);
    }

    public function __toString() {
        return $this->start .' - '. $this->end;
    }

}