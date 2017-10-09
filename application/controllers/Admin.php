<?php

class Admin extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
		$this->load->library("session");
		$this->backdoor();
	}
	function backdoor()
	{
		if(! $this->session->userdata("is_admin_logged_in"))
			redirect("home");
	}
	function index()
	{
		$this->load->view("admin/dashboard");
	}
	function view_user()
	{
		$this->load->model("usermod");
		$obj=$this->usermod->get_all_user();
		$pagedata['user']=$obj;
		$this->load->view("admin/view_user", $pagedata);
	}
	function logout()
	{
		$this->session->sess_destroy();
		redirect("home");
	}
	function change($a, $b)
	{
		if($b==1)
		{
			$arr=array("status"=>0);
		}
		else
		{
			$arr=array("status"=>1);
		}
		$this->load->model("usermod");
		$this->usermod->update($a, $arr);
		redirect("admin/view_user");
	}
}
?>