# Laravel 5.5 to be released during LaraconEU

    Laravel 5.5 is planned to be released during LaraconEU
    The Laravel 5.5 Documentation is already released 

# Installing Laravel 5.5 NOW!

    To install, until it is officially released
    
    `laravel new project-name --dev`

# Requirements 

    Laravel 5.5 will require PHP 7.0 
    or higher and is also the next LTS (Long Term Support)

# Whoops is back.

    The Whoops page makes a return in Laravel 5.5

# Vendor Publish

New `vendor:publish` not has "Prompts"

# Packages now have the ability to Auto wire into your application via composer 

```
    "extra": {
        "laravel": {
            "providers": [
                "The\\Dark\\Knight\\BatmanServiceProvider"
            ],
            "aliases": {
                "Bar": "The\\Dark\\Knight\\Batman"
            }
        }
    }
```

# Front-end Presets

    You can not select between multiple
    Frontends 

    - `php artisan preset react`   Types: type (none, bootstrap, vue, react)

# New migration command 

A migration command is not available to
reset database 

`php artisan migrate:fresh`

# Rendering Mailables in the Browser

Laravel 5.5 will have the ability to render mailables in the browser 
making it easier to edit and view email before sending them out. 

    Command: `php artisan  make:mail UserWelcome --markdown=emails.welcome`
    Sample:  `http://laravel55.dev/welcome`

# Router Helper

Some new Helpers for the Router file 

    Examples: 
        `Route::view()`
        `Route::rediect()`

# Streamline Validation 

New Validation streamlining in Laravel
5.5 

Demo using Post

# New `make:factory` 

New command to generate a Factory. 

    Command: `php artisan make:factory PostFactory`

# Commands are now also auto wired into the system

Commands are now auto wired into php
artisan when they are created

# Collection Dumping

New `dump()` and `dd()` commands can not
be added to collections to step through
and debug the collection

    Note to Self: 
    Make sure you have users in the database 
    `factory(App\User::class, 200)->create()`

# New Custom Blade "If" Directives

You can now create custom blade `if`
directives

    Define in the AppServiceProvider


# New Blade Directives

There are a couple new Blade Directives
built in 

    Example: 
        @auth
        @guest

    
