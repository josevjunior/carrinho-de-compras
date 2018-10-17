<?php class Item {
    
    private $nome;
    private $preco;

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

}