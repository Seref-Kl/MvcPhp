<?php

class Load{
    public function __construct()
    {

    }
    public function view($fileName, $data = false){
        if ($data == true){
            extract($data);
        }
        include "App/View/" . $fileName . "_view.php";
    }
    public function model($fileName){
        include "App/Model/" . $fileName . ".php";
        return new $fileName();
    }
}



?>