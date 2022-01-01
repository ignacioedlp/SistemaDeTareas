<?php

require_once 'libs/model.php';


class registerModel extends Model{

  function __construct(){
    parent::__construct();
  }


  public function buscar($username){
    $sql = "SELECT * FROM usuarios WHERE username = :username";
    $stmt = $this->db->connect()->prepare($sql);
    $stmt->bindParam(':username', $username);
    $stmt->execute();
    $result = $stmt->fetchAll();
      if(count($result) > 0){
        return false;
      }else{
        return true;
      }
    
  }


  function getDatetimeNow() {
    $tz_object = new DateTimeZone('Brazil/East');
    //date_default_timezone_set('Brazil/East');

    $datetime = new DateTime();
    $datetime->setTimezone($tz_object);
    return $datetime->format('Y\-m\-d\ h:i:s');
}



  public function insert($datos){

        $now = date_create()->format('Y-m-d H:i:s');
      
        //verificar si existe en la base de datos
        if($this->buscar($datos['username'])){
            try{
                $query = $this->db->connect()->prepare('INSERT INTO usuarios(username,password,rol,create_time) VALUES(:username,:password,:rol, :time)');
                $query->execute(['username' => $datos['username'], 'password' => $datos['password'], 'rol' => $datos['rol'], 'time' => $now]);
                return true;
            }catch(PDOException $e){
                echo $e->getMessage();
                
                return false;
            } 
        }
        return false;
    }




}


?>