# Book Store System
***
This is a Book Store Management system which developed using laravel framework. This project consist of few basic crub operations and simple custom authentication. This is still in developing mode, and wish to complete as soon as possible.
<br><br>

## General Info
***
This book store managemnt system has only one admin and guest users can view books and its details. Admin maintain record about authors, books, book categories and as well as publishers. Admin allow to add new authors, books, book categories and publishers. In admin dashboard, admin can track summary of all authors, books, categories and publishers. 
<br><br>

## Tools & Technologies
***
* Laravel Framework
* xampp server
<br><br>

## Installation
***
You need to install xampp server for database connection.
<br>

* git clone https://github.com/JayniGithub/bookstore.git
* open project folder in your code editor
* Install composer dependencies by using composer install command
* Make copy of .env.example file and rename it as .env
* Generate app encryption key by using php artisan key:generate command
* create an empty database
* Add database infromation in .env file
* After filling credentials in .env file, next run the migration by php artisan migrate command
* Then run the seeder files to fill your database tables
* Using php artisan serve command you can run the project
* Admin login credentials can be find from seeder files