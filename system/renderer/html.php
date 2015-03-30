<?php

class RendererHtml {

    public static function output ($template, $data) {
        if (file_exists($template)) {
            extract($data);
            ini_set('zlib.output_compression','On');
            ob_start();
                include $template;
                $output = ob_get_contents();
                $output = preg_replace('~>\s*\n\s*<~', '><', $output);
                $output = str_replace("\n", '', $output);
            ob_end_clean();
            header('X-UA-Compatible: IE=Edge');
            header('Content-Type: text/html; charset=utf-8');
            echo $output;
        }
        else {
            die('Error: Could not load template '.$template.'!');
        }
    }

}

?>