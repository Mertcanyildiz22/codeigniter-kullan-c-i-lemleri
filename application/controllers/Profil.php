<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil extends CI_Controller {

	public function __construct(){

		parent::__construct();
		
		if(!$this->session->userdata('oturum')){

			redirect(base_url());
		}
	}

	public function index(){
		
		$this->load->model('Arac_model');
		$data['veri'] = $this->Arac_model->verioku();
        $this->load->view('anasayfa_view',$data);
	}

    public function duzenle(){

        $this->load->view('profil_view');
    }

	public function guncelle(){

        if($this->input->method() == "post"){

			$this->form_validation->set_rules('kadi','Kullanıcı adı,','trim|required');
			$this->form_validation->set_rules('sifre','sifreniz','trim');
			$this->form_validation->set_rules('eposta','E-Posta adresi,','trim|required|valid_email');

			if($this->form_validation->run() == FALSE){

				echo validation_errors();
			}else{

				$query = $this->Uye_model->getir([
					'eposta'=>$this->input->post('eposta',true),
					'id !=' => $this->session->userdata('id')
				],'uyeler');

				if($query){

					echo "E-posta sistemde Kayıtlı";
				}else{

					if($this->input->post('sifre') == ""){

						$data = array(
							"kadi" => strip_tags(trim($this->input->post('kadi',true))),
							"eposta" => strip_tags(trim($this->input->post('eposta',true))),
						);
					}else{

						$data = array(
							"kadi" => strip_tags(trim($this->input->post('kadi',true))),
							"eposta" => strip_tags(trim($this->input->post('eposta',true))),
							"sifre" => sha1(md5(strip_tags(trim($this->input->post('sifre',true)))))
						);
					}

					$update = $this->Uye_model->guncelle(['id'=> $this->session->userdata('id')],$data,'uyeler');
					if($update){

						$this->session->set_userdata([
							'kadi'   => strip_tags(trim($this->input->post('kadi',true))),
							'eposta' => strip_tags(trim($this->input->post('eposta',true)))
						]);
						echo "profil güncellendi";
					}else{

						echo "hata oluştu";
					}
					
				}
			}
		}
    }
}