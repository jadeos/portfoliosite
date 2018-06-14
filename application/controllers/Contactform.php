<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contactform extends CI_Controller {
	public $mybool;
	function __construct() {
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('recaptcha');
		
		}
		/**
		 * Index Page for this controller.
		 *
		 * Maps to the following URL
		 * 		http://example.com/index.php/welcome
		 *	- or -
		 * 		http://example.com/index.php/welcome/index
		 *	- or -
		 * Since this controller is set as the default controller in
		 * config/routes.php, it's displayed at http://example.com/
		 *
		 * So any other public methods not prefixed with an underscore will
		 * map to /index.php/welcome/<method_name>
		 * @see https://codeigniter.com/user_guide/general/urls.html
		 */
		//public $mybool;
		public function index()
		{

			
      $this->load->helper('url');
			$this->load->view('header');
			$this->load->view('contact');
			$this->load->view('footer');
   
		}

		
		public function send()
		{
			
			
			 $name = $this->input->post("name");
			 $email = $this->input->post("email");
			 $message = $this->input->post("message");
			 $subject  =$this->input->post("subject");
			 $check = $this->input->post("check");

			$config = Array(
		    'protocol' => 'smtp',
		    'smtp_host' => 'jadeosullivan.com',
		    'smtp_port' => 587,
		    'smtp_user' => 'jade@jadeosullivan.com',
		    'smtp_pass' => 'anthony4ever',
		    'mailtype'  => 'html', 
		    'charset'   => 'iso-8859-1'
			);
			if($check==9){
			$this->load->library('email', $config);
			$this->email->set_newline("\r\n");
			//$this ->email->mailtype('html');
			
     
  
		
			//create the email params 
			$this->email->from("jade@jadeosullivan.com","jade");
			$this->email->reply_to($email,$name);
			$this->email->to('osullivanjade400@gmail.com');
 
			$this->email->subject($subject);
			$this->email->message("<html><body style='background-color:lightgrey';><div class='card-header' height='200'style='background-color: grey; padding: 15px; color: white'><strong>New Email from: </strong>".$email."</div><div class='card-block'><div style='padding:30px; line-height: 0.8;' height='300'>".nl2br( $message)."</div></body></html>");

			//send data in an email to osullivanjade400@gmailcom
			$this->email->send();
			$this->load->helper('url');
			$this->load->view('header');
			$this->load->view('contact');
			$this->load->view('footer');
			
			}else{
			$this->load->helper('url');
			$this->load->view('header');
			$this->load->view('contact');
			$this->load->view('footer');
			echo "Error sending email";

			}
	
       		

		
	}




}