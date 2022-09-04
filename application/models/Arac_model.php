<?php

    class Arac_model extends CI_Model{

        public function __contruct(){
        
            parent::__contruct();
            $this-load->database();
            
        }

        public function verioku(){

            $query = $this->db->get('arabalar');
            $this->db->order_by('id','ASC');
            return $query->result_array();
        }

        function getir($id){

		    return $this->db->get_where('arabalar',array('id'=>$id))->row();
	    }

        function kaydet($id){

		    $arr['marka'] = $this->input->post('marka');
		    $arr['model'] = $this->input->post('model');
		    $arr['plaka'] = $this->input->post('plaka');
            $arr['kullanici'] = $this->input->post('kullanici');
            $arr['kayit_tarihi'] = $this->input->post('kayit_tarihi');
		
		    $this->db->where(array('id'=>$id));
		    $this->db->update('arabalar',$arr);
	}   

        public function sil($id){

            $this->db->delete('arabalar',array('id'=>$id));
        }
    }    