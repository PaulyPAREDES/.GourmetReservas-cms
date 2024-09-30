# Nombre del Proyecto
.GourmetReservas-cms

## Requisitos

- PHP 7.4 o superior
- MySQL 5.7 o superior
- Servidor web (Apache o Nginx)
- Instalación de WordPress

## Instalación

1) Clona el repositorio:

   ``` git clone https://github.com/tu_usuario/tu_repositorio.git ```.
   
3) Navega al directorio del proyecto:
  ```cd tu_repositorio ```
3) Crea una base de datos en tu servidor local usando phpMyAdmin.
4) Importa el archivo de la base de datos:

- Abre phpMyAdmin y selecciona tu base de datos.
 - Haz clic en la pestaña Importar y selecciona el archivo database/gourmet.sql.
5) Configura el archivo wp-config.php:
 - Abre wp-config.php y ajusta los detalles de conexión:
 ``` define('DB_NAME', 'nombre_de_tu_base_de_datos'); ```
 ```define('DB_USER', 'tu_usuario'); ```
 ``` define('DB_PASSWORD', 'tu_contraseña'); ```
 ``` define('DB_HOST', 'localhost');  ```
6) Accede al sitio en tu navegador:
 ```http://localhost/tu_proyecto ```

