<?php

    
    //Para Conexion en GCP Cloud run + IC (php puro) + mysql
    class DataBase {
        public static function connection() {
            $username = getenv('DB_USER'); // e.g. 'your_db_user'
            $password = getenv('DB_PASS'); // e.g. 'your_db_password'
            $database = getenv('DB_NAME'); // e.g. 'your_db_name'
            $instanceUnixSocket = getenv('INSTANCE_UNIX_SOCKET'); // e.g. 'php-puro:us-central1:test-instancia-bd'

            try {
                // DSN para conectar usando un socket Unix
                $dsn = sprintf(
                    'mysql:dbname=%s;unix_socket=/cloudsql/%s',
                    $database,
                    $instanceUnixSocket
                );

                // Conectar a la base de datos usando PDO
                $pdo = new PDO($dsn, $username, $password);
                $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                
                // Si la conexión se establece correctamente, retornamos el objeto PDO
                //echo "Conexión exitosa a la base de datos.";
                return $pdo;
            } catch (PDOException $e) {
                // Si ocurre un error al conectar, capturamos la excepción y la imprimimos
                die("Error al conectar a la base de datos: " . $e->getMessage());
            }
        }
    }


    // //Para conexion local
    // class DataBase
    // {
    //     public static function connection()
    //     {
    //         $hostname = "localhost";
    //         $port = "3306";
    //         $database = "php_puro";
    //         $username = "root";
    //         $password = "";
        
    //         try {
    //             $pdo = new PDO("mysql:host=$hostname;port=$port;dbname=$database;charset=utf8", $username, $password);
    //             $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //             // echo "Conexión exitosa";
    //             return $pdo;
    //             } catch (PDOException $e) {
    //                 echo "Conexión fallida: " . $e->getMessage();
    //                 return null;
    //             }
    //     }
    // }
?>
