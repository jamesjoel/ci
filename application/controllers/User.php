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
	function change_pass()
	{
		$id=$this->session->userdata("id");
		$this->load->model("usermod");
		if($this->input->post("submit"))
		{
			$a=$this->input->post("old_pass");
			$b=$this->input->post("new_pass");
			$c=$this->input->post("c_new_pass");
			$obj=$this->usermod->get_user($id);
			$data=$obj->row_array();
			if($data['password']==md5($a))
			{
				if($b==$c)
				{
					$arr['password']=md5($b);
					$this->usermod->update($id, $arr);
					$this->session->set_flashdata("msg", "Your Password has been changed !");
					redirect("user/profile");
				}
				else
				{
					$this->session->set_flashdata("msg", "The Confirm Password does not match");
					redirect('user/change_pass');
				}
			}
			else
			{
				$this->session->set_flashdata("msg", "The Current Password does not match");
				redirect('user/change_pass');
			}

		}
		else
		{

			$pagedata['pagename']='user/change_pass';
			$this->load->view("layout", $pagedata);
		}
	}

	function profile_pic()
	{
		$this->load->model("usermod");
		if($this->input->post("submit"))
		{
			$conf['allowed_types']="jpg|png|jpeg|gif";
			$conf['max_size']=2048;
			$conf['upload_path']="user_image/";
			$conf['encrypt_name']=true;
			$this->load->library("upload", $conf);
			if($this->upload->do_upload()==false)
			{
				$err=$this->upload->display_errors();
				$this->session->set_flashdata("msg", $err);
				redirect("user/profile_pic");
			}
			else
			{
				// print_r($this->upload->data());
				$id=$this->session->userdata("id");
				$name=$this->upload->data("file_name");
				$arr['image']=$name;
				$this->load->model("usermod");
				$this->usermod->update($id, $arr);
				redirect("user/profile");

			}


		}
		else
		{

			$id=$this->session->userdata("id");
			$obj=$this->usermod->get_user($id);


			$pagedata['user']=$obj;
			$pagedata['pagename']='user/profile_pic';
			$this->load->view("layout", $pagedata);
		}

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