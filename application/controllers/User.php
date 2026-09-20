<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct(){
    	parent::__construct();
    	$this->load->database();
    	$this->load->model('UserModel');
	}

	public function index() {

		// if($this->session->userdata('user')) { 
		// 	redirect(base_url('dashboard'));
		// }
		// else {
			$this->load->view('admin/user/login');
		// }
	}

	function login() {
        if($this->input->post()) {
            $login_form = $this->input->post();
            $logindata = array(
                'first_name'=>$login_form['first_name'],
                'password'=>md5($login_form['password']),
            );
        }
	    $this->form_validation->set_rules('first_name',"First Name","required");
		$this->form_validation->set_rules('password',"password","required");
        if($this->form_validation->run() == false) {
			// var_dump("false");die;
            $this->load->view('admin/user/login');
        }
        else {
			$query =  $this->UserModel->login($logindata['first_name'],$logindata['password']);
            if($query != false) { 
				// var_dump("True");die;
				$this->session->set_userdata('admin',$query);
				// var_dump($this->session->userdata('admin'));die;
                $this->session->set_flashdata('login'," Welcome | succfull login" );
                redirect(base_url('dashboard'));
            }
            else{
                redirect(base_url('admin'));
            }
        }
    }

	function update() {
		if($this->input->post()) {
            $register_form = $this->input->post();
            $register_data = array(
                'first_name'=>$register_form['first_name'],
				'last_name'=>$register_form['last_name'],
				'gmail'=>$register_form['email'],
                'password'=>$register_form['password'],
				'type'=>$register_form['type'],
            );
        }
	    $this->form_validation->set_rules('first_name',"First Name","required");
        $this->form_validation->set_rules('last_name',"Last name","required");
		$this->form_validation->set_rules('email',"Email","required");
		$this->form_validation->set_rules('password',"password","required");
		if($this->form_validation->run() === false) {
			if(isset($register_form['id'] ) && $register_form['id'] > 0 ) {
				$this->load->view('user/profile'.$register_form['id']) ;
			}else {
				$this->load->view('admin/user/register');
			}
		}else {
			if(isset($register_form['id'] ) && $register_form['id'] > 0 ) {
				$this->UserModel->Update_profile($register_data,$register_form['id']);
				$this->session->set_flashdata('user_update'," User seccfull update" );
				redirect(base_url('admin/user'));
			}else {
				$this->UserModel->register($register_data);
				$this->session->set_flashdata('user_insert'," Succfull insert" );
				redirect(base_url('admin'));
			}
		}
    }
    
    function user_list() {
		if($this->session->userdata('admin')){
			$data=array();
			$data['users']=$this->UserModel->getuser();
			$this->load->view('admin/user/user_list',$data);
		}
		else{
			redirect(base_url('admin'));
		}
    } 

	function delete($id=0) {
        if($id > 0) {
            $this->UserModel->Delete($id);
			$this->session->set_flashdata('user_delete'," User seccfull delete from database" );
            redirect(base_url('admin/user'));
        }
    }

	function edit($id=0) {
		$data['users'] = $this->UserModel->getUserById($id);
		$this->load->view('admin/user/user_edit',$data);
	}

	function user_test() {
		$data['users'] = $this->UserModel->getUserById($id);
		$this->load->view('admin/user/user_edit',$data);
	}
	
	function logout() {
        $this->session->unset_userdata('admin');
        redirect(base_url('admin'));
	}

	function profile() {

		$id = $this->session->userdata('user')['id'];
		$data['users'] = $this->UserModel->getUserprofile($id);
		$data['tests'] = $this->UserModel->getresult($id);
		// var_dump($data);die;
		$this->load->view('profile',$data);
	}

	function profile_edit() {
		$id = $this->session->userdata('user')['id'];
		$data['users'] = $this->UserModel->getUserprofile($id);
		$this->load->view('profil_edit',$data);
	}

	function compition() {
		$data=array();
		$data['tests']=$this->UserModel->getcompition();
		$this->load->view('admin/user_comp_list',$data);
    } 
	
}

	// function save_form(){
	// 	$config = array(
    //         'upload_path' => 'upload',
    //         'allowed_types' => 'jpg|jpeg|png'
    //     );
    //     $this->upload->initialize($config);

    //         $img=$_FILES['image']['name'];
    //         if($this->upload->do_upload('image')){
                
    //             $imge = $this->upload->data();
                // echo"<pre>";
                // print_r($imge); 
				// var_dump($img);die;
        //     }
        //     else{
        //         echo "not upload";die;
        //         echo $this->upload->display_error();
        //     }

