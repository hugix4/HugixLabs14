<?php
session_start();
//Se verifica el usuario y su contraseña
if($_POST["usuario"]=="hola" && $_POST["contrasena"]=="123"){
	//Usuario y contraseña válidos
	//Crear variable de sesion
	$_SESSION["autentificado"]="1";
	$_SESSION["user"]=$_POST["usuario"];
	$_SESSION["pass"]=$_POST["contrasena"];
	header("Location:aplicacion.php");
}else{
//Si no existe, ir a la página de inicio
header("location:index.php?errorusuario=si");
}
?>