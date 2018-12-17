<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_bencana1 extends CI_Model {

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


	public function GetBencanaGunung()
	{
		$bencanagunung = $this->db->query('SELECT * FROM gunung;' );
		return $bencanagunung;

		
		
	}

	public function GetBencanaBanjir()
	{

		$bencanabanjir = $this->db->query('SELECT * FROM banjir;' );
		return $bencanabanjir;
	}

	public function GetBencanaTanah()
	{

		$bencanatanah = $this->db->query('SELECT * FROM tanahlongsor;' );
		return $bencanatanah;
	}

	public function GetBencanaAngin()
	{

		$bencanaangin = $this->db->query('SELECT * FROM angin;' );
		return $bencanaangin;
	}

	public function GetBencanaKebakaran()
	{

		$bencanakebakaran = $this->db->query('SELECT * FROM kebakaran;' );
		return $bencanakebakaran;
	}

	public function GetBencanaGempa()
	{

		$bencanagempa = $this->db->query('SELECT * FROM gempa;' );
		return $bencanagempa;
	}

	public function GetBencanaTsunami()
	{

		$bencanatsunami = $this->db->query('SELECT * FROM tsunami;' );
		return $bencanatsunami;
	}

	public function GetBencanaKekeringan()
	{

		$bencanakekeringan = $this->db->query('SELECT * FROM kekeringan;' );
		return $bencanakekeringan;
	}


}

