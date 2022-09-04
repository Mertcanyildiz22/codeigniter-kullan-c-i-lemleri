<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Araba_kayit extends CI_Controller {

    public function __construct(){

		parent::__construct();
		$this->load->model('Arac_model');
	}

	public function index(){

		$this->load->view('anasayfa');
	}

	public function kaydet(){

		if($this->input->method() == "post"){

			$data = array(

				"marka"  => $this->input->post('marka',true),
			    "model"  => $this->input->post('model',true),
                "plaka"  => $this->input->post('plaka',true),
                "kullanici"  => $this->input->post('kullanici',true)
			);

			$ekle = $this->Uye_model->ekle('arabalar',$data);
				
			if($ekle){

				redirect(base_url('profil'));
			}else{

				echo "Kayıt sırasında hata oluştu.";
			}
			
		}
	}

    public function aracduzenle($id){

        $data['yeni'] = $this->Arac_model->getir($id);
        $this->load->view('aracguncelle_view',$data);
    }

    function guncelle($id){

		$this->Arac_model->kaydet($id);
		redirect('Profil');
	}

    public function sil(){

		$id = $this->uri->segment(3);
		$sil = $this->Arac_model->sil($id);
		if($sil==0){
			redirect('Profil');
		}else{
			echo "başarısız...";
		}
    }
}
