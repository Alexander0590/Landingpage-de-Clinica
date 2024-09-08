<?php
include("conecxion.php");
//enviar a la base de datos
if(isset($_POST['enviar'])) {

    if(
        strlen($_POST['name']) >= 1 &&
        strlen($_POST['telf']) >= 1 &&
        strlen($_POST['email']) >= 1 &&
        strlen($_POST['mensaje']) >= 1 

    ) {
        $name= trim($_POST['name']);
        $telf= trim($_POST['telf']);
        $email= trim($_POST['email']);
        $mensaje= trim($_POST['mensaje']);
        $consulta = "INSERT INTO datos_la (nombre, telefono, email, mensaje)
        VALUE ('$name','$telf','$email','$mensaje') ";
        $resultado= mysqli_query($conexion, $consulta);

    
        
    
    }
}

?>