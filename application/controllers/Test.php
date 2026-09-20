<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

	public function __construct() {
    	parent::__construct();
    	$this->load->database();
    	$this->load->model('TestModel');
	}

	function dashboard() {
		// $this->load->view('admin/top-nav');
		$data['user'] = $this->TestModel->getTotalUser();
		$data['testtotal'] = $this->TestModel->getTotalTest();

		if($this->session->userdata('user')){
			$id = $this->session->userdata('user')['id'];
			$data['tests']=$this->TestModel->getAllTestResult($id);
			$this->load->view('admin/dashboard',$data);
		} 
		else{
			$this->load->view('admin/dashboard',$data);
			// var_dump("in out session");die;
		}
		// var_dump($data);die;
	}

    function insert_test() {
		if($this->session->userdata('admin')){
			if($this->input->post()) {
				$test_form = $this->input->post();
				$test_data = array(
					'test_title'=>$test_form['test_title'],
					'test_paragraph'=>$test_form['test_paragraph'],
					'total_time'=>$test_form['total_time'],
					'test_type'=>$test_form['type'],
					'date_added'=>date('d-m-y'),
				);
			}
			$this->form_validation->set_rules('test_title',"First Name","required");
			$this->form_validation->set_rules('test_paragraph',"Last name","required");
			if($this->form_validation->run() === false) {
				if(isset($test_form['id'] ) && $test_form['id'] > 0 ) {
					$this->load->view('admin/test/test_edit'.$test_form['id']) ;
				} else {
					$this->load->view('admin/test/test_insert');
				}
			} else {
				if(isset($test_form['id'] ) && $test_form['id'] > 0 ) {
					$this->TestModel->Update($test_data,$test_form['id']);
					$this->session->set_flashdata('test_update'," User seccfull update" );
					redirect(base_url('admin/test'));
				} else {
					$this->TestModel->test_insert($test_data);
					$this->session->set_flashdata('test_insert'," Succfull insert" );
					redirect(base_url('admin/test'));
				}
			}
		}
		else{
			redirect(base_url('admin'));
		}

    }

    function test_show() {
		if($this->session->userdata('admin')){
			$data=array();
			$data['tests']=$this->TestModel->getTestAll();
			$this->load->view('admin/test/test_list',$data);
		}
		else{
			redirect(base_url('admin'));
		}
    } 

	function user_test() {
		if($this->session->userdata('user')){
			$data=array();
			$data['tests']=$this->TestModel->gettest();
			$this->load->view('admin/user_test_list',$data);
		}
		else{
			redirect(base_url('user'));
		}
    } 
	function user_compition() {
		if($this->session->userdata('user')){
			$data=array();
			$id = $this->session->userdata('user')['id'];
			$data['tests']=$this->TestModel->getcompition($id);
			// var_dump($data);die;
			$this->load->view('admin/user_comp_list',$data);
		}
		else{
			redirect(base_url('user'));
		}	
    } 
	
    function test_edit($id=0) {
		$data['tests'] = $this->TestModel->getTestById($id);
		$this->load->view('admin/test/test_edit',$data);
	}

    function delete($id=0) {
        if($id > 0) {
            $this->TestModel->Delete($id);
			$this->session->set_flashdata('test_delete'," Test seccfull delete from database" );
            redirect(base_url('admin/test'));
        }
    }

	function test_result() {
		json_decode('user_test_result');
		$test_result = $this->input->post();
		$this->TestModel->test_result($test_result);
		redirect(base_url('test/result_show'));
	}
	
	function show_result() {
		$data['result'] = $this->TestModel->getresultById($this->session->userdata('user')['id']);
		$this->load->view('test_result',$data);
	} 

	function show_grapgh($id=0) {
		$data['result'] = $this->TestModel->getresultByTestId($id);
		// var_dump($data);die;
		$this->load->view('test_grapgh',$data);
	}

	function showCompGrapgh($id=0) {
		$data['result'] = $this->TestModel->getByCompId($id);
		// var_dump($data);die;
		$this->load->view('test_grapgh',$data);
	} 

	function compition_request(){
		$data['users'] = $this->TestModel->getCompRequest();
		$this->load->view('admin/test/comp_request',$data);
	}

	function compition_result() {
		json_decode('compition_result');
		$test_result = $this->input->post();
		$id = $test_result['user_id'];
		$this->TestModel->compition_result($test_result,$id);
		redirect(base_url('test/result_show'));
	}
	
	function compitiom_result_show() {
		$data['result'] = $this->TestModel->getresultCompById($this->session->userdata('compition_id'));
		$this->load->view('compition_result',$data);
	}
}
?>