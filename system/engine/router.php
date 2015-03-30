<?php

final class Router extends Base {

    private $route = '';
    private $file;
    private $class;
    private $controller;

    public function __construct ($registry) {
        parent::__construct($registry);
        //$this->load = new Loader($registry);
    }

    public function dispatch () {
        if (isset($_GET['route'])) {
            $route = String::cleanRoute($_GET['route']);
        }
        if ($route === '') { // home
            $route = 'home';
        }
        $this->setFile($route);
        if (!file_exists($this->file)) {
            $route = '404';
            $this->setFile($route);
        }
        require $this->file;
        $this->setClass($route);
        $this->controller = new $this->class($this->registry);
        $this->controller->index();
    }

    private function setFile ($route) {
        $this->file = 'application/controller/' . $route . '.php';
    }

    private function setClass ($route) {
        $this->class = 'Controller' . $route;
    }

}

?>