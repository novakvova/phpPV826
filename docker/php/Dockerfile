FROM php:7.2-fpm
 
RUN docker-php-ext-install mysqli

RUN docker-php-ext-install pdo_mysql

RUN docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/
