<?php
//inicio la sesión
session_start();
//comprueba que el usuario esté autentificado
if($_SESSION["autentificado"]!="1"){
	//si no existe, se dirige a la página de inicio 
	header("Location:index.php");
	//salimos del script
	exit();
}
?>