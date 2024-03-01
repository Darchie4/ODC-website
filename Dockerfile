FROM php:8.2-fpm

# Arguments defined in docker-compose.yml
ARG user
ARG uid

# Install system dependencies and Composer
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip \
    nodejs \
    && curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Set working directory to the Laravel project directory
WORKDIR /var/www
RUN rm -rf html/

# Copy the Laravel application code (including artisan) to the working directory
COPY ./ ./ 
ENV COMPOSER_ALLOW_SUPERUSER=1

# Install project dependencies (vendor folder will be created)
RUN composer install --no-interaction --ignore-platform-reqs

ENV COMPOSER_ALLOW_SUPERUSER=0
# Create system user to run Composer and Artisan Commands
RUN useradd -G www-data,root -u $uid -d /home/$user $user

RUN chmod -R 777 ./storage
USER $user

CMD php artisan queue:work &; php artisan migrate:fresh --seed; npm run build; php artisan optimize:clear; php-fpm
