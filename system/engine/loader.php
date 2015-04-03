<?php

final class Loader extends Base {

    public function model ($model) {
        $name = 'model_' . $model;
        $file  = 'application/model/' . $model . '.php';
        $class = 'Model' . $model;
        if (!$this->registry->has($name)) {
            if (file_exists($file)) {
                require $file;
                $this->registry->set($name, new $class($this->registry));
            }
            else {
                die('Error: Could not load model ' . $model . '!');
            }
        }
    }

}

?>