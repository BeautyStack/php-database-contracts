FROM php:8.0-cli
RUN apt-get update && \
    DEBIAN_FRONTEND=noninteractive apt-get install -y \
        git \
        unzip
RUN pecl install xdebug-3.1.5 \
	&& docker-php-ext-enable xdebug
COPY --from=composer /usr/bin/composer /usr/bin/composer