# Dashboard Preview

![preview dashboard](https://raw.githubusercontent.com/Biw-id/aplikasi-spp/master/public/preview.png)

## Support me - Dukung Saya

<a href="https://teer.id/biwbiw_" target="_blank"><img id="wse-buttons-preview" src="https://cdn.trakteer.id/images/embed/trbtn-blue-2.png" height="40" style="border:0px;height:40px;" alt="Trakteer Saya"></a>

# Introduction

**Selamat datang di Repositori Aplikasi SPP**

Repositori ini berisi Aplikasi SPP berbasis laravel yang dirancang untuk memudahkan proses pembayaran SPP (Sumbangan Pembinaan Pendidikan) di Institusi pendidikan. Aplikasi ini dapat diakses melalui perangkat seluler atau komputer, memungkinkan siswa dan orang tua siswa untuk melakukan pembayaran dengan cepat dan efisien.

**Fitur Utama**

- Pembayaran SPP Online: Bayar SPP dengan mudah melalui aplikasi ini tanpa perlu antri di kantor sekolah.

- Notifikasi Pembayaran: Dapatkan pemberitahuan ketika jatuh tempo pembayaran SPP.

- Riwayat Pembayaran: Pantau riwayat pembayaran SPP Anda dengan detail transaksi yang mendetail.

- Framework Laravel: Aplikasi ini menggunakan Laravel, framework PHP yang kuat dan memudahkan pengembangan.

- Manajemen Akses: Kami menggunakan Spatie Laravel Permission untuk mengatur level akses pengguna.

- Integrasi Payment Gateway: Aplikasi ini terhubung dengan payment gateway untuk pembayaran online.

# Getting started

## Disclaimer

> **Aplikasi ini masih dalam tahap pengembangan, beberapa fitur masih belum tersedia atau belum lengkap. Jika anda ingin berkontribusi dalam repositori ini silahkan fork repositori ini.**  

> **Repositori ini saya buat sebagai project belajar dan untuk menambah portofolio saya.**

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
