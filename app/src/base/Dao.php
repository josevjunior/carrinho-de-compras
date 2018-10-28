<?php

namespace app\src\base;

//Interface que define os métodos de acesso a dados no BD ou em arrays
interface Dao {

    public function getAll();

    public function load($id);
    
}