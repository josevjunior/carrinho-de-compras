<?php

namespace app\src\controller;

require_once '../Loader.php';
require_once '../model/dao/ProdutoDao.php';
require_once '../model/Carrinho.php';

session_start();

$page = isset($_GET['page']) ? $_GET['page'] : 'index';
$action = isset($_GET['action']) ? $_GET['action'] : '';


switch ($page) {
    case 'produtos':
        //Chama o DAO(Data access object) de produtos para fazer a busca
        //dos produtos disponíveis
        $produtoDao = new \app\src\model\dao\ProdutoDao();
        //Transforma os indices do array em váriaveis que podem ser acessadas nas páginas
        extract(array('produtos' => $produtoDao->getAll()));
        
        //Renderiza a página no navigador
        include __DIR__.'/../view/home.php'; 
        break;
    case 'carrinho':
        $carrinho = new \app\src\model\Carrinho();
        switch ($action){
            case 'adicionar':
                if(isset($_POST['id'])){
                    $carrinho->adicionarItem($_POST['id']);
                }
                break;
            case 'alterarQuantidade':
                if(isset($_POST['id']) && isset($_POST['quantidade'])){
                    $carrinho->alterarQuantidade($_POST['id'], $_POST['quantidade']);
                }
                break;
            case 'excluir':
                if(isset($_POST['id'])){
                    $carrinho->removerItem($_POST['id']);
                }
                break;
            default :
                $carrinho = new \app\src\model\Carrinho();
                break;
        }
        extract(array('carrinho' => $carrinho));
        require __DIR__.'/../view/carrinho.php';
        break;
    default:
        //Chama o home se não tiver paramtro passado
        $produtoDao = new \app\src\model\dao\ProdutoDao();
        //Transforma os indices do array em váriaveis que podem ser acessadas nas páginas
        extract(array('produtos' => $produtoDao->getAll()));
        include __DIR__.'/../view/home.php'; 
        break;
}
