//Funcion que permite cambiar los formularios a visualizar
function mostrarLogIn()
{
	document.getElementById("contactform").style.visibility="hidden";
	document.getElementById("loginform").style.visibility="visible";
	return true;
}

//Funcion que permite cambiar los formularios a visualizar
function mostrarForm()
{
	document.getElementById("contactform").style.visibility="visible";
	document.getElementById("loginform").style.visibility="hidden";
	return true;
}

//Funcion que permite obtener los datos del formulario de registro
function enviar_datos_registros_ajax()
{
	alert("hola");
	var nombres = document.getElementById("name").value;
	var email = document.getElementById("email").value;
	var usuario = document.getElementById("username").value;
	var contrasena = document.getElementById("password").value;
	var mes = document.getElementByName("BirthMonth").value;
	var dia = document.getElementByName("BirthDay").value;
	var anio = document.getElementByName("BirthYear").value;
	var fecha_texto = anio+"-"+mes+"-"+dia;
	var ms = Date.parse(fecha_texto);
	var fecha = new Date(ms);
	
	var url = "registrar_usuario.php";
	$.ajax(
	{
		type:"post",
		url:url,
		data:{nombres:nombres,email:email,usuario:usuario,contrasena:contrasena,fecha:fecha},
		success:function(datos){
			$("#mostrardatos").html(datos);
			}
		
	}
	return true;
}