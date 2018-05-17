<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginSignup extends CI_Controller {
    function __construct(){
		parent::__construct();		
        $this->load->helper(array('form'));
        $this->load->model('CrudModel');
 	}
    
    function signup(){
		$nama = $this->input->post('nama');
        $email = $this->input->post('email');
        $password = $this->input->post('password');
        $address = $this->input->post('address');
        $phone = $this->input->post('phone');
        $access = 1;
 
        $pass = md5($password);
        
		$data = array(
			'email' => $email,
			'nama' => $nama,
            'password' => $pass,
			'phone' => $phone,
            'address' => $address,
            'photo' => " ",
            'access' => $access
			);
        
		$this->CrudModel->input_data($data,'gbf_user');
        redirect(base_url().'Welcome/login');
	}
    
    function do_login(){
		$email = $this->input->post('email');
		$password = $this->input->post('password');
        
        $pass = md5($password);
        
		$where = array(
			'email' => $email,
			'password' => $pass
			);
		$cek = $this->CrudModel->cek_data("gbf_user",$where)->num_rows();
		if($cek > 0){
    
            $data['user'] = $this->CrudModel->cek_data("gbf_user",$where)->result();
            foreach ($data['user'] as $u){
                
                if($u->access > 0){
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> 1616bf1c16798714a9d3f47305e742b2d0be6617
                    
                    $data_session = array(
                        'email' => $email,
                        'status' => "login"
                    );
 
			         $this->session->set_userdata($data_session);
                    
<<<<<<< HEAD
=======
=======
>>>>>>> d35e037aca67a2255808fea865e6fd305a4dea1b
>>>>>>> 1616bf1c16798714a9d3f47305e742b2d0be6617
                    redirect(base_url().'Welcome/homelogin');
                } else {
                     $data_session = array(
                        'email' => $email,
                        'status' => "admin"
                    );
 
			         $this->session->set_userdata($data_session);
                    redirect(base_url().'Welcome/admin');
                }
            }
 
		}else{
			redirect(base_url().'Welcome/loginerr');
		}
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url().'Welcome/login');
	}
}