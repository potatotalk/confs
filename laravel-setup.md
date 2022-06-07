## Packages need.

menu package 
command package 
comments package 
Post package 
User Package 
Admin Package 



```sh
composer require laravel/breeze --dev 
composer require barryvdh/laravel-debugbar --dev

<!-- https://github.com/laravelista/comments -->


composer require spatie/laravel-medialibrary spatie/laravel-permission spatie/laravel-backup

php artisan vendor:publish --provider="Barryvdh\Debugbar\ServiceProvider"


 php artisan optimize:clear
 # or
 php artisan config:clear
```


config/app.php 

```php
'providers' => [
    // ...
    Spatie\Permission\PermissionServiceProvider::class,
];
```

config/filesystems.php

```php
'disks' => [
    ...

    'media' => [
        'driver' => 'local',
        'root'   => public_path('media'),
        'url'    => env('APP_URL').'/media',
    ],
```

// config/media-library.php

```php
return [
    'disk_name' => 'media',

    // ...
];

```

```sh

sudo apt install jpegoptim optipng pngquant gifsicle
npm install -g svgo

brew install jpegoptim
brew install optipng
brew install pngquant
brew install svgo
brew install gifsicle


php artisan vendor:publish --provider="Spatie\MediaLibrary\MediaLibraryServiceProvider" --tag="migrations"

php artisan vendor:publish --provider="Spatie\Permission\PermissionServiceProvider"

```sh

