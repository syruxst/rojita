<?php require('text/data.php') ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="node_modules/animate.css/animate.min.css">
    <link rel="stylesheet" href="node_modules/aos/dist/aos.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css">
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="node_modules/aos/dist/aos.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="img/favicon-16x16.png">
    <link rel="manifest" href="img/site.webmanifest">
    <link rel="mask-icon" href="imgss/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <title>:: Escuela de Futbol La Rojita ::</title>
</head>
<body>
<a href="https://wa.me/56997916354" target="_blank" id="whatsapp-float" style="display:none;" title="Comunicate con nosotros">
    <img src="https://img.icons8.com/color/48/000000/whatsapp--v1.png" alt="WhatsApp"/>
</a>
<a href="https://www.instagram.com/escuelalarojita/" target="_blank" id="instagram-float" style="display:none;" title="Visita nuestra red social">
    <img src="https://img.icons8.com/fluent/48/000000/instagram-new.png" alt="Instagram"/>
</a>
<div class="mobile-menu">
    <div class="logos-container">
        <div class="logo animate__bounceInDown">
            <img id="rotating-img1" src="img/301190554_367197338902784_6235497689099637172_n.png" width="60px" alt="Escuela la Rojita" title="Escuela la Rojita">
        </div>
        <div class="logoDos">
            <img id="rotating-img2" src="img/logoFemenino.png" width="60px" alt="Escuela la Rojita" title="Escuela la Rojita">
        </div>
    </div>
    <i id="menu-icon" class="fa fa-bars fa-2x" aria-hidden="true"></i>
</div>
<div class="contenedor-menu-móvil">
    Contenido del menú móvil
</div>
<nav class="menu">
    <div class="logos-container">
        <div class="logo animate__bounceInDown">
            <img id="rotating-img1" src="img/301190554_367197338902784_6235497689099637172_n.png" width="60px" alt="Escuela la Rojita" title="Escuela la Rojita">
        </div>
        <div class="logoDos">
            <img id="rotating-img2" src="img/logoFemenino.png" width="60px" alt="Escuela la Rojita" title="Escuela la Rojita">
        </div>
    </div>
    <ul class="animate__backInLeft">
        <li><a href="#">INICIO</a></li>
        <li><a href="#" title="Revisa Nuestras Noticias">NOTICIAS</a></li>
        <li><a href="galeria/" title="Visita Nuestra Galeria">GALERIAS</a></li>
        <li><a href="#" title="Revisa Nuestra Histroria">HISTORIA</a></li>
        <li><a href="#" title="Nuestro Plantel">PLANTEL</a></li>
        <li><a href="https://web.whatsapp.com/send?phone=56997916354" target="_blank" title="Contactanos por WhatsApp"><i class="fa fa-whatsapp" aria-hidden="true"></i></a></li>
        <li><a href="https://www.instagram.com/escuelalarojita/" target="_blank" title="Visita nuestro Instagram"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
    </ul>
</nav>
<section class="slider">
    <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="slider/1234.jpeg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/IMG_2523.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/IMG_4755.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    <div id="comentario">
        <label for="">"Enseñamos el fútbol más allá del fútbol"</label>
        <button type="button" id="femenina" class="buttonCommit" style="border-left: 5px solid pink; border-right: 5px solid pink;" title="Impulsamos a nuestras niñas a ser grandes deportistas"><img src="img/logoFemenino.png" width="50"> RAMA FEMENINA</button>
        <button type="button" id="masculina" class="buttonCommit" style="border-left: 5px solid red; border-right: 5px solid red;" title="Impulsamos a nuestras niños a ser grandes deportistas"><img src="img/301190554_367197338902784_6235497689099637172_n.png" width="50"> RAMA MASCULINA</button>
    </div>
</section>
<section class="cuerpo" class="animate__backInRight" data-aos="fade-up" data-aos-duration="3000">
    <div class="contenedores">
        <div class="item">
            <img src="img/jaime.png" alt="Profesor Jaime Valero" width="200" title="Jaime Valero">
        </div>
        <div class="item">
            <h3>¿Quiénes somos?</h3>
            <p>Una escuela de fútbol formativa, con 7 años de vida, ubicada en los andes, valle de Aconcagua. Un lugar donde el respeto, el juego, el amor por lo que se hace y la colaboración son pilares en el traspaso de conocimiento futbolístico. Proyecto sostenido por todas y cada una de sus partes y actores, que intenta construir una nueva cultura futbolística promotora del bienestar y la educación.</p>
        </div>
        <div class="item">
            <h3>Misión:</h3>
            <p>Las familias y la niñez precisan de espacios de sana recreación que sean seguros y libres de violencia de cualquier tipo, donde poder realizar actividad física y deporte, estar en contacto con herramientas de autocuidado y adquirir estos como hábitos para la vida misma.</p>
        </div>
        <div class="item">
            <h3>Visión:</h3>
            <p>Ser facilitadores de instancias y espacios deportivos seguros, de sano esparcimiento, con un enfoque integral y equitativo. Construir un nuevo paradigma en lo relacionado al contexto futbolístico donde el buen trato y respeto son prioritarios, potenciando el amateurismo en su esencia, permeando a las familias que componen esta organización. </p>
        </div>
    </div>
