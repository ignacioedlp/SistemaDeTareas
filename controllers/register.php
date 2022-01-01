<?php

class Register extends Controller{

  function __construct(){
    parent::__construct();
    $this->view->mensaje = '';
  }

  function render(){
    $this->view->render('register/index');

  }


  function registerUser(){

    if(isset($_POST)){

    $user = $_POST['username'];
    $pass = $_POST['password'];
    $email = $_POST['rol'];

    $passHashed = md5($pass);
    
    
    //

    if($this->model->insert([
      'username' => $user,
      'password' => $passHashed,
      'rol' => $email
    ])){
        $this->view->mensaje = '<div class="alert alert-success" role="alert"><strong>Registro existoso</strong></div>
        <a name="" id="" class="btn btn-info mt-1" href="' . constant('URLBASE') . 'login/" role="button">Iniciar sesion</a>';
    }else{
        $this->view->mensaje = '<div class="alert alert-danger" role="alert"><strong>Registro fallido</strong></div>';
    } 
    }else{
      $this->view->mensaje = 'Ingresa los datos';
    }
    $this->render();   
  
  }

}

?>