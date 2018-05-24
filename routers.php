<?php  
global $routes;
$routes = array();



$routes['/login/{id}'] = '/login/:id';
$routes['/login/{titulo}'] = '/login/cadastrar/:titulo';
$routes['/{titulo}'] = '/login/cadastrar/:titulo';



