<script>
    $(document).ready(function() {
        $('#tbl_paket_tender_umum').DataTable({
            "responsive": false,
            "ordering": true,
            "processing": true,
            "serverSide": true,
            "autoWidth": false,
            "bDestroy": true,
            "buttons": ["excel", "pdf", "print", "colvis"],
            initComplete: function() {
                this.api().buttons().container().appendTo($('.col-md-6:eq(0)', this.api().table().container()));
            },
            "order": [],
            "ajax": {
                "url": '<?= base_url('panitia/beranda/beranda/get_draft_paket_tender_umum') ?>',
                "type": "POST",
            },
            "columnDefs": [{
                "target": [-1],
                "orderable": false
            }],
            "oLanguage": {
                "sSearch": "Pencarian : ",
                "sEmptyTable": "Data Tidak Tersedia",
                "sLoadingRecords": "Silahkan Tunggu - loading...",
                "sLengthMenu": "Menampilkan &nbsp;  _MENU_  &nbsp;   Data",
                "sZeroRecords": "Tidak Ada Data Yang Di Cari",
                "sProcessing": "Memuat Data...."
            }
        }).buttons().container().appendTo('#tbl_rup .col-md-6:eq(0)');
    });

    function Reload_table_paket_tender_umum() {
        $('#tbl_paket_tender_umum').DataTable().ajax.reload();
    }

    function byid_paket(id_url_rup) {
        var url_cek_dokumen_hps = $('[name="url_cek_dokumen_hps"]').val()
        var url_by_id_rup = $('[name="url_by_id_rup"]').val()
        $.ajax({
            type: "GET",
            url: url_by_id_rup + id_url_rup,
            dataType: "JSON",
            success: function(response) {
                $('#modal-xl-detail').modal('show')
                if (response['row_rup'].jenis_kontrak == 1) {
                    var jenis_kontrak = 'Lump Sum'
                } else if (response['row_rup'].jenis_kontrak == 2) {
                    var jenis_kontrak = 'Harga Satuan'
                } else if (response['row_rup'].jenis_kontrak == 3) {
                    var jenis_kontrak = 'Gabungan Lump Sum dan Harga Satuan'
                } else if (response['row_rup'].jenis_kontrak == 4) {
                    var jenis_kontrak = 'Terima Jadi(Turnkey)'
                } else if (response['row_rup'].jenis_kontrak == 5) {
                    var jenis_kontrak = 'Persentase( % )'
                }

                function formatRupiah(angka, prefix) {
                    var number_string = angka.replace(/[^,\d]/g, '').toString(),
                        split = number_string.split(','),
                        sisa = split[0].length % 3,
                        rupiah = split[0].substr(0, sisa),
                        ribuan = split[0].substr(sisa).match(/\d{3}/gi);

                    if (ribuan) {
                        separator = sisa ? '.' : '';
                        rupiah += separator + ribuan.join('.');
                    }

                    rupiah = split[1] != undefined ? rupiah + ',' + split[1] : rupiah;
                    return prefix == undefined ? rupiah : (rupiah ? 'Rp. ' + rupiah : '');
                }
                $('#syarat_tender_kualifikasi').text(response['row_rup'].syarat_tender_kualifikasi)
                $('#persen_pencatatan').text(response['row_rup'].persen_pencatatan)
                $('#status_pencatatan').text(response['row_rup'].status_pencatatan)
                $('#kode_rup').text(response['row_rup'].kode_rup)
                $('#detail_lokasi_rup').text(response['row_rup'].detail_lokasi_rup)
                $('#tahun_rup').text(response['row_rup'].tahun_rup)
                $('#nama_departemen').text(response['row_rup'].nama_departemen)
                $('#nama_section').text(response['row_rup'].nama_section)
                $('#nama_rup').text(response['row_rup'].nama_rup)
                $('#jangka_waktu_mulai_pelaksanaan').text(response['row_rup'].jangka_waktu_mulai_pelaksanaan)
                $('#jangka_waktu_selesai_pelaksanaan').text(response['row_rup'].jangka_waktu_selesai_pelaksanaan)
                $('#jangka_waktu_hari_pelaksanaan').text(response['row_rup'].jangka_waktu_hari_pelaksanaan)
                $('#nama_jenis_anggaran').text(response['row_rup'].nama_jenis_anggaran)
                $('#nama_jenis_pengadaan').text(response['row_rup'].nama_jenis_pengadaan)
                $('#nama_metode_pengadaan').text(response['row_rup'].nama_metode_pengadaan)
                $('#metode_kualifikasi').text(response['row_rup'].metode_kualifikasi)
                $('#metode_dokumen').text(response['row_rup'].metode_dokumen)
                $('#kualifikasi_usaha').text(response['row_rup'].kualifikasi_usaha)
                $('#jenis_kontrak').text(jenis_kontrak)
                $('#bobot_teknis').text(response['row_rup'].bobot_teknis)
                $('#bobot_biaya').text(response['row_rup'].bobot_biaya)
                $('#total_pagu_rup').text('Rp. ' + formatRupiah(response['row_rup'].total_pagu_rup))
                $('#total_hps_rup').text('Rp. ' + formatRupiah(response['row_rup'].total_hps_rup))
                $('#detail_jadwal').html('<a href="javascript:;" onclick="lihat_detail_jadwal(\'' + response['row_rup'].id_url_rup + '\')" class="btn btn-sm btn-primary"><i class="fa-solid fa-calendar-days px-1"></i>Detail Jadwal Pengadaan</a>')
                // detail jadwal
                if (response['row_rup'].bobot_nilai == 1) {
                    $('#bobot_nilai').text('Kombinasi')
                    $('#bobot_teknis').text(response['row_rup'].bobot_teknis)
                    $('#bobot_biaya').text(response['row_rup'].bobot_biaya)
                } else if (response['row_rup'].bobot_nilai == 2) {
                    $('#bobot_nilai').text('Bobot Teknis')
                    $('#bobot_teknis').text(response['row_rup'].bobot_teknis)
                } else {
                    $('#bobot_nilai').text('Bobot Biaya')
                    $('#bobot_biaya').text(response['row_rup'].bobot_biaya)
                }

                if (response['row_rup'].beban_tahun_anggaran == 1) {
                    $('#beban_tahun_anggaran').text('Tahun Tungggal');
                } else {
                    $('#beban_tahun_anggaran').text('Tahun Jamak');
                }

                var html = '';
                var i;
                for (i = 0; i < response['panitia'].length; i++) {
                    if (response['panitia'][i].role_panitia == 1) {
                        var role_panitia = 'Ketua Panitia'
                    } else if (response['panitia'][i].role_panitia == 2) {
                        var role_panitia = 'Sekretaris Panitia'
                    } else if (response['panitia'][i].role_panitia == 3) {
                        var role_panitia = 'Anggota Panitia'
                    }
                    html += '<tr>' +
                        '<td><small>' + response['panitia'][i].nama_pegawai + '</small></td>' +
                        '<td><small>' + role_panitia + '</small></td>' +
                        '</tr>';
                }
                $('#load_panitia').html(html);

                var html2 = ''
                var j;
                for (j = 0; j < response['ruas'].length; j++) {
                    html2 += '<small>' + response['ruas'][i].nama_ruas + '</small> , </td>';
                }
                $('#load_ruas').html('<i class="fa-solid fa-road px-2"></i>' + html2);

                var html_dok_hps = '';
                if (response['row_rup'].file_hps) {
                    html_dok_hps += '<a target="_blank" href="' + url_cek_dokumen_hps + response['row_rup'].nama_rup + '/HPS' + '/' + response['row_rup'].file_hps + '" class="btn btn-default btn-info">' + '<i class="fa-solid fa-file px-1"></i>' + response['row_rup'].file_hps + '</a>';
                    $('.load_dok_Hps').html(html_dok_hps);
                } else {
                    html_dok_hps += '<a class="btn btn-danger btn-sm">' + '<i class="fa-solid fa-file px-1"></i>' + 'Belum Upload' + '</a>';
                    $('.load_dok_Hps').html(html_dok_hps);
                }
                var html_status_paket = '';
                if (response['row_rup'].status_paket_panitia == 1) {
                    html_status_paket += '<small><span class="badge bg-warning text-dark">Draft Paket</span></small>';
                    $('.load_status_paket').html(html_status_paket);
                } else {
                    html_status_paket += '<small><span class="badge bg-success text-white">Tender Sedang Berlangsung</span></small>';
                    $('.load_status_paket').html(html_status_paket);
                }

                if (response['row_rup'].status_paket_panitia == 1) {
                    $('.status_dimumkan').attr("disabled", false);
                } else {
                    $('.status_dimumkan').attr("disabled", true);
                }
                // bagian ini khusus untuk umumkan paket
                $('[name="id_url_rup"]').val(response['row_rup'].id_url_rup)
                $('[name="nama_rup"]').val(response['row_rup'].nama_rup)

                // ini untuk get syarat izin administarsi legalitas rup
                // siup
                if (response['row_syarat_administrasi_rup'].sts_checked_siup == 1) {
                    $('#siup_izin').css('display', 'block')
                    if (response['row_syarat_administrasi_rup'].sts_masa_berlaku_siup == 1) {
                        $('#sts_masa_berlaku_siup').text(response['row_syarat_administrasi_rup'].tgl_berlaku_siup)
                    } else {
                        $('#sts_masa_berlaku_siup').text('Seumur Hidup')
                    }
                } else {

                }

                // nib
                if (response['row_syarat_administrasi_rup'].sts_checked_nib == 1) {
                    $('#nib_izin').css('display', 'block')
                    if (response['row_syarat_administrasi_rup'].sts_masa_berlaku_nib == 1) {
                        $('#sts_masa_berlaku_nib').text(response['row_syarat_administrasi_rup'].tgl_berlaku_nib)
                    } else {
                        $('#sts_masa_berlaku_nib').text('Seumur Hidup')
                    }
                } else {

                }

                // sbu
                if (response['row_syarat_administrasi_rup'].sts_checked_sbu == 1) {
                    $('#sbu_izin').css('display', 'block')
                    if (response['row_syarat_administrasi_rup'].sts_masa_berlaku_sbu == 1) {
                        $('#sts_masa_berlaku_sbu').text(response['row_syarat_administrasi_rup'].tgl_berlaku_sbu)
                    } else {
                        $('#sts_masa_berlaku_sbu').text('Seumur Hidup')
                    }
                } else {

                }

                // siujk
                if (response['row_syarat_administrasi_rup'].sts_checked_siujk == 1) {
                    $('#siujk_izin').css('display', 'block')
                    if (response['row_syarat_administrasi_rup'].sts_masa_berlaku_siujk == 1) {
                        $('#sts_masa_berlaku_siujk').text(response['row_syarat_administrasi_rup'].tgl_berlaku_siujk)
                    } else {
                        $('#sts_masa_berlaku_siujk').text('Seumur Hidup')
                    }
                } else {

                }

                
                // skdp
                if (response['row_syarat_administrasi_rup'].sts_checked_skdp == 1) {
                    $('#skdp_izin').css('display', 'block')
                    if (response['row_syarat_administrasi_rup'].sts_masa_berlaku_skdp == 1) {
                        $('#sts_masa_berlaku_skdp').text(response['row_syarat_administrasi_rup'].tgl_berlaku_skdp)
                    } else {
                        $('#sts_masa_berlaku_skdp').text('Seumur Hidup')
                    }
                } else {
                    $('#skdp_izin').css('display', 'none')
                    $('#sts_masa_berlaku_skdp').text('Tidak Diperlukan')
                }
            }
        })
    }

    function lihat_detail_jadwal(id_url_rup) {
        var url_by_id_rup = $('[name="url_by_id_rup"]').val()
        var modal_detail_jadwal = $('#modal_detail_jadwal')
        $.ajax({
            type: "GET",
            url: url_by_id_rup + id_url_rup,
            dataType: "JSON",
            success: function(response) {
                modal_detail_jadwal.modal('show');
                var html = '';
                var i;
                var no = 1;
                for (i = 0; i < response['jadwal'].length; i++) {

                    var waktu_mulai = new Date(response['jadwal'][i].waktu_mulai);
                    var waktu_selesai = new Date(response['jadwal'][i].waktu_selesai);
                    var sekarang = new Date();
                    // kondisi jadwal
                    if (sekarang < waktu_mulai) {
                        var check = '';
                        var status_waktu = '<small><span class="badge bg-danger"><i class="fa fa-clock" aria-hidden="true"></i> Tahap Belum Mulai </span></small>';
                    } else if (sekarang >= waktu_mulai && sekarang <= waktu_selesai) {
                        var check = '';
                        var status_waktu = '<small><span class="badge bg-warning"><i class="fa fa-clock" aria-hidden="true"></i> Tahap Sedang Di Mulai </span></small>';
                    } else if (sekarang > waktu_selesai && sekarang <= waktu_selesai) {
                        var check = '<i class="fa fa-check text-success" aria-hidden="true"></i>';
                        var status_waktu = '<small><span class="badge bg-success"><i class="fa fa-clock" aria-hidden="true"></i> Tahap Sudah Selesai </span></small>';
                    } else {
                        var check = '<i class="fa fa-check text-success" aria-hidden="true"></i>';
                        var status_waktu = '<small><span class="badge bg-success"><i class="fa fa-clock" aria-hidden="true"></i> Tahap Sudah Selesai </span></small>';
                    }

                    html += '<tr>' +
                        '<td><small>' + no++ + '</small></td>' +
                        '<td><small>' + response['jadwal'][i].nama_jadwal_rup + ' ' + check + '</small></td>' +
                        '<td><small>' + response['jadwal'][i].waktu_mulai + '</small></td>' +
                        '<td><small>' + response['jadwal'][i].waktu_selesai + '</small></td>' +
                        '<td>' + status_waktu + '</td>' +
                        '</tr>';
                }
                $('#load_jadwal').html(html);
            }
        })
    }
</script>