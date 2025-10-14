#Imagen base con Apache + PHP
FROM php:8.2-apache

#Copiar el contenido del proyecto al servidor web
COPY . /var/www/html/

# Dar permisos
RUN chown -R www-data:www-data /var/www/html

