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
        
        $data['gallery'] = $this->CrudModel->viewgallery()->result();
		$this->load->view('index',$data);
	}
    public function profile()
	{
		$this->load->view('depan/profile');
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
    public function admin()
	{
		$this->load->view('admin/admin');
	}
    public function userdata()
	{
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
	}
    public function gallery()
	{
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
	}
    public function addnews()
    {
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
    }
    public function userprofile()
    {
        $where = array(
			'email' => 'yasin.awb@gmail.com',
			);
        $data['user'] = $this->CrudModel->viewdb('gbf_user',$where)->result();
		$this->load->view('user/profile',$data);
    }
    public function homelogin()
	{
		$this->load->view('user/homelogin');
	}
    public function history()
	{
		$this->load->database();
		$jumlah_data = $this->CrudModel->jumlah_data('gbf_book');
		$this->load->library('pagination');
		$config['base_url'] = base_url().'Welcome/index/';
		$config['total_rows'] = $jumlah_data;
		$config['per_page'] = 5;
		$from = $this->uri->segment(3);
		$this->pagination->initialize($config);		
		$data['book'] = $this->CrudModel->data('gbf_book',$config['per_page'],$from);
        $this->load->view('user/history',$data);
	}
    public function book()
	{
		$where = array(
			'email' => 'yasin.awb@gmail.com',
			);
        $data['user'] = $this->CrudModel->viewdb('gbf_user',$where)->result();
		$this->load->view('user/book',$data);
	}
}
