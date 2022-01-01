<?php

class nuevoModel extends Model{

  function __construct(){
    parent::__construct();
  }


  private function getId($username){
    try{
      $sql = "SELECT id FROM usuarios WHERE username = :username";
      $query = $this->db->connect()->prepare($sql);
      $query->execute(['username' => $username]);
      $id = $query->fetch();
      return $id[0];
    }catch(PDOException $e){
      return false;
    }
  }




  function insert($datos){

    $fechaInicio = date_create()->format('Y-m-d H:i:s');
    $fechaFin = date_create()->format('Y-m-d H:i:s');
    $id_user = $this->getId($datos['id_usuario']);
    

    try{
      $sql = "INSERT INTO tareas (prioridad, titulo, contenido, id_user, create_time, finished_time) VALUES (:prioridad, :titulo, :contenido, :user, :fechaInicio, :fechaFin)";
      $query = $this->db->connect()->prepare($sql);
      $query->execute([
        'prioridad' => $datos['prioridad'],
        'titulo' => $datos['titulo'],
        'contenido' => $datos['contenido'],
        'user' => $id_user,
        'fechaInicio' => $fechaInicio,
        'fechaFin' => $fechaFin
      ]);
    }catch(PDOException $e){
      //echo $e->getMessage();
      return false;
    }
  }



}

?>