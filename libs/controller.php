
<?php

class Controller{

    function __construct(){
        session_start();
        $this->view = new View(); //instancia de la clase view
    }


    function loadModel($model){
        $url = 'models/'.$model.'model.php';
        if(file_exists($url)){
            require $url;
            $modelName = $model . 'Model';
            $this->model = new $modelName();
        }
    }
}

?>