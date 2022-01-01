<?php


require_once 'libs/Model.php';
require_once 'models/task.php';

class tareasModel extends Model{

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


  public function getTareaById($id){

    $tarea = new Task();

    try{
      $sql = "SELECT * FROM tareas WHERE id = :id";
      $query = $this->db->connect()->prepare($sql);
      $query->execute(['id' => $id]);
      while($row = $query->fetch()){
        $tarea->id = $row['id'];
        $tarea->prioridad = $row['prioridad'];
        $tarea->titulo = $row['titulo'];
        $tarea->contenido = $row['contenido'];
        // $user = $row['id_user'];
        $tarea->fechaInicio = $row['create_time'];
        $tarea->fechaFin = $row['finished_time'];
        
      };
      return $tarea;
      
      
    }catch(PDOException $e){
      return false;
    }
  }

  function update($datos){
    $id = $datos['id'];
    $titulo = $datos['titulo'];
    $contenido = $datos['contenido'];
    $prioridad = $datos['prioridad'];
    try{
      $sql = "UPDATE tareas SET titulo = :titulo, contenido = :contenido, prioridad = :prioridad  WHERE id = :id";
      $query = $this->db->connect()->prepare($sql);
      $query->execute(['titulo' => $titulo, 'contenido' => $contenido, 'prioridad' => $prioridad, 'id' => $id]);
      return true;
    }catch(PDOException $e){
      return false;
    }
  }


  function get($username){
 
    $id = $this->getId($username);
  
    $tareas = [];
    try{
      $sql = "SELECT * FROM tareas WHERE id_user = :id";
      $query = $this->db->connect()->prepare($sql);
      $query->execute(['id' => $id]);
      while( $row = $query->fetch()){

    

    
        $item = new Task();
        $item->id = $row['id'];
        $item->prioridad = $row['prioridad'];
        $item->titulo = $row['titulo'];
        $item->contenido = $row['contenido'];
        $user = $row['id_user'];
        $item->fechaInicio = $row['create_time'];
        $item->fechaFin = $row['finished_time'];
        

        

        array_push($tareas, $item);
      }
      
      return $tareas;
    }catch(PDOException $e){
      //echo $e->getMessage();
      return false;
    }

  }

  function delete($id){
    try{
      $sql = "DELETE FROM tareas WHERE id = :id";
      $query = $this->db->connect()->prepare($sql);
      $query->execute(['id' => $id]);
      return true;
    }catch(PDOException $e){
      return false;
    }
  }




}

?>