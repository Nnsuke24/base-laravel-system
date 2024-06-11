FROM php:8.1.3-fpm

RUN docker-php-ext-install pdo_mysql

RUN apt-get update \
    && curl -fsSL https://deb.nodesource.com/setup_lts.x | bash - \
    && apt-get install -y libzip-dev zlib1g-dev libpng-dev nodejs\
    && pecl install xdebug \
    && docker-php-ext-install gd zip \
    && docker-php-ext-enable xdebug \
    && npm install n -g \
    && n 18.15.0

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html
