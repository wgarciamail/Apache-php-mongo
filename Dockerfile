# Use an official PHP Apache runtime
FROM php:8.2-apache
# Enable Apache modules
RUN a2enmod rewrite
# Enable PHP modules
RUN apt-get update && apt-get install -y pkg-config libcurl4-openssl-dev libssl-dev
# Install MongoDB extension
RUN pecl install mongodb \
    && docker-php-ext-enable mongodb