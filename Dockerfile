# Imagen base de PHP con Apache
FROM php:7.4-apache

# Instala las extensiones necesarias
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Habilita mod_rewrite para que funcione .htaccess
RUN a2enmod rewrite

# Copia todo el contenido del proyecto a la carpeta web del contenedor
COPY . /var/www/html/

# Establece permisos (opcional pero ayuda)
RUN chown -R www-data:www-data /var/www/html/

# Expone el puerto 80
EXPOSE 80
