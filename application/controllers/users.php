<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function index()
	{
		$this->load->view('users/index');
	}
	public function Login()
	{
		if ($this->input->post())
		{
			$this->load->model('Users_model');	
			
			$data = $this->input->post();

			$this->Users_model->login($data['username'], $data ['password']);
			
			$result=$this->Users_model->login($data['username'], $data ['password']);
			
			if(!$result) {
				redirect('/users/');
			}
			else {
				redirect ('/users/userlist/');
			}
			
			echo $result;
			exit();
		}
		
		
	}
	
	public function userlist()
	{
		$this->load->view('welcome_message');
	}
}
