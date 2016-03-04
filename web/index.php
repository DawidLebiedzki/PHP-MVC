<?php

$controller = isset($_GET['controller']) ? $_GET['controller'] : 'home'; // Zmienna $controller lub domyslna wartosc

$dir = __DIR__ . '/../src/app/controllers/'; // Wyswietla

if(file_exists($dir . $controller . '.php')){
    require $dir . $controller . '.php';
}else{
    header('HTTP/1.0 404 Not Founds');
    echo '404';
}
