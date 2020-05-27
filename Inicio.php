<?php
	Class Conexion extends mysqli
	{
	
		 public function __construct()
		 {
			 $serv="localhost";
			 $us="root";
			 $pass="";
			 $base="usuarios";
			 parent::__construct($serv, $us, $pass, $base);
			 $this->query("SET NAMES 'utf8';");
			
		 }
	}
?>