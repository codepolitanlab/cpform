<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH.'libraries/cpform/Fields/CharField.php';

class EmailField extends CharField {

    public function rules($str, $opt_rules=[]){
        if (function_exists('idn_to_ascii') && $atpos = strpos($str, '@'))
        {
            $str = substr($str, 0, ++$atpos).idn_to_ascii(substr($str, $atpos));
        }

        return (bool) filter_var($str, FILTER_VALIDATE_EMAIL);
    }
}