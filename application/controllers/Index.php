<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Index extends CI_Controller {
    
        public function __construct()
        {
            parent::__construct();
            $this->load->helper('url');     
        }   
	//this is the homepage
	public function index()
	{
            $this->load->model('user_model');
            /*$users = $this->user_model->limit(5)->offset(0)->all();
            $u = $this->user_model->find(2);*/
            $user = $this->user_model->new_model(array(
            'user_name' => 'Prueba2',
            'encrypted_password' => '123123123',
            'name' => 'ss',
            'dob' => '2015-12-12',
            'status' => Status::INACTIVE,
            'lastname' => 'Prueba',
            'auth_token' => '123123123123123123',
            'reset_password_token' => ''
            ));
            if($user->save()){
                echo "Guarda";
            }else{
                echo "No guarda";
                var_dump($user->get_validation_errors());
            }
            //$this->load->view('welcome_message');
	}
}
