<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CPFormUtil {

	public function load($class_form=''){
		require_once APPPATH."forms/".$class_form.'.php';
		return new $class_form();
	}

}