FROM php:8.2-cli

WORKDIR /var/www

# Install system dependencies
RUN apt-get update && apt-get install -y \
   libpng-dev \
   libonig-dev \
   libxml2-dev \
   zip \
   unzip \
   libpq-dev \
   default-mysql-client

# Install PHP extensions
RUN docker-php-ext-install pdo pdo_mysql mysqli

# Optional: Install composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

CMD [ "php", "-S", "0.0.0.0:8000" ]