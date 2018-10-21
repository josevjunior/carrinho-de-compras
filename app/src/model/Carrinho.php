<?php

namespace app\src\model;

class Carrinho {

    private $itens;
    private $produtoDao;

    function __construct() {
        if (isset($_SESSION['carrinho'])) {
            $this->itens = unserialize($_SESSION['carrinho']);
        } else {
            $this->itens = array();
        }
        $this->produtoDao = new dao\ProdutoDao();
    }

    public function __destruct() {
        $_SESSION['carrinho'] = serialize($this->itens);
    }

    public function adicionarItem($id) {
        $produto = $this->produtoDao->load($id);
        if ($produto != null) {
            $item = new entidades\Item(count($this->itens) + 1, $produto, 1);
            array_push($this->itens, $item);
        }
    }

    public function alterarQuantidade($id, $quantidade) {
        if ($quantidade == 0) {
            $this->removerItem($id);
            return;
        }

        foreach ($this->itens as $key => $item) {
            if ($item->getId() == (int) $id) {
                $item->setQuantidade($quantidade);
                $this->itens[$key] = $item;
                break;
            }
        }
    }

    public function removerItem($id) {
        foreach ($this->itens as $item) {
            if ($item->getId() == (int) $id) {
                $index = array_search($item, $this->itens);
                if ($index !== false) {
                    unset($this->itens[$index]);
                    break;
                }
            }
        }
    }

    public function getItens() {
        return $this->itens;
    }

    public function getTotal() {
        $total = 0.0;
        foreach ($this->itens as $item) {
            $total += $item->getSubtotal();
        }
        return $total;
    }

}
