<?php

class Login extends Controller{

  function __construct(){
    parent::__construct();
  }

  function render(){
    $this->view->render('login/index');
  }

}

?>