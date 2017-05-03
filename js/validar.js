
/**
 * Valida los controles del formulario
 * Autor: Karla Romero, Santiago Quiñones
*/
function validateForm(){
	
	var nombreSolicitante = document.forms["registro"]["nombreSolicitante"].value;
	if (nombreSolicitante==null || nombreSolicitante ==""|| nombreSolicitante=="0"){
		
		alert("Debe poner el nombre del solicitante");
		return false;
	}
	
	var tipoOrganizacion = document.forms["registro"]["tipoOrganizacion"].value;
	if (tipoOrganizacion==null || tipoOrganizacion ==""|| tipoOrganizacion=="0"){
		
		alert("Debe seleccionar el tipo de organización.");
		return false;
	}

	var dependencia = document.forms["registro"]["dependencia"].value;
	if (dependencia==null || dependencia ==""|| dependencia=="0"){
		
		alert("Debe indicar la dependencia que lo solicita");
		return false;
	}
	
	
	var telefono = document.forms["registro"]["telefono"].value;
	if (telefono==null || telefono ==""|| telefono=="0"){
		
		alert("Debe poner el teléfono de contecto");
		return false;
	}
	
	
	var email = document.forms["registro"]["email"].value;
	if (email==null || email ==""|| email=="0"){
		
		alert("Debe poner el correo electrónico");
		return false;
	}

	var tipoPractica = document.forms["registro"]["tipoPractica"].value;
	if (tipoPractica==null || tipoPractica ==""|| tipoPractica=="0"){
		
		alert("Debe seleccionar el tipo de práctica.");
		return false;
	}

	var resultados = document.forms["registro"]["resultados"].value;
	if (resultados==null || resultados ==""|| resultados=="0"){
		
		alert("Debe describir brevemente el proyecto en el que el becario va a trabajar");
		return false;
	}

	var perfil = document.forms["registro"]["perfil"].value;
	if (perfil==null || perfil ==""|| perfil=="0"){
		
		alert("Debe selecionar el perfil del estudiante.");
		return false;
	}

	var nroEstudiantes = document.forms["registro"]["nroEstudiantes"].value;
	if (nroEstudiantes==null || nroEstudiantes ==""|| nroEstudiantes=="0"){
		
		alert("Debe indicar el número de estudiantes.");
		return false;
	}

	var descripcion = document.forms["registro"]["descripcion"].value;
	if (descripcion==null || descripcion ==""|| descripcion=="0"){
		
		alert("Debe ingresar la descripción del proyecto");
		return false;
	}	
}