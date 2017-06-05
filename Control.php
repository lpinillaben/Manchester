<?php

require_once ('Database.php');


require_once "recaptchali.php";



if (isset($_POST['Registrar'])) {
    // your secret key
    $secret = "6LdX7xwUAAAAAM_s6_zNJ5Qm0NYb0hhTX8QMC5sn";

    // empty response
    $response = null;

    // check secret key
    $reCaptcha = new ReCaptcha($secret);

    if ($_POST["g-recaptcha-response"]) {
        $response = $reCaptcha->verifyResponse(
                $_SERVER["REMOTE_ADDR"], $_POST["g-recaptcha-response"]
        );
    }

    if ($response != null && $response->success) {
        if ($_POST['Pass'] == $_POST['passConf']) {
            $db = new Database();
            $db->conectar();
            $db->insertar(array($_POST['Cedula'], $_POST['Nombre'], $_POST['Apellido'], $_POST['User'], $_POST['Pass'], $_POST['fechaNacimiento'], $_POST['Genero'], $_POST["Correo"]), 'usuarios');
            echo"<script>alert('Usuario Registrado.')</script>";
            echo '<script>window.location="index.php";</script>';
          //  header('Location: index.php');
        } else {
            echo"<script>alert('Datos Incorrectos.')</script>";
             echo '<script>window.location="Register.php";</script>';
            //header('Location: Register.php');
            //            require 'Register.php';
        }
    } else {
        echo"<script>alert('Por favor verifique que no sea un Robot.')</script>";
        echo '<script>window.location="Register.php";</script>';
        //header('Location: Register.php');
    }
}


/* if (isset($_POST['Registrar'])) {
  if ($_POST['Pass'] == $_POST['passConf']) {
  $db = new Database();
  $db->conectar();
  $db->insertar(array($_POST['Cedula'], $_POST['Nombre'], $_POST['Apellido'], $_POST['User'], $_POST['Pass'], $_POST['fechaNacimiento'], $_POST['Genero'], $_POST["Correo"]), 'usuarios');
  echo "<script type=\"text/javascript\">alert(\"usuario regsitrado.\");</script>";
  header('Location: index.php');
  } else {
  echo "<script type=\"text/javascript\">alert(\"Verifique datos.\");</script>";
  header('Location: Register.php');
  }
  } */


/* require_once('recaptchalib.php');
  $Clave_sitio = "6LdX7xwUAAAAALjcgr5qlZ_3HjKuQ3gj5cmeAMaP";
  $Clave_secreta = "6LdX7xwUAAAAAM_s6_zNJ5Qm0NYb0hhTX8QMC5sn"; */

/* if (isset($_POST['login'])) {
  $db = new Database();
  $db->conectar();
  if(!isset($_SESSION['id_usuario']))
  {
  if(isset($_POST['login']))
  {
  if($db->iniciar($_POST['user'], $_POST['pass'],$result)== 1)
  {
  $_SESSION['id_usuario'] = $result->id_usuario;
  //            header("location:index.php");
  echo 'hola.';
  }
  else
  {
  echo 'Su usuario es incorrecto, intente nuevamente.';
  }
  }
  }
  } */

if (isset($_POST['login'])) {
    $db = new Database();
    $db->conectar();
    $db->iniciar($_POST['user'], $_POST['pass']);
}

if (isset($_POST['actualizar'])) {
    $db = new Database();
    $db->conectar();
    $db->modificar($_GET['id'], array($_POST['nombres'], $_POST['apellido'], $_POST['cedula'], $_POST['fechaNacimiento'], $_POST['genero'], $_POST['usua'], $_POST['pass'], $_POST['correo']), "usuarios");
    header('Location: Tienda.php');
}
?>
