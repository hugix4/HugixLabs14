<form action="control.php" method="post">
<tr>
	<td colspan="2" align="center"
		<?php if($_get["errorusuario"]=="si"){?>
		bgcolor=red><span style="color:fff"><b>Datos incorrectos</b></span>
			<?php }else{?>
				bgcolor=#cccccc>Introduce tu clave de acceso
			<?php } ?></td>
		</tr><br>
		<tr>
			<td align="right">Usuario:</td>
			<td><input type="text" name="usuario" size="8" maxlength="50"></td>
		</tr><br>
		<tr>
			<td align="right">Clave:</td>
			<td><input type="password" name="contrasena" size="8" maxlength="50"></td>
		</tr><br>
		<tr><td><input type="submit" value="Entrar"></td>
		</tr>
		</form>