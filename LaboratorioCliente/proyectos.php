	<!DOCTYPE html>
	<html>
	<head>
		
		<!-- Para soporte de caracteres latinos -->
		<meta charset="utf-8">

		<!-- Estilo de la página-->
		<link rel="stylesheet" type="text/css" href="css/estilo.css">
		<script src="validar.js" type="text/javascript"></script>
		<title>Solicitud Prácticum 3.2 - UTPL - INFORMÁTICA ?></title>
	</head>
	<body>

		<?php 

			// SOLICITUD DE FORMULARIO


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

						/**
			Obtiene la descripción del objetivo del formulario
			**/
			function obtenerAbout(){
				$about = '<p>El siguiente formulario recoge los datos necesarios para asignar estudiantes de Practicum 3.2 correspondiente a octavo ciclo de la Titulación. 
Las actividades a asignar deben estar  viculadas a proyectos de investigación de Docentes Investigadores que son parte de las secciones de los Departamentos del área tencológica. Tener presente que el trabajo de los alumnos debe ser el de un Asistente dentro de los proyectos que apoyan en el desarrollo y trabajo a los docentes responsables.

				    </p>

				    <p>Para las solicitudes de estudiantes se solicita tomar en cuenta las actividades y competencias relacionadas a este nivel de Practicum.</p>';

				return $about;
			}
	
			
		?>

		<!--Contenido del CV-->
		<div class = "contenido">
			<!-- Contactos -->
			<div class = "infoto">
				<div class="informacion">
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
                    <p><a href="http://localhost/LaboratorioCliente/" ><-<-< REGRESAR</a></p>

					
				</div>
				
			</div>
            
			
			<!-- Sobre mí -->
			<div class="seccion">
				<h2>BECARIOS SOLICITADOS POR PROYECTO</h2>
                
 <table class="tabla"> 
    <tr> 
      <td class = "celda" width='150' style='font-weight: bold'>NOMBRES</td> 
      <td class = "celda" style='font-weight: bold'>DEPENDENCIA</td> 
      <td class = "celda" style='font-weight: bold'>TELÉFONO</td>  
      <td class = "celda" style='font-weight: bold'>CORREO</td> 
      <td class = "celda" style='font-weight: bold'>PERFÍL</td>
      <td class = "celda" style='font-weight: bold'>DESCRIPCIÓN</td>  
    </tr> 
	<?php 
	    //Conexión a la DB
		$conexion = mysql_connect("localhost","root","") or die ("<h2> No se encuentra el server </h2>");
        $db = mysql_select_db ("becariosDB",$conexion) or die ("<h2> No se encuentra la base de datos </h2>");
		//consulta a la tabla
		$query = "SELECT * FROM solicitudes";     
        $result = mysql_query($query); 
		//Genera la tabla con los valore de la base de datos
		while ($registro = mysql_fetch_array($result)){ 
		echo " 
			<tr> 
			  <td class = 'celda'>".$registro['nombres']."</td> 
			  <td class = 'celda'>".$registro['dependencia']."</td> 
			  <td class = 'celda'>".$registro['telefono']."</td> 
			  <td class = 'celda'>".$registro['correo']."</td> 
			  <td class = 'celda'>".$registro['perfil']."</td> 
			  <td class = 'celda2'>".$registro['descripcion']."</td>
			  <td class = 'limpiar'></td> 
			</tr> 
		"; 
		}  
				
				
				
?> 
   </table> 
			</div>

				

		</div>
	</body>
	</html>
