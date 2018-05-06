<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CrudAdmin extends CI_Controller {
    function __construct(){
		parent::__construct();		
        $this->load->helper(array('form'));
        $this->load->model('CrudModel');
        $this->load->helper("file");
 	} 
    
    function uploadgallery(){
        $id = $this->input->post('id');
        $judul = $this->input->post('judul');
        $deskripsi = $this->input->post('deskripsi');
        $photo = 'assets/images/gbfgallery/' . basename($_FILES["filetoupload"]["name"]);
        
        $data = array(
                'id' => $id,
                'judul' => $judul,
                'deskripsi' => $deskripsi,
                'photo' => $photo
            );
        
        $this->CrudModel->input_data($data, 'gbf_gallery');
        
        $config['upload_path']          = './assets/images/gbfgallery/';
		$config['allowed_types']        = 'jpg|png';
		$config['max_size']             = 100000;
 
		// load library upload
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('filetoupload')) {
            $error = $this->upload->display_errors();
            // menampilkan pesan error
            print_r($error);
        } else {
           redirect(base_url().'Welcome/gallery');
        }
    }
    
    function update(){
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
            redirect(base_url().'Welcome/userdata');
        }
    
    function updategallery(){
            $id = $this->input->post('id');
            $judul = $this->input->post('judul');
            $deskripsi = $this->input->post('deskripsi');

            $data = array(
                'judul' => $judul,
                'deskripsi' => $deskripsi
            );

            $where = array(
			'id' => $id
			);

            $this->CrudModel->update_data($data, 'gbf_gallery', $where );
            redirect(base_url().'Welcome/gallery');
        }

    function delete(){
            $email = $this->input->post('email');
            $table = $this->input->post('table');
            $where = array(
			'email' => $email
			);

            $this->CrudModel->delete_data($table, $where );
                redirect(base_url().'Welcome/userdata');
        }
    
    function deletegallery(){
            $id = $this->input->post('id');
            $where = array(
			'id' => $id
			);
            $table = 'gbf_gallery';
            
            $data['gallery'] = $this->CrudModel->cek_data($table,$where)->result();
            foreach ($data['gallery'] as $g){
                $file = $g->photo;
                delete_files($file);
            }
            $this->CrudModel->delete_data($table, $where );
            redirect(base_url().'Welcome/gallery');
        }
    
    function deletenews(){
        $id = $this->input->post('id');
            $where = array(
			'id' => $id
			);
            $table = 'gbf_news';
        $this->CrudModel->delete_data($table, $where );
        redirect(base_url().'Welcome/addnews');
    }
    
    function editnews(){
        $id = $this->input->post('id');
        $where = array(
			'id' => $id
			);
            $table = 'gbf_news';
        $data['news'] = $this->CrudModel->cek_data($table,$where)->result();
        $this->load->view('admin/editnews', $data);
    }
    
    function updatenews(){
        $id = $this->input->post('id');
        $judul = $this->input->post('judul');
        $berita = $this->input->post('berita');
        $data = array(
                'judul' => $judul,
                'berita' => $berita
            );
        $where = array(
			'id' => $id
			);
            $table = 'gbf_news';
        $this->CrudModel->update_data($data, $table, $where );
        redirect(base_url().'Welcome/addnews');
    }
    
    function updatefotonews(){
        $id = $this->input->post('id');
        $photo = 'assets/images/gbfnews/' . basename($_FILES["filetoupload"]["name"]);
        $data = array(
                'photo' => $photo
            );
        $where = array(
			'id' => $id
			);
        
        $this->CrudModel->update_data($data, 'gbf_news', $where );
        
        $config['upload_path']          = './assets/images/gbfnews/';
		$config['allowed_types']        = 'jpg|png';
		$config['max_size']             = 100000;
 
		// load library upload
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('filetoupload')) {
            $error = $this->upload->display_errors();
            // menampilkan pesan error
            print_r($error);
        } else {
           redirect(base_url().'Welcome/addnews');
        }
    }
    
    function insertnews(){
        $id = $this->input->post('id');
        $judul = $this->input->post('judul');
        $berita = $this->input->post('berita');
        $tanggal = $this->input->post('tanggal');
        $photo = 'assets/images/gbfnews/' . basename($_FILES["filetoupload"]["name"]);
        
        $data = array(
                'id' => $id,
                'judul' => $judul,
                'berita' => $berita,
                'photo' => $photo,
                'tanggal' => $tanggal
            );
        
        $this->CrudModel->input_data($data, 'gbf_news');
        
        $config['upload_path']          = './assets/images/gbfnews/';
		$config['allowed_types']        = 'jpg|png';
		$config['max_size']             = 100000;
 
		// load library upload
        $this->load->library('upload', $config);
        if (!$this->upload->do_upload('filetoupload')) {
            $error = $this->upload->display_errors();
            // menampilkan pesan error
            print_r($error);
        } else {
           redirect(base_url().'Welcome/addnews');
        }
    }
    
}