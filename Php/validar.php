<?php
$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];
session_start();
$_SESSION['usuario']=$usuario;

$conex=mysqli_connect("localhost", "root", "", "registro");

$consulta="SELECT*FROM datos_re where usuario= '$usuario' and contrasena= '$contrasena' ";
$resultado=mysqli_query($conex,$consulta)

$filas=mysqli_num_rows($resultado);

if($resultado){
    hearder("location:principal.php");

}else{
    ?>
    <?php
    include("longi.php");
    ?>
    <h1>ERROR EN LA AUTENTIFICACION</h1>
    <?php
}
mysqli_free_result($resultado);
mysqli_close($conex);