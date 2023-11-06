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
		// model tender
		$this->load->model('M_tender/M_tender');
	}
	public function informasi_pengadaan($id_url_rup)
	{
		$data['row_rup'] = $this->M_rup->get_row_rup($id_url_rup);

		$data['peserta_tender'] = $this->M_panitia->get_peserta_tender($data['row_rup']['id_rup']);
		$data['dok_lelang'] = $this->M_panitia->get_dokumen_pengadaan($data['row_rup']['id_rup']);
		$data['dok_prakualifikasi'] = $this->M_panitia->get_dokumen_prakualifikasi($data['row_rup']['id_rup']);
		$data['dok_tambahan'] = $this->M_panitia->result_syarat_tambahan($data['row_rup']['id_rup']);
		$data['hitung_peserta'] = $this->M_panitia->get_peserta_tender_count($data['row_rup']['id_rup']);

		$this->load->view('template_tender/header');
		$this->load->view('panitia/info_tender/informasi_tender/base_url_global');
		$this->load->view('panitia/info_tender/informasi_tender/index', $data);
		$this->load->view('template_tender/footer');
		$this->load->view('panitia/info_tender/informasi_tender/ajax');
	}

	// evaluasi
	public function evaluasi($id_url_rup)
	{
		$data['row_rup'] = $this->M_rup->get_row_rup($id_url_rup);
		$this->load->view('template_tender/header');
		$this->load->view('panitia/info_tender/informasi_tender/base_url_info_tender');
		$this->load->view('panitia/info_tender/informasi_tender/evaluasi', $data);
		$this->load->view('template_tender/footer');
		$this->load->view('panitia/info_tender/informasi_tender/ajax');
	}

	public function get_evaluasi_kualifikasi($id_rup)
	{
		$result = $this->M_panitia->gettable_evaluasi($id_rup);
		$data = [];
		$no = $_POST['start'];
		foreach ($result as $rs) {
			$row = array();
			$row[] = ++$no;
			$row[] = $rs->nama_usaha;
			$row[] = '<span class="badge bg-success bg-sm">Lulus</span>';

			// nilai keuangan

			if ($rs->ev_keuangan == NULL) {
				$row[] = '00.00';
				$row[] = '<span class="badge bg-secondary bg-sm">Belum Di Periksa</span>';
			} else {
				if ($rs->ev_keuangan > 60) {
					$row[] = number_format($rs->ev_keuangan, 2, ',', '.');
					$row[] = '<span class="badge bg-success bg-sm">Lulus</span>';
				} else {
					$row[] = number_format($rs->ev_keuangan, 2, ',', '.');
					$row[] = '<span class="badge bg-danger bg-sm">Gugur</span>';
				}
			}

			// nilai teknis

			if ($rs->ev_teknis == NULL) {
				$row[] = '00.00';
				$row[] = '<span class="badge bg-secondary bg-sm">Belum Di Periksa</span>';
			} else {
				if ($rs->ev_teknis > 60) {
					$row[] = number_format($rs->ev_teknis, 2, ',', '.');
					$row[] = '<span class="badge bg-success bg-sm">Lulus</span>';
				} else {
					$row[] = number_format($rs->ev_teknis, 2, ',', '.');
					$row[] = '<span class="badge bg-danger bg-sm">Gugur</span>';
				}
			}

			if ($rs->ev_kualifikasi_akhir == NULL) {
				$row[] = '00.00';
				$row[] = '<span class="badge bg-secondary bg-sm">Belum Di Periksa</span>';
			} else {
				if ($rs->ev_kualifikasi_akhir > 60) {
					$row[] = number_format($rs->ev_kualifikasi_akhir, 2, ',', '.');
					$row[] = '<span class="badge bg-success bg-sm">Lulus</span>';
				} else {
					$row[] = number_format($rs->ev_kualifikasi_akhir, 2, ',', '.');
					$row[] = '<span class="badge bg-danger bg-sm">Gugur</span>';
				}
			}

			$row[] = '<div class="text-center">
						<a href="javascript:;" class="btn btn-info btn-sm shadow-lg text-white" onclick="byid_mengikuti(' . "'" . $rs->id_vendor_mengikuti_paket . "','kualifikasi'" . ')">
							<i class="fa-solid fa-edit"></i>
							<small>Evaluasi</small>
						</a>
					  </div>';
			$data[] = $row;
		}
		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->M_panitia->count_all_evaluasi($id_rup),
			"recordsFiltered" => $this->M_panitia->count_filtered_evaluasi($id_rup),
			"data" => $data
		);
		$this->output->set_content_type('application/json')->set_output(json_encode($output));
	}

	public function get_evaluasi_penawaran($id_rup)
	{
		$result = $this->M_panitia->gettable_evaluasi_penawaran($id_rup);
		$data = [];
		$no = $_POST['start'];
		foreach ($result as $rs) {
			$row = array();
			$row[] = ++$no;
			$row[] = $rs->nama_usaha;
			if ($rs->nilai_penawaran) {
				$row[] =  number_format($rs->nilai_penawaran, 2, ',', '.');
			} else {
				$row[] =  '0,00';
			}

			if ($rs->ev_penawaran_teknis) {
				$row[] =  number_format($rs->ev_penawaran_teknis, 2, ',', '.');
			} else {
				$row[] =  '0,00';
			}

			if ($rs->ev_penawaran_hps) {
				$row[] =  number_format($rs->ev_penawaran_hps, 2, ',', '.');
			} else {
				$row[] =  '0,00';
			}

			if ($rs->ev_penawaran_biaya) {
				$row[] =  number_format($rs->ev_penawaran_biaya, 2, ',', '.');
			} else {
				$row[] =  '0,00';
			}


			if ($rs->ev_penawaran_akhir) {
				$row[] =  number_format($rs->ev_penawaran_akhir, 2, ',', '.');
			} else {
				$row[] =  '0,00';
			}

			if ($rs->ev_penawaran_peringkat) {
				$row[] =  $rs->ev_penawaran_peringkat;
			} else {
				$row[] =  '0';
			}


			if ($rs->ev_penawaran_akhir == NULL) {
				$row[] = '<span class="badge bg-secondary bg-sm">Belum Di Ketahui</span>';
			} else {
				if ($rs->ev_penawaran_akhir > 60) {
					$row[] = '<span class="badge bg-success bg-sm">Sah</span>';
				} else {
					$row[] = '<span class="badge bg-danger bg-sm">Tidak Sah</span>';
				}
			}


			$row[] = '<div class="text-center">
						<a href="javascript:;" class="btn btn-info btn-sm shadow-lg text-white" onclick="byid_mengikuti(' . "'" . $rs->id_vendor_mengikuti_paket . "','penawaran'" . ')">
							<i class="fa-solid fa-edit"></i>
							<small>Evaluasi</small>
						</a>
					  </div>';
			$data[] = $row;
		}
		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->M_panitia->count_all_evaluasi_penawaran($id_rup),
			"recordsFiltered" => $this->M_panitia->count_filtered_evaluasi_penawaran($id_rup),
			"data" => $data
		);
		$this->output->set_content_type('application/json')->set_output(json_encode($output));
	}

	public function get_byid_mengikuti($id_vendor_mengikuti_paket)
	{
		$row_vendor_mengikuti = $this->M_panitia->row_vendor_mengikuti($id_vendor_mengikuti_paket);
		$data = [
			'row_vendor_mengikuti' => $row_vendor_mengikuti
		];
		$this->output->set_content_type('application/json')->set_output(json_encode($data));
	}

	public function simpan_evaluasi_kualifikasi()
	{
		$id_vendor_mengikuti_paket = $this->input->post('id_vendor_mengikuti_paket');
		$ev_keuangan = $this->input->post('ev_keuangan');
		$ev_teknis = $this->input->post('ev_teknis');

		$this->form_validation->set_rules('ev_keuangan', 'Evaluasi Keuangan', 'required|trim', ['required' => 'Evaluasi Keuangan Harus Di isi!']);
		$this->form_validation->set_rules('ev_teknis', 'Evaluasi Teknis', 'required|trim', ['required' => 'Evaluasi Teknis Harus Di isi!']);

		if ($this->form_validation->run() == false) {
			$response = [
				'error' => [
					'ev_keuangan' => form_error('ev_keuangan'),
					'ev_teknis' => form_error('ev_teknis')
				],
			];
			$this->output->set_content_type('application/json')->set_output(json_encode($response));
		} else {
			$total = $ev_keuangan * 0.5 + $ev_teknis * 0.5;
			$data = [
				'ev_keuangan' => $ev_keuangan,
				'ev_teknis' => $ev_teknis,
				'ev_kualifikasi_akhir' => $total
			];
			$where = [
				'id_vendor_mengikuti_paket'	=> $id_vendor_mengikuti_paket
			];
			$this->M_panitia->update_evaluasi($data, $where);
			$this->output->set_content_type('application/json')->set_output(json_encode('success'));
		}
	}

	public function simpan_evaluasi_penawaran()
	{
		$id_vendor_mengikuti_paket = $this->input->post('id_vendor_mengikuti_paket');
		$id_rup_post = $this->input->post('id_rup_post');
		$nilai_penawaran = $this->input->post('nilai_penawaran');
		$ev_penawaran_teknis = $this->input->post('ev_penawaran_teknis');
		$total_hps_rup = $this->input->post('total_hps_rup');

		//post teknis dan biaya
		$bobot_teknis = $this->input->post('bobot_teknis');
		$bobot_biaya = $this->input->post('bobot_biaya');

		$terhadap_hps = $nilai_penawaran / $total_hps_rup * 100;

		// get nilai penawaran terendah
		$get_min_penawaran = $this->M_panitia->get_min_penawaran($id_rup_post);
		$get_usulan_biaya = $get_min_penawaran['min_nilai_penawaran'];
		$total_usulan_biaya = $get_usulan_biaya / $total_hps_rup * 100;


		if ($total_usulan_biaya == 0) {
			$data = [
				'nilai_penawaran' => $nilai_penawaran,
				'ev_penawaran_teknis' => $ev_penawaran_teknis,
				'ev_penawaran_hps' => $terhadap_hps,
				'ev_penawaran_biaya' => $total_usulan_biaya
			];
			$where = [
				'id_vendor_mengikuti_paket'	=> $id_vendor_mengikuti_paket
			];
			$this->M_panitia->update_evaluasi($data, $where);
			$this->output->set_content_type('application/json')->set_output(json_encode('success'));
		} else {

			$data = [
				'nilai_penawaran' => $nilai_penawaran,
				'ev_penawaran_teknis' => $ev_penawaran_teknis,
				'ev_penawaran_hps' => $terhadap_hps,
				'ev_penawaran_biaya' => $total_usulan_biaya
			];
			$where = [
				'id_vendor_mengikuti_paket'	=> $id_vendor_mengikuti_paket
			];
			$this->M_panitia->update_evaluasi($data, $where);

			// update biaya usulan 
			$get_min_penawaran2 = $this->M_panitia->get_min_penawaran($id_rup_post);
			$get_usulan_biaya2 = $get_min_penawaran2['min_nilai_penawaran'];
			$peserta = $this->M_panitia->get_peserta_tender_penawaran($id_rup_post);
			foreach ($peserta as $key => $value) {
				$data2 = [
					'nilai_penawaran' => $value['nilai_penawaran'],
					'ev_penawaran_teknis' => $value['ev_penawaran_teknis'],
					'ev_penawaran_hps' => $value['ev_penawaran_hps'],
					'ev_penawaran_biaya' => $get_usulan_biaya2 / $value['nilai_penawaran'] * 100,
				];
				$where2 = [
					'id_vendor_mengikuti_paket'	=> $value['id_vendor_mengikuti_paket']
				];
				$this->M_panitia->update_evaluasi($data2, $where2);
			}

			// update nilai akhir keseluruhan
			$peserta2 = $this->M_panitia->get_peserta_tender_penawaran($id_rup_post);
			foreach ($peserta2 as $key => $value2) {
				$data3 = [
					'ev_penawaran_akhir' => $value2['ev_penawaran_teknis'] * $bobot_teknis / 100  + $value2['ev_penawaran_biaya'] * $bobot_biaya / 100
				];
				$where3 = [
					'id_vendor_mengikuti_paket'	=> $value2['id_vendor_mengikuti_paket']
				];
				$this->M_panitia->update_evaluasi($data3, $where3);
			}

			// update peringkat keseluruhan
			$peserta3 = $this->M_panitia->get_peserta_tender_nilai_akhir($id_rup_post);
			$i = 1;
			foreach ($peserta3 as $key => $value3) {
				$data4 = [
					'ev_penawaran_peringkat' => $i++
				];
				$where4 = [
					'id_vendor_mengikuti_paket'	=> $value3['id_vendor_mengikuti_paket']
				];
				$this->M_panitia->update_evaluasi($data4, $where4);
			}


			$this->output->set_content_type('application/json')->set_output(json_encode('success'));
		}
	}
	// end evaluasi

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
		$data['jadwal_aanwizing'] = $this->M_tender->jadwal_aanwizing($data['row_rup']['id_rup']);
		$data['data2'] = $this->M_tender->getDataById($data['row_rup']['id_rup']);
		$this->load->view('template_tender/header');
		$this->load->view('panitia/info_tender/informasi_tender/aanwijzing', $data);
		$this->load->view('template_tender/footer');
		// $this->load->view('panitia/info_tender/informasi_tender/ajax');
		$this->load->view('panitia/info_tender/informasi_tender/ajax_chat', $data);
	}

	public function ngeload_chatnya($id_rup)
	{
		$data = $this->M_tender->getPesan($id_rup);
		echo json_encode(array(
			'data' => $data
		));
	}

	public function kirim_pesanya($id_rup)
    {
        $isi = $this->input->post('isi');
        $id_pengirim = $this->input->post('id_pengirim');
        $id_penerima = $this->input->post('id_penerima');
        $id_rup = $this->input->post('id_rup');
        $config['upload_path'] = './file_chat/';
        $config['allowed_types'] = 'pdf|jpeg|jpg|png|jfif|gif|xlsx|docx';
        $this->load->library('upload', $config);

        if ($this->upload->do_upload('dokumen_chat')) {

            $fileData = $this->upload->data();

            $upload = [
                'id_pengirim' => $id_pengirim,
                'isi' => $isi,
                'id_penerima' => $id_penerima,
                'id_rup' => $id_rup,
                'dokumen_chat' => $fileData['file_name'],
            ];
            $this->M_tender->tambah_chat($upload);
            $log = array('status' => true);
            echo json_encode($log);
            return true;
        } else if ($this->upload->do_upload('img_chat')) {

            $fileData2 = $this->upload->data();

            $upload = [
                'id_pengirim' => $id_pengirim,
                'isi' => $isi,
                'id_penerima' => $id_penerima,
                'id_rup' => $id_rup,
                'img_chat' => $fileData2['file_name'],
            ];
            $this->M_tender->tambah_chat($upload);
            $log = array('status' => true);
            echo json_encode($log);
            return true;
        } else {
            $upload = [
                'id_pengirim' => $id_pengirim,
                'isi' => $isi,
                'id_penerima' => $id_penerima,
                'id_rup' => $id_rup,
            ];
            $this->M_tender->tambah_chat($upload);
            $log = array('status' => true);
            echo json_encode($log);
            return true;
        }
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
