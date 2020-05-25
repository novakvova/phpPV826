FROM php:7.2-fpm
 
RUN docker-php-ext-install mysqli

RUN docker-php-ext-install pdo_mysql

RUN apt-get install -y libjpeg62-turbo-dev
RUN apt-get install -y libfreetype6-dev
RUN apt-get install -y libmcrypt-dev
RUN apt-get install -y libpng12-dev

RUN docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/