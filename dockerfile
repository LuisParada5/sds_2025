FROM php:8.2-apache

# Instalar extensiones PHP necesarias
RUN docker-php-ext-install pdo pdo_mysql mysqli 

# Habilitar mod_rewrite
RUN a2enmod rewrite

# Copiar tu proyecto dentro del contenedor
COPY . /var/www/html

# Establecer el DocumentRoot en /public
ENV APACHE_DOCUMENT_ROOT /var/www/html/public

# Actualizar las configuraciones de Apache para usar /public como raíz
RUN sed -ri -e 's!/var/www/html!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/sites-available/*.conf \
    && sed -ri -e 's!/var/www/!${APACHE_DOCUMENT_ROOT}!g' /etc/apache2/apache2.conf

# Configuración para permitir .htaccess
RUN printf "<Directory /var/www/html/public>\nOptions Indexes FollowSymLinks\nAllowOverride All\nRequire all granted\n</Directory>\n" \
    > /etc/apache2/conf-available/z-override.conf && a2enconf z-override

WORKDIR /var/www/html/public

EXPOSE 80
