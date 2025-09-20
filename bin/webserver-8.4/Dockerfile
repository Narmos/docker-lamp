FROM php:8.4-apache

ARG PHP_MAX_EXECUTION_TIME=30
ARG PHP_MEMORY_LIMIT=128M
ARG PHP_POST_MAX_SIZE=20M
ARG PHP_UPLOAD_MAX_FILESIZE=20M

# Surpresses debconf complaints of trying to install apt packages interactively
# https://github.com/moby/moby/issues/4032#issuecomment-192327844
#ARG DEBIAN_FRONTEND=noninteractive

# Install other PHP extensions with their dependencies
ADD --chmod=0755 https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/
RUN install-php-extensions bcmath gd imagick intl mysqli pdo_mysql zip

# Configure PHP
RUN echo "max_execution_time = $PHP_MAX_EXECUTION_TIME" >> /usr/local/etc/php/conf.d/docker-php-max-execution-time.ini \
  && echo "memory_limit = $PHP_MEMORY_LIMIT" >> /usr/local/etc/php/conf.d/docker-php-memory-limit.ini \
  && echo "post_max_size = $PHP_POST_MAX_SIZE" >> /usr/local/etc/php/conf.d/docker-php-post-max-size.ini \
  && echo "upload_max_filesize = $PHP_UPLOAD_MAX_FILESIZE" >> /usr/local/etc/php/conf.d/docker-php-upload-max-filesize.ini