<?php
class Home extends CI_Controller{

	function about()
	{
		$this->load->view("about");
	}
	function contact()
	{
		$this->load->view("contact");
	}


}
?>