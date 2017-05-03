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
					
				</div>
				
			</div>
			
			<!-- Sobre mí -->
			<div class="seccion">
				<h2>PUNTOS A CONCIDERAR</h2>
				<?php echo obtenerAbout(); ?>
			</div>

			<!-- Formación  -->
			<div class = "seccion">
				<h2>FORMULARIO DE SOLICITUD (* Obligatorios)</h2>
				<form name = "registro" action="registro.php" onsubmit="return validateForm()" method="POST">
                    <table>
                    <tr>
                        <td>
                            <label for="nombApellidos">Nombres y Apellidos <span><em>(*)</em></span></label>
                        	<input type="text" name="nombres">
                        </td>
                    </tr>
                    <tr>
                        <td>
                        	<label for="depen">Dependecia que Solicita:<span><em>(*)</em></span></label>  	 							
                            <input type="text" name="dependencia">
                        </td>
                    </tr>
                     <tr>
                        <td>
                        	<label for="Telef">Teléfono:<span><em>(*)</em></span></label>
                            <input type="text" name="telefono">
                        </td>
                    </tr>
                    <tr>
                        <td>
                        	<label for="mail">Correo Electrónico:<span><em>(*)</em></span></label> 
                            <input type="text" name="correo">
                        </td>
                    </tr>

 					<tr>
                    	<td>
                        	<label for="perf">Perfil Requerido:<span><em>(*)</em></span></label>
                            <select name="perfil">              
                                <option>Programador</option>                                
                                <option>TIC´s</option>                                
                                <option>Redes y telecomunicaciones</option>
                	        </select>
                		</td>
                    </tr>
                     <td>
                        	<label for="prop">Propósito del Proyecto:<span><em>(*)</em></span></label> 
                            <textarea cols="40" rows="5" name="proposito"></textarea>
                        </td>
                    <tr>
                        <td>  <input type="submit" value="Enviar"> </td>
                    </tr>
                    </table>
				</form>
			</div>
            	<!-- Sobre mí -->
			<div class="seccion">
				<h2>CONSULTE AQUÍ QUÉ PROYECTOS HAN SOLICITADO BECARIOS PREACTICUM 3.2 </h2>
				<form name = "consultar" action="proyectos.php"  method="POST">
                <input type="submit" value="Consultar">
                </form>
			</div>

		</div>
	</body>
	</html>
