# Proyecto Inventario PHP

Este proyecto es una aplicación de práctica que implementa el patrón Modelo-Vista-Controlador (MVC) utilizando PHP y MySQL, diseñada para la gestión de inventarios de un emprendimiento.

## Estructura del Proyecto

* **controller/**: Contiene los controladores que gestionan la lógica de negocio y la comunicación entre el modelo y la vista.
* **model/**: Incluye las definiciones de los modelos que interactúan con la base de datos para manejar los datos de inventario.
* **view/**: Alberga las vistas que presentan la información al usuario de manera interactiva.
* **config.php**: Archivo de configuración para establecer parámetros como las credenciales de la base de datos.
* **index.php**: Punto de entrada principal de la aplicación.

## Requisitos

* Servidor web compatible con PHP (por ejemplo, Apache).
* PHP instalado (recomendada desde V. 7 en adelante, de preferencia 8).
* Servidor de base de datos MySQL.

## Instalación

1. **Clonar el repositorio**:

```bash
git clone https://github.com/hectorgm26/proyecto-inventario-php.git
```

2. **Configurar la base de datos**:
   * Crear una base de datos en MySQL para el proyecto.
   * Importar el esquema de la base de datos desde el archivo `database/schema.sql` (si está disponible).

3. **Configurar el archivo `config.php`**:
   Edite el archivo `config.php` para establecer las credenciales de la base de datos y otros parámetros de configuración según su entorno.

4. **Desplegar la aplicación**:
   Coloque los archivos del proyecto en el directorio raíz de su servidor web y acceda a `http://localhost/proyecto-inventario-php` desde su navegador.

## Uso

La aplicación permite realizar las siguientes operaciones:

* Agregar nuevos productos al inventario.
* Actualizar información de productos existentes.
* Eliminar productos del inventario.
* Visualizar una lista de todos los productos en el inventario.

## Contribuciones

Este proyecto se desarrolló con fines educativos y de práctica. Las contribuciones son bienvenidas. Para proponer cambios, por favor, cree un "fork" del repositorio y envíe una solicitud de extracción ("pull request").

## Licencia

Este proyecto se distribuye bajo la licencia MIT. Consulte el archivo `LICENSE` para más detalles.
