

// Cuando la página esté lista se adhiere la función para buscar
$(document).ready(function () {

    /**
     * Muestra todas los coincidencias de busqueda
     * Autor: Karla Romero, Santiago Quiñones
    */
    $("#buscador").keyup(function(){
        console.log(".: Buscando información en la lista de proyectos..");
        _this = this;
    
        // Busca los tr que coinciden con el texto de busqueda
        $.each($("#tabla tbody tr"), function() {
            console.log($(this).text());
            if($(this).text().toLowerCase().indexOf($(_this).val().toLowerCase()) === -1)
               $(this).hide();
            else
               $(this).show();                
        });
    }); 

});