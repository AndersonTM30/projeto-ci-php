FROM php:8.3-apache-bookworm


COPY src/ /var/www/html/src/
COPY tests/ /var/www/html/tests/
COPY vendor/ /var/www/html/vendor/
COPY composer.json /var/www/html/composer.json
COPY phpunit.xml.dist /var/www/html/phpunit.xml.dist

WORKDIR /var/www/html

# CMD ["apache2-foreground"]