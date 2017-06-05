<?php
session_start();
include 'database.php';
if (isset($_SESSION['user'])) {
    echo"<script>alert('Por favor Salga de sesíon')</script>";
    echo '<script>window.location="Tienda.php";</script>';
}
?>
<!DOCTYPE html>
<html>

    <head>

        <meta charset="UTF-8">

        <title>CodePen - Log-in</title>

        <link rel='stylesheet' href='http://codepen.io/assets/libs/fullpage/jquery-ui.css'>

        <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />

    </head>

    <body>

        <div class="login-card">
            <h1>Registrar</h1><br>
            <form method="post" action="Control.php">
                <input type="text" name="Nombre" placeholder="Nombre" required>
                <input type="text" name="Apellido" placeholder="Apellido" required>
                <input type="text" name="Cedula" onkeypress="return valida(event)" placeholder="Cedula"required>
                <input type="text" name="User" placeholder="Usuario" required>
                <input type="password" name="Pass" placeholder="Crear Contraseña" required>
                <input type="password" name="passConf" placeholder="Confirmar Contraseña">
                <input type="date" name="fechaNacimiento" required>
                <select name="Genero">
                    <?php
                    require_once 'Database.php';
                    $db = new Database();
                    $db->conectar();
                    $res = $db->consultar("genero", "nombre");
                    while ($row = mysql_fetch_array($res)) {
                        echo '<option >';
                        echo $row["nombre"];
                        echo '</option >';
                    }
                    ?>
                </select>
                <input type="email" name="Correo" id="correo" placeholder="Correo" required>

                <div class="g-recaptcha" data-sitekey="6LdX7xwUAAAAALjcgr5qlZ_3HjKuQ3gj5cmeAMaP"></div><br>

                <input type="submit" name="Registrar" class="login login-submit" value="Registrar">
            </form>

        </div>

<!-- <div id="error"><img src="https://dl.dropboxusercontent.com/u/23299152/Delete-icon.png" /> Your caps-lock is on.</div> -->
        <script src='https://www.google.com/recaptcha/api.js'></script>
        <script src='http://codepen.io/assets/libs/fullpage/jquery_and_jqueryui.js'></script>
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

    </body>
</html>
