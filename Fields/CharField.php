<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CharField {

    protected $widget = '';
    protected $initial = '';
    protected $config = '';

    public function __construct($initial='', $config=[])
    {
        $this->initial = $initial;
        $this->config = $config;

    }

    public function render(){

        $this->widget = '<input type="text"';
        
        foreach ($this->config as $key => $value) {
            $attribute = $key.'="'.$value.'"';
            $this->widget .= ' '.$attribute.' ';
        }
        $this->widget .= ' value="'.$this->initial.'" ';
        $this->widget .= ' />';
        
        return $this->widget;
    }

    public function rules($str){
    	return ctype_alpha($str) || (bool) preg_match('/^[a-zA-Z ]+$/', $str);
    }
}