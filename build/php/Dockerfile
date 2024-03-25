FROM php:8.1-apache

RUN a2enmod rewrite

RUN apt-get update && \
    docker-php-ext-install mysqli pdo pdo_mysql

RUN apt-get install -y \
        libzip-dev \
        zip \
  && docker-php-ext-install zip


RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer