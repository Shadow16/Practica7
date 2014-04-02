<?php
	SESSION_START();
	if($_POST["usuario"]=="root" && $_POST["contrasena"]=="admin")
	{
?>

<html>
	<body>
		<form method='POST' action='cerrar.php'>
			<?php echo "Bienvenido ".$_POST["usuario"]; ?>
			<br \><br \>
			<input type='submit' name='cerrar' value='CERRAR'>
		</form>
	</body>
</html>
	
<?php 	
	} 
		else 
		{ 
?>
<html>
	<body>
		<form method='POST' action='sesion.php'>
			Error!! Datos Incorrectos: <br \><br \> <?php echo "Usuario Ingresado: ".$_POST['usuario']; ?>
			<br \><br \><input type='submit' name='regresar' value='REGRESAR'>
		</form>
	</body>
</html>
<?php 
}
?>


