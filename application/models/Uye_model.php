<?php

    class Uye_model extends CI_Model{

        public function __contruct(){
        
            parent::__contruct();
        }

        public function getir($where,$table){

            return $this->db->where($where)->get($table)->row();
        }

        public function ekle($table,$where){

            return $this->db->insert($table,$where);
        }

        public function guncelle($where,$data,$table){

            return $this->db->where($where)->update($table,$data);
        }
    }