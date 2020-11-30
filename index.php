<?php
declare(strict_types=1);
namespace App;

require_once("src/Utils/debug.php");
require_once("src/Controller.php");
    

$configuration = require_once("config/config.php");

$request = [
    'get' => $_GET,
    'post' => $_POST
];

Controller::initConfiguration($configuration);
// $controller = new Controller($request);
// $controller->run();
(new Controller($request))->run();//Stwórz obiekt Controller i wywołaj na nich metodę run().

