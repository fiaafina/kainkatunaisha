<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('kategori_model');
        $this->load->model('katalog_model');
        $this->load->helper('text');
        $this->load->helper('url_helper');
        if($this->session->has_userdata('username')){
            if ($_SESSION['status']=='Admin') {
            }else if ($_SESSION['status']='Pelanggan'){
                redirect('pelanggan');
            }else {
                redirect(base_url().'index.php/web/web_view');
            }
        }else{
            redirect(base_url().'index.php/web/web_view');
        }
    }
    public function index()
	{
		$data['err_message']='';  
        $this->load->view('admin_view', $data);
	}
    
    public function editkatalog(){
        $data['katalog']=$this->katalog_model->getAll();
        $data['err_message']='aku eror';
        $this->load->view('editkatalog', $data);
    }
    public function upload_view(){
        $this->load->library('form_validation');
  
        $this->form_validation->set_rules('nomorkain', 'Nomor Kain', 'required');
        $this->form_validation->set_rules('namakain', 'Nama Kain', 'required');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required');
        $this->form_validation->set_rules('gambar', 'Gambar');

    if ($this->form_validation->run() == FALSE){
        $data['err_message']="";
        $this->load->view('upload_view',$data);
            }
    else {
        $target_dir = "assets/img/";
        $target_file = $target_dir . basename($_FILES["gambar"]["name"]);
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
   // Check if image file is a actual image or fake image
        $check = getimagesize($_FILES["gambar"]["tmp_name"]);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } 
            else {
            echo "File is not an image.";
            $uploadOk = 0;
            }
   // Check if file already exists
        if (file_exists($target_file)) {
            echo "Sorry, file already exists.";
                $uploadOk = 0;
            }
   // Check file size
        if ($_FILES["gambar"]["size"] > 500000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
            }
   // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $uploadOk = 0;
            }
   // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
                // if everything is ok, try to upload file
        } 
        else {
            if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
                echo "The file ". basename( $_FILES["gambar"]["name"]). " has been uploaded.";
                } 
            else {
                echo "Sorry, there was an error uploading your file.";
            }
        }
        if($uploadOk== 1){
        $data = array(
            'nomor'         => set_value('nomorkain'),
            'namakain'      => set_value('namakain'),
            'jumlah'        => set_value('jumlah'),
            'harga'         => set_value('harga'),
            'gambar'        => $target_file
        );
        $res=$this->katalog_model->add($data);
        redirect(base_url().'index.php/admin/editkatalog');
            }
        }
    }
    
    public function update($id){
        $this->form_validation->set_rules('nomorkain', 'Nomor Kain', 'required');
        $this->form_validation->set_rules('namakain', 'Nama Kain', 'required');
        $this->form_validation->set_rules('jumlah', 'Jumlah', 'required');
        $this->form_validation->set_rules('harga', 'Harga', 'required');
        $this->form_validation->set_rules('gambar', 'Keterangan');

        if ($this->form_validation->run() == FALSE){
            $data['katalog'] = $this->katalog_model->findDetail($id);
            $this->load->view('update_view',$data);
            }
        else {
   //$url = $this->do_upload();
        if($_FILES["gambar"]["error"] == 4){
            $data = array(
                'nomor'         => set_value('nomorkain'),
                'namakain'      => set_value('namakain'),
                'jumlah'        => set_value('jumlah'),
                'harga'         => set_value('harga'),
                'keterangan'    => $target_file
            );
        }
        else{
            $target_dir = "assets/img/";
            $target_file = $target_dir . basename($_FILES["gambar"]["name"]);
            $uploadOk = 1;
            $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    // Check if image file is a actual image or fake image
            $check = getimagesize($_FILES["gambar"]["tmp_name"]);
            if($check !== false) {
                echo "File is an image - " . $check["mime"] . ".";
                $uploadOk = 1;
            } 
            else {
                echo "File is not an image.";
                $uploadOk = 0;
            }
    // Check if file already exists
            if (file_exists($target_file)) {
                echo "Sorry, file already exists.";
                $uploadOk = 0;
                }
    // Check file size
            if ($_FILES["gambar"]["size"] > 500000) {
                echo "Sorry, your file is too large.";
                $uploadOk = 0;
                }
    // Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
                    && $imageFileType != "gif" ) {
                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $uploadOk = 0;
                }
    // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
                }
                else {
            if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
                echo "The file ". basename( $_FILES["gambar"]["name"]). " has been uploaded.";
                } 
                else {
                    echo "Sorry, there was an error uploading your file.";
                }
            }
            $data = array(
                'nomor'         => set_value('nomorkain'),
                'namakain'      => set_value('namakain'),
                'jumlah'        => set_value('jumlah'),
                'harga'         => set_value('harga'),
                'keterangan'    => $target_file
    );
   }
   $this->katalog_model->update($id,$data);
   redirect(base_url().'index.php/admin/editkatalog');
  }
 }
    public function delete($id){
        $this->katalog_model->delete($id);
        redirect(base_url().'index.php/admin/editkatalog');
    } 
}
    