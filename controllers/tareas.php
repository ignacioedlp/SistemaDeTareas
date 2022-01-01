<?php

class Tareas extends Controller{

  public $usuario;
  public $idTarea;

  function __construct(){
    
    parent::__construct();
    $this->usuario = $_SESSION['user'];
    $this->view->tareas = [];
  }

     function render(){
    //TODO:como obtener el id del usuario actual
  
    $tareas = $this->model->get($this->usuario);
    $this->view->tareas = $tareas;
    $this->view->render('tareas/index');
    
  }

  function verTarea($param = null){

    $id = $param[0];

    $tarea = $this->model->getTareaById($id);
    
    $this->view->tarea = $tarea;
    $this->view->idTarea= $id;
    
    $this->view->render('tareas/verTarea');



  }


  function eliminar($param = null){
    $id = $param[0];
    $this->model->delete($id);
    $this->render();
  }


  function editarTarea(){
    $id = $_GET['id'];
    $titulo = $_POST['titulo'];
    $contenido = $_POST['contenido'];
    $prioridad = $_POST['prioridad'];
    $this->model->update(['id' => $id,'titulo' => $titulo, 'contenido' => $contenido, 'prioridad' => $prioridad]);
    $this->render();
  }


}



?>