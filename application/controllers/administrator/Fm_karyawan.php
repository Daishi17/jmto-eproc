<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Fm_karyawan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_master/M_karyawan');
	}

	public function index()
	{
		$data['departemen'] = $this->M_karyawan->get_departemen();
		$data['section'] = $this->M_karyawan->get_section();
		$this->load->view('administrator/template_menu/header_menu');
		$this->load->view('administrator/file_master/fm_karyawan', $data);
		$this->load->view('administrator/template_menu/footer_menu');
		$this->load->view('administrator/file_master/js_karyawan');
	}

	public function datatable_karyawan()
	{
		$result = $this->M_karyawan->getdatatable();
		$data = [];
		$no = $_POST['start'];
		foreach ($result as $res) {
			$row = array();
			$row[] = ++$no;
			$row[] = $res->nip;
			$row[] = $res->nama_pegawai;
			$row[] = $res->nama_departemen;
			$row[] = $res->nama_section;

			$row[] = $res->email;
			if ($res->status == 1) {
				$row[] = '<small><span class="badge bg-success">Aktif</span></small>';
			} else if ($res->status == 2) {
				$row[] = '<small><span class="badge bg-danger">Tidak Aktif</span></small>';
			}
			if ($res->status == 1) {
				$row[] = '<div class="text-center">
							<button type="button" class="btn btn-danger btn-sm shadow-lg" onClick="byid(' . "'" . $res->id_pegawai  . "','nonaktif'" . ')" title="Non-Aktif">
								<i class="fa-solid fa-trash-can px-1"></i>
								<small>Non Aktif</small>
							</button>
							<button type="button" class="btn btn-info btn-sm shadow-lg" onClick="byid(' . "'" . $res->id_pegawai  . "','edit'" . ')" title="Edit Data">
							<i class="fa-solid fa-edit px-1"></i>
							<small>Detail</small>
						</button>
						</div>';
			} else {
				$row[] = '<div class="text-center">
							<button type="button" class="btn btn-success btn-sm shadow-lg" onClick="byid(' . "'" . $res->id_pegawai  . "','aktif'" . ')" title="Aktif">
								<i class="fa-solid fa-check px-1"></i>
								<small>Aktifkan</small>
							</button>
							<button type="button" class="btn btn-info btn-sm shadow-lg" onClick="byid(' . "'" . $res->id_pegawai  . "','edit'" . ')" title="Edit Data">
							<i class="fa-solid fa-edit px-1"></i>
							<small>Detail</small>
						</div>';
			}
			$data[] = $row;
		}
		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->M_karyawan->count_all_data(),
			"recordsFiltered" => $this->M_karyawan->count_filtered_data(),
			"data" => $data
		);
		$this->output->set_content_type('application/json')->set_output(json_encode($output));
	}

	function save()
	{
		$nip = $this->input->post('nip');
		$nama_pegawai = $this->input->post('nama_pegawai');
		$id_departemen = $this->input->post('id_departemen');
		$id_section = $this->input->post('id_section');
		$email = $this->input->post('email');
		$no_telpon = $this->input->post('no_telpon');
		$id_role = $this->input->post('id_role');
		$password = $this->input->post('password');


		$this->form_validation->set_rules('nip', 'NIK', 'required|trim|is_unique[tbl_pegawai.nip]', ['required' => 'Nama Section Wajib Diisi!', 'is_unique' => 'Username Sudah Terdaftar']);
		$this->form_validation->set_rules('nama_pegawai', 'Nama Pegawai', 'required|trim', ['required' => 'Nama Pegawai Wajib Diisi!']);
		$this->form_validation->set_rules('id_departemen', 'Nama Departemen', 'required|trim', ['required' => 'Departemen Wajib Diisi!']);
		$this->form_validation->set_rules('id_section', 'Nama Section', 'required|trim', ['required' => 'Section Wajib Diisi!']);
		$this->form_validation->set_rules('email', 'Email Pegawai', 'required|trim|valid_email|is_unique[tbl_pegawai.nip]', ['required' => 'Email Email Pegawai Wajib Diisi!', 'valid_email' => 'Email Tidak Valid',  'is_unique' => 'Email Sudah Terdaftar']);
		$this->form_validation->set_rules('no_telpon', 'No Telpon', 'required|trim', ['required' => 'No. Telpon Wajib Diisi!']);
		// $this->form_validation->set_rules('id_role', 'Nama Section', 'required|trim', ['required' => 'Role Wajib Diisi!']);
		// $this->form_validation->set_rules('password', 'Password', 'required|trim|matches[password2]', ['required' => 'Password Wajib Diisi!', 'matches' => 'Password Tidak Sama']);
		// $this->form_validation->set_rules('password2', 'Password', 'required|trim|matches[password]', ['required' => 'Password Verifikasi harus diisi!', 'matches' => 'Password Tidak Sama']);

		if ($this->form_validation->run() == false) {

			$response = [
				'error' => [
					'nip' => form_error('nip'),
					'nama_pegawai' => form_error('nama_pegawai'),
					'id_section' => form_error('id_section'),
					'id_departemen' => form_error('id_departemen'),
					'email' => form_error('email'),
					'no_telpon' => form_error('no_telpon'),
				],
			];
			$this->output->set_content_type('application/json')->set_output(json_encode($response));
		} else {
			$id = $this->uuid->v4();
			$id = str_replace('-', '', $id);
			$data = [
				'nip' => $nip,
				'id_url_pegawai' => $id,
				'nama_pegawai' => $nama_pegawai,
				'id_departemen' => $id_departemen,
				'id_section' => $id_section,
				'email' => $email,
				'no_telpon' => $no_telpon,
				'status' => 1,
				'user_created' => $this->session->userdata('nama_pegawai')
			];
			$this->M_karyawan->insert_data($data);
			$this->output->set_content_type('application/json')->set_output(json_encode('success'));
		}
	}

	function byid($id_departemen)
	{
		$data = $this->M_karyawan->getByid($id_departemen);
		$this->output->set_content_type('application/json')->set_output(json_encode($data));
	}
}
