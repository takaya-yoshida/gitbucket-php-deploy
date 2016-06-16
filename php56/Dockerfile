FROM php:5.6-apache
RUN apt-get update && apt-get install -y git
RUN usermod -u 1000 www-data \
    && groupmod -g 1000 www-data