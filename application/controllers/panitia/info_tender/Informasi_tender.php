<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Informasi_tender extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url', 'form'));
		$this->load->model('M_rkap/M_rkap');
		$this->load->helper('download');
		$this->load->model('M_rup/M_rup');
		$this->load->model('M_departmen/M_departmen');
		$this->load->model('M_section/M_section');
		$this->load->model('M_jenis_pengadaan/M_jenis_pengadaan');
		$this->load->model('M_metode_pengadaan/M_metode_pengadaan');
		$this->load->model('M_jenis_anggaran/M_jenis_anggaran');
		$this->load->model('Wilayah/Wilayah_model');
		$this->load->model('M_jenis_jadwal/M_jenis_jadwal');
		$this->load->model('M_panitia/M_panitia');
	}
	public function index()
	{

		$this->load->view('template_tender/header');
		$this->load->view('panitia/info_tender/informasi_tender/index');
		$this->load->view('template_tender/footer');
		$this->load->view('panitia/info_tender/informasi_tender/ajax');
	}
}
