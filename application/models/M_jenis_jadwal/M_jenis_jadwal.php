<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_jenis_jadwal extends CI_Model
{
    public function get_result_jenis_jadwal()
    {
        $this->db->select('*');
        $this->db->from('tbl_jadwal_tender');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function get_result_jenis_jadwal_paket_dokumen($metode_kualifikasi)
    {
        $this->db->select('*');
        $this->db->from('tbl_jadwal_tender');
        $this->db->where('metode_kualifikasi', $metode_kualifikasi);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function get_result_jenis_jadwal_paket($metode_kualifikasi, $metode_dokumen)
    {
        $this->db->select('*');
        $this->db->from('tbl_jadwal_tender');
        $this->db->where('metode_kualifikasi', $metode_kualifikasi);
        $this->db->where('metode_dokumen', $metode_dokumen);
        $query = $this->db->get();
        return $query->result_array();
    }
    // INI UNTUK GENERATE JADWAL
    public function generate_jadwal($id_jadwal_tender)
    {
        $this->db->select('*');
        $this->db->from('tbl_detail_jadwal_tender');
        $this->db->where('id_jadwal_tender', $id_jadwal_tender);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function cek_jadwal_rup($id_rup)
    {
        $this->db->select('*');
        $this->db->from('tbl_jadwal_rup');
        $this->db->where('id_rup', $id_rup);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function delete_jadwal_rup($id_rup)
    {
        $this->db->where('id_rup', $id_rup);
        $this->db->delete('tbl_jadwal_rup');
    }

    public function insert_generate_jadwal($data)
    {
        $this->db->insert('tbl_jadwal_rup', $data);
    }
    
}
