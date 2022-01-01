<?php


class View{


    function __construct(){

    }

    function render($nombre){
        require 'views/' . $nombre . '.php';  //me va a renderizar la vista que yo quiera, esta se inicia en controller
    }
}




?>