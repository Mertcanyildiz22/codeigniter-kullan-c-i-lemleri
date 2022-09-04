<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kayit extends CI_Controller {

	public function index(){

		$this->load->view('kayit_view');
	}

	public function kaydol(){

		if($this->input->method() == "post"){

			$this->form_validation->set_rules('kadi','Kullanıcı adı,','trim|required');
			$this->form_validation->set_rules('sifre','sifreniz','trim|required');
			$this->form_validation->set_rules('eposta','E-Posta adresi,','trim|required|is_unique[uyeler.eposta]|valid_email');

			if($this->form_validation->run() == FALSE){

				echo validation_errors();
			}else{

				$data = array(
					"kadi" => strip_tags(trim($this->input->post('kadi',true))),
					"eposta" => strip_tags(trim($this->input->post('eposta',true))),
					"sifre" => sha1(md5(strip_tags(trim($this->input->post('sifre',true)))))
				);

				$ekle = $this->Uye_model->ekle('uyeler',$data);
				
				if($ekle){

					echo "üyeliğiniz oluşturuldu";
				}else{

					echo "hata oluştu";
				}
			}
		}
	}
}
