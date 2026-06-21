# Routing 101

## Episodio 3: Routing 101

En este episodio se introduce el concepto de rutas en Laravel, que son la forma en que se definen las URL de la aplicación y cómo se manejan las solicitudes HTTP. Se explica cómo crear rutas básicas, cómo pasar parámetros a las rutas y cómo utilizar controladores para manejar la lógica de las rutas.

### Definiendo Rutas Básicas

Para definir una ruta básica en Laravel, se utiliza el archivo `routes/web.php`. En este archivo, se pueden definir rutas utilizando el método `Route::get()`, que acepta dos parámetros: la URL de la ruta y una función anónima que devuelve una respuesta.

```php
    Route::get('/', function () {
        return view('welcome');
    });
```