<?php

class Admin extends Controller{

  function __construct(){
    parent::__construct();
  }

   function render(){
      $numDeTareasTotales = $this->model->getNumTareasTotales();
      $numDeTareasBajas = $this->model->getNumTareasBajas();
      $numDeTareasAltas = $this->model->getNumTareasAltas();
      $numDeTareasMedias = $this->model->getNumTareasMedias();
      $numDeAdmins = $this->model->getNumAdmins();
      $numDeUsers = $this->model->getNumUsers();

      $this->view->numDeUsers = $numDeUsers;
      $this->view->numDeAdmins = $numDeAdmins;
      $this->view->numDeTareasBajas = $numDeTareasBajas;
      $this->view->numDeTareasAltas = $numDeTareasAltas;
      $this->view->numDeTareasMedias = $numDeTareasMedias;
      $this->view->numDeTareasTotales = $numDeTareasTotales;
    $this->view->render('admin/index');
   }


}



?>