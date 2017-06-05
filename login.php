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
            <h1>Log-in</h1><br>
            <form action="Control.php" method="post">
                <input type="text" name="user" placeholder="Username">
                <input type="password" name="pass" placeholder="Password"><br>


                <input type="submit" name="login" class="login login-submit" value="login">
            </form>

            <div class="login-help">
                • <a href="Register.php">Crear Cuenta</a>
            </div>
        </div>

<!-- <div id="error"><img src="https://dl.dropboxusercontent.com/u/23299152/Delete-icon.png" /> Your caps-lock is on.</div> -->

        <script src='http://codepen.io/assets/libs/fullpage/jquery_and_jqueryui.js'></script>

    </body>
</html>