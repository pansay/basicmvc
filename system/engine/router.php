<?php

final class Router extends Base {

    private $file;
    private $class;

    public function __construct ($registry) {
        parent::__construct($registry);
        $this->load = new Loader($registry);
    }

    public function dispatch () {
        if (isset($_GET['route'])) {
            $route = $_GET['route'];
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
        $controller = new $this->class($this->registry);
        $controller->index();
        $controller->render();
    }

    private function setFile ($route) {
        $this->file = 'application/controller/' . String::cleanFile($route) . '.php';
    }

    private function setClass ($route) {
        $this->class = 'Controller' . String::cleanClass($route);
    }

}

?>