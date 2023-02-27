<p align="center">A project built using the Laravel Framework</p>
<p align="center"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="313" alt="Laravel Logo"></p>

<br>

## About LaraReserve

LaraReserve is a youtube crash course project built based on [this video](https://www.youtube.com/watch?v=8KaBeq9JzrQ) posted by Laraveller. 

It is built as a restaurant reservation system that intends to collect reservations from guest visiting the website. It also has login system to an admin panel where Admin can manage resources required for the reservation function to works.

<br>

## LaraReserve Use-Case

Guest
- View Restaurant Website
- View Categories & Menus
- Make Reservations

Admin
- Create, Edit, Delete Categories
- Create, Edit, Delete Menus
- Create, Edit, Delete Tables
- Create, Edit, Delete Reservations
- Assign Menus to Categories
- Assign Reservations to Tables

<br>

## Within LaraReserve

This project utilizes the initial Laravel v9 **framework** with several inclusions of other frameworks which links can be found inside //resources/views/components/layout.blade.php:
- tailwindcss
- alpinejs

This project also utilizes Laravel Breeze to automate the creation of a complete authentication system. While it is on Breeze, Vite.js is a must to render its view. 
- composer require laravel/breeze --dev
- php artisan breeze:install
- npm install
- npm run dev

This project utilizes MySQL **database**. The SQL file pertaining to the database is included inside this repo named larareserve.sql which has several test data. Similarly, this repo also encompasses the required factories, migrations, and seeders which can be executed as to showcase the same results of that of the included SQL file.

Last but not least, the project was build using these **version** of frameworks:
- PHP 8.2.0
- MySQL 8.2.0
- Laravel 9.50.2
- NPM 8.19.3

So with that, I humbly thank you.
