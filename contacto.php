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

        <div class="contacto-mapa">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3048.0832786406186!2d-4.460349085089737!3d40.18496007762744!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd4035b57551b6f3%3A0x84be095154d712f6!2sCalle%20Falsa%2C%2045908%20Aldea%20en%20Cabo%2C%20Toledo%2C%20Espa%C3%B1a!5e0!3m2!1ses!2sdo!4v1606368557709!5m2!1ses!2sdo"
                width="100%" height="auto" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false"
                tabindex="0"></iframe>
        </div>
        <div class="contacto-form">
            <h1>¡Get in touch!</h1>
            <div class="barra"></div>
            <form method="POST" name="contacto" onsubmit="return validar_contacto()" >
                <input type="text" placeholder="Name" name="nombre" id="nombre" class="contacto-txt">
                <input type="text" placeholder="Email" name="correo" id="correo" class="contacto-txt">
                <input type="text" placeholder="Phone" name="telefono" id="telefono" class="contacto-txt">
                <input type="text" placeholder="Subject" name="asunto" id="asunto" class="contacto-txt">
                <textarea placeholder="Message..." name="mensaje" id="mensaje" class="contacto-txtarea"></textarea>
                <input type="submit" value="Send" name="enviar" id="enviar" class="contacto-btn">
            </form>
        </div>

    </div>

    <?php
include_once("spotify_contact.php")
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

            if (document.contacto.telefono.value == "") {
                alert('¡Please enter a valid phone number!');
                return false
            }

            if (document.contacto.asunto.value == "") {
                alert('¡Please write a subject.!');
                return false
            }

            if (document.contacto.mensaje.value.length < 10) {
                alert('¡Your message must be longer than 10 characters!')
                return false;
            }





        }


    </script>



    <!--PUBLICIDAD 2-->

    <div class="invitacion">
        <div class="container1 align-center">
            <div class="row1">
                <h3>Your music. Your fans. Your team. All together now.</h3>
                <p>All the tools you need to build your following and career on Spotify, all in one place.</p>
            </div>
            <div class="row2">
                <a href="join.php" class="btn btn-light rounded-pill btn-lg"
                    style="font-weight: 600; font-size: 1rem;">JOIN YOUR TEAM</a>
            </div>


        </div>
    </div>
    </div>

<!-- CONTENIDO --!>

<?php 

include_once('footer.php')

?>