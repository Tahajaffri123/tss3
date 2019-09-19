<?php
class Usermod extends CI_Model{

	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	function save($data)
	{
		// INSERT query here
		$this->db->insert("user_ci", $data);
		// "db" is a Query Builder Class
	}
	function delete()
	{

	}
	function select_all()
	{
		return $this->db->get("user_ci");
	}
	function update_by_id($id, $data)
	{
		$this->db->where("id", $id);
		$this->db->update("user_ci", $data);
	}
	function select_by_username($u)
	{
		// SELECT * FROM user_id WHERE username='$u'
		$this->db->where("username", $u);
		$result=$this->db->get("user_ci");
		return $result;
	}
	function select_by_id($id)
	{
		$this->db->where("id", $id);
		$result = $this->db->get("user_ci");
		return $result;
	}



	function select_by_age()
	{

	}

}




?>