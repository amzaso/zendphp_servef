<?php

require_once ('../modules/core/src/core/models/parseUrl.php');
$request = parseURL();

if(isset($_GET['controller']))
    $controller = $_GET['controller'];
else
    $controller = 'usuarios';

switch($controller)
{
    case 'usuarios':
        include_once('../modules/application/src/application/controllers/usuarios.php');
    break;    
}