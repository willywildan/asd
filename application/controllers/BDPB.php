<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BDPB extends CI_Controller {

	public function tambahbencana()
	{
		$this->template->load('BDPB/staticbdpb','BDPB/tambahbencana');
		
	}

	public function profil()
	{
		$this->template->load('BDPB/staticbdpb','BDPB/profilfix');
		
	}
}