</section>
<section class="cuerpoDos">
hola
</section>
<section class="cuerpoTres">
    <h3>Cuerpo Técnico</h3>
    <div class="cuerpoTecnico" data-aos="fade-up" data-aos-duration="3000">

        <?php
            $ct = "SELECT * FROM `ctecnico`";
            $rst = mysqli_query($conn, $ct);
            while($row = mysqli_fetch_assoc($rst)){
                echo '<div class="items">';
                echo '<img src="'.$row['ruta'].'" id="'.$row['codigo'].'" alt="'.$row['name'].'" title="'.$row['titulo'].'" width="200" data-description="'.$row['comentario'].'">';
                echo '</div>';
            }
        ?>
    </div>
</section>
<section class="cuerpoCuatro">
    <div class="contactos">
        <div class="contact">
            <i class="fa fa-whatsapp fa-3x" aria-hidden="true"></i>
            <br>
            <label for="">WhatsApp</label>
            <br>
            <a href="https://web.whatsapp.com/send?phone=56997916354" target="_blank"><b>+569 9791 6354</b></a>
        </div>
        <div class="contact">
            <i class="fa fa-envelope-open-o fa-3x" aria-hidden="true"></i>
            <br>
            <label for="">Contacto</label>
            <br>
            <a href="mailto:propiedades@jofre.cl" target="_blank"><b>educadorfisico.valero@gmail.com</b></a>
        </div>
        <div class="contact">
            <i class="fa fa-map-marker fa-3x" aria-hidden="true"></i>
            <br>
            <label for="">Ubicación</label>
            <br>
            <a href="https://maps.app.goo.gl/9tuPZncPYTKkBNQC9" target="_blank"><b>ver mapa</b></a>
        </div>
    </div>
</section>
<footer>
    <div class="contenidos">
        <div class="menus">
            <ul>
                <li><a href="#"><i class="fa fa-home" aria-hidden="true"></i> INICIO</a></li>
                <li><a href="#" title="Revisa Nuestras Noticias"><i class="fa fa-commenting-o" aria-hidden="true"></i> NOTICIAS</a></li>
                <li><a href="galeria/" title="Visita Nuestra Galeria"><i class="fa fa-picture-o" aria-hidden="true"></i> GALERIAS</a></li>
                <li><a href="#" title="Revisa Nuestra Histroria"><i class="fa fa-history" aria-hidden="true"></i> HISTORIA</a></li>
                <li><a href="#" title="Nuestro Plantel"><i class="fa fa-users" aria-hidden="true"></i> PLANTEL</a></li>
                <li><a href="https://web.whatsapp.com/send?phone=56997916354" target="_blank" title="Contactanos por WhatsApp"><i class="fa fa-whatsapp" aria-hidden="true"></i> WhatsApp</a></li>
                <li><a href="https://www.instagram.com/escuelalarojita/" target="_blank" title="Visita nuestro Instagram"><i class="fa fa-instagram" aria-hidden="true"></i> Instagram</a></li>
            </ul>
        </div>
    </div>
    <div class="contenidos">
        <video width="100%" height="400" controls>
            <source src="img/video/Video2024.mp4" type="video/mp4">
            Tu navegador no soporta el elemento de video.
        </video>
    </div>
    <div class="contenidos">
        <iframe src="https://www.google.com/maps/embed?pb=!4v1711858592919!6m8!1m7!1s5tm5KY-0C3IoxgLctUrvrw!2m2!1d-32.86025115915774!2d-70.58890698629101!3f171.71292663855226!4f-2.541971716762731!5f1.1924812503605782" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <!-- <br>
    <center>Copyright © 2024 Daniel Ugalde</center> -->
