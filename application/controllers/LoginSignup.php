<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LoginSignup extends CI_Controller {
    function __construct(){
		parent::__construct();		
        $this->load->helper(array('form'));
        $this->load->model('CrudModel');
        $this->load->library('encrypt');
 	}
    
    function anti_xss($source)
    {
        $f=stripslashes(strip_tags(htmlspecialchars ($source,ENT_QUOTES)));
        return $f;
    }
    
    function signup(){
		$nama = $this->anti_xss($this->input->post('nama',TRUE));  
        $email = $this->anti_xss($this->input->post('email',TRUE));
        $password = $this->anti_xss($this->input->post('password',TRUE));
        $address = $this->anti_xss($this->input->post('address',TRUE));
        $phone = $this->anti_xss($this->input->post('phone',TRUE));
        $photo = 'assets/images/userprofile/gbf1.png';
        $access = 1;
        $pass = $this->encrypt->encode($password);
        
		$data = array(
			'email' => $email,
			'nama' => $nama,
            'password' => $pass,
			'phone' => $phone,
            'address' => $address,
            'photo' => $photo,
            'access' => $access
			);
        
		$this->CrudModel->input_data($data,'gbf_user');
        redirect(base_url().'Welcome/login');
	}
    
    function do_login(){
		$email = $this->anti_xss($this->input->post('email',TRUE));
		$password = $this->anti_xss($this->input->post('password',TRUE));

		$where = array(
			'email' => $email
			);
		$data['user'] = $this->CrudModel->cek_data("gbf_user",$where)->result();
        foreach ($data['user'] as $u){
        $pass = $this->encrypt->decode($u->password);
		if($password == $pass){
            
                
                if($u->access > 0){
                    
                    $data_session = array(
                        'email' => $email,
                        'status' => "login"
                    );
 
			         $this->session->set_userdata($data_session);
                    
                    redirect(base_url().'Welcome/homelogin');
                } else {
                     $data_session = array(
                        'email' => $email,
                        'status' => "admin"
                    );
 
			         $this->session->set_userdata($data_session);
                    
                    redirect(base_url().'Welcome/admin');
                }
            
 
		  }else{
            redirect(base_url().'Welcome/loginerr');
		  }
        }
	}
 
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url().'Welcome/login');
	}
}