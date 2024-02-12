# Dashboard Preview

![preview dashboard](https://raw.githubusercontent.com/Biw-id/aplikasi-spp/master/public/preview.png)

## Support me - Dukung Saya

<a href="https://teer.id/biwbiw_" target="_blank"><img id="wse-buttons-preview" src="https://cdn.trakteer.id/images/embed/trbtn-blue-2.png" height="40" style="border:0px;height:40px;" alt="Trakteer Saya"></a>

# Getting started

## Installation

Please check the official laravel installation guide for server requirements before you start. [Official Documentation](https://laravel.com/docs/10.x/installation)


Clone the repository

    git clone https://github.com/Biw-id/aplikasi-spp.git

Switch to the repo folder

    cd aplikasi-spp

Install all the dependencies using composer

    composer install

Create database for this app, copy the example env file and make the required database configuration changes in the .env file

    cp .env.example .env

Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate --seed

Start the local development server

    php artisan serve

You can now access the server at http://localhost:8000

# Code overview

## Folders

- `app/Models` - Contains all the Eloquent models
- `app/Http/Controllers` - Contains all the controllers
- `config` - Contains all the application configuration files
- `database/factories` - Contains the model factory for all the models
- `database/migrations` - Contains all the database migrations
- `database/seeds` - Contains the database seeder
- `routes` - Contains all the api routes defined in api.php file

## Environment variables

- `.env` - Environment variables can be set in this file

***Note*** : You can quickly set the database information and other variables in this file and have the application fully working.

----------
# Default SuperUser

Default Email : [demo link](http://app.kaptenbiu.com)

    biu@biu.com 

Password : 

    asdasdasd

# Author

:rocket: [Abiyyu Shiddiq As'ad](https://github.com/Biw-id)

readme template from [here](https://github.com/ajikamaludin/spp-paud/blob/master/README.md)
