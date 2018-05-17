<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {
    function __construct(){
		parent::__construct();		
        $this->load->helper(array('form'));
        $this->load->model('CrudModel');
        $this->load->helper("file");
 	} 
    function anti_xss($source)
    {
        $f=stripslashes(strip_tags(htmlspecialchars ($source,ENT_QUOTES)));
        return $f;
    }
    function updateprofilephoto(){
        $email = $this->anti_xss($this->input->post('email',TRUE));
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
            $nama = $this->anti_xss($this->input->post('nama',TRUE));
            $phone = $this->anti_xss($this->input->post('phone',TRUE));
            $address = $this->anti_xss($this->input->post('address',TRUE));
            $email = $this->anti_xss($this->input->post('email',TRUE));
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
            $email = $this->anti_xss($this->input->post('email',TRUE));
            $password = $this->anti_xss($this->input->post('password',TRUE));
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
            $email = $this->anti_xss($this->input->post('email',TRUE));
            $phone = $this->anti_xss($this->input->post('phone',TRUE));
            $nama = $this->anti_xss($this->input->post('nama',TRUE));
            $tanggal = $this->anti_xss($this->input->post('tanggal',TRUE));
            $status = $this->anti_xss($this->input->post('status',TRUE));
            $catatan = $this->anti_xss($this->input->post('catatan',TRUE));
            $jenis = $this->anti_xss($this->input->post('jenis',TRUE));
            
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
                'catatan' => $catatan,
                'jenis' => $jenis
            );

            $this->CrudModel->input_data($data, 'gbf_book');
            redirect(base_url().'Welcome/history');
    }
    
    function cancelbook()
    {
        $kode = $this->anti_xss($this->input->post('kode',TRUE));
            $where = array(
			'kode' => $kode
			);
            $table = 'gbf_book';
        $this->CrudModel->delete_data($table, $where );
        redirect(base_url().'Welcome/history');
    }
    
}