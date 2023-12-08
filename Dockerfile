# Use the official PHP image as base image
FROM php:8.1-fpm

# Set the working directory
WORKDIR /var/www/html

# Install dependencies
RUN apt-get update && apt-get install -y \
    libzip-dev \
    unzip

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql zip

# Install Composer globally
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copy the application files to the container
COPY . .

# Install project dependencies
RUN composer install --optimize-autoloader --no-dev

# Expose port 9000 to Nginx
EXPOSE 9000

# Start the PHP-FPM server
CMD ["php-fpm"]
