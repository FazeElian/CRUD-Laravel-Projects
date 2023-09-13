Comandos consola para la creación de un Proyecto Laravel con las funcionalidades de CRUD y con tablas relacionadas (Console commands for creating a Laravel Project with CRUD functionalities and related tables): 
<br><br>

1- Crear Proyecto: composer create-project laravel/laravel NombreProyecto (Create new Project)
<br>

2- Abrir servidor: php artisan serve (Start Server)
<br>

3- Crear migraciones para la creación de tablas: php artisan make:migration NombreMigracion (Create a new migration)
<br>

4- Crear Tablas de migraciones en gestor de bbdd - phpmyadmin: php artisan migrate (Migrate all migrations to database gestor)
<br>

5- Proceso de creación de archivos de autenticación de Usuarios: composer require laravel/ui (Creation of user auth files)
<br>

6- Creación de vistas automaticas de bootstrap para registro y autenticación de usuarios: php artisan ui bootstrap --auth (Creation of auto bootstrap views for users)
<br>

7- Instalación de paguetes de javascript para validaciones de usuarios: npm install (Installation of Javascript - Node Js packages to user validations)
<br>

8- Implementación de paquetes javascript para validaciones de usuarios: npm run dev (Start Javascript Node Js packages)
<br>

9- Generación de Modelo y Controlador para la creación de CRUD, este activa el comando "php artisan make:crud Modulo": composer require ibex/crud-generator --dev (Generation of Model and Controller to enable command for create CRUD)
<br>

10- Aplicación de configuraciones del CRUD en config:php artisan vendor:publish --tag=crud (Enabling of config of CRUD) 
<br>

11 Creación de vistas CRUD para cada módulo o migración: php artisan make:crud nombreModulo (Command for create a CRUD for some module)