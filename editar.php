<html>
<head>
	<!-- Para soporte de caracteres latinos -->
	<meta charset="utf-8">

	<!-- Autor y descripción de la página-->
	<meta name = "author" content="Karla Romero, Santiago Quiñones">
	<meta name = "description" contet="Edición de proyectos">
	
	<title>Edición de proyecto</title>

	<!-- Estilo de la página-->
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
	<?php
	require_once 'conf/StartConexion.php';

	// valida que el id este definido y no sea null
	if(isset($_GET['id']))
	{
		$id=$_GET['id'];

		// valida si el formulairo fue enviado
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
			$descripcionTrabajo=$_POST['descripcion'];

			$sql = "update proyectos set nombreSolicitante = '$nombreSolicitante', tipoOrganizacion = '$tipoOrganizacion', dependencia = '$dependencia', telefono = '$telefono', email = '$email', tipoPractica = '$tipoPractica', resultados = '$resultados', perfil = '$perfil', nroEstudiantes = '$nroEstudiantes', descripcionTrabajo = '$descripcionTrabajo' where id='$id'";

			// si existe un error en la ejecución de la consulta lanza un error
			if (!$resultado = $mysqli->query($sql)) {
    			echo "Error en la consulta.";
				exit;
			}

			// redireccion a la pagina listar.php
			header('location:listar.php');
			
		}

		// Consulta para despligue de datos en el formulario
		$sql = "select * from proyectos where id='$id'";
		$query1 = $mysqli->query($sql);
		$query2= $query1 -> fetch_array();
	?>

	<div class = "contenido">
		<div class="seccion">
			
				<!-- FORMULARIO DE ACTUALIZACIÓN -->
				<form method="post" action="">
					<table>
						<tbody>
							<tr><td class="espacioTextoElementoForm">Nombre Solicitante</td><td><input type="text" name="nombreSolicitante" value="<?php echo $query2['nombreSolicitante']; ?>" ></td></tr>
							<tr><td class="espacioTextoElementoForm">Tipo Organizacion</td>
								<td>
								   <?php 
								   	  $tipoOrganizacion = $query2['tipoOrganizacion'];
								   	  echo "<select name='tipoOrganizacion'>
                 							<option value='Interna'".($tipoOrganizacion == 'Interna' ? ' selected' : '' )." >Interna</option>
                 							<option value='Externa'".($tipoOrganizacion == 'Externa' ? ' selected' : '' ).">Externa</option>
                 							<option value='Vinculacion'".($tipoOrganizacion == 'Vinculacion' ? ' selected' : '' ).">Vinculacion</option>
            								</select>";
								   ?>
								</td>
							</tr>
							<tr><td class="espacioTextoElementoForm">Dependencia</td><td><input type="text" name="dependencia" value="<?php echo $query2['dependencia']; ?>"></td></tr>
							<tr><td class="espacioTextoElementoForm">Teléfono</td><td><input type="text" name="telefono" value="<?php echo $query2['telefono']; ?>"></td></tr>
							<tr><td class="espacioTextoElementoForm">Email</td><td><input type="text" name="email" value="<?php echo $query2['email']; ?>"></td></tr>
							<tr><td class="espacioTextoElementoForm">Tipo Práctica</td>
								<td>
									

									<?php 
								   	  $tipoPractica = $query2['tipoPractica'];
								   	  echo "<select name='tipoPractica'>
                 							<option value='Prácticas técnicas nivel inicial'".($tipoPractica == 'Prácticas técnicas nivel inicial' ? ' selected' : '' )." >Prácticas técnicas nivel inicial</option>
                 							<option value='Participación en proyectos UTPL'".($tipoPractica == 'Participación en proyectos UTPL' ? ' selected' : '' ).">Participación en proyectos UTPL</option>
                 							<option value='Prácticas pre profesionales en empresa'".($tipoPractica == 'Prácticas pre profesionales en empresa' ? ' selected' : '' ).">Prácticas pre profesionales en empresa</option>
                 							<option value='Proyecto de vinculación'".($tipoPractica == 'Proyecto de vinculación' ? ' selected' : '' ).">Proyecto de vinculación</option>
            								</select>";
								   ?>
								</td>
							</tr>
							<tr><td class="espacioTextoElementoForm">Resultados</td><td><input type="text" name="resultados" value="<?php echo $query2['resultados']; ?>"></td></tr>
							
							<tr><td class="espacioTextoElementoForm">Perfil requerido</td>
								<td>
								    <?php 
								   	  $perfil = $query2['perfil'];
								   	  echo "<select name='perfil'>
                 							<option value='Operación, mantenimiento HW/SW/Redes'".($perfil == 'Operación, mantenimiento HW/SW/Redes' ? ' selected' : '' )." >Operación, mantenimiento HW/SW/Redes</option>
                 							<option value='Desarrollo de aplicaciones'".($perfil == 'Desarrollo de aplicaciones' ? ' selected' : '' ).">Desarrollo de aplicaciones</option>
                 							<option value='Investigación'".($perfil == 'Investigación' ? ' selected' : '' ).">Investigación</option>
                 							<option value='Capacitación a terceros (solo vinculación)'".($perfil == 'Capacitación a terceros (solo vinculación)' ? ' selected' : '' ).">Capacitación a terceros (solo vinculación)</option>
            								</select>";
								   ?>
								</td>
							</tr>
							<tr><td class="espacioTextoElementoForm">Número de estudiantes</td><td><input type="number" name="nroEstudiantes" value="<?php echo $query2['nroEstudiantes']; ?>"></td></tr>
							<tr><td class="espacioTextoElementoForm">Descripción de trabajo</td><td><textarea name="descripcion" rows="10" cols="30"placeholder="Descripción del proyecto"><?php echo $query2['descripcionTrabajo']; ?></textarea></td></tr>	
							<tr><td></td></tr>
							<tr><td></td><td id="botonEnviar"><input type="submit" name="submit" value="update" /></td></tr>	
						</tbody>
					</table>
				</form>
				<!-- FORMULARIO DE ACTUALIZACIÓN -->
			
		</div>
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
	
	<?php
	}
	?>

	</body>
</html>