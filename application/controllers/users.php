<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function index()
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->load->view('users/index');
		
	}
	public function Login()
	{
			$this->load->helper(array('form', 'url'));
			$this->load->library('form_validation');
			$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
			$this->form_validation->set_rules('username', 'Username', 'required');
			$this->form_validation->set_rules('password', 'Password', 'required');
		
		
		
		
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('users/index');
		}
		else
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
				redirect ('/users/userlist');
			}
			
			echo $result;
			exit();
		}
		}
		
	}
	
	public function userlist()
	{	
		$this->load->database(); // load database
		$this->load->model('reqconfess_model'); // load model
		$this->data['posts'] = $this->reqconfess_model->getPosts(); 

		
		$this->load->view('welcome_message_2', $this->data);
	}
	
	public function register()
	{
		$this->load->helper(array('form', 'url'));
		
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->load->view('users/register');
	}
	
	public function register2()
	{	
		
		$this->load->helper(array('form', 'url'));
		
		$this->load->library('form_validation');
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->form_validation->set_rules('username', 'Username', 'trim|required|min_length[3]|max_length[20]|is_unique[users.username]');
		$this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]|max_length[20]|matches[cpassword]');
		$this->form_validation->set_rules('cpassword', 'Confirm Password', 'trim|required|min_length[3]|max_length[20]');
		$this->form_validation->set_rules('fname', 'First Name', 'trim|required|min_length[3]|max_length[20]');
		$this->form_validation->set_rules('lname', 'Last Name', 'trim|required|min_length[3]|max_length[20]');
				
		if ($this->form_validation->run() == FALSE)
		{
			$this->load->view('users/register');
		}
		else
		{
			$this->load->model('Users_model');
			
			if($this->input->post()) {
				$data = $this->input->post();
				$result = $this->Users_model->add($data);
				redirect('users/');
		}
		}
		
	}
	
	public function reqcon(){
		$this->load->model('reqconfess_model');
			
			if($this->input->post()) {
				$data = $this->input->post();
				$result = $this->reqconfess_model->req($data);
				redirect('users/userlist');
		}
	}
	
}
