<?php
declare(strict_types=1);
namespace App;

require_once("src/Utils/debug.php");
require_once("src/Controller.php");
require_once("src/Exception/AppException.php");
use Throwable;
use App\Exception\AppException;

$configuration = require_once("config/config.php");

$request = [
    'get' => $_GET,
    'post' => $_POST
];


try {
    Controller::initConfiguration($configuration);
    // $controller = new Controller($request);
    // $controller->run();
    (new Controller($request))->run();//Stwórz obiekt Controller i wywołaj na nich metodę run().
} catch (ConfigurationException $e) {
    echo '<h1>Wystąpił błąd w aplikacji</h1>';
    echo 'Problem z konfiguracją.';
} catch (AppException $e) {
    echo '<h1>Wystąpił błąd w aplikacji</h1>';
    echo "<h3>" . $e->getMessage() . "</h3>";
} catch (Throwable $e) {
    echo '<h2>Wystąpił błąd w aplikacji. Throwable.</h2>';
}



