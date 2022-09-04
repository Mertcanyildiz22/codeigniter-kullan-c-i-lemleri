<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Giris extends CI_Controller {

	public function index()
	{
		$this->load->view('giris_view');
	}

	public function girisyap(){

		if($this->input->method() == "post"){

			$this->form_validation->set_rules('sifre','sifreniz','trim|required');
			$this->form_validation->set_rules('eposta','E-Posta adresi,','trim|required|valid_email');

			if($this->form_validation->run() == FALSE){

				echo validation_errors();
			}else{

				$query = $this->Uye_model->getir([
					'sifre' => sha1(md5(strip_tags(trim($this->input->post('sifre',true))))),
					'eposta'=> strip_tags(trim($this->input->post('eposta',true)))
				],'uyeler');

				if($query){


					$this->session->set_userdata([
						'oturum' => true,
						'id'     => $query->id,
						'kadi'   => $query->kadi,
						'eposta' => $query->eposta,
						'sifre'  => $query->sifre  
					]);

					redirect(base_url('Profil'));
				}else{
					echo "Bilgiler yanlış";
				}
			}
		}
	}

	public function sifreunuttum(){

		$this->load->view('unuttum_view');
	}

	public function unuttum(){

		$eposta = $this->input->post('eposta');
		$this->load->model('Sifreunuttum_model');
		$check = $this->Sifreunuttum_model->mailvarmi($eposta);

		if($check){

			$hash = rand(111111,999999);
			$this->Sifreunuttum_model->setguncelle(array('security'=>$hash),$eposta);

			$mesaj="Şifrenizi Yenileme Linki.Link : <a href='>".base_url('sifremiunuttum/'.$check->id.'/'.$hash.''). "'>LINK</a>";

			$this->load->library('email');
			$config['protocol']   = 'smtp';
			$config['smtp_port']  = '465';
			$config['smtp_host']  = 'ssl://smtp.gmail.com';
			$config['smtp_user']  = "********";
			$config['smtp_passs'] = "********";
			$config['charset']    = "utf-8";
			$config['mailtype']   = "htm";
			$config['newline']    = "\r\n";

			$this->email->initialize($config);

			$this->email->from('my2672228@gmail.com','şifre yenileme.');
			$this->email->to($eposta);
			$this->email->subject('Şifre yenileme kodu');
			$this->email->message($mesaj);

			$send = $this->email->send();
		if($send){

			echo "email gönderildi.";
		}else{

			echo "email gönderilmedi.";
			echo "<hr>";
			echo $this->email->print_debugger();
		}

			//echo "şifre gönderildi.";
		}else{
			echo "E-posta adresi bulunamadı...";
		}	

	}

	public function deneme(){$this->load->view('unuttum');}

	public function sifremiunuttum($id=null,$security=null){

		$this->load->model('Sifreunuttum_model');
		$check = $this->Sifreunuttum_model->varmi('id',$id);
		//$chech2($this->Sifreunuttum_model->varmi())
		if($check){

			$securitynumber=$check->security;
			if($securitynumber == $security){

				$data['id']=$check->id;	
				$this->load->view('unuttum',$data);
			}else{
				redirect('Kayit');
			}
		}else{

			redirect('Kayit');
		}
	}

	public function unuttumupdate($id){

		$this->load->model('Sifreunuttum_model');
		$sifre1=$this->input->post('sifre1');
		$sifre2=$this->input->post('sifre2');
		if($sifre1 == $sifre2){

			$data=array('sifre' =>md5($sifre1));
			$this->Sifreunuttum_model->sonupdate($data,$id);
			echo "Şifreniz başarı ile değiştirildi.";
			redirect('giris');
		}else{

			redirect($_SERVER['HTTP_REFERER']);
		}
	}
}