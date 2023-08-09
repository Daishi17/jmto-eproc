<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_section extends CI_Model
{
    
    public function get_result_section()
    {
        $this->db->select('*');
        $this->db->from('tbl_section');
        $query = $this->db->get();
        return $query->result_array();
    }
    public function get_row_section($id_sectiont)
    {
        $this->db->select('*');
        $this->db->from('tbl_section');
        $this->db->where('id_section', $id_sectiont);
        $query = $this->db->get();
        return $query->row_array();
    }
}