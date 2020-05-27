<?php
	include('Inicio.php');
	class vali
	{
		public function vuser($Usuario, $Contra)
		{
		  $us = new Conexion();
		  $q= "SELECT * FROM `contactos` WHERE `Usuario`='$Usuario' AND `Contra`='$Contra';";
	      $use=$us->query($q);
		  $us->close();
		  return $use;
		}
	}


?>