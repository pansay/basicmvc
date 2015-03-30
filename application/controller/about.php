<?php

class ControllerAbout extends Controller {

    public function index() {
        $this->data['test'] = 'test variable from about controller';
    }

}

?>