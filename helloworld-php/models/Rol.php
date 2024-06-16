<?php 

	class Rol
	{

		// +++++ 1ra parte modelo de negocio +++++ //



		// Atributos: Encapsulamiento ( - private, # protected)

		private $rolCode;
		private $rolName;



		// metodos 

		#constructores (sobre carga de constructores) (pueden ser varios)
		public function __construct(){}



		// Metodos set() y get()

		#$rolCode: set()
		public function setRolCode($rolCode)
		{
			$this -> rolCode = $rolCode;
		}
		#$rolCode: get()
		public function getRolCode()
		{
			return $this -> rolCode;
		}
		#$rolName: set()
		public function setrolName($rolName)
		{
			$this -> rolName = $rolName;
		}
		#$rolName: get()
		public function getrolName()
		{
			return $this -> rolName;
		}



		// +++++ 2da parte persistencia DB (CRUD) +++++ //

		#registrar
		#consultar
		#consultar obtener por id
		#actualizar
		#eliminar


	}

?>