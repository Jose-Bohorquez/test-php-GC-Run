<?php
    // Ruteo Explicito mejorado

    require_once "models/DataBase.php";

    // Definir una matriz asociativa que mapea cada controlador a sus métodos permitidos
    $ctlr_y_mtd_prmtd = array(
        'Dashboard' => ['main'],
        'Landing' => ['main', 'leerDatos', 'actualizarDato'],
        'Roles' => ['createRol'],['readRol'],
        'Users' => ['createUser']
    );

    // Función para enviar una respuesta HTTP 404
    function send404() {
        http_response_code(404);
        echo "404 Not Found";
        echo '<br><a href="?c=Landing&a=main">Regresar al inicio</a>';
        exit;
    }

    // Verifica si no se ha especificado un controlador específico en la solicitud
    if (!isset($_REQUEST['c'])) {
        // Si no se especifica un controlador, redirecciona a landing
        require_once "controllers/Landing.php";
        $controller = new Landing;
        $controller->main(); // Llama al método main del controlador Landing
    } else {
        // Obtiene el nombre del controlador desde la solicitud
        $ctlr = $_REQUEST['c'];

        // Verifica si el controlador está definido en la lista de métodos permitidos
        if (!array_key_exists($ctlr, $ctlr_y_mtd_prmtd)) {
            // Si el controlador no está permitido, muestra un error 404
            send404();
        }

        // Incluye el archivo del controlador especificado
        require_once "controllers/" . $ctlr . ".php";

        // Crea una instancia del controlador
        $instancia_ctlr = new $ctlr();

        // Verifica si se ha especificado una acción en la solicitud
        $accion = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'main';

        // Verifica si la acción está permitida para el controlador
        if (!in_array($accion, $ctlr_y_mtd_prmtd[$ctlr])) {
            // Si la acción no está permitida, muestra un error 404
            send404();
        }

        // Verifica si el método existe en el controlador
        if (!method_exists($instancia_ctlr, $accion)) {
            // Si el método no existe en el controlador, muestra un error 404
            send404();
        }

        // Llama dinámicamente a la acción del controlador
        call_user_func(array($instancia_ctlr, $accion));
    }

?>
<?php
    // // Ruteo Explicito

    // require_once "models/DataBase.php";

    // // Definir una matriz asociativa que mapea cada controlador a sus métodos permitidos
    // $ctlr_y_mtd_prmtd = array(
    //     'Landing' => ['main', 'leerDatos', 'actualizarDato'],
    //     'Roles' => ['crearRol']
    // );

    // // Función para enviar una respuesta HTTP 404
    // function send404() {
    //     http_response_code(404);
    //     echo "404 Not Found";
    //     exit;
    // }

    // // Verifica si no se ha especificado un controlador específico en la solicitud
    // if (!isset($_REQUEST['c'])) {
    //     // Si no se especifica un controlador, muestra un error 404
    //     send404();
    // } else {
    //     // Obtiene el nombre del controlador desde la solicitud
    //     $ctlr = $_REQUEST['c'];

    //     // Verifica si el controlador está definido en la lista de métodos permitidos
    //     if (!array_key_exists($ctlr, $ctlr_y_mtd_prmtd)) {
    //         // Si el controlador no está permitido, muestra un error 404
    //         send404();
    //     }

    //     // Incluye el archivo del controlador especificado
    //     require_once "controllers/" . $ctlr . ".php";

    //     // Crea una instancia del controlador
    //     $instancia_ctlr = new $ctlr();

    //     // Verifica si se ha especificado una acción en la solicitud
    //     $accion = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'main';

    //     // Verifica si la acción está permitida para el controlador
    //     if (!in_array($accion, $ctlr_y_mtd_prmtd[$ctlr])) {
    //         // Si la acción no está permitida, muestra un error 404
    //         send404();
    //     }

    //     // Verifica si el método existe en el controlador
    //     if (!method_exists($instancia_ctlr, $accion)) {
    //         // Si el método no existe en el controlador, muestra un error 404
    //         send404();
    //     }

    //     // Llama dinámicamente a la acción del controlador
    //     call_user_func(array($instancia_ctlr, $accion));
    // }

?>
<?php
    //ruteo semi explicito

    // require_once "models/DataBase.php";

    // // Lista blanca de controladores y métodos permitidos
    // $allowed_controllers = ['Dashboard', 'Landing', 'Roles', 'Users'];  // Agrega aquí los nombres de los controladores permitidos
    // $allowed_actions = ['main', 'otherAction'];  // Agrega aquí los nombres de los métodos permitidos en los controladores

    // // Función para enviar una respuesta HTTP 404
    // function send404() {
    //     http_response_code(404);
    //     echo "404 Not Found";
    //     exit;
    // }

    // // Verifica si no se ha especificado un controlador específico en la solicitud
    // if (!isset($_REQUEST['c'])) {
    //     // Si no se especifica un controlador, muestra un error 404
    //     send404();
    // } else {
    //     // Obtiene el nombre del controlador desde la solicitud
    //     $controller = $_REQUEST['c'];

    //     // Verifica si el controlador está en la lista blanca
    //     if (!in_array($controller, $allowed_controllers)) {
    //         // Si el controlador no está permitido, muestra un error 404
    //         send404();
    //     }

    //     // Incluye el archivo del controlador especificado
    //     require_once "controllers/" . $controller . ".php";

    //     // Verifica si se ha especificado una acción en la solicitud
    //     $action = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'main';

    //     // Verifica si la acción está en la lista blanca
    //     if (!in_array($action, $allowed_actions)) {
    //         // Si la acción no está permitida, muestra un error 404
    //         send404();
    //     }

    //     // Verifica si la clase del controlador existe
    //     if (!class_exists($controller)) {
    //         // Si la clase del controlador no existe, muestra un error 404
    //         send404();
    //     }

    //     // Crea una instancia del controlador
    //     $controller_instance = new $controller();

    //     // Verifica si el método existe en el controlador
    //     if (!method_exists($controller_instance, $action)) {
    //         // Si el método no existe en el controlador, muestra un error 404
    //         send404();
    //     }

    //     // Llama dinámicamente a la acción del controlador
    //     call_user_func(array($controller_instance, $action));
    // }

?>
<?php
    // //ruteo en blanco

    // require_once "models/DataBase.php";

    // // Verifica si no se ha especificado un controlador específico en la solicitud
    // if (!isset($_REQUEST['c'])) {
    //     // Si no se especifica un controlador, incluye el controlador Landing.php y crea una instancia de Landing
    //     require_once "controllers/Landing.php";
    //     $controller = new Landing;
    //     $controller->main(); // Llama al método main del controlador Landing
    // } else {
    //     // Si se especifica un controlador en la solicitud
    //     $controller = $_REQUEST['c']; // Obtiene el nombre del controlador desde $_REQUEST['c']
    //     require_once "controllers/" . $controller . ".php"; // Incluye el archivo del controlador especificado
    //     $controller = new $controller; // Crea una instancia del controlador especificado dinámicamente
    //     $action = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'main'; // Obtiene el nombre de la acción desde $_REQUEST['a'] o utiliza 'main' por defecto
    //     call_user_func(array($controller, $action)); // Llama a la acción del controlador utilizando call_user_func
    // }

?>