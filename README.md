# Laboratorio 5 – Backend con Bases de Datos

## Universidad
Universidad Adventista de Bolivia

## Materia
Taller de Programación

## Estudiante
Juan Daniel Ancieta Toledo

## Descripción
En este laboratorio vamos a familiarizarnos con Laravel, su sintaxis y cómo trabajar con bases de datos usando Docker, SQL y Eloquent.

## Objetivos del laboratorio
- Entender el flujo de un CRUD en Laravel (**Create, Read, Update, Delete**).
- Implementar persistencia usando **MySQL** dentro de un contenedor **Docker**.
- Aprender a usar **Eloquent** para interactuar con la base de datos de manera elegante y segura.

## Conceptos clave
CRUD es un acrónimo que describe las operaciones básicas que podemos hacer sobre los datos:

- **C – Create (Crear):** Agregar un nuevo registro (ejemplo: tarea).  
- **R – Read (Leer):** Obtener uno o varios registros existentes.  
- **U – Update (Actualizar):** Modificar un registro existente.  
- **D – Delete (Eliminar):** Borrar un registro existente.  

## Pasos iniciales del proyecto
1. Crear el proyecto Laravel usando composer:  
   ```bash
   composer create-project laravel/laravel lab-laravel-mysql