<?php
class Usermod extends CI_Model{
	function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	function save($data)
	{
		$this->db->insert("user_tbl", $data);
	}
	function auth($u)
	{
		$this->db->where("username", $u);
		$obj=$this->db->get("user_tbl");
		return $obj;
		// SELECT * FROM user_tbl WHERE username='$u'
	}
	function get_user($id)
	{
		$this->db->where('id', $id);
		$obj=$this->db->get("user_tbl");
		return $obj;
	}
	function get_all_user()
	{
		$this->db->where("user_type", 1);
		$obj=$this->db->get("user_tbl");
		return $obj;	
	}
	function update($id, $arr)
	{
		$this->db->where("id", $id);
		$this->db->update("user_tbl", $arr);
	}
}
?>