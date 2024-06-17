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
		echo "codigo rol: " . $rol_1 -> getRolCode() . "<br>"; 
		echo "nombre rol: " . $rol_1 -> getRolName() . "<br><br>";

		#objeto 2 (se puede crear asi tambien pero claramente debe haberse creado el constructor)
		$rol_2 = new Rol("2", "customer");
		echo "codigo rol: " . $rol_2 -> getRolCode() . "<br>"; 
		echo "nombre rol: " . $rol_2 -> getRolName() . "<br><br>";

		#objeto 3 (se puede crear asi tambien pero claramente debe haberse creado el constructor)
		$rol_3 = new Rol("3", "seller");
		echo "codigo rol: " . $rol_3 -> getRolCode() . "<br>"; 
		echo "nombre rol: " . $rol_3 -> getRolName() . "<br><br>";

	}

}

?>