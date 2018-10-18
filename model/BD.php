<?php
    /**
     * Classe que vai representar um banco de dados
     */
    class BD{
        static $itens = null;

        static public function initialize(){
            self::$itens = array(
                new Item(1, 'teste 1', 12.3)
            );
        }
    }

    