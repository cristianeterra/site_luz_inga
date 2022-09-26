FROM php:8.0-apache
WORKDIR /var/www/html
RUN apt update -y && apt install libmariadb-dev -y
RUN docker-php-ext-install mysqli