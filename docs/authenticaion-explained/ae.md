## Episodio 14: Authentication Explained

### Resumen
En este episodio implementé el sistema de autenticación de Laravel desde cero.
Se crearon controladores dedicados para el registro de usuarios y el manejo de
sesiones, con sus respectivas vistas y rutas. También se actualizó la navegación
para mostrar opciones diferentes según el estado de autenticación del usuario.

### Comandos utilizados
php artisan make:controller Auth/RegisteredUserController

php artisan make:controller Auth/SessionsController

### Archivos modificados
- routes/web.php
- app/Http/Controllers/Auth/RegisteredUserController.php
- app/Http/Controllers/Auth/SessionsController.php
- resources/views/auth/register.blade.php
- resources/views/auth/login.blade.php
- resources/views/components/nav.blade.php

### Evidencia
![01 - Rutas de autenticación en web.php](../img/episodio14-01.png)
![02 - RegisteredUserController con create y store](../img/episodio14-02.png)
![03 - Vista register.blade.php](../img/episodio14-03.png)
![04 - Formulario de registro en el navegador](../img/episodio14-04.png)
![05 - SessionsController completo](../img/episodio14-05.png)
![06 - Vista login.blade.php](../img/episodio14-06.png)
![07 - Formulario de login en el navegador](../img/episodio14-07.png)
![08 - nav.blade.php con @guest y @auth](../img/episodio14-08.png)
![09 - Ideas con sesión activa y botón Logout](../img/episodio14-09.png)

### Comentarios
Se implementó autenticación manual sin paquetes externos. Se comprendió el uso
de Auth::login(), Auth::attempt(), Auth::logout() y las directivas @guest y
@auth para controlar la navegación según el estado de sesión del usuario.