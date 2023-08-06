<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Fm_mjm_user extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_master/M_mjm_user');
	}

	private function _role($role)
	{
		if ($role == '2') {
			echo 'Administrator';
		} else if ($role == '3') {
			echo 'Unit Kerja';
		} else if ($role == '4') {
			echo 'Validator';
		} else if ($role == '5') {
			echo 'Panitia';
		}
	}

	public function index()
	{
		$data['karyawan'] = $this->M_mjm_user->get_karyawan();
		$data['kode'] = $this->M_mjm_user->kode();
		$this->load->view('administrator/template_menu/header_menu');
		$this->load->view('administrator/file_master/fm_mjm_user', $data);
		$this->load->view('administrator/template_menu/footer_menu');
		$this->load->view('administrator/file_master/js_mjm_user');
	}

	public function get_byid($value)
	{

		$data = $this->M_mjm_user->getByid($value);
		$this->output->set_content_type('application/json')->set_output(json_encode($data));
	}


	public function save()
	{
		$kode_mjm_user = $this->input->post('kode_mjm_user');
		$id_pegawai = $this->input->post('id_pegawai');
		$id_role = $this->input->post('id_role');
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$this->form_validation->set_rules('id_pegawai', 'Nama Pegawai', 'required|trim', ['required' => 'Nama Pegawai Wajib Diisi!']);
		$this->form_validation->set_rules('id_role', 'Role', 'required|trim', ['required' => 'Role Wajib Diisi!']);
		$this->form_validation->set_rules('username', 'Username', 'required|trim', ['required' => 'Username Wajib Diisi!']);
		$this->form_validation->set_rules('password', 'Password', 'required|trim|matches[password2]', ['required' => 'Password Wajib Diisi!', 'matches' => 'Password Tidak Sama']);
		$this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password]', ['required' => 'Password Verifikasi Wajib Di isi!', 'matches' => 'Password Tidak Sama']);

		if ($this->form_validation->run() == false) {
			$response = [
				'error' => [
					'id_pegawai' => form_error('id_pegawai'),
					'id_role' => form_error('id_role'),
					'username' => form_error('username'),
					'password' => form_error('password'),
					'password2' => form_error('password2'),
				],
			];
			$this->output->set_content_type('application/json')->set_output(json_encode($response));
		} else {
			// $data = [
			// 	'kode_mjm_user' => $kode_mjm_user,
			// 	'id_pegawai' => $id_pegawai,
			// 	'role' => $id_role,
			// 	'username' => $username,
			// 	'password' => password_hash($password, PASSWORD_DEFAULT),
			// ];
			// $this->M_mjm_user->insert_data($data);
			// $kode = $this->M_mjm_user->kode();
			// $output = [
			// 	"kode" => $kode
			// ];
			// $this->output->set_content_type('application/json')->set_output(json_encode($output));


			// checking role pegawai
			$get_pegawai = $this->M_mjm_user->getByid_user($id_pegawai);
			// checking pegawai 
			if ($get_pegawai['id_pegawai']) {
				// checking role pegawai
				if ($get_pegawai['role'] == $id_role) {

					$response = [
						'error2' => [
							'id_role' => 'Nama Pegawai ' . $id_pegawai . ' Dengan Role ' . $id_role,
						],
					];
					$this->output->set_content_type('application/json')->set_output(json_encode($response));
				} else {
					$data = [
						'kode_mjm_user' => $kode_mjm_user,
						'id_pegawai' => $id_pegawai,
						'role' => $id_role,
						'username' => $username,
						'password' => password_hash($password, PASSWORD_DEFAULT),
					];
					$this->M_mjm_user->insert_data($data);
					$kode = $this->M_mjm_user->kode();
					$output = [
						"kode" => $kode
					];
					$this->output->set_content_type('application/json')->set_output(json_encode($output));
				}
			} else {
				$data = [
					'kode_mjm_user' => $kode_mjm_user,
					'id_pegawai' => $id_pegawai,
					'role' => $id_role,
					'username' => $username,
					'password' => password_hash($password, PASSWORD_DEFAULT),
				];
				$this->M_mjm_user->insert_data($data);
				$kode = $this->M_mjm_user->kode();
				$output = [
					"kode" => $kode
				];
				$this->output->set_content_type('application/json')->set_output(json_encode($response));
			}
		}
	}
}
