# Project Name
>  Laravel and the Front End - using Vue components withi Laravel
Laracasts Laravel 5.7 from Scratch   Episodes 34 to 36  
See https://laracasts.com/series/laravel-from-scratch-2018/

## Table of contents
* [General info](#general-info)
* [Technologies](#technologies)
* [Setup](#setup)
* [Features](#features)
* [Status](#status)
* [Inspiration](#inspiration)

## General info
This code follows episodes 34 to 36 of Laravel 5.7 from Scratch. It shows how to use (simple) Vue frontend within a Laravel application.

## Technologies
* Laravel Framework 5.7 or greater
* Node.js installed
* Developed on local machine. Server requirements found at https://laravel.com/docs/5.7/#server-requirements

## Setup
* git clone 
* cd 
* composer install
* npm install   (to install required packages in the package.json file)  
* npm run dev
* cp .env.example .env
* php artisan key:generate
* php artisan serve

In browser:  
* go to http://localhost:8000 and see the Vue components displayed (not pretty!)

npm run dev    compiles once  
npm run watch  compiles on any file changes but boots back to beginning of the app so any SPA state lost  
npm run hot    only reloads the bits of code that changed, but retains the state built up in your SPA


## Features
Laravel Mix is at the core of non PHP frontend componetts. It simplifies configuration and core Weback tasks with cleaner API (see webpack.mis.js).  

Laravel Mix expects all frontend assets to live within the resources folder under the appropriate subdirectories    
e.g. JaveScript in resources/js, SASS in resources/sass, CSS in resources/css and they export to public/css and public/js.

Vue components are in /resources/js/components  
welcome.blade.php - uses the Vue components. Has 3 Javascript files at the bottom that result from Javascript compiling using laravel mix  
resources/js/app.js - components are imported and registered within the Vue app instance  


## Status
Project is: _finished_ as this part of the tutorial came to an end.  

## Inspiration
Project inspired by a desire to learn in order to return to developer role having taken a career break to raise a family.
