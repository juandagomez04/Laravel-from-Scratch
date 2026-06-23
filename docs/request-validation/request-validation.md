## Episodio 11: Request Validation

### Resumen
En este episodio aprendí a implementar validación de formularios en Laravel, tanto
a nivel del controlador como en las vistas. Se exploraron diferentes formas de
mostrar errores de validación y se creó un componente reutilizable para los mensajes
de error.

### Actividades realizadas
- Agregué validación server-side en el método `store` del `IdeaController` usando
  `$request->validate()` con las reglas `required` y `min:10` para el campo
  `description`.
- Verifiqué que Laravel redirige automáticamente al formulario cuando la validación
  falla.
- Mostré errores de validación usando `$errors->has()` con un mensaje genérico
  "There was an error."
- Mejoré el mensaje usando `$errors->first('description')` para mostrar el error
  específico del campo.
- Simplifiqué el código usando la directiva `@error('description')` / `@enderror`
  con la variable `$message`.
- Creé el componente reutilizable `resources/views/components/forms/error.blade.php`
  con un prop `name` para usarlo en cualquier campo del formulario.
- Reemplacé el bloque `@error` en `create.blade.php` por `<x-forms.error
  name="description" />`.

### Capturas
![01 - Validación en IdeaController](img/episodio11-01.png)
![02 - Formulario con letra Q enviada](img/episodio11-02.png)
![03 - Formulario vacío enviado sin error visible](img/episodio11-03.png)
![04 - Vista create.blade.php con @if y mensaje genérico](img/episodio11-04.png)
![05 - Navegador mostrando "There was an error."](img/episodio11-05.png)
![06 - Vista con $errors->first() mostrando mensaje específico](img/episodio11-06.png)
![07 - Navegador mostrando "The description field is required."](img/episodio11-07.png)
![08 - Vista con directiva @error / @enderror](img/episodio11-08.png)
![09 - Componente error.blade.php creado](img/episodio11-09.png)
![10 - Vista usando x-forms.error](img/episodio11-10.png)
![11 - Navegador con componente funcionando](img/episodio11-11.png)