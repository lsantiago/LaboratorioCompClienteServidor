<?php
    require_once 'conf/config.php';
	require_once 'modelo/Conexion.php';

	// se establece una conexión a Maria DB
	$conexion = new ConexionMariaDB(BD_USUARIO, BD_CLAVE, BD_HOST, BD_NOMBRE);
	$mysqli = $conexion->conectar();

?>