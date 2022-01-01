<?php


require_once 'controllers/errors.php';
class App{

  function __construct(){


  





    $url = isset($_GET['url']) ? $_GET['url'] : 'null';

    $url = rtrim($url, '/');

    $url = explode('/', $url);

    if($url[0] == 'null'){
      $archivoController = 'controllers/login.php';
      require_once $archivoController;
      $controller = new Login();
      //$controller->loadModel('main');
      $controller->render();
      return false;
    }

    $archivoController = 'controllers/' . $url[0] . '.php';  //url[0] = controlador
                                                             //url[1] = metodo
                                                             //url[2] = parametro
                                                             //asi es como voy a llamar a los controladores

    if(file_exists($archivoController)){ //si existe el archivo
      require_once $archivoController;
      $controller = new $url[0];  //url[0] = controlador
      
      $controller->loadModel($url[0]); //carga el modelo del controlador

      //Numero de elemeentos del arreglo
      $nparam = sizeof($url);
      if($nparam > 1){
        if($nparam > 2){
          $param =[];
          for($i = 2; $i<$nparam; $i++){
            array_push($param, $url[$i]);
          }
          $controller->{$url[1]}($param); //url[1] = metodo con los parametros 
        }
        else{
          $controller->{$url[1]}(); //url[1] = metodo
        }
      }else{
        $controller->render();
      }
    


    }else{
      $controllerError = new Errors(); //si no existe el controlador
    }
    
  }


}

?>