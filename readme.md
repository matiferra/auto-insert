# Auto Insert

## Descripción

Auto Insert es un proyecto desarrollado en PHP que facilita la gestión y automatización de procesos relacionados con la conexión a bases de datos, sesiones de usuario y otras operaciones comunes. El objetivo principal del proyecto es simplificar tareas repetitivas mediante la implementación de scripts reutilizables. Una especie de "Filezilla"

## Características

- **Gestión de Sesiones**: Creación, manejo y eliminación de sesiones de usuario.
- **Conexión a Base de Datos**: Configuración centralizada para conectar con bases de datos.
- **Funciones Reutilizables**: Conjunto de funciones auxiliares para tareas comunes.
- **Organización Modular**: Estructura de carpetas que separa la lógica en controladores, modelos y otros recursos.

## Estructura del Proyecto

- **DB/**: Contiene archivos relacionados con la configuración o inicialización de la base de datos.
- **archivos/**: Almacena archivos adicionales necesarios para el funcionamiento del proyecto.
- **conection/**: Maneja las configuraciones y conexiones a la base de datos.
- **modelos/**: Define los modelos de datos que representan la estructura de las entidades del sistema.
- **crearSesiones.php**: Script para crear y gestionar sesiones de usuario.
- **functions.php**: Incluye funciones auxiliares y reutilizables.
- **index.php**: Punto de entrada principal para la aplicación.
- **quit.php**: Finaliza sesiones o ejecuta acciones de cierre.

## Instalación

1. **Clonar el repositorio**:
   ```bash
   git clone https://github.com/matiferra/auto-insert.git
