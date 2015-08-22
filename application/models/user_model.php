<?php
  
class User_model extends MY_Model { 
    public $primary_key = 'id';
    public $after_validation = array('check_something');
    public $columns = array(
        'user_name' => '',
        'encrypted_password' => '',
        'name' => '',
        'dob' => '',
        'status' => Status::INACTIVE,
        'lastname' => '',
        'auth_token' => '',
        'reset_password_token' => ''
    );
    public $validates = array(
        //no anda bien esto chequear
        array( 
            'field' => 'user_name', 
            'label' => 'Nombre de usuario',
            'rules' => 'required'
        )
    );
    public $timestamps = TRUE;
    
    public function check_something(){
        var_dump($this);
    }
    
}
abstract class Status
{
        const INACTIVE = 0;
        const ACTIVE = 1;
        const ETC=2;
        // etc.
}
