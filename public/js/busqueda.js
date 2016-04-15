$(document).ready(function () {  
    constructorTabla();
    constructorSelect();
    $("#"+listSidebar).addClass("active");
    $('#form-crear').parsley();
    $('#form-actualizar').parsley();
    $('#form-pass').parsley();
});

function cambiarVista(vista)
{	
	if (vista == 2)
	{	
		$('#tab-lista').removeClass("hide"); 
		$('#tab-logos').addClass("hide");
		$('#bot-mostrar').addClass("hide");
		$('#busqueda').addClass("hide");
     	$('#bot-buscar').html(" Mostrar Filtros");
	}
	else 
	{
     	$('#tab-logos').removeClass("hide");
     	$('#bot-mostrar').removeClass("hide");
		$('#tab-lista').addClass("hide");		
	}
}

function ocultarBusqueda()
{
	if ($('#busqueda').hasClass('hide')){
		$('#bot-buscar').html(" Ocultar Filtros");
   		$('#busqueda').removeClass("hide");
    }else{
     	$('#busqueda').addClass("hide");
     	$('#bot-buscar').html(" Mostrar filtros");
    }
}

