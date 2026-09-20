<?php
 class  UserModel extends CI_Model{


  function register($data){
    $this->db->insert('user',$data);
  }
    
  function getuser(){
      $this->db->select("*")
      ->from("user");

      $query=$this->db->get();
      if($query->num_rows() > 0){
        return $query->result_array();
      }else{
        return false;
      } 
  }

  function login($name,$pass){   
      $this->db->select("*");
      $this->db->where('first_name',$name);
      $this->db->where('password',$pass);
      $this->db->from('user');
      $query = $this->db->get();
      if($query->num_rows() > 0){
          return $query->row_array();
      }else{
          return false;
      }
  }

  function Delete($id=0){
      $this->db->where('id',$id);
      $this->db->delete('user');
      return true;
  }

  function getUserById($id=0){
      $this->db->where('id',$id);
      $this->db->select("*");
      $this->db->from('user');
      $query = $this->db->get();
      if($query->num_rows() > 0){
          return $query->row_array();
      }else{
          return false;
      }
     
  }

  function Update($data=array(),$id=0){
      $this->db->where('id',$id);
      $this->db->update('user',$data);
      return true;
  }

  function Update_profile($data=array(),$id=0){
    $this->db->where('id',$id);
    $this->db->update('user',$data);
    return true;
  }

  function getUserprofile($id=0){
    $this->db->where('id',$id);
    $this->db->select("*");
    $this->db->from('user');
    $query = $this->db->get();
    if($query->num_rows() > 0){
        return $query->row_array();
    }else{
        return false;
    }

  }

  function getcompition(){
    $this->db->select("*")
    ->from("test")
    ->where("test_type","compition");
    $query=$this->db->get();
    if($query->num_rows() > 0){
      return $query->result_array();
    }else{
      return false;
    } 
} 

function getresult($id=0){
  $this->db->select("*")
  ->from("user_test")
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