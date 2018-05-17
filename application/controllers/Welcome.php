<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
    function __construct(){
		parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->model('CrudModel');
 	}
	public function index()
	{
        $this->load->database();
            $jumlah_data = $this->CrudModel->jumlah_data('gbf_news');
            $this->load->library('pagination');
            $config['base_url'] = base_url().'Welcome/index/';
            $config['total_rows'] = $jumlah_data;
            $config['per_page'] = 4;
            $from = $this->uri->segment(3);
            $this->pagination->initialize($config);		
        
        $news = $this->CrudModel->data('gbf_news',$config['per_page'],$from);
        $gallery = $this->CrudModel->viewgallery()->result();
        
        $data = array(
                'news' => $news,
                'gallery' => $gallery
            );

        
		$this->load->view('index',$data);
	}
    
    //------------------------------------------------- DEPAN ----------------------------------------------
    
    public function profile()
	{
            $this->load->database();
            $jumlah_data = $this->CrudModel->jumlah_data('gbf_trophy');
            $this->load->library('pagination');
            $config['base_url'] = base_url().'Welcome/index/';
            $config['total_rows'] = $jumlah_data;
            $config['per_page'] = 6;
            $from = $this->uri->segment(3);
            $this->pagination->initialize($config);		
            $data['trophy'] = $this->CrudModel->data('gbf_trophy',$config['per_page'],$from);
        
        $this->load->view('depan/profile', $data);
	}
    public function login()
	{
		$this->load->view('depan/login');
	}
    public function signup()
	{
		$this->load->view('depan/signup');
	}
    public function contact()
	{
		$this->load->view('depan/contact');
	}
    public function product()
	{
		$this->load->view('depan/product');
	}
    public function loginerr()
	{
		$this->load->view('errormessage/loginerr');
	}
    public function readnews()
	{
		$id = $this->input->post('id');
            $where = array(
			'id' => $id
			);
            $table = 'gbf_news';
        $data['news'] = $this->CrudModel->viewdb($table,$where)->result();
        $this->load->view('depan/readnews', $data);
	}
    
    //------------------------------------------------- ADMIN ----------------------------------------------
    
    public function admin()
	{
        if($this->session->userdata('status') == "admin"){
		    $this->load->database();
            $jumlah_data = $this->CrudModel->jumlah_data('gbf_history');
            $this->load->library('pagination');
            $config['base_url'] = base_url().'Welcome/index/';
            $config['total_rows'] = $jumlah_data;
            $config['per_page'] = 10;
            $from = $this->uri->segment(3);
            $this->pagination->initialize($config);		
            $data['data'] = $this->CrudModel->data('gbf_history',$config['per_page'],$from);
        
        $this->load->view('admin/admin', $data);
        } else{
            redirect(base_url());
        }
	}
    public function userdata()
	{
        if($this->session->userdata('status') == "admin"){
            $this->load->database();
            $jumlah_data = $this->CrudModel->jumlah_data('gbf_user');
            $this->load->library('pagination');
            $config['base_url'] = base_url().'Welcome/index/';
            $config['total_rows'] = $jumlah_data;
            $config['per_page'] = 20;
            $from = $this->uri->segment(3);
            $this->pagination->initialize($config);		
            $user = $this->CrudModel->data('gbf_user',$config['per_page'],$from);
            $admin = $this->CrudModel->viewadmin()->result();

            $data = array(
                'user' => $user,
                'admin' => $admin
            );

            $this->load->view('admin/userdata', $data);
            
        } else{
            redirect(base_url());
        }
        
	}
     public function trophy()
	{
        if($this->session->userdata('status') == "admin"){
            $this->load->database();
            $jumlah_data = $this->CrudModel->jumlah_data('gbf_trophy');
            $this->load->library('pagination');
            $config['base_url'] = base_url().'Welcome/index/';
            $config['total_rows'] = $jumlah_data;
            $config['per_page'] = 20;
            $from = $this->uri->segment(3);
            $this->pagination->initialize($config);		
            $data['trophy'] = $this->CrudModel->data('gbf_trophy',$config['per_page'],$from);
            $this->load->view('admin/trophy',$data);
        } else{
            redirect(base_url());
        }
	}
    public function gallery()
	{
        if($this->session->userdata('status') == "admin"){
            $this->load->database();
            $jumlah_data = $this->CrudModel->jumlah_data('gbf_gallery');
            $this->load->library('pagination');
            $config['base_url'] = base_url().'Welcome/index/';
            $config['total_rows'] = $jumlah_data;
            $config['per_page'] = 20;
            $from = $this->uri->segment(3);
            $this->pagination->initialize($config);		
            $data['gallery'] = $this->CrudModel->data('gbf_gallery',$config['per_page'],$from);
            $this->load->view('admin/gallery',$data);
        } else{
            redirect(base_url());
        }
	}
    public function addnews()
    {
        if($this->session->userdata('status') == "admin"){
            $this->load->database();
            $jumlah_data = $this->CrudModel->jumlah_data('gbf_news');
            $this->load->library('pagination');
            $config['base_url'] = base_url().'Welcome/index/';
            $config['total_rows'] = $jumlah_data;
            $config['per_page'] = 20;
            $from = $this->uri->segment(3);
            $this->pagination->initialize($config);		
            $data['news'] = $this->CrudModel->data('gbf_news',$config['per_page'],$from);
            $this->load->view('admin/addnews',$data);
        } else{
            redirect(base_url());
        }
    }
    
     public function adminbook()
	{
        if($this->session->userdata('status') == "admin"){
            
            $where = array(
                'status' => 'Unconfirmed'
                );
            
            $where1 = array(
                'status' => 'Unpaid'
                );
            
            $wherem = array(
                'status' => 'Waiting-For-Bird',
                'jenis' => 'Murai Batu'
                );
            
            $wherek = array(
                'status' => 'Waiting-For-Bird',
                'jenis' => 'Kenari Yorkshire'
                );
            
            $wherel = array(
                'status' => 'Waiting-For-Bird',
                'jenis' => 'Lovebird'
                );
            
            $this->load->database();
            $jumlah_data = $this->CrudModel->jumlah_data('gbf_book');
            $this->load->library('pagination');
            $config['base_url'] = base_url().'Welcome/index/';
            $config['total_rows'] = $jumlah_data;
            $config['per_page'] = 10;
            $from = $this->uri->segment(3);
            $this->pagination->initialize($config);		
            $data1 = $this->CrudModel->getHistory('gbf_book',$config['per_page'],$from, $where1);
            
            $murai = $this->CrudModel->getHistory('gbf_book',$config['per_page'],$from, $wherem);
            $kenari = $this->CrudModel->getHistory('gbf_book',$config['per_page'],$from, $wherek);
            $love = $this->CrudModel->getHistory('gbf_book',$config['per_page'],$from, $wherel);
            
            $data = $this->CrudModel->viewdb('gbf_book',$where)->result();
            
            $this->load->view('admin/adminbook',array('data' => $data, 'data1' => $data1, 'murai' => $murai, 'kenari' => $kenari, 'love' => $love));
        } else{
            redirect(base_url());
        }
	}
    
    //------------------------------------------------- USER ----------------------------------------------
    
    public function userprofile()
    {
        if($this->session->userdata('status') == "login"){
            $where = array(
                'email' => 'yasin.awb@gmail.com',
                );
            $data['user'] = $this->CrudModel->viewdb('gbf_user',$where)->result();
            $this->load->view('user/profile',$data);
        } else{
            redirect(base_url());
        }
    }
    public function homelogin()
	{
        if($this->session->userdata('status') == "login"){
		  $email = $this->session->userdata('email');
            $where = array(
                'email' => $email,
                );
            $data['user'] = $this->CrudModel->viewdb('gbf_user',$where)->result();
            $this->load->view('user/homelogin',$data);
        } else{
            redirect(base_url());
        }
	}
    public function history()
	{
        if($this->session->userdata('status') == "login"){
            $email = $this->session->userdata('email');
            $where = array(
                'email' => $email,
                );
            
            
            $this->load->database();
            $jumlah_data = $this->CrudModel->jumlah_data('gbf_history');
            $this->load->library('pagination');
            $config['base_url'] = base_url().'Welcome/index/';
            $config['total_rows'] = $jumlah_data;
            $config['per_page'] = 10;
            $from = $this->uri->segment(3);
            $this->pagination->initialize($config);		
            $data1 = $this->CrudModel->getHistory('gbf_history',$config['per_page'],$from, $where);
            $data = $this->CrudModel->viewdb('gbf_book',$where)->result();
            $data2 = $this->CrudModel->viewdb('gbf_book',$where)->result();
            
            $this->load->view('user/history',array('data' => $data, 'data1' => $data1, 'data2' => $data2));
        } else{
            redirect(base_url());
        }
	}
    
    public function book()
	{
        if($this->session->userdata('status') == "login"){
            $email = $this->session->userdata('email');
            $where = array(
                'email' => $email,
                );
            $data['user'] = $this->CrudModel->viewdb('gbf_user',$where)->result();
            
            $this->load->view('user/book',$data);
        } else{
            redirect(base_url());
        }
	}
    
   
}
