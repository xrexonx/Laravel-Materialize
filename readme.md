# Laravel + MaterializeCSS

A fresh baked ready to use Laravel 5.1 Application using Materialize Css Design configured by laravel elixir for handling frontend dependencies.

# Requirements

I assume that you have this dependencies on your machines. If not, just visit their website to install

  * [Composer]
  * [NodeJs]
  * [Bower]
  * [Gulp]

# Installation

### Step 1: Clone this repo
```sh
$ git clone https://github.com/xrexonx/Laravel-Materialize.git
```
### Step 2: Install composer packages
```sh
$ cd Laravel-Materialize
$ composer install
```

### Step 3: Install NPM dependencies
```sh
$ npm install
or
$ sudo npm install
```

### Step 4: Update Bower dependencies
```sh
$ bower update
```

### Step 5: Run PHP's built-in development server
```sh
$ php artisan serve
```

***That's it! Now you should be ready to go building your application using laravel 5.1 and materializeCss -alright! xrexonx ***


### If Errors encountered after running php artisan serve

#### Segmentation fault (core dumped)
 *  solution from bobbybouwmann solved this issue ->  [Laracast]

#### No supported encrypter found.
 *  solution from baskan solved this issue ->  [LaravelIO]




   [NodeJs]: <http://nodejs.org>
   [Bower]: <http://bower.io>
   [Gulp]: <http://gulpjs.com>
   [Composer]: <https://getcomposer.org>
   [Laracast]: <https://laracasts.com/discuss/channels/forge/segmentation-fault-composer-install-composer-not-generate-autoload#reply-50146>
   [LaravelIO]: <http://laravel.io/forum/06-09-2015-no-supported-encrypter-found-the-cipher-and-or-key-length-are-invalid#reply-25237>