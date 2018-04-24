<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
    function __construct(){
		parent::__construct();		
		$this->load->helper('url');
        $this->load->helper(array('form', 'url'));
 	}
	public function index()
	{
		$this->load->view('index');
	}
    public function profile()
	{
		$this->load->view('profile');
	}
    public function login()
	{
		$this->load->view('login');
	}
    public function signup()
	{
		$this->load->view('signup');
	}
    public function contact()
	{
		$this->load->view('contact');
	}
    public function product()
	{
		$this->load->view('product');
	}
    public function loginerr()
	{
		$this->load->view('errormessage/loginerr');
	}
}
