<?php

include("con_db_2.php");

if (isset($_POST['register'])) {
    if(strlen($_POST['nombre']) >= 1 && strlen($_POST['email']) >= 1 && 
        strlen($_POST['dui']) >= 1 && strlen($_POST['contrasena']) >= 1 && strlen($_POST['genero']) >= 1 ) {
        $nombre = trim($_POST['nombre']);
        $email = trim($_POST['email']);
        $dui = trim($_POST['dui']);
        $contrasena = trim($_POST['contrasena']);
        $genero = trim($_POST['genero']);
        $fecharegistro = date("d/m/y");
        $consulta = "INSERT INTO datos_re(nombre, email, dui, contrasena, genero, fechaRegistro) 
        VALUES ('$nombre','$email','$dui','$contrasena', '$genero','$fecharegistro')";
        $resultado = mysqli_query($conex,$consulta);
        if ($resultado) {
            ?>
            <h3 class="ok">¡Te has inscrito correctamente! </h3>
            <?php
        } else {
            ?>
            <h3 class="bad">¡Ups ha ocurrido un ERROR! </h3>
            <?php
        }  
    }   else {
        ?>
        <h3 class="bad">¡Por favor complete los campos! </h3>
        <?php
    }
}
?>