<?php

abstract class Controller extends Base {

    protected $template;
    protected $data = array();
    protected $renderer;

    public function __construct ($registry) {
        parent::__construct($registry);
        $this->setTemplate(DEFAULT_TEMPLATE);
        $this->setRenderer(DEFAULT_RENDERER);
    }

    protected function setTemplate($template) {
        $this->template = 'application/view/template/' . $template . '.tpl';
    }

    protected function setRenderer($renderer) {
        $this->renderer = 'Renderer' . $renderer;
    }

    public function __destruct () {
        $this->renderer::output($this->template, $this->data);
    }

}

?>