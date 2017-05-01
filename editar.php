<html>
<head>
	<!-- Para soporte de caracteres latinos -->
	<meta charset="utf-8">

	<!-- Autor y descripción de la página-->
	<meta name = "author" content="Karla Romero, Santiago Quiñones">
	<meta name = "description" contet="Edición de proyectos">
	
	<title>Edición de proyecto</title>

	<!-- Estilo de la página-->
	<!-- <link rel="stylesheet" type="text/css" href="css/estilo.css"> -->
</head>
<body>
	<?php
	include('conf/configuracionDB.php');
	if(isset($_GET['id']))
	{
		$id=$_GET['id'];
		if(isset($_POST['submit']))
		{
			$nombreSolicitante=$_POST['nombreSolicitante'];
			$tipoOrganizacion=$_POST['tipoOrganizacion'];
			$dependencia=$_POST['dependencia'];
			$telefono=$_POST['telefono'];
			$email=$_POST['email'];
			$tipoPractica=$_POST['tipoPractica'];
			$resultados=$_POST['resultados'];
			$perfil=$_POST['perfil'];
			$nroEstudiantes=$_POST['nroEstudiantes'];
			$descripcionTrabajo=$_POST['descripcionTrabajo'];


			$query3=mysql_query("update proyectos set nombreSolicitante = '$nombreSolicitante', tipoOrganizacion = '$tipoOrganizacion', dependencia = '$dependencia', telefono = '$telefono', email = '$email', tipoPractica = '$tipoPractica', resultados = '$resultados', perfil = '$perfil', nroEstudiantes = '$nroEstudiantes', descripcionTrabajo = '$descripcionTrabajo' where id='$id'");
			if($query3)
			{
				header('location:listar.php');
			}
		}
		$query1=mysql_query("select * from proyectos where id='$id'");
		$query2=mysql_fetch_array($query1);
	?>
	<form method="post" action="">
		Nombre solicitante:<input type="text" name="nombreSolicitante" value="<?php echo $query2['nombreSolicitante']; ?>" /><br />
		Tipo Organizacion:<input type="text" name="tipoOrganizacion" value="<?php echo $query2['tipoOrganizacion']; ?>" /><br />
		Dependencia:<input type="text" name="dependencia" value="<?php echo $query2['dependencia']; ?>" /><br />
		Teléfono:<input type="text" name="telefono" value="<?php echo $query2['telefono']; ?>" /><br />
		Email:<input type="text" name="email" value="<?php echo $query2['email']; ?>" /><br />
		Tipo Práctica:<input type="text" name="tipoPractica" value="<?php echo $query2['tipoPractica']; ?>" /><br />
		Resultados:<input type="text" name="resultados" value="<?php echo $query2['resultados']; ?>" /><br />
		Perfil:<input type="text" name="perfil" value="<?php echo $query2['perfil']; ?>" /><br />
		Nro. Estudiantes:<input type="text" name="nroEstudiantes" value="<?php echo $query2['nroEstudiantes']; ?>" /><br />
		Descripción:<input type="text" name="descripcionTrabajo" value="<?php echo $query2['descripcionTrabajo']; ?>" /><br />
		<br />
		<input type="submit" name="submit" value="update" />
	</form>
	<?php
		}
	?>
</body>
</html>