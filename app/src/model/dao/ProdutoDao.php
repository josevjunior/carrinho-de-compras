<?php

namespace app\src\model\dao;

use app\src\base\Dao;
use app\src\model\entidades\Produto;

class ProdutoDao implements Dao{

    private $produtos;

    public function __construct(){
        $this->produtos = array(new Produto(1, 'Computador', 2000.0),
                                new Produto(2, 'Tablet', 2300.0),
                                new Produto(3, 'TV-Android', 800.0),
                                new Produto(4, 'Pendrive USB 16GB', 30.0));
    }

    public function getAll(){
        return $this->produtos;
    }

    public function load($id){
        foreach($this->produtos as $produto){
            if($produto->getId() == $id){
                return $produto;
            }
        }
        return null;
    }

}