<?php
class User extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
       		$this->load->model("usermod");
		$this->load->library("session");
		$this->backdoor();
		$this->id = $this->session->userdata("id");



	}
	function index()
	{
		$pagedata['pagename'] = "user/dashbord";
		$pagedata['title'] = "Dashbord";
		$this->load->view("layout",$pagedata);
	}
	function edit()
	{
		$id = $this->session->userdata('id');
		$result = $this->usermod->select_by_id($id);
       $pagedata['pagename'] = "user/edit";
       $pagedata['title'] = "Edit _Page";
       $pagedata['result'] = $result;
       $this->load->view("layout",$pagedata);
	}
	function update()
	{
		$id = $this->session->userdata('id');
		$data = $this->input->post();
		// $data['address'] = $data['add'];
		// unset($data['add']);
		$this->usermod->update_by_id($id, $data);
		redirect("user/profile");
	}

	function backdoor()
	{
		if(! $this->session->userdata("is_user_logged_in"))
		{
			redirect("home/login");
		}
	}
	function logout()
	{
		$this->session->sess_destroy();
		redirect("home/login");
	} 
	function profile()
	{
		// print_r($this->session->all_userdata());
		// die;
		$id = $this->session->userdata('id');
		$result = $this->usermod->select_by_id($id);
		$pagedata['pagename'] = "user/my_profile";
		$pagedata['title'] = "my_profile";
		$pagedata['data'] = $result->row_array();
		$this->load->view("layout",$pagedata);
	}
}
?>