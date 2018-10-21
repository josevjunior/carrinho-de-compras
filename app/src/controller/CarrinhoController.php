<?php

namespace app\src\controller;

use app\src\base\AbstractController;

class CarrinhoController extends AbstractController{
    
    private $carrinho;
    
    public function __construct() {
        parent::__construct();
        $this->carrinho = new \app\src\model\Carrinho();
        
    }
    
    public function index(){
        $this->view->set('carrinho', $this->carrinho);
        $this->view->render('carrinho');
    }
    
    public function adicionar($id){
        $this->carrinho->adicionarItem($id);
        $this->index();
    }
    
    public function alterarQuantidade($id, $quantidade){
        $this->carrinho->alterarQuantidade($id, $quantidade);
        $this->index();
    }
    
    public function excluir($id){
        $this->carrinho->removerItem($id);
        $this->index();
    }
    
}
