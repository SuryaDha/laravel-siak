# Base image
FROM php:8.1-fpm

# Set working directory
WORKDIR /var/www

# Install dependencies
RUN apt-get update && apt-get install -y \
    build-essential \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    locales \
    zip \
    jpegoptim optipng pngquant gifsicle \
    vim \
    unzip \
    git \
    curl \
    && docker-php-ext-configure gd \
    --with-freetype=/usr/include/ \
    --with-jpeg=/usr/include/ \
    && docker-php-ext-install pdo pdo_mysql gd

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Copy existing application directory contents
COPY . /var/www

# Install Predis
RUN composer require predis/predis

# Set permissions and ownership
#RUN chmod -R 775 /var/www/storage /var/www/bootstrap/cache \
#    && chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

# Copy existing application directory permissions
COPY --chown=www-data:www-data . /var/www

# Set permissions and ownership
RUN chmod -R 775 /var/www/storage /var/www/bootstrap/cache \
    && chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache

# Change current user to www-data
USER www-data

# Expose port 9000 and start php-fpm server
EXPOSE 9000
CMD ["php-fpm"]
