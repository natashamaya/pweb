<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Resep extends CI_Controller {

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
		$this->load->view('Daftar_Resep/list');
	}

  public function asinanbogor()
	{
		$this->load->view('Daftar_Resep/asinanbogor');
	}

  public function batagor()
	{
		$this->load->view('Daftar_Resep/batagor');
	}

  public function buburmanado()
	{
		$this->load->view('Daftar_Resep/buburmanado');
	}

  public function ikankuahkuning()
	{
		$this->load->view('Daftar_Resep/ikankuahkuning');
	}

  public function keraktelor()
	{
		$this->load->view('Daftar_Resep/keraktelor');
	}

  public function nasibakepor()
	{
		$this->load->view('Daftar_Resep/nasibakepor');
	}

  public function pallubasa()
	{
		$this->load->view('Daftar_Resep/pallubasa');
	}

  public function rawon()
	{
		$this->load->view('Daftar_Resep/rawon');
	}

  public function rendangdaging()
	{
		$this->load->view('Daftar_Resep/rendangdaging');
	}

  public function sateayam()
	{
		$this->load->view('Daftar_Resep/sateayam');
	}

  public function satelilit()
	{
		$this->load->view('Daftar_Resep/satelilit');
	}

}
