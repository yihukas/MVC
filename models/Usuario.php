<?php

class Usuario
{
    private $_nombre;
    private $_apellido;
    private $_email;
    private $_password;

    public function setNombre($nombre){
        $this->_nombre = $nombre;
    }

    public function getNombre(){
        return $this->_nombre;
    }

    public function setApellido($apellido){
        $this->_apellido = $apellido;
    }

    public function getApellido(){
        return $this->_apellido;
    }

    public function setEmail($email){
        $this->_email = $email;
    }

    public function getEmail(){
        return $this->_email;
    }

    public function setPassword($password){
        $this->_password = $password;
    }

    public function getPassword(){
        return $this->_password;
    }

    public function mostrarTodo(){
        return "todos los usuarios";
    }
}


?>