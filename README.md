# app-usuarios-seminario-codeigniter
Una aplicación tipo CRUD que permite crear, modificar y eliminar usuarios utilizando el patrón MVC con CodeIgniter 3. La aplicación realiza operaciones de persistencia, trabajo con formularios, uso de helpers, y routing.



## ¿Como correr la aplicación?

Primero, debés tener instalados los servicios Apache y MySQL. Podés instalar
- XAMPP
- WAMPP
O mismo, correrlo desde alguna distribución de linux, escribiendo el siguiente comando:
```
sudo su
service apache2 start && service mysql start
```
Una vez iniciados los servicios, ubicamos esta carpeta en `www/` o `htdocs/`. Por favor seguir los siguientes pasos:
- Descargar un proyecto vacío desde la página oficial de CodeIgniter 3.
- Copiar la carpeta `system` y pegarla dentro de `seminario/`.

Por último, debemos crear la base de datos. Por eso, creá un esquema de base de datos en `phpmyadmin` o directo desde la terminal ejecutando:
```
mysql -u root -p
```
Una vez ingresada la contraseña, y dentro de mysql, ejecutar el siguiente código:
```
CREATE SCHEMA seminario;
CREATE table IF NOT EXISTS users(id NOT NULL PRIMARY KEY AUTO_INCREMENTAL, username VARCHAR(100) NOT NULL, password VARCHAR(255) NOT NULL, email VARCHAR(100) NOT NULL);
```
Una vez configurado eso, podremos ejecutar correctamente la aplicación ingresando en la url de nuestro navegador:
```
http://localhost/seminario/users/
```