</footer>
<div class="negro" id="negro">
    <div class="descriptions">
        <table width="100%" border="0" id="tabla_cuerpo_tecnico">
            <tr>
                <td rowspan="3">
                    <div id="imagen">
                        <img id="imagen-aqui" src="ruta_de_la_imagen.jpg" alt="Descripción de la imagen">
                    </div>
                </td>
                <td>
                    <h2 id="nombre-tecnico"></h2>
                </td>
            </tr>
            <tr>
                <td><label for="" id="cargos"></label></td>
            </tr>
            <tr>
                <td><p id="parrafo"></p></td>
            </tr>
        </table>
        <div class="logotipos">
            <img src="img/logos.png" id="duplex" alt="Escuela la Rojita">
        </div>
    </div>
</div>
<div id="ramaFemenina">
    <div id="contenidoF">
        <div id="superiorF">
            <img src="img/logoFemenino.png" width="100">
        </div>
        <div class="cuerpos">
        <p>La rama femenina de nuestra escuela de fútbol, nace a partir necesidades que desde hace tiempo la sociedad está expresando a raíz de la exclusión que históricamente ha vivido en el fútbol el género femenino. El fútbol es un juego que influye de manera importante social y culturalmente, por lo que establecer una rama femenina desde edades formativas puede ser una oportunidad más que interesante para “emparejar la cancha” y hacer que la equidad sea una característica que permea todos los espacios y contextos. <br><br>
PERMITIR Y CO-CREAR ESPACIOS EXCLUSIVAMENTE PARA LAS MUJERES ES NECESARIO PARA EQUIPARAR LAS COSAS Y DESDE EDADES TEMPRANAS PERMITIR QUE LAS NUEVAS GENERACIONES CREZCAN EN LA IGUALDAD DE OPORTUNIDADES. 
</p>
        </div>
    </div>
</div>

<div id="ramaMasculina">

</div>

<!--movil-->
<div id="mobile-contend">
    <label for="">
        Escuala de Fútbol <br>
        La Rojita
    </label>
</div>
<div id="mobile-dos">
    hola
    <hr>
</div>
<div id="mobile-tres">
    <center><h1>¿Quienes Somos?</h1></center>
    <div id="mobile-contend-tres" class="animate__backInRight" data-aos="fade-up" data-aos-duration="3000">
        <p>Una escuela de fútbol formativa, con 7 años de vida, ubicada en los andes, valle de Aconcagua. Un lugar donde el respeto, el juego, el amor por lo que se hace y la colaboración son pilares en el traspaso de conocimiento futbolístico. Proyecto sostenido por todas y cada una de sus partes y actores, que intenta construir una nueva cultura futbolística promotora del bienestar y la educación.</p>
        <img src="img/IMG_20230812_122441.jpg" width="100%" alt="">
    </div>
</div>
<div id="mobile-cuatro">
    <center><h1>¿Dónde nos encuentras?</h1></center>
    <div id="mobile-contend-cuatro" class="animate__backInRight" data-aos="fade-up" data-aos-duration="3000">
        <p>Una escuela de fútbol formativa, con 7 años de vida, ubicada en los andes, valle de Aconcagua. Un lugar donde el respeto, el juego, el amor por lo que se hace y la colaboración son pilares en el traspaso de conocimiento futbolístico. Proyecto sostenido por todas y cada una de sus partes y actores, que intenta construir una nueva cultura futbolística promotora del bienestar y la educación.</p>
        <iframe src="https://www.google.com/maps/embed?pb=!4v1714875232557!6m8!1m7!1seYP84rXcsvnSTmsxoZMggA!2m2!1d-32.86029159917574!2d-70.58880531963122!3f182.69023645594532!4f-2.9858611068659826!5f1.1924812503605782" width="100%" height="180px" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>        </div>
</div>
<div id="mobile-quinto">
    <center><h1>Cuerpo Técnico</h1></center>
    <div id="mobile-contend-quinto" class="animate__backInRight" data-aos="fade-up" data-aos-duration="3000">
        <?php
            $Ct = "SELECT * FROM `ctecnico`";
            $Rst = mysqli_query($conn, $Ct);
            echo '<div class="carousel-container">'; // Contenedor para el carrusel
            while ($Row = mysqli_fetch_assoc($Rst)) {
                echo '<div class="items-ct">';
                echo '<img src="'.$Row['ruta'].'" id="'.$Row['codigo'].'" alt="'.$Row['name'].'" title="'.$Row['titulo'].'" width="100%" data-description="'.$Row['comentario'].'">';
                echo '</div>';
            }
            echo '</div>'; // Cierre del contenedor del carrusel
        ?>
    </div>
</div>
<!-- fin movil -->
<script src="js/script.js"></script>

</body>
</html>