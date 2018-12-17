<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

function __construct(){
	parent:: __construct();
	$this->load->model('m_bencana1');
}


	public function index()
	{
		$data['bencanatanah'] = $this->m_bencana1->GetBencanaTanah();
		$this->template->load('Umum/static','Umum/utama',$data);
		
	}


	public function donatur()
	{
		$data['bencanatanah'] = $this->m_bencana1->GetBencanaTanah();
		$this->template->load('Donatur/staticdonatur','Donatur/utama',$data);
		
	}

	public function bdpb()
	{
		
		$this->template->load('BDPB/staticbdpb','BDPB/utamabdpb');
		
	}

	public function petugas(){
		$this->template->load('Petugas/staticpetugas','Petugas/utamapetugas');
		
	}
}
