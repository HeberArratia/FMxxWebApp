# FMxx App

## Acerca de FMxx App

Contiene un landing page que muestra las principales características de FMxx en conjunto con una aplicación construida sobre el framwork Laravel, que permite compartir modelos entre usuarios registrados.

## ¿Qué es FMxx?

Presenta un modelamiento de la variabilidad en lineas de producto de software usando diagramas de características.

## Apoya

El proyecto se mantiene a través de el Departamento de Computación e Informática de la Universidad de La Frontera.

## Deploy

Debe existir el entorno LAMP con todos los paquetes actualizados.

### Configurar entorno

#### Actualizar paquetes Ubuntu

```
sudo apt-get update
```

#### Instalar apache

```
sudo apt-get install apache2
```

#### Instalar MySQL con paquetes adicionales

```
sudo apt-get install mysql-server libapache2-mod-auth-mysql php5-mysql
```

#### Acceder a MySQL y crear BD

```
mysql -u root -p
create database fmxxdb;
exit
```

#### Instalar PHP5 y mcrypt

```
sudo apt-get install php5 libapache2-mod-php5 php5-mcrypt
```

#### Instalar curl

```
sudo apt-get install php5-curl
```

#### Instalar Composer vía Curl

```
curl -sS http:://getcomposer.org/installer | php
```

#### Mover Composer (hacerlo global)

```
sudo mv composer.phar /usr/local/bin/composer
```

#### Verificar

```
cd /var/www/html/
sudo nano info.php

<?php
	phpinfo();
?>
```

#### Regresar el home

```
cd /home/username/
```

#### Activar modulo de sobreescritura

```
sudo a2enmod rewrite
service apache 2 restart
```

#### Instalar UNZIP

```
sudo apt-get install unzip
```

### Configurar proyecto

#### Descargar proyecto

**Con git instalado:**

En la ruta "/var/www/html"

```
git clone https://github.com/HeberArratia/FMxxWebApp.git
```

Ejecutar sobre el proyecto clonado:

```
composer install
```

**Sin git, podemos traer de máquina local:**

En máquina local

```
scp nombreproyecto.zip user@ip:/hombre/user
```

En máquina remota.
Mover proyecto

```
sudo mv /var/www/html proyecto.zip
```

Descomprimir

```
cd /var/www/html
sudo unzip proyecto.zip
```

#### Dar permisos a app

```
sudo chmod -R 755 proyecto
sudo chmod -R 777 proyecto/storage/
sudo chmod -R 777 proyecto/public/models
```
#### Configurar apache

```
sudo nano /etc/apache2/sites-enabled/000-default.conf
```

En document root configuramos la ruta de nuestra app.

```
DocumentRoot /var/www/html/laravel/public
```

Creamos directorio

```
<Directory /var/www/html/laravel/public>
	AllowOverrride all
	RewriteEngine on
	RewriteEngine On
	ReweiteBase /var/www/html/laravel/public
</Directory>
```

Guardamos

Reiniciamos apache

```
service apache 2 restart
```

(*) Si error: seguir video

#### Generar nueva llave

Posicionados sobre el proyecto

```
php artisan key:generate
```

En caso de error.

```
sudo chmod -R 777 laravel
```

###¢ Configurar .env

Es importante configurar en este archivos los datos de conexión con nuestra base de datos.

### Migraciones

```
php artisan migrate
```

### Optimizar proyecto

```
php artisan optimize 
```


