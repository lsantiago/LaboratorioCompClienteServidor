<html>
<head>
	<!-- Para soporte de caracteres latinos -->
	<meta charset="utf-8">

	<!-- Autor y descripción de la página-->
	<meta name = "author" content="Karla Romero, Santiago Quiñones">
	<meta name = "description" contet="Lista de proyectos de gestión productiva">
	
	<title>Solicitud Prácticum 3.2 - UTPL - INFORMÁTICA</title>

	<!-- Librerías -->
	<script src="js/jquery.2.1.min.js"></script>

	<!-- Estilo de la página-->
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
	
	<!-- Script para buscar información de proyectos -->
	<script type="text/javascript" src="js/buscar.js"></script>
</head>
<body>
	<?php 

			// INFORMACIÓN DE ENCABEZADO
		    /**
		    Imprime el correo
		    **/
		    function imprimirCorreo(){
		    	$correo = obtenerCorreo();
		    	echo '<a href="mailto:'. $correo. '">'. $correo .'</a>';
		    }


				/**
			Obtiene la dirección
			**/
			function obtenerDireccion(){
				$direccion = 'Titulación de Sistemas Informáticos y computación';
				return $direccion;
			}

			/**
			**/
			function obtenerCorreo(){
				$correo = 'mpabad@utpl.edu.ec';
				return $correo;
			}

			/**
			Obtiene el teléfono
			**/
			function nombreDirector(){
				$telefono = 'Ing. Patricio Abad - Coordinador de Titulación';
				return $telefono;
			}

			/**
			
			**/
			function obtenerNombre(){
				$nombre = "Solicitud estudiantes para Practicum 3.2 - UTPL Informática";
				return $nombre;
			}

			/** Obtiene la descripción del objetivo del formulario **/
			function obtenerAbout(){
				$about = '<p>El siguiente formulario recoge los datos necesarios para asignar estudiantes de Practicum 3.2 correspondiente a octavo ciclo de la Titulación. 
				Las actividades a asignar deben estar  viculadas a proyectos de investigación de Docentes Investigadores que son parte de las secciones de los Departamentos del área tencológica. Tener presente que el trabajo de los alumnos debe ser el de un Asistente dentro de los proyectos que apoyan en el desarrollo y trabajo a los docentes responsables.

			</p>

			<p>Para las solicitudes de estudiantes se solicita tomar en cuenta las actividades y competencias relacionadas a este nivel de Practicum.</p>';

				return $about;
			}


		?>
		<div class="contenidoLista">

			<!-- INFORMACIÓN REGISTRO PROYECTOS -->
			<div class = "seccion">
					<p>
						<h1>
							<?php print(obtenerNombre()); ?>
						</h1>						
					</p>
					<p>
						<?php echo obtenerDireccion(); ?> <br/>
						<?php echo nombreDirector(); ?> <br/>
						<?php imprimirCorreo() ?>
					</p>

					<p>Universidad Técnica Particular de Loja</p>
					<p><a href="./index.php" ><-<-< REGRESAR</a></p>
			</div>
			<!-- END INFORMACIÓN REGISTRO PROYECTOS -->

			
			<!-- LISTA DE PROYECTOS -->
			<div class="seccion">
				<h2>BECARIOS SOLICITADOS POR PROYECTO</h2>
					
					<input type="text" id="buscador" placeholder="Escribe datos a buscar..." /><br><br>

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
							<td class = 'celda destacado' width='150'>Nombre Solicitante </td>
							<td class = 'celda destacado'>Tipo Organizacion </td>
							<td class = 'celda destacado'>Dependencia </td>
							<td class = 'celda destacado'>Teléfono </td>
							<td class = 'celda destacado'>Email </td>
							<td class = 'celda destacado'>Tipo Practica </td>
							<td class = 'celda destacado'>Resultados </td>
							<td class = 'celda destacado'>Perfil </td>
							<td class = 'celda destacado'>Nro. Estudiantes</td>
							<td class = 'celda destacado'>Descripción</td>
							<td colspan=\"2\">Opciones</td>
							
						</tr>
					</thead><tbody>";
					while($resultadoArr = $resultado -> fetch_array())
					{
						echo "<tr><td class = 'celda'>".$resultadoArr['nombreSolicitante']."</td>";
						echo "<td class = 'celda'>".$resultadoArr['tipoOrganizacion']."</td>";
						echo "<td class = 'celda'>".$resultadoArr['dependencia']."</td>";
						echo "<td class = 'celda'>".$resultadoArr['telefono']."</td>";
						echo "<td class = 'celda'>".$resultadoArr['email']."</td>";
						echo "<td class = 'celda'>".$resultadoArr['tipoPractica']."</td>";
						echo "<td class = 'celda'>".$resultadoArr['resultados']."</td>";
						echo "<td class = 'celda'>".$resultadoArr['perfil']."</td>";
						echo "<td class = 'celda'>".$resultadoArr['nroEstudiantes']."</td>";
						echo "<td class = 'celda'>".$resultadoArr['descripcionTrabajo']."</td>";
						echo "<td><a href='editar.php?id=".$resultadoArr['id']."'>Editar</a></td>";
						echo "<td ><a href='eliminar.php?id=".$resultadoArr['id']."'>x</a></td><tr>";
					}
					echo "</tbody>"
					?>
				
			</table>
			
			<footer> 
					<div class="menu2">
						 <ul>
							<li><a href="./index.php">Inicio</a></li>
							<li><a href="#">Lineamientos</a></li>
							<li><a href="http://utpl.edu.ec">UNIVERSIDAD TÉCNICA PARTICULAR DE LOJA</a></li>
						</ul>
					 </div>
		   
					<p>Todos los derechos reservados 2017, Registro de Proyectos GP 3.2. Diseñado por: Karla Romero, Santiago Quiñones</p>
				</footer>
	</div>
	<!-- END LISTA DE PROYECTOS -->

</body>
</html>