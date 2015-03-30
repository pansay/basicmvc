<?php

final class Router extends Base {

    public function __construct ($registry) {
        parent::__construct($registry);
        //$this->load = new Loader($registry);
    }

    public function dispatch () {
        $route = '';
        if (isset($_GET['route'])) {
            $route = String::cleanRoute($_GET['route']);
        }
        if ($route === '') { // home
            $route = 'home';
        }

        $file = $route ...;
        $class = ;

        if (file_exists($file)) {
            require_once($file);
            $controller = new $class($this->registry);
            $controller->index();
        }
    }

}

?>