<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_panitia extends CI_Model
{
    // GET RUP PAKET FINAL
    var $order_rup_paket_final =  array('id_rup', 'kode_rup', 'tahun_rup', 'nama_program_rup', 'kode_departemen', 'total_pagu_rup', 'id_rup', 'id_rup', 'id_rup');
    // get nib
    private function _get_data_query_rup_paket_final()
    {
        $this->db->select('*');
        $this->db->from('tbl_rup');
        $this->db->join('tbl_panitia', 'tbl_rup.id_rup = tbl_panitia.id_rup', 'left');
        $this->db->join('tbl_departemen', 'tbl_rup.id_departemen = tbl_departemen.id_departemen', 'left');
        $this->db->join('tbl_section', 'tbl_rup.id_section = tbl_section.id_section', 'left');
        $this->db->join('tbl_rkap', 'tbl_rup.id_rkap = tbl_rkap.id_rkap', 'left');
        $this->db->join('tbl_provinsi', 'tbl_rup.id_provinsi = tbl_provinsi.id_provinsi', 'left');
        $this->db->join('tbl_kabupaten', 'tbl_rup.id_kabupaten = tbl_kabupaten.id_kabupaten', 'left');
        $this->db->join('tbl_jenis_pengadaan', 'tbl_rup.id_jenis_pengadaan = tbl_jenis_pengadaan.id_jenis_pengadaan', 'left');
        $this->db->join('tbl_metode_pengadaan', 'tbl_rup.id_metode_pengadaan = tbl_metode_pengadaan.id_metode_pengadaan', 'left');
        $this->db->join('tbl_jenis_anggaran', 'tbl_rup.id_jenis_anggaran = tbl_jenis_anggaran.id_jenis_anggaran', 'left');
        $this->db->join('mst_ruas', 'tbl_rup.id_ruas = mst_ruas.id_ruas', 'left');
        $this->db->where('tbl_rup.sts_rup_buat_paket', 2);
        $this->db->where('tbl_panitia.id_manajemen_user', $this->session->userdata('id_manajemen_user'));
        $i = 0;
        foreach ($this->order_rup_paket_final as $item) // looping awal
        {
            if ($_POST['search']['value']) // jika datatable mengirimkan pencarian dengan metode POST
            {

                if ($i === 0) // looping awal
                {
                    $this->db->group_start();
                    $this->db->like($item, $_POST['search']['value']);
                } else {
                    $this->db->or_like(
                        $item,
                        $_POST['search']['value']
                    );
                }

                if (count($this->order_rup_paket_final) - 1 == $i)
                    $this->db->group_end();
            }
            $i++;
        }
        if (isset($_POST['order'])) {
            $this->db->order_by($this->order_rup_paket_final[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else {
            $this->db->order_by('tbl_rup.id_rup', 'DESC');
        }
    }

    public function gettable_rup_paket_final() //nam[ilin data pake ini
    {
        $this->_get_data_query_rup_paket_final(); //ambil data dari get yg di atas
        if ($_POST['length'] != -1) {
            $this->db->limit($_POST['length'], $_POST['start']);
        }
        $query = $this->db->get();
        return $query->result();
    }

    public function count_filtered_rup_paket_final()
    {
        $this->_get_data_query_rup_paket_final(); //ambil data dari get yg di atas
        $query = $this->db->get();
        return $query->num_rows();
    }
    public function count_all_rup_paket_final()
    {
        $this->db->select('*');
        $this->db->from('tbl_rup');
        $this->db->join('tbl_departemen', 'tbl_rup.id_departemen = tbl_departemen.id_departemen', 'left');
        $this->db->join('tbl_section', 'tbl_rup.id_section = tbl_section.id_section', 'left');
        $this->db->join('tbl_rkap', 'tbl_rup.id_rkap = tbl_rkap.id_rkap', 'left');
        $this->db->join('tbl_provinsi', 'tbl_rup.id_provinsi = tbl_provinsi.id_provinsi', 'left');
        $this->db->join('tbl_kabupaten', 'tbl_rup.id_kabupaten = tbl_kabupaten.id_kabupaten', 'left');
        $this->db->join('tbl_jenis_pengadaan', 'tbl_rup.id_jenis_pengadaan = tbl_jenis_pengadaan.id_jenis_pengadaan', 'left');
        $this->db->join('tbl_metode_pengadaan', 'tbl_rup.id_metode_pengadaan = tbl_metode_pengadaan.id_metode_pengadaan', 'left');
        $this->db->join('tbl_jenis_anggaran', 'tbl_rup.id_jenis_anggaran = tbl_jenis_anggaran.id_jenis_anggaran', 'left');
        $this->db->join('mst_ruas', 'tbl_rup.id_ruas = mst_ruas.id_ruas', 'left');
        $this->db->where('tbl_rup.sts_rup', 1);
        $this->db->where_in('tbl_rup.sts_rup_buat_paket', [1, 2]);
        return $this->db->count_all_results();
    }

    public function update_rup_panitia($id_rup, $data)
    {
        $this->db->where('id_rup', $id_rup);
        $this->db->update('tbl_rup', $data);
    }

    public function get_jadwal($id_url_rup)
    {
        $this->db->select('*');
        $this->db->from('tbl_jadwal_rup');
        $this->db->where('id_url_rup', $id_url_rup);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function update_jadwal_rup_tender_terbatas_18_jadwal($data, $where)
    {
        $this->db->where($where);
        $this->db->update('tbl_jadwal_rup', $data);
    }

    // INI UNTUK BAGIAN SYARAT ADMINISTRASI
    public function update_rup($id_url_rup, $data)
    {
        $this->db->where('id_url_rup', $id_url_rup);
        $this->db->update('tbl_rup', $data);
    }

    public function get_syarat_izin_usaha_tender($id_rup)
    {
        $this->db->select('*');
        $this->db->from('tbl_izin_rup');
        $this->db->where('id_rup', $id_rup);
        $query = $this->db->get();
        return $query->row_array();
    }


    public function update_syarat_izin_usaha_tender($id_rup, $data)
    {
        $this->db->where('id_rup', $id_rup);
        $this->db->update('tbl_izin_rup', $data);
    }

    // INI UNTUK SYART KBLI TENDER
    function result_kbli()
    {
        $this->db->select('*');
        $this->db->from('tbl_kbli');
        $query = $this->db->get();
        return $query->result_array();
    }
    function get_row_kbli($nama_kbli)
    {
        $this->db->select('*');
        $this->db->from('tbl_kbli');
        $this->db->where('nama_kbli', $nama_kbli);
        $query = $this->db->get();
        return $query->row_array();
    }

    function row_syarat_tender_kbli($id_rup, $id_kbli)
    {
        $this->db->select('*');
        $this->db->from('tbl_syratat_kbli_tender');
        $this->db->where('tbl_syratat_kbli_tender.id_rup', $id_rup);
        $this->db->where('tbl_syratat_kbli_tender.id_kbli', $id_kbli);
        $query = $this->db->get();
        return $query->row_array();
    }

    function result_kbli_syarat($id_kbli)
    {
        $this->db->select('*');
        $this->db->from('tbl_syratat_kbli_tender');
        $this->db->join('tbl_kbli', 'tbl_syratat_kbli_tender.id_kbli = tbl_kbli.id_kbli', 'left');
        $this->db->where('tbl_syratat_kbli_tender.id_kbli', $id_kbli);
        $query = $this->db->get();
        return $query->result_array();
    }



    function result_syarat_tender_kbli($id_rup)
    {
        $this->db->select('*');
        $this->db->from('tbl_syratat_kbli_tender');
        $this->db->join('tbl_kbli', 'tbl_syratat_kbli_tender.id_kbli = tbl_kbli.id_kbli', 'left');
        $this->db->where('tbl_syratat_kbli_tender.id_rup', $id_rup);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function tambah_syarat_tender_kbli($data)
    {
        $this->db->insert('tbl_syratat_kbli_tender', $data);
    }

    public function delete_syarat_tender_kbli($where)
    {
        $this->db->delete('tbl_syratat_kbli_tender', $where);
    }

    // syarat tambahan
    public function tambah_syarat_rup($data)
    {
        $this->db->insert('tbl_syarat_tambahan_rup', $data);
    }
    public function delete_syarat_rup($where)
    {
        $this->db->delete('tbl_syarat_tambahan_rup', $where);
    }

    function result_syarat_tambahan($id_rup)
    {
        $this->db->select('*');
        $this->db->from('tbl_syarat_tambahan_rup');
        $this->db->where('tbl_syarat_tambahan_rup.id_rup', $id_rup);
        $query = $this->db->get();
        return $query->result_array();
    }


    function row_syarat_tambahan($id_syarat_tambahan)
    {
        $this->db->select('*');
        $this->db->from('tbl_syarat_tambahan_rup');
        $this->db->join('tbl_paket', 'tbl_syarat_tambahan_rup.id_rup = tbl_paket.id_rup', 'left');
        $this->db->where('tbl_syarat_tambahan_rup.id_syarat_tambahan', $id_syarat_tambahan);
        $query = $this->db->get();
        return $query->row_array();
    }

    // INI UNTUK SYART SBU TENDER
    function result_sbu()
    {
        $this->db->select('*');
        $this->db->from('tbl_sbu');
        $query = $this->db->get();
        return $query->result_array();
    }
    function get_row_sbu($nama_sbu)
    {
        $this->db->select('*');
        $this->db->from('tbl_sbu');
        $this->db->where('nama_sbu', $nama_sbu);
        $query = $this->db->get();
        return $query->row_array();
    }

    function row_syarat_tender_sbu($id_rup, $id_sbu)
    {
        $this->db->select('*');
        $this->db->from('tbl_syratat_sbu_tender');
        $this->db->where('tbl_syratat_sbu_tender.id_rup', $id_rup);
        $this->db->where('tbl_syratat_sbu_tender.id_sbu', $id_sbu);
        $query = $this->db->get();
        return $query->row_array();
    }

    function result_sbu_syarat($id_sbu)
    {
        $this->db->select('*');
        $this->db->from('tbl_syratat_sbu_tender');
        $this->db->join('tbl_sbu', 'tbl_syratat_sbu_tender.id_sbu = tbl_sbu.id_sbu', 'left');
        $this->db->where('tbl_syratat_sbu_tender.id_sbu', $id_sbu);
        $query = $this->db->get();
        return $query->result_array();
    }



    function result_syarat_tender_sbu($id_rup)
    {
        $this->db->select('*');
        $this->db->from('tbl_syratat_sbu_tender');
        $this->db->join('tbl_sbu', 'tbl_syratat_sbu_tender.id_sbu = tbl_sbu.id_sbu', 'left');
        $this->db->where('tbl_syratat_sbu_tender.id_rup', $id_rup);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function tambah_syarat_tender_sbu($data)
    {
        $this->db->insert('tbl_syratat_sbu_tender', $data);
    }

    public function delete_syarat_tender_sbu($where)
    {
        $this->db->delete('tbl_syratat_sbu_tender', $where);
    }

    // INI UNTUK BAGIAN SYARAT ADMINISTRASI TEJNIS
    public function get_syarat_izin_teknis_tender($id_rup)
    {
        $this->db->select('*');
        $this->db->from('tbl_izin_teknis_rup');
        $this->db->where('id_rup', $id_rup);
        $query = $this->db->get();
        return $query->row_array();
    }


    public function update_syarat_izin_teknis_tender($id_rup, $data)
    {
        $this->db->where('id_rup', $id_rup);
        $this->db->update('tbl_izin_teknis_rup', $data);
    }







    // START KUALIFIKASI DAN DATA VENDOR TERUNDANG
    // cek vendor terundang
    public function cek_syarat_izin_usaha($id_rup)
    {
        $this->db->select('*');
        $this->db->from('tbl_izin_rup');
        $this->db->where('id_rup', $id_rup);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function cek_syarat_kbli($id_rup)
    {
        $this->db->select('*');
        $this->db->from('tbl_syratat_kbli_tender');
        $this->db->where('id_rup', $id_rup);
        $query = $this->db->get();
        return $query->result_array();
    }
    public function cek_syarat_sbu($id_rup)
    {
        $this->db->select('*');
        $this->db->from('tbl_syratat_sbu_tender');
        $this->db->where('id_rup', $id_rup);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function cek_syarat_teknis($id_rup)
    {
        $this->db->select('*');
        $this->db->from('tbl_izin_teknis_rup');
        $this->db->where('id_rup', $id_rup);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function cek_kualifikasi($row_paket)
    {
        $this->db->select('tbl_vendor.nama_usaha,tbl_vendor.kualifikasi_usaha');
        $this->db->from('tbl_vendor');
        if ($row_paket['syarat_tender_kualifikasi'] == 'Besar') {
            $this->db->where('tbl_vendor.kualifikasi_usaha', 'Besar');
        } else if ($row_paket['syarat_tender_kualifikasi'] == 'Menengah Besar') {
            $this->db->where_in('tbl_vendor.kualifikasi_usaha', ['Menengah', 'Besar']);
        } else if ($row_paket['syarat_tender_kualifikasi'] == 'Menengah') {
            $this->db->where('tbl_vendor.kualifikasi_usaha', 'Menengah');
        } else if ($row_paket['syarat_tender_kualifikasi'] == 'Kecil Menengah') {
            $this->db->where_in('tbl_vendor.kualifikasi_usaha', ['Kecil', 'Menengah']);
        } else if ($row_paket['syarat_tender_kualifikasi'] == 'Kecil') {
            $this->db->where('tbl_vendor.kualifikasi_usaha', 'Kecil');
        } else {
        }
        $this->db->group_by('tbl_vendor.id_vendor');
        $query = $this->db->get();
        return $query->result_array();
    }
    function data_vendor_lolos_siup_kbli($cek_syarat_kbli)
    {
        $data_kbli_tampung = [];
        foreach ($cek_syarat_kbli as $data_syarat_siup) {
            $data_kbli_tampung[] = $data_syarat_siup['id_kbli'];
        }
        $implode = implode(',', $data_kbli_tampung);
        $this->db->select('tbl_vendor.id_vendor,tbl_vendor_kbli_siup.id_kbli');
        $this->db->from('tbl_vendor');
        $this->db->join('tbl_vendor_kbli_siup', 'tbl_vendor_kbli_siup.id_vendor = tbl_vendor.id_vendor', 'left');
        $this->db->where_in('tbl_vendor_kbli_siup.id_kbli', [$implode]);
        $this->db->group_by('tbl_vendor.id_vendor');
        $query = $this->db->get();
        return $query->result_array();
    }
    // end cek barus kbli siup

    function data_vendor_lolos_nib_kbli($cek_syarat_kbli)
    {
        $data_kbli_tampung = [];
        foreach ($cek_syarat_kbli as $data_syarat_nib) {
            $data_kbli_tampung[] = $data_syarat_nib['id_kbli'];
        }
        $implode = implode(',', $data_kbli_tampung);
        $this->db->select('tbl_vendor.id_vendor,tbl_vendor_kbli_nib.id_kbli');
        $this->db->from('tbl_vendor');
        $this->db->join('tbl_vendor_kbli_nib', 'tbl_vendor_kbli_nib.id_vendor = tbl_vendor.id_vendor', 'left');
        $this->db->where_in('tbl_vendor_kbli_nib.id_kbli', [$implode]);
        $this->db->group_by('tbl_vendor.id_vendor');
        $query = $this->db->get();
        return $query->result_array();
    }
    // end cek barus kbli nib


    function data_vendor_lolos_siujk_kbli($cek_syarat_kbli)
    {
        $data_kbli_tampung = [];
        foreach ($cek_syarat_kbli as $data_syarat_siujk) {
            $data_kbli_tampung[] = $data_syarat_siujk['id_kbli'];
        }
        $implode = implode(',', $data_kbli_tampung);
        $this->db->select('tbl_vendor.id_vendor,tbl_vendor_kbli_siujk.id_kbli');
        $this->db->from('tbl_vendor');
        $this->db->join('tbl_vendor_kbli_siujk', 'tbl_vendor_kbli_siujk.id_vendor = tbl_vendor.id_vendor', 'left');
        $this->db->where_in('tbl_vendor_kbli_siujk.id_kbli', [$implode]);
        $this->db->group_by('tbl_vendor.id_vendor');
        $query = $this->db->get();
        return $query->result_array();
    }
    // end cek barus kbli siujk


    function data_vendor_lolos_skdp_kbli($cek_syarat_kbli)
    {
        $data_kbli_tampung = [];
        foreach ($cek_syarat_kbli as $data_syarat_skdp) {
            $data_kbli_tampung[] = $data_syarat_skdp['id_kbli'];
        }
        $implode = implode(',', $data_kbli_tampung);
        $this->db->select('tbl_vendor.id_vendor,tbl_vendor_kbli_skdp.id_kbli');
        $this->db->from('tbl_vendor');
        $this->db->join('tbl_vendor_kbli_skdp', 'tbl_vendor_kbli_skdp.id_vendor = tbl_vendor.id_vendor', 'left');
        $this->db->where_in('tbl_vendor_kbli_skdp.id_kbli', [$implode]);
        $this->db->group_by('tbl_vendor.id_vendor');
        $query = $this->db->get();
        return $query->result_array();
    }
    // end cek barus kbli skdp

    // ini baris cek_kli sbu

    function data_vendor_lolos_sbu_kbli($cek_syarat_kbli_sbu)
    {
        $data_kbli_tampung = [];
        foreach ($cek_syarat_kbli_sbu as $data_syarat_sbu) {
            $data_kbli_tampung[] = $data_syarat_sbu['id_sbu'];
        }
        $this->db->select('tbl_vendor.id_vendor,tbl_vendor_kbli_sbu.id_sbu');
        $this->db->from('tbl_vendor');
        $this->db->join('tbl_vendor_kbli_sbu', 'tbl_vendor_kbli_sbu.id_vendor = tbl_vendor.id_vendor', 'left');
        $this->db->where_in('tbl_vendor_kbli_sbu.id_sbu', $data_kbli_tampung);
        $this->db->group_by('tbl_vendor.id_vendor');
        $query = $this->db->get();
        return $query->result_array();
    }

    function data_vendor_lolos_spt($cek_syarat_teknis)
    {
        $this->db->select('*');
        $this->db->from('tbl_vendor_spt');
        $this->db->where('tbl_vendor_spt.tahun_lapor >=', $cek_syarat_teknis['tahun_lapor_spt']);
        $this->db->group_by('tbl_vendor_spt.id_vendor');
        $query = $this->db->get();
        return $query->result_array();
    }

    function data_vendor_lolos_laporan_keuangan($cek_syarat_teknis)
    {
        $this->db->select('*');
        $this->db->from('tbl_vendor_keuangan');
        $this->db->where('tbl_vendor_keuangan.tahun_lapor >=', $cek_syarat_teknis['tahun_awal_laporan_keuangan']);
        $this->db->where('tbl_vendor_keuangan.tahun_lapor <=', $cek_syarat_teknis['tahun_akhir_laporan_keuangan']);
        $this->db->where('tbl_vendor_keuangan.jenis_audit', $cek_syarat_teknis['sts_audit_laporan_keuangan']);
        $this->db->group_by('tbl_vendor_keuangan.id_vendor');
        $query = $this->db->get();
        if ($query->num_rows() > 0) {
            return $query->result_array();
        } else {
            return $query->result_array();
        }
    }


    function data_vendor_lolos_neraca_keuangan($cek_syarat_teknis)
    {
        $this->db->select('*');
        $this->db->from('tbl_vendor_neraca_keuangan');
        $this->db->where('tbl_vendor_neraca_keuangan.tahun_mulai >=', $cek_syarat_teknis['tahun_awal_neraca_keuangan']);
        $this->db->where('tbl_vendor_neraca_keuangan.tahun_selesai <=', $cek_syarat_teknis['tahun_akhir_neraca_keuangan']);
        $this->db->group_by('tbl_vendor_neraca_keuangan.id_vendor');
        $query = $this->db->get();
        return $query->result_array();
    }


    // end cek barus kbli sbu


    // ini untuk mengabungkan data vendor terundang
    function gabung_keseluruhan_vendor_terundang($array_kbli_siup, $array_kbli_nib, $array_kbli_siujk, $array_kbli_skdp, $array_kbli_sbu)
    {
        // lolos kbli
        $mergedResult = [];

        // kbli siup
        foreach ($array_kbli_siup as $row) {
            $mergedResult[$row['id_vendor']] = $row;
        }
        // kbli siujk
        foreach ($array_kbli_siujk as $row) {
            $mergedResult[$row['id_vendor']] = $row;
        }

        // kbli skdp
        foreach ($array_kbli_skdp as $row) {
            $mergedResult[$row['id_vendor']] = $row;
        }

        // kbli sbu
        foreach ($array_kbli_sbu as $row) {
            $mergedResult[$row['id_vendor']] = $row;
        }
        // kbli nib
        foreach ($array_kbli_nib as $row) {
            if (isset($mergedResult[$row['id_vendor']])) {
                $mergedResult[$row['id_vendor']] = array_merge($mergedResult[$row['id_vendor']], $row);
            }
        }
        return $mergedResult;
    }

    function result_vendor_terundang($syarat_izin_usaha, $cek_syarat_teknis, $data_vendor_lolos_spt, $data_vendor_lolos_laporan_keuangan, $data_vendor_lolos_neraca_keuangan, $data_vendor_terundang_by_kbli, $rup)
    {
        $this->db->select('*');
        $this->db->from('tbl_vendor');
        $this->db->join('tbl_vendor_siup', 'tbl_vendor.id_vendor = tbl_vendor_siup.id_vendor', 'left');
        $this->db->join('tbl_vendor_nib', 'tbl_vendor.id_vendor = tbl_vendor_nib.id_vendor', 'left');
        $this->db->join('tbl_vendor_sbu', 'tbl_vendor.id_vendor = tbl_vendor_sbu.id_vendor', 'left');
        $this->db->join('tbl_vendor_siujk', 'tbl_vendor.id_vendor = tbl_vendor_siujk.id_vendor', 'left');
        $this->db->join('tbl_vendor_skdp', 'tbl_vendor.id_vendor = tbl_vendor_skdp.id_vendor', 'left');
        $this->db->where('tbl_vendor.sts_terundang', 1);
        $this->db->where('tbl_vendor.sts_daftar_hitam', NULL);


        // cek_kualifikasi
        if ($rup['syarat_tender_kualifikasi'] == 'Besar') {
            $this->db->where('tbl_vendor.kualifikasi_usaha', 'Besar');
        } else if ($rup['syarat_tender_kualifikasi'] == 'Menengah Besar') {
            $this->db->where_in('tbl_vendor.kualifikasi_usaha', ['Menengah', 'Besar']);
        } else if ($rup['syarat_tender_kualifikasi'] == 'Menengah') {
            $this->db->where('tbl_vendor.kualifikasi_usaha', 'Menengah');
        } else if ($rup['syarat_tender_kualifikasi'] == 'Kecil Menengah') {
            $this->db->where_in('tbl_vendor.kualifikasi_usaha', ['Kecil', 'Menengah']);
        } else if ($rup['syarat_tender_kualifikasi'] == 'Kecil') {
            $this->db->where('tbl_vendor.kualifikasi_usaha', 'Kecil');
        } else {
            $this->db->where('tbl_vendor.id_vendor', null);
        }

        // lolos_spt
        if ($cek_syarat_teknis['sts_checked_spt'] == 1) {
            if ($data_vendor_lolos_spt) {
                $id_vendor_terundang_spt = [];
                foreach ($data_vendor_lolos_spt as $row) {
                    $id_vendor_terundang_spt[] = $row['id_vendor'];
                }
                $this->db->where_in('tbl_vendor.id_vendor', $id_vendor_terundang_spt);
            } else {
                $this->db->where('tbl_vendor.id_vendor', null);
            }
        } else {
            $this->db->where('tbl_vendor.id_vendor', null);
        }

        // lolos_keuangan
        if ($cek_syarat_teknis['sts_checked_laporan_keuangan'] == 1) {
            if ($data_vendor_lolos_laporan_keuangan) {
                $id_vendor_terundang_laporan_keuangan = [];
                foreach ($data_vendor_lolos_laporan_keuangan as $row) {
                    $id_vendor_terundang_laporan_keuangan[] = $row['id_vendor'];
                }
                $this->db->where_in('tbl_vendor.id_vendor', $id_vendor_terundang_laporan_keuangan);
            } else {
                $this->db->where('tbl_vendor.id_vendor', null);
            }
        } else {
            $this->db->where('tbl_vendor.id_vendor', null);
        }

        // lolos_neraca_keuangan
        if ($cek_syarat_teknis['sts_checked_neraca_keuangan'] == 1) {
            if ($data_vendor_lolos_neraca_keuangan) {
                $id_vendor_terundang_neraca_keuangan = [];
                foreach ($data_vendor_lolos_neraca_keuangan as $row) {
                    $id_vendor_terundang_neraca_keuangan[] = $row['id_vendor'];
                }
                $this->db->where_in('tbl_vendor.id_vendor', $id_vendor_terundang_neraca_keuangan);
            } else {
                $this->db->where('tbl_vendor.id_vendor', null);
            }
        } else {
            $this->db->where('tbl_vendor.id_vendor', null);
        }

        // cek_vendor terundang by_kbli
        if ($data_vendor_terundang_by_kbli) {
            $id_vendor_terundang = [];
            foreach ($data_vendor_terundang_by_kbli as $row) {
                $id_vendor_terundang[] = $row['id_vendor'];
            }
            $this->db->where_in('tbl_vendor.id_vendor', $id_vendor_terundang);
        } else {
            $this->db->where('tbl_vendor.id_vendor', null);
        }


        // cek siup syart izin
        if ($syarat_izin_usaha['sts_checked_siup'] == 1) {
            if ($syarat_izin_usaha['sts_masa_berlaku_siup'] == 2) {
                // catatan ketika seumur hidup di vendor harus di default tanggalnya ke 2050
                $this->db->where('tbl_vendor_siup.tgl_berlaku >=', $syarat_izin_usaha['tgl_berlaku_siup']);
                $this->db->where_in('tbl_vendor_siup.sts_seumur_hidup', [1, 2]);
            } else {
                $this->db->where('tbl_vendor_siup.tgl_berlaku >=', $syarat_izin_usaha['tgl_berlaku_siup']);
                $this->db->where('tbl_vendor_siup.sts_seumur_hidup', $syarat_izin_usaha['sts_masa_berlaku_siup']);
            }
        } else {
            $this->db->where('tbl_vendor.id_vendor', null);
        }

        // cek nib syart izin
        if ($syarat_izin_usaha['sts_checked_nib'] == 1) {
            if ($syarat_izin_usaha['sts_masa_berlaku_nib'] == 2) {
                $this->db->where('tbl_vendor_nib.tgl_berlaku >=', $syarat_izin_usaha['tgl_berlaku_nib']);
                $this->db->where_in('tbl_vendor_nib.sts_seumur_hidup', [1, 2]);
            } else {
                $this->db->where('tbl_vendor_nib.tgl_berlaku >=', $syarat_izin_usaha['tgl_berlaku_nib']);
                $this->db->where('tbl_vendor_nib.sts_seumur_hidup', $syarat_izin_usaha['sts_masa_berlaku_nib']);
            }
        } else {
            $this->db->where('tbl_vendor.id_vendor', null);
        }

        // cek sbu syart izin
        if ($syarat_izin_usaha['sts_checked_sbu'] == 1) {
            if ($syarat_izin_usaha['sts_masa_berlaku_sbu'] == 2) {
                $this->db->where('tbl_vendor_sbu.tgl_berlaku >=', $syarat_izin_usaha['tgl_berlaku_sbu']);
                $this->db->where_in('tbl_vendor_sbu.sts_seumur_hidup', [1, 2]);
            } else {
                $this->db->where('tbl_vendor_sbu.tgl_berlaku >=', $syarat_izin_usaha['tgl_berlaku_sbu']);
                $this->db->where('tbl_vendor_sbu.sts_seumur_hidup', $syarat_izin_usaha['sts_masa_berlaku_sbu']);
            }
        } else {
            $this->db->where('tbl_vendor.id_vendor', null);
        }

        // cek siujk syart izin
        if ($syarat_izin_usaha['sts_checked_siujk'] == 1) {
            if ($syarat_izin_usaha['sts_masa_berlaku_siujk'] == 2) {
                $this->db->where('tbl_vendor_siujk.tgl_berlaku >=', $syarat_izin_usaha['tgl_berlaku_siujk']);
                $this->db->where_in('tbl_vendor_siujk.sts_seumur_hidup', [1, 2]);
            } else {
                $this->db->where('tbl_vendor_siujk.tgl_berlaku >=', $syarat_izin_usaha['tgl_berlaku_siujk']);
                $this->db->where('tbl_vendor_siujk.sts_seumur_hidup', $syarat_izin_usaha['sts_masa_berlaku_sbu']);
            }
        } else {
            $this->db->where('tbl_vendor.id_vendor', null);
        }

        // cek skdp syart izin
        if ($syarat_izin_usaha['sts_checked_skdp'] == 1) {
            if ($syarat_izin_usaha['sts_masa_berlaku_skdp'] == 2) {
                $this->db->where('tbl_vendor_skdp.tgl_berlaku >=', $syarat_izin_usaha['tgl_berlaku_skdp']);
                $this->db->where_in('tbl_vendor_skdp.sts_seumur_hidup', [1, 2]);
            } else {
                $this->db->where('tbl_vendor_skdp.tgl_berlaku >=', $syarat_izin_usaha['tgl_berlaku_skdp']);
                $this->db->where('tbl_vendor_skdp.sts_seumur_hidup', $syarat_izin_usaha['sts_masa_berlaku_sbu']);
            }
        } else {
            $this->db->where('tbl_vendor.id_vendor', null);
        }

        $query = $this->db->get();
        return $query->result_array();
    }
    // dokumen pengadaan dan dokumen prakualifikasi
    public function insert_dok_pengadaan($data)
    {
        $this->db->insert('tbl_dokumen_pengadaan', $data);
    }

    public function delete_dok_pengadaan($where)
    {
        $this->db->delete('tbl_dokumen_pengadaan', $where);
    }

    public function insert_dok_prakualifikasi($data)
    {
        $this->db->insert('tbl_dokumen_prakualifikasi', $data);
    }


    public function delete_dok_prakualifikasi($where)
    {
        $this->db->delete('tbl_dokumen_prakualifikasi', $where);
    }

    public function get_dokumen_pengadaan($id_rup)
    {
        $this->db->select('*');
        $this->db->from('tbl_dokumen_pengadaan');
        $this->db->where('id_rup', $id_rup);
        $query = $this->db->get();
        return $query->result_array();
    }

    public function get_dokumen_prakualifikasi($id_rup)
    {
        $this->db->select('*');
        $this->db->from('tbl_dokumen_prakualifikasi');
        $this->db->where('id_rup', $id_rup);
        $query = $this->db->get();
        return $query->result_array();
    }

    // get panitia pengadaan
    public function get_panitia($id_rup)
    {
        $this->db->select('*');
        $this->db->from('tbl_panitia');
        $this->db->join('tbl_manajemen_user', 'tbl_panitia.id_manajemen_user = tbl_manajemen_user.id_manajemen_user', 'left');
        $this->db->join('tbl_pegawai', 'tbl_manajemen_user.id_pegawai = tbl_pegawai.id_pegawai', 'left');
        $this->db->where('id_rup', $id_rup);
        $this->db->where('tbl_manajemen_user.role', 5);
        $query = $this->db->get();
        return $query->result_array();
    }

    // get datatable paket draft

    // GET RUP PAKET FINAL
    var $order_paket =  array('id_rup', 'kode_rup', 'tahun_rup', 'nama_program_rup', 'kode_departemen', 'total_pagu_rup', 'id_rup', 'id_rup', 'id_rup');
    // get nib
    private function _get_data_query_daftar_paket()
    {
        $this->db->select('*');
        $this->db->from('tbl_rup');
        $this->db->join('tbl_panitia', 'tbl_rup.id_rup = tbl_panitia.id_rup', 'left');
        $this->db->join('tbl_departemen', 'tbl_rup.id_departemen = tbl_departemen.id_departemen', 'left');
        $this->db->join('tbl_section', 'tbl_rup.id_section = tbl_section.id_section', 'left');
        $this->db->join('tbl_rkap', 'tbl_rup.id_rkap = tbl_rkap.id_rkap', 'left');
        $this->db->join('tbl_provinsi', 'tbl_rup.id_provinsi = tbl_provinsi.id_provinsi', 'left');
        $this->db->join('tbl_kabupaten', 'tbl_rup.id_kabupaten = tbl_kabupaten.id_kabupaten', 'left');
        $this->db->join('tbl_jenis_pengadaan', 'tbl_rup.id_jenis_pengadaan = tbl_jenis_pengadaan.id_jenis_pengadaan', 'left');
        $this->db->join('tbl_metode_pengadaan', 'tbl_rup.id_metode_pengadaan = tbl_metode_pengadaan.id_metode_pengadaan', 'left');
        $this->db->join('tbl_jenis_anggaran', 'tbl_rup.id_jenis_anggaran = tbl_jenis_anggaran.id_jenis_anggaran', 'left');
        $this->db->join('mst_ruas', 'tbl_rup.id_ruas = mst_ruas.id_ruas', 'left');
        $this->db->where_in('tbl_rup.status_paket_panitia', [1, 2]);
        $this->db->where('tbl_panitia.id_manajemen_user', $this->session->userdata('id_manajemen_user'));
        $i = 0;
        foreach ($this->order_paket as $item) // looping awal
        {
            if ($_POST['search']['value']) // jika datatable mengirimkan pencarian dengan metode POST
            {

                if ($i === 0) // looping awal
                {
                    $this->db->group_start();
                    $this->db->like($item, $_POST['search']['value']);
                } else {
                    $this->db->or_like(
                        $item,
                        $_POST['search']['value']
                    );
                }

                if (count($this->order_paket) - 1 == $i)
                    $this->db->group_end();
            }
            $i++;
        }
        if (isset($_POST['order'])) {
            $this->db->order_by($this->order_paket[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else {
            $this->db->order_by('tbl_rup.id_rup', 'DESC');
        }
    }

    public function gettable_daftar_paket() //nam[ilin data pake ini
    {
        $this->_get_data_query_daftar_paket(); //ambil data dari get yg di atas
        if ($_POST['length'] != -1) {
            $this->db->limit($_POST['length'], $_POST['start']);
        }
        $query = $this->db->get();
        return $query->result();
    }

    public function count_filtered_daftar_paket()
    {
        $this->_get_data_query_daftar_paket(); //ambil data dari get yg di atas
        $query = $this->db->get();
        return $query->num_rows();
    }
    public function count_all_daftar_paket()
    {
        $this->db->select('*');
        $this->db->from('tbl_rup');
        $this->db->join('tbl_departemen', 'tbl_rup.id_departemen = tbl_departemen.id_departemen', 'left');
        $this->db->join('tbl_section', 'tbl_rup.id_section = tbl_section.id_section', 'left');
        $this->db->join('tbl_rkap', 'tbl_rup.id_rkap = tbl_rkap.id_rkap', 'left');
        $this->db->join('tbl_provinsi', 'tbl_rup.id_provinsi = tbl_provinsi.id_provinsi', 'left');
        $this->db->join('tbl_kabupaten', 'tbl_rup.id_kabupaten = tbl_kabupaten.id_kabupaten', 'left');
        $this->db->join('tbl_jenis_pengadaan', 'tbl_rup.id_jenis_pengadaan = tbl_jenis_pengadaan.id_jenis_pengadaan', 'left');
        $this->db->join('tbl_metode_pengadaan', 'tbl_rup.id_metode_pengadaan = tbl_metode_pengadaan.id_metode_pengadaan', 'left');
        $this->db->join('tbl_jenis_anggaran', 'tbl_rup.id_jenis_anggaran = tbl_jenis_anggaran.id_jenis_anggaran', 'left');
        $this->db->join('mst_ruas', 'tbl_rup.id_ruas = mst_ruas.id_ruas', 'left');
        $this->db->where('tbl_rup.status_paket_panitia', 1);
        return $this->db->count_all_results();
    }

    public function get_ruas($id_rup)
    {
        $this->db->select('*');
        $this->db->from('tbl_ruas_rup');
        $this->db->join('mst_ruas', 'tbl_ruas_rup.id_ruas = mst_ruas.id_ruas');
        $this->db->where('tbl_ruas_rup.id_rup', $id_rup);
        $query = $this->db->get();
        return $query->result_array();
    }

    // INI UNTUK BERANDA

    // TENDER UMUM TABLE
        // get datatable paket draft

    // GET RUP PAKET FINAL
    var $order_paket_tender_umum =  array('id_rup', 'kode_rup', 'tahun_rup', 'nama_program_rup', 'kode_departemen', 'total_pagu_rup', 'id_rup', 'id_rup', 'id_rup');
    // get nib
    private function _get_data_query_daftar_paket_tender_umum()
    {
        $this->db->select('*');
        $this->db->from('tbl_rup');
        $this->db->join('tbl_panitia', 'tbl_rup.id_rup = tbl_panitia.id_rup', 'left');
        $this->db->join('tbl_departemen', 'tbl_rup.id_departemen = tbl_departemen.id_departemen', 'left');
        $this->db->join('tbl_section', 'tbl_rup.id_section = tbl_section.id_section', 'left');
        $this->db->join('tbl_rkap', 'tbl_rup.id_rkap = tbl_rkap.id_rkap', 'left');
        $this->db->join('tbl_provinsi', 'tbl_rup.id_provinsi = tbl_provinsi.id_provinsi', 'left');
        $this->db->join('tbl_kabupaten', 'tbl_rup.id_kabupaten = tbl_kabupaten.id_kabupaten', 'left');
        $this->db->join('tbl_jenis_pengadaan', 'tbl_rup.id_jenis_pengadaan = tbl_jenis_pengadaan.id_jenis_pengadaan', 'left');
        $this->db->join('tbl_metode_pengadaan', 'tbl_rup.id_metode_pengadaan = tbl_metode_pengadaan.id_metode_pengadaan', 'left');
        $this->db->join('tbl_jenis_anggaran', 'tbl_rup.id_jenis_anggaran = tbl_jenis_anggaran.id_jenis_anggaran', 'left');
        $this->db->join('mst_ruas', 'tbl_rup.id_ruas = mst_ruas.id_ruas', 'left');
        $this->db->where('tbl_rup.status_paket_diumumkan', 1);
        // Tender Umum
        $this->db->where('tbl_rup.id_metode_pengadaan', 1);
        $this->db->where('tbl_panitia.id_manajemen_user', $this->session->userdata('id_manajemen_user'));
        $i = 0;
        foreach ($this->order_paket_tender_umum as $item) // looping awal
        {
            if ($_POST['search']['value']) // jika datatable mengirimkan pencarian dengan metode POST
            {

                if ($i === 0) // looping awal
                {
                    $this->db->group_start();
                    $this->db->like($item, $_POST['search']['value']);
                } else {
                    $this->db->or_like(
                        $item,
                        $_POST['search']['value']
                    );
                }

                if (count($this->order_paket_tender_umum) - 1 == $i)
                    $this->db->group_end();
            }
            $i++;
        }
        if (isset($_POST['order'])) {
            $this->db->order_by($this->order_paket_tender_umum[$_POST['order']['0']['column']], $_POST['order']['0']['dir']);
        } else {
            $this->db->order_by('tbl_rup.id_rup', 'DESC');
        }
    }

    public function gettable_daftar_paket_tender_umum() //nam[ilin data pake ini
    {
        $this->_get_data_query_daftar_paket_tender_umum(); //ambil data dari get yg di atas
        if ($_POST['length'] != -1) {
            $this->db->limit($_POST['length'], $_POST['start']);
        }
        $query = $this->db->get();
        return $query->result();
    }

    public function count_filtered_daftar_paket_tender_umum()
    {
        $this->_get_data_query_daftar_paket_tender_umum(); //ambil data dari get yg di atas
        $query = $this->db->get();
        return $query->num_rows();
    }
    public function count_all_daftar_paket_tender_umum()
    {
        $this->db->select('*');
        $this->db->from('tbl_rup');
        $this->db->join('tbl_departemen', 'tbl_rup.id_departemen = tbl_departemen.id_departemen', 'left');
        $this->db->join('tbl_section', 'tbl_rup.id_section = tbl_section.id_section', 'left');
        $this->db->join('tbl_rkap', 'tbl_rup.id_rkap = tbl_rkap.id_rkap', 'left');
        $this->db->join('tbl_provinsi', 'tbl_rup.id_provinsi = tbl_provinsi.id_provinsi', 'left');
        $this->db->join('tbl_kabupaten', 'tbl_rup.id_kabupaten = tbl_kabupaten.id_kabupaten', 'left');
        $this->db->join('tbl_jenis_pengadaan', 'tbl_rup.id_jenis_pengadaan = tbl_jenis_pengadaan.id_jenis_pengadaan', 'left');
        $this->db->join('tbl_metode_pengadaan', 'tbl_rup.id_metode_pengadaan = tbl_metode_pengadaan.id_metode_pengadaan', 'left');
        $this->db->join('tbl_jenis_anggaran', 'tbl_rup.id_jenis_anggaran = tbl_jenis_anggaran.id_jenis_anggaran', 'left');
        $this->db->join('mst_ruas', 'tbl_rup.id_ruas = mst_ruas.id_ruas', 'left');
        $this->db->where('tbl_rup.status_paket_panitia', 1);
        return $this->db->count_all_results();
    }

}
