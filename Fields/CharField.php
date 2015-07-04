<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CharField {

    protected $widget = '';
    protected $initial = '';
    protected $config = '';
    protected $name = '';

    public function __construct($name='', $initial='', $config=[])
    {
        $this->name = $name;
        $this->initial = $initial;
        $this->config = $config;

    }

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
    	return ctype_alpha($str) || (bool) preg_match('/^[a-zA-Z ]+$/', $str);
    }
}