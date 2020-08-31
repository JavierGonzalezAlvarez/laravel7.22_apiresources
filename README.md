Api en laravel
Php 7.22.4

Servidor local
----------------------
php artisan serve

Creacion de la base de datos desde mysql:
--------------------------------------------
create database shop_bamleys collate utf8mb4_general_ci character set utf8mb4;

Migraciones
------------------------
php artisan cache:clear
php artisan migrate

Roolback migraciones
-------------------------------
php artisan migrate:refresh


Rutas
---------------
Prefijo: /api
Ejemplo:
http://127.0.0.1:8001/api/post_formulario