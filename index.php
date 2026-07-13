<?php

$controller = $_GET['controller'] ?? 'index';
$action = $_GET['action'] ?? 'index';


switch ($controller) {


    case 'index':

        require_once __DIR__ . '/controllers/IndexController.php';

        $controllerObject = new IndexController();

        break;



    case 'cursos':

        require_once __DIR__ . '/controllers/CursosController.php';

        $controllerObject = new CursosController();

        break;



    case 'profesores':

        require_once __DIR__ . '/controllers/ProfesoresController.php';

        $controllerObject = new ProfesoresController();

        break;



    case 'contacto':

        require_once __DIR__ . '/controllers/ContactoController.php';

        $controllerObject = new ContactoController();

        break;



    default:

        die('Controlador no encontrado.');

}



if (!method_exists($controllerObject, $action)) {

    die('Acción no encontrada.');

}



if (isset($_GET['id'])) {

    $controllerObject->$action($_GET['id']);

} else {

    $controllerObject->$action();

}