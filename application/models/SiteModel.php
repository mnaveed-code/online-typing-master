<?php
 class  SiteModel extends CI_Model{

    function getTotalUser(){
        return $this->db->count_all('user');
    }
    function getTotalTest(){
        return $this->db->count_all('test');
    }

    function gettest() {
      $this->db->where('test_type','test');
      $this->db->select("*");
      $this->db->from('test');
      $query = $this->db->get();
      if($query->num_rows() > 0) {
        return $query->result_array();
      }else {
        return false;
      }
    }

    function getCompition() {
      $this->db->where('test_type','compition');
      $this->db->select("*");
      $this->db->from('test');
      $query = $this->db->get();
      if($query->num_rows() > 0) {
          return $query->result_array();
      }else {
          return false;
      }
    }
    function getPractise() {
      $this->db->where('test_type','p');
      $this->db->select("*");
      $this->db->from('test');
      $query = $this->db->get();
      if($query->num_rows() > 0) {
          return $query->result_array();
      }else {
          return false;
      }
    }
    
    function getsetting(){
        $this->db->select("*");
        $this->db->from('settings');
        $query = $this->db->get();
        if($query->num_rows() > 0) {
            return $query->row_array();
        }else {
            return false;
        }
    }

    function compition_approved($data=array(),$id=0){
        $this->db->where('id',$id);
        $this->db->update('compition',$data);
        return true;
    }

    function register($data) {
        $this->db->insert('user',$data);
    }

    function message($data){
        $this->db->insert('message',$data);
    }

    function gettestbyid($id) {
        $this->db->where('id',$id);
        $this->db->select("*");
        $this->db->from('test');
        $query = $this->db->get();
        if($query->num_rows() > 0){
            return $query->row_array();
        }else{
            return false;
        }
    } 

    public function auth($user) {
        $this->db->select("*");
        $this->db->from('user');
        $this->db->where('first_name',$user['first_name']);
        $this->db->where('password',md5($user['password']));
        // $this->db->where('user_password',md5($user['user_password']));
        $query = $this->db->get();
        if($query->num_rows() > 0){
            return $query->row_array();
        }else{
            return false;
        }
    }

    function compition($data){
        $this->db->insert('compition',$data);
    }

    function progressUpdate($data){
        $this->db->where('user_id',$data['user_id']);
        $this->db->update('compition',$data);
        return true;
    }

    function getProgress($id = 0){
        $this->db->select("ut.correct_character,u.first_name")
        ->from("compition ut")
        ->join("user u","u.id = ut.user_id","left")
        ->where("comption_id",$id)
        ->where("status",'1');
        $query=$this->db->get();
        if($query->num_rows() > 0){
          return $query->result_array();
        }else{
          return false;
        } 
    }
        
 }