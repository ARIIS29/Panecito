<?php
include 'config.php'; // Incluye las constantes de configuración

// Crear la conexión
$conexion = new mysqli(SERVIDOR, USUARIO, PASSWORD, BD);

// Verificar si hubo algún error en la conexión
if ($conexion->connect_error) {
    die("Error al conectar a la base de datos: " . $conexion->connect_error);
} else {
    // echo "Conexión exitosa a la base de datos '" . BD . "'.";
}
?>
