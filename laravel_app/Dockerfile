FROM php:7.2-apache
ADD src /var/www/html/
ADD apache2/conf-enabled /etc/apache2/conf-enabled/
ADD apache2/sites-available /etc/apache2/sites-available/
RUN apt-get update -y
RUN apt-get upgrade -y
RUN apt-get install -y mysql-server git zlib1g-dev zip unzip libxml2-dev
RUN docker-php-ext-install json mbstring mysqli pdo pdo_mysql zip soap xml


RUN a2enmod rewrite
RUN service apache2 restart

ENV COMPOSER_PROCESS_TIMEOUT 3000

RUN curl -sS https://getcomposer.org/installer | php
RUN mv composer.phar /usr/local/bin/composer

WORKDIR /var/www/html

RUN composer install
RUN php artisan key:generate

RUN chmod -R 777 /var/www/html/storage
