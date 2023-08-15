<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sirup_rup extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->helper(array('url', 'form'));
		$this->load->model('M_rkap/M_rkap');
		$this->load->model('M_ruas/M_ruas');
		$this->load->model('M_rup/M_rup');
		$this->load->model('M_departmen/M_departmen');
		$this->load->model('M_section/M_section');
		$this->load->model('M_jenis_pengadaan/M_jenis_pengadaan');
		$this->load->model('M_metode_pengadaan/M_metode_pengadaan');
		$this->load->model('M_jenis_anggaran/M_jenis_anggaran');
		$this->load->view('administrator/sirup_rup/file_public_rup');
		$this->load->model('Wilayah/Wilayah_model');
	}

	public function index()
	{
		$this->load->view('administrator/template_menu/header_menu');
		$this->load->view('administrator/template/si_rup/js_header_rup');
		$this->load->view('administrator/sirup_rup/base_url'); //ini untuk base_url page rup
		$this->load->view('administrator/sirup_rup/index');
		$this->load->view('administrator/template_menu/footer_menu');
		$this->load->view('administrator/sirup_rup/file_public_rup');
	}

	function get_rup()
	{
		$result = $this->M_rup->gettable_rup();
		$data = [];
		$no = $_POST['start'];
		foreach ($result as $rs) {
			$row = array();
			$row[] = $rs->kode_rup;
			$row[] = $rs->tahun_rup;
			$row[] = $rs->nama_rup;
			$row[] = $rs->nama_departemen;
			$row[] = "Rp " . number_format($rs->total_pagu_rup, 2, ',', '.');
			if ($rs->sts_rup == 0) {
				$row[] = '<small><span class="badge bg-danger text-white">Draft RUP</span></small>';
			} else {
				$row[] = '<small><span class="badge bg-success text-white">Finalisasi RUP</span></small>';
			}
			if ($rs->sts_rup == 0) {
				$row[] = '<div class="text-center">
            	<a href="javascript:;" class="btn btn-info btn-sm shadow-lg" onClick="by_id_rup(' . "'" . $rs->id_url_rup . "','detail_rup'" . ')"><i class="fa-solid fa-square-plus px-1"></i> <small>Detail</small></a>
				<a href="javascript:;" class="btn btn-success btn-sm shadow-lg" onClick="by_id_rup(' . "'" . $rs->id_url_rup . "','finalisasi'" . ')"><i class="fa-regular fa-circle-up px-1"></i> <small>Finalisasi</small></a>
				</div>';
			} else {
				$row[] = '<div class="text-center">
				<button type="button" class="btn btn-info btn-sm shadow-lg" disabled>
				<i class="fa-solid fa-square-plus px-1"></i> 
					<small>Detail</small>
				</button>
				<button type="button" class="btn btn-success btn-sm shadow-lg" disabled>
				<i class="fa-regular fa-circle-up px-1"></i>
					<small>Finalisasi</small>
				</button>
			</div>';
			}
			$data[] = $row;
		}
		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->M_rup->count_all_rup(),
			"recordsFiltered" => $this->M_rup->count_filtered_rup(),
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

	function finalisasi_rup()
	{
		$id_url_rup = $this->input->post('random_kode');
		$where = [
			'id_url_rup' => $id_url_rup
		];
		$data = [
			'sts_rup' => 1,
			'sts_rup_buat_paket' => 0
		];
		$this->M_rup->update_rup($data, $where);
		$response = [
			'success' => 'Berhasil Di Finalisasi'
		];
		$this->output->set_content_type('application/json')->set_output(json_encode($response));
	}
	function get_rkap()
	{
		$result = $this->M_rkap->gettable_rkap();
		$data = [];
		$no = $_POST['start'];
		foreach ($result as $rs) {
			$row = array();
			$row[] = $rs->tahun_rkap . '.' . $rs->kode_departemen . '.' . $rs->kode_rkap;
			$row[] = $rs->tahun_rkap;
			$row[] = $rs->nama_program_rkap;
			$row[] = $rs->nama_departemen;
			$row[] = "Rp " . number_format($rs->total_pagu_rkap, 2, ',', '.');
			if ($rs->sts_rkap_ke_rup == 0) {
				$row[] = '<small><span class="badge bg-danger text-white">Belum Buat Rup</span></small>';
			} else {
				$row[] = '<small><span class="badge bg-success text-white">Sudah Buat Rup</span></small>';
			}
			if ($rs->sts_rkap_ke_rup == 0) {
				$row[] = '<div class="text-center">
            <a href="javascript:;" class="btn btn-info btn-sm shadow-lg" onClick="by_id_buat_rup(' . "'" . $rs->id_url_rkap . "','buat_rup'" . ')"><i class="fa-solid fa-square-plus px-1"></i> Buat Rup</a></div>';
			} else {
				$row[] = '<div class="text-center">
				<button type="button" class="btn btn-info btn-sm shadow-lg" disabled>
					<i class="fa-solid fa-square-plus px-1"></i>
					<small>Buat Rup</small>
				</button>
			</div>';
			}
			$data[] = $row;
		}
		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->M_rkap->count_all_rkap(),
			"recordsFiltered" => $this->M_rkap->count_filtered_rkap(),
			"data" => $data
		);
		$this->output->set_content_type('application/json')->set_output(json_encode($output));
	}

	function prosess_rkap($id_url_rkap)
	{
		$this->session->set_userdata('id_url_rkap', $id_url_rkap);
		$data = [
			'linking' => 'success'
		];
		$this->output->set_content_type('application/json')->set_output(json_encode($data));
	}

	// INI UTNUK CREATE RUP
	public function buat_rup()
	{
		$id_url_rkap = $this->session->userdata('id_url_rkap');
		if ($id_url_rkap) {
			$data['get_row_rkap'] = $this->M_rkap->get_row_rkap($id_url_rkap);
			$id_departemen = $data['get_row_rkap']['id_departemen'];
			$data['result_ruas_by_departemnt'] = $this->M_section->get_section($id_departemen);
		} else {
			$data['get_row_rkap'] = '';
		}
		$data['result_departemen'] = $this->M_departmen->get_result_departemen();
		$data['result_section'] = $this->M_section->get_result_section();
		$data['result_jenis_pengadaan'] = $this->M_jenis_pengadaan->get_result_jenis_pengadaan();
		$data['result_metode_pengadaan'] = $this->M_metode_pengadaan->get_result_metode_pengadaan();
		$data['result_jenis_anggaran'] = $this->M_jenis_anggaran->get_result_jenis_anggaran();
		$data['provinsi']  = $this->Wilayah_model->getProvinsi();
		$this->load->view('administrator/template_menu/header_menu');
		$this->load->view('administrator/template/si_rup/js_header_rup');
		$this->load->view('administrator/sirup_rup/base_url'); //ini untuk base_url page rup
		$this->load->view('administrator/sirup_rup/form_rup', $data);
		$this->load->view('administrator/template_menu/footer_menu');
		$this->load->view('administrator/sirup_rup/file_public_rup');
	}

	public function buat_rup_non_rkap()
	{
		$id_url_rkap = $this->session->unset_userdata('id_url_rkap');
		if ($id_url_rkap) {
			$data['get_row_rkap'] = $this->M_rkap->get_row_rkap($id_url_rkap);
		} else {
			$data['get_row_rkap'] = '';
		}
		$data['result_departemen'] = $this->M_departmen->get_result_departemen();
		$data['result_section'] = $this->M_section->get_result_section();
		$data['result_jenis_pengadaan'] = $this->M_jenis_pengadaan->get_result_jenis_pengadaan();
		$data['result_metode_pengadaan'] = $this->M_metode_pengadaan->get_result_metode_pengadaan();
		$data['result_jenis_anggaran'] = $this->M_jenis_anggaran->get_result_jenis_anggaran();
		$data['ruas_lokasi'] = $this->M_ruas->get_result_ruas();
		$data['provinsi']  = $this->Wilayah_model->getProvinsi();
		$this->load->view('administrator/template_menu/header_menu');
		$this->load->view('administrator/template/si_rup/js_header_rup');
		$this->load->view('administrator/sirup_rup/base_url'); //ini untuk base_url page rup
		$this->load->view('administrator/sirup_rup/form_rup', $data);
		$this->load->view('administrator/template_menu/footer_menu');
		$this->load->view('administrator/sirup_rup/file_public_rup');
	}

	public function ubah_rup($id_url_rup)
	{
		$row_rup = $this->M_rup->get_row_rup($id_url_rup);
		$data['row_rup'] = $this->M_rup->get_row_rup($id_url_rup);
		if (!$row_rup['id_rkap']) {
			$data['get_row_rkap'] = '';
		} else {
			$row_rkap = $this->M_rkap->get_row_rkap_by_id($row_rup['id_rkap']);
			$data['get_row_rkap'] = $this->M_rkap->get_row_rkap($row_rkap['id_url_rkap']);
			$id_departemen = $data['row_rup']['id_departemen'];
			$data['result_ruas_by_departemnt'] = $this->M_section->get_section($id_departemen);
		}
		$data['ruas_rup'] = $this->M_rup->get_ruas_by_id_rup($row_rup['id_rup']);
		$data['result_departemen'] = $this->M_departmen->get_result_departemen();
		$data['result_section'] = $this->M_section->get_result_section();
		$data['result_jenis_pengadaan'] = $this->M_jenis_pengadaan->get_result_jenis_pengadaan();
		$data['result_metode_pengadaan'] = $this->M_metode_pengadaan->get_result_metode_pengadaan();
		$data['result_jenis_anggaran'] = $this->M_jenis_anggaran->get_result_jenis_anggaran();
		$data['provinsi']  = $this->Wilayah_model->getProvinsi();
		$this->load->view('administrator/template_menu/header_menu');
		$this->load->view('administrator/template/si_rup/js_header_rup');
		$this->load->view('administrator/sirup_rup/base_url'); //ini untuk base_url page rup
		$this->load->view('administrator/sirup_rup/form_rup_edit', $data);
		$this->load->view('administrator/template_menu/footer_menu');
		$this->load->view('administrator/sirup_rup/file_public_rup_edit');
	}

	function get_kode_rup()
	{
		$table = "tbl_rup";
		$field = "kode_urut_rup";
		$text = date('Y') . '.';
		$get_all_rup = $this->M_rup->get_all_rup();
		if (!$get_all_rup) {
			$kode_terakhirnya = $this->M_rup->get_kode_rup($text, $table, $field);
			$no_urut = (int) substr($kode_terakhirnya, -4, 4);
			$no_urut++;
			$hasilnya = $text . sprintf('%04s', $no_urut);
		} else {
			$kode_terakhirnya = $this->M_rup->get_kode_rup($text, $table, $field);
			$no_urut = (int) substr($kode_terakhirnya, -4, 4);
			$no_urut++;
			$hasilnya = $text . sprintf('%04s', $no_urut);
		}
		$id_url_rkap = $this->session->userdata('id_url_rkap');
		if ($id_url_rkap) {
			$get_row_rkap = $this->M_rkap->get_row_rkap($id_url_rkap);
			$id_departemen = $get_row_rkap['id_departemen'];
			$get_row_departemen = $this->M_departmen->get_row_departemen($id_departemen);
			$response = [
				'kode_urut_rup' => $hasilnya,
				'get_row_departemen' => $get_row_departemen
			];
		} else {
			$get_row_departemen = '';
		}
		$response = [
			'kode_urut_rup' => $hasilnya,
			'get_row_departemen' => $get_row_departemen
		];
		$this->output->set_content_type('application/json')->set_output(json_encode($response));
	}

	function get_kode_departemen()
	{
		$table = "tbl_rup";
		$field = "kode_urut_rup";
		$text = date('Y') . '.';
		$get_all_rup = $this->M_rup->get_all_rup();
		if (!$get_all_rup) {
			$kode_terakhirnya = $this->M_rup->get_kode_rup($text, $table, $field);
			$no_urut = (int) substr($kode_terakhirnya, -4, 4);
			$no_urut++;
			$hasilnya = $text . sprintf('%04s', $no_urut);
		} else {
			$kode_terakhirnya = $this->M_rup->get_kode_rup($text, $table, $field);
			$no_urut = (int) substr($kode_terakhirnya, -4, 4);
			$no_urut++;
			$hasilnya = $text . sprintf('%04s', $no_urut);
		}
		$id_departemen = $this->input->post('id_departemen');
		$get_row_departemen = $this->M_departmen->get_row_departemen($id_departemen);
		$response = [
			'kode_urut_rup' => $hasilnya,
			'get_row_departemen' => $get_row_departemen,
		];
		$this->output->set_content_type('application/json')->set_output(json_encode($response));
	}

	function get_kode_section()
	{
		$table = "tbl_rup";
		$field = "kode_urut_rup";
		$text = date('Y') . '.';
		$get_all_rup = $this->M_rup->get_all_rup();
		if (!$get_all_rup) {
			$kode_terakhirnya = $this->M_rup->get_kode_rup($text, $table, $field);
			$no_urut = (int) substr($kode_terakhirnya, -4, 4);
			$no_urut++;
			$hasilnya = $text . sprintf('%04s', $no_urut);
		} else {
			$kode_terakhirnya = $this->M_rup->get_kode_rup($text, $table, $field);
			$no_urut = (int) substr($kode_terakhirnya, -4, 4);
			$no_urut++;
			$hasilnya = $text . sprintf('%04s', $no_urut);
		}
		$id_departemen = $this->input->post('id_departemen');
		$id_section = $this->input->post('id_section');
		$get_row_departemen = $this->M_departmen->get_row_departemen($id_departemen);
		$get_row_section = $this->M_section->get_row_section($id_section);
		$response = [
			'kode_urut_rup' => $hasilnya,
			'get_row_departemen' => $get_row_departemen,
			'get_row_section' => $get_row_section
		];
		$this->output->set_content_type('application/json')->set_output(json_encode($response));
	}

	function get_kode_jenis_anggaran()
	{
		$table = "tbl_rup";
		$field = "kode_urut_rup";
		$text = date('Y') . '.';
		$get_all_rup = $this->M_rup->get_all_rup();
		if (!$get_all_rup) {
			$kode_terakhirnya = $this->M_rup->get_kode_rup($text, $table, $field);
			$no_urut = (int) substr($kode_terakhirnya, -4, 4);
			$no_urut++;
			$hasilnya = $text . sprintf('%04s', $no_urut);
		} else {
			$kode_terakhirnya = $this->M_rup->get_kode_rup($text, $table, $field);
			$no_urut = (int) substr($kode_terakhirnya, -4, 4);
			$no_urut++;
			$hasilnya = $text . sprintf('%04s', $no_urut);
		}
		$id_departemen = $this->input->post('id_departemen');
		$id_section = $this->input->post('id_section');
		$id_jenis_anggaran = $this->input->post('id_jenis_anggaran');
		$get_row_departemen = $this->M_departmen->get_row_departemen($id_departemen);
		$get_row_section = $this->M_section->get_row_section($id_section);
		$get_row_jenis_anggaran = $this->M_jenis_anggaran->get_row_jenis_anggaran($id_jenis_anggaran);
		$response = [
			'kode_urut_rup' => $hasilnya,
			'get_row_departemen' => $get_row_departemen,
			'get_row_section' => $get_row_section,
			'get_row_jenis_anggaran' => $get_row_jenis_anggaran
		];
		$this->output->set_content_type('application/json')->set_output(json_encode($response));
	}
	function simpan_rup()
	{
		$id_rkap = $this->input->post('id_rkap');
		$type_button = $this->input->post('type_button');
		$kode_urut_rup = $this->input->post('kode_urut_rup');
		$tahun_rup = $this->input->post('tahun_rup');
		$id_departemen = $this->input->post('id_departemen');
		$id_section = $this->input->post('id_section');
		$nama_rup = $this->input->post('nama_rup');
		$deskripsi_rup = $this->input->post('deskripsi_rup');
		$id_provinsi = $this->input->post('id_provinsi');
		$id_kabupaten = $this->input->post('id_kabupaten');
		$detail_lokasi_rup = $this->input->post('detail_lokasi_rup');
		$id_ruas = $this->input->post('id_ruas');
		$id_jenis_pengadaan = $this->input->post('id_jenis_pengadaan');
		$id_metode_pengadaan = $this->input->post('id_metode_pengadaan');
		$id_jenis_anggaran = $this->input->post('id_jenis_anggaran');
		$kualifikasi_usaha = $this->input->post('kualifikasi_usaha');
		$jenis_produk = $this->input->post('jenis_produk');
		$status_pencatatan = $this->input->post('status_pencatatan');
		$persen_pencatatan = $this->input->post('persen_pencatatan');
		$jangka_waktu_mulai_pelaksanaan = $this->input->post('jangka_waktu_mulai_pelaksanaan');
		$jangka_waktu_selesai_pelaksanaan = $this->input->post('jangka_waktu_selesai_pelaksanaan');
		$jangka_waktu_hari_pelaksanaan = $this->input->post('jangka_waktu_hari_pelaksanaan');
		$total_pagu_rup = $this->input->post('total_pagu_rup');
		$nilai_pencatatan = $this->input->post('nilai_pencatatan');
		$this->form_validation->set_rules('id_ruas', 'Ruas', 'required|trim', ['required' => 'Ruas Wajib Diisi!']);
		$this->form_validation->set_rules('detail_lokasi_rup', 'Detail Lokasi', 'required|trim', ['required' => 'Detil Lokasi Wajib Diisi!']);
		$this->form_validation->set_rules('tahun_rup', 'Tahun', 'required|trim', ['required' => 'Tahun Wajib Diisi!']);
		$this->form_validation->set_rules('id_departemen', 'Nama Departemen', 'required|trim', ['required' => 'Nama Departemen  Wajib Diisi!']);
		$this->form_validation->set_rules('id_section', 'Nama Section', 'required|trim', ['required' => 'Nama Section  Wajib Diisi!']);
		$this->form_validation->set_rules('nama_rup', 'Nama Rup', 'required|trim', ['required' => 'Nama Rup  Wajib Diisi!']);
		$this->form_validation->set_rules('deskripsi_rup', 'Deskripsi Rup', 'required|trim', ['required' => 'Deskripsi Rup  Wajib Diisi!']);
		$this->form_validation->set_rules('id_provinsi', 'Nama Provinsi', 'required|trim', ['required' => 'Nama Provinsi  Wajib Diisi!']);
		$this->form_validation->set_rules('id_kabupaten', 'Nama Kabupaten', 'required|trim', ['required' => 'Nama Kabupaten  Wajib Diisi!']);
		$this->form_validation->set_rules('id_jenis_pengadaan', 'Nama Jenis Pengadaan', 'required|trim', ['required' => 'Jenis Pengadaan  Wajib Diisi!']);
		$this->form_validation->set_rules('id_metode_pengadaan', 'Nama Metode Pengadaan', 'required|trim', ['required' => 'Nama Metode Pengadaan  Wajib Diisi!']);
		$this->form_validation->set_rules('id_jenis_anggaran', 'Nama Jenis Anggaran', 'required|trim', ['required' => 'Nama Jenis Anggaran  Wajib Diisi!']);
		$this->form_validation->set_rules('kualifikasi_usaha', 'Kualifikasi Usaha', 'required|trim', ['required' => 'Kualifikasi Usaha  Wajib Diisi!']);
		$this->form_validation->set_rules('jenis_produk', 'Jenis Produk', 'required|trim', ['required' => 'Jenis Produk  Wajib Diisi!']);
		$this->form_validation->set_rules('status_pencatatan', 'Status Pencatatan', 'required|trim', ['required' => 'Status Pencatatan  Wajib Diisi!']);
		$this->form_validation->set_rules('persen_pencatatan', 'Persentase', 'required|trim', ['required' => 'Persentase  Wajib Diisi!']);
		$this->form_validation->set_rules('jangka_waktu_mulai_pelaksanaan', 'Jangka Mulai Pelaksanaan', 'required|trim', ['required' => 'Jangka Mulai Pelaksanaan  Wajib Diisi!']);
		$this->form_validation->set_rules('jangka_waktu_selesai_pelaksanaan', 'Jangka Waktu Selesai Pelaksanaan', 'required|trim', ['required' => 'Jangka Waktu Selesai Pelaksanaan  Wajib Diisi!']);
		$this->form_validation->set_rules('jangka_waktu_hari_pelaksanaan', 'Jangka Waktu Hari', 'required|trim', ['required' => 'Jangka Waktu Hari  Wajib Diisi!']);
		$this->form_validation->set_rules('total_pagu_rup', 'Total Pagu Rup', 'required|trim', ['required' => 'Total Pagu Rup  Wajib Diisi!']);
		if ($this->form_validation->run() == false) {
			$response = [
				'error' => [
					'tahun_rup' => form_error('tahun_rup'),
					'detail_lokasi_rup' => form_error('detail_lokasi_rup'),
					'id_departemen' => form_error('id_departemen'),
					'id_section' => form_error('id_section'),
					'nama_rup' => form_error('nama_rup'),
					'deskripsi_rup' => form_error('deskripsi_rup'),
					'id_provinsi' => form_error('id_provinsi'),
					'id_kabupaten' => form_error('id_kabupaten'),
					'id_jenis_pengadaan' => form_error('id_jenis_pengadaan'),
					'id_metode_pengadaan' => form_error('id_metode_pengadaan'),
					'id_jenis_anggaran' => form_error('id_jenis_anggaran'),
					'kualifikasi_usaha' => form_error('kualifikasi_usaha'),
					'jenis_produk' => form_error('jenis_produk'),
					'status_pencatatan' => form_error('status_pencatatan'),
					'persen_pencatatan' => form_error('persen_pencatatan'),
					'jangka_waktu_mulai_pelaksanaan' => form_error('jangka_waktu_mulai_pelaksanaan'),
					'jangka_waktu_selesai_pelaksanaan' => form_error('jangka_waktu_selesai_pelaksanaan'),
					'jangka_waktu_hari_pelaksanaan' => form_error('jangka_waktu_hari_pelaksanaan'),
					'total_pagu_rup' => form_error('total_pagu_rup'),
					'id_ruas' => form_error('id_ruas'),
				],
			];
			$this->output->set_content_type('application/json')->set_output(json_encode($response));
		} else {
			if ($type_button == 'tambah') {
				$row_jenis_anggaran = $this->M_jenis_anggaran->get_row_jenis_anggaran($id_jenis_anggaran);
				$row_departemen = $this->M_departmen->get_row_departemen($id_departemen);
				$id = $this->uuid->v4();
				$id = str_replace('-', '', $id);
				$data  = array(
					'id_url_rup' => $id,
					'kode_rup' => $row_jenis_anggaran['kode_string'] . '.' . $row_departemen['kode_departemen'] . '.' . $kode_urut_rup,
					'kode_urut_rup' => $kode_urut_rup,
					'id_jenis_pengadaan' => $id_jenis_pengadaan,
					'id_metode_pengadaan' => $id_metode_pengadaan,
					'id_jenis_anggaran' => $id_jenis_anggaran,
					'id_departemen' => $id_departemen,
					'id_section' => $id_section,
					'id_rkap' => $id_rkap,
					'kode_urut_rup' => $kode_urut_rup,
					'tahun_rup' => $tahun_rup,
					'nama_rup' => $nama_rup,
					'deskripsi_rup' => $deskripsi_rup,
					'kualifikasi_usaha' => $kualifikasi_usaha,
					'jenis_produk' => $jenis_produk,
					'status_pencatatan' => $status_pencatatan,
					'persen_pencatatan' => $persen_pencatatan,
					'nilai_pencatatan' => $nilai_pencatatan,
					'jangka_waktu_mulai_pelaksanaan' => $jangka_waktu_mulai_pelaksanaan,
					'jangka_waktu_selesai_pelaksanaan' => $jangka_waktu_selesai_pelaksanaan,
					'jangka_waktu_hari_pelaksanaan' => $jangka_waktu_hari_pelaksanaan,
					'total_pagu_rup' => $total_pagu_rup,
					'user_created' => $this->session->userdata('nama_pegawai'),
					'id_provinsi' => $id_provinsi,
					'id_kabupaten' => $id_kabupaten,
					'detail_lokasi_rup' => $detail_lokasi_rup,
					'id_ruas' => $id_ruas,

				);
				$this->db->insert('tbl_rup', $data);
				if (!$id_rkap) {
				} else {
					$where = [
						'id_rkap' => $id_rkap
					];
					$upload = [
						'sts_rkap_ke_rup' => 1,
					];
					$this->M_rkap->update_rkap($upload, $where);
				}
				$response = [
					'success' => 'success'
				];
				$this->output->set_content_type('application/json')->set_output(json_encode($response));
			} else {
				$id_url_rup = $this->input->post('random_kode');
				$row_rup = $this->M_rup->get_row_rup($id_url_rup);
				$row_jenis_anggaran = $this->M_jenis_anggaran->get_row_jenis_anggaran($id_jenis_anggaran);
				$row_departemen = $this->M_departmen->get_row_departemen($id_departemen);
				$where_rup = [
					'id_rup' => $row_rup['id_rup']
				];
				$data  = array(
					'kode_rup' => $row_jenis_anggaran['kode_string'] . '.' . $row_departemen['kode_departemen'] . '.' . $kode_urut_rup,
					'kode_urut_rup' => $kode_urut_rup,
					'id_jenis_pengadaan' => $id_jenis_pengadaan,
					'id_metode_pengadaan' => $id_metode_pengadaan,
					'id_jenis_anggaran' => $id_jenis_anggaran,
					'id_departemen' => $id_departemen,
					'id_section' => $id_section,
					'id_rkap' => $id_rkap,
					'kode_urut_rup' => $kode_urut_rup,
					'tahun_rup' => $tahun_rup,
					'nama_rup' => $nama_rup,
					'deskripsi_rup' => $deskripsi_rup,
					'kualifikasi_usaha' => $kualifikasi_usaha,
					'jenis_produk' => $jenis_produk,
					'status_pencatatan' => $status_pencatatan,
					'persen_pencatatan' => $persen_pencatatan,
					'nilai_pencatatan' => $nilai_pencatatan,
					'jangka_waktu_mulai_pelaksanaan' => $jangka_waktu_mulai_pelaksanaan,
					'jangka_waktu_selesai_pelaksanaan' => $jangka_waktu_selesai_pelaksanaan,
					'jangka_waktu_hari_pelaksanaan' => $jangka_waktu_hari_pelaksanaan,
					'total_pagu_rup' => $total_pagu_rup,
					'user_created' => $this->session->userdata('nama_pegawai'),
					'id_provinsi' => $id_provinsi,
					'id_kabupaten' => $id_kabupaten,
					'detail_lokasi_rup' => $detail_lokasi_rup,
					'id_ruas' => $id_ruas,

				);
				$this->M_rup->update_rup($data, $where_rup);
				if (!$id_rkap) {
				} else {
					$where = [
						'id_rkap' => $id_rkap
					];
					$upload = [
						'sts_rkap_ke_rup' => 1,
					];
					$this->M_rkap->update_rkap($upload, $where);
				}
				$response = [
					'success' => 'success'
				];
				$this->output->set_content_type('application/json')->set_output(json_encode($response));
			}
		}
	}

	function ubah_ruas()
	{
		$id_ruas_rup = $this->input->post('id_ruas_rup');
		$nama_ruas_lokasi = $this->input->post('ruas_lokasi');
		$where = [
			'id_ruas_rup' => $id_ruas_rup
		];
		$data = [
			'ruas_lokasi' => $nama_ruas_lokasi
		];
		$this->M_rup->update_ruas($data, $where);
		$response = [
			'success' => 'Berhasil Di Finalisasi'
		];
		$this->output->set_content_type('application/json')->set_output(json_encode($response));
	}


	function hapus_ruas_rup()
	{
		$id_ruas_rup = $this->input->post('id_ruas_rup');
		$where = [
			'id_ruas_rup' => $id_ruas_rup
		];
		$this->M_rup->delete_ruas($where);
		$this->output->set_content_type('application/json')->set_output(json_encode('success'));
	}


	function get_ruas_lokasi()
	{
		$id_url_rup = $this->input->post('random_kode');
		$row_rup = $this->M_rup->get_row_rup($id_url_rup);
		$ruas_rup = $this->M_rup->get_ruas_by_id_rup($row_rup['id_rup']);
		$response = [
			'result_ruas_rup' => $ruas_rup
		];
		$this->output->set_content_type('application/json')->set_output(json_encode($response));
	}

	public function get_section($id_departemen) //satuan kerja
	{
		$data = $this->M_section->get_section($id_departemen);
		echo '<option value="">Pilih Section</option>';
		foreach ($data as $key => $value) {
			echo '<option value="' . $value['id_section'] . '">' . $value['nama_section'] . '</option>';
		}
	}
}
