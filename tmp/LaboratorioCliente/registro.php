<?php
$conexion = mysql_connect("localhost","root","") or die ("<h2> No se encuentra el server </h2>");
$db = mysql_select_db ("becariosDB",$conexion) or die ("<h2> No se encuentra la base de datos </h2>");

//valores del formulario

$nombres = $_POST['nombres'];
$dependencia = $_POST['dependencia'];
$telefono = $_POST['telefono'];
$mail = $_POST['correo'];
$perfil = $_POST['perfil'];
$descrip = $_POST['proposito'];

// ingresamos los datos a la base de datos
mysql_query("INSERT INTO solicitudes VALUES ('$nombres','$dependencia','$telefono','$mail','$perfil','$descrip')",$conexion) or die ("<h2> Error al guardar en la bd </h2>");

echo '<h1> Datos enviados correctamente </h2> <h2> Pronto nos comunicaremos con usted</h2>'

		
?>