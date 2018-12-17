<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ListGempaBumi extends CI_Controller {

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
		$data['bencanagempa'] = $this->m_bencana1->getBencanaGempa();
		$this->template->load('Umum/static','Umum/listgempabumi', $data);
		
	}

	public function listgempabumidonatur()
	{
		$data['bencanagempa'] = $this->m_bencana1->getBencanaGempa();
		$this->template->load('Donatur/staticdonatur','Donatur/listgempabumi', $data);
		
	}

	public function listgempabumipetugas()
	{
		$data['bencanagempa'] = $this->m_bencana1->getBencanaGempa();
		$this->template->load('Petugas/staticpetugas','Petugas/listgempabumi', $data);
		
	}


	public function listgempabumibdpb()
	{
		$data['bencanagempa'] = $this->m_bencana1->getBencanaGempa();
		$this->template->load('BDPB/staticbdpb','BDPB/listgempabumi', $data);
		
	}


}
