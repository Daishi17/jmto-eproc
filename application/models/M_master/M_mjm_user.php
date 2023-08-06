<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_mjm_user extends CI_Model
{

    public function get_karyawan()
    {
        $this->db->select('*');
        $this->db->from('tbl_pegawai');
        $this->db->where('status', 1);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function kode()
    {
        $this->db->select('LEFT(tbl_manajemen_user.kode_mjm_user,3) as kode', FALSE);
        $this->db->order_by('id_manajemen_user', 'DESC');
        $this->db->limit(1);
        $query = $this->db->get('tbl_manajemen_user');  //cek dulu apakah ada sudah ada kode di tabel.    
        if ($query->num_rows() <> 0) {
            //cek kode jika telah tersedia    
            $data = $query->row();
            $kode = intval($data->kode) + 1;
        } else {
            $kode = 1;  //cek jika kode belum terdapat pada table
        }
        $batas = str_pad($kode, 3, "00", STR_PAD_LEFT);
        $kodetampil = $batas;  //format kode
        return $kodetampil;
    }
    public function getByid($value)
    {
        $this->db->select('*');
        $this->db->from('tbl_pegawai');
        $this->db->join('tbl_departemen', 'tbl_pegawai.id_departemen = tbl_departemen.id_departemen', 'left');
        $this->db->join('tbl_section', 'tbl_pegawai.id_section = tbl_section.id_section', 'left');
        $this->db->where('id_pegawai', $value);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function insert_data($data)
    {
        $this->db->insert('tbl_manajemen_user', $data);
    }

    public function getByid_user($value)
    {
        $this->db->select('*');
        $this->db->from('tbl_manajemen_user');
        $this->db->where('id_pegawai', $value);
        $query = $this->db->get();
        return $query->row_array();
    }
}
