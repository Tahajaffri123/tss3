<?php
class Usermod extends CI_Model{

	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	function save($data)
	{
		$this->db->insert("ci_user", $data);
	}
	function delete()
	{

	}
	function update()
	{

	}
	function select_by_username($u)
	{
		$this->db->where("username", $u);
		$result=$this->db->get("ci_user");
		return $result;
	}

}




?>