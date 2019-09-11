<?php
class Home extends CI_Controller{

	function about()
	{
		$this->load->helper("url");
		$this->load->view("about");
	}
	function contact()
	{
		$this->load->helper("url");
		$this->load->view("contact");
	}
	function index()
	{
		$arr['demo']="TSS";
		$this->load->helper("url");
		$this->load->view("home", $arr);
	}
	function help()
	{
		$a = "rohit";
		$b = "indore";

		$arr=array("name"=>$a, "city"=>$b);
		$arr["age"]=25;


		$this->load->helper("url");	
		$this->load->view("help", $arr);
	}


}
?>