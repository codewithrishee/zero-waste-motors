FROM php:8.2-apache

WORKDIR /var/www/html

COPY . /var/www/html/

RUN a2enmod rewrite

ENV PORT=10000

EXPOSE 10000

CMD ["sh", "-c", "sed -i 's/Listen 80/Listen ${PORT}/' /etc/apache2/ports.conf && sed -i 's/:80>/:${PORT}>/' /etc/apache2/sites-enabled/000-default.conf && apache2-foreground"]