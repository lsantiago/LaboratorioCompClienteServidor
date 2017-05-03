	<!DOCTYPE html>
	<html>
	<head>
		
		<!-- Para soporte de caracteres latinos -->
		<meta charset="utf-8">

		<!-- Estilo de la página-->
		<link rel="stylesheet" type="text/css" href="css/estilo.css">
		<script src="js/validar.js" type="text/javascript"></script>
		<title>Solicitud Prácticum 3.2 - UTPL - INFORMÁTICA ?></title>
	</head>
	<body>
		<?php 

			// INFORMACIÓN SOLICITUDES

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
				$direccion = 'Titulación de Sistemas Informáticos y Computación';
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
			function obtenerTitulo(){
				$nombre = "Solicitud estudiantes para Practicum 3.2 - UTPL Informática";
				return $nombre;
			}

						/**
			Obtiene la descripción del objetivo del formulario
			**/
			function obtenerPuntosConsiderar(){
				$about = '<p>El siguiente formulario recoge los datos necesarios para asignar estudiantes de Practicum 3.2 correspondiente a octavo ciclo de la Titulación. 
Las actividades a asignar deben estar  vinculadas a proyectos de investigación de Docentes Investigadores que son parte de las secciones de los Departamentos del área tencológica. Tener presente que el trabajo de los alumnos debe ser el de un Asistente dentro de los proyectos que apoyan en el desarrollo y trabajo a los docentes responsables.

				    </p>

				    <p>Para las solicitudes de estudiantes se solicita tomar en cuenta las actividades y competencias relacionadas a este nivel de Practicum 3.2.</p>';

				return $about;
			}
	
			
		?>

		

		<!--Contenido-->
		<div class = "contenido">
			<!-- INFORMACIÓN DE REGISTRO DE PROYECTOS -->
			<div class = "seccion">
					<p>
						<h1>
							<?php print(obtenerTitulo()); ?>
						</h1>
					</p>
					<p>
						<?php echo obtenerDireccion(); ?> <br/>
						<?php echo nombreDirector(); ?> <br/>
						<?php imprimirCorreo() ?>
					</p>
					<p>Universidad Técnica Particular de Loja</p>
			</div>
			<!-- END INFORMACIÓN DE REGISTRO DE PROYECTOS -->
			
			<!-- PUNTOS A CONSIDERAR -->
			<div class="seccion">
				<h2>PUNTOS A CONSIDERAR</h2>
				<?php echo obtenerPuntosConsiderar(); ?>
			</div>
			<!-- END PUNTOS A CONSIDERAR -->
			

			<!-- LISTA DE PROYECTOS -->
			<div class = "seccion">
				<h2>FORMULARIO DE SOLICITUD (* Obligatorios)</h2>
				
				
				<form method="post" action="registro.php" onsubmit="return validateForm()" name = "registro">
					<table id="formulario">
						<tbody>
							<tr><td class="espacioTextoElementoForm">Nombre Solicitante<span><em>(*)</em></span></td><td><input type="text" name="nombreSolicitante"></td></tr>
							<tr><td class="espacioTextoElementoForm">Tipo Organizacion<span><em>(*)</em></span></td>
								<td><select name="tipoOrganizacion">
										<option value=""></option> 
					   					<option value="Interna">Interna (UTPL)</option> 
					   					<option value="Externa">Externa</option> 
					   					<option value="Vinculacion">Vinculación</option>
									</select>
								</td>
							</tr>
							<tr><td class="espacioTextoElementoForm">Dependencia<span><em>(*)</em></span></td><td><input type="text" name="dependencia"></td></tr>
							<tr><td class="espacioTextoElementoForm">Teléfono<span><em>(*)</em></span></td><td><input type="text" name="telefono"></td></tr>
							<tr><td class="espacioTextoElementoForm">Email<span><em>(*)</em></span></td><td><input type="text" name="email"></td></tr>
							<tr><td class="espacioTextoElementoForm">Tipo Práctica<span><em>(*)</em></span></td>
								<td><select name="tipoPractica">
										<option value=""></option>
										<option value="Prácticas técnicas nivel inicial">Prácticas técnicas nivel inicial</option>
										<option value="Participación en proyectos UTPL">Participación en proyectos UTPL</option>
										<option value="Prácticas pre profesionales en empresa">Prácticas pre profesionales en empresa</option>
										<option value="Proyecto de vinculación">Proyecto de vinculación</option>
									</select>
								</td>
							</tr>

							<tr><td class="espacioTextoElementoForm">Resultados<span><em>(*)</em></span></td><td><input type="text" name="resultados"></td></tr>
							
							<tr><td class="espacioTextoElementoForm">Perfil requerido<span><em>(*)</em></span></td>
								<td><select name="perfil">
										<option value=""></option>
										<option value="Operación, mantenimiento HW/SW/Redes">Operación, mantenimiento HW/SW/Redes</option>
										<option value="Desarrollo de aplicaciones">Desarrollo de aplicaciones</option>
										<option value="Investigación">Investigación</option>
										<option value="Capacitación a terceros (solo vinculación)">Capacitación a terceros (solo vinculación)</option>
									</select>
								</td>
							</tr>
							<tr><td class="espacioTextoElementoForm">Número de estudiantes<span><em>(*)</em></span></td><td><input type="number" name="nroEstudiantes"></td></tr>
							<tr><td class="espacioTextoElementoForm">Descripción de trabajo<span><em>(*)</em></span></td><td><textarea name="descripcion" rows="10" cols="30"placeholder="Descripción del proyecto"></textarea></td></tr>	
							<tr><td></td></tr>
							<tr><td></td><td id="botonEnviar"><input type="submit" name="submit"><input type="reset" text="Limpiar"></td></tr>	
						</tbody>
					</table>
				</form>
			</div>
            <!-- LISTA DE PROYECTOS -->

            <!-- CONSULTA PROYECTOS -->
			<div class="seccion">
				<h2>CONSULTE AQUÍ QUÉ PROYECTOS HAN SOLICITADO BECARIOS PRACTICUM 3.2 </h2>
				<form name = "consultar" action="listar.php"  method="POST">
                <input type="submit" value="Consultar">
                </form>
			</div>
			<!-- END CONSULTA PROYECTOS -->

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

	
	</body>
	</html>
