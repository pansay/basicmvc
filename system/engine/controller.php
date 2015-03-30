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

    protected function setTemplate ($template) {
        $this->template = 'application/view/template/' . $template . '.phtml';
    }

    protected function setRenderer ($renderer) {
        $this->renderer = $renderer;
    }

    public function render () {
        $file = 'system/renderer/' . $this->renderer . '.php';
        $class = 'Renderer' . $this->renderer;
        if (file_exists($file)) {
            require $file;
            $class::output($this->template, $this->data);
        }
    }

}

?>