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
	function update_pass()
	{
		// print_r($this->input->post());
		$a = $this->input->post("c_pass");
		$b = $this->input->post("n_pass");
		$c = $this->input->post("cn_pass");

		$data = $this->usermod->select_by_id($this->id)->row_array();
		if($data['password']==sha1($a))
		{
			if($b == $c)
			{
				$arr['password']=sha1($b);
				$this->usermod->update_by_id($this->id, $arr);
				redirect("user/profile");
			}
			else
			{
				$this->session->set_flashdata("msg2", "New Password and Confirm Password not Correct");
				redirect("user/change_pass");		
			}
		}
		else
		{
			$this->session->set_flashdata("msg1", "Current Password not Correct");
			redirect("user/change_pass");
		}

	}
	function change_pass()
	{
		$pagedata['title']="Change Password";
		$pagedata['pagename']="user/change_pass";
		$this->load->view("layout", $pagedata);

	}
	function edit()
	{
		$id = $this->session->userdata('id');
		$result = $this->usermod->select_by_id($id);
		$pagedata['title']="Edit Profile";
		$pagedata['pagename']="user/edit";
		$pagedata['result']=$result;
		$this->load->view("layout", $pagedata);

	}

	function update()
	{
		$id = $this->session->userdata('id');
		$data = $this->input->post();
		$data['address']=$data['add'];
		unset($data['add']);
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