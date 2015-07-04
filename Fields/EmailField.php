<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH.'libraries/cpform/Fields/Base/BaseField.php';

class EmailField extends BaseField {

    public function render(){

        $this->widget = '<input type="text"';
        
        foreach ($this->config as $key => $value) {
            $attribute = $key.'="'.$value.'"';
            $this->widget .= ' '.$attribute.' ';
        }

        $this->widget .= ' name="'.$this->name.'" ';        
        $this->widget .= ' value="'.$this->initial.'" ';
        $this->widget .= ' />';
        
        return $this->widget;
    }

    public function rules($str){
        if (function_exists('idn_to_ascii') && $atpos = strpos($str, '@'))
        {
            $str = substr($str, 0, ++$atpos).idn_to_ascii(substr($str, $atpos));
        }

        return (bool) filter_var($str, FILTER_VALIDATE_EMAIL);
    }
}