# Task App

Task App es una aplicación web para gestionar tareas, construida con el framework Laravel.

## Características

- Registro y autenticación de usuarios
- Creación, edición y eliminación de tareas
- Búsqueda de tareas por título o estado

## Requisitos

- PHP ^8.1
- Composer
- Node.js y npm

## Instalación

1. Clona el repositorio:

    ```sh
    git clone https://github.com/edisawer/task-app.git
    cd task-app
    ```

2. Instala las dependencias de PHP:

    ```sh
    composer install
    ```

3. Instala las dependencias de Node.js:

    ```sh
    npm install
    ```

4. Copia el archivo de entorno y configura las variables necesarias:

    ```sh
    cp .env.example .env
    php artisan key:generate
    ```

5. Configura la base de datos en el archivo [.env] y luego ejecuta las migraciones:

    ```sh
    php artisan migrate
    ```

6. Compila los assets:

    ```sh
    npm run dev
    ```

7. Inicia el servidor de desarrollo:

    ```sh
    php artisan serve
    ```

## Uso

Accede a la aplicación en tu navegador en `http://localhost:8000`.
