Api en laravel
Php 7.22.4

Servidor local
----------------------
php artisan serve

Creacion de la base de datos desde mysql:
--------------------------------------------
create database laravelapi collate utf8mb4_general_ci character set utf8mb4;

Despues de un cambio de configuracion
----------------------------------------
php artisan cache:clear

Migraciones
------------------------
php artisan migrate

Roolback migraciones
-------------------------------
php artisan migrate:refresh

Rutas
---------------
Prefijo: /api
Ejemplo:
http://127.0.0.1:8001/api/post_formulario