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
		$this->load->view('panitia/beranda/js_header_paket');
		$this->load->view('panitia/beranda/base_url_panitia');
		$this->load->view('panitia/daftar_paket/daftar_paket');
		$this->load->view('panitia/template_menu/footer_menu');
		$this->load->view('panitia/daftar_paket/file_public_daftar_paket');
	}

	public function form_daftar_paket($id_url_rup)
	{
		$data['row_rup'] = $this->M_rup->get_row_rup($id_url_rup);
		$data['jadwal'] = $this->M_panitia->get_jadwal($id_url_rup);
		$data['syarat_izin_usaha_tender'] = $this->M_panitia->get_syarat_izin_usaha_tender($data['row_rup']['id_rup']);
		$this->load->view('administrator/template_menu/header_menu');
		$this->load->view('panitia/daftar_paket/base_url_panitia');
		$this->load->view('panitia/daftar_paket/form_daftar_paket', $data);
		$this->load->view('administrator/template_menu/footer_menu');
		$this->load->view('panitia/daftar_paket/file_public_daftar_paket');
	}

	public function get_rup_terfinalisasi()
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

	public function by_id_rup($id_url_rup)
	{
		$response = [
			'row_rup' => $this->M_rup->get_row_rup($id_url_rup),
		];
		$this->output->set_content_type('application/json')->set_output(json_encode($response));
	}

	public function update_hps()
	{
		$id_rup = $this->input->post('id_rup');
		$total_hps_rup = $this->input->post('total_hps_rup');
		$data = [
			'total_hps_rup' => $total_hps_rup
		];
		$this->M_panitia->update_rup_panitia($id_rup, $data);
		$this->output->set_content_type('application/json')->set_output(json_encode($data));
	}

	public function update_dok_hps()
	{
		$id_rup = $this->input->post('id_rup');
		$nama_rup = $this->input->post('nama_rup');


		$date = date('Y');
		if (!is_dir('file_paket/' . $nama_rup . '-' . $date . '/HPS-' . $date)) {
			mkdir('file_paket/' . $nama_rup . '-' . $date . '/HPS-' . $date, 0777, TRUE);
		}


		$config['upload_path'] = './file_paket/' . $nama_rup . '-' . $date . '/HPS-' . $date;
		$config['allowed_types'] = 'pdf|xlsx|xls';
		$config['max_size'] = 0;

		$this->load->library('upload', $config);

		if ($this->upload->do_upload('file_hps')) {
			$fileData = $this->upload->data();

			$upload = [
				'file_hps' => $fileData['file_name']
			];

			$this->M_panitia->update_rup_panitia($id_rup, $upload);
			$this->output->set_content_type('application/json')->set_output(json_encode('success'));
		} else {
			$this->output->set_content_type('application/json')->set_output(json_encode('gagal'));
		}
	}


	public function simpan_jadwal_20baris()
	{
		$id_rup = $this->input->post('id_rup');
		$id_jadwal_rup = $this->input->post('id_jadwal_rup[]');
		$waktu_mulai = $this->input->post('waktu_mulai[]');
		$waktu_selesai = $this->input->post('waktu_selesai[]');

		$jadwal1 = 	$waktu_mulai[1];
		$jadwal2 = 	$waktu_selesai[1];
		$jadwal3 = 	$waktu_mulai[2];
		$jadwal4 = 	$waktu_selesai[2];
		$jadwal5 = 	$waktu_mulai[3];
		$jadwal6 = 	$waktu_selesai[3];
		$jadwal7 = 	$waktu_mulai[4];
		$jadwal8 = 	$waktu_selesai[4];
		$jadwal9 = 	$waktu_mulai[5];
		$jadwal10 = $waktu_selesai[5];
		$jadwal11 = $waktu_mulai[6];
		$jadwal12 = $waktu_selesai[6];
		$jadwal13 = $waktu_mulai[7];
		$jadwal14 = $waktu_selesai[7];
		$jadwal15 = $waktu_mulai[8];
		$jadwal16 = $waktu_selesai[8];
		$jadwal17 = $waktu_mulai[9];
		$jadwal18 = $waktu_selesai[9];
		$jadwal19 = $waktu_mulai[10];
		$jadwal20 = $waktu_selesai[10];
		$jadwal21 = $waktu_mulai[11];
		$jadwal22 = $waktu_selesai[11];
		$jadwal23 = $waktu_mulai[12];
		$jadwal24 = $waktu_selesai[12];
		$jadwal25 = $waktu_mulai[13];
		$jadwal26 = $waktu_selesai[13];
		$jadwal27 = $waktu_mulai[14];
		$jadwal28 = $waktu_selesai[14];
		$jadwal29 = $waktu_mulai[15];
		$jadwal30 = $waktu_selesai[15];
		$jadwal31 = $waktu_mulai[16];
		$jadwal32 = $waktu_selesai[16];
		$jadwal33 = $waktu_mulai[17];
		$jadwal34 = $waktu_selesai[17];
		$jadwal35 = $waktu_mulai[18];
		$jadwal36 = $waktu_selesai[18];
		$jadwal37 = $waktu_mulai[19];
		$jadwal38 = $waktu_selesai[19];
		$jadwal39 = $waktu_mulai[20];
		$jadwal40 = $waktu_selesai[20];


		if (date('Y-m-d H:i', strtotime($jadwal1)) > date('Y-m-d H:i', strtotime($jadwal2))) {
			$this->session->set_flashdata('jadwal_salah1', '<label id="validasi_c1" class="text-danger"></label>');
		} else {
			$where = [
				'id_jadwal_rup' => $id_jadwal_rup[1]
			];
			$data = [
				'waktu_mulai' => date('Y-m-d H:i', strtotime($jadwal1)),
				// 'jam_mulai' => $time_mulai[1],
				'waktu_selesai' => date('Y-m-d H:i', strtotime($jadwal2)),
				// 'jam_selesai' => $time_selesai[1],
			];
			$data2 = [
				'batas_pendaftaran_tender' => $waktu_selesai[1],
			];

			$this->M_panitia->update_jadwal($data, $where);
			$this->M_panitia->update_rup_panitia($id_rup, $data2);
			$this->output->set_content_type('application/json')->set_output(json_encode('success'));
		}
	}

	public function update_syarat_klasifikasi()
	{
		$id_url_rup = $this->input->post('id_url_rup');
		$syarat_tender_kualifikasi = $this->input->post('syarat_tender_kualifikasi');
		$data = [
			'syarat_tender_kualifikasi' => $syarat_tender_kualifikasi
		];
		$this->M_panitia->update_rup($id_url_rup, $data);
		$response = [
			'row_rup' => $this->M_rup->get_row_rup($id_url_rup),
		];
		$this->output->set_content_type('application/json')->set_output(json_encode($response));
	}

	public function update_syarat_izin_usaha_tender()
	{
		$id_url_rup = $this->input->post('id_url_rup');
		$row_rup = $this->M_rup->get_row_rup($id_url_rup);
		// bagian siup
		$sts_checked_siup = $this->input->post('sts_checked_siup');
		$sts_masa_berlaku_siup = $this->input->post('sts_masa_berlaku_siup');
		$type = $this->input->post('type');
		if ($type == 'sts_checked_siup') {
			$data = [
				'sts_checked_siup' => $sts_checked_siup,
			];
		} else if ($type == 'sts_masa_berlaku_siup') {
			if ($sts_masa_berlaku_siup == 1) {
				$data = [
					'sts_masa_berlaku_siup' => $sts_masa_berlaku_siup
				];
			} else {
				$data = [
					'sts_masa_berlaku_siup' => $sts_masa_berlaku_siup,
					'tgl_berlaku_siup' => NULL
				];
			}
		} else {
		}
		$this->M_panitia->update_syarat_izin_usaha_tender($row_rup['id_rup'], $data);
		$response = [
			'row_syarat_izin_usah_tender' => $this->M_panitia->get_syarat_izin_usaha_tender($row_rup['id_rup'])
		];
		$this->output->set_content_type('application/json')->set_output(json_encode($response));
	}
}
