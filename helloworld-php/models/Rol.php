<?php 

	class Rol
	{

		// +++++ 1ra parte modelo de negocio  POO +++++ //



		// Atributos: Encapsulamiento ( - private, # protected)

		private $rolCode;
		private $rolName;



		// metodos 

		#constructores (sobre carga de constructores) (pueden ser varios)
		public function __construct()
		{
			$a = func_get_args();
			$i = func_num_args();
			if (method_exists($this, $f = '__construct' . $i)) 
			{
				call_user_func_array(array($this, $f), $a);
			}
		}

		#constructor para 2 parametros (pilas que aumenta el nombre del contructor dependiendo los args)
		public function __construct2($rolCode, $rolName)
		{
			$this -> rolCode = $rolCode;
			$this -> rolName = $rolName;
		}



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