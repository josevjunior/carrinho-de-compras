<?php

namespace app\src\model\dao;

require(__DIR__.'/../../base/Dao.php');
require(__DIR__.'/../entidades/Produto.php');

class ProdutoDao implements \app\src\base\Dao{

    private $produtos;

    public function __construct(){
        $this->produtos = array(new \app\src\model\entidades\Produto(1, 'Computador', 2000.0),
                                new \app\src\model\entidades\Produto(2, 'Tablet', 2300.0),
                                new \app\src\model\entidades\Produto(3, 'TV-Android', 800.0),
                                new \app\src\model\entidades\Produto(4, 'Pendrive USB 16GB', 30.0));
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