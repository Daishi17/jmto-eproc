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
	public function informasi_pengadaan($id_url_rup)
	{
		$data['row_rup'] = $this->M_rup->get_row_rup($id_url_rup);

		$data['peserta_tender'] = $this->M_panitia->get_peserta_tender($data['row_rup']['id_rup']);
		$data['dok_lelang'] = $this->M_panitia->get_dokumen_pengadaan($data['row_rup']['id_rup']);
		$data['dok_tambahan'] = $this->M_panitia->result_syarat_tambahan($data['row_rup']['id_rup']);
		$this->load->view('template_tender/header');
		$this->load->view('panitia/info_tender/informasi_tender/base_url_global');
		$this->load->view('panitia/info_tender/informasi_tender/index', $data);
		$this->load->view('template_tender/footer');
		$this->load->view('panitia/info_tender/informasi_tender/ajax');
	}

	public function evaluasi($id_url_rup)
	{
		$data['row_rup'] = $this->M_rup->get_row_rup($id_url_rup);
		$this->load->view('template_tender/header');
		$this->load->view('panitia/info_tender/informasi_tender/evaluasi', $data);
		$this->load->view('template_tender/footer');
		$this->load->view('panitia/info_tender/informasi_tender/ajax');
	}

	public function sanggahan_prakualifikasi($id_url_rup)
	{
		$data['row_rup'] = $this->M_rup->get_row_rup($id_url_rup);
		$this->load->view('template_tender/header');
		$this->load->view('panitia/info_tender/informasi_tender/sanggahan_prakualifikasi', $data);
		$this->load->view('template_tender/footer');
		$this->load->view('panitia/info_tender/informasi_tender/ajax');
	}

	public function sanggahan_akhir($id_url_rup)
	{
		$data['row_rup'] = $this->M_rup->get_row_rup($id_url_rup);
		$this->load->view('template_tender/header');
		$this->load->view('panitia/info_tender/informasi_tender/sanggahan_akhir', $data);
		$this->load->view('template_tender/footer');
		$this->load->view('panitia/info_tender/informasi_tender/ajax');
	}

	public function buka_penawaran($id_url_rup)
	{
		$data['row_rup'] = $this->M_rup->get_row_rup($id_url_rup);
		$this->load->view('template_tender/header_penawaran');
		$this->load->view('panitia/info_tender/informasi_tender/buka_penawaran', $data);
		$this->load->view('template_tender/footer');
		$this->load->view('panitia/info_tender/informasi_tender/ajax');
	}

	public function aanwijzing($id_url_rup)
	{
		$data['row_rup'] = $this->M_rup->get_row_rup($id_url_rup);
		$this->load->view('template_tender/header');
		$this->load->view('panitia/info_tender/informasi_tender/aanwijzing', $data);
		$this->load->view('template_tender/footer');
		$this->load->view('panitia/info_tender/informasi_tender/ajax');
	}

	public function negosiasi($id_url_rup)
	{
		$data['row_rup'] = $this->M_rup->get_row_rup($id_url_rup);
		$this->load->view('template_tender/header');
		$this->load->view('panitia/info_tender/informasi_tender/negosiasi', $data);
		$this->load->view('template_tender/footer');
		$this->load->view('panitia/info_tender/informasi_tender/ajax');
	}
}
