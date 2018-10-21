<?php   
namespace app\src\controller;

use app\src\base\AbstractController;

class HomeController extends AbstractController{
    
    private $produtoDao;
    
    public function __construct($produtoDao) {
        parent::__construct();
        $this->produtoDao = $produtoDao;
    }


    public function index(){
        $this->view->set('produtos', $this->produtoDao->getAll());
        $this->view->render('home');
    }
}