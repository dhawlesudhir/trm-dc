FROM php:8.3-rc-fpm-alpine
WORKDIR /var/www/html

# make sure .dockerignore has values
COPY . .

RUN docker-php-ext-install pdo pdo_mysql
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer
CMD composer install && php artisan serve --host=0.0.0.0 --port=8000
EXPOSE 8000
