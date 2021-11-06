<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

# Instalación en Windows

1-> Descargar proyecto 

`git clone git@github.com:avmusic1996/Mundofatcura.git`

2-> Descargar las dependencias 

`composer install` 

`npm install`

`npm run dev`

3-> Crear archivo `.env` para manejar las variables de entorno. Nota: agregar usuario y contrasena del motor de la base de datos en el archivo 

`cp .env.example .env`

`php artisan key:generate`

4-> crear la base de datos con nombre `   ` 

5-> Se migra la base de datos 

`php artisan migrate:install`

`php artisan migrate`

`php artisan db:seed`

6-> Listo! El proyecto esta configurado 

`php artisan serve`

# Recrear la base de datos 

1 -> Refrescar la migración de los modelos con información base de permisos, roles y usuario

`php artisan migrate:fresh --seed`


# Pruebas 

1-> Crear la base de datos para pruebas `touch database/database.sqlite`

2-> Correr todas las pruebas `php artisan test` o algunas que cumplan el filtro `php artisan test --filter test_name`
