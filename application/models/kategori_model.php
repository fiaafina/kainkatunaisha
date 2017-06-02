<?php
class kategori_model extends CI_Model{
    public function __construct(){
        $this->load->database();
    }
    
    public function getAll(){
        $hasil = $this->db->get('kategori');
        if($hasil->num_rows()>0){
            return $hasil->result();
        }
        else {
            return array();
        }
    }
    
    public function add($data){
        $this->db->insert('kategori', $data);
    }
    
    public function update($id, $datapelanggan){
        $this->db->where('id',$id)->update('kategori', $data);
    }
    
    public function delete($id){
        $this->db->where('id', $id)->delete('kategori');
    }
    public function findDetail($id){
        $hasil = $this->db->where('id', $id)->limit(1)->get('kategori');
        if($hasil->num_rows()>0){
            return $hasil->row();
        }
        else {
            return array();
        }
    }
}
?>