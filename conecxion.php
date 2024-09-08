

<?php
// Datos de conexión
$host = "localhost";
$usuario = "root";
$password = ""; // Deja esto vacío si no tienes contraseña configurada para el usuario 'root'
$basedatos = "clinicadb";

// Conectar a la base de datos
$conexion = mysqli_connect($host, $usuario, $password, $basedatos);

// Verificar si la conexión fue exitosa
if (!$conexion) {
    die("Error de conexión: " . mysqli_connect_error());
}
?>

