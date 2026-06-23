## Episodio 13: A Brief DaisyUI Detour

### Resumen
En este episodio integré DaisyUI como librería de componentes visuales sobre
Tailwind CSS para mejorar la apariencia del sitio. Se crearon componentes
reutilizables para la navegación y las cards de ideas, y se aplicaron estilos
a los formularios y botones usando las clases de DaisyUI.

### Actividades realizadas
- Agregué DaisyUI y Tailwind CSS vía CDN en `layout.blade.php` y configuré
  el tema `dark` en la etiqueta `<html>`.
- Creé el componente `nav.blade.php` con el navbar de DaisyUI con enlaces a
  Home y New Idea, y lo integré en el layout con `<x-nav />`.
- Agregué `max-w-3xl mx-auto mt-6` al `<main>` del layout para centrar el
  contenido.
- Actualicé `index.blade.php` con un grid de dos columnas usando las clases
  `grid grid-cols-2 gap-6 gap-y-4` y envolví cada idea en una card de DaisyUI.
- Creé el componente reutilizable `idea-card.blade.php` usando `$attributes->merge`
  para el href y `$slot` para el contenido.
- Estilicé `create.blade.php` usando la clase `textarea w-full` y agregué
  `textarea-error` dinámicamente con `@error` para mostrar borde rojo en
  errores de validación.
- Actualicé el botón de `create.blade.php` con la clase `btn btn-primary mt-4`.
- Estilicé `edit.blade.php` con `textarea w-full`, botón Update con
  `btn btn-primary` y botón Delete con `btn btn-warning`.

### Capturas
![01 - layout.blade.php con CDN de DaisyUI y data-theme dark](img/episodio13-01.png)
![02 - nav.blade.php con navbar de DaisyUI](img/episodio13-02.png)
![03 - layout.blade.php con x-nav y main centrado](img/episodio13-03.png)
![04 - index.blade.php con grid y cards](img/episodio13-04.png)
![05 - idea-card.blade.php componente reutilizable](img/episodio13-05.png)
![06 - index.blade.php usando x-idea-card](img/episodio13-06.png)
![07 - create.blade.php con textarea y btn estilizados](img/episodio13-07.png)
![08 - Formulario create estilizado en el navegador](img/episodio13-08.png)
![09 - Formulario create con error de validación y borde rojo](img/episodio13-09.png)
![10 - edit.blade.php con botones estilizados](img/episodio13-10.png)