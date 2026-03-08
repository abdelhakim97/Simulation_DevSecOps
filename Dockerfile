FROM php:7.4-apache

# Copie des fichiers
COPY . /var/www/html/

# Installation des extensions
RUN docker-php-ext-install mysqli