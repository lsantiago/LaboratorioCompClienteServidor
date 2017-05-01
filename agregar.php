<html>
<head>
	<!-- Para soporte de caracteres latinos -->
	<meta charset="utf-8">

	<!-- Autor y descripción de la página-->
	<meta name = "author" content="Karla Romero, Santiago Quiñones">
	<meta name = "description" contet="Lista de proyectos de gestión productiva">
	
	<title>Nuevo proyecto</title>

	<!-- Estilo de la página-->
	<!-- <link rel="stylesheet" type="text/css" href="css/estilo.css"> -->
</head>
<body>
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
			$descripcion=mysql_real_escape_string($_POST['descripcion']);


			
			$query1=mysql_query("insert into proyectos values('','$nombreSolicitante','$tipoOrganizacion','$dependencia','$telefono','$email','$tipoPractica','$resultados','$perfil','$nroEstudiantes','$descripcion')");
			echo "insert into proyectos values('','$nombreSolicitante','$tipoOrganizacion','$dependencia','$telefono','$email','$tipoPractica','$resultados','$perfil','$nroEstudiantes','$descripcion')";
			

			if($query1)
			{
				header("location:listar.php");
			}
		}
	?>

	<fieldset style="width:300px;">
		<form method="post" action="">
			Nombre Solicitante <input type="text" name="nombreSolicitante"><br>
			Tipo Organizacion <input type="text" name="tipoOrganizacion"><br>
			Dependencia <input type="text" name="dependencia"><br>
			Teléfono <input type="text" name="telefono"><br>
			Email <input type="text" name="email"><br>
			Tipo Practica <input type="text" name="tipoPractica"><br>
			Resultados <input type="text" name="resultados"><br>
			Perfil <input type="text" name="perfil"><br>
			Número de estudiantes <input type="text" name="nroEstudiantes"><br>
			Descripción de trabajo <input type="text" name="descripcion"><br>
			<br>
			<input type="submit" name="submit">
		</form>
	</fieldset>
</body>
</html>