<?php
class User extends CI_Controller{
      function __construct()
      {
            parent::__construct();
            $this->load->helper("url");
            $this->load->library("session");
            $this->load->model("usermod");
            $this->backdoor();
      }
      function index()
      {
            $pagedata['title']="Dashboard";
            $pagedata['pagename']="user/dashboard";
            $this->load->view("layout", $pagedata);
      }
      function backdoor()
      {
            if(! $this->session->userdata("is_user_logged_in"))
            {
                  redirect("home/login");
            }
      }
      function logout()
      {
            $this->session->sess_destroy();
            redirect("home/login");
      }
      function profile()
      {
            $id = $this->session->userdata('id');
            $result = $this->usermod->select_by_id($id);
            $pagedata['title']="My Profile";
            $pagedata['pagename']="user/profile";
            $pagedata['data']=$result->row_array();
            $this->load->view("layout", $pagedata);         
      }
}
?>