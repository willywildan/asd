<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ListBanjir extends CI_Controller {

	

	function __construct(){
	parent:: __construct();
	$this->load->model('m_bencana1');
}

	public function index()
	{
		

		$data['bencanabanjir'] = $this->m_bencana1->getBencanaBanjir();
		$this->template->load('Umum/static','Umum/listbanjir', $data);
		
	}

		public function listbanjirdonatur()
	{
		$data['bencanabanjir'] = $this->m_bencana1->getBencanaBanjir();
		$this->template->load('Donatur/staticdonatur','Donatur/listbanjir', $data);
		
	}

		public function listbanjirpetugas()
	{
		$data['bencanabanjir'] = $this->m_bencana1->getBencanaBanjir();
		$this->template->load('Petugas/staticpetugas','Petugas/listbanjir', $data);
		
	}

		public function listbanjirbdpb()
	{
		$data['bencanabanjir'] = $this->m_bencana1->getBencanaBanjir();
		$this->template->load('BDPB/staticbdpb','BDPB/listbanjir', $data);
		
	}


}
