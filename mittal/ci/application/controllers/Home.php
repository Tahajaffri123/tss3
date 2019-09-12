<?php
class Home extends CI_Controller{
	function index()
	{
		$arr['demo'] = "TSS";
		$this->load->helper("url");
		$this->load->view("homepage", $arr);
	}
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
	function help()
	{
		$a = "Rohit";
		$b = "Indore";
		$arr = array("name" => $a ,"city" => $b);
		$arr['age'] = 25;
		$this->load->helper("url");
		$this->load->view("help", $arr);
	}
}
?>