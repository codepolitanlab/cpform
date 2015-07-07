<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once APPPATH.'libraries/cpform/CPForm.php';

class Contact extends CPForm {

    public function __construct()
    {

        $this->username = [
                'fields' => 'CharField',
                'initial'=>'ridwanbejo', 
                'config' => [
                    'placeholder' => 'isi dengan name anda...',
                    'id' => 'name'
                ],
            ];

        $this->first_name = [
                'fields' => 'CharField',
                'initial'=>'', 
                'config' => [
                    'placeholder' => 'isi dengan first name anda...',
                    'id' => 'first_name'
                ],
            ];    

        $this->last_name = [
                'fields' => 'CharField',
                'initial'=>'', 
                'config' => [
                    'placeholder' => 'isi dengan last name anda...',
                    'id' => 'last_name'
                ],
            ];    

        $this->email = [
                'fields' => 'EmailField',
                'initial'=>'', 
                'config' => [
                    'placeholder' => 'isi dengan e-mail anda...',
                    'id' => 'email'
                ],
            ];    
            
        $this->website = [
                'fields' => 'URLField',
                'initial'=>'', 
                'config' => [
                    'placeholder' => 'isi dengan website anda...',
                    'id' => 'website'
                ],
            ];       
    }

}