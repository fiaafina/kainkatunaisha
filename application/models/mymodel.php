<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mymodel extends CI_Model {
	public function login_authenticate($username,$password){
        $this->db->select('*');
        $this->db->where('username', $username);
        $this->db->where('pass', $password);
        $this->db->from('user');
        
        $query=$this->db->get();
        
        if($query->num_rows()==1){
            return true;
        }
        else{
            return false;
        }
    }
    
    public function auth_user($username){
        $this->db->select('authentication');
        $this->db->where('username', $username);
        $this->db->from('user');
        $query = $this->db->get();
        return $query->result_array();
    }
    
    public function getuser($username){
        $data = $this->db->get_where('user',array('username' => $username));
        return $data->result_array();
    }
    
    public function wrong_password($username, $value){
        $this->db->set('authentication', $value);
        $this->db->where('username', $username);
        $this->db->update('user');
    }
}