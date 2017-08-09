# Docker Symfony (PHP7-FPM - NGINX - MySQL - ELK)

Docker-symfony gives you everything you need for developing Symfony application. 

## Installation

1. Create a `.env` from the `.env.dist` file. Adapt it according to your symfony application

    ```bash
    cp .env.dist .env
    ```

2. Build/run containers with (with and without detached mode)

    ```bash
    $ docker-compose build
    $ docker-compose up -d
    ```

3. Update your system host file (add symfony.dev)
    
    ```bash
    $ sudo echo "127.0.0.1 symfony.dev" >> /etc/hosts
    ```
        
4. Prepare Symfony app

    1. Update app/config/parameters.yml

        ```yml
        # path/to/your/symfony-project/app/config/parameters.yml
        parameters:
            database_host: mysqldb
            ...
        ```

    2. Composer install & create database

        ```bash
        $ docker-compose exec php bash
        $ composer install
        ```
           
        ```bash   
        # Symfony3
        $ sf doctrine:database:create
        $ sf doctrine:schema:update --force
        $ sf doctrine:fixtures:load
        ```

5. Enjoy :-)

## Usage

Just run `docker-compose up -d`, then:

* Symfony app: visit [symfony.dev](http://symfony.dev)  
* Symfony dev mode: visit [symfony.dev/app_dev.php](http://symfony.dev/app_dev.php)  
* Logs (Kibana): [symfony.dev:81](http://symfony.dev:81)
* Logs (files location): logs/nginx and logs/symfony
