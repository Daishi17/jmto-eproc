<?php
defined('BASEPATH') or exit('No direct script access allowed');
date_default_timezone_set("Asia/Jakarta");

class Email_send
{
    protected $ci;

    public function __construct()
    {
        $this->ci = &get_instance();
        $this->ci->load->model('M_datapenyedia/M_Rekanan_tervalidasi');
    }

    public function sen_row_email($type, $data, $message)
    {
        if ($type == 'TERIMA-VENDOR' || $type == 'KIRIM-PESAN' || $type == 'KIRIM-UNDANGAN') {
            $data = $this->ci->M_Rekanan_tervalidasi->get_row_vendor($data);
        } else {
            $data = $this->ci->M_Rekanan_tervalidasi->get_id_vendor($data);
        }

        $email = $data['email'];
        $this->ci->load->library('email');
        $config = array(
            'protocol' => 'smtp',
            'smtp_host' => 'mail.jmto.co.id',
            'smtp_port' => 26,
            'smtp_user' => 'e-procurement@jmto.co.id',
            'smtp_pass' => 'jmt02023!#',
            'mailtype'  => 'html',
            'smtp_crypto'  => 'tls',
            'charset'   => 'utf-8'
        );
        $this->ci->email->initialize($config);
        $this->ci->email->set_newline("\r\n");
        // Email dan nama pengirim
        $this->ci->email->from('e-procurement@jmto.co.id', 'JMTO');

        // Email penerima

        $this->ci->email->to($email); // Ganti dengan email tujuan

        if ($type == 'SIUP') {
            // Isi email
            $this->ci->email->subject("E-PROCUREMENT JMTO : VALIDASI DOKUMEN SIUP");
            $this->ci->email->message("$message ");
        } else if ($type == 'KBLI-SIUP') {
            $this->ci->email->subject("E-PROCUREMENT JMTO : VALIDASI DOKUMEN KBLI-SIUP");
            $this->ci->email->message("$message ");
        } else if ($type == 'NIB') {
            $this->ci->email->subject("E-PROCUREMENT JMTO : VALIDASI DOKUMEN NIB");
            $this->ci->email->message("$message ");
        } else if ($type == 'KBLI-NIB') {
            $this->ci->email->subject("E-PROCUREMENT JMTO : VALIDASI DOKUMEN KBLI-NIB");
            $this->ci->email->message("$message ");
        } else if ($type == 'SBU') {
            $this->ci->email->subject("E-PROCUREMENT JMTO : VALIDASI DOKUMEN SBU");
            $this->ci->email->message("$message ");
        } else if ($type == 'KODE-SBU') {
            $this->ci->email->subject("E-PROCUREMENT JMTO : VALIDASI DOKUMEN KODE-SBU");
            $this->ci->email->message("$message ");
        } else if ($type == 'SIUJK') {
            $this->ci->email->subject("E-PROCUREMENT JMTO : VALIDASI DOKUMEN SIUJK");
            $this->ci->email->message("$message ");
        } else if ($type == 'KBLI-SIUJK') {
            $this->ci->email->subject("E-PROCUREMENT JMTO : VALIDASI DOKUMEN KBLI-SIUJK");
            $this->ci->email->message("$message ");
        } else if ($type == 'AKTA-PENDIRIAN') {
            $this->ci->email->subject("E-PROCUREMENT JMTO : VALIDASI DOKUMEN AKTA-PENDIRIAN");
            $this->ci->email->message("$message ");
        } else if ($type == 'AKTA-PERUBAHAN') {
            $this->ci->email->subject("E-PROCUREMENT JMTO : VALIDASI DOKUMEN AKTA-PERUBAHAN");
            $this->ci->email->message("$message ");
        } else if ($type == 'PEMILIK') {
            $this->ci->email->subject("E-PROCUREMENT JMTO : VALIDASI DOKUMEN PEMILIK");
            $this->ci->email->message("$message ");
        } else if ($type == 'PENGURUS') {
            $this->ci->email->subject("E-PROCUREMENT JMTO : VALIDASI DOKUMEN PENGURUS");
            $this->ci->email->message("$message ");
        } else if ($type == 'PENGALAMAN') {
            $this->ci->email->subject("E-PROCUREMENT JMTO : VALIDASI DOKUMEN PENGALAMAN");
            $this->ci->email->message("$message ");
        } else if ($type == 'SPPKP') {
            $this->ci->email->subject("E-PROCUREMENT JMTO : VALIDASI DOKUMEN SPPKP");
            $this->ci->email->message("$message ");
        } else if ($type == 'NPWP') {
            $this->ci->email->subject("E-PROCUREMENT JMTO : VALIDASI DOKUMEN NPWP");
            $this->ci->email->message("$message ");
        } else if ($type == 'SPT') {
            $this->ci->email->subject("E-PROCUREMENT JMTO : VALIDASI DOKUMEN SPT");
            $this->ci->email->message("$message ");
        } else if ($type == 'NERACA-KEUANGAN') {
            $this->ci->email->subject("E-PROCUREMENT JMTO : VALIDASI DOKUMEN NERACA-KEUANGAN");
            $this->ci->email->message("$message ");
        } else if ($type == 'LAPORAN-KEUANGAN') {
            $this->ci->email->subject("E-PROCUREMENT JMTO : VALIDASI DOKUMEN LAPORAN-KEUANGAN");
            $this->ci->email->message("$message ");
        } else if ($type == 'TERIMA-VENDOR') {
            $this->ci->email->subject("E-PROCUREMENT JMTO : AKTIVASI VENDOR JMTO");
            $this->ci->email->message("$message ");
        } else if ($type == 'KIRIM-PESAN') {
            $this->ci->email->subject("E-PROCUREMENT JMTO : INFO");
            $this->ci->email->message("$message ");
        } else if ($type == 'KIRIM-UNDANGAN') {
            $this->ci->email->subject("E-PROCUREMENT JMTO : UNDANGAN VERIFIKASI KELENGKAPAN DOKUMEN");
            $this->ci->email->message("$message ");
        }
        $this->ci->email->send();
    }
}
