FROM php:8.3-apache

# Enable mod_rewrite
RUN a2enmod rewrite \
    && sed -i '/<Directory \/var\/www\/>/,/<\/Directory>/ s/AllowOverride None/AllowOverride All/' /etc/apache2/apache2.conf

WORKDIR /var/www/html

COPY . .

RUN chown -R www-data:www-data /var/www/html

EXPOSE 80 10000

CMD ["sh", "-c", "PORT=${PORT:-80}; sed -i \"s/Listen [0-9]*/Listen $PORT/\" /etc/apache2/ports.conf && sed -i \"s/<VirtualHost \\*:[0-9]*/<VirtualHost \\*:$PORT/\" /etc/apache2/sites-available/000-default.conf && exec apache2-foreground"]
