<?php
session_start();
include 'database.php';
if (!($_SESSION['user'])) {
    echo"<script>alert('Por favor Ingrese Sesion')</script>";
    echo '<script>window.location="login.php";</script>';
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
        <link href="css/estiloModal.css" rel="stylesheet">

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

        <!-- Header -->
        <header id="top" class="header">
            <div class="text-vertical-center">
                <h1>MANCHESTER CITY</h1>
                <a href="#services" class="btn btn-dark btn-lg">Ver Tienda</a>
            </div>
        </header>

        <!-- About -->
    <!--    <section id="about" class="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2>Stylish Portfolio is the perfect theme for your next project!</h2>
                        <p class="lead">This theme features some wonderful photography courtesy of <a target="_blank" href="http://join.deathtothestockphoto.com/">Death to the Stock Photo</a>.</p>
                    </div>
                </div>
        <!-- /.row -->
        <!--</div>-->
        <!-- /.container -->
        <!--</section>-->

        <!-- Services -->
        <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
        <section id="services" class="services bg-primary">
            <div class="container">
                <div class="row text-center">
                    <h2>Mis Datos</h2>
                    <hr class="small">
                    <div class="col-lg-10 col-lg-offset-1" id="sectionn">
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <div class="service-item">
                                    <span class="fa-stack fa-4x">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-futbol-o fa-stack-1x text-primary"></i>
                                    </span>
                                    <h4>
                                        <strong>Mi Perfil</strong>
                                    </h4>
                                    <?php
//tomamos los datos del archivo conexion.php  
                                    require_once 'Database.php';
                                    $db = new Database();
                                    $db->conectar();
//se envia la consulta  
                                    $result = $db->consultar("usuarios", "");
                                    $row = mysql_fetch_row($result);
                                    //$result = mysql_query("SELECT * FROM clientes WHERE  "
                                    // . "id_articulo = '$id_articulo' ORDER BY id_comentario ASC", $link);
//se despliega el resultado  
                                    //echo "<table width='100%' class='table table-striped table-bordered table-hover' id='dataTables-example'>";
//                                    while ($row = mysql_fetch_row($result)) {

                                    echo"<a href='?id=$row[0]&#modal1' class='btn btn-light'>Ver Perfil</a>";
                                    //                                  }
                                    ?>
                                    <!-- <a href="#modall" class="btn btn-light"></a>-->
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="service-item">
                                    <span class="fa-stack fa-4x">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-star fa-stack-1x text-primary"></i>
                                    </span>
                                    <h4>
                                        <strong>Mis Compras</strong>
                                    </h4>
                                    <a href="carritodecompras.php" class="btn btn-light">Ver Compras</a>
                                </div>
                            </div>                       
                            <div class="col-md-3 col-sm-6">
                                <div class="service-item">
                                    <span class="fa-stack fa-4x">
                                        <i class="fa fa-circle fa-stack-2x"></i>
                                        <i class="fa fa-life-ring fa-stack-1x text-primary"></i>
                                    </span>
                                    <h4>
                                        <strong>Cerrar Sesion</strong>
                                    </h4>
                                    <a href="Salir.php" class="btn btn-lg btn-light">Salir</a>
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
        <!-- /.container -->
        <div id="modal1" class="modalmask">
            <div class="modalbox movedown">
                <a href="#close" title="Cerrar" class="close">X</a>
                <div class="perfil">
                    <h1 id="title">Mi Perfil</h1>
                    <?php
                    error_reporting(0);
                    $cedula = $_GET['id'];
                    ?>
                    <form name="usuario" method="POST" action=<?php echo "control.php?id=" . $cedula . ""; ?>>
                        <?php
                        $resultado2 = mysql_query("select* from `usuarios` where `id_usuario` = " . $cedula . ";");
                        while ($row = mysql_fetch_row($resultado2)) {
                            ?>
                            <div class="datoscolumna1">
                                <label for="nombres">Nombre: </label><br><br>
                                <label for="cedula">Cedula: </label><br><br>
                                <Label for="sexo">Sexo: </label><br><br>
                                <label for="fechaNacimiento">Fecha de<br> Nacimiento: </label><br>
                            </div>
                            <div class="datoscolumna2">

                                <input type="text" value=<?php echo "$row[1]"; ?> name="nombres" id="nombres" readonly="readonly"/><br /><br>
                                <input type="text" value=<?php echo "$row[0]"; ?> name="cedula" id="cedula" readonly="readonly"/><br /><br>

                                <select name="genero">
                                    <?php
                                    echo '<option >';
                                    echo $row[6];
                                    echo '</option >';
                                    $res = $db->consultar("genero", "nombre");
                                    while ($row1 = mysql_fetch_array($res)) {

                                        if (!($row1["nombre"] == $row[6])) {
                                            echo '<option >';
                                            echo $row1["nombre"];
                                            echo '</option >';
                                        }
                                    }

//                                        $resultado5 = mysql_query("SELECT * FROM tipo_activos;");
//                                        while ($row2 = mysql_fetch_row($resultado5)) {
//                                            echo "<option value=" . "$row[1]" . ">$row2[0]</option>";
//                                        }
                                    ?>
                                </select><br ><br><br>
                                <input type="date" value=<?php echo "$row[5]"; ?> name="fechaNacimiento" id="fecha" readonly="readonly"/><br /><br>
                            </div>
                            <div class="datoscolumna3">
                                <label for="apellidos">Apellidos: </label><br><br>
                                <Label for="correo">Correo <br>Electronico: </label><br><br>                             
                                <label for="usua">Usuario: </label><br><br>
                                <label for="pass">Contraseña: </label><br><br><br><br>
                                <input type="submit" class="boton" value="Actualizar" id="actualizar" name="actualizar">
                            </div>
                            <div class="datoscolumna4">
                                <input type="text" value=<?php echo "$row[2]"; ?> name="apellido" id="apellido" readonly="readonly" /><br><br><br>   
                                <input type="email" value=<?php echo "$row[7]"; ?> name="correo" id="correo" /><br /><br>
                                <input type="text" value=<?php echo "$row[3]"; ?> name="usua" id="usua"/><br /><br /><br>
                                <input type="text" value=<?php echo "$row[4]"; ?> name="pass" id="pass"/><br /><br />
                            </div>
                            <?php
                        }
                        ?>					
                        <div class="botones">


                        </div>			
                    </form>	
                </div>
            </div>
        </div>
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
                                    <?php
//tomamos los datos del archivo conexion.php  
                                    require_once 'Database.php';
                                    $db = new Database();
                                    $db->conectar();
//se envia la consulta  
                                    //$resultado1 = $db->consultar("productos", "");
                                    //$row = mysql_fetch_row($resultado1);
                                    echo"<a href='?id_producto=1&#modal2'><img class='img-portfolio img-responsive' src='img/portfolio-1.jpg'></a>";
                                    ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="portfolio-item">
                                    <?php
//tomamos los datos del archivo conexion.php  
                                    require_once 'Database.php';
                                    $db = new Database();
                                    $db->conectar();
//se envia la consulta  
                                    //$resultado1 = $db->consultar("productos", "");
                                    //$row = mysql_fetch_row($resultado1);
                                    echo"<a href='?id_producto=2&#modal2'><img class='img-portfolio img-responsive' src='img/portfolio-2.jpg'></a>";
                                    ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="portfolio-item">
                                    <?php
//tomamos los datos del archivo conexion.php  
                                    require_once 'Database.php';
                                    $db = new Database();
                                    $db->conectar();
//se envia la consulta  
                                    //$resultado1 = $db->consultar("productos", "");
                                    //$row = mysql_fetch_row($resultado1);
                                    echo"<a href='?id_producto=3&#modal2'><img class='img-portfolio img-responsive' src='img/portfolio-3.jpg'></a>";
                                    ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="portfolio-item">
                                    <?php
//tomamos los datos del archivo conexion.php  
                                    require_once 'Database.php';
                                    $db = new Database();
                                    $db->conectar();
//se envia la consulta  
                                    //$resultado1 = $db->consultar("productos", "");
                                    //$row = mysql_fetch_row($resultado1);
                                    echo"<a href='?id_producto=4&#modal2'><img class='img-portfolio img-responsive' src='img/portfolio-4.jpg'></a>";
                                    ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="portfolio-item">
                                    <?php
//tomamos los datos del archivo conexion.php  
                                    require_once 'Database.php';
                                    $db = new Database();
                                    $db->conectar();
//se envia la consulta  
                                    //$resultado1 = $db->consultar("productos", "");
                                    //$row = mysql_fetch_row($resultado1);
                                    echo"<a href='?id_producto=5&#modal2'><img class='img-portfolio img-responsive' src='img/portfolio-5.jpg'></a>";
                                    ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="portfolio-item">
                                    <?php
//tomamos los datos del archivo conexion.php  
                                    require_once 'Database.php';
                                    $db = new Database();
                                    $db->conectar();
//se envia la consulta  
                                    //$resultado1 = $db->consultar("productos", "");
                                    //$row = mysql_fetch_row($resultado1);
                                    echo"<a href='?id_producto=6&#modal2'><img class='img-portfolio img-responsive' src='img/portfolio-6.jpg'></a>";
                                    ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="portfolio-item">
                                    <?php
//tomamos los datos del archivo conexion.php  
                                    require_once 'Database.php';
                                    $db = new Database();
                                    $db->conectar();
//se envia la consulta  
                                    //$resultado1 = $db->consultar("productos", "");
                                    //$row = mysql_fetch_row($resultado1);
                                    echo"<a href='?id_producto=7&#modal2'><img class='img-portfolio img-responsive' src='img/portfolio-7.jpg'></a>";
                                    ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="portfolio-item">
                                    <?php
//tomamos los datos del archivo conexion.php  
                                    require_once 'Database.php';
                                    $db = new Database();
                                    $db->conectar();
//se envia la consulta  
                                    //$resultado1 = $db->consultar("productos", "");
                                    //$row = mysql_fetch_row($resultado1);
                                    echo"<a href='?id_producto=8&#modal2'><img class='img-portfolio img-responsive' src='img/portfolio-8.jpg'></a>";
                                    ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="portfolio-item">
                                    <?php
//tomamos los datos del archivo conexion.php  
                                    require_once 'Database.php';
                                    $db = new Database();
                                    $db->conectar();
//se envia la consulta  
                                    //$resultado1 = $db->consultar("productos", "");
                                    //$row = mysql_fetch_row($resultado1);
                                    echo"<a href='?id_producto=9&#modal2'><img class='img-portfolio img-responsive' src='img/portfolio-9.jpg'></a>";
                                    ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="portfolio-item">
                                    <?php
//tomamos los datos del archivo conexion.php  
                                    require_once 'Database.php';
                                    $db = new Database();
                                    $db->conectar();
//se envia la consulta  
                                    //$resultado1 = $db->consultar("productos", "");
                                    //$row = mysql_fetch_row($resultado1);
                                    echo"<a href='?id_producto=10&#modal2'><img class='img-portfolio img-responsive' src='img/portfolio-10.jpg'></a>";
                                    ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="portfolio-item">
                                    <?php
//tomamos los datos del archivo conexion.php  
                                    require_once 'Database.php';
                                    $db = new Database();
                                    $db->conectar();
//se envia la consulta  
                                    //$resultado1 = $db->consultar("productos", "");
                                    //$row = mysql_fetch_row($resultado1);
                                    echo"<a href='?id_producto=11&#modal2'><img class='img-portfolio img-responsive' src='img/portfolio-11.jpg'></a>";
                                    ?>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="portfolio-item">
                                    <?php
//tomamos los datos del archivo conexion.php  
                                    require_once 'Database.php';
                                    $db = new Database();
                                    $db->conectar();
//se envia la consulta  
                                    //$resultado1 = $db->consultar("productos", "");
                                    //$row = mysql_fetch_row($resultado1);
                                    echo"<a href='?id_producto=12&#modal2'><img class='img-portfolio img-responsive' src='img/portfolio-12.jpg'></a>";
                                    ?>
                                </div>
                            </div>
                        </div>
                        <!-- /.row (nested) -->
                        <!-- <a href="#" class="btn btn-dark">Ver mas items</a>-->
                    </div>
                    <!-- /.col-lg-10 -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container -->
        </section>

        <div id="modal2" class="modalmask">
            <div class="modalbox movedown">
                <a href="#close" title="Cerrar" class="close">X</a>
                <div class="perfil">
                    <h1 id="title">Producto</h1>
                    <?php
                    error_reporting(0);
                    $idproducto = $_GET['id_producto'];
                    ?>
                    <form name="Poducto" method="POST" action=<?php echo "Control.php?id_producto=" . $idproducto . ""; ?>>
                        <?php
                        $resultado3 = mysql_query("select* from `productos` where `id_producto` = " . $idproducto . ";");
                        while ($row2 = mysql_fetch_row($resultado3)) {
                            ?>
                            <div class="datoscolumna1">
                                <label for="nombres">Nombre: </label><br><br><br>
                                <label for="talla">Talla: </label><br><br>                               
                            </div>
                            <div class="datoscolumna2">
                                <textarea name="nombres" id="nombres" rows="1" cols="30" readonly="readonly"> <?php echo "$row2[1]"; ?></textarea><br><br>
                                <input type="text" value=<?php echo "$row2[2]"; ?> name="talla" id="talla" readonly="readonly"/><br /><br>
                            </div>
                            <div class="datoscolumna3">
                                <label for="descripcion">Descripcion: </label><br><br>
                                <Label for="precio">Precio: </label><br><br> 
                                <label for="cantidad">Cantidad<br>Disponible: </label><br><br>
                                <a href="./carritodecompras.php?id=<?php echo $row2[0]; ?>" class="btn btn-dark btn-lg">Añadir al carrito de compras</a>
                            </div>
                            <div class="datoscolumna4">
                                <textarea name="descripcion" id="descripcion" rows="1" cols="30" readonly="readonly"> <?php echo "$row2[3]"; ?></textarea><br><br>
                                <input type="text" value=<?php echo "$row2[4]"; ?> name="precio" id="precio" readonly="readonly"/><br /><br>
                                <input type="text" value=<?php echo "$row2[5]"; ?> name="cantidad" id="cantidad" readonly="readonly"/><br /><br><br><br>


                            </div>
                            <?php
                        }
                        ?>					
                        <div class="botones">

                        </div>			
                    </form>	
                </div>
            </div>
        </div>

        <!-- Call to Action -->
        <aside class="call-to-action bg-primary">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h3>Con el siguinete boton podras ver en donde estamos ubicados</h3>
                        <a href="#contact" class="btn btn-lg btn-light">Ver Ubicacion</a>
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
                        <h4><strong>Start Bootstrap</strong>
                        </h4>
                        <p>3481 Melrose Place
                            <br>Beverly Hills, CA 90210</p>
                        <ul class="list-unstyled">
                            <li><i class="fa fa-phone fa-fw"></i> (123) 456-7890</li>
                            <li><i class="fa fa-envelope-o fa-fw"></i> <a href="mailto:name@example.com">name@example.com</a>
                            </li>
                        </ul>
                        <br>
                        <ul class="list-inline">
                            <li>
                                <a href="#"><i class="fa fa-facebook fa-fw fa-3x"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-twitter fa-fw fa-3x"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-dribbble fa-fw fa-3x"></i></a>
                            </li>
                        </ul>
                        <hr class="small">
                        <p class="text-muted">Copyright &copy; Your Website 2014</p>
                    </div>
                </div>
            </div>
            <a id="to-top" href="#top" class="btn btn-dark btn-lg"><i class="fa fa-chevron-up fa-fw fa-1x"></i></a>
        </footer>

        <!-- jQuery -->
        <script src="js/jquery.js"></script>
        <script src="js/jquery_1.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

        <!-- Custom Theme JavaScript -->
        <script>
            function valida(e) {
                tecla = (document.all) ? e.keyCode : e.which;

                //Tecla de retroceso para borrar, siempre la permite
                if (tecla == 8) {
                    return true;
                }

                // Patron de entrada, en este caso solo acepta numeros
                patron = /[0-9]/;
                tecla_final = String.fromCharCode(tecla);
                return patron.test(tecla_final);
            }
        </script>
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
