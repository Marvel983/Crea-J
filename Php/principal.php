<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="../Style-es/style_principal.css">
        <link rel="icon" href="../Img-es/logo4.png">
        <title>OMA-SV</title>
    </head>
    <body>
        <header>
            <nav class="nav1">
                <a href="#"><img src="../Img-es/logo negativo.ico" class="logo"></a>
                <a href="#"><img src="../Img-es/user.png" class="user"></a>
            </nav>
    
            <nav class="nav2">
                <div id="flags" class="cambiarIdioma">
                    <div class="flagsItem" data-languaje="es">
                        <img src="../Img-es/spain.png">
                    </div>
    
                    <div class="flagsItem" data-languaje="en">
                        <img src="../Img-es/united-kingdom.png">
                    </div>
                </div>
            </nav>
    
    
            <nav class="nav3">
                <div class="menu">
                    <ul>
                        <li><a href="../Html-es/Principal.html">Inicio</a></li>
                        <li><a href="../Html-es/Consultas.html">Consulta</a></li>
                        <li><a href="../Html-es/Especialidades.html">Especialidades</a></li>
                        <li><a href="../Html-es/Ayuda.html">Ayuda</a></li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-------------------------------------------------------------------------------------------------->

        <main>
            <div id="slider-wrapper">
                <div class="inner-wrapper">
                    <input checked type="radio" name="slide" class="control" id="Slide1" />
                    <label for="Slide1" id="s1"></label>
                    <input type="radio" name="slide" class="control" id="Slide2" />
                    <label for="Slide2" id="s2"></label>
                    <input type="radio" name="slide" class="control" id="Slide3" />
                    <label for="Slide3" id="s3"></label>
                    <input type="radio" name="slide" class="control" id="Slide4" />
                    <label for="Slide4" id="s4"></label>
                    <div class="overflow-wrapper">
                        <a class="slide" href=""><img src="../Img-es/slider-1.jpg"  class="img-sli"></a>
                        <a class="slide" href=""><img src="../Img-es/slider-2 .jpg" class="img-sli"/></a>
                        <a class="slide" href=""><img src="../Img-es/slider-3.jpg" class="img-sli"/></a>
                        <a class="slide" href=""><img src="../Img-es/slider-4.jpg" class="img-sli"/></a>
                    </div>
                </div>
            </div>
            <div>
                <h2 class="tittle-info">Servicios para tu cuidado y para tu familia</h2>
                <hr class="hr-info">
                <p class="text-info">¿Buscas <b>servicios de consultas</b>? Estamos para apoyarte. Únicamente necesitamos un poco sobre tu informacion personal para que la puedas realizar segun la especialidad que necesites.</p>
                <button class="button-info"><span><a href="#" class="boton-text"><b>Consultas</b></a></span></button>
                <button class="button-info-2"><span><a href="#" class="boton-text"><b>Especialidades</b></a></span></button>
                <br>
                <p class="text-info">Si necesitas apoyo en el proceso, no dudes en contactarnos o para asistirte con personal de enfermería o un médico a domicilio.</p>
                <button class="button-info-3"><span><a href="#" class="boton-text"><b>Apoyo</b></a></span></button>
            </div>

        </main>
        
        <!------------------------------------------------------------------------------------------------>
        <!--Comienzo del footer-->
        <footer>
            <!--Footer Links-->
            <div class="contenedor">
                <div class="info">

                    <!--Estructura para links-->
                    <div class="li-foo">
                        <h6 ><a href="#!" class="titulo-foo">Sobre nosotros</a></h6>
                    </div>
        
                    <div class="li-foo">
                        <h6 ><a href="#!" class="titulo-foo">Servicios</a></h6>
                    </div>
                    
                    <div class="li-foo">
                        <h6 ><a href="#!" class="titulo-foo">Ayuda</a></h6>
                    </div>
                    
                    <div class="li-foo">
                        <h6 ><a href="#!" class="titulo-foo">Contactanos</a></h6>
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
    </body>
</html>