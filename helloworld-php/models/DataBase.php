<?php
    class DataBase{
        public static function connection(){
            $hostname = getenv('DB_HOST'); // Suponiendo que la variable de entorno se llama DB_HOST
            $port = getenv('DB_PORT');
            $database = getenv('DB_DATABASE');
            $username = getenv('DB_USERNAME');
            $password = getenv('DB_PASSWORD');

            $pdo = new PDO("mysql:host=$hostname;port=$port;dbname=$database;charset=utf8",$username,$password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $pdo;
        }
    }
?>