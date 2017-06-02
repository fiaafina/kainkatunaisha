<?php
class userbaru_model extends CI_Model{
    public function __construct(){
        $this->load->database();
    }
    
    public function getAll(){
        $hasil = $this->db->get('user');
        if($hasil->num_rows()>0){
            return $hasil->result();
        }
        else {
            return array();
        }
    }
    
    public function add($datapelanggan){
        $this->db->insert('user', $datapelanggan);
    }
    
    public function update($id, $datapelanggan){
        $this->db->where('id_user',$id)->update('user', $datapelanggan);
    }
    
    public function delete($id){
        $this->db->where('id_user', $id)->delete('user');
    }
    public function findDetail($id){
        $hasil = $this->db->where('id_user', $id)->limit(1)->get('user');
        if($hasil->num_rows()>0){
            return $hasil->row();
        }
        else {
            return array();
        }
    }
}
?>