FROM php:8.3-alpine

# See https://pkgs.alpinelinux.org/packages
ENV BUILD_DEPS \
    libpq-dev

RUN set -xe && \
            apk add --no-cache --virtual .phpize-deps ${PHPIZE_DEPS} \
                && \
            apk add --no-cache --virtual .build-deps ${BUILD_DEPS} \
                && \
            apk add --no-cache \
                libpq \
    && \
      docker-php-ext-install -j $(getconf _NPROCESSORS_ONLN) \
        pcntl \
        pdo_pgsql \
    && \
      MAKEFLAGS="-j$(getconf _NPROCESSORS_ONLN)" pecl install \
        opentelemetry-1.0.3 \
    && \
      docker-php-ext-enable \
        opentelemetry \
    && \
      php -m \
    && \
      apk del --no-cache .phpize-deps .build-deps
