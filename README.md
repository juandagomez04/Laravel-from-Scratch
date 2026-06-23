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

## Episodios documentados

Los episodios del 1 al 16 están documentados en la carpeta `docs/`.