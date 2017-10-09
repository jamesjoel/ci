<?php
class User extends CI_Controller{

	function __construct()
	{
		parent::__construct();
		$this->load->helper("url");
		$this->load->library("session");
		$this->backdoor();
	}
	function backdoor()
	{
		if(! $this->session->userdata("is_user_logged_in"))
		{
			redirect("home/login");
		}
	}
	function index()
	{
		$pagedata['pagename']='user/my_account';
		$this->load->view("layout", $pagedata);
	}
	function profile()
	{
		
		$id=$this->session->userdata("id");
		$this->load->model("usermod");
		$obj=$this->usermod->get_user($id);


		$pagedata['user']=$obj;
		$pagedata['pagename']='user/profile';
		$this->load->view("layout", $pagedata);
	}
	function change_profile()
	{
		
		if($this->input->post("submit"))
		{
			$id=$this->session->userdata("id");
			$data['full_name']=$this->input->post("full_name");
			$data['contact']=$this->input->post("contact");
			$data['gender']=$this->input->post("gender");
			$data['address']=$this->input->post("address");
			$data['city']=$this->input->post("city");
			$this->load->model("usermod");
			$this->usermod->update($id, $data);
			redirect("user/profile");
		}
		else
		{
			$id=$this->session->userdata("id");
			$this->load->model("usermod");
			$obj=$this->usermod->get_user($id);


			$pagedata['user']=$obj;
			$pagedata['pagename']='user/change_profile';
			$this->load->view("layout", $pagedata);
			
		}
	}
	function logout()
	{
		$this->session->sess_destroy();
		redirect("home/login");
	}

}
?>