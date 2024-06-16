<?php 

require_once "models/Rol.php";

class Roles 
{
	public function __construct(){}

	public function main()
	{
		require_once "views/plantilla.php";
	}

	public function createRol()
	{
		$rol = new Rol;
		$rol -> setRolCode("hola mundo!");
		echo $rol -> getRolCode();
	}

}

?>