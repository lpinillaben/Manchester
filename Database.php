<?php

class Database {

    private $usuario;
    private $contraseña;
    private $servidor;
    private $nomBD;
    private static $link;

    function Database() {
        $this->usuario = "root";
        $this->contraseña = "";
        $this->servidor = "localhost";
        $this->nomBD = "manchester";
        $this->link = "";
    }

    function conectar() {

        $this->link = mysql_connect($this->servidor, $this->usuario, $this->contraseña);
//        mysqli_select_db($this->link,$this->nomBD);
        mysql_select_db($this->nomBD);
    }

    function insertar($fila = array(), $tabla = "") {
        $valoresFila = "";
        $nuevo_usuario = mysql_query("select* from `usuarios` where `id_usuario`='$fila[0]'");
        if (mysql_num_rows($nuevo_usuario) > 0) {
            header('location:index.php');
            echo"<script>alert('Usuario ya existe')</script>";
        } else {
            while (list($key, $val) = each($fila)) {
                $valoresFila = $valoresFila . "'" . $val . "', ";
            }
            $valoresFila = substr($valoresFila, 0, -2);

            mysql_query('insert into ' . $tabla . ' values (' . $valoresFila . ');');
//        mysqli_query($this->link,'insert into '.$tabla.' values ('.$valoresFila.');')or die("la consulta fallo".mysql_error($this->link));
        }
    }

    function consultar($tabla = "", $campo = "") {
        if ($campo == "") {
            $query = "select * from " . $tabla;
        } else {
            $query = "select " . $campo . " from " . $tabla;
        }
        $res = mysql_query($query);
        return $res;
    }

    function iniciar($user = "", $pass = "") {
        $cone_usu = mysql_query("SELECT * FROM `usuarios` WHERE `nom_usuario`='$user' AND `pass_usuario`='$pass'");
        if (mysql_num_rows($cone_usu) > 0) {
            session_start();
            $_SESSION['user'] = $user;
            echo '<script>window.location="Tienda.php";</script>';
        } else {
            echo "<script type=\"text/javascript\">alert(\"Clave o Usuario incorrecto.\");</script>";
            echo '<script>window.location="login.php";</script>';
        }
    }

    function modificar($cedula = "", $fila = array(), $tabla = "") {
        mysql_query("update " . $tabla . " SET nombres ='" . $fila[0] . "' WHERE `id_usuario` = '" . $cedula . "';")or die("La consulta falló " . mysql_error());
        mysql_query("update " . $tabla . " SET apellidos ='" . $fila[1] . "' WHERE `id_usuario` = '" . $cedula . "';")or die("La consulta falló " . mysql_error());
        mysql_query("update " . $tabla . " SET fecha_nacimiento ='" . $fila[3] . "' WHERE `id_usuario` = '" . $cedula . "';")or die("La consulta falló " . mysql_error());
        mysql_query("update " . $tabla . " SET genero ='" . $fila[4] . "' WHERE `id_usuario` = '" . $cedula . "';")or die("La consulta falló " . mysql_error());
        mysql_query("update " . $tabla . " SET nom_usuario ='" . $fila[5] . "' WHERE `id_usuario` = '" . $cedula . "';")or die("La consulta falló " . mysql_error());
        mysql_query("update " . $tabla . " SET pass_usuario ='" . $fila[6] . "' WHERE `id_usuario` = '" . $cedula . "';")or die("La consulta falló " . mysql_error());
        mysql_query("update " . $tabla . " SET correo ='" . $fila[7] . "' WHERE `id_usuario` = '" . $cedula . "';")or die("La consulta falló " . mysql_error());
        mysql_query("update " . $tabla . " SET id_usuario ='" . $fila[2] . "' WHERE `id_usuario` = '" . $cedula . "';")or die("La consulta falló " . mysql_error());
    }

}

?>
