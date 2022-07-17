<?php

class UsuarioController
{
    public function mostrarTodos(){
        require_once "models/Usuario.php";
        $oUsuario = new Usuario();
        $allUsers = $oUsuario->mostrarTodo();
        require_once "views/usuario/mostrarTodos.php";
    }

    public function crear(){
        require_once "views/usuario/crear.php";
    }
}

?>