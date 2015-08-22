<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {
    
        public function __construct()
        {
            parent::__construct();
            $this->load->helper('url');     
        }   
	
	public function index()
	{
            $this->load->model('user_model');
            $users = $this->user_model->limit(5)->offset(0)->all();
            
            $u = $this->user_model->find(2);
            var_dump($users);var_dump($u->user_name);
           //this is the homepage
            
           /* 
            $user = $this->user_model->new_model(array(
            'user_name' => 'Pepe',
            'encrypted_password' => '123123123',
            'name' => 'Prueba',
            'dob' => '12-12-2015',
            'status' => Status::INACTIVE,
            'lastname' => 'Prueba',
            'auth_token' => '123123123123123123',
            'reset_password_token' => ''
            ));
            if($user->save()){
                echo "Guarda";
            }else{
                echo "No guarda";
            }*/
            $this->load->view('welcome_message');
	}
}
