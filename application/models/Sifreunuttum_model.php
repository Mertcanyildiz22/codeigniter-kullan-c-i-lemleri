<?php

    class Sifreunuttum_model extends CI_Model{

        public function __contruct(){
        
            parent::__contruct();
            $this-load->database();
            
        }

        public function mailvarmi($eposta){

            $result = $this->db->select('*')->from('uyeler')->where('eposta',$eposta)->get()->row();
            return $result;
        }
        //$data=array()
        public function setguncelle($data,$eposta){

            $result = $this->db->where('eposta',$eposta)->update('uyeler',$data);
            return $result;
        }

        public function varmi($bilgi,$id){

            $result = $this->db->select('*')->from('uyeler')->where($bilgi,$id)->get()->row();
            return $result;
        }

        public function sonupdate($data,$id){

            $result = $this->db->where('id',$id)->update('uyeler',$data);
            return $result;
        }
    }