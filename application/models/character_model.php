<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Character_model extends MY_Model { 
    public $belongs_to = array('user');
    public $primary_key = 'id';
    public $columns = array(
        'user_id' => '',
        'class_id' => '1',
        'name' => '',
    );


    
}

