<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ListKekeringan extends CI_Controller {

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
		$data['bencanakekeringan'] = $this->m_bencana1->GetBencanaKekeringan();
		$this->template->load('Umum/static','Umum/listkekeringan', $data);
		
	}

	public function listkekeringandonatur()
	{
		$data['bencanakekeringan'] = $this->m_bencana1->GetBencanaKekeringan();
		$this->template->load('Donatur/staticdonatur','Donatur/listkekeringan', $data);
		
	}

	public function listkekeringanpetugas()
	{
		$data['bencanakekeringan'] = $this->m_bencana1->GetBencanaKekeringan();
		$this->template->load('Petugas/staticpetugas','Petugas/listkekeringan', $data);
		
	}

	public function listkekeringanbdpb()
	{
		$data['bencanakekeringan'] = $this->m_bencana1->GetBencanaKekeringan();
		$this->template->load('BDPB/staticbdpb','BDPB/listkekeringan', $data);
		
	}
}
