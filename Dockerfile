# Imagen base de PHP con Apache
FROM php:7.4-apache

# Copia todo el contenido del proyecto a la carpeta web del contenedor
COPY . /var/www/html/

# Habilita mod_rewrite para que funcione .htaccess
RUN a2enmod rewrite

# Establece permisos (opcional pero ayuda)
RUN chown -R www-data:www-data /var/www/html/

# Expone el puerto 80
EXPOSE 80
