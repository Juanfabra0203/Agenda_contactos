<?php

require_once __DIR__ . "/../models/Contacto.php";

class ContactoControl{

    private $modelo;

    public function __construct(){
        $this->modelo = new Contacto();
    }

    public function iniciar(){
        return $this->modelo->obtenerContactos();
    }

    public function buscarTexto($texto){
        return $this->modelo->buscarXTxt($texto);

    }

    public function nuecontac($nombre,$telefono,$email){
        return $this->modelo->crearContacto($nombre,$telefono,$email);
    }

    public function buscar($id){
        return $this->modelo->buscarId($id);
    }

    public function actualizar($id,$nombre,$telefono,$email){
        return $this->modelo->actualizarContacto($id,$nombre,$telefono,$email);
    }

    public function eliminar($id){
        return $this->modelo->eliminarContacto($id);
    }

}


?>