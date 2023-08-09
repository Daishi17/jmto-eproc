<script>
    var tbl_rup = $('#tbl_rup')
    var url_get_rup_buat_paket = $('[name="url_get_rup_buat_paket"').val()
    $(document).ready(function() {
        tbl_rup.DataTable({
            "responsive": false,
            "ordering": true,
            "processing": true,
            "serverSide": true,
            "autoWidth": false,
            "bDestroy": true,
            "dom": 'Bfrtip',
            "buttons": ["excel", "pdf", "print", "colvis"],
            "order": [],
            "ajax": {
                "url": url_get_rup_buat_paket,
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

    function Reload_table_rup() {
        tbl_rup.DataTable().ajax.reload();
    }

    function by_id_rup(id_url_rup, type) {
        var url_by_id_rup_paket = $('[name="url_by_id_rup_paket"]').val();
        var modal_paket = $('#modal-xl-paket');
        if (type == 'buat_paket') {
            saveData = 'buat_paket';
        }
        // if (type == 'finalisasi') {
        //     saveData = 'finalisasi';
        // }
        $.ajax({
            type: "GET",
            url: url_by_id_rup_paket + id_url_rup,
            dataType: "JSON",
            success: function(response) {
                modal_paket.modal('show');
                $('[name="random_kode"]').val(response['row_rup']['id_url_rup']);
                $('#kode_rup').text(response['row_rup']['kode_rup']);
                $('#tahun_rup').text(response['row_rup']['tahun_rup']);
                $('#nama_departemen').text(response['row_rup']['nama_departemen']);
                // add to paket
                $('#nama_departemen2').text(response['row_rup']['nama_departemen']);
                // end add
                $('#nama_section').text(response['row_rup']['nama_section']);
                $('#nama_rup').text(response['row_rup']['nama_rup']);
                $('#detail_lokasi_rup').text(response['row_rup']['detail_lokasi_rup']);
                $('#deskripsi_rup').text(response['row_rup']['deskripsi_rup']);
                $('#nama_provinsi').text(response['row_rup']['nama_provinsi']);
                $('#nama_kabupaten').text(response['row_rup']['nama_kabupaten']);
                $('#nama_jenis_pengadaan').text(response['row_rup']['nama_jenis_pengadaan']);
                $('#nama_metode_pengadaan').text(response['row_rup']['nama_metode_pengadaan']);
                $('#nama_jenis_anggaran').text(response['row_rup']['nama_jenis_anggaran']);
                $('#total_pagu_rup').text(formatRupiah(response['row_rup']['total_pagu_rup'], 'Rp.'));
                $('#waktu_pelakasanaan').text(response['row_rup']['jangka_waktu_mulai_pelaksanaan'] +
                    ' s/d ' + response['row_rup']['jangka_waktu_mulai_pelaksanaan']);
                $('#hari_pelaksanaan').text(response['row_rup']['jangka_waktu_hari_pelaksanaan']);
                $('#status_pencatatan').text(response['row_rup']['status_pencatatan']);
                $('#persen_pencatatan').text(response['row_rup']['persen_pencatatan']);
                $('#jenis_produk').text(response['row_rup']['jenis_produk']);
                $('#kualifikasi_usaha').text(response['row_rup']['kualifikasi_usaha']);
                console.log(response['result_ruas_rup']);
                var html = '';
                var i;
                for (i = 0; i < response['result_ruas_rup'].length; i++) {
                    if (i == 0) {
                        var ada_dan = '';
                    } else {
                        ada_dan = ' &';
                    }
                    html += '<small>' + ada_dan + ' ' + response['result_ruas_rup'][i].ruas_lokasi + '</small>';
                }
                $('#detail_ruas_rup').html(html);
            }
        })
    }


    function ubah_rup() {
        var url_ubah_rup = $('[name="url_ubah_rup"]').val();
        var url_by_id_rup = $('[name="url_by_id_rup"]').val();
        var random_kode = $('[name="random_kode"]').val();
        $.ajax({
            type: "POST",
            url: url_by_id_rup + random_kode,
            data: {
                random_kode: random_kode
            },
            dataType: "JSON",
            success: function(response) {
                location.replace(url_ubah_rup + random_kode)
            }
        })
    }



    function finalisasi_rup() {
        var random_kode = $('[name="random_kode"]').val();
        var nama_rup = $('#nama_rup').text();
        var url_finaliasi_rup = $('[name="url_finaliasi_rup"]').val()
        var modal_detail = $('#modal-xl-detail');

        Swal.fire({
            title: 'Apakah Anda Yakin Ingin Memfinalisasi ? ',
            text: nama_rup,
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Terima!',
            cancelButtonText: 'Batal!',
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "POST",
                    url: url_finaliasi_rup,
                    data: {
                        random_kode: random_kode,
                    },
                    dataType: "JSON",
                    success: function(response) {
                        modal_detail.modal('hide');
                        Swal.fire('Rup Berhasil Di Finalisasi!', '', 'success')
                        Reload_table_rup();
                    }
                })

            }
        })
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


    var tbl_panitia = $('#tbl_panitia')
    var url_get_panitia_buat_paket = $('[name="url_get_panitia_buat_paket"').val()
    $(document).ready(function() {
        tbl_panitia.DataTable({
            "responsive": false,
            "ordering": true,
            "paging": false,
            "info": false,
            "processing": true,
            "serverSide": true,
            "autoWidth": false,
            "bDestroy": true,
            "order": [],
            "ajax": {
                "url": url_get_panitia_buat_paket,
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
        });
    });

    function Reload_table_panitia() {
        tbl_panitia.DataTable().ajax.reload();
    }

    function Simpan_panitia() {
        var url_tambah_panitia = $('[name="url_tambah_panitia"]').val();
        var random_kode = $('[name="random_kode"]').val();
        var nama_panitia = $('[name="nama_panitia"]').val();
        var role_panitia = $('[name="role_panitia"]').val();
        $.ajax({
            type: "POST",
            url: url_tambah_panitia,
            data: {
                random_kode: random_kode,
                nama_panitia: nama_panitia,
                role_panitia: role_panitia
            },
            dataType: "JSON",
            success: function(response) {
                if (response['error']) {
                    Swal.fire('Maaf!', response['error'], 'warning')
                } else {
                    Swal.fire('Panitia Berhasil Di Tambah!', '', 'success')
                    Reload_table_panitia()
                }
            }
        })
    }
    $('#metode_kualifikasi_tambah').change(function() {
        var id_provinsi = $('#metode_kualifikasi_tambah').val();
        $.ajax({
            type: 'GET',
            url: url_provinsi + id_provinsi,
            success: function(html) {
                $('#kabupatentambah').html(html);
            }
        });
    })
</script>