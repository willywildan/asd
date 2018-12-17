<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ListAnginTopan extends CI_Controller {


function __construct(){
	parent:: __construct();
	$this->load->model('m_bencana1');
}

	public function index()
	{
		$data['bencanaangin'] = $this->m_bencana1->getBencanaAngin();
		$this->template->load('Umum/static','Umum/listangintopan', $data);
		
	}

	public function listangintopandonatur()
	{
		$data['bencanaangin'] = $this->m_bencana1->getBencanaAngin();
		$this->template->load('Donatur/staticdonatur','Donatur/listangintopan', $data);
		
	}

	public function listangintopanpetugas()
	{
		$data['bencanaangin'] = $this->m_bencana1->getBencanaAngin();
		$this->template->load('Petugas/staticpetugas','Petugas/listangintopan', $data);
		
	}

	public function listangintopanbdpb()
	{
		$data['bencanaangin'] = $this->m_bencana1->getBencanaAngin();
		$this->template->load('BDPB/staticbdpb','BDPB/listangintopan', $data);
		
	}
}
