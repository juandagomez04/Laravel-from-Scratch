### Archivos modificados
- database/migrations/2026_06_22_213722_create_ideas_table.php
- bootstrap/app.php
- routes/web.php
- app/Http/Controllers/IdeaController.php

### Evidencia
![01 - Migración con foreignIdFor user](../img/episodio15-01.png)
![02 - migrate:fresh desde la VM](../img/episodio15-02.png)
![03 - web.php con grupos de middleware auth y guest](../img/episodio15-03.png)
![04 - bootstrap/app.php con redirectGuestsTo y redirectUsersTo](../img/episodio15-04.png)
![05 - IdeaController index filtrando por user_id](../img/episodio15-05.png)
![06 - IdeaController store con user_id de Auth::id()](../img/episodio15-06.png)
![07 - Ideas del usuario en el navegador](img/episodio15-07.png)

### Comentarios
Se comprendió el uso de middleware para proteger rutas y la diferencia entre
rutas de tipo auth y guest. Se aprendió a asociar registros a usuarios mediante
foreignIdFor y a filtrar consultas con where() para garantizar privacidad de datos.