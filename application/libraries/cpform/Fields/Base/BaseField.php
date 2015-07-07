<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BaseField {

    protected $widget = '';
    protected $initial = '';
    protected $config = '';
    protected $name = '';
    protected $rules = '';

    public function __construct($name='', $initial='', $config=[], $rules=[])
    {
        $this->name = $name;
        $this->initial = $initial;
        $this->config = $config;
        $this->rules = $rules;
    }

    public function check_validation_rules($str, $opt_rules=[]){
        $is_valid = TRUE;

        if (count($opt_rules) > 0){
            foreach ($opt_rules as $key => $val){
                $is_valid = $this->$key($str, $val) && $is_valid;
            }
        }

        return $is_valid;
    }

    public function get_rules($key=''){
        return $this->rules;
    }

    public function max_length($str, $val){
        $val = (int) $val;

        if ( ! is_numeric( $val  ) )
        {
            return FALSE;
        }

        return ($val >= mb_strlen($str));
    }

    public function min_length($str, $val){
        $val = (int) $val;
        
        if ( ! is_numeric( $val ) )
        {
            return FALSE;
        }

        return ( $val <= mb_strlen($str) );
    }

    public function match_length($str, $val){
        $val = (int) $val;
        
        if ( ! is_numeric(  $val ))
        {
            return FALSE;
        }

        return (mb_strlen($str) === (int) $val);
    }
}