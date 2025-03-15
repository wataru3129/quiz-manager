FROM php:8.4-fpm-bullseye

WORKDIR /var/www/html

RUN apt-get update && \
  apt-get -y install curl git libicu-dev libonig-dev libzip-dev zip unzip locales vim && \
  apt-get clean && \
  rm -rf /var/lib/apt/lists/* && \
  locale-gen ja_JP.UTF-8 && \
  localedef -f UTF-8 -i ja_JP ja_JP.UTF-8 && \
  mkdir /var/run/php-fpm && \
  docker-php-ext-install intl pdo_mysql zip bcmath && \
  pecl install xdebug-3.4.1 && \
  docker-php-ext-enable xdebug

RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

RUN composer config -g process-timeout 3600 && \
  composer config -g repos.packagist composer https://packagist.org

RUN apt-get update && apt-get install -y \
  libfreetype6-dev \
  libjpeg62-turbo-dev \
  libpng-dev \
  && docker-php-ext-configure gd --with-freetype --with-jpeg \
  && docker-php-ext-install -j$(nproc) gd

RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd zip

COPY ./backend /var/www/html

RUN chown -R www-data:www-data /var/www/html

CMD ["php-fpm"]