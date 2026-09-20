<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Site extends CI_Controller {

	public function __construct() {
    	parent::__construct();
    	$this->load->database();
    	$this->load->model('SiteModel');
	}

    function index() {
		
		// $config = array(
		// 	'protocol' => 'smtp',
		// 	'smtp_host' => 'ssl://smtp.googlemail.com ',
		// 	'smtp_port' => '465',
		// 	'smtp_user' => 'talharasheedhadock@gmail.com',
		// 	'smtp_pass' => 'Talha@2848'
		// 	'mailtype' => 'html',
		// 	'charset' => 'iso-8859-1',
		// 	'wordwrap' => TRUE,
		// );

		// $this->load->library('email',$config);
		// $this->email->from('talharasheedhadock@gmail.com','admin');
		// $this->email->to('juttt1250@gmail.com');
		// $this->email->subject('From test');
		// $this->email->subject('From test');
		// $this->email->message('Email for testing purpose');

		// $this->email->send();
		// $this->email->print_deugger();


		$this->load->view('dashboard');
    }

	function new_register() {
		if($this->input->post()) {
			$register_form = $this->input->post();
            $register_data = array(
				'first_name'=>$register_form['first_name'],
				'last_name'=>$register_form['last_name'],
				'gmail'=>$register_form['email'],
                'password'=>md5($register_form['password']),
				'type'=>$register_form['type'],
            );
			// var_dump($register_data);die;
        
			$this->form_validation->set_rules('first_name',"First Name","required");
			$this->form_validation->set_rules('last_name',"Last name","required");
			$this->form_validation->set_rules('email',"Email","required");
			$this->form_validation->set_rules('password',"password","required");
			if($this->form_validation->run() == false) {
				// $data['errors'] = $this->form_validation->error_array();
				// var_dump($data);die;
				// $this->load->view('dashboard');
			}else {
				$this->SiteModel->register($register_data);
				$this->session->set_flashdata('user_register'," Succfull register . Please login right now !" );
				// redirect(base_url('user'));
				
			}
			$this->load->view('dashboard');
		}

		$this->load->view('dashboard');

    }

	function practise(){
		$data['tests'] = $this->SiteModel->getPractise();
		// $data['tests']=$this->TestModel->gettest();
		$this->load->view('practise',$data);
	}

	function user_compition(){
		if($this->session->userdata('user')){
			$data['compition'] = $this->SiteModel->getCompition();
			$this->load->view('admin/user_comp_list',$data);
		}
		else{
			redirect(base_url('user'));
		}	
	}

    function test_start($id=0) {
		if($this->session->userdata('user')){
			$data=array();
			$data['tests']=$this->SiteModel->gettestbyid($id);
			$this->load->view('start_test',$data);
		}
		else{
			redirect(base_url('user'));
		}
    } 
	
    function practise_start($id=0) {
			$data=array();
			$data['tests']=$this->SiteModel->gettestbyid($id);
			$this->load->view('start_practise',$data);
    } 

    function compition_start($id=0) {
		if($this->session->userdata('user')){
			$data=array();
			$data['tests']=$this->SiteModel->gettestbyid($id);
			$this->load->view('start_compition',$data);
		}
		else{
			redirect(base_url('user'));
		}	
    } 

	function progressStatus(){
		$data  = array();
		json_decode('progres_status');
		$status = $this->input->post();
		$id = $status['comption_id'];
		$this->SiteModel->progressUpdate($status);
		$data = $this->SiteModel->getProgress($id);
		echo json_encode($data);
		
	}
	function logout() {
		$this->session->unset_userdata('user');
        redirect(base_url('user'));
	}

	function login() {
		// $_SERVER['HTTP_REFERER'] 
		// if($this->session->userdata('user')){
			// redirect(base_url('dashboard'));
		// }
		
        if($this->input->post()) {
			
            $this->form_validation->set_rules('first_name',"User name","required");
            $this->form_validation->set_rules('password',"User Password","required");
            if($this->form_validation->run() === true) {
                $user = $this->input->post();
                $is_auth =  $this->SiteModel->auth($user);
                if($is_auth) {
                    $this->session->set_userdata('user',$is_auth);
					// var_dump($this->session->userdata('user'));die;
                    $this->session->set_flashdata('login'," Welcome | succfull login" );
					redirect(base_url('user/practise'));
					
                }else {
                    $this->session->set_flashdata('login',"Login Failed..." );
                }
            }
			else {
				echo "Please enter correct name and password !" ;
			}
            
        }
	
        $this->load->view('dashboard');
    }

	function compition_join($id=0){
			if($id > 0){
				$data = array(
					'user_id' => $this->session->userdata('user')['id'],
					'comption_id' => $id,
					'status' => 1,
				);
				$this->SiteModel->compition($data);
			}

		$data['tests']=$this->SiteModel->gettestbyid($id);
			$this->load->view('start_compition',$data);
	}

	function compition_approved($id=0){
		$data = array(
			'request_status' => 1,
		);
		$this->SiteModel->compition_approved($data , $id);
		redirect(base_url('compition-request'));
	}


	function message() {
		if($this->input->post()) {
            $message_form = $this->input->post();
            $message_data = array(
                'name'=>$message_form['name'],
				'email'=>$message_form['email'],
                'message'=>$message_form['message'],
            );
        }
	    $this->form_validation->set_rules('name'," Name","required");
		$this->form_validation->set_rules('email',"Email","required");
		$this->form_validation->set_rules('message',"Message","required");
		if($this->form_validation->run() === false) {
				redirect(base_url('index'));
		}else {
			$this->SiteModel->message($message_data);
			$this->session->set_flashdata('user_message'," Your message seccfull insert " );
			redirect(base_url('index'));
			
		}

    }
    
}

