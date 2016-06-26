$(document).ready(function () {
    constructorTabla();
  //  constructorTabla2();
    constructorSelect();
//    verificarVacio();
    $("#"+listSidebar).addClass("active");
    $('#form-crear').parsley();
    $('#form-actualizar').parsley();
    $('#form-pass').parsley();
    $('#cp2').colorpicker();
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

function verificarVacio() // este metodo lanza el modal para crear un registro para el lugar ingresado cando se detecta que no existen elementos de ese tipo.
{
    if(elemFaltante !== 'nada'){
        if (listSidebar !== 'li6'){
            $('.elementoFaltante').html(elemFaltante);
            $('#botonmodal').html('<i class="fa fa-plus-circle" aria-hidden="true"></i> Registrar '+elemFaltante);
        }
        $('#botonmodal').click();
    }
}
