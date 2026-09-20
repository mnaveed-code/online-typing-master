<?php
 class  TestModel extends CI_Model{

    function test_insert($data){
        $this->db->insert('test',$data);
    }

    
    function getTotalUser(){
      return $this->db->count_all('user');
   }

   function getTotalTest(){
      return $this->db->count_all('test');
   }


    function getTestById($id=0){
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

    function getTestAll(){
        $this->db->select("*")
        ->from("test");
        $query=$this->db->get();
        if($query->num_rows() > 0){
          return $query->result_array();
        }else{
          return false;
        } 
    } 
    function gettest(){
        $this->db->select("*")
        ->from("test")
        ->where("test_type","test");
        $query=$this->db->get();
        if($query->num_rows() > 0){
          return $query->result_array();
        }else{
          return false;
        } 
    } 

    function getCompRequest(){
      $this->db->select("ut.*,t.test_title,u.first_name")
      ->from("compition ut")
      ->join("test t","t.id = ut.comption_id","left")
      ->join("user u","u.id = ut.user_id","left");
      // ->where("request_status",0);
      $query=$this->db->get();
      if($query->num_rows() > 0){
        return $query->result_array();
      }else{
        return false;
      } 
    }

    function getcompition($id=0){
      $this->db->select("ut.*,t.test_title,u.first_name")
      ->from("compition ut")
      ->join("test t","t.id = ut.comption_id","left")
      ->join("user u","u.id = ut.user_id","left")
      ->where("user_id",$id);
      $query=$this->db->get();
      if($query->num_rows() > 0){
        return $query->row_array();
      }else{
        return false;
      } 
    } 

    function Update($data=array(),$id=0){
        $this->db->where('id',$id);
        $this->db->update('test',$data);
        return true;
    }

    function Delete($id=0){
        $this->db->where('id',$id);
        $this->db->delete('test');
        return true;
    }

    function test_result($data){
        $this->db->insert('user_test',$data);
    }

    function compition_result($data,$id){
      $this->db->where('user_id',$id);
      $this->db->update('compition',$data);
      // $this->db->insert('compition',$data);
      return true;
    }

    function getresultById($id=0){
        $this->db->select("ut.*,t.test_title,u.first_name")
        ->from("user_test ut")
        ->join("test t","t.id = ut.test_id","left")
        ->join("user u","u.id = ut.user_id","left")
        ->where("user_id",$id);
        $query=$this->db->get();
        if($query->num_rows() > 0){
          return $query->result_array();
        }else{
          return false;
        } 
    }
   
    function getresultByTestId($id=0){
        $this->db->select("ut.*,t.test_title,u.first_name")
        ->from("user_test ut")
        ->join("test t","t.id = ut.test_id","left")
        ->join("user u","u.id = ut.user_id","left")
        ->where("ut.id",$id);
        $query=$this->db->get();
        if($query->num_rows() > 0){
          return $query->row_array();
        }else{
          return false;
        } 
    }

    function getByCompId($id=0){
        $this->db->select("ut.*,t.test_title,u.first_name")
        ->from("compition ut")
        ->join("test t","t.id = ut.comption_id","left")
        ->join("user u","u.id = ut.user_id","left")
        ->where("ut.id",$id);
        $query=$this->db->get();
        if($query->num_rows() > 0){
          return $query->row_array();
        }else{
          return false;
        } 
    }

    function getresultCompById($id=0){
        $this->db->select("ut.*,t.test_title,u.first_name")
        ->from("compition ut")
        ->join("test t","t.id = ut.comption_id","left")
        ->join("user u","u.id = ut.user_id","left")
        ->where("comption_id",$id);
        $query=$this->db->get();
        if($query->num_rows() > 0){
          return $query->result_array();
        }else{
          return false;
        } 
    }
    function getAllTestResult($id=0){
      $this->db->select("ut.*,t.test_title")
      ->from("user_test ut")
      ->join("test t","t.id = ut.test_id","left")
      ->where("user_id",$id);
      $query=$this->db->get();
      if($query->num_rows() > 0){
        return $query->result_array();
      }else{
        return false;
      } 
    }
 }
?>