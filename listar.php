<html>
<head>
	<!-- Para soporte de caracteres latinos -->
	<meta charset="utf-8">

	<!-- Autor y descripción de la página-->
	<meta name = "author" content="Karla Romero, Santiago Quiñones">
	<meta name = "description" contet="Lista de proyectos de gestión productiva">
	
	<title>Lista de proyectos.</title>

	<!-- Estilo de la página-->
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	
	
	<script src="js/jquery.2.1.min.js"></script>
	<!-- Script para buscar información de proyectos -->
	<script type="text/javascript" src="js/buscar.js"></script>
</head>
<body>
	<div class="contenidoLista">
		<div class="seccion">
				<input type="text" id="buscador" placeholder="Escribe el texto a buscar..." /><br><br>

				<?php
				include('conf/configuracionDB.php');

				$sql = "select id, nombreSolicitante, tipoOrganizacion, dependencia, telefono, email, tipoPractica, resultados, perfil, nroEstudiantes, descripcionTrabajo from proyectos";

				$resultado = $mysqli->query($sql);

				if (!$resultado = $mysqli->query($sql)) {
	    			echo "Error en la consulta.";
					exit;
				}


				echo "<table id=\"tabla\" >
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
				while($resultadoArr = $resultado -> fetch_array())
				{
					echo "<tr><td>".$resultadoArr['nombreSolicitante']."</td>";
					echo "<td>".$resultadoArr['tipoOrganizacion']."</td>";
					echo "<td>".$resultadoArr['dependencia']."</td>";
					echo "<td>".$resultadoArr['telefono']."</td>";
					echo "<td>".$resultadoArr['email']."</td>";
					echo "<td>".$resultadoArr['tipoPractica']."</td>";
					echo "<td>".$resultadoArr['resultados']."</td>";
					echo "<td>".$resultadoArr['perfil']."</td>";
					echo "<td>".$resultadoArr['nroEstudiantes']."</td>";
					echo "<td>".$resultadoArr['descripcionTrabajo']."</td>";
					echo "<td><a href='editar.php?id=".$resultadoArr['id']."'>Editar</a></td>";
					echo "<td><a href='eliminar.php?id=".$resultadoArr['id']."'>x</a></td><tr>";
				}
				echo "</tbody>"
				?>
			</ol>
			</table>
		</div>
	</div>
</body>
</html>