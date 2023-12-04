<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Penilaian_kinerja extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_Dashboard/M_Dashboard');
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
		$this->load->model('M_panitia/M_count');
		$this->load->model('M_panitia/M_jadwal');
		$role = $this->session->userdata('role');
		if (!$role == 1) {
			redirect('auth');
		}
	}


	public function index()
	{
		$data['blm_tervalidasi'] = $this->M_Dashboard->count_rekanan_tervalidasi();
		$data['tervalidasi'] = $this->M_Dashboard->count_rekanan_terundang();
		$data['rup'] = $this->M_Dashboard->count_rup();
		$data['paket_tender'] = $this->M_Dashboard->count_paket_tender();
		$data['paket_tender_berjalan'] = $this->M_Dashboard->count_paket_tender_berjalan();
		$id_manajemenen_user = $this->session->userdata('id_manajemen_user');
		$row_management_user = $this->M_count->get_row_pegawai($id_manajemenen_user);
		$data['count_tender_umum'] = $this->M_count->count_tender_umum_area($row_management_user);
		$data['count_tender_terbatas'] = $this->M_count->count_tender_terbatas_unit_area($row_management_user);
		$this->load->view('template_menu/header_menu');
		$this->load->view('administrator/penilaian_kinerja/index', $data);
		$this->load->view('template_menu/footer_menu');
		$this->load->view('administrator/penilaian_kinerja/ajax', $data);
	}

	function buat_penilaian($id_vendor_mengikuti_paket)
	{
		$data['row_mengikuti_paket'] = $this->M_count->get_row_vendor_mengikuti_paket($id_vendor_mengikuti_paket);
		$this->load->view('template_menu/header_menu');
		$this->load->view('administrator/penilaian_kinerja/buat_penilaian', $data);
		$this->load->view('template_menu/footer_menu');
		$this->load->view('administrator/penilaian_kinerja/ajax', $data);
	}


	public function get_draft_paket_tender_umum()
	{
		$result = $this->M_count->gettable_daftar_paket_tender_umum();
		$data = [];
		$no = $_POST['start'];
		$now = date('Y-m-d H:i');
		foreach ($result as $rs) {
			$jadwal_terakhir = $this->M_jadwal->jadwal_pra_umum_22($rs->id_rup);
			$row = array();
			$row[] = '<small>' . $rs->nama_rup . '</small>';
			$row[] = '<small>' . $rs->nama_usaha . '</small>';
			if ($rs->nilai_penawaran_vendor == NULL) {
				$row[] = '<small class="badge bg-danger">Belum Ada Penawaran</small>';
			} else {
				$row[] = '<small>' . "Rp " . number_format($rs->nilai_penawaran_vendor, 2, ',', '.') . '</small>';
			}
			$row[] = '<small>' . $rs->nama_jenis_pengadaan . '</small>';
			$row[] = '<small>' . $rs->nama_metode_pengadaan . '</small>';
			$row[] = '<small>' . $rs->tahun_rup . '</small>';
			$row[] = '<small>' . $rs->tahun_rup . '</small>';
			$row[] = '<small>' . $rs->tahun_rup . '</small>';
			$row[] = '<small>' . $rs->tahun_rup . '</small>';
			$row[] = '<a href="' . base_url('administrator/penilaian_kinerja/buat_penilaian/' . $rs->id_vendor_mengikuti_paket) . '" class="btn btn-sm btn-info">Penilaian</a>';
			$data[] = $row;
		}
		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->M_count->count_all_daftar_paket_tender_umum(),
			"recordsFiltered" => $this->M_count->count_filtered_daftar_paket_tender_umum(),
			"data" => $data
		);
		$this->output->set_content_type('application/json')->set_output(json_encode($output));
	}
}
