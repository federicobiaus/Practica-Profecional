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
	var password = document.getElementById('password');
    var confirm_password = document.getElementById('confirm_password');

        if (password.value != confirm_password.value) 
		{
            password.setCustomValidity('Las passwords no coinciden.');
            password.focus();
			return true;
        } 
		else 
		{
            password.setCustomValidity('');
        }

		if(password.value.length < 8)
		{
            password.setCustomValidity('La password debe contener almenos 8 caractres.');
            password.focus();
			return true;
        }
		else 
		{
            password.setCustomValidity('');
        }

		var nombres = $('#name').val()
		var email = $('#email').val()
		var usuario = $('#username').val()
		var contrasena = $('#password').val()
		var mes = $('#BirthMonth').val()
		var dia = $('#BirthDay').val()
		var anio = $('#BirthYear').val()
		if(anio < "1940")
		{
			BirthYear.setCustomValidity('Debe ingresar una fecha valida.');
            BirthYear.focus();
			return true;
		}
		else 
		{
            BirthYear.setCustomValidity('');
        }

		var fecha = anio+"/"+mes+"/"+dia;
		var url = "php/registrar_usuario.php";
		var data = 'nombres='+nombres+'&email='+email+'&username='+usuario+'&contrasena='+contrasena+'&fecha='+fecha;
		$.ajax({
			type:"POST",
			url:url,
			data:data,
			success:function(resp){
				document.getElementById("resultado").style.visibility="visible";
				$('#resultado').html(resp);
			}
		})
}

function validar_login_ajax()
{
	var username = document.getElementById('user');
    var password = document.getElementById('pass');
	if (username.value == null)
	{
          username.setCustomValidity('Debe completar el campo.');
          username.focus();
	      return false;
    } 
	else 
	{
		if(password.value == null)
		{
		  password.setCustomValidity('Debe completar el campo.');
          password.focus();
	      return false;
		}
		else
		{
			 username.setCustomValidity('');
		}
        username.setCustomValidity('');
    }
		
	var usuario = $('#user').val()
	var contrasena = $('#pass').val()
	
	var url = "php/val_log.php";
	var data = 'username='+usuario+'&password='+contrasena;

	$.ajax({
		type:"POST",
		url:url,
		data:data,
		success:function(resp){
			$('#validaLogin').html(resp);
		}
	})
	return false;
}