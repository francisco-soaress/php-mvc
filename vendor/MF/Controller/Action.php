<?php

namespace MF\Controller;

abstract class Action
{
    protected $view;

    public function __construct()
    {
        $this->view = new \stdClass();
    }

    protected function render($views, $layout)
    {
        $this->view->page = $views;

        if (file_exists("../App/Views/{$layout}.php")) {
            require_once "../App/Views/{$layout}.php";
        } else {
            require_once "../App/Views/404.php";
        }
    }

    protected function content()
    {
        $classeAtual = get_class($this);
        $classeAtual = str_replace('App\\Controllers\\', '', $classeAtual);
        $classeAtual = strtolower(str_replace('Controller', '', $classeAtual));

        require_once "../App/Views/{$classeAtual}/{$this->view->page}.php";
    }
}
