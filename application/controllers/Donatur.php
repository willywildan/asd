<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Donatur extends CI_Controller {

	public function profil()
	{
		$this->template->load('Donatur/staticdonatur','Donatur/profilfix');
		
	}
}
