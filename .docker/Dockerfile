FROM php:8.3-alpine

RUN apk add --no-cache \
    curl \
    curl-dev \
    libzip-dev \
    linux-headers \
    pcre-dev \
    git \
    unzip \
    ${PHPIZE_DEPS}

RUN pecl install xhprof

RUN docker-php-ext-configure curl
RUN docker-php-ext-configure zip

RUN docker-php-ext-install \
    opcache \
    curl \
    pcntl \
    sockets \
    zip \
    pdo \
    pdo_mysql

RUN docker-php-ext-enable \
    xhprof \
    opcache

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

WORKDIR /app

EXPOSE 8000

# Don't set CMD here, let docker-compose override it
# CMD php artisan serve --host=0.0.0.0 --port=8000
