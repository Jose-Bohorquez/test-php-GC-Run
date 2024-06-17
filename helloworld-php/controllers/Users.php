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
            "1",
            "Admin",
            "2355",
            "jose",
            "bohorquez",
            "bd@gmail.com",
            "abc123",
            1,
        );
        print_r($user);
        echo "<br><br>";
        var_dump($user);
        $user -> userCreate();
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