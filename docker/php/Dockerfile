FROM ubuntu:18.04

ENV TZ Europe/Moscow
ENV TERM linux
ENV DEBIAN_FRONTEND noninteractive
ENV PHP_INI_SCAN_DIR "/usr/local/etc/php/conf.d/:${PHP_INI_SCAN_DIR}"

RUN apt-get update \
    && apt-get install -y \
    php7.2 \
    php-gd \
    php-json \
    php-mbstring \
    php-mysql \
    php-xml \
    ssmtp \
    mailutils \
    && rm -rf /var/lib/apt/lists/*
