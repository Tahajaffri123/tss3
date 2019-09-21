<?php

class User extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
		$this->load->library("session");
		$this->load->model("usermod");
		$this->backdoor();
		$this->id = $this->session->userdata("id");

	}
	function index()
	{
		$pagedata['title']="Dashboard";
		$pagedata['pagename']="user/dashboard";
		$this->load->view("layout", $pagedata);

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
		$id = $this->session->userdata('id');
		$result = $this->usermod->select_by_id($id);

		$pagedata['title']="My Profile";
		$pagedata['pagename']="user/profile";
		$pagedata['data']=$result->row_array();

		$this->load->view("layout", $pagedata);		
	}
	function edit_profile()
	{
		$id = $this->session->userdata('id');
		$result = $this->usermod->select_by_id($id);
		$pagedata['title']="Edit Profile";
		$pagedata['pagename']="user/edit_profile";
		$pagedata['result']=$result;
		$this->load->view("layout", $pagedata);

	}

	function update()
	{
		// print_r($this->input->post());
		// die;
		$id = $this->session->userdata('id');
		$data = $this->input->post();
		$data['address']=$data['add'];
		unset($data['add']);
		$this->usermod->update_by_id($id, $data);
		redirect("user/profile");
	}
	function change_pass()
	{
		$pagedata['title']="Change Password";
		$pagedata['pagename']="user/change_pass";
		$this->load->view("layout", $pagedata);

	}
	function update_pass()
	{
		$a=$this->input->post("c_pass");
		$b=$this->input->post("n_pass");
		$c=$this->input->post("cn_pass");
		$data=$this->usermod->select_by_id($this->id)->row_array();
		if ($data["password"]==sha1("$a"))
		{
			if($b==$c)
			{
				$arr['password']=sha1($b);
				$this->usermod->update_by_id($this->id, $arr);
				redirect("user/profile");
			}
			else
			{
				$this->session->set_flashdata("msg2","curernt password and new password doesn't matched");
				redirect("user/change_pass");
			}
		}
		else
		{
			$this->session->set_flashdata("msg1","current password not correct");
			redirect("user/change_pass");
		}
	}
	function image_upload()
	{

		$config["upload_path"]="images/";
		$config["allowed_types"]="png|jpg|jpeg|gif";
		$config["max_size"]=1024;
		
		$config['encrypt_name']=true;


		$this->load->library("upload", $config);
		if($this->upload->do_upload()==true)
		{
			// print_r($this->upload->data());
			// die;
			$name=$this->upload->data("file_name");
			$arr['image']=$name;
			$this->usermod->update_by_id($this->id, $arr);
			redirect("user/profile");
		}
		else
			{
			$a = $this->upload->display_errors();
			$this->session->set_flashdata("msg", $a);
			redirect("user/profile");
			}
	}
}



?>