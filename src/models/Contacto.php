<?php

require_once __DIR__ . "/../config/conexion.php";

class Contacto{

    private $dtb;

    public function __construct(){
        $this->dtb = (new Conexion())->pdo;
    }


    public function obtenerContactos(){
        $query = $this->dtb->prepare("SELECT * FROM contactos");
        $query->execute();
        return $query->fetchAll();
    }

    public function crearContacto($nombre,$telefono,$email){
        $query = $this->dtb->prepare("INSERT INTO contactos (nombre,telefono,email) VALUES (?,?,?)");
        return $query->execute([$nombre,$telefono,$email]);
        
    }

    public function buscarId($id){
        $query = $this->dtb->prepare("SELECT * FROM contactos WHERE id = ? ");
        $query->execute([$id]);
        return $query->fetch();
    }

    public function buscarXTxt($texto){
        $query = $this->dtb->prepare("SELECT * FROM contactos WHERE nombre LIKE ? OR telefono LIKE ? OR email LIKE ?");
        $texto = "%$texto%";
        $query->execute([$texto,$texto,$texto]);
        return $query->fetchAll(PDO::FETCH_ASSOC);
    }

    public function actualizarContacto($id,$nombre,$telefono,$email){
        $query = $this->dtb->prepare("UPDATE contactos SET nombre = ? , telefono = ? , email = ? WHERE id = ?");
        $query->execute([$nombre,$telefono, $email, $id]);
    }

    public function eliminarContacto($id){
        $query = $this->dtb->prepare("DELETE FROM contactos WHERE id = ? ");
        $query->execute([$id]);
    }
}
?>