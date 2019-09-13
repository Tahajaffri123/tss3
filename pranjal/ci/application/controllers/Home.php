<?php
	class Home extends CI_Controller{
		function index()
		{
			$arr['demo']="TSS";
			$this->load->helper("url");
			$this->load->view("home", $arr);
		}
		function about()
		{
			//page load per views fun. me kuch bhi type kar skte h
			$this->load->helper("url");
			$this->load->view("about");
		}		
		function contact()
		{
			$this->load->helper("url");
			$this->load->view("contact");
		}
		function help()
		{
			$a = "pranjal";
			$b = "khargone";

			$arr = array("name"=>$a, "city"=>$b );
			$arr["age"]=25;
			
			$this->load->helper("url");
			$this->load->view("help", $arr);
		}
	}
?>