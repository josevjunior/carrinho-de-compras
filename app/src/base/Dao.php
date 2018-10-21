<?php

namespace app\src\base;

interface Dao {

    public function getAll();

    public function load($id);
    
}