$(document).ready(function(){
var password = document.getElementById('password');
    var confirm_password = document.getElementById('confirm_password');

    var checkPasswordValidity = function() {
        if (password.value != confirm_password.value) {
            password.setCustomValidity('Las passwords no coinciden.');
        } else {
            password.setCustomValidity('');
        }        
    };

    password.addEventListener('change', checkPasswordValidity, false);
    confirm_password.addEventListener('change', checkPasswordValidity, false);

    var form = document.getElementById('passwordForm');
    form.addEventListener('submit', function() {
        checkPasswordValidity();
        if (!this.checkValidity()) {
            event.preventDefault();
            password.focus();
        }
    }, false);
})
/*
function validatePassword(){
var password = document.getElementById("password");
var confirm_password = document.getElementById("confirm_password");

  if(password.value != confirm_password.value) {
    confirm_password.setCustomValidity("La password no coincide");
  } else {
    confirm_password.setCustomValidity('');
  }
}
*/
/*$(document).ready(function(){
var password = document.getElementById("password")
  , confirm_password = document.getElementById("confirm_password");

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
})
*/

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

	$('#contactform').submit(function(e){
		e.preventDefault()
		
		var nombres = $('#name').val()
		var email = $('#email').val()
		var usuario = $('#username').val()
		var contrasena = $('#password').val()
		var mes = $('#BirthMonth').val()
		var dia = $('#BirthDay').val()
		var anio = $('#BirthYear').val()
		var fecha = anio+"/"+mes+"/"+dia;
		
		var url = "php/registrar_usuario.php";
		var data = 'nombres='+nombres+'&email='+email+'&username='+usuario+'&contrasena='+contrasena+'&fecha='+fecha;
	
		$.ajax({
			type:"POST",
			url:url,
			data:data,
			success:function(resp){
				console.log('Enviado')
				mostrarLogIn();
			}
			
		})
	})
	return true;
}