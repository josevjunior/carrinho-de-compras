<?php

use app\src\controller\CarrinhoController;
use app\src\controller\HomeController;
use app\src\model\dao\ProdutoDao;

define("DIR", dirname(__FILE__));
define("DS", DIRECTORY_SEPARATOR);

include_once DIR . DS . 'app' . DS . 'src' . DS . 'Loader.php';

session_start();

$loader = new app\Loader();
$loader->register();

$produtoDao = new ProdutoDao();

$page = isset($_GET['page']) ? $_GET['page'] : '';
$action = isset($_GET['action']) ? $_GET['action'] : 'index';

switch ($page) {
    case 'carrinho':
        $controller = new CarrinhoController();
        switch ($action) {
            case 'adicionar':
                if (isset($_POST['id'])) {
                    call_user_func(array($controller, $action), $_POST['id']);
                } else {
                    call_user_func(array($controller, 'index'), array());
                }
                break;
            case 'alterarQuantidade':
                if (isset($_POST['id'])) {
                    call_user_func(array($controller, $action), $_POST['id'], $_POST['quantidade']);
                } else {
                    call_user_func(array($controller, 'index'), array());
                }
                break;
            case 'excluir':
                if (isset($_POST['id'])) {
                    call_user_func(array($controller, $action), $_POST['id']);
                } else {
                    call_user_func(array($controller, 'index'), array());
                }
                break;
            default :
                call_user_func(array($controller, 'index'), array());
                break;
        }


        break;
    default:
        $controller = new HomeController($produtoDao);
        call_user_func(array($controller, $action), array());
        break;
}