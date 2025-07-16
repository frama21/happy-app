# install base step
FROM php:7.4-apache AS base
# Install dependencies
RUN apt-get update && apt-get install -y \
git \
curl \
zip \
unzip \
libzip-dev \
libonig-dev


# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring zip

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# install dependencies step
FROM base AS dependencies
WORKDIR /app
COPY . .
RUN composer install --no-dev --optimize-autoloader

# install deploy step
FROM base AS deploy
WORKDIR /app
COPY --from=dependencies /app ./

# Start the Laravel server
CMD ["php", "-S", "0.0.0.0:8000", "-t", "public"]
