<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Beranda extends CI_Controller
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
		$this->load->view('panitia/info_tender/beranda/index');
		$this->load->view('template_tender/footer');
		$this->load->view('panitia/info_tender/beranda/ajax');
	}
	public function get_draft_paket_tender_umum()
	{
		$result = $this->M_panitia->gettable_daftar_paket_tender_umum();
		$data = [];
		$no = $_POST['start'];
		foreach ($result as $rs) {
			$row = array();
			$row[] = '<small>' . $rs->tahun_rup . '</small>';
			$row[] = '<small>' . $rs->nama_rup . '</small>';
			$row[] = '<small>' . $rs->nama_departemen . '</small>';
			$row[] = '<small>' . $rs->nama_jenis_pengadaan . '</small>';
			$row[] = '<small>' . "Rp " . number_format($rs->total_hps_rup, 2, ',', '.') . '</small>';
			if ($rs->status_paket_panitia == 1) {
				$row[] = '<small><span class="badge bg-warning text-dark">Draft Paket</span></small>';
			} else {
				$row[] = '<small><span class="badge bg-success text-white">Tender Sedang Berlangsung</span></small>';
			}
			$row[] = '<div class="text-center">
						<a href="javascript:;" class="btn btn-info btn-sm shadow-lg" onclick="byid_paket(' . "'" . $rs->id_url_rup . "'" . ')">
							<i class="fa-solid fa-users-viewfinder"></i>
							<small>Detail</small>
						</a>
					  </div>';
			$data[] = $row;
		}
		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->M_panitia->count_all_daftar_paket_tender_umum(),
			"recordsFiltered" => $this->M_panitia->count_filtered_daftar_paket_tender_umum(),
			"data" => $data
		);
		$this->output->set_content_type('application/json')->set_output(json_encode($output));
	}
}
