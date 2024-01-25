# To-do App

### Arquitectura MCV
La aplicación implementa la arquitectura Modelo-Controlador-Vista, la cual divide la aplicación en tres segmentos: los modelos, donde la información es dividida en calses; el controlador, donde se realizan las queries a la base de datos; y las vistas, donde se imprime la interfaz de usuario.

### CRUD
La aplicación realiza un CRUD para las tareas, además de presentar la habilidad de subir y descargar imágenes, así como una pantalla de registro e inicio de sesión.

### Base de datos
El fichero SQL con la estructura de la base de datos se encuentra en el directorio raíz bajo el nombre de "database". Este está preparado para ser importando directamente desde la página de PhpMyAdmin. En adición, también se encuentran los ficheros PHP.

El resto de características son idénticas a su proyecto homólogo de Firebase.

## Corrección
Para la corrección de la aplicación, asegúrese de que cambia el valor de la variable DATABASE_URL de la clase DatabaseController a la IP de su servidor. 
Al preparar la base de datos, cambie los valores de la conexión de "connection.php" a la IP de su servidor (que probablemente sea localhost), el usuario, la contraseña y el nombre de la base de datos (por defecto, "kraTodoApp").
