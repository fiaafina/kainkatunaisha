<?php
class katalog_model extends CI_Model{
    public function __construct(){
        $this->load->database();
    }
    
    public function getAll(){
        $hasil = $this->db->get('kain');
        if($hasil->num_rows()>0){
            return $hasil->result();
        }
        else {
            return array();
        }
    }
    
    public function add($data){
        $this->db->insert('kain', $data);
    }
    
    public function update($id, $datapelanggan){
        $this->db->where('idk',$id)->update('kain', $datapelanggan);
    }
    
    public function delete($id){
        $this->db->where('idk',$id)->delete('kain');
    }
    public function findDetail($id){
        $hasil = $this->db->where('idk', $id)->limit(1)->get('kain');
        if($hasil->num_rows()>0){
            return $hasil->row();
        }
        else {
            return array();
        }
    }
}
?>