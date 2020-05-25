FROM php:7.2-fpm
 
RUN docker-php-ext-install mysqli

RUN docker-php-ext-install pdo_mysql

RUN apt-get install -q -y libfreetype6
RUN apt-get install -q -y libjpeg62-turbo
RUN apt-get install -q -y libxpm4
RUN apt-get install -q -y libpng16-16

RUN docker-php-ext-configure gd --with-freetype-dir=/usr/include/ --with-jpeg-dir=/usr/include/