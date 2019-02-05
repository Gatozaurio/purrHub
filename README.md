# PurrHub

- [Instalación del proyecto](#Instalación-del-proyecto)
- [Interfaces](#Interfaces)



## 

## Instalación del proyecto

Para poder comenzar a utilizar correctamente la aplicación se deben seguir los siguientes pasos:

- Descargar o clonar el proyecto desde GitHub.
- Utilizar el comando **composer install** dentro del proyecto para crear las dependencias.
- Crear una base de datos vacía con el nombre **purrhubdb**.
- Configurar el archivo **.env** para establecer los datos de conexión a la base de datos (servidor, puerto, bd, usuario, contraseña).
- Escribir el comando **php artisan key:generate** para generar una clave de encriptación en el archivo anterior.
- Utilizar el comando **php artisan migrate** dentro del proyecto para crear las tablas necesarias en la base de datos.
- Utilizar el comando **valet park** dentro de la carpeta que contiene el proyecto.
- (Opcional) Podemos usar el comando **php artisan db:seed** para generar datos para utilizar la aplicación.

Una vez seguido los pasos anteriores podemos acceder al proyecto desde el navegador escribiendo el nombre del proyecto seguido de **.test** (Ejemplo: http://purrhub.test).





## Interfaces

* Un css generado por sass dónde se utilice lo siguiente (1.3 puntos):

  ​	*resources/sass/formularios/formulario.scss*

  * Partials  (0.2 puntos) 
  * Herencia  (0.2 puntos)
  * Mixins  (0.2 puntos)
  * Funciones  (0.2 puntos)
  * Alguna estructura de control  (0.2 puntos(0.1 punto por cada estructura))
  * Usar variables  (0.2 puntos)
  * Usar lista o mapas (0.1 puntos)

* Bootstrap:
  * Usar un contenedor que aplique diferentes tamaños de columnas dependiendo cada uno de los responsive breakpoints de bootstrap. (0.2 puntos)

    *Columnas de los cards de concierto* **(??????????)**

  * Utilidad de borde. (0.2 puntos)

    *Botones de los cards de concierto*

  * Aplicar un margen y padding distinto a un elemento dependiendo de los responsive breakpoints. (0.2)

    *Botones de los cards de concierto*  **(??????????)**

  * Utilidades de  texto (0.2 puntos)

    *Headers de las cards*

  * Uitlidades de Imagenes (0.2 puntos)

    *Imágenes de las cards* **(??????????)**

  * Utilidades de embed (0.2 puntos)

  * Utilidad de visibilidad (0.2 puntos)

  * Tablas (0.2 puntos)

  * Incluir iconos soportados por bootstrap. (0.2 puntos)

    *Iconos en varios sitios de la aplicación*