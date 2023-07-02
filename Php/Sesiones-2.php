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

    <section class="form-sesion">
        <div>
            <img src="../Img-es/logo4.png" class="logi">
        </div>
        <input class="controles" type="text" name="usuario" value="" placeholder="Nombres...">
        <input class="controles" type="text" name="usuario" value="" placeholder="Apellidos...">
        <input class="controles" type="text" name="usuario" value="" placeholder="Genero...">
        <input class="controles" type="text" name="usuario" value="" placeholder="Correo Electronico...">
        <input class="controles" type="text" name="usuario" value="" placeholder="DUI...">
        <input class="controles" type="password" name="contrasena" value="" placeholder="Contraseña...">
        <a href="../Html-es/Principal.html"><input class="botones" type="submit" name="" value="Registrarse"></a>
        <a href="../Html-es/Sesiónes.html"><input class="botones" type="submit" name="" value="Regresar"></a>
        <?php
        include("registrar.php")
        ?> 
    </section>

    <footer>
        <!--Footer Links-->
        <div class="contenedor">
            <div class="info">

                <!--Estructura para links-->
                <div class="li-foo">
                    <h6 class=""><a href="#!">Sobre nosotros</a></h6>
                </div>
    
                <div class="li-foo">
                    <h6 class=""><a href="#!">Servicios</a></h6>
                </div>
                
                <div class="li-foo"> 
                    <h6 class=""><a href="#!">Ayuda</a></h6>
                </div>
                
                <div class="li-foo">
                    <h6 class=""><a href="#!">Contactanos</a></h6>
                </div>

            </div>

            <hr class="hr-foo">

            <!--Estructura para texto-->
            <div class="txt-foo">
                <p class="p-foo">Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima obcaecati suscipit 
                consequuntur, quia labore dolore eos similique vero nulla expedita quos quam ducimus debitis facilis 
                nesciunt, alias asperiores ex illum.</p>
            </div>

            <!--Estructura para iconos de nuestras redes sociales-->
            <div class="app-foo">
                <div class="app2-foo">
                    <a class="app3-foo"><img src="../Img-es/icons8-whatsapp-40.png" alt="Logo de wa"></a>
                    <a class="app3-foo"><img src="../Img-es/icons8-instagram-viejo-40.png" alt="Logo de ins"></a>
                    <a class="app3-foo"><img src="../Img-es/icons8-facebook-40.png" alt="Logo de face"></a>
                </div>
            </div>
        </div>
        
        <!--Estructura para el copyright de nosotros-->
        <div class="copy-foo">
            <div class="">
                © 2022 Copyright: <a href="">OMA-SV</a>
            </div>
        </div>

    </footer>

    <script src="../Scrip-es/pantalla_de_carga.js"></script>    
</body>
</html>