<?php
//inicio la sesi�n
session_start();
//comprueba que el usuario est� autentificado
if($_SESSION["autentificado"]!="1"){
	//si no existe, se dirige a la p�gina de inicio 
	header("Location:index.php");
	//salimos del script
	exit();
}
?>