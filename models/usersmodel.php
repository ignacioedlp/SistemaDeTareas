<?php

require_once 'libs/Model.php';
require_once 'models/user.php';

class usersModel extends Model{

  function __construct(){
    parent::__construct();
  }

  function getUsers(){

      $users = [];
      try{
      $sql = "SELECT * FROM usuarios";
      $stmt = $this->db->connect()->prepare($sql);
      $stmt->execute();
      while ($row = $stmt->fetch()){
        $user = new User();
        $user->id = $row['id'];
        $user->username = $row['username'];
        $user->rol = $row['rol'];
        $user->create_time = $row['create_time'];
        array_push($users, $user);
      }
      return $users;
    }catch(PDOException $e){
      return false;
    }
  }

}

?>