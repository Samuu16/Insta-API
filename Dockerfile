FROM php:8.2-apache

# Copy all files to Apache directory
COPY . /var/www/html/

# Enable mod_rewrite (optional but useful)


EXPOSE 80
