<?php
	session_start();
?>
<p>Bienvenidos</p>
<form name="form1" method="post" action="pagina2.php">
	<p>Nombre
		<input name="txt_nombre" type="text" id="txt_nombre"></input>
			<?php
				$_session["Estado"]="Ok"
			?>
	</p>
	<p>
		<input type="submit" name="Submit" value="Enviar"></input>
	</p>
</form>