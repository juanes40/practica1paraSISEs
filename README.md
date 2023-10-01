### practica1paraSISEs

Este repositorio contiene el código y los recursos necesarios para llevar a cabo el Laboratorio de Servidor Web con ESP32 y el sensor DHT22. Esta práctica consta de tres puntos principales: la configuración del servidor web en el ESP32, el despliegue de una página web para mostrar la información del sensor y la inserción de datos en una base de datos MySQL. Además, se incluyen modificaciones opcionales para adaptar la funcionalidad según el proyecto en particular.

## Punto 1: Configuración del Servidor Web

En esta sección, aprenderás a configurar un servidor web en la placa ESP32 utilizando la biblioteca ESPAsyncWebServer. Esto te permitirá acceder a la información del sensor DHT22 a través de una interfaz web.

## Punto 2: Despliegue de la Página Web

Aquí, crearás una página web que mostrará la información enviada por la placa ESP32. La página se ejecutará en el propio ESP32 y se actualizará con los datos del sensor en tiempo real.

## Punto 3: Inserción de Datos en una Base de Datos MySQL

En esta práctica, aprenderás a crear un cliente ESP32 que enviará lecturas de sensores a un servidor PHP, el cual insertará los datos en una base de datos MySQL. Además, se incluirá una página web para visualizar las lecturas y la información de la base de datos.

### Configuración de la Base de Datos

1. Crea una base de datos utilizando phpMyAdmin y define un usuario y contraseña para ella.

2. Ejecuta el siguiente comando SQL para crear la tabla necesaria en la base de datos:

    ```sql
    CREATE TABLE SensorData (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    sensor VARCHAR(30) NOT NULL,
    location VARCHAR(30) NOT NULL,
    value1 VARCHAR(10),
    value2 VARCHAR(10),
    reading_time TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON
    UPDATE CURRENT_TIMESTAMP
    );
    ```

3. Coloca los scripts PHP necesarios, como `post-esp-data.php`, en la carpeta de tu servidor web local (por ejemplo, `c:/xampp/htdocs/Nombre_Del_Proyecto`).

## Modificaciones Adicionales (Opcionales)

### 3.1 Envío de Información Relacionada al Proyecto

Modificar el código para enviar información específica del proyecto a un servidor local y remoto. Cambiar el sensor DHT22 por un sensor relacionado con el proyecto y mostrar los últimos 5 registros de cada tarjeta utilizada. Esto implica almacenar datos localmente y luego enviarlos a un servidor público.

### 3.2 Consulta y Alerta de Parámetros de Configuración

Implementar la consulta de un parámetro de configuración en la base de datos desde la tarjeta ESP32. Si el parámetro alcanza ciertos valores o rangos, generar una alerta en el hardware del dispositivo. Asegurarse de que este parámetro y la alerta estén relacionados con el proyecto específico. Esta funcionalidad puede utilizarse con un servidor local o remoto.

### 3.3 Consulta y Modificación de Parámetros de Configuración a través de una Interfaz Web

Crear una interfaz web que permita consultar y modificar un parámetro de configuración almacenado en la base de datos. Cuando se modifique el valor y se confirme la actualización, asegurarse de que el cambio se refleje en la base de datos. Esta característica puede ser utilizada con un servidor local o remoto.

## Contribución

Si deseas contribuir o realizar mejoras a este laboratorio, siéntete libre de abrir problemas (issues) y enviar solicitudes de extracción (pull requests) en este repositorio.


