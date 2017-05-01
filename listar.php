<html>
<head>
	<!-- Para soporte de caracteres latinos -->
	<meta charset="utf-8">

	<!-- Autor y descripción de la página-->
	<meta name = "author" content="Karla Romero, Santiago Quiñones">
	<meta name = "description" contet="Lista de proyectos de gestión productiva">
	
	<title>Lista de proyectos</title>

	<!-- Estilo de la página-->
	<!-- <link rel="stylesheet" type="text/css" href="css/estilo.css"> -->
	
	
	<script src="js/jquery.2.1.min.js"></script>
	<!-- Script para buscar información de proyectos -->
	<script type="text/javascript" src="js/buscar.js"></script>
</head>
<body>
	<input type="text" id="buscador" placeholder="Escribe el texto a buscar..." />

	<?php
	include('conf/configuracionDB.php');
 

	$query1=mysql_query("select id, nombreSolicitante, tipoOrganizacion, dependencia, telefono, email, tipoPractica, resultados, perfil, nroEstudiantes, descripcionTrabajo from proyectos");
	echo "<table id=\"tabla\">
	         <thead>
		         <tr>
		        	<td>Nombre Solicitante </td>
					<td>Tipo Organizacion </td>
					<td>Dependencia </td>
					<td>Teléfono </td>
					<td>Email </td>
					<td>Tipo Practica </td>
					<td>Resultados </td>
					<td>Perfil </td>
					<td>Nro. Estudiantes</td>
					<td>Descripción</td>

			         <td></td>
			         <td></td>
			     </tr>
			 </thead><tbody>";
	while($query2=mysql_fetch_array($query1))
	{
		echo "<tr><td>".$query2['nombreSolicitante']."</td>";
		echo "<td>".$query2['tipoOrganizacion']."</td>";
		echo "<td>".$query2['dependencia']."</td>";
		echo "<td>".$query2['telefono']."</td>";
		echo "<td>".$query2['email']."</td>";
		echo "<td>".$query2['tipoPractica']."</td>";
		echo "<td>".$query2['resultados']."</td>";
		echo "<td>".$query2['perfil']."</td>";
		echo "<td>".$query2['nroEstudiantes']."</td>";
		echo "<td>".$query2['descripcionTrabajo']."</td>";
		echo "<td><a href='editar.php?id=".$query2['id']."'>Editar</a></td>";
		echo "<td><a href='eliminar.php?id=".$query2['id']."'>x</a></td><tr>";
	}
	echo "</tbody>"
	?>
</ol>
</table>
</body>
</html>