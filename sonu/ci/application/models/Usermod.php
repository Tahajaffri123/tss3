<?php
class Usermod extends CI_Model{

	function __construct()
	{
		parent::__construct();
		$this->load->database();

	}

	function save($data)
	{
		$this->db->insert("user_ci", $data);
	}

	function select_by_username($u)
	{

		$this->db->where("username", $u);
		$result=$this->db->get("user_ci");
		return $result;
	}

	function select_by_id($id)
	{
	   $this->where("id", $id);
	   $result=$this->get("user_ci");
	   return $result;	
	}
}

?>