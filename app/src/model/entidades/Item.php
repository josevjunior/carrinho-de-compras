<?php 

namespace app\src\model\entidades;

class Item {
    
    private $id;
    private $produto;
    private $quantidade;

    function __construct($id, $produto, $quantidade){
        $this->id = $id;
        $this->produto = $produto;
        $this->quantidade = $quantidade;
    }

    function getId() {
        return $this->id;
    }

    function getProduto() {
        return $this->produto;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setProduto($produto) {
        $this->produto = $produto;
    }
    
    function getQuantidade() {
        return $this->quantidade;
    }

    function setQuantidade($quantidade) {
        $this->quantidade = $quantidade;
    }

    public function getSubTotal(){
        return $this->produto->getPreco() * $this->quantidade;
    }
    
}