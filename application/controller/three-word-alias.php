<?php

class ControllerThreeWordAlias extends Controller {

    public function index() {
        $this->data['test'] = 'test variable from three word alias controller';
        $this->load->model('whatever');
        $this->setTemplate('numbers');
        $this->data['numbers'] = $this->model_whatever->getNumbers();
    }

}

?>