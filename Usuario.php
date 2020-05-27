<?php
	include('Validar.php');
	$v=new vali();

	$Usuario=$_POST['usuario'];
	$Contra=$_POST['contra'];
	
	var_dump($_POST);

    $final=$v->vuser($Usuario, $Contra);

	var_dump($final);

	if($final->num_rows==1)
	{
		header("location: Contenido.php");
	}

	else
	{
		header("location: Inicio.html");
		
	}

?>