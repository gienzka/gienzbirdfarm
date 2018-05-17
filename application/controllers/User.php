<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    function __construct(){
		parent::__construct();		
        $this->load->helper(array('form'));
        $this->load->model('CrudModel');
        $this->load->helper("file");
 	} 
    
    function updateprofilephoto(){
        $email = $this->input->post('email');
        $photo = 'assets/images/userprofile/' . basename($_FILES["filetoupload"]["name"]);
        
        $data = array(
                'photo' => $photo
            );
        
        $where = array(   
                'email' => $email
            );
        
        $this->CrudModel->update_data($data, 'gbf_user',$where);
        
        $config['upload_path']          = './assets/images/userprofile/';
		$config['allowed_types']        = 'jpg|png';
		$config['max_size']             = 100000;
 
		// load library upload
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('filetoupload')) {
            $error = $this->upload->display_errors();
            // menampilkan pesan error
            print_r($error);
        } else {
           redirect(base_url().'Welcome/userprofile');
        }
    }
    
    function updateprofile()
    {
            $nama = $this->input->post('nama');
            $phone = $this->input->post('phone');
            $address = $this->input->post('address');
            $email = $this->input->post('email');

            $data = array(
                'nama' => $nama,
                'phone' => $phone,
                'address' => $address
            );

            $where = array(
			'email' => $email
			);

            $this->CrudModel->update_data($data, 'gbf_user', $where );
            redirect(base_url().'Welcome/userprofile');
    }
    
    function updatepassword()
    {
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $pass = md5($password);

            $data = array(
                'password' => $pass
            );

            $where = array(
			'email' => $email
			);

            $this->CrudModel->update_data($data, 'gbf_user', $where );
            redirect(base_url().'Welcome/userprofile');
    }
    
    function go_book()
    {
            $email = $this->input->post('email');
            $phone = $this->input->post('phone');
            $nama = $this->input->post('nama');
            $tanggal = $this->input->post('tanggal');
            $status = $this->input->post('status');
            $indukJ = $this->input->post('indukJ');
            $indukB = $this->input->post('indukB');
            $catatan = $this->input->post('catatan');
            $jenis = $this->input->post('jenis');
            
            $kode1 = substr($email,0,2); 
            $kode2 = substr($nama,1,3);
            $kode4 = date("d") . date("m") . date("Y");
            $kode3 = rand(100,999);
            $kode = $kode1 . $kode2 . $kode3 . $kode4;

            $data = array(
                'nama' => $nama,
                'phone' => $phone,
                'tanggal' => $tanggal,
                'status' => $status,
                'email' => $email,
                'kode' => $kode,
                'indukJ' => $indukJ,
                'indukB' => $indukB,
                'catatan' => $catatan,
                'jenis' => $jenis,
            );

            $this->CrudModel->input_data($data, 'gbf_book');
            redirect(base_url().'Welcome/history');
    }
    
    function cancelbook()
    {
        $kode = $this->input->post('kode');
            $where = array(
			'kode' => $kode
			);
            $table = 'gbf_book';
        $this->CrudModel->delete_data($table, $where );
        redirect(base_url().'Welcome/history');
    }
    
}