$(document).ready( function () {
	$("#btnAdd").on('click', function(event) {
		event.preventDefault();
		alert("Ingresa a Java Script");
		hacerOperaciones();
		
	});	
	
	function hacerOperaciones(){
		
		var nombre = $("#nombre").val();
		var password = $("#password").val();
		
		 $.ajax({
         type: "POST",
         url: "principal.php",
         success : function(){
         window.location.href = "principal.php?nombre="+nombre + "&password=" + password;	
         
	}
	});
	}
	});
