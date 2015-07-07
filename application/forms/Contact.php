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
                'rules' => [
                    'min_length' => 5,
                    'max_length' => 10,
                ]
            ];

        $this->first_name = [
                'fields' => 'CharField',
                'initial'=>'', 
                'config' => [
                    'placeholder' => 'isi dengan first name anda...',
                    'id' => 'first_name'
                ],
                'rules' => [
                    'min_length' => 5,
                    'max_length' => 10,
                ]
            ];    

        $this->last_name = [
                'fields' => 'CharField',
                'initial'=>'', 
                'config' => [
                    'placeholder' => 'isi dengan last name anda...',
                    'id' => 'last_name'
                ],
                'rules' => [
                    'min_length' => 5,
                    'max_length' => 10,
                ]
            ];    

        
        $this->email = [
                'fields' => 'EmailField',
                'initial'=>'', 
                'config' => [
                    'placeholder' => 'isi dengan e-mail anda...',
                    'id' => 'email'
                ],
                'rules' => [
                ]
            ];    
            
        $this->website = [
                'fields' => 'URLField',
                'initial'=>'', 
                'config' => [
                    'placeholder' => 'isi dengan website anda...',
                    'id' => 'website'
                ],
                'rules' => [
                ]
            ];     
        

    }

}