FROM php:7.2-fpm
 
RUN docker-php-ext-install mysqli

RUN docker-php-ext-install pdo_mysql

RUN apt-get update && \
    apt-get install -y -qq git \
        libjpeg62-turbo-dev \
        libfreetype6-dev \
        libmcrypt-dev \
        libpng12-dev \
        libssl-dev

RUN docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/