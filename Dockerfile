FROM php:7-fpm

RUN "/usr/local/bin/php artisan migrate"

VOLUME [ "/var/www/html" ]
WORKDIR /var/www/html

EXPOSE 80

CMD ["-D", "FOREGROUND"]

