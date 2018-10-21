<?php 

namespace app\src\model\entidades;

class Produto {
    
    private $id;
    private $nome;
    private $preco;

    function __construct($id, $nome, $preco){
        $this->id = $id;
        $this->nome = $nome;
        $this->preco = $preco;
    }

    public function getNome(){
        return $this->nome;
    } 

    public function setNome($nome){
        $this->nome = $nome;
    } 

    public function getPreco(){
        return $this->preco;
    } 

    public function setPreco($preco){
        $this->preco = $preco;
    }

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
    }

}