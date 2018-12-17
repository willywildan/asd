<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Semuabencana extends CI_Controller {


function __construct(){
	parent:: __construct();
	$this->load->model('m_bencana1');
}

		


	public function index()
	{

		
		$data['bencanagunung'] = $this->m_bencana1->GetBencanaGunung();
		$data['bencanatsunami'] = $this->m_bencana1->GetBencanaTsunami();
		$this->template->load('Umum/static','Umum/semuabencana', $data);
		
	}

	public function semuabencanabdpb()
	{
		$data['bencanagunung'] = $this->m_bencana1->GetBencanaGunung();
		$data['bencanatsunami'] = $this->m_bencana1->GetBencanaTsunami();
		$this->template->load('BDPB/staticbdpb','BDPB/semuabencanabdpb', $data);
		
	}

	public function semuabencanadonatur()
	{
		$data['bencanagunung'] = $this->m_bencana1->GetBencanaGunung();
		$data['bencanatsunami'] = $this->m_bencana1->GetBencanaTsunami();
		$this->template->load('Donatur/staticdonatur','Donatur/semuabencanadonatur', $data);
		
	}

	public function semuabencanapetugas()
	{
		$data['bencanagunung'] = $this->m_bencana1->GetBencanaGunung();
		$data['bencanatsunami'] = $this->m_bencana1->GetBencanaTsunami();
		$this->template->load('Petugas/staticpetugas','Petugas/semuabencanapetugas', $data);
		
	}

	

}
