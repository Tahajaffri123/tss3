<?php
class Home extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
		$this->load->view("about");
	}
	function about()
	{
		$pagedata["pagename"]="about";
		$pagedata['title']="About Page";
		$this->load->view("layout", $pagedata);
	}
	function contact()
	{
		
		$pagedata["pagename"]="contact";
		$pagedata['title']="Contact Page";
		$this->load->view("layout", $pagedata);
	}
	function index()
	{
		
		$pagedata["pagename"]="home";
		$pagedata['title']="Home Page";
		$this->load->view("layout", $pagedata);
	}
	function login()
	{
		$pagedata["pagename"]="login";
		$pagedata['title']="Login Page";
		$this->load->view("layout", $pagedata);
	}
	
	function signup()
	{
		
		$this->load->library("form_validation");
		$this->form_validation->set_rules("f_name", "Full Name", "required");
		$this->form_validation->set_rules("email", "Email/Username", "required|valid_email");
		$this->form_validation->set_rules("pass", "Password", "required");
		$this->form_validation->set_rules("re_pass", "Re-Password", "required|matches[pass]");
		$this->form_validation->set_rules("contact", "Contact", "required|numeric|exact_length[10]");
		$this->form_validation->set_rules("add", "Address", "required");
		$this->form_validation->set_rules("city", "City", "required");
		$this->form_validation->set_rules("gender", "Gender", "required");
		if($this->form_validation->run()==false)
		{
			$pagedata["pagename"]="signup";
			$pagedata['title']="Signup Page";
			$this->load->view("layout", $pagedata);
		}
		else
		{
			echo "yes";
		}
		
	}
	
}
