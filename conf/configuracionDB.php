<?php
	$servidor = '127.0.0.1';
	$usuario = 'root';
	$clave = '';
	$nombreBaseDatos = 'gestion_productiva';

	// instancia a la base de datos
	$mysqli = new mysqli($servidor, $usuario, $clave, $nombreBaseDatos);
?>