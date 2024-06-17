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
		$rol_1 = new Rol;
		$rol_1 -> setRolCode("1");
		$rol_1 -> setRolName("admin");

		#objeto 2 (se puede crear asi tambien pero claramente debe haberse creado el constructor)
		$rol_2 = new Rol("2", "customer");

		$rol_3 = new Rol("3", "seller");

		$rol_4 = new Rol("4", "provider");

		$roles = [$rol_1, $rol_2, $rol_3, $rol_4];

		for ($i=0; $i < 4; $i++) { 
			echo "<br> Codigo Rol: " . $roles[$i] -> getRolCode();
			echo "<br> Nombre Rol: " . $roles[$i] -> getRolName() . "<br><br>";
		}

		echo "<br><br>";

		foreach ($roles as $rol) {
			echo "<br> Codigo Rol: " . $rol -> getRolCode();
			echo "<br> Nombre Rol: " . $rol -> getRolName() . "<br><br>";
		}
	}

	

}

?>