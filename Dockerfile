FROM php:8.2-apache

# 1. Instala dependências do sistema necessárias para o Laravel e Composer
RUN apt-get update && apt-get install -y \
    libzip-dev \
    zip \
    unzip \
    git \
    curl

# 2. Instala as extensões do PHP
RUN docker-php-ext-install pdo_mysql zip

# 3. Configura o Apache para apontar para a pasta /public do Laravel
ENV APACHE_DOCUMENT_ROOT /var/www/html/public
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf

# 4. Habilita o mod_rewrite (Necessário para as rotas do Laravel)
RUN a2enmod rewrite

# 5. Instala o Composer direto da imagem oficial
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer