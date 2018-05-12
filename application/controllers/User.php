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
    
    
}