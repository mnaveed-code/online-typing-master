<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller {
	
	public function __construct()
	{
    	parent::__construct();
    	$this->load->database();
    	$this->load->model('SettingModel');
        $this->load->library('upload');
		
	}
    
    function setting_table(){
        if($this->session->userdata('admin')){
            $data['setting'] = $this->SettingModel->getSetting();
            $this->load->view('admin/setting',$data);
        }
        else{
            redirect(base_url('admin'));
        }
    }

    function setting_edit($id=0){
        
        $data['setting_data'] = $this->SettingModel->getSettingone();       
        $this->load->view('admin/setting_edit',$data);
    }
    
    function edit_save(){
               
     
        if($this->input->post()){

    
            $setting_data = $this->input->post();

            $data = array(
                'logo' =>  $setting_data['logo'],
                'gmail' => $setting_data['gmail'],
                'address' => $setting_data['address'],
                'phone_no' => $setting_data['phone_no'],
                'facebook' => $setting_data['facebook'],
                'tawiter' => $setting_data['tawiter'],
                'instagram' => $setting_data['instagram'],
                'github' => $setting_data['github'],

            );

            $this->SettingModel->update_save($data);
            redirect(base_url('setting'));

        }

    }

    function message(){
        
        $data['message'] = $this->SettingModel->getmessage();
        $this->load->view('admin/message',$data);
    }
}
