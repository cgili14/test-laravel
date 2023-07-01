
# Test Laravel

Proyecto que consiste en la creacion de un ABM de dos tablas, una de ciudades y la otra de provincias.
Además se creó un endpoint tokenizado /api/ciudades que devuelve el listado de ciudades en formato JSON


## Comandos

Realiza un migrate:fresh y corre el seed que carga ciudades y provincias a partir de un archivo json que contiene todas las provincias y ciudades argentinas
```bash
  php artisan init
```
    
Crea la ciudad con los datos otorgados, en caso de no existir la provincia se creará.
```bash
  php artisan create:ciudad NombreCiudad NombreProvincia
```


## API Reference

La API está protegida con un bearer token definido en el .env del proyecto.

#### Obtiene todas las ciudades en formato JSON

```http
  GET /api/ciudades
```
