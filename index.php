<?php
session_start();
include 'database.php';
if (isset($_SESSION['user'])) {
    echo"<script>alert('Por favor Salga de sesíon')</script>";
    echo '<script>window.location="Tienda.php";</script>';
}
?>
<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Manchester City</title>

        <!-- Bootstrap Core CSS -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="css/stylish-portfolio.css" rel="stylesheet">

        <!-- Custom Fonts -->
        <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>

        <!-- Navigation -->
        <a id="menu-toggle" href="#" class="btn btn-dark btn-lg toggle"><i class="fa fa-bars"></i></a>
        <nav id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <a id="menu-close" href="#" class="btn btn-light btn-lg pull-right toggle"><i class="fa fa-times"></i></a>
                <li class="sidebar-brand">
                    <a href="#top" onclick=$("#menu-close").click();>Manchester City</a>
                </li>
                <li>
                    <a href="#top" onclick=$("#menu-close").click();>Home</a>
                </li>
                <li>
                    <a href="#about" onclick=$("#menu-close").click();>Presentacion</a>
                </li>
                <!--<li>
                    <a href="#services" onclick=$("#menu-close").click();>¿Quienes somos?</a>
                </li>-->
                <li>
                    <a href="#portfolio" onclick=$("#menu-close").click();>Tienda</a>
                </li>
                <li>
                    <a href="#contact" onclick=$("#menu-close").click();>Contact</a>
                </li>
            </ul>
        </nav>

        <!-- Header -->
        <header id="top" class="header">
            <div class="text-vertical-center">
                <h1>MANCHESTER CITY</h1>
                <h3>Enterate de lo ultimo de  nuestro equipo.</h3>
                <br>
                <a href="#about" class="btn btn-dark btn-lg">INICIAR</a>
            </div>
        </header>

        <!-- About -->
        <section id="about" class="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2>Bienvenido a nuestra pagina Web</h2>
                        <p class="lead">Te ofrecemos lo mejor en nuestra <a target="_blank" href="login.php">Tienda online</a>.</p>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>

        <aside class="callout">
            <div class="text-vertical-center1">
                <h1>¿QUIENES SOMOS?</h1>
                <P>Ciudad en la Comunidad está celebrando 30 años de hacer una diferencia en las vidas de las personas en Manchester. 

                    Para marcar la ocasión, Nueva Economía Manchester ha examinado el impacto diversos proyectos han tenido en los participantes y la comunidad en general en toda la ciudad.

                    Centrándose en dos programas emblemáticos de la fundación - el proyecto de fútbol para discapacitados 'Una Ciudad' y el proyecto de los retrocesos - el efecto de Fútbol informe arroja luz sobre la extensión de la ciudad en la Comunidad de trabajo.

                    Este año, estamos trabajando con 40.000 personas dentro de Greater Manchester y ambos de los programas anteriores han desempeñado un papel fundamental en ayudar a lograr un mayor acceso al deporte para los jóvenes y los discapacitados.</P>
            </div>
        </aside>

        <!-- Portfolio -->
        <section id="portfolio" class="portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1 text-center">
                        <h2>Nuestra Tienda Virtual</h2>
                        <hr class="small">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="portfolio-item">
                                    <a href="login.php">
                                        <img class="img-portfolio img-responsive" src="img/portfolio-1.jpg">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="portfolio-item">
                                    <a href="login.php">
                                        <img class="img-portfolio img-responsive" src="img/portfolio-2.jpg">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <!-- /.row (nested) -->
                    </div>
                    <!-- /.col-lg-10 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>

        <!-- Call to Action -->
        <aside class="call-to-action bg-primary">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h3>Antes de poder realizar una compra es importante que ingreses con una cuenta a nuestra pagina.</h3>
                        <a href="login.php" class="btn btn-lg btn-light">Ingresar</a>
                        <a href="Register.php" class="btn btn-lg btn-dark">Registrarse</a>
                    </div>
                </div>
            </div>
        </aside>

        <!-- Map -->
        <section id="contact" class="map">
            <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d151986.00551837194!2d-2.3636689165337774!3d53.47236790480151!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487a4d4c5226f5db%3A0xd9be143804fe6baa!2sM%C3%A1nchester%2C+Manchester%2C+Reino+Unido!5e0!3m2!1ses-419!2sco!4v1492122657685"></iframe>
            <br />
            <small>
                <a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A"></a>
            </small>
        </section>

        <!-- Footer -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-lg-offset-1 text-center">
                        <h4><strong>Manchester City</strong>
                        </h4>
                        <p>3481 Melrose Place
                            <br>Beverly Hills, CA 90210</p>
                        <ul class="list-unstyled">
                            <li><i class="fa fa-phone fa-fw"></i> (+57) 320-47-75-412</li>
                            <li><i class="fa fa-envelope-o fa-fw"></i> <a href="mailto:name@example.com">name@example.com</a>
                            </li>
                        </ul>
                        <br>
                        <ul class="list-inline">
                            <li>
                                <a href="https://www.facebook.com/"><i class="fa fa-facebook fa-fw fa-3x"></i></a>
                            </li>
                            <li>
                                <a href="https://twitter.com/?lang=es"><i class="fa fa-twitter fa-fw fa-3x"></i></a>
                            </li>
                            <li>
                                <a href="https://www.google.com.co"><i class="fa fa-dribbble fa-fw fa-3x"></i></a>
                            </li>
                        </ul>
                        <hr class="small">
                        <p class="text-muted">Copyright &copy; Manchester City 2017</p>
                    </div>
                </div>
            </div>
            <a id="to-top" href="#top" class="btn btn-dark btn-lg"><i class="fa fa-chevron-up fa-fw fa-1x"></i></a>
        </footer>

        <!-- jQuery -->
        <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script>
                        // Closes the sidebar menu
                        $("#menu-close").click(function (e) {
                            e.preventDefault();
                            $("#sidebar-wrapper").toggleClass("active");
                        });
                        // Opens the sidebar menu
                        $("#menu-toggle").click(function (e) {
                            e.preventDefault();
                            $("#sidebar-wrapper").toggleClass("active");
                        });
                        // Scrolls to the selected menu item on the page
                        $(function () {
                            $('a[href*=#]:not([href=#],[data-toggle],[data-target],[data-slide])').click(function () {
                                if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') || location.hostname == this.hostname) {
                                    var target = $(this.hash);
                                    target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                                    if (target.length) {
                                        $('html,body').animate({
                                            scrollTop: target.offset().top
                                        }, 1000);
                                        return false;
                                    }
                                }
                            });
                        });
                        //#to-top button appears after scrolling
                        var fixed = false;
                        $(document).scroll(function () {
                            if ($(this).scrollTop() > 250) {
                                if (!fixed) {
                                    fixed = true;
                                    // $('#to-top').css({position:'fixed', display:'block'});
                                    $('#to-top').show("slow", function () {
                                        $('#to-top').css({
                                            position: 'fixed',
                                            display: 'block'
                                        });
                                    });
                                }
                            } else {
                                if (fixed) {
                                    fixed = false;
                                    $('#to-top').hide("slow", function () {
                                        $('#to-top').css({
                                            display: 'none'
                                        });
                                    });
                                }
                            }
                        });
                        // Disable Google Maps scrolling
                        // See http://stackoverflow.com/a/25904582/1607849
                        // Disable scroll zooming and bind back the click event
                        var onMapMouseleaveHandler = function (event) {
                            var that = $(this);
                            that.on('click', onMapClickHandler);
                            that.off('mouseleave', onMapMouseleaveHandler);
                            that.find('iframe').css("pointer-events", "none");
                        }
                        var onMapClickHandler = function (event) {
                            var that = $(this);
                            // Disable the click handler until the user leaves the map area
                            that.off('click', onMapClickHandler);
                            // Enable scrolling zoom
                            that.find('iframe').css("pointer-events", "auto");
                            // Handle the mouse leave event
                            that.on('mouseleave', onMapMouseleaveHandler);
                        }
                        // Enable map zooming with mouse scroll when the user clicks the map
                        $('.map').on('click', onMapClickHandler);
        </script>

    </body>

</html>
