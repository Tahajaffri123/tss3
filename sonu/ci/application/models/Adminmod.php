<?php
class Adminmod extends CI_model{

	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	function select_by_username($u)
	{
		$this->db->where("username", $u);
		return $this->db->get("admin_ci");
	}

}


?>