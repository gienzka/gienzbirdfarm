<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Email extends CI_Controller {
    function __construct(){
		parent::__construct();		
		$this->load->helper('url');
        $this->load->helper(array('form', 'url'));
 	}
    
    function sendMail() {
        $nama = $this->input->post('name');
        $email = $this->input->post('email');
        $message = $this->input->post('message');
        $subject = $this->input->post('subject');
        
        $isi = 'Feedback : '.$nama.' | '.$email.' | '.$message;
        
        $ci = get_instance();
        $ci->load->library('email');
        $config['protocol'] = "smtp";
        $config['smtp_host'] = "ssl://smtp.gmail.com";
        $config['smtp_port'] = "465";
        $config['smtp_user'] = "emailpercobaangienzka@gmail.com";
        $config['smtp_pass'] = "emailpercobaangienzkaemailpercobaangienzka";
        $config['charset'] = "utf-8";
        $config['mailtype'] = "html";
        $config['newline'] = "\r\n";
        
        
        $ci->email->initialize($config);
 
        $ci->email->from($email, $nama);
        $list = array('emailpercobaangienzka@gmail.com');
        $ci->email->to('emailpercobaangienzka@gmail.com');
        $ci->email->subject($subject);
        $ci->email->message($isi);
        if ($this->email->send()) {
            redirect(base_url());
        } else {
            show_error($this->email->print_debugger());
        }
    }
}