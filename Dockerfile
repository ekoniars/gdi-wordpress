FROM wordpress:latest

WORKDIR /var/www/html

COPY wp-content/themes/gdi ./wp-content/themes/gdi

RUN chown -R www-data:www-data /var/www/html

EXPOSE 80

CMD ["apache2-foreground"]
