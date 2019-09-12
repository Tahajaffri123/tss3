<?php
	class Home extends CI_Controller{
		function homepage()
		{
			$this->load->views("homepage");
		}
		function about()
		{
			//page load per views fun. me kuch bhi type kar skte h
			$this->load->views("about");
		}		
		function contact()
		{
			$this->load->views("contact");
		}
		function help()
		{
			$this->load->views("help");
		}
	}
?>