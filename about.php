<?php 

include_once('header.php')

?>

<!-- CONTENIDO --!>

   <!-- Slider 1 -->

   <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="img/slider/7.webp" alt="First slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/slider/11.webp" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/slider/9.webp" alt="Third slide">
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="img/slider/10.webp" alt="Four slide">
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <br>

    <!--publicidad1-->



    <div class="container">
        <script>
            $('#myCarousel').on('slide.bs.carousel', function () {
                // do something…
            })
        </script>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">Getting your music <span class="text-muted">on Spotify. </span></h2>
                <p class="lead">Music is delivered either by a record label or a distributor. If you’re signed to a
                    label, they’ll take care of getting your music to Spotify. If you’re independent, you’ll have to
                    arrange distribution yourself.</p>
            </div>
            <div class="col-md-5">
                <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500"
                    style="width: 500px; height: 500px;"
                    src="img/banners/1.jpg"
                    data-holder-rendered="true">
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7 order-md-2">
                <h2 class="featurette-heading">Guidelines for music <span class="text-muted">on Spotify.</span></h2>
                <p class="lead">Spotify is an open platform for artistic expression. We believe in everyone’s right to
                    share their voice. So generally, all creators and content are welcome on Spotify. However, in some
                    scenarios where content is infringing, illegal, explicit, or hateful, it may be removed or filtered
                    from Spotify. There’s more about what content is prohibited here.</p>
            </div>
            <div class="col-md-5 order-md-1">
                <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500"
                src="img/banners/2.jpg"
                data-holder-rendered="true" style="width: 500px; height: 500px;">
            </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">Your <span class="text-muted">Music</span></h2>
                <p class="lead">Welcome to Spotify for Artists! We’ve created this guide to walk you through setting up
                    your artist profile, customizing your presence, and growing your fanbase on Spotify.</p>
            </div>
            <div class="col-md-5">
                <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="500x500"
                    style="width: 500px; height: 500px;"
                    src="img/banners/3.jpg"
                    data-holder-rendered="true">
            </div>
        </div>

    </div>


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