<?php

require_once "controllers/UsuarioController.php";

if( isset($_GET['controller']) && class_exists($_GET['controller']) )
{
    $aux = $_GET['controller'];
    $controlador = new $aux();
    if(isset($_GET['action']) && method_exists($controlador, $_GET['action']))
    {
        $action =  $_GET['action'];
        $controlador->$action();
    }else{
        echo "la pagina no existe";
    }
}else{
    echo "la pagina no existe";
}
?>