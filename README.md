<p align="center">A project built using the Laravel Framework</p>
<p align="center"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="313" alt="Laravel Logo"></p>

<br>

## About LaraGigster

LaraGigster is a youtube crash course project built based on [this video](https://www.youtube.com/watch?v=MYyJ4PuL4pY) posted by Traversy Media. 

It is built as a system that intends to be the home of Laravel-based projects or jobs where the User (Gigster) have to sign-up to post the vacancies they have in their jobs/projects (Gigs).

<br>

## LaraGigster Use-Case

Guest
- View all Gigs
- Search for Gigs
- Register as a Gigster
- Login to Gigster account

Gigster
- View all Gigs
- Search for Gigs
- Post/Create Gig
- Edit/Update posted Gig
- Delete posted Gig
- Logout from Gigster account

<br>

## Within LaraGigster

This project utilizes the initial Laravel v9 **framework** with several inclusions of other frameworks which links can be found inside //resources/views/components/layout.blade.php:
- fontawesome
- tailwindcss
- alpinejs

This project only make use of 2 **controllers** which can be found inside //app/Http/Controllers/. Inside these controllers, several basic functions have been declared:
- show all/filtered listings
- listings pagination
- form validations
- attachment uploads
- object creation/edit/delete
- user authentication
- page redirection
- flash message
- listing management acording to user
- user registration/login/logout

This project only have 2 **models** which are Users.php (have many listings) and Listing.php (belong to user) which can be found inside //app/Models/. Inside these models several basic functions have been declared:
- listings scopeFilter
- object relationship

This project uses the blade **view**, utilizing its basic features such as:
- components directory  - <code>`<x-comp>`...`</x-comp>` - {{ $slot }}</code>
- components variables  - <code>`<x-comp :varsCsv="$vars->var" />` - @props(['varsCsv'])</code>
- components attribute  - <code>`<div {{ $attributes->merge(['class' => 'class-name']) }}>`...`</div>`</code>
- partials directory    - <code>@include('partials._filename')</code>
- inline PHP function   - <code>@unless()@else@endunless, @if()@endif, @foreach()@endforeach</code>
- inline PHP echo       - <code>{{ $message }}</code>
- form features         - <code>@csrf, @method('PUT/DELETE'), @error('inputname')@enderror</code>
- listings pagination   - <code>{{ $vars->links() }}</code>

This project utilizes MySQL **database**. The SQL file pertaining to the database is included inside this repo named laragigster.sql which has several test data. Similarly, this repo also encompasses the required factories, migrations, and seeders which can be executed as to showcase the same results of that of the included SQL file.

Last but not least, the project was build using these **version** of frameworks:
- PHP 8.2.0
- MySQL 8.2.0
- Laravel 9.47.0

So with that, I humbly thank you.
