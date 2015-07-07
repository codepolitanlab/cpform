<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BaseField {

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

    public function max_length(){
        if ( ! is_numeric($val))
        {
            return FALSE;
        }

        return ($val >= mb_strlen($str));
    }

    public function min_length(){
        if ( ! is_numeric($val))
        {
            return FALSE;
        }

        return ($val <= mb_strlen($str));
    }

    public function match_length(){
        if ( ! is_numeric($val))
        {
            return FALSE;
        }

        return (mb_strlen($str) === (int) $val);
    }
}