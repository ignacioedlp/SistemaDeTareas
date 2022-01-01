<?php

class adminModel extends Model{

  function __construct(){
    parent::__construct();
  }


  function getNumTareasAltas(){
      
      $numDeTareasAltas = 0;
      try{
      $sql = "SELECT COUNT(*) FROM tareas WHERE prioridad = 'Alta'";
      $stmt = $this->db->connect()->prepare($sql);
      $stmt->execute();
      while ($row = $stmt->fetch()){
        $numDeTareasAltas = $row['COUNT(*)'];
      }
      return $numDeTareasAltas;
    }catch(PDOException $e){
      return false;
    }
  }
  function getNumTareasBajas(){
        
        $numDeTareasBajas = 0;
        try{
        $sql = "SELECT COUNT(*) FROM tareas WHERE prioridad = 'Baja'";
        $stmt = $this->db->connect()->prepare($sql);
        $stmt->execute();
        while ($row = $stmt->fetch()){
          $numDeTareasBajas = $row['COUNT(*)'];
        }
        return $numDeTareasBajas;
      }catch(PDOException $e){
        return false;
      }
  }
  function getNumTareasMedias(){
          $numDeTareasMedias = 0;
          try{
          $sql = "SELECT COUNT(*) FROM tareas WHERE prioridad = 'Media'";
          $stmt = $this->db->connect()->prepare($sql);
          $stmt->execute();
          while ($row = $stmt->fetch()){
            $numDeTareasMedias = $row['COUNT(*)'];
          }
          return $numDeTareasMedias;
        }catch(PDOException $e){
          return false;
        }
  }
  function getNumAdmins(){
          $numDeAdmins = 0;
          try{
          $sql = "SELECT COUNT(*) FROM usuarios WHERE rol = 'admin'";
          $stmt = $this->db->connect()->prepare($sql);
          $stmt->execute();
          while ($row = $stmt->fetch()){
            $numDeAdmins = $row['COUNT(*)'];
          }
          return $numDeAdmins;
        }catch(PDOException $e){
          return false;
        }
  }
  function getNumUsers(){
          $numDeUsers = 0;
          try{
          $sql = "SELECT COUNT(*) FROM usuarios WHERE rol = 'user'";
          $stmt = $this->db->connect()->prepare($sql);
          $stmt->execute();
          while ($row = $stmt->fetch()){
            $numDeUsers = $row['COUNT(*)'];
          }
          return $numDeUsers;
        }catch(PDOException $e){
          return false;
        }
  }

  function getNumTareasTotales(){
    $numDeTareasTotales = 0;
    try{
    $sql = "SELECT COUNT(*) FROM tareas";
    $stmt = $this->db->connect()->prepare($sql);
    $stmt->execute();
    while ($row = $stmt->fetch()){
      $numDeTareasTotales = $row['COUNT(*)'];
    }
    return $numDeTareasTotales;
  }catch(PDOException $e){
    return false;
  }
  }

}

?>