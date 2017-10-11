<?php
	class Home extends CI_Controller{

		function __construct()
		{
			parent::__construct();
			$this->load->helper("url");
			$this->load->library("session");
			
		}


		function index()
		{
			$pagedata['pagename']="index";
			$this->load->view("layout", $pagedata);

		}
		function signup()
		{
			
			$this->load->library("form_validation");
			$this->form_validation->set_rules("fullname", "Full Name", "required");
			$this->form_validation->set_rules("email", "Email", "required|valid_email");
			$this->form_validation->set_rules("pass", "Password", "required");
			$this->form_validation->set_rules("re_pass", "Re-Password", "required|matches[pass]");
			$this->form_validation->set_rules("city", "City", "required");
			$this->form_validation->set_rules("address", "Address", "required");
			$this->form_validation->set_rules("gender", "Gender", "required");
			$this->form_validation->set_rules("pincode", "Pincode", "required|numeric|exact_length[6]");
			$this->form_validation->set_rules("contact", "Contact", "required|numeric|exact_length[10]");
			if($this->form_validation->run()==false)
			{
				$pagedata['pagename']="signup";
				$this->load->view("layout", $pagedata);
				
			}
			else
			{
				$data['full_name']=$this->input->post("fullname");
				$data['username']=$this->input->post("email");
				$data['password']=md5($this->input->post("pass"));
				$data['city']=$this->input->post("city");
				$data['address']=$this->input->post("address");
				$data['gender']=$this->input->post("gender");
				$data['pincode']=$this->input->post("pincode");
				$data['contact']=$this->input->post("contact");
				$this->load->model("usermod");
				$this->usermod->save($data);
				redirect("home/login");
			}

		}
		function login()
		{
			
			if($this->input->post("submit"))
			{
				$u=$this->input->post("email");
				$p=$this->input->post("pass");
				$this->load->model("usermod");
				$obj=$this->usermod->auth($u);
				// mysql_num_rows($obj)
				if($obj->num_rows()==1)
				{
					$data=$obj->row_array();
					if($data['password']==md5($p))
					{
						if($data['user_type']==1)
						{
							if($data['status']==1)
							{

								$this->session->set_userdata("id", $data['id']);
								$this->session->set_userdata("name", $data['full_name']);
								$this->session->set_userdata("is_user_logged_in", true);
								redirect("user");

							}
							else
							{
								$this->session->set_flashdata("msg", "You are disable now");
								redirect("home/login");
							}
							
						}
						else
						{
							$this->session->set_userdata("id", $data['id']);
							$this->session->set_userdata("name", $data['full_name']);
							$this->session->set_userdata("is_admin_logged_in", true);
							redirect("admin");	
						}

					}
					else
					{
						$this->session->set_flashdata("msg", "This Password is incorrect");
						redirect("home/login");
					}
				}
				else
				{
					$this->session->set_flashdata("msg", "This Usename and Password is incorrect");
					redirect("home/login");
				}

			}
			else
			{
				
				$pagedata['pagename']="login";
				$this->load->view("layout", $pagedata);
			}


		}


		function about()
		{
			$pagedata['pagename']="about";
			$this->load->view("layout", $pagedata);
		}
		function setting()
		{
			$pagedata['pagename']="setting";
			$this->load->view("layout", $pagedata);
		}
}
?>