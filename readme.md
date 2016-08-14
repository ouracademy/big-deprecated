# BigEvents Business Ideas Group Event Management

This is a web application event management system that it's on construction.

It is designed for the company Business Ideas Group - BIG.
You can use it as an extension for your web app application for your enterprise or clients.

The event management contains:

1. A simple web page
  1. Home
  2. About
  3. Contact Us
  4. Events
2. Event Module
  1. Event & Event Types(Conferences, Workshops, Courses)
  2. Tickets
3. Money Support
  4.  Money: like $10.00, s/150.00
  5.  Currency: contain basic information like name and symbol.
  6.  Currencies: Basic types(SOl,EUR,DOL)
4. Authentication
  1. User: based on Laravel User authentification

## Usage

Because this app is based on Laravel framework, to use this app, copy the
 `.env.example`, paste on the root of the project and rename it to `.env` (This
file contains all the settings like the database and mail settings, see the [Laravel docs](https://laravel.com/docs/5.2/installation) to more information). Change the
`.env` file to your own settings.


Then install it's dependencies, using Composer:
```
composer install
```

Then generate the key api, running:
```
php artisan key:generate
```

Also to get the database structure, run:
```
php artisan migrate
```

And to populate with fake data (optional), run:
```
php artisan db:seed
```

That's all! You can run it, using:
```
php artisan serve
```
Go to http://localhost:8000, you will see your new app running!

## License

BigEvents is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
