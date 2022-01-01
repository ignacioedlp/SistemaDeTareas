<?php

  class Nuevo extends Controller{
    public $usuario;

    function __construct(){
      parent::__construct();
      $this->usuario = $_SESSION['user'];
    }

    function render(){
      $this->view->render('nuevo/index');
    }


    function registrarTarea(){
      $titulo = $_POST['titulo'];
      $contenido = $_POST['contenido'];
      $prioridad = $_POST['prioridad'];
      $fechaFin = $_POST['fechaFin'];
      $id_usuario = $this->usuario;


      $this->model->insert(['titulo' => $titulo, 'contenido' => $contenido, 'prioridad' => $prioridad, 'id_usuario' => $id_usuario, 'fechaFin' => $fechaFin]);
      header('Location: '.constant('URLBASE').'tareas');
    }


  }





?>