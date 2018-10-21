<?php

namespace app\src\base;

abstract class AbstractController {

    protected $view;

    public function __construct(){
        $this->view = new \app\src\base\View();
    }

}