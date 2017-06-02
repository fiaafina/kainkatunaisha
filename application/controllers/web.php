<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Web extends CI_Controller {
    
    function __construct(){
        parent::__construct();
        $this->load->model('pelangganbaru_model');
        $this->load->model('userbaru_model');
        $this->load->model('kategori_model');
        $this->load->helper('text');
        $this->load->helper('url_helper');
    }

	public function index(){
        $data['kategori'] = $this->kategori_model->getAll();
		$this->load->view('home', $data);
	}
	public function detail($id){
        $data['kategori'] = $this->kategori_model->findDetail($id);
		$this->load->view('detail_view', $data);
	}
    
    public function login(){
        $username = $this->input->post('username');
        $password = $this->input->post('pass');
        $isLogin = $this->mymodel->login_authenticate($username, $password);
        
        $auth = $this->mymodel->auth_user($username);
        
        if($isLogin==true && $auth[0]['authentication']<3){
            //$this->home();
            $data = $this->mymodel->getuser($username);
            
            foreach($data as $user);
            
            $datauser = array('username' => $user['username'],
                              'status' => $user['status']);
            $this->session->set_userdata($datauser);
            //echo $this->session->userdata('username');
            if($this->session->userdata('status') == "Admin"){
                redirect('admin');
            }else if($this->session->userdata('status') == "Pelanggan"){
                redirect('pelanggan');
            }
        }
        else{
            if($auth[0]['authentication']<3){
                $update = $this->mymodel->wrong_password($username, $auth[0]['authentication']+1);
                $data['err_message'] = "Maaf Anda Gagal Login".($auth[0]['authentication']+1);
                $this->load->view('web_view', $data);
            }
            else {
                $data['err_message'] = "Anda Telah Gagal Login Sebanyak 3 kali. Mohon Maaf Akun Anda Diblokir";
                $this->load->view('web_view', $data);
            }
        }
    }
    
    public function home(){
        $this->load->view('home');
    }
    
    public function web_view(){
        $data['err_message']='';
        $this->load->view('web_view', $data);
    }
    public function userbaru_view(){
        $this->form_validation->set_rules('name', 'Nama', 'required');
        $this->form_validation->set_rules('alamat', 'Alamat', 'required');
        $this->form_validation->set_rules('email', 'Email', 'required');
        $this->form_validation->set_rules('hp', 'Nomor HP', 'required');
        $this->form_validation->set_rules('username', 'Nama', 'required');
        $this->form_validation->set_rules('password', 'Password', 'required');
        $this->form_validation->set_rules('konfirmasi', 'Konfirmasi Password', 'required');
        
        if ($this->form_validation->run()==FALSE){
            $data['err_message']='';
            $this->load->view('userbaru_view', $data);
        }
        else {
            $datapelanggan = array(
                'usernames' => set_value('username'),
                'nama'      => set_value('name'),
                'alamat'    => set_value('alamat'),
                'email'     => set_value('email'),
                'hp'        => set_value('hp')
            );
            
            $datauser = array(
                'username'  => set_value('username'),
                'pass'      => sha1(set_value('password')),
                'status'    => 'Pelanggan'
            );
            $this->userbaru_model->add($datauser);
            $this->pelangganbaru_model->add($datapelanggan);
            redirect('web');
        }
    }
    public function logout(){
        $this->session->sess_destroy();
        redirect('');
    }
    
}