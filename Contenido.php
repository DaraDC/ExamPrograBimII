<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Crear Usuario</title>
</head>
<body style="background-color:thistle;">

<h1 align ="center" style="font-size: 50px;">Crear Usuarios</h1>


<form action="Contenido.php" method="post" align="center">
<input name ="usuario" type="text" placeholder="Ingrese usuario"><br></br>
<input name="contra" type="password" placeholder="Ingrese contra"><br></br>
<input name="confirm_password" type="password" placeholder="Confirmar contra"><br></br>
<input type="submit" value="Crear">
</form>

<?php
require 'Inicio.php';

$message ='';

if(!empty($Usuario) && !empty($Contra))
{
	$sql = "INSERT INTO usuarios (usuario, contra) VALUES (:usuario, :contra)";
	$stmt = $conn->prepare($sql);
	$stmt->bindParam(':usuario', $Usuario);
	$Contra = password_hash($Contra, PASSWORD_BCRYPT);
	$stmt->bindParam(':contra', $Contra);

	if ($stmt->excute())
	{
	   $message = 'Nuevo usuario creado';
	}
	else 
	{
		$message = 'Alguien más ya creo este usuario';
	}
	
	$regresar = "<h4><a href = Inicio.html>Salir</a></h4>";
	echo$regresar;
}

?>

</body>
</html>