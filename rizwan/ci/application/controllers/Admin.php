<?php

class Admin extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
		$this->load->library("session");
	}
	function index()
	{
		$this->load->view("admin/login");
	}
	function auth()
	{
		$u = $this->input->post("username");
		$p = $this->input->post("password");
		$this->load->model('adminmod');
		$result = $this->adminmod->select_by_username($u);
		// echo $result->num_rows();die;
		if($result->num_rows()==1)
		{
			$data = $result->row_array();
			if($data['password']==$p)
			{
				$this->session->set_userdata("is_admin_logged_in", true);
				redirect('admin/dash');
			}
			else
			{
				$this->session->set_flashdata('msg', 'Password Incorrect !');
				redirect('admin');		
			}
		}
		else
		{
			$this->session->set_flashdata('msg', 'Username and Password Incorrect !');
			redirect('admin');
		}
	}
	function backdoor()
	{
		if(! $this->session->userdata('is_admin_logged_in'))
		{
			redirect('home/login');
		}
	}

	function dash()
	{
		$this->backdoor();
		$this->load->view("admin/dash");
	}
	function logout()
	{
		$this->session->sess_destroy();
		redirect("home/login");
	}


}




?>