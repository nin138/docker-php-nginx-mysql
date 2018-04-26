FROM php:7.0-fpm-alpine
RUN sed -i -e 's/;security.limit_extensions.*/security.limit_extensions = .php .php3 .php4 .php5 .php7 .html/' /usr/local/etc/php-fpm.d/www.conf
RUN docker-php-ext-install pdo_mysql mysqli mbstring