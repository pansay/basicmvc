<?php

class String {

    public static function cleanFile ($string) {
        $string = preg_replace('/[^a-z0-9_\-]/i', '', $string);
        return $string;
    }

    public static function cleanClass ($string) {
        $string = preg_replace('/[^a-z0-9]/i', '', $string);
        return $string;
    }

}

?>