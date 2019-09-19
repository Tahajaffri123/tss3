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
		$u = $this->input->post("email");
		$p = $this->input->post("pass");
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
	function users()
	{
		$this->backdoor();
		$this->load->model("usermod");
		$result = $this->usermod->select_all();
		$this->load->view("admin/users", array("info"=>$result));	
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
	function change_status($a, $b)
	{
		if($b==0)
			$arr['status']=1;
		if($b==1)
			$arr['status']=0;
		$this->load->model("usermod");
		$this->usermod->update_by_id($a, $arr);
		redirect("admin/users");
	}
}




?>