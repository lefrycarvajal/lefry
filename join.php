<?php 

include_once('header.php')

?>

<!-- CONTENIDO --!>

 <!--SLIDER-->
 <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="img/slider/21.webp" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/slider/22.webp" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="img/slider/23.webp" class="d-block w-100" alt="...">
            </div>
        </div>
    </div>

    <!-- SECCION CANCIONES-->

    <div class="container">
        <h1 style="text-align: center; font-size: 3rem; color: black; font-weight: 700; margin-top: 20px;">Lets Talk!
        </h1>
    </div>
    <div class="contacto">
        <div class="contacto-form">
            <h1>¡Join to our!</h1>
            <div class="barra"></div>
            <form method="POST" name="contacto" onsubmit="return validar_contacto()" >
                <input type="text" placeholder="Name" name="nombre" id="nombre" class="contacto-txt">
                <input type="text" placeholder="Email" name="correo" id="correo" class="contacto-txt">
                <textarea placeholder="Link to your artist profile" name="perfil" id="perfil" class="contacto-txtarea"></textarea>
                <input type="submit" value="Send" name="enviar" id="enviar" class="contacto-btn">
            </form>
        </div>

    </div>


    <?php
include_once("spotify_join.php")
?>

    <script>
        function validar_contacto() {

            if (document.contacto.nombre.value == "") {
                alert('¡Please enter a valid name!');
                return false
            }

            if (document.contacto.correo.value == "") {
                alert('¡Please enter a valid email!');
                return false
            }

            if (document.contacto.perfil.value == "") {
                alert('¡Please enter a valid profile link!');
                return false
            }




        }


    </script>



    <!--PUBLICIDAD 2-->

    <div class="invitacion i3">
        <div class="container1 align-center">
            <div class="row1 r2">
                <h2>Can’t find what you’re looking for?
                </h2>
            </div>
            <div class="row2">
                <a href="contacto.php" type="button" class="btn btn-light rounded-pill btn-lg" style="font-weight: 600; font-size: 1rem;" >CONTACT US </a>
            </div>


        </div>
    </div>
    </div>
    </div>

<!-- CONTENIDO --!>

<?php 

include_once('footer.php')

?>