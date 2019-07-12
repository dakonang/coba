<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Danangrifai extends CI_Controller {
	
	public function __construct()
        {
                parent::__construct();
                $this->load->model('model_profil');
                
        }
    
    

	public function index()
	{
		$this->load->helper(array('form', 'url'));
		$this->load->library('form_validation');
		$this->form_validation->set_rules('nama', 'nama', 'trim|required|strip_tags|alpha_numeric|max_length[50]', [
		'required' => 'nama  tidak boleh kosong',
		'max_length' => 'maksimal 50 karakter a-z 0-9',
		'alpha_numeric' => 'hanya karakter a-z 0-9 yang di bolehkan'
		] );
		$this->form_validation->set_rules('email', 'email', 'trim|required|valid_email', [
		'required' => ' email tidak boleh kosong',
		'valid_email' => 'format email salah'
		] );
		$this->form_validation->set_rules('telephone', 'telephone', 'trim|strip_tags|required|numeric|max_length[15]', [
		'required' => 'telephone  tidak boleh kosong',
		'max_length' => 'maksimal 15 karakter 0-9',
		'numeric' => 'hanya karakter 0-9 yang di bolehkan'
		] );
		$this->form_validation->set_rules('pesan', 'pesan', 'trim|htmlentities|required|alpha_numeric', [
		'required' => 'pesan  tidak boleh kosong',
		'alpha_numeric' => 'hanya karakter a-z 0-9 yang di bolehkan'
		] );
		if ($this->form_validation->run() == FALSE) { 
			//$data['title'] = "danang rifai";
			$this->load->view('home');
			}else{
				$this->send_message();
				
				}
	}
	
	public function send_message()
	{
		$email= trim(strip_tags($this->input->post('email'),true));
		$nama=trim(strip_tags($this->input->post('nama'),true));
		$telephone=trim(strip_tags($this->input->post('telephone'),true));
		$pesan=trim(strip_tags($this->input->post('pesan'),true));
		$waktu = date('Y-m-d h:i:s');
		$data=array('nama'=>$nama,'email'=>$email,'telephone'=>$telephone,'pesan'=>$pesan, 'waktu'=>$waktu);
		$input = $this->model_profil->input($data);
		if($input){
		$this->session->set_flashdata('alert', '<div class="alert alert-warning alert-dismissible fade show" role="alert">pesan sedah dirkirim<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
		redirect('danangrifai');
		}
	}
	
	
}


