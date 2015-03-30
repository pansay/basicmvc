<?php

class ControllerHome extends Controller {

    public function index() {
        $this->data['test'] = 'test variable from home controller';
    }

}

?>