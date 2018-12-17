<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Petugas extends CI_Controller {

	public function validasibencana()
	{
		$this->template->load('Petugas/staticpetugas','Petugas/validasi');
		
	}

	public function validasilanjut()
	{
		$this->template->load('Petugas/staticpetugas','Petugas/validasilanjut');
		
	}


	public function profil()
	{
		$this->template->load('Petugas/staticpetugas','Petugas/profilfix');
		
	}

}
