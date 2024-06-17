<?php
class DataBase {
    public static function connection() {
        $hostname = getenv('DB_HOST'); // Suponiendo que la variable de entorno se llama DB_HOST
        $port = getenv('DB_PORT');
        $database = getenv('DB_DATABASE');
        $username = getenv('DB_USERNAME');
        $password = getenv('DB_PASSWORD');

        try {
            $pdo = new PDO("mysql:host=$hostname;port=$port;dbname=$database;charset=utf8", $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            // Si la conexión se establece correctamente, retornamos el objeto PDO
            echo "Conexión exitosa a la base de datos.";
            return $pdo;
        } catch(PDOException $e) {
            // Si ocurre un error al conectar, capturamos la excepción y la imprimimos
            die("Error al conectar a la base de datos: " . $e->getMessage());
        }
    }
}
?>
