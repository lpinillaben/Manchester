<?php

session_start();
require_once 'Database.php';
$db = new Database();
$db->conectar();
$arreglo = $_SESSION['carrito'];
$total = 0;
$tabla = '<table border="1">
			<tr>
			<th>Nombre</th>
			<th>Cantidad</th>
			<th>Precio</th>
			<th>Subtotal</th>
			</tr>';
for ($i = 0; $i < count($arreglo); $i++) {
    $tabla = $tabla . '<tr>
				<td>' . $arreglo[$i]['Nombre'] . '</td>
				<td>' . $arreglo[$i]['Cantidad'] . '</td>
				<td>' . $arreglo[$i]['Precio'] . '</td>
				<td>' . $arreglo[$i]['Cantidad'] * $arreglo[$i]['Precio'] . '</td>
				</tr>
			';
    $total = $total + ($arreglo[$i]['Cantidad'] * $arreglo[$i]['Precio']);
}
$tabla = $tabla . '</table>';
//echo $tabla;
$nombre = "Luis Alberto Grijalva";
$fecha = date("d-m-Y");
$hora = date("H:i:s");
$asunto = "Compra en X dominio";
$desde = "www.tupagina.com";
$correo = "enjoytutorials@gmail.com";
$comentario = '
			<div style="
				border:1px solid #d6d2d2;
				border-radius:5px;
				padding:10px;
				width:800px;
				heigth:300px;
			">
			<center>
				<img src="http://s4.eestatic.com/2015/12/24/deportes/Deportes_89251189_358345_1280x1706.jpg" width="300px" heigth="250px">
				<h1>Muchas gracias por comprar en mi carrito de compras</h1>
			</center>
			<p>Hola ' . $nombre . ' muchas gracias por comprar aquí te mando los detalles de tu compra</p>
			<p>Lista de Artículos<br>
				' . $tabla . '
				<br>
				Total del pago es: ' . $total . '

			</p>
			</div>

		';

//echo $comentario;
$headers = "Recibo Version: 1.0\r\n";
echo $correo, $asunto, $comentario, $headers;
//mail($correo,$asunto,$comentario,$headers);
//unset($_SESSION['carrito']);
//header("Location: ../admin.php");
?>