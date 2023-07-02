<?php

include("con_db.php");

if (isset($_POST['register'])) {
    if(strlen($_POST['usuario']) >= 1 && strlen($_POST['contrasena']) >= 1 ) {
        $usuario = trim($_POST['usuario']); 
        $contrasena = trim($_POST['contrasena']);       
        $fecharegistro = date("d/m/y");
        $consulta = "INSERT INTO datos_registro(nombre, apellidos, email, dui, contrasena, genero, fecha_registro) 
        VALUES ('$name','$apellidos','$email', '$dui','$contrasena','$genero','$fecharegistro')";
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