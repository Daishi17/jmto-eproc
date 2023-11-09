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
        $where1 = [
            'id_jadwal_rup' => $id_jadwal,
        ];
        $data1 = [
            'waktu_mulai' => $jadwal_mulai,
            'waktu_selesai' => $jadwal_selesai
        ];


        // update_jadwal 1
        $data1_1 = [
            'batas_pendaftaran_tender' => $waktu_selesai_akhir30
        ];
        // update_batas_pendaftaran ke_rup
        $this->M_panitia->update_rup_panitia($row_rup['id_rup'], $data1_1);
        $this->M_panitia->update_jadwal_rup_tender_terbatas_18_jadwal($data1, $where1);

        // jadwal 2
        $jadwal_mulai = date('Y-m-d H:i', strtotime($waktu_mulai[2]));
        $jadwal_selesai = date('Y-m-d H:i', strtotime($waktu_selesai[2]));
        $id_jadwal = $id_jadwal_rup[2];
        $where2 = [
            'id_jadwal_rup' => $id_jadwal,
        ];
        $data2 = [
            'waktu_mulai' => $jadwal_mulai,
            'waktu_selesai' => $jadwal_selesai
        ];
        // update_jadwal 2
        $this->M_panitia->update_jadwal_rup_tender_terbatas_18_jadwal($data2, $where2);

        // jadwal 3
        $jadwal_mulai = date('Y-m-d H:i', strtotime($waktu_mulai[3]));
        $jadwal_selesai = date('Y-m-d H:i', strtotime($waktu_selesai[3]));
        $id_jadwal = $id_jadwal_rup[3];
        $where3 = [
            'id_jadwal_rup' => $id_jadwal,
        ];
        $data3 = [
            'waktu_mulai' => $jadwal_mulai,
            'waktu_selesai' => $jadwal_selesai
        ];
        // update_jadwal 3
        $this->M_panitia->update_jadwal_rup_tender_terbatas_18_jadwal($data3, $where3);

        // jadwal 4
        $jadwal_mulai = date('Y-m-d H:i', strtotime($waktu_mulai[4]));
        $jadwal_selesai = date('Y-m-d H:i', strtotime($waktu_selesai[4]));
        $id_jadwal = $id_jadwal_rup[4];
        $where4 = [
            'id_jadwal_rup' => $id_jadwal,
        ];
        $data4 = [
            'waktu_mulai' => $jadwal_mulai,
            'waktu_selesai' => $jadwal_selesai
        ];
        // update_jadwal 4
        $this->M_panitia->update_jadwal_rup_tender_terbatas_18_jadwal($data4, $where4);

        // jadwal 5
        $jadwal_mulai = date('Y-m-d H:i', strtotime($waktu_mulai[5]));
        $jadwal_selesai = date('Y-m-d H:i', strtotime($waktu_selesai[5]));
        $id_jadwal = $id_jadwal_rup[5];
        $where5 = [
            'id_jadwal_rup' => $id_jadwal,
        ];
        $data5 = [
            'waktu_mulai' => $jadwal_mulai,
            'waktu_selesai' => $jadwal_selesai
        ];
        // update_jadwal 5
        $this->M_panitia->update_jadwal_rup_tender_terbatas_18_jadwal($data5, $where5);

        // jadwal 6
        $jadwal_mulai = date('Y-m-d H:i', strtotime($waktu_mulai[6]));
        $jadwal_selesai = date('Y-m-d H:i', strtotime($waktu_selesai[6]));
        $id_jadwal = $id_jadwal_rup[6];
        $where6 = [
            'id_jadwal_rup' => $id_jadwal,
        ];
        $data6 = [
            'waktu_mulai' => $jadwal_mulai,
            'waktu_selesai' => $jadwal_selesai
        ];
        // update_jadwal 6
        $this->M_panitia->update_jadwal_rup_tender_terbatas_18_jadwal($data6, $where6);

        // jadwal 7
        $jadwal_mulai = date('Y-m-d H:i', strtotime($waktu_mulai[7]));
        $jadwal_selesai = date('Y-m-d H:i', strtotime($waktu_selesai[7]));
        $id_jadwal = $id_jadwal_rup[7];
        $where7 = [
            'id_jadwal_rup' => $id_jadwal,
        ];
        $data7 = [
            'waktu_mulai' => $jadwal_mulai,
            'waktu_selesai' => $jadwal_selesai
        ];
        // update_jadwal 7
        $this->M_panitia->update_jadwal_rup_tender_terbatas_18_jadwal($data7, $where7);

        // jadwal 8
        $jadwal_mulai = date('Y-m-d H:i', strtotime($waktu_mulai[8]));
        $jadwal_selesai = date('Y-m-d H:i', strtotime($waktu_selesai[8]));
        $id_jadwal = $id_jadwal_rup[8];
        $where8 = [
            'id_jadwal_rup' => $id_jadwal,
        ];
        $data8 = [
            'waktu_mulai' => $jadwal_mulai,
            'waktu_selesai' => $jadwal_selesai
        ];
        // update_jadwal 8
        $this->M_panitia->update_jadwal_rup_tender_terbatas_18_jadwal($data8, $where8);

        // jadwal 9
        $jadwal_mulai = date('Y-m-d H:i', strtotime($waktu_mulai[9]));
        $jadwal_selesai = date('Y-m-d H:i', strtotime($waktu_selesai[9]));
        $id_jadwal = $id_jadwal_rup[9];
        $where9 = [
            'id_jadwal_rup' => $id_jadwal,
        ];
        $data9 = [
            'waktu_mulai' => $jadwal_mulai,
            'waktu_selesai' => $jadwal_selesai
        ];
        // update_jadwal 9
        $this->M_panitia->update_jadwal_rup_tender_terbatas_18_jadwal($data9, $where9);

        // jadwal 10
        $jadwal_mulai = date('Y-m-d H:i', strtotime($waktu_mulai[10]));
        $jadwal_selesai = date('Y-m-d H:i', strtotime($waktu_selesai[10]));
        $id_jadwal = $id_jadwal_rup[10];
        $where10 = [
            'id_jadwal_rup' => $id_jadwal,
        ];
        $data10 = [
            'waktu_mulai' => $jadwal_mulai,
            'waktu_selesai' => $jadwal_selesai
        ];
        // update_jadwal 10
        $this->M_panitia->update_jadwal_rup_tender_terbatas_18_jadwal($data10, $where10);

        // jadwal 11
        $jadwal_mulai = date('Y-m-d H:i', strtotime($waktu_mulai[11]));
        $jadwal_selesai = date('Y-m-d H:i', strtotime($waktu_selesai[11]));
        $id_jadwal = $id_jadwal_rup[11];
        $where11 = [
            'id_jadwal_rup' => $id_jadwal,
        ];
        $data11 = [
            'waktu_mulai' => $jadwal_mulai,
            'waktu_selesai' => $jadwal_selesai
        ];
        // update_jadwal 11
        $this->M_panitia->update_jadwal_rup_tender_terbatas_18_jadwal($data11, $where11);

        // jadwal 12
        $jadwal_mulai = date('Y-m-d H:i', strtotime($waktu_mulai[12]));
        $jadwal_selesai = date('Y-m-d H:i', strtotime($waktu_selesai[12]));
        $id_jadwal = $id_jadwal_rup[12];
        $where12 = [
            'id_jadwal_rup' => $id_jadwal,
        ];
        $data12 = [
            'waktu_mulai' => $jadwal_mulai,
            'waktu_selesai' => $jadwal_selesai
        ];
        // update_jadwal 12
        $this->M_panitia->update_jadwal_rup_tender_terbatas_18_jadwal($data12, $where12);

        // jadwal 13
        $jadwal_mulai = date('Y-m-d H:i', strtotime($waktu_mulai[13]));
        $jadwal_selesai = date('Y-m-d H:i', strtotime($waktu_selesai[13]));
        $id_jadwal = $id_jadwal_rup[13];
        $where13 = [
            'id_jadwal_rup' => $id_jadwal,
        ];
        $data13 = [
            'waktu_mulai' => $jadwal_mulai,
            'waktu_selesai' => $jadwal_selesai
        ];
        // update_jadwal 13
        $this->M_panitia->update_jadwal_rup_tender_terbatas_18_jadwal($data13, $where13);


        // jadwal 14
        $jadwal_mulai = date('Y-m-d H:i', strtotime($waktu_mulai[14]));
        $jadwal_selesai = date('Y-m-d H:i', strtotime($waktu_selesai[14]));
        $id_jadwal = $id_jadwal_rup[14];
        $where14 = [
            'id_jadwal_rup' => $id_jadwal,
        ];
        $data14 = [
            'waktu_mulai' => $jadwal_mulai,
            'waktu_selesai' => $jadwal_selesai
        ];
        // update_jadwal 14
        $this->M_panitia->update_jadwal_rup_tender_terbatas_18_jadwal($data14, $where14);

        // jadwal 15
        $jadwal_mulai = date('Y-m-d H:i', strtotime($waktu_mulai[15]));
        $jadwal_selesai = date('Y-m-d H:i', strtotime($waktu_selesai[15]));
        $id_jadwal = $id_jadwal_rup[15];
        $where15 = [
            'id_jadwal_rup' => $id_jadwal,
        ];
        $data15 = [
            'waktu_mulai' => $jadwal_mulai,
            'waktu_selesai' => $jadwal_selesai
        ];
        // update_jadwal 15
        $this->M_panitia->update_jadwal_rup_tender_terbatas_18_jadwal($data15, $where15);


        // jadwal 16
        $jadwal_mulai = date('Y-m-d H:i', strtotime($waktu_mulai[16]));
        $jadwal_selesai = date('Y-m-d H:i', strtotime($waktu_selesai[16]));
        $id_jadwal = $id_jadwal_rup[16];
        $where16 = [
            'id_jadwal_rup' => $id_jadwal,
        ];
        $data16 = [
            'waktu_mulai' => $jadwal_mulai,
            'waktu_selesai' => $jadwal_selesai
        ];
        // update_jadwal 16
        $this->M_panitia->update_jadwal_rup_tender_terbatas_18_jadwal($data16, $where16);

        // jadwal 17
        $jadwal_mulai = date('Y-m-d H:i', strtotime($waktu_mulai[17]));
        $jadwal_selesai = date('Y-m-d H:i', strtotime($waktu_selesai[17]));
        $id_jadwal = $id_jadwal_rup[17];
        $where17 = [
            'id_jadwal_rup' => $id_jadwal,
        ];
        $data17 = [
            'waktu_mulai' => $jadwal_mulai,
            'waktu_selesai' => $jadwal_selesai
        ];
        // update_jadwal 17
        $this->M_panitia->update_jadwal_rup_tender_terbatas_18_jadwal($data17, $where17);

        // jadwal 18
        $jadwal_mulai = date('Y-m-d H:i', strtotime($waktu_mulai[18]));
        $jadwal_selesai = date('Y-m-d H:i', strtotime($waktu_selesai[18]));
        $id_jadwal = $id_jadwal_rup[18];
        $where18 = [
            'id_jadwal_rup' => $id_jadwal,
        ];
        $data18 = [
            'waktu_mulai' => $jadwal_mulai,
            'waktu_selesai' => $jadwal_selesai
        ];
        // update_jadwal 18
        $this->M_panitia->update_jadwal_rup_tender_terbatas_18_jadwal($data18, $where18);


        // jadwal 19
        $jadwal_mulai = date('Y-m-d H:i', strtotime($waktu_mulai[19]));
        $jadwal_selesai = date('Y-m-d H:i', strtotime($waktu_selesai[19]));
        $id_jadwal = $id_jadwal_rup[19];
        $where19 = [
            'id_jadwal_rup' => $id_jadwal,
        ];
        $data19 = [
            'waktu_mulai' => $jadwal_mulai,
            'waktu_selesai' => $jadwal_selesai
        ];
        // update_jadwal 19
        $this->M_panitia->update_jadwal_rup_tender_terbatas_18_jadwal($data19, $where19);

        // jadwal 20
        $jadwal_mulai = date('Y-m-d H:i', strtotime($waktu_mulai[20]));
        $jadwal_selesai = date('Y-m-d H:i', strtotime($waktu_selesai[20]));
        $id_jadwal = $id_jadwal_rup[20];
        $where20 = [
            'id_jadwal_rup' => $id_jadwal,
        ];
        $data20 = [
            'waktu_mulai' => $jadwal_mulai,
            'waktu_selesai' => $jadwal_selesai
        ];
        // update_jadwal 20
        $this->M_panitia->update_jadwal_rup_tender_terbatas_18_jadwal($data20, $where20);


        // jadwal 21
        $jadwal_mulai = date('Y-m-d H:i', strtotime($waktu_mulai[21]));
        $jadwal_selesai = date('Y-m-d H:i', strtotime($waktu_selesai[21]));
        $id_jadwal = $id_jadwal_rup[21];
        $where21 = [
            'id_jadwal_rup' => $id_jadwal,
        ];
        $data21 = [
            'waktu_mulai' => $jadwal_mulai,
            'waktu_selesai' => $jadwal_selesai
        ];
        // update_jadwal 21
        $this->M_panitia->update_jadwal_rup_tender_terbatas_18_jadwal($data21, $where21);

        $this->output->set_content_type('application/json')->set_output(json_encode('success'));
    }
}
