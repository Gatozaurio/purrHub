## Instrucciones de instalación

Para poder comenzar a utilizar correctamente la aplicación se deben seguir los siguientes pasos:

- Descargar o clonar el proyecto desde GitHub.
- Utilizar el comando **composer install** dentro del proyecto para crear las dependencias.
- Crear una base de datos vacía con el nombre **purrhubdb**.
- Configurar el archivo **.env** para establecer los datos de conexión a la base de datos (servidor, puerto, bs, usuario, contraseña).
- Escribir el comando **php artisan key:generate** para generar una clave de encriptación en el archivo anterior.
- Utilizar el comando **php artisan migrate** dentro del proyecto para crear las tablas necesarias en la base de datos.
- Utilizar el comando **valet park** dentro de la carpeta que contiene el proyecto.
- (Opcional) Podemos usar el comando **php artisan db:seed** para generar datos para utilizar la aplicación.

Una vez seguido los pasos anteriores podemos acceder al proyecto desde el navegador escribiendo el nombre del proyecto seguido de **.test** (Ejemplo: http://purrhub.test).