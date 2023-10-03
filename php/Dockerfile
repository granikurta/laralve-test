FROM php:8.2-fpm


RUN apt-get update && apt-get install -y libpng-dev libjpeg-dev libfreetype6-dev zip git curl unzip libpq-dev


RUN docker-php-ext-configure gd --with-freetype --with-jpeg
RUN docker-php-ext-install gd pdo pdo_pgsql pgsql && docker-php-ext-enable pgsql

RUN pecl install xdebug-3.2.1
	
WORKDIR /var/www/app

ENV COMPOSER_ALLOW_SUPERUSER=1
RUN curl -sS https://getcomposer.org/installer | php -- \
    --filename=composer \
    --install-dir=/usr/local/bin
	
RUN chown -R root:root /var/www


CMD ["php-fpm"]

EXPOSE 9000