# My-MVC-Framewok
This project is an MVC framework created for studies and deepening knowledge in the PHP language

WIP: Last update in 03/25/2022

# Install and execution steps
* PHP 7.4
* SQLite
* Composer 2.0

## PHP Libraries used (php.ini)

* pdo_sqlite

## How to use the embed PHP server

		php -S localhost:8080 -t public/

## Step by step

1. Clone the repository, or download it in the zip format and e unzip;
1. Enable pdo_sqlite in php.ini file;
1. RUN composer install
1. RUN php -S localhost:8080 -t public/
1. Access localhost:8080 with your browser

### Attention:

Of course, you can run the project with a robust web sever like Apache or NGINX. We are just not covering these steps. 

### Check installed libraries
* For the project to execute without error, pdo_sqlite must be enabled in php.ini file. You can always check your dependencies with 
      
       php -m

* Check the path to php.ini file with 

      php -i


### Composer packages 

* doctrine/ORM ->  It's a solid Object Relational Mapper
* doctrine/cache -> A Doctrine/ORM requirement
* symfony/cache -> A Doctrine/ORM requirement
* doctrine/annotations -> A Doctrine/ORM requirement to use annotations
* monolog/monolog -> This package allows quickly and easy logs

# Project Structure

This project is inspired by Model View Controller frameworks like Laravel. 

## Entities (Model)

Doctrine ist a famous ORM (object relational mapper) which enable us to worry in developing instead of writing SQl queries. 

## Directories

* **public** has the index.php file, and the front-end assets like HTML, CSS and JS;
* **app/Controllers** has the controllers;
* **app/data**  has the EntityManager, responsible to connect with the database;
* **app/Model** has the application entities;
* **app/routes** has a file where the application routes must be declared;
* **app/Utils** has the application views handler;
* **app/Views** has application views;


By default, the application write the log file in the root directory. 

### TODO

* Enhance logs
* Enhance commentary in code
* Enhance Exception/Error treatment
* Enhance the View Handler


## Author

Vinicius Alberto Alves da Silva

E-mail: viniciusaalberto@gmail.com
E-mail: viniciusalves@ice.ufjf.br

[LinkedIn](linkedin.com/in/vinicius-alves-9a45a3117)

[Github](https://github.com/vinnyalvs)