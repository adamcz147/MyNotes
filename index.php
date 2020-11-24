<?php
declare(strict_types=1);
namespace App;
/*
// include ("src/Utils/debug.php");
// include_once

// require
// require_once
*/

require_once("src/Utils/debug.php");
require_once("src/View.php");

//zmienna super globalne $_GET
//if wersja 1

// if (!empty($_GET['action'])){
//     $action = $_GET['action'];
// }else{
//     $action = null;
// }

//if wersja 2
// $action = null;
// if (!empty($_GET['action'])){
//     $action = $_GET['action'];
// }
//if wersja 3

const DEFAULT_ACTION = 'list';
$action = $_GET['action'] ?? DEFAULT_ACTION;

$view = new View();

$viewParams = [];

if ($action === 'create'){
    $viewParams['resultCreate'] = "udało się";
}else if ($action === 'list'){
    $viewParams['resultList']= "Wyświetlamy notatki";
}
$view->render($action, $viewParams);









