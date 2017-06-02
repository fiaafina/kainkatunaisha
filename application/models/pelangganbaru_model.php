<?php
class pelangganbaru_model extends CI_Model{
    public function __construct(){
        $this->load->database();
    }
    
    public function getAll(){
        $hasil = $this->db->get('pelanggan');
        if($hasil->num_rows()>0){
            return $hasil->result();
        }
        else {
            return array();
        }
    }
    
    public function add($datapelanggan){
        $this->db->insert('pelanggan', $datapelanggan);
    }
    
    public function update($id, $datapelanggan){
        $this->db->where('id',$id)->update('pelanggan', $datapelanggan);
    }
    
    public function delete($id){
        $this->db->where('id', $id)->delete('pelanggan');
    }
    public function findDetail($id){
        $hasil = $this->db->where('id', $id)->limit(1)->get('pelanggan');
        if($hasil->num_rows()>0){
            return $hasil->row();
        }
        else {
            return array();
        }
    }
}
?>