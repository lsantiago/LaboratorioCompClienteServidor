	<!DOCTYPE html>
	<html>
	<head>
		
		<!-- Para soporte de caracteres latinos -->
		<meta charset="utf-8">

		<!-- Estilo de la página-->
		<link rel="stylesheet" type="text/css" href="css/estilo.css">
		
		<title>CV de <?php echo obtenerNombre(); ?></title>
	</head>
	<body>

		<?php 

			// GLOBAL DATA
			$fecha_nacimiento = obtenerFechaNac();
			$formacion = obtenerFormacion();
			$experiencia = obtenerExperiencia();
			$publicaciones = obtenerPublicaciones();
			$proyectos = obtenerProyectos();

			// END GLOBAL DATA
			

			// END EMULACIÓN DE CONSULTAS A BASE DE DATOS


			// PRESENTACIÓN DE INFORMACIÓN

			/**
			Imprime la información del CV
			@datos Arreglo con la información de fechas y detalles de las actividades
			**/
		    function imprimirDetalles($datos){
		    	echo '<table border = "0"><tbody>';

		    	// recorre todos los elementos del arreglo utilizando la fecha como indice
		    	foreach($datos as $fecha=>$value) { 
			     	echo "<tr><td width=\"100px\">";
			     	
			     	echo "<p>". $fecha ;  // $fecha es el indice dentro del arreglo

			         // Imprime la duración si existe
			         if(sizeof($datos) > 3){
			         	echo '<br/><span class="duracion">('. $datos[$fecha][3]. ')</span>';
			         }

			         echo "</p> </td>";    

			         echo '<td><p><span class = "titulo">'. $datos[$fecha][0] .'</span><br/>'. $datos[$fecha][1]; 
			         
			         // Imprime información complementaria si existe
			         if(sizeof($datos) > 2){
			         	echo '<br/>'. $datos[$fecha][2];
			         }

			         echo "</p></td>";

			         echo "</tr>";
			    }

			    echo '</tbody></table>';	
		    }

		    /**
		    Imprime el correo
		    **/
		    function imprimirCorreo(){
		    	$correo = obtenerCorreo();
		    	echo '<a href="mailto:'. $correo. '">'. $correo .'</a>';
		    }

		    /**
		    Imprime y formatea la fecha de nacimiento
		    **/
		    function imprimirFechaNacimiento(){
		    	$fecha_nacimiento = obtenerFechaNac();

				// separa el año, mes y día de la cadena y los almacena en los elementos de la lista
				list($anio_nac, $mes_nac, $dia_nac) = split('[/.-]', $fecha_nacimiento);

				$meses = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");

				echo 'Desde el '. $dia_nac. ' de '. $meses[$mes_nac - 1]. ' de '. $anio_nac;


		    }

		    function imprimirFoto(){
		    	$ruta = obtenerFoto();

		    	echo '<img id="foto" src="'. $ruta. '" alt = "Foto CV'. obtenerNombre(). '" >';
		    }
			// END PRESENTACIÓN DE INFORMACIÓN

			// EMULACIÓN DE CONSULTAS A BASE DE DATOS
			
			/**
			Obtiene la fecha de nacimiento
			**/
			function obtenerFechaNac(){
				$fechaNac = "1984/6/1";
				return $fechaNac;	
			}

			/**
			Obtiene la dirección
			**/
			function obtenerDireccion(){
				$direccion = 'Barrio Belén, Avenida Isidro Ayora, frente a la Iglesia';
				return $direccion;
			}

			/**
			**/
			function obtenerCorreo(){
				$correo = 'lsquinones@gmail.com';
				return $correo;
			}

			/**
			Obtiene el teléfono
			**/
			function obtenerTelefono(){
				$telefono = '+593 988995308 ';
				return $telefono;
			}



			/**
			Obtiene el nombre de la persona del CV
			**/
			function obtenerNombre(){
				$nombre = "Santiago Quiñones";
				return $nombre;
			}

			/**
			Obtener foto
			**/
			function obtenerFoto(){
				$ruta = 'imagenes/foto-cv.jpg';

				return $ruta;
			}

			/**
			Obtiene el about
			**/
			function obtenerAbout(){
				$about = '<p>Soy ingeniero en "Sistemas Informáticos y Computación" y trabajo como docente investigador en la Universidad Técnica Particular de Loja en asignaturas de Cálculo, Programación y Arquitectura de Aplicaciones desde hace 9 años. Pertenezco a la Sección Departamental Tecnologías Avanzadas de la Web, Departamento de Computación y Electrónica. En la actualidad me encuentro involucrado en el desarrollo de Laboratorios Virtuales de Simulación (Ingeniería Sísmica, Hidraúlica e Hidrología), y en la Automatización de Procesos para el Diseño de Redes de Riego y Gestión Urbana de Agua Potable. 
				    </p>

				    <p>Me gusta mucho trabajar en el desarrollo de aplicaciones e implementar arquitecturas de software. En mis espacios libres dedico mi tiempo a leer y a jugar fútbol.</p>';

				return $about;
			}
			
			/**
			Obtiene información de formación
			**/
			function obtenerFormacion(){
				// Datos de formación (Información que se puede obtener de una base de datos)
				$formacion = array('2017-presente' => array('Master en Ingeniería de Software y Sistemas Informáticos', 'Universidad Internacional de la Rioja'),
					'2001-2006' => array('Ingeniero en Sistemas Informáticos y Computación', 'Universidad Técnica Particular de Loja')
					);
					
				return $formacion;	
			}

			/**
			Obtiene información de experiencia
			**/
			function obtenerExperiencia(){
				// Datos de experiencia
				$experiencia = array('2008-Presente' => array('Docente Investigador en UTPL', 'Cálculo, Fundamentos de Programación, Programación de Algoritmos, Arquitectura de Aplicaciones')
					);
					
				return $experiencia;	
			}

			/**
			Obtiene la información de las publicaciones
			**/	
			function obtenerPublicaciones(){
				// Datos de publicaciones
				$publicaciones = array('2016' => array('Sistema de Obtención de Imagenes Satelitales HRPT aplicando Infraestructura de Datos Espaciales ', 'Indice: Latindex Catálogo'),
					'2015' => array('Integración de Redes de Sensores para visualización de datos meteorológicos en tiempo real y su uso en Infraestructura de Datos Espaciales', 'Indice: Latindex Catálogo'),
					'2015' => array('Design of a smart parking system using wireless sensor network', 'Indice: ISI')
					);

				return $publicaciones;
			}
			
			/**
			Obtiene la información de los proyectos
			**/
			function obtenerProyectos(){
				// Datos de proyectos
				$proyectos = array(
					'2011-2012' => array('HYDROVLAB, Laboratorio Virtual de Hidrología', 'Tipo proyecto: Investigación', 'Covertura: Nacional', '15 meses'),
					'2011-2011' => array('Configuración y estructuración de herramientas tecnológicas para el apoyo a la gestión técnica de abastecimientos. Innovación tecnológica para mejorar y optimizar la gestión hidráulica en sistemas de abastecimiento de agua potable', 'Tipo proyecto: Extensión', 'Covertura: Internacional', '12 meses'),
					'2014-2014' => array('Algoritmos y metodología para el diseño óptimo de sistemas de riego operando a turnos', 'Tipo proyecto: Investigación', 'Covertura: Nacional', '12 meses'),
					'2015-2016' => array('Desarrollo e innovación de redes de sensores inalámbricos para la recolección de variables medio ambientales de los bosques altos de montaña', 'Tipo proyecto: Investigación', 'Covertura: Local', '24 meses'),
					'2015-2016' => array('Proyecto Interno "Fenómeno del Niño"', 'Tipo proyecto: Investigación', 'Covertura: Nacional', '8 meses'),
					'2016-2016' => array('Generación y actualización de herramientas informáticas de análisis dinámico para el laboratorio virtual de ingeniería sísmica (VLEE) de la UTPL', 'Tipo proyecto: Investigación', 'Covertura: Local', '12 meses')
					);

				return $proyectos;
			}

			/**
			Obtiene la edad expresada en años, meses y días
			No se considera años bisiestos y se considera que el registro del año de nacimiento se lo hizo de forma correcta.
			@fecha_nacimiento Cadena con la fecha de nacimiento (año/mes/día)
			**/
			function obtenerEdad(){

				$fecha_nacimiento = obtenerFechaNac();

				// separa el año, mes y día de la cadena y los almacena en los elementos de la lista
				list($anio_nac, $mes_nac, $dia_nac) = split('[/.-]', $fecha_nacimiento);
				
				// obtiene la fecha actual del servidor
				$anio_act = date("Y");
				$mes_act = date("m");
				$dia_act = date("d");

				// actualiza los datos para la obtención de los días
				if($dia_act < $dia_nac){
					$dia_act = $dia_act + 30;
					$mes_act = $mes_act - 1;
				}

				// actualiza los datos para la obtención de los meses
				if($mes_act < $mes_nac){
					$mes_act = $mes_act + 12;
					$anio_act = $anio_act - 1; 
				}

				// determina la edad
				$anio_edad = $anio_act - $anio_nac ;
				$mes_edad = $mes_act - $mes_nac;
				$dia_edad = $dia_act - $dia_nac;

				return $anio_edad." años, ".$mes_edad." meses, ".$dia_edad.' días';
			}

			/**
				Devuelve una frase dependiendo del número del día
			**/
			function obtenerMensaje(){
				// Mensajes por cada día de la semana
				$mensaje = array('Los Lunes no lucen tan malo si los ves con la actitud correcta.', 
					'Con una sonrisa todo se arregla ¡Feliz Martes!', 'Que nada te detenga. Feliz Miércoles.', 
					'Ya falta poco. Feliz Jueves.', 
					'¡No te amargues! Feliz viernes.', 
					'Te deseo un Feliz Sábado.', 
					'Solo estoy recuperando energías. Feliz Domingo.');

				// obtiene el número de día de la semana
				$dia = date('w');
				
				// se optimiza el uso del switch
				return $mensaje[$dia - 1];
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
						
						<?php  
							imprimirFechaNacimiento();
							print('<br>'.'Con '.obtenerEdad().' hasta el momento.');
							print('<br><i>'.obtenerMensaje().'</i>');
						?>	
					</p>
					<p>
						<?php echo obtenerDireccion(); ?> <br/>
						<?php echo obtenerTelefono(); ?> <br/>
						<?php imprimirCorreo() ?>
					</p>

					

					<p>Loja - Ecuador</p>
					
				</div>
				<div class="espacio-foto">
					<?php imprimirFoto(); ?>
				</div>
			</div>
			
			<!-- Sobre mí -->
			<div class="seccion">
				<h2>ACERCA DE MÍ</h2>
				<?php echo obtenerAbout(); ?>
			</div>

			<!-- Formación  -->
			<div class = "seccion">
				<h2>FORMACIÓN</h2>
				<?php imprimirDetalles($formacion); ?>
			</div>

			<!-- Experiencia laboral -->
			<div class = "seccion">
				<h2>EXPERIENCIA LABORAL</h2>
				<?php imprimirDetalles($experiencia); ?>
			</div>


			<!-- Publicaciones -->
			<div class = "seccion">
				<h2>PUBLICACIONES</h2>
				<?php imprimirDetalles($publicaciones); ?>
			</div>

			<!-- Proyectos -->
			<div class = "seccion">
				<h2>PROYECTOS</h2>
				<?php imprimirDetalles($proyectos); ?>
			</div>
		</div>
	</body>
	</html>

