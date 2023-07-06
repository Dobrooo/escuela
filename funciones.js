function validar() //Funcion javaScript 
{

	//Variables 
	nombre = ($("#nombre").val().length>0)?true:false;
	curso= ($("#curso").val().length>0)?true:false;
	correo = ($("#correo").val().length>0)?true:false;
	consulta = ($("#consulta").val().length>0)?true:false;



	//Condicional  
	if (nombre&curso&correo&consulta) { //Concatenar variables
		$("#envios").submit();
		alert("Consulta enviada")
	} else {
		alert("Completa los campos");
	}
}

function validar2(){
	{

		//Variables 
		titulo= ($("#titulo").val().length>0)?true:false;
		fecha= ($("#fecha").val().length>0)?true:false;
		articulo = ($("#articulo").val().length>0)?true:false;
		
	
	
	
		//Condicional  
		if (titulo&fecha&articulo) { //Concatenar variables
			$("#envios").submit();
			alert("Noticia subida")
		} else {
			alert("Completa los campos");
		}
	}
}
