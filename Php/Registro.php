<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Sesiónes 2</title>
    <link rel="stylesheet" href="../Style-es/style-sesion-2.css">
    <link rel="icon" href="../Img-es/logo4.png">
</head>
<body>

    <div id="contenedor-carga">
        <div id="carga"></div>
    </div>

    <form method="POST" action="" class="form-sesion" >
        <div>
            <img src="../Img-es/logo4.png" class="logi">
        </div>
        <input class="controles" type="text" name="nombre" placeholder="Nombr completo...">
        <input class="controles" type="email" name="email" placeholder="Correo Electronico...">
        <input class="controles" type="text" name="dui" placeholder="DUI...">
        <input class="controles" type="password" name="contrasena" value="" placeholder="Contraseña...">
        <label for="genero" class="sexo-text">Genero</label>
        <select name="genero" id="genero" class="sexo-es">
        <option></option>
        <option>Hombre</option>
        <option>Mujer</option>
        <option>Lucuadora</option>
        <option>Alien</option>
        </select> 
        <br>
        <br>
        <a href="../Html-es/Principal.html"><input class="botones" type="submit" name="register" value="Registrarse"></a>
    </form>
       
    <?php
    include("registrar.php");
    ?>
    
</body>
</html>