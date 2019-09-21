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
	function select_all()
	{
		return $this->db->get("ci_user");
	}
	function select_by_username($u)
	{
		$this->db->where("username", $u);
		$result=$this->db->get("ci_user");
		return $result;
	}
	function select_by_id($id)
	{
		$this->db->where("id", $id);
		$result = $this->db->get("ci_user");
		return $result;
	}
	function update_by_id($id, $data)
	{
		$this->db->where("id", $id);
		$this->db->update("ci_user", $data);
	}


}




?>