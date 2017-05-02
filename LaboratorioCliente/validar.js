function validateForm(){
	
	var campoUno = document.forms["registro"]["nombres"].value;
	if (campoUno==null || campoUno ==""|| campoUno=="0"){
		
		alert("Debe poner el nombre del estudiante");
		return false;
	}
	
	var campoDos = document.forms["registro"]["dependencia"].value;
	if (campoDos==null || campoDos ==""|| campoDos=="0"){
		
		alert("Debe indicar la dependencia que lo solicita");
		return false;
	}
	
	
	var campoTres = document.forms["registro"]["telefono"].value;
	if (campoTres==null || campoTres ==""|| campoTres=="0"){
		
		alert("Debe poner el teléfono de contecto");
		return false;
	}
	
	
	var campoCuatro = document.forms["registro"]["correo"].value;
	if (campoCuatro==null || campoCuatro ==""|| campoCuatro=="0"){
		
		alert("Debe poner el correo electrónico");
		return false;
	}
	
	
	var campoSeis = document.forms["registro"]["proposito"].value;
	if (campoSeis==null || campoSeis ==""|| campoSeis=="0"){
		
		alert("Debe describir brevemente el proyecto en el que el becario va a trabajar");
		return false;
	}
	
	
	
	
}