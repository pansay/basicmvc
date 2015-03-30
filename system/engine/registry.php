<?php

final class Registry {

    private $registry_data = array();

    public function get ($key) {
        return (isset($this->registry_data[$key]) ? $this->registry_data[$key] : NULL);
    }

    public function set ($key, $value) {
        $this->registry_data[$key] = $value;
    }

    public function has ($key) {
        return isset($this->registry_data[$key]);
    }

}

?>