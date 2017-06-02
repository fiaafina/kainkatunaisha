<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller {
    public function __construct(){
        parent::__construct();
        $this->load->model('kategori_model');
        $this->load->helper('text');
        $this->load->helper('url_helper');
        if($this->session->has_userdata('username')){
            if ($_SESSION['status']=='Pelanggan') {
            }else if ($_SESSION['status']='Admin'){
                redirect('admin');
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
        $this->load->view('pelanggan_view', $data);
	}
}