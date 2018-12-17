<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ListGunungMeletus extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct(){
	parent:: __construct();
	$this->load->model('m_bencana1');
}

	public function index()
	{
		$data['bencanagunung'] = $this->m_bencana1->GetBencanaGunung();
		$this->template->load('Umum/static','Umum/listgunungmeletus', $data);
		
	}

	public function listgunungmeletusdonatur()
	{
		$data['bencanagunung'] = $this->m_bencana1->GetBencanaGunung();
		$this->template->load('Donatur/staticdonatur','Donatur/listgunungmeletus', $data);
		
	}

	public function listgunungmeletuspetugas()
	{
		$data['bencanagunung'] = $this->m_bencana1->GetBencanaGunung();
		$this->template->load('Petugas/staticpetugas','Petugas/listgunungmeletus', $data);
		
	}

	public function listgunungmeletusbdpb()
	{
		$data['bencanagunung'] = $this->m_bencana1->GetBencanaGunung();
		$this->template->load('BDPB/staticbdpb','BDPB/listgunungmeletus', $data);
		
	}
}
