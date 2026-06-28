## Episodio 17: Authorization Using Gates

### Resumen
Se aprende a usar **Gates** de Laravel para autorización. Se define una regla
`view-admin` en el `AppServiceProvider`, se protege la ruta `/admin` con el
middleware `->can('view-admin')`, y se usa la directiva `@can` en Blade para
mostrar el enlace de administración solo a usuarios autorizados. Se agrega
además el método `isAdmin()` al modelo User para encapsular la lógica de
autorización.

### Comandos utilizados
```bash
php artisan tinker
# App\Models\User::create(['name' => 'Jane', 'email' => 'jane@test.com', 'password' => bcrypt('12345678')]);
php artisan cache:clear
php artisan view:clear
php artisan config:clear
```

### Archivos modificados
- `routes/web.php`
- `app/Providers/AppServiceProvider.php`
- `app/Models/User.php`
- `resources/views/components/nav.blade.php`

### Evidencia
![01 - Ideas sin enlace Admin para usuario común](img/episodio17-01.png)
![02 - Acceso concedido a /admin como Juanda](img/episodio17-02.png)
![03 - Ruta /admin en web.php con ->can('view-admin')](img/episodio17-03.png)
![04 - nav.blade.php con directiva @can('view-admin')](img/episodio17-04.png)
![05 - Acceso a /admin como admin confirmado](img/episodio17-05.png)
![06 - Ruta /admin sin proteccion ->can()](img/episodio17-06.png)
![07 - Error 403 para usuario sin permisos](img/episodio17-07.png)

### Comentarios
Laravel no ejecuta el closure del Gate si el usuario no está autenticado,
retorna false automáticamente. El método isAdmin() en el modelo User permite
encapsular la lógica de autorización y reutilizarla en cualquier parte del código.
Laravel retorna 403 "This action is unauthorized" cuando el Gate deniega el acceso.