<?php

use Symfony\Component\Routing;


$routes = new Routing\RouteCollection();

$routes->add('home', new Routing\Route('/home/{page}/{name}', array('page' => 1, 'name' => 'Dawid') ));
$routes->add('list', new Routing\Route('/list'));

return $routes;