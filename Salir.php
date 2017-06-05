<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

session_start();
session_destroy();
echo 'Cerraste sesion';
echo '<script>window.location="index.php";</script>';
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Saliendo</title>
        <meta charset="utf-8">
    </head>
    <body>
        <script language="javascript">location.href="index.php";</script>
    </body>    
</html>