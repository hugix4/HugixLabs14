<?php
session_start();
//Se verifica el usuario y su contrase�a
if($_POST["usuario"]=="hola" && $_POST["contrasena"]=="123"){
	//Usuario y contrase�a v�lidos
	//Crear variable de sesion
	$_SESSION["autentificado"]="1";
	$_SESSION["user"]=$_POST["usuario"];
	$_SESSION["pass"]=$_POST["contrasena"];
	header("Location:aplicacion.php");
}else{
//Si no existe, ir a la p�gina de inicio
header("location:index.php?errorusuario=si");
}
?>