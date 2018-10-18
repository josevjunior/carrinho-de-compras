<?php class Item {
    
    private $id;
    private $nome;
    private $preco;

    function __construct($id, $nome, $preco){
        $this->$id = $id;
        $this->$nome = $nome;
        $this->$preco = $preco;
    }

    public function getNome(){
        return $this->$nome;
    } 

    public function setNome($nome){
        $this->$nome = $nome;
    } 

    public function getPreco(){
        return $this->$nome;
    } 

    public function setPreco($nome){
        $this->$nome = $nome;
    }

    public function getId(){
        return $this->$id;
    }

    public function setId($id){
        $this->$id = $id;
    }

}