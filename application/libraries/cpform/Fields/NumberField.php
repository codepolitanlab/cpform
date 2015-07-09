<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH.'libraries/cpform/Fields/CharField.php';

class NumberField extends CharField {

    public function rules($str, $opt_rules=[]){

    	$is_valid = TRUE;
        $is_valid = $this->check_validation_rules($str, $opt_rules) && $is_valid;
        $is_valid = (ctype_digit($str) || (bool) preg_match('/^[0-9]+$/', $str)) && $is_valid;

        return $is_valid;
    }

    public function greater_than ($str, $val){
    	$val = (int) $val;
        $str = (int) $str;

        if (! is_numeric( $str ) || ! is_numeric( $val ) )
        {
            return FALSE;
        }

        return ( $str > $val );
    }

    public function less_than ($str, $val){
    	$val = (int) $val;
        $str = (int) $str;

        if (! is_numeric( $str ) || ! is_numeric( $val ) )
        {
            return FALSE;
        }

        return ( $str < $val );
    }

    public function greater_than_equal ($str, $val){
    	$val = (int) $val;
        $str = (int) $str;

        if (! is_numeric( $str ) || ! is_numeric( $val ) )
        {
            return FALSE;
        }

        return ( $str >= $val );
    }

    public function less_than_equal ($str,  $val){
    	$val = (int) $val;
        $str = (int) $str;

        if (! is_numeric( $str ) || ! is_numeric( $val ) )
        {
            return FALSE;
        }

        return ( $str <= $val );
    }

    public function equal ($str, $val){
    	$val = (int) $val;
        $str = (int) $str;

        if (! is_numeric( $str ) || ! is_numeric( $val ) )
        {
            return FALSE;
        }

        return ( $str == $val );
    }
}