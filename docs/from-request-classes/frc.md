## Episodio 12: Form Request Classes

### Resumen
En este episodio aprendí a extraer la lógica de validación del controlador hacia
una clase dedicada llamada Form Request. Esta clase permite centralizar tanto la
autorización como las reglas de validación, y Laravel la ejecuta automáticamente
sin necesidad de llamar a validate() en el controlador.

### Actividades realizadas
- Generé la clase `StoreIdeaRequest` con el comando
  `php artisan make:request StoreIdeaRequest`.
- Configuré el método `authorize()` para retornar `true` y el método `rules()`
  con las reglas `required` y `min:10` para el campo `description`.
- Reemplacé `Request $request` por `StoreIdeaRequest $request` en el método
  `store` del `IdeaController`, eliminando la llamada explícita a `validate()`.
- Verifiqué que la validación sigue funcionando desde el navegador.
- Creé la clase `IdeaRequest` para compartir las reglas entre `store` y `update`.
- Actualicé el método `update` del controlador para usar `IdeaRequest $request`.
- Agregué `<x-forms.error name="description" />` en `edit.blade.php`.

### Capturas
![01 - Comando make:request en terminal](img/episodio12-01.png)
![02 - StoreIdeaRequest con authorize() y rules()](img/episodio12-02.png)
![03 - Controlador con StoreIdeaRequest en store](img/episodio12-03.png)
![04 - Navegador mostrando error de validación](img/episodio12-04.png)
![05 - Controlador con IdeaRequest en update](img/episodio12-05.png)
![06 - edit.blade.php con x-forms.error](img/episodio12-06.png)