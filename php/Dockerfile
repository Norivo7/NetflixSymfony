FROM php:8.3-fpm-bullseye

# Install dependencies
RUN apt update \
    && apt install -y zlib1g-dev g++ git libicu-dev zip coreutils yarn libzip-dev npm curl \
    && docker-php-ext-install intl opcache pdo pdo_mysql \
    && pecl install apcu \
    && docker-php-ext-enable apcu \
    && docker-php-ext-configure zip \
    && docker-php-ext-install zip
    
# Install npm
RUN npm install npm@latest -g && \
    npm install n -g && \
    n latest

WORKDIR /var/www/symfony_docker/app

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Install Symfony CLI
RUN curl -sS https://get.symfony.com/cli/installer | bash \
    && mv /root/.symfony5/bin/symfony /usr/local/bin/symfony
    
    
# Increase PHP memory limit
RUN echo 'memory_limit = 2048M' >> /usr/local/etc/php/conf.d/docker-php-memlimit.ini

EXPOSE 80


