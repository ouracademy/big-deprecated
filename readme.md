# BigEvents Business Ideas Group Event Management

This is a web application event management system that it's on construction.

BigEvents is a web application based on Laravel 5 and Angular 2. It uses the best
of both worlds. **Now uses Laravel 5.2 and Angular 2 - final**

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
This app uses Laravel and Angular2, so to run the app you have to install and
configure both parts...as you will see it isn't difficult, is just copy and paste!

### Laravel app part
To use this app, copy the `.env.example`, paste on the root of the project and
rename it to `.env` (This file contains all the settings like the database and
mail settings, see the [Laravel docs](https://laravel.com/docs/5.2/installation)
to more information). Change the `.env` file to your own settings.


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

You can also populate the database with fake data, this is an optional step:
```
php artisan db:seed
```

That's all! Run, the Laravel app part with:
```
php artisan serve
```

### Angular2 app part
To install Angular2 dependencies:
Open a new terminal and go to the public/angular2app directory of the app
and use npm to install the dependencies.
```
cd public/angular2app
npm install
```

Run the Angular2 app part with:
```
npm start
```

Go to http://localhost:8000, you will see your new app running!

##TODO
1. Add email validation(for now using HTML5 validation)
2. Slide image 100% height
3. Event detail make paddin bottom, delete blank line in slider
4. Move from doctrine to eloquent
5. Move to laravel 5.3

## License

BigEvents is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
