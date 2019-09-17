<?php
class Home extends CI_Controller{
    function __construct()
    {
    	parent:: __construct();
		$this->load->helper("url");
    }
	function index()
	{
		$pagedata['pagename'] = "homepage";
		$pagedata['title'] = "home page";
		$this->load->view("layout", $pagedata);
	}
	function about()
	{
		$pagedata['pagename'] = "about";
		$pagedata['title'] = "about page";
		$this->load->view("layout", $pagedata);
	}
	function contact()
	{
		$pagedata['pagename'] = "contact";
		$pagedata['title'] = "contact page";
        $this->load->view("layout", $pagedata);
	} 
	function help()
	{
		$pagedata['pagename'] = "help";
		$pagedata['title'] = "help page";
		$this->load->view("layout", $pagedata);
	}
	function login()
	{
		$pagedata['pagename']="login";
		$pagedata['title']="Login Page";
		$this->load->view("layout", $pagedata);
	}
	function signup()
	{
		$this->load->library("form_validation");
		$this->form_validation->set_rules("full_name","Full Name","required");
		$this->form_validation->set_rules("username","Email/Username","required|valid_email");
		$this->form_validation->set_rules("password","Password","required");
		$this->form_validation->set_rules("re-pass","Re-Password","required|matches[password]");
		$this->form_validation->set_rules("contact","Contact","required|numeric|exact_length[10]");
		$this->form_validation->set_rules("add","Address","required");
		$this->form_validation->set_rules("city","City","required");
		$this->form_validation->set_rules("gender","Gender","required");
		if($this->form_validation->run()==false)
		{
		$pagedata['pagename'] = "signup";
		$pagedata['title'] = "sign-up page";
		$this->load->view("layout", $pagedata);
	   }
	   else
	   {
	   	// print_r($this->input->post())
	   	// ;die;
	   	$data = $this->input->post();
	   	$data['address'] = $data['add'];
	   	$data['password'] = $data['password'];
	   	unset($data['add']);
	   	unset($data['re-pass']);
        $this->load->model("usermod");
        $this->usermod->save($data);
        redirect("home/login");
	   }
	}
}
?>