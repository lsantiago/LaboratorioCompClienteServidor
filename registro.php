<?php
		include('conf/configuracionDB.php');

		
		if(isset($_POST['submit']))
		{
			$nombreSolicitante=mysql_real_escape_string($_POST['nombreSolicitante']);
			$tipoOrganizacion=mysql_real_escape_string($_POST['tipoOrganizacion']);
			$dependencia=mysql_real_escape_string($_POST['dependencia']);
			$telefono=mysql_real_escape_string($_POST['telefono']);
			$email=mysql_real_escape_string($_POST['email']);
			$tipoPractica=mysql_real_escape_string($_POST['tipoPractica']);
			$resultados=mysql_real_escape_string($_POST['resultados']);
			$perfil=mysql_real_escape_string($_POST['perfil']);
			$nroEstudiantes=mysql_real_escape_string($_POST['nroEstudiantes']);
			$descripcion=$_POST['descripcion'];

			$sql = "insert into proyectos values('','$nombreSolicitante','$tipoOrganizacion','$dependencia','$telefono','$email','$tipoPractica','$resultados','$perfil','$nroEstudiantes','$descripcion')";
			
			if (!$resultado = $mysqli->query($sql)) {
    			echo "Error en la consulta.";
				exit;
			}

			header("location:listar.php");
			
		}

		
?>