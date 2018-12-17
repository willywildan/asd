<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftardonatur extends CI_Controller {

	
	public function index()
	{
		$this->template->load('Petugas/staticpetugas','Petugas/daftardonatur');
		
	}
}
