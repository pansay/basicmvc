<?php

class Controller404 extends Controller {

    public function index() {
        http_response_code(404);
        $this->data['test'] = 'test is 404';
    }

}

?>