<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sirup_buat_paket extends CI_Controller
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
	}
	public function index()
	{
		$data['pegawai_panitia'] = $this->M_rup->pegawai_panitia();
		$this->load->view('administrator/template_menu/header_menu');
		$this->load->view('administrator/template/si_rup/js_header_rup');
		$this->load->view('administrator/sirup_rup/base_url'); //ini untuk base_url page rup
		$this->load->view('administrator/sirup_rup/buat_paket', $data);
		$this->load->view('administrator/template_menu/footer_menu');
		$this->load->view('administrator/sirup_rup/file_public_buat_paket');
	}

	function get_rup()
	{
		$result = $this->M_rup->gettable_rup_paket();
		$data = [];
		$no = $_POST['start'];
		foreach ($result as $rs) {
			$row = array();
			$row[] = $rs->kode_rup;
			$row[] = $rs->tahun_rup;
			$row[] = $rs->nama_rup;
			$row[] = $rs->nama_departemen;
			$row[] = "Rp " . number_format($rs->total_pagu_rup, 2, ',', '.');
			$row[] = $rs->nama_jenis_pengadaan;
			$row[] = '<div class="text-center">
				<a href="javascript:;" class="btn btn-primary btn-sm shadow-lg" onClick="by_id_rup(' . "'" . $rs->id_url_rup . "','buat_paket'" . ')"><i class="fa-solid fa-square-plus"></i> Buat Paket</a>
				</div>';
			$data[] = $row;
		}
		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->M_rup->count_all_rup_paket(),
			"recordsFiltered" => $this->M_rup->count_filtered_rup_paket(),
			"data" => $data
		);
		$this->output->set_content_type('application/json')->set_output(json_encode($output));
	}

	function by_id_rup($id_url_rup)
	{
		$row_rup = $this->M_rup->get_row_rup($id_url_rup);
		$ruas_rup = $this->M_rup->get_ruas_by_id_rup($row_rup['id_rup']);
		$response = [
			'row_rup' => $this->M_rup->get_row_rup($id_url_rup),
			'result_ruas_rup' => $ruas_rup
		];
		$this->output->set_content_type('application/json')->set_output(json_encode($response));
	}
	function tambah_panitia()
	{
		$role_panitia = $this->input->post('role_panitia');
		$nama_panitia = $this->input->post('nama_panitia');
		$id_url_rup = $this->input->post('random_kode');
		$convert_nama = str_split($nama_panitia);
		$kode_mnj_user = $convert_nama[0] . $convert_nama[1] . $convert_nama[2];
		$row_pegawai_panitia = $this->M_rup->pegawai_panitia_by_kode_mnjm_user($kode_mnj_user);
		$row_rup = $this->M_rup->get_row_rup($id_url_rup);
		$cek_data_role_ketua = $this->M_rup->cek_role_panitia($row_rup['id_rup'], $role_panitia);

		$cek_user_panitia = $this->M_rup->cek_user_panitia($row_rup['id_rup'], $row_pegawai_panitia['id_pegawai']);

		if ($cek_user_panitia) {
			$response = [
				'error' => 'User Panitia Panitia Sudah Ada',
			];
			$this->output->set_content_type('application/json')->set_output(json_encode($response));
		} else {
			if (!$cek_data_role_ketua) {
				$id = $this->uuid->v4();
				$id = str_replace('-', '', $id);
				$data  = array(
					'id_url_panitia' => $id,
					'id_manajemen_user' => $row_pegawai_panitia['id_manajemen_user'],
					'role_panitia' => $role_panitia,
					'id_rup' => $row_rup['id_rup']
				);
				$this->db->insert('tbl_panitia', $data);
				$response = [
					'success' => 'success'
				];
				$this->output->set_content_type('application/json')->set_output(json_encode($response));
			} else {

				if ($cek_data_role_ketua['role_panitia'] == 1) {
					$response = [
						'error' => 'Role Ketua Panitia Sudah Ada',
					];
					$this->output->set_content_type('application/json')->set_output(json_encode($response));
				} else if ($cek_data_role_ketua['role_panitia'] == 2) {
					$response = [
						'error' => 'Role Sekertaris Sudah Ada',
					];
					$this->output->set_content_type('application/json')->set_output(json_encode($response));
				} else {
					$id = $this->uuid->v4();
					$id = str_replace('-', '', $id);
					$data  = array(
						'id_url_panitia' => $id,
						'id_manajemen_user' => $row_pegawai_panitia['id_manajemen_user'],
						'role_panitia' => $role_panitia,
						'id_rup' => $row_rup['id_rup']
					);
					$this->db->insert('tbl_panitia', $data);
					$response = [
						'success' => 'success'
					];
					$this->output->set_content_type('application/json')->set_output(json_encode($response));
				}
			}
		}
	}

	function get_panitia()
	{
		$result = $this->M_rup->gettable_rup_panitia();
		$data = [];
		$no = $_POST['start'];
		foreach ($result as $rs) {
			$row = array();
			$row[] = $rs->nama_pegawai;
			if ($rs->role_panitia == 1) {
				$row[] = 'Ketua Panitia';
			} else if ($rs->role_panitia == 2) {
				$row[] = 'Sekretaris';
			} else {
				$row[] = 'Anggota';
			}
			$row[] = '<div class="text-center">
				<a href="javascript:;" class="btn btn-danger btn-sm shadow-lg" onClick="by_id_panitia(' . "'" . $rs->id_url_panitia . "','hapus_panitia'" . ')"><i class="fa-solid fa-trash"></i> Hapus User</a>
				</div>';
			$data[] = $row;
		}
		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->M_rup->count_all_rup_panitia(),
			"recordsFiltered" => $this->M_rup->count_filtered_rup_panitia(),
			"data" => $data
		);
		$this->output->set_content_type('application/json')->set_output(json_encode($output));
	}
}
