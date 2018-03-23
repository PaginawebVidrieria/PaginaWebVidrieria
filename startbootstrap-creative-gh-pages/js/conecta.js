$(document).ready( function () {
	$("#btnAdd").on('click', function(event) {
		event.preventDefault();
		alert("Procesando");
		hacerOperaciones();
		
	});	
	
	function hacerOperaciones(){
		
		var nombre = $("#nombre").val();
		var password = $("#password").val();
		
		var usuencriptado = Base64.encode(usuario);
		var passencriptado = Base64.encode(password);		
		
		 $.ajax({
         type: "POST",
         url: "principal.php",
         success : function(){
         window.location.href = "principal.php?nombre="+nombre + "&password=" + password;	
         
	}
	});
	}
	});
