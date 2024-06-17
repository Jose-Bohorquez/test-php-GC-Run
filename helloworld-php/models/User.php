<?php 

	class User
	{

		// +++++ 1ra parte modelo de negocio  POO +++++ //



		// Atributos: Encapsulamiento ( - private, # protected)

		private $rolCode;
        private $rolName;
		private $userCode;
        private $userName;
        private $userLastName;
        private $userEmail;
        private $userPass;
        private $userStatus;



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

		#constructor para 8 parametros (pilas que aumenta el nombre del contructor dependiendo los args)
		public function __construct8($rolCode, $rolName, $userCode, $userName, $userLastName, $userEmail, $userPass, $userStatus)
		{
			$this -> rolCode = $rolCode;
            $this -> rolName = $rolName;
			$this -> userCode = $userCode;
            $this -> userName = $userName;
            $this -> userLastName = $userLastName;
            $this -> userEmail = $userEmail;
            $this -> userPass = $userPass;
            $this -> userStatus = $userStatus;
		}

        #constructor para 7 parametros (pilas que aumenta el nombre del contructor dependiendo los args)
		public function __construct7($rolCode, $userCode, $userName, $userLastName, $userEmail, $userPass, $userStatus)
		{
			$this -> rolCode = $rolCode;
			$this -> userCode = $userCode;
            $this -> userName = $userName;
            $this -> userLastName = $userLastName;
            $this -> userEmail = $userEmail;
            $this -> userPass = $userPass;
            $this -> userStatus = $userStatus;
		}

        #constructor para 2 parametros (pilas que aumenta el nombre del contructor dependiendo los args)
		public function __construct2($userEmail, $userPass)
		{
            $this -> userEmail = $userEmail;
            $this -> userPass = $userPass;
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
		public function setRolName($rolName)
		{
			$this -> rolName = $rolName;
		}
		#$rolName: get()
		public function getRolName()
		{
			return $this -> rolName;
		}

		#$userCode: set()
		public function setUserCode($userCode)
		{
			$this -> userCode = $userCode;
		}
		#$userCode: get()
		public function getUserCode()
		{
			return $this -> userCode;
		}

        #$userName: set()
		public function setUserName($userName)
		{
			$this -> userName = $userName;
		}
		#$userName: get()
		public function getUserName()
		{
			return $this -> userName;
		}

        #$userLastName: set()
		public function setUserLastName($userLastName)
		{
			$this -> userLastName = $userLastName;
		}
		#$userLastName: get()
		public function getUserLastName()
		{
			return $this -> userLastName;
		}

        #$userEmail: set()
		public function setUserEmail($userEmail)
		{
			$this -> userEmail = $userEmail;
		}
		#$userEmail: get()
		public function getUserEmail()
		{
			return $this -> userEmail;
		}

        #$userPass: set()
		public function setUserPass($userPass)
		{
			$this -> userPass = $userPass;
		}
		#$userPass: get()
		public function getUserPass()
		{
			return $this -> userPass;
		}

        #$userStatus: set()
		public function setUserStatus($userStatus)
		{
			$this -> userStatus = $userStatus;
		}
		#$userStatus: get()
		public function getUserStatus()
		{
			return $this -> userStatus;
		}



		// +++++ 2da parte persistencia DB (CRUD) +++++ //

		#registrar
		#consultar
		#consultar obtener por id
		#actualizar
		#eliminar


	}

?>