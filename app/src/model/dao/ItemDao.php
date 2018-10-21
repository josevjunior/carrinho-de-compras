<?php

namespace app\src\model\dao;

class ItemDao implements \app\src\base\Dao{
    
    private $itens;
    
    public function getAll() {
        return $this->itens;
    }

    public function load($id) {
        foreach ($this->itens as $item){
            if($id == $item->getId()){
                return $this->itens;
            }
        }
        
        return null;
    }
    

}
