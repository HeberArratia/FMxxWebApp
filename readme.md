# FMxx App

## Acerca de FMxx App

Contiene:

- Landing page que muestra las principales características de FMxx.
- Aplicación construida sobre el framework Laravel que permite compartir modelos (en diferentes versiones del mismo) entre usuarios registrados y sus equipos.

## ¿Qué es FMxx?

Presenta un modelamiento de la variabilidad en líneas de producto de software usando diagramas de características.

## Herramientas utilizadas

Básicamente, la aplicación se encuentra construida bajo el framework Laravel 5.3, implicando todas las dependencias propias de tal herramienta. 

Laravel 5.3 se encuentra bajo la licencia MIT.

## Instalación

### Requisitos del servidor

- PHP between 5.6.4 & 7.1.*
- OpenSSL PHP Extension
- PDO PHP Extension
- Mbstring PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension

### Instalar composer

Seguir instrucciones para la [instalación de composer.](https://getcomposer.org/doc/00-intro.md).

### Generar base de datos

De forma predeterminada, la aplicación viene configurada para ser utilizada con el motor de bases de datos MySQL configurado con los siguientes parámetros:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=dbfmxxapp
DB_USERNAME=root
DB_PASSWORD=
```

Por lo tanto, es necesario tener funcionando el motor de bases de datos ya habiendo creado la base de datos nombrada "dbfmxxapp".

Estos parámetros pueden ser reconfigurados en el archivo ".env" ubicado en la raíz del proyecto.

* Es posible utilizar otros motores de bases de datos, como lo es PostgreSQL. *

### Instalar dependencias

Posicionados sobre la raíz del proyecto en la terminal, ejecutar:

```composer install```

### Generar base de datos

Para generar la estructura de la base de datos, ejecutar:

```php artisan migrate```

### Generar datos de prueba

Se generarán datos para los usuarios de la aplicación, para ello ejecutar:

```php artisan db:seed```

### Ejecutar la aplicación

Sobre la raíz del proyecto:

```
php artisan serve
```

### Deploy

Para levantar la aplicación en producción, se deben seguir las instrucciones recomendadas dentro de la [documentación de Laravel](https://laravel.com/docs/5.6/deployment).






