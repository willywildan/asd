<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kelolabencana extends CI_Controller {

  
  public function index()
  {
    $this->template->load('BDPB/staticbdpb','BDPB/kelolabencana');
    
  }
}
