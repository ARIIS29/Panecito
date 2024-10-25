<?php
include 'config.php'; // Incluye las constantes de configuración

function Conectar() {
    $conn = mysqli_connect(SERVIDOR, USUARIO, PASSWORD, BD);

    // Verificar si la conexión fue exitosa
    if (!$conn) {
        die("Error al conectarse a la base de datos: " . mysqli_connect_error());
    }

    // echo "Conexión exitosa a la base de datos '" . BD . "'.<br>";
    return $conn;
}
?>
