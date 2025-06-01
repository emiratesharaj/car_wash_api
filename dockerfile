FROM php:8.2-fpm

# تثبيت الأدوات الأساسية + PHP Extensions
RUN apt-get update && apt-get install -y \
    git curl zip unzip libpng-dev libonig-dev libxml2-dev \
    && docker-php-ext-install pdo pdo_mysql mbstring exif pcntl bcmath gd

# تثبيت Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# نسخ ملفات المشروع
WORKDIR /var/www
COPY . .

# إعداد Laravel
RUN composer install --no-dev --optimize-autoloader \
    && cp .env.example .env \
    && php artisan key:generate

EXPOSE 8000
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]
