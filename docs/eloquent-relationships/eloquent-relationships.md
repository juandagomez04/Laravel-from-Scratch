## Episodio 16: Eloquent Relationships

### Resumen
En este episodio definí las relaciones entre los modelos Idea y User usando
Eloquent. Se refactorizó el controlador para aprovechar estas relaciones y
simplificar las consultas a la base de datos.

### Archivos modificados
- app/Models/Idea.php
- app/Models/User.php
- app/Http/Controllers/IdeaController.php
- app/Http/Requests/IdeaRequest.php

### Evidencia
![01 - Idea.php con belongsTo User](../img/episodio16-01.png)
![02 - User.php con hasMany Idea](../img/episodio16-02.png)
![03 - IdeaController index con Auth::user()->ideas](../img/episodio16-03.png)
![04 - IdeaController store con Auth::user()->ideas()->create()](../img/episodio16-04.png)
![05 - IdeaRequest con authorize true y rules](../img/episodio16-05.png)
![06 - Ideas del usuario en el navegador](../img/episodio16-06.png)

### Comentarios
Se comprendió la diferencia entre belongsTo y hasMany en Eloquent. Se aprendió
a acceder a relaciones como propiedad ($idea->user) y como método ($user->ideas())
para construir queries. Se simplificó el código del controlador usando las
relaciones en lugar de queries manuales con where().