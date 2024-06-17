<?php 

	class Rol
	{

		// +++++ 1ra parte modelo de negocio  POO +++++ //



		// Atributos: Encapsulamiento ( - private, # protected)
		private $dbh; #para manejar la conexion (data base handler)
		private $rolCode;
		private $rolName;



		// metodos 

		#constructores (sobre carga de constructores) (pueden ser varios)
		public function __construct()
		{
			try {
                $this->dbh = DataBase::connection(); #se usa el atributo dbh para pasar la conexion
                $a = func_get_args();
                $i = func_num_args();
                if (method_exists($this, $f = '__construct' . $i)) {
                    call_user_func_array(array($this, $f), $a);
                }
            } catch (Exception $e) {
                die($e->getMessage());
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
		#CU09 Registrar rol
		public function rolCreate()
		{
			try {
				// SQL para insertar un nuevo registro en la tabla ROLES
				$sql = 'INSERT INTO roles VALUES (:rolCode, :rolName)';
				
				// Prepara la consulta SQL
				$stmt = $this->dbh->prepare($sql);
				
				// Asocia valores a los parámetros de la consulta
				$stmt->bindValue('rolCode', $this->getRolCode());
				$stmt->bindValue('rolName', $this->getRolName());
				
				// Ejecuta la consulta
				$stmt->execute();

			} catch (Exception $e) {

				// Captura cualquier excepción y termina el script mostrando el mensaje de error
				die($e->getMessage());
				
			}
		}

		public function rolRead()
		{
		    try {
		        // Inicializa un array vacío para almacenar los roles
		        $rolList = [];
		        
		        // Prepara la consulta SQL para seleccionar todos los roles de la tabla ROLES
		        $sql = 'SELECT * FROM ROLES';
		        
		        // Ejecuta la consulta utilizando PDO y almacena el resultado en $stmt
		        $stmt = $this->dbh->query($sql);
		        
		        // Itera a través de todas las filas devueltas por la consulta y crea objetos Rol
		        foreach ($stmt->fetchAll() as $rol) {
		            // Crea un nuevo objeto Rol utilizando los datos de la fila actual
		            $rolList[] = new Rol(
		                $rol['rol_code'],
		                $rol['rol_name']
		            );
		        }
		        
		        // Retorna el array $rolList que contiene todos los objetos Rol creados
		        return $rolList;

		    } catch (Exception $e) {
		        // En caso de que ocurra una excepción, muestra el mensaje de error y termina la ejecución
		        die($e->getMessage());
		    }
		}





		#consultar
		#consultar obtener por id
		#actualizar
		#eliminar


	}

?>