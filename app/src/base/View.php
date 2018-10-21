<?php

namespace app\src\base;

class View{
    
    private $data = array();
    private $folder;

    public function __construct(){
        $this->folder = DIR.DS.'app'.DS.'src'.DS.'view'.DS;
    }

    public function set($key, $value){
        $this->data[$key] = $value;
    }

    public function render($file){
        $filename = $this->folder.$file.'.php';
        if(file_exists($filename)){
            extract($this->data);
            include $filename;
        }
    }

}