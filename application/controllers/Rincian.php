<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Rincian extends CI_Controller {

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
	public function index()
	{
		$this->template->load('Umum/static','Umum/rincian');
		
	}

	public function rinciandonatur()
	{
		$this->template->load('Donatur/staticdonatur','Umum/rincian');
		
	}

	public function rincianpetugas()
	{
		$this->template->load('Petugas/staticpetugas','Umum/rincian');
		
	}


	public function rincianbdpb()
	{
		$this->template->load('BDPB/staticbdpb','Umum/rincian');
		
	}


	
}
