<?php
class Login_model extends CI_Model{
 function __construct(){
	 $this->load->database();
 }
 
 function ambil_data($data){ 
	 $user = $this->db->get_where('users',$data); 
	 return $user->num_rows();
 }

 // public function _rules() 
 //    {
	// $this->form_validation->set_rules('username', 'username', 'trim|required');
	// $this->form_validation->set_rules('password', 'password', 'trim|required');
	// $this->form_validation->set_rules('level', 'level', 'trim|required');
	// $this->form_validation->set_rules('kon_id', 'kon id', 'trim|required');

	// $this->form_validation->set_rules('id', 'id', 'trim');
	// $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
 //    }

 function cek($username, $password){
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		return $this->db->get('users');
	}

	function get_all()
    {
        $this->db->order_by($this->id, $this->order);
        return $this->db->get($this->table)->result();
    }

}