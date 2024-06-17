<?php 

    require_once "models/User.php";

class Users 
{
	public function __construct(){}

	public function main()
	{
		require_once "views/plantilla.php";
	}

    public function createUser()
	{
        $user = new User(
            6,
            "Desarrollador",
            2355,
            "jose",
            "bohorquez",
            "bd@gmail.com",
            "abc123",
            1,
        );
        print_r($user); echo "<br><br>"; var_dump($user); $user -> userCreate();
        $user_2 = new User(
            8,
            "Admin",
            5673,
            "julio",
            "delgado",
            "jd@gmail.com",
            "321cba",
            0,


        );
        print_r($user_2); echo "<br><br>"; var_dump($user_2); $user_2 -> userCreate();
	}

    public function readUser()
	{
        #	
	}

    public function updateUser()
	{
        #	
	}

    public function deleteUser()
	{
        #	
	}

}

?>