<? class Carrinho{
    
    private $itens;
    
    function __construct(){
        $this->$itens = array();
    }

    public function adicionarItem($item){
        array_push($this->$itens, $item);
    }
    
}