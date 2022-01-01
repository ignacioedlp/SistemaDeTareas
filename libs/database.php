<?php


class Database{

  private $host;
  private $db_name;
  private $username;
  private $password;
  public $charset;

  public function __construct(){
    $this->host = constant('HOST');
    $this->db_name = constant('DB');
    $this->username = constant('USER');
    $this->password = constant('PASSWORD');
    $this->charset = constant('CHARSET');
  }


  function connect(){
    try{
      $connection = "mysql:host=".$this->host.";dbname=".$this->db_name.";charset=".$this->charset;
      $options = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES   => false,
      ];
      $pdo = new PDO($connection, $this->username, $this->password, $options);
      return $pdo;
    }catch(PDOException $e){
      print_r('Error connection: ' . $e->getMessage());
    }
  }

}




?>