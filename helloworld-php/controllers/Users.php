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
            "jose",
            "bohorquez",
            "bd@gmail.com",
            "abc123",
            1,
        );
        print_r($user);

        echo "<br><br>";

        $user_2 = new User(
            "bd@gmail.com",
            "abc123"
        );
        print_r($user_2);
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