# Wanderung

## Installation Process

-   At first clone the project from Github
-   Then create a .env file. Copy contents from .env.example
-   Create a database then put the DB name in your .env file
-   Then run `composer update` in your terminal.
-   After that run `php artisan key:generate` to generate the application key.
-   Then run `php artisan migrate` to create all the tables in the dadtabase.
-   Next, you should run the `php artisan passport:install` command. This command will create the encryption keys needed to generate secure access tokens. In addition, the command will create "personal access" and "password grant" clients which will be used to generate access tokens.
-   Finally run `php artisan serve` to run the project in your localhost.

## Api Documentation

-   A JSON file called **Wanderung.postman_collection.json** is provided in the root directory. Import this file in your **Postman** app to view the API flow.
-   A complete **Documentation** is also published in the Postman site. Visit the link to view the API Documentation if you may wish to
    Documentation Link. Click [Here](https://documenter.getpostman.com/view/10879134/2s93sW7uZf).
