<?php

namespace App\Controllers;

// Os Models
// use App\Models\Info;
// use App\Models\Produto;

// Os recursos do Miniframework
use MF\Controller\Action;
use MF\Model\Container;

class IndexController extends Action
{
    /**
     * Método que retorna a Index da página
     *
     * @param string $caminho = "index"
     */
    public function index($caminho)
    {        
        $produto = Container::getModel("Produto");
        $this->view->dados = $produto->getProdutos();        

        $this->render($caminho, "layout1");
    }

    /**
     * Método que retorna Sobre Nós da página
     *
     * @param string $caminho = "sobre_nos"
     */
    public function sobreNos($caminho)
    {
        $info = Container::getModel("Info");
        $this->view->informacoes = $info->getInfo();

        $this->render($caminho, "layout2");
    }
}
