FROM php:8.1-fpm

ARG BUILD_ENV=dev
ENV ENV=$BUILD_ENV
ARG DEBIAN_FRONTEND=noninteractive
ENV USERNAME=www-data
ENV APP_HOME=/var/www/html
EXPOSE 80

RUN apt-get update --fix-missing \
    && apt-get install -y --no-install-recommends \
      mariadb-client \
      git \
      libcurl3-dev \
      libssl-dev \
      libicu-dev \
      g++  \
      unzip \
      libzip-dev \
      zip \
      curl \
    && docker-php-ext-configure intl  \
    && docker-php-ext-install pdo_mysql intl

RUN docker-php-ext-configure zip \
    && docker-php-ext-install zip

RUN pecl install redis raphf \
    && docker-php-ext-enable redis raphf

RUN pecl install pecl_http \
     && docker-php-ext-enable http

RUN pecl install xdebug \
    && docker-php-ext-enable xdebug

RUN apt-get clean autoclean \
    && apt-get autoremove --yes \
    && rm -rf /var/lib/{apt,dpkg,cache,log}/

COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
RUN chmod +x /usr/bin/composer
ENV COMPOSER_ALLOW_SUPERUSER 1

USER ${USERNAME}
WORKDIR ${APP_HOME}

COPY --chown=${USERNAME}:${USERNAME} . $APP_HOME/
COPY infra/api/www.conf /usr/local/etc/php-fpm.d/www.conf

USER root
