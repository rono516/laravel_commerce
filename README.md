# Packline Trader App

# Getting started

## Installation

Clone the repository

    git clone https://github.com/rono516/packline_trader.git

Switch to the repo folder

    cd packline_trader

Install all the dependencies using composer

    composer install

Copy the example env file and make the required configuration changes in the .env file

    copy .env.example .env

Generate a new application key

    php artisan key:generate

Run npm install

    npm install

Run the database migrations (**Set the database connection in .env before migrating**)

    php artisan migrate

Start the local development server

    php artisan serve

You can now access the server at http://localhost:8000


