<?php

class RendererHtml {

    public function render($template, $data) {

        if (file_exists($template)) {
            extract($data);
            ob_start();
            require_once($template);
            $this->response->setOutput(ob_get_contents());
            ob_end_clean();
            $this->response->addHeader('X-UA-Compatible: IE=Edge');
            $this->response->addHeader('Content-Type: text/html; charset=utf-8');

        }
        else {
            die('Error: Could not load template ' . $template . '!');
        }

    }

}

?>