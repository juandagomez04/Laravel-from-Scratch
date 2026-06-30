# Laravel From Scratch 2026

Proyecto desarrollado como parte del curso ISW811 - Aplicaciones Web con Software Libre.

## Requisitos
- PHP 8.2 o superior
- Composer
- MariaDB
- Node.js (opcional, para compilar assets)

## Instalación

1. Clonar el repositorio:
git clone <url-del-repositorio>

cd lfts.isw811.xyz

2. Instalar dependencias:
composer install

3. Copiar el archivo de configuración:
cp .env.example .env

4. Generar la clave de la aplicación:
php artisan key:generate

5. Configurar la base de datos en `.env`:
DB_CONNECTION=mysql

DB_HOST=127.0.0.1

DB_PORT=3306

DB_DATABASE=lfts

DB_USERNAME=larauser

DB_PASSWORD=secret

6. Ejecutar las migraciones:
php artisan migrate

7. Iniciar el servidor:
php artisan serve

8. Visitar en el navegador:
http://localhost:8000/ideas

## Comandos útiles del proyecto

Compilar assets de Vite (requiere NODE_PATH configurado en la VM):
NODE_PATH=/tmp/lfts-npm/node_modules /tmp/lfts-npm/node_modules/.bin/vite build

Ejecutar el watcher de Vite en desarrollo:
NODE_PATH=/tmp/lfts-npm/node_modules /tmp/lfts-npm/node_modules/.bin/vite

Ejecutar el worker de colas (necesario para notificaciones encoladas):
php artisan queue:work

Ejecutar pruebas con Pest:
./vendor/bin/pest

Formatear código (Rector + Pint):
composer run format

## Episodios documentados

Los episodios del 1 al 16 están documentados en la carpeta `docs/`.

Los episodios 17 al 21 agregan:
- Episodio 17: Authorization Using Gates
- Episodio 18: Authorization Using Policies
- Episodio 19: Frontend Asset Bundling with Vite
- Episodio 20: Notifications
- Episodio 21: When to Queue it Up

Toda la documentación detallada de cada episodio se encuentra en `docs/`.
