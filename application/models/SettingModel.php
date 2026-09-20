<?php
 class  SettingModel extends CI_Model{

        function getSetting(){
            $this->db->select("*")
                ->from("settings");
                $query=$this->db->get();
                if($query->num_rows() > 0){
                return $query->result_array();
                }else{
                return false;
                } 
        }
        function getmessage(){
            $this->db->select("*")
                ->from("message");
                $query=$this->db->get();
                if($query->num_rows() > 0){
                    return $query->result_array();
                }else{
                    return false;
                } 
        }

        function getSettingone(){
            $this->db->select("*")
                ->from("settings");
                $query=$this->db->get();
                if($query->num_rows() > 0){
                return $query->row_array();
                }else{
                return false;
                }   
        }

        function update_save($data){
            $this->db->where('id','1');
            $query = $this->db->update('settings',$data);
        }

        
      
 }