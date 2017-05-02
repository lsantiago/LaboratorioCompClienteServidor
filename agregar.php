<html>
<head>
	<!-- Para soporte de caracteres latinos -->
	<meta charset="utf-8">

	<!-- Autor y descripción de la página-->
	<meta name = "author" content="Karla Romero, Santiago Quiñones">
	<meta name = "description" contet="Lista de proyectos de gestión productiva">
	
	<title>Nuevo proyecto</title>

	<!-- Estilo de la página-->
	<link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
	<?php
		include('conf/configuracionDB.php');

		// PENDIENTE DE VALIDAR DEL LADO DEL SERVIDOR
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

			$sql = "insert into proyectos values('','$nombreSolicitante','$tipoOrganizacion','$dependencia','$telefono','$email','$tipoPractica','$resultados','$perfil','$nroEstudiantes','$descripcion')";
			
			if (!$resultado = $mysqli->query($sql)) {
    			echo "Error en la consulta.";
				exit;
			}

			header("location:listar.php");
			
		}
	?>

	<div class = "contenido">
		<div class="seccion">
			<fieldset style="width:800px;">
				<!-- FORMULARIO PROYECTOS -->
				<form method="post" action="">
					<table>
						<tbody>
							<tr><td class="espacioTextoElementoForm">Nombre Solicitante</td><td><input type="text" name="nombreSolicitante"></td></tr>
							<tr><td class="espacioTextoElementoForm">Tipo Organizacion</td>
								<td><select name="tipoOrganizacion">
										<option value=""></option> 
					   					<option value="Interna">Interna (UTPL)</option> 
					   					<option value="Externa">Externa</option> 
					   					<option value="Vinculacion">Vinculación</option>
									</select>
								</td>
							</tr>
							<tr><td class="espacioTextoElementoForm">Dependencia</td><td><input type="text" name="dependencia"></td></tr>
							<tr><td class="espacioTextoElementoForm">Teléfono</td><td><input type="text" name="telefono"></td></tr>
							<tr><td class="espacioTextoElementoForm">Email</td><td><input type="text" name="email"></td></tr>
							<tr><td class="espacioTextoElementoForm">Tipo Práctica</td>
								<td><select name="tipoPractica">
										<option value=""></option>
										<option value="Prácticas técnicas nivel inicial">Prácticas técnicas nivel inicial</option>
										<option value="Participación en proyectos UTPL">Participación en proyectos UTPL</option>
										<option value="Prácticas pre profesionales en empresa">Prácticas pre profesionales en empresa</option>
										<option value="Proyecto de vinculación">Proyecto de vinculación</option>
									</select>
								</td>
							</tr>


							<tr><td class="espacioTextoElementoForm">Resultados</td><td><input type="text" name="resultados"></td></tr>
							
							<tr><td class="espacioTextoElementoForm">Perfil requerido</td>
								<td><select name="perfil">
										<option value=""></option>
										<option value="Operación, mantenimiento HW/SW/Redes">Operación, mantenimiento HW/SW/Redes</option>
										<option value="Desarrollo de aplicaciones">Desarrollo de aplicaciones</option>
										<option value="Investigación">Investigación</option>
										<option value="Capacitación a terceros (solo vinculación)">Capacitación a terceros (solo vinculación)</option>
									</select>
								</td>
							</tr>
							<tr><td class="espacioTextoElementoForm">Número de estudiantes</td><td><input type="number" name="nroEstudiantes"></td></tr>
							<tr><td class="espacioTextoElementoForm">Descripción de trabajo</td><td><textarea name="descripcion" rows="10" cols="30"placeholder="Descripción del proyecto"></textarea></td></tr>	
							<tr><td></td></tr>
							<tr><td></td><td id="botonEnviar"><input type="submit" name="submit"><input type="reset" text="Limpiar"></td></tr>	
						</tbody>
					</table>
				</form>
				<!-- END FORMULARIO PROYECTOS -->
			</fieldset>	
		</div>
	</div>
	
</body>
</html>