<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_count extends CI_Model
{

    public function count_tender_umum($id_manajemenen_user)
    {
        $this->db->select('*');
        $this->db->from('tbl_rup');
        $this->db->join('tbl_panitia', 'tbl_rup.id_rup = tbl_panitia.id_rup', 'left');
        $this->db->where('tbl_panitia.id_manajemen_user', $id_manajemenen_user);
        $this->db->where('tbl_rup.id_metode_pengadaan', 1);
        $this->db->where('tbl_rup.status_paket_diumumkan', 1);
        $this->db->group_by('tbl_rup.id_rup');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function count_tender_terbatas($id_manajemenen_user)
    {
        $this->db->select('*');
        $this->db->from('tbl_rup');
        $this->db->join('tbl_panitia', 'tbl_rup.id_rup = tbl_panitia.id_rup', 'left');
        $this->db->where('tbl_panitia.id_manajemen_user', $id_manajemenen_user);
        $this->db->where('tbl_rup.id_metode_pengadaan', 4);
        $this->db->where('tbl_rup.status_paket_diumumkan', 1);
        $this->db->group_by('tbl_rup.id_rup');
        $query = $this->db->get();
        return $query->result_array();
    }
}
