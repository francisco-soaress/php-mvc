<?php

namespace MF\Init; 

/**
 * LEMBRE SOBRE CLASS ABSTRATA
 * 
 * Ao herdar uma classe abstrata, todos os métodos marcados como abstratos na declaração da classe pai devem ser implementados na classe filha;
 */
abstract class Bootstrap
{
    // Atributos da classe
    private $routes;

    /**
     * Método abstrato InitRoutes().
     * 
     * Visibilidade Protegida.
     *
     */
    abstract protected function initRoutes();

    /**
     * Método construtor da class responsável por executar os métodos initiRoutes() e run() com o parametro
     */
    public function __construct()
    {
        $this->initRoutes();
        $this->run($this->getUrl());
    }

    /**
     * Metodo getRoutes()
     *
     * @return array
     */
    public function getRoutes()
    {
        return $this->routes;
    }

    /**
     * Método setRoutes(), o métodos precisa de uma parametro Array.
     *
     * @param array $routes
     */
    public function setRoutes(array $routes)
    {
        $this->routes = $routes;
    }

    /**
     * Metodo que executa a instância de metodos do IndexController.php
     *
     * @param string $url
     */
    protected function run($url)
    {
        foreach ($this->getRoutes() as $key => $route) {
            if ($url == $route["route"]) {

                $class = "App\\Controllers\\" . ucfirst($route["controller"]);

                $controller = new $class;
                $action = $route["action"];
                $controller->$action($action);
            }
        }
    }

    /**
     * Metodo da classe que retorna/recupera o Path do site.
     * Ex:
     * URL: www.webfr.com.br => / 
     * URL: www.webfr.com.br/sobre => /sobre
     *
     * @return string
     */
    protected function getUrl()
    {
        return parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
    }
}
