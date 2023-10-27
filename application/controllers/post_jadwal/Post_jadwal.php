<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Post_jadwal extends CI_Controller
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

    public function update_jadwal_18_tender_terbatas($id_url_rup)
    {
        $row_rup = $this->M_rup->get_row_rup($id_url_rup);

        $waktu_mulai = $this->input->post('waktu_mulai[]');
        $waktu_selesai = $this->input->post('waktu_selesai[]');
        $id_jadwal_rup = $this->input->post('id_jadwal_rup[]');

        // jadwal 1
        $jadwal_mulai = date('Y-m-d H:i', strtotime($waktu_mulai[1]));
        $jadwal_selesai = date('Y-m-d H:i', strtotime($waktu_selesai[1]));
        $id_jadwal = $id_jadwal_rup[1];
        $waktu_selesai_akhir30 =  date('Y-m-d H:i', strtotime($waktu_selesai[1]));
        $where = [
            'id_jadwal_rup' => $id_jadwal,
        ];
        $data = [
            'waktu_mulai' => $jadwal_mulai,
            'waktu_selesai' => $jadwal_selesai
        ];
        // update_jadwal 1
        $data2 = [
            'batas_pendaftaran_tender' => $waktu_selesai_akhir30
        ];
        // update_batas_pendaftaran ke_rup
        $this->M_panitia->update_rup_panitia($row_rup['id_rup'], $data2);
        $this->M_panitia->update_jadwal_rup_tender_terbatas_18_jadwal($data, $where);

        // jadwal 2
        $jadwal_mulai = date('Y-m-d H:i', strtotime($waktu_mulai[2]));
        $jadwal_selesai = date('Y-m-d H:i', strtotime($waktu_selesai[2]));
        $id_jadwal = $id_jadwal_rup[2];
        $where = [
            'id_jadwal_rup' => $id_jadwal,
        ];
        $data = [
            'waktu_mulai' => $jadwal_mulai,
            'waktu_selesai' => $jadwal_selesai
        ];
         // update_jadwal 2
        $this->M_panitia->update_jadwal_rup_tender_terbatas_18_jadwal($data, $where);

        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
}
