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
		#objeto 1
		$rol = new Rol(
			null,
			"Admin"
		);
		var_dump($rol);
		echo "<br><br>";
		print_r($rol);
		echo "<br><br>";
		$rol -> rolCreate();
	}

	public function readRol()
	{
		#echo "estoy en el controladore roles y en la accion consultar roles";
		$roles = new Rol;
		$roles = $roles -> rolRead();
		var_dump($roles);
	}

	

}

?>