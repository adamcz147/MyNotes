<?php

declare(strict_types=1);

error_reporting(E_ALL);//wyświetlanie wszystkich błędów wystepujących w kodzie. Tylko na czas pisania aplikacji.
ini_set('display_errors', '1');// włączenie wyświetlania błędów. Funkcja ustawia rzeczy konfiguracyjne w PHP.


//FUNKCJA DEBUGUJĄCA
function dump($data)
{
    echo '<br/><div 
    style="
        display: inline-block;
        padding: 0 10px;
        border: 1px solid gray;
        background: lightgrey;
        "><pre>';
    print_r($data);
    echo '</pre>
    </div>
    <br/>';

}