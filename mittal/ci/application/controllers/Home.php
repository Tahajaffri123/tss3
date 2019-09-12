<?php
class Home extends CI_Controller{
	function homepage()
	{
		$this->load->view("homepage");
	}
	function about()
	{
		$this->load->view("about");
	}
	function contact()
	{
		$this->load->view("contact");
	} 
	function help()
	{
		$this->load->view("help");
	}
}
?>