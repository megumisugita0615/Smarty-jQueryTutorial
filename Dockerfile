FROM php:8.1-apache

RUN apt-get update && apt-get install -y \
    unzip libonig-dev \
  && docker-php-ext-install pdo_mysql mysqli

COPY --from=composer /usr/bin/composer /usr/bin/composer

COPY ./config/php/php.ini /usr/local/etc/php/
