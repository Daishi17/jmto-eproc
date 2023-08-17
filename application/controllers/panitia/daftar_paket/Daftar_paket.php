<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Daftar_paket extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url', 'form'));
		$this->load->model('M_rkap/M_rkap');
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
		$this->load->view('panitia/template_menu/header_menu');
		$this->load->view('panitia/daftar_paket/js_header_paket');
		$this->load->view('panitia/daftar_paket/base_url_panitia');
		$this->load->view('panitia/daftar_paket/daftar_paket');
		$this->load->view('administrator/template_menu/footer_menu');
		$this->load->view('panitia/daftar_paket/file_public_daftar_paket');
	}
	public function beranda()
	{
		$this->load->view('panitia/template_menu/header_menu');
		$this->load->view('panitia/daftar_paket/js_header_paket');
		// $this->load->view('panitia/beranda/base_url_panitia');
		$this->load->view('panitia/daftar_paket/daftar_paket');
		$this->load->view('administrator/template_menu/footer_menu');
		$this->load->view('panitia/daftar_paket/file_public_daftar_paket');
	}

	public function form_daftar_paket($id_url_rup)
	{
		$data['row_rup'] = $this->M_rup->get_row_rup($id_url_rup);
		$this->load->view('panitia/template_menu/header_menu');
		$this->load->view('panitia/daftar_paket/js_header_paket');
		$this->load->view('panitia/daftar_paket/base_url_panitia');
		$this->load->view('panitia/daftar_paket/form_daftar_paket', $data);
		$this->load->view('administrator/template_menu/footer_menu');
		$this->load->view('panitia/daftar_paket/file_public_daftar_paket');
	}

	function get_rup_terfinalisasi()
	{
		$result = $this->M_panitia->gettable_rup_paket_final();
		$data = [];
		$no = $_POST['start'];
		foreach ($result as $rs) {
			$row = array();
			$row[] = $rs->tahun_rup;
			$row[] = $rs->nama_rup;
			$row[] = $rs->nama_departemen;
			$row[] = "Rp " . number_format($rs->total_pagu_rup, 2, ',', '.');
			$row[] = $rs->nama_jenis_pengadaan;
			$row[] = $rs->nama_metode_pengadaan;
			$row[] = '<div class="text-center">
					  <a href="javascript:;" class="btn btn-info btn-sm  shadow-lg" onClick="by_id_rup(' . "'" . $rs->id_url_rup . "'" . ')"><i class="fa-solid fa-users-viewfinder px-1"></i>
					  <small>Buat Paket Penyedia</small></a>
					  </div>';
			$data[] = $row;
		}
		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->M_panitia->count_all_rup_paket_final(),
			"recordsFiltered" => $this->M_panitia->count_filtered_rup_paket_final(),
			"data" => $data
		);
		$this->output->set_content_type('application/json')->set_output(json_encode($output));
	}

	function by_id_rup($id_url_rup)
	{
		$response = [
			'row_rup' => $this->M_rup->get_row_rup($id_url_rup),
		];
		$this->output->set_content_type('application/json')->set_output(json_encode($response));
	}
}
