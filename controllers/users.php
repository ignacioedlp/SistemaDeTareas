<?php

class Users extends Controller{

  function __construct(){
    parent::__construct();
    $this->view->tareas = [];
  }

   function render(){


    $usuarios = $this->model->getUsers();
    $this->view->usuarios = $usuarios;

    $this->view->render('users/index');
   }


}



?>