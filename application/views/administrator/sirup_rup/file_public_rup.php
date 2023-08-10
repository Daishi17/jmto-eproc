<script>
    // akta_pendirian
    $('.file_rkap').change(function(e) {
        var geekss = e.target.files[0].name;
        $('[name="file_rkap_manipulasi"]').val(geekss);
    });
    var tbl_rkap = $('#tbl_rkap')
    var url_get_rkap = $('[name="url_get_rkap"').val()
    $(document).ready(function() {
        tbl_rkap.DataTable({
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
                "url": url_get_rkap,
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
        }).buttons().container().appendTo('#tbl_rkap .col-md-6:eq(0)');
    });

    function Reload_table_rkap() {
        tbl_rkap.DataTable().ajax.reload();
    }

    function by_id_buat_rup(id_url_rkap, type) {
        var url_by_id_buat_rup = $('[name="url_by_id_buat_rup"]').val();
        var url_buat_rup = $('[name="url_buat_rup"]').val();
        if (type == 'edit') {
            saveData = 'edit';
        }
        if (type == 'finalisasi') {
            saveData = 'finalisasi';
        }
        $.ajax({
            type: "GET",
            url: url_by_id_buat_rup + id_url_rkap,
            dataType: "JSON",
            success: function(response) {
                location.replace(url_buat_rup);
            }
        })
    }
    $(".total_pagu_rup").keyup(function() {
        var harga = $(".total_pagu_rup").val();
        var tanpa_rupiah = document.getElementById('rupiah_total_pagu_rup');
        tanpa_rupiah.value = formatRupiah(this.value, 'Rp. ');

        var persen_pencatatan = $('[name="persen_pencatatan"]').val()
        var nilai_pencatatan = harga * persen_pencatatan / 100;

        $('[name="nilai_pencatatan"]').val(nilai_pencatatan);
        $('#nilai_pencatatan2').val(nilai_pencatatan)

        var tanpa_rupiah2 = document.getElementById('nilai_pencatatan2');
        tanpa_rupiah2.value = formatRupiah(this.value, 'Rp. ');



        /* Fungsi */
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
    });

    // Get_kode_rup()

    // function Get_kode_rup() {
    //     var url_get_kode_rup = $('[name="url_get_kode_rup"]').val();
    //     $.ajax({
    //         method: "GET",
    //         url: url_get_kode_rup,
    //         dataType: "JSON",
    //         success: function(response) {
    //             $('[name="kode_urut_rup"').val(response['kode_urut_rup'])
    //             $('[name="kode_urut_manipulasi"').val(response['get_row_departemen']['kode_departemen'] + '.' + response['kode_urut_rup'])
    //         }
    //     })
    // }

    $('#select_departemen').change(function() {
        var url_get_section_by_departemen = $('[name="url_get_section_by_departemen"]').val();
        var id_departemen = $('#select_departemen').val();
        $.ajax({
            type: 'GET',
            url: url_get_section_by_departemen + id_departemen,
            success: function(html) {
                $('#section_data').html(html);
            }
        });
    })

    function pilih_jenis_anggaran() {
        var url_get_kode_jenis_anggaran = $('[name="url_get_kode_jenis_anggaran"]').val();
        var id_departemen = $('[name="id_departemen"]').val();
        var id_section = $('[name="id_section"]').val();
        var id_jenis_anggaran = $('[name="id_jenis_anggaran"]').val();
        if (id_departemen == '') {
            Swal.fire('Maaf Pilih Departement Dahulu!', '', 'warning');
        } else if (id_section == '') {
            Swal.fire('Maaf Pilih Section Dahulu!', '', 'warning');
        } else if (id_jenis_anggaran == '') {
            Swal.fire('Maaf Pilih Jenis Anggaran Dahulu!', '', 'warning');
        } else {
            $.ajax({
                method: "POST",
                url: url_get_kode_jenis_anggaran,
                data: {
                    id_departemen: id_departemen,
                    id_section: id_section,
                    id_jenis_anggaran: id_jenis_anggaran
                },
                dataType: "JSON",
                success: function(response) {
                    $('[name="kode_urut_rup"').val(response['kode_urut_rup'])
                    $('[name="kode_urut_manipulasi"').val(response['get_row_jenis_anggaran']['kode_string'] + '.' + response['get_row_departemen']['kode_departemen'] + '.' + response['kode_urut_rup'])
                }
            })
        }
    }

    var i = 1;
    var url_provinsi = $('[name="url_provinsi"]').val();
    $('#add').click(function() {
        i++;
        $('#dynamic_field').append('<tr id="row' + i + '">' +
            '<td colspan="3"><div class="input-group mb-2">' +
            '<span class="input-group-text"><i class="fa-solid fa-road"></i></span><input type="text" placeholder="Ruas Toll" name="ruas_lokasi[]" class="form-control">' +
            '</div></td>' +
            '<td class="text-center"><button type="button" name="remove" id="' + i + '" class="btn btn-danger btn_remove"><i class="fas fa-trash-alt"></i></button></td>' +
            '</tr>');
    });
    // tanpa Javas script looping
    $(document).on('click', '.btn_remove', function() {
        var button_id = $(this).attr("id");
        $('#row' + button_id + '').remove();
    });

    $('#provinsitambah').change(function() {
        var id_provinsi = $('#provinsitambah').val();
        $.ajax({
            type: 'GET',
            url: url_provinsi + id_provinsi,
            success: function(html) {
                $('#kabupatentambah').html(html);
            }
        });
    })

    function Simpan_rup() {
        var url_post_rup = $('[name="url_post_rup"]').val();
        var form_rup = $('#form_rup');
        $.ajax({
            method: "POST",
            url: url_post_rup,
            dataType: "JSON",
            data: form_rup.serialize(),
            // beforeSend: function() {
            //     $('#button_dekrip_generate').css('display', 'none');
            //     $('#button_dekrip_generate_manipulasi').css('display', 'block');
            // },
            success: function(response) {
                if (response['error']) {
                    // tahun_rup
                    $('.tahun_rup_validation').html(response['error']['tahun_rup']);
                    // id_departemen
                    $('.id_departemen_validation').html(response['error']['id_departemen']);
                    // id_section
                    $('.id_section_validation').html(response['error']['id_section']);
                    // nama_rup
                    $('.nama_rup_validation').html(response['error']['nama_rup']);
                    // deskripsi_rup
                    $('.deskripsi_rup_validation').html(response['error']['deskripsi_rup']);
                    // id_provinsi
                    $('.id_provinsi_validation').html(response['error']['id_provinsi']);
                    // id_kabupaten
                    $('.id_kabupaten_validation').html(response['error']['id_kabupaten']);
                    // id_jenis_pengadaan
                    $('.id_jenis_pengadaan_validation').html(response['error']['id_jenis_pengadaan']);
                    // id_metode_pengadaan
                    $('.id_metode_pengadaan_validation').html(response['error']['id_metode_pengadaan']);
                    // id_jenis_anggaran
                    $('.id_jenis_anggaran_validation').html(response['error']['id_jenis_anggaran']);
                    // kualifikasi_usaha
                    $('.kualifikasi_usaha_validation').html(response['error']['kualifikasi_usaha']);
                    // jenis_produk
                    $('.jenis_produk_validation').html(response['error']['jenis_produk']);
                    // status_pencatatan
                    $('.status_pencatatan_validation').html(response['error']['status_pencatatan']);
                    // persen_pencatatan
                    $('.persen_pencatatan_validation').html(response['error']['persen_pencatatan']);
                    // jangka_waktu_mulai_pelaksanaan
                    $('.jangka_waktu_mulai_pelaksanaan_validation').html(response['error']['jangka_waktu_mulai_pelaksanaan']);
                    // jangka_waktu_selesai_pelaksanaan
                    $('.jangka_waktu_selesai_pelaksanaan_validation').html(response['error']['jangka_waktu_selesai_pelaksanaan']);
                    // jangka_waktu_hari_pelaksanaan
                    $('.jangka_waktu_hari_pelaksanaan_validation').html(response['error']['jangka_waktu_hari_pelaksanaan']);
                    // total_pagu_rup
                    $('.total_pagu_rup_validation').html(response['error']['total_pagu_rup']);
                    // ruas_lokasi
                    $('.ruas_lokasi_validation').html(response['error']['ruas_lokasi']);
                    //  detail_lokasi_rup
                    $('.detail_lokasi_rup_validation').html(response['error']['detail_lokasi_rup']);
                } else {
                    let timerInterval
                    Swal.fire({
                        title: 'Sedang Menyimpan Rup!',
                        html: 'Proses Penyimpanan Rup <b></b>',
                        timer: 2000,
                        timerProgressBar: true,
                        didOpen: () => {
                            Swal.showLoading()
                            const b = Swal.getHtmlContainer().querySelector('b')
                            timerInterval = setInterval(() => {
                                // b.textContent = Swal.getTimerRight()
                            }, 100)
                        },
                        willClose: () => {
                            clearInterval(timerInterval)
                            // tahun_rup
                            $('.tahun_rup_validation').html('');
                            // id_departemen
                            $('.id_departemen_validation').html('');
                            // id_section
                            $('.id_section_validation').html('');
                            // nama_rup
                            $('.nama_rup_validation').html('');
                            // deskripsi_rup
                            $('.deskripsi_rup_validation').html('');
                            // id_provinsi
                            $('.id_provinsi_validation').html('');
                            // id_kabupaten
                            $('.id_kabupaten_validation').html('');
                            // id_jenis_pengadaan
                            $('.id_jenis_pengadaan_validation').html('');
                            // id_metode_pengadaan
                            $('.id_metode_pengadaan_validation').html('');
                            // id_jenis_anggaran
                            $('.id_jenis_anggaran_validation').html('');
                            // kualifikasi_usaha
                            $('.kualifikasi_usaha_validation').html('');
                            // jenis_produk
                            $('.jenis_produk_validation').html('');
                            // status_pencatatan
                            $('.status_pencatatan_validation').html('');
                            // persen_pencatatan
                            $('.persen_pencatatan_validation').html('');
                            // jangka_waktu_mulai_pelaksanaan
                            $('.jangka_waktu_mulai_pelaksanaan_validation').html('');
                            // jangka_waktu_selesai_pelaksanaan
                            $('.jangka_waktu_selesai_pelaksanaan_validation').html('');
                            // jangka_waktu_hari_pelaksanaan
                            $('.jangka_waktu_hari_pelaksanaan_validation').html('');
                            // total_pagu_rup
                            $('.total_pagu_rup_validation').html('');
                            // ruas_lokasi
                            $('.ruas_lokasi_validation').html('');
                            //  detail_lokasi_rup
                            $('.detail_lokasi_rup_validation').html('');
                            Swal.fire('Rup Berhasil Di Buat!', '', 'success')
                            form_rup[0].reset();
                            Get_kode_rup();
                            // $('#button_dekrip_generate').css('display', 'block');
                            // $('#button_dekrip_generate_manipulasi').css('display', 'none');
                        }
                    }).then((result) => {
                        /* Read more about handling dismissals below */
                        if (result.dismiss === Swal.DismissReason.timer) {

                        }
                    })
                }
            }
        })
    }

    var tbl_rup = $('#tbl_rup')
    var url_get_rup = $('[name="url_get_rup"').val()
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
                "url": url_get_rup,
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
        var url_by_id_rup = $('[name="url_by_id_rup"]').val();
        var modal_detail = $('#modal-xl-detail');
        if (type == 'detail') {
            saveData = 'detail';
        }
        if (type == 'finalisasi') {
            saveData = 'finalisasi';
        }
        $.ajax({
            type: "GET",
            url: url_by_id_rup + id_url_rup,
            dataType: "JSON",
            success: function(response) {
                modal_detail.modal('show');
                $('[name="random_kode"]').val(response['row_rup']['id_url_rup']);
                $('#kode_rup').text(response['row_rup']['kode_rup']);
                $('#tahun_rup').text(response['row_rup']['tahun_rup']);
                $('#nama_departemen').text(response['row_rup']['nama_departemen']);
                $('#nama_section').text(response['row_rup']['nama_section']);
                $('#nama_rup').text(response['row_rup']['nama_rup']);
                $('#detail_lokasi_rup').text(response['row_rup']['detail_lokasi_rup']);
                $('#nama_jenis_pengadaan').text(response['row_rup']['nama_jenis_pengadaan']);
                $('#nama_metode_pengadaan').text(response['row_rup']['nama_metode_pengadaan']);
                $('#nama_jenis_anggaran').text(response['row_rup']['nama_jenis_anggaran']);
                $('#total_pagu_rup').text(formatRupiah(response['row_rup']['total_pagu_rup'], 'Rp.'));
                $('#waktu_pelakasanaan').text(response['row_rup']['jangka_waktu_mulai_pelaksanaan'] +
                    ' s/d ' + response['row_rup']['jangka_waktu_mulai_pelaksanaan']);
                $('#hari_pelaksanaan').text(response['row_rup']['jangka_waktu_hari_pelaksanaan']);

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
</script>