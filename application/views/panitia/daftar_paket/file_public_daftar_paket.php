<script>
    var tbl_rup_finalisasi = $('#tbl_rup_finalisasi')
    var url_get_rup_finalisasi = $('[name="url_get_rup_finalisasi"').val()
    $(document).ready(function() {
        tbl_rup_finalisasi.DataTable({
            "responsive": false,
            "ordering": true,
            "processing": true,
            "serverSide": true,
            "autoWidth": false,
            "bDestroy": true,
            "buttons": ["excel", "pdf", "print", "colvis"],
            initComplete: function() {
                this.api().buttons().container()
                    .appendTo($('.col-md-6:eq(0)', this.api().table().container()));

            },
            "order": [],
            "ajax": {
                "url": url_get_rup_finalisasi,
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
        tbl_rup_finalisasi.DataTable().ajax.reload();
    }

    function by_id_rup(id_url_rup, type) {
        var url_by_id_rup = $('[name="url_by_id_rup"]').val();
        var url_buat_paket_penyedia = $('[name="url_buat_paket_penyedia"]').val();
        $.ajax({
            type: "GET",
            url: url_by_id_rup + id_url_rup,
            dataType: "JSON",
            success: function(response) {
                window.location.href = url_buat_paket_penyedia + id_url_rup;
            }
        })
    }

    $(".total_hps").keyup(function() {
        var harga = $(".total_hps").val();
        var tanpa_rupiah = document.getElementById('rupiah_total_hps');
        tanpa_rupiah.value = formatRupiah(this.value, 'Rp. ');

        var persen_pencatatan = $('[name="persen_pencatatan"]').val()
        var nilai_pencatatan = harga * persen_pencatatan / 100;

        $('[name="nilai_pencatatan"]').val(nilai_pencatatan);
        $('#nilai_pencatatan2').val(nilai_pencatatan)
        var tanpa_rupiah2 = $('[name="nilai_pencatatan2"]').val(nilai_pencatatan);
        tanpa_rupiah2.value2 = formatRupiah(this.value2, 'Rp. ');

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


    function total_hps_validasi(id_url_rup) {
        var total_hps_rup = $('[name="total_hps_rup"]').val();
        var total_pagu_rup = $('[name="total_pagu_rup"]').val();
        if (parseInt(total_hps_rup) > parseInt(total_pagu_rup)) {
            Swal.fire('Maaf Nilai Hps Hanya Boleh Sama Dengan Atau Kurang Dari Total Pagu!', '', 'warning');
            $('[name="total_hps_rup"]').val('');
        } else {
            var url_update_rup_hps = $('[name="url_update_rup_hps"]').val()
            var id_rup = $('[name="id_rup"]').val()
            $.ajax({
                type: "POST",
                url: url_update_rup_hps,
                data: {
                    total_hps_rup: total_hps_rup,
                    id_rup: id_rup
                },
                dataType: "JSON",
                success: function(response) {

                }
            })
        }
    }

    var form_hps = $('#form_hps')
    form_hps.on('submit', function(e) {
        var url_update_dok_hps = $('[name="url_update_dok_hps"]').val();
        var file_hps = $('[name="file_hps"]').val();
        if (file_hps == '') {
            e.preventDefault();
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'Dokumen Wajib Di Isi!',
            })
        } else {
            e.preventDefault();
            $.ajax({
                url: url_update_dok_hps,
                method: "POST",
                data: new FormData(this),
                contentType: false,
                cache: false,
                processData: false,
                beforeSend: function() {
                    $('.file_hps_btn').attr("disabled", true);
                },
                success: function(response) {
                    let timerInterval
                    Swal.fire({
                        title: 'Sedang Proses Menyimpan Data!',
                        html: 'Membuat Data <b></b>',
                        timer: 3000,
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
                            Swal.fire('Data Berhasil Di Simpan!', '', 'success')
                            $('.file_hps_btn').attr("disabled", false);
                        }
                    }).then((result) => {
                        /* Read more about handling dismissals below */
                        if (result.dismiss === Swal.DismissReason.timer) {

                        }
                    })
                }
            })
        }
    })
    load_dok_hps()

    function load_dok_hps() {

        var url_by_id_rup = $('[name="url_by_id_rup"]').val();
        var id_url_rup = $('[name="id_url_rup"]').val()
        var url_cek_dokumen_hps = $('[name="url_cek_dokumen_hps"]').val()
        var nama_rup = $('[name="nama_rup"]').val()
        var date_y = $('[name="date_y"]').val()
        $.ajax({
            type: "GET",
            url: url_by_id_rup + id_url_rup,
            dataType: "JSON",
            success: function(response) {
                console.log(response);
                var html = ''
                html += '<a target="_blank" href="' + url_cek_dokumen_hps + nama_rup + '-' + date_y + '/HPS-' + date_y + '/' + response['row_rup'].file_hps + '" class="btn btn-default btn-info">' + '<i class="fa-solid fa-file px-1"></i>' + 'Dokumen HPS' + '</a>';
                $('.load_dok_Hps').html(html);
            }
        })
    }

    var form_jadwal = $('#form_jadwal')
    var url_update_jadwal = $('[name="url_update_jadwal"]').val()
    form_jadwal.on('submit', function(e) {
        e.preventDefault();
        $.ajax({
            url: url_update_jadwal,
            method: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            // beforeSend: function() {
            //     $('.btn_jadwal').attr("disabled", true);
            // },
            success: function(response) {
                if (response == 'gagal1') {
                    $("#validasi_jadwal1").css({
                        "background-color": "red",
                    });
                } else if (response == 'gagal2') {
                    $("#validasi_jadwal2").css({
                        "background-color": "red",
                    });
                } else if (response == 'gagal3') {
                    $("#validasi_jadwal3").css({
                        "background-color": "red",
                    });
                } else {
                    let timerInterval
                    Swal.fire({
                        title: 'Sedang Proses Menyimpan Data!',
                        html: 'Membuat Data <b></b>',
                        timer: 3000,
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
                            Swal.fire('Data Berhasil Di Simpan!', '', 'success')
                            $('.btn_jadwal').attr("disabled", false);
                        }
                    }).then((result) => {
                        /* Read more about handling dismissals below */
                        if (result.dismiss === Swal.DismissReason.timer) {

                        }
                    })
                }

            }
        })
    })
</script>

<!-- INI UNTUK BAGIAN ADMINISTRASI PERSYARATAN SCRIPTNYA -->
<script>
    function kualifikasi_syart_tender() {
        var url_update_syarat_klasifikasi = $('[name="url_update_syarat_klasifikasi"]').val();
        var id_url_rup = $('[name="id_url_rup"]').val();
        var syarat_tender_kualifikasi = $('[name="syarat_tender_kualifikasi"]').val();
        $.ajax({
            type: "POST",
            url: url_update_syarat_klasifikasi,
            data: {
                id_url_rup: id_url_rup,
                syarat_tender_kualifikasi: syarat_tender_kualifikasi
            },
            dataType: "JSON",
            success: function(response) {
                $('[name="syarat_tender_kualifikasi"]').val(response['row_rup']['syarat_tender_kualifikasi']);
            }
        })
    }


    // SIUP
    $("#cek_siup").change(function() {
        if (this.checked) {
            var url_update_syarat_izin_usaha_tender = $('[name="url_update_syarat_izin_usaha_tender"]').val();
            var id_url_rup = $('[name="id_url_rup"]').val();
            var sts_checked_siup = 1;
            var type = 'sts_checked_siup';
            $.ajax({
                type: "POST",
                url: url_update_syarat_izin_usaha_tender,
                data: {
                    id_url_rup: id_url_rup,
                    sts_checked_siup: sts_checked_siup,
                    type: type
                },
                dataType: "JSON",
                success: function(response) {
                    $('[name="sts_checked_siup"]').val(response['row_syarat_izin_usah_tender']['sts_checked_siup']);
                }
            })
        } else {
            var url_update_syarat_izin_usaha_tender = $('[name="url_update_syarat_izin_usaha_tender"]').val();
            var id_url_rup = $('[name="id_url_rup"]').val();
            var sts_checked_siup = 0;
            var type = 'sts_checked_siup';
            $.ajax({
                type: "POST",
                url: url_update_syarat_izin_usaha_tender,
                data: {
                    id_url_rup: id_url_rup,
                    sts_checked_siup: sts_checked_siup,
                    type: type
                },
                dataType: "JSON",
                success: function(response) {
                    $('[name="sts_checked_siup"]').val(response['row_syarat_izin_usah_tender']['sts_checked_siup']);
                    $('[name="sts_masa_berlaku_siup"]').val(response['row_syarat_izin_usah_tender']['sts_masa_berlaku_siup']);
                }
            })
        }
    });

    function pilih_syarat_izin_usaha_tender_siup() {
        var url_update_syarat_izin_usaha_tender = $('[name="url_update_syarat_izin_usaha_tender"]').val();
        var id_url_rup = $('[name="id_url_rup"]').val();
        var sts_masa_berlaku_siup = $('[name="sts_masa_berlaku_siup"]').val();
        var type = 'sts_masa_berlaku_siup';
        $.ajax({
            type: "POST",
            url: url_update_syarat_izin_usaha_tender,
            data: {
                id_url_rup: id_url_rup,
                sts_masa_berlaku_siup: sts_masa_berlaku_siup,
                type: type
            },
            dataType: "JSON",
            success: function(response) {
                $('[name="sts_masa_berlaku_siup"]').val(response['row_syarat_izin_usah_tender']['sts_masa_berlaku_siup']);
                if (response['row_syarat_izin_usah_tender']['sts_masa_berlaku_siup'] == 1) {
                    $('[name="tgl_berlaku_siup"]').css('display', 'block');
                } else {
                    $('[name="tgl_berlaku_siup"]').css('display', 'none');
                }
            }
        })
    }

    // nib
    $("#cek_nib").change(function() {
        if (this.checked) {
            var url_update_syarat_izin_usaha_tender = $('[name="url_update_syarat_izin_usaha_tender"]').val();
            var id_url_rup = $('[name="id_url_rup"]').val();
            var sts_checked_nib = 1;
            var type = 'sts_checked_nib';
            $.ajax({
                type: "POST",
                url: url_update_syarat_izin_usaha_tender,
                data: {
                    id_url_rup: id_url_rup,
                    sts_checked_nib: sts_checked_nib,
                    type: type
                },
                dataType: "JSON",
                success: function(response) {
                    $('[name="sts_checked_nib"]').val(response['row_syarat_izin_usah_tender']['sts_checked_nib']);
                }
            })
        } else {
            var url_update_syarat_izin_usaha_tender = $('[name="url_update_syarat_izin_usaha_tender"]').val();
            var id_url_rup = $('[name="id_url_rup"]').val();
            var sts_checked_nib = 0;
            var type = 'sts_checked_nib';
            $.ajax({
                type: "POST",
                url: url_update_syarat_izin_usaha_tender,
                data: {
                    id_url_rup: id_url_rup,
                    sts_checked_nib: sts_checked_nib,
                    type: type
                },
                dataType: "JSON",
                success: function(response) {
                    $('[name="sts_checked_nib"]').val(response['row_syarat_izin_usah_tender']['sts_checked_nib']);
                    $('[name="sts_masa_berlaku_nib"]').val(response['row_syarat_izin_usah_tender']['sts_masa_berlaku_nib']);
                }
            })
        }
    });

    function pilih_syarat_izin_usaha_tender_nib() {
        var url_update_syarat_izin_usaha_tender = $('[name="url_update_syarat_izin_usaha_tender"]').val();
        var id_url_rup = $('[name="id_url_rup"]').val();
        var sts_masa_berlaku_nib = $('[name="sts_masa_berlaku_nib"]').val();
        var type = 'sts_masa_berlaku_nib';
        $.ajax({
            type: "POST",
            url: url_update_syarat_izin_usaha_tender,
            data: {
                id_url_rup: id_url_rup,
                sts_masa_berlaku_nib: sts_masa_berlaku_nib,
                type: type
            },
            dataType: "JSON",
            success: function(response) {
                $('[name="sts_masa_berlaku_nib"]').val(response['row_syarat_izin_usah_tender']['sts_masa_berlaku_nib']);
                if (response['row_syarat_izin_usah_tender']['sts_masa_berlaku_nib'] == 1) {
                    $('[name="tgl_berlaku_nib"]').css('display', 'block');
                } else {
                    $('[name="tgl_berlaku_nib"]').css('display', 'none');
                }
            }
        })
    }
    // INI UNTUK SYARAT KBLI
    $(document).ready(function() {
        $('#table_kbli_syarat_tender').DataTable({
            info: true,
            ordering: true,
            paging: true
        });
    });

    function simpan_syarat_kbli() {
        var url_get_tambah_syarat_kbli = $('[name="url_get_tambah_syarat_kbli"]').val();
        var id_url_rup = $('[name="id_url_rup"]').val();
        var nama_kbli = $('[name="nama_kbli"]').val();
        if (nama_kbli == '') {
            Swal.fire('Anda Belum Memilih Kbli!', '', 'warning')
        } else {
            $.ajax({
                type: "POST",
                url: url_get_tambah_syarat_kbli,
                data: {
                    id_url_rup: id_url_rup,
                    nama_kbli: nama_kbli,
                },
                dataType: "JSON",
                success: function(response) {
                    if (response['error']) {
                        var responkbli = '' + response['error']['id_kbli'] + '';
                        Swal.fire(responkbli, '', 'warning')
                        get_syarat_kbli()
                        var nama_kbli = $('[name="nama_kbli"]').val('');
                    } else {
                        Swal.fire('Data Berhasil Di Tambah!', '', 'success')
                        get_syarat_kbli()
                        var nama_kbli = $('[name="nama_kbli"]').val('');
                    }
                }
            })
        }
    }
    get_syarat_kbli()

    function get_syarat_kbli() {
        var url_get_syarat_kbli_tender = $('[name="url_get_syarat_kbli_tender"]').val();
        var id_url_rup = $('[name="id_url_rup"]').val();
        var id_kbli = $('[name="id_kbli"]').val();
        $.ajax({
            type: "POST",
            url: url_get_syarat_kbli_tender,
            data: {
                id_url_rup: id_url_rup,
                id_kbli: id_kbli,
            },
            dataType: "JSON",
            success: function(response) {
                // get sumber dana
                var html = '';
                var i;
                for (i = 0; i < response['result_syarat_tender_kbli'].length; i++) {
                    html += '<tr>' +
                        '<td>' + response['result_syarat_tender_kbli'][i].nama_kbli + '</td>' +
                        '<td><a href="javascript:;" onclick="hapus_kbli_syarat(' + response['result_syarat_tender_kbli'][i].id_syarat_kbli_tender + ')" class="btn btn-sm btn-danger"><i class="fas fa fa-trash"></i> Hapus</a></td>' +
                        '</tr>'
                }
                $('#result_tbl_kbli_syarat_tender').html(html);
            }
        })
    }

    function hapus_kbli_syarat(id_syarat_kbli_tender) {
        var url_hapus_syarat_kbli = $('[name="url_hapus_syarat_kbli"]').val()
        Swal.fire({
            title: 'Apakah Anda Yakin Ingin Menhapus',
            text: 'Syarat Kbli Ini ??',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Hapus!',
            cancelButtonText: 'Jangan Hapus!',
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "POST",
                    url: url_hapus_syarat_kbli,
                    data: {
                        id_syarat_kbli_tender: id_syarat_kbli_tender,
                    },
                    dataType: "JSON",
                    success: function(response) {
                        Swal.fire('Data Berhasil Di Hapus!', '', 'success')
                        get_syarat_kbli()
                    }
                })

            }
        })
    }

    // INI UNTUK SYARAT SBU
    $(document).ready(function() {
        $('#table_sbu_syarat_tender').DataTable({
            info: true,
            ordering: true,
            paging: true
        });
    });

    function simpan_syarat_sbu() {
        var url_get_tambah_syarat_sbu = $('[name="url_get_tambah_syarat_sbu"]').val();
        var id_url_rup = $('[name="id_url_rup"]').val();
        var nama_sbu = $('[name="nama_sbu"]').val();
        if (nama_sbu == '') {
            Swal.fire('Anda Belum Memilih sbu!', '', 'warning')
        } else {
            $.ajax({
                type: "POST",
                url: url_get_tambah_syarat_sbu,
                data: {
                    id_url_rup: id_url_rup,
                    nama_sbu: nama_sbu,
                },
                dataType: "JSON",
                success: function(response) {
                    if (response['error']) {
                        var responsbu = '' + response['error']['id_sbu'] + '';
                        Swal.fire(responsbu, '', 'warning')
                        get_syarat_sbu()
                        var nama_sbu = $('[name="nama_sbu"]').val('');
                    } else {
                        Swal.fire('Data Berhasil Di Tambah!', '', 'success')
                        get_syarat_sbu()
                        var nama_sbu = $('[name="nama_sbu"]').val('');
                    }
                }
            })
        }
    }
    get_syarat_sbu()

    function get_syarat_sbu() {
        var url_get_syarat_sbu_tender = $('[name="url_get_syarat_sbu_tender"]').val();
        var id_url_rup = $('[name="id_url_rup"]').val();
        var id_sbu = $('[name="id_sbu"]').val();
        $.ajax({
            type: "POST",
            url: url_get_syarat_sbu_tender,
            data: {
                id_url_rup: id_url_rup,
                id_sbu: id_sbu,
            },
            dataType: "JSON",
            success: function(response) {
                // get sumber dana
                var html = '';
                var i;
                for (i = 0; i < response['result_syarat_tender_sbu'].length; i++) {
                    html += '<tr>' +
                        '<td>' + response['result_syarat_tender_sbu'][i].nama_sbu + '</td>' +
                        '<td><a href="javascript:;" onclick="hapus_sbu_syarat(' + response['result_syarat_tender_sbu'][i].id_syarat_sbu_tender + ')" class="btn btn-sm btn-danger"><i class="fas fa fa-trash"></i> Hapus</a></td>' +
                        '</tr>'
                }
                $('#result_tbl_sbu_syarat_tender').html(html);
            }
        })
    }

    function hapus_sbu_syarat(id_syarat_sbu_tender) {
        var url_hapus_syarat_sbu = $('[name="url_hapus_syarat_sbu"]').val()
        Swal.fire({
            title: 'Apakah Anda Yakin Ingin Menhapus',
            text: 'Syarat sbu Ini ??',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Hapus!',
            cancelButtonText: 'Jangan Hapus!',
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    type: "POST",
                    url: url_hapus_syarat_sbu,
                    data: {
                        id_syarat_sbu_tender: id_syarat_sbu_tender,
                    },
                    dataType: "JSON",
                    success: function(response) {
                        Swal.fire('Data Berhasil Di Hapus!', '', 'success')
                        get_syarat_sbu()
                    }
                })

            }
        })
    }

    // INI UNTUK SYARAT TEKNIS ADMINISTRASI
    // pengalaman pekerjaan
    $("#sts_checked_pengalaman_pekerjaan").change(function() {
        if (this.checked) {
            var url_update_syarat_izin_teknis_tender = $('[name="url_update_syarat_izin_teknis_tender"]').val();
            var id_url_rup = $('[name="id_url_rup"]').val();
            var sts_checked_pengalaman_pekerjaan = 1;
            var type = 'sts_checked_pengalaman_pekerjaan';
            $.ajax({
                type: "POST",
                url: url_update_syarat_izin_teknis_tender,
                data: {
                    id_url_rup: id_url_rup,
                    sts_checked_pengalaman_pekerjaan: sts_checked_pengalaman_pekerjaan,
                    type: type
                },
                dataType: "JSON",
                success: function(response) {
                    $('[name="sts_checked_pengalaman_pekerjaan"]').val(response['row_syarat_izin_teknis_tender']['sts_checked_pengalaman_pekerjaan']);
                }
            })
        } else {
            var url_update_syarat_izin_teknis_tender = $('[name="url_update_syarat_izin_teknis_tender"]').val();
            var id_url_rup = $('[name="id_url_rup"]').val();
            var sts_checked_pengalaman_pekerjaan = 0;
            var type = 'sts_checked_pengalaman_pekerjaan';
            $.ajax({
                type: "POST",
                url: url_update_syarat_izin_teknis_tender,
                data: {
                    id_url_rup: id_url_rup,
                    sts_checked_pengalaman_pekerjaan: sts_checked_pengalaman_pekerjaan,
                    type: type
                },
                dataType: "JSON",
                success: function(response) {
                    $('[name="sts_checked_pengalaman_pekerjaan"]').val(response['row_syarat_izin_teknis_tender']['sts_checked_pengalaman_pekerjaan']);
                }
            })
        }
    });
    // spt
    $("#sts_checked_spt").change(function() {
        if (this.checked) {
            var url_update_syarat_izin_teknis_tender = $('[name="url_update_syarat_izin_teknis_tender"]').val();
            var id_url_rup = $('[name="id_url_rup"]').val();
            var sts_checked_spt = 1;
            var type = 'sts_checked_spt';
            $.ajax({
                type: "POST",
                url: url_update_syarat_izin_teknis_tender,
                data: {
                    id_url_rup: id_url_rup,
                    sts_checked_spt: sts_checked_spt,
                    type: type
                },
                dataType: "JSON",
                success: function(response) {
                    $('[name="sts_checked_spt"]').val(response['row_syarat_izin_teknis_tender']['sts_checked_spt']);
                    $('[name="tahun_lapor_spt"]').val(response['row_syarat_izin_teknis_tender']['tahun_lapor_spt']);
                }
            })
        } else {
            var url_update_syarat_izin_teknis_tender = $('[name="url_update_syarat_izin_teknis_tender"]').val();
            var id_url_rup = $('[name="id_url_rup"]').val();
            var sts_checked_spt = 0;
            var type = 'sts_checked_spt';
            $.ajax({
                type: "POST",
                url: url_update_syarat_izin_teknis_tender,
                data: {
                    id_url_rup: id_url_rup,
                    sts_checked_spt: sts_checked_spt,
                    type: type
                },
                dataType: "JSON",
                success: function(response) {
                    $('[name="sts_checked_spt"]').val(response['row_syarat_izin_teknis_tender']['sts_checked_spt']);
                    $('[name="tahun_lapor_spt"]').val(2020);
                }
            })
        }
    });

    function pilih_tahun_lapor_spt() {
        var url_update_syarat_izin_teknis_tender = $('[name="url_update_syarat_izin_teknis_tender"]').val();
        var id_url_rup = $('[name="id_url_rup"]').val();
        var tahun_lapor_spt = $('[name="tahun_lapor_spt"]').val();
        var type = 'tahun_lapor_spt';
        $.ajax({
            type: "POST",
            url: url_update_syarat_izin_teknis_tender,
            data: {
                id_url_rup: id_url_rup,
                tahun_lapor_spt: tahun_lapor_spt,
                type: type
            },
            dataType: "JSON",
            success: function(response) {
                $('[name="tahun_lapor_spt"]').val(response['row_syarat_izin_teknis_tender']['tahun_lapor_spt']);
            }
        })
    }

    // Laporan Keuangan
    $("#sts_checked_laporan_keuangan").change(function() {
        if (this.checked) {
            var url_update_syarat_izin_teknis_tender = $('[name="url_update_syarat_izin_teknis_tender"]').val();
            var id_url_rup = $('[name="id_url_rup"]').val();
            var sts_checked_laporan_keuangan = 1;
            var type = 'sts_checked_laporan_keuangan';
            $.ajax({
                type: "POST",
                url: url_update_syarat_izin_teknis_tender,
                data: {
                    id_url_rup: id_url_rup,
                    sts_checked_laporan_keuangan: sts_checked_laporan_keuangan,
                    type: type
                },
                dataType: "JSON",
                success: function(response) {
                    $('[name="sts_checked_laporan_keuangan"]').val(response['row_syarat_izin_teknis_tender']['sts_checked_laporan_keuangan']);
                }
            })
        } else {
            var url_update_syarat_izin_teknis_tender = $('[name="url_update_syarat_izin_teknis_tender"]').val();
            var id_url_rup = $('[name="id_url_rup"]').val();
            var sts_checked_laporan_keuangan = 0;
            var type = 'sts_checked_laporan_keuangan';
            $.ajax({
                type: "POST",
                url: url_update_syarat_izin_teknis_tender,
                data: {
                    id_url_rup: id_url_rup,
                    sts_checked_laporan_keuangan: sts_checked_laporan_keuangan,
                    type: type
                },
                dataType: "JSON",
                success: function(response) {
                    $('[name="sts_checked_laporan_keuangan"]').val(response['row_syarat_izin_teknis_tender']['sts_checked_laporan_keuangan']);
                }
            })
        }
    });

    function pilih_sts_audit_laporan_keuangan() {
        var url_update_syarat_izin_teknis_tender = $('[name="url_update_syarat_izin_teknis_tender"]').val();
        var id_url_rup = $('[name="id_url_rup"]').val();
        var sts_audit_laporan_keuangan = $('[name="sts_audit_laporan_keuangan"]').val();
        var type = 'sts_audit_laporan_keuangan';
        $.ajax({
            type: "POST",
            url: url_update_syarat_izin_teknis_tender,
            data: {
                id_url_rup: id_url_rup,
                sts_audit_laporan_keuangan: sts_audit_laporan_keuangan,
                type: type
            },
            dataType: "JSON",
            success: function(response) {
                $('[name="sts_audit_laporan_keuangan"]').val(response['row_syarat_izin_teknis_tender']['sts_audit_laporan_keuangan']);
            }
        })
    }

    function pilih_tahun_awal_laporan_keuangan() {
        var url_update_syarat_izin_teknis_tender = $('[name="url_update_syarat_izin_teknis_tender"]').val();
        var id_url_rup = $('[name="id_url_rup"]').val();
        var tahun_awal_laporan_keuangan = $('[name="tahun_awal_laporan_keuangan"]').val();
        var type = 'tahun_awal_laporan_keuangan';
        $.ajax({
            type: "POST",
            url: url_update_syarat_izin_teknis_tender,
            data: {
                id_url_rup: id_url_rup,
                tahun_awal_laporan_keuangan: tahun_awal_laporan_keuangan,
                type: type
            },
            dataType: "JSON",
            success: function(response) {
                $('[name="tahun_awal_laporan_keuangan"]').val(response['row_syarat_izin_teknis_tender']['tahun_awal_laporan_keuangan']);
            }
        })
    }

    function pilih_tahun_akhir_laporan_keuangan() {
        var url_update_syarat_izin_teknis_tender = $('[name="url_update_syarat_izin_teknis_tender"]').val();
        var id_url_rup = $('[name="id_url_rup"]').val();
        var tahun_akhir_laporan_keuangan = $('[name="tahun_akhir_laporan_keuangan"]').val();
        var type = 'tahun_akhir_laporan_keuangan';
        $.ajax({
            type: "POST",
            url: url_update_syarat_izin_teknis_tender,
            data: {
                id_url_rup: id_url_rup,
                tahun_akhir_laporan_keuangan: tahun_akhir_laporan_keuangan,
                type: type
            },
            dataType: "JSON",
            success: function(response) {
                $('[name="tahun_akhir_laporan_keuangan"]').val(response['row_syarat_izin_teknis_tender']['tahun_akhir_laporan_keuangan']);
            }
        })
    }

    // Neraca Keuangan
    $("#sts_checked_neraca_keuangan").change(function() {
        if (this.checked) {
            var url_update_syarat_izin_teknis_tender = $('[name="url_update_syarat_izin_teknis_tender"]').val();
            var id_url_rup = $('[name="id_url_rup"]').val();
            var sts_checked_neraca_keuangan = 1;
            var type = 'sts_checked_neraca_keuangan';
            $.ajax({
                type: "POST",
                url: url_update_syarat_izin_teknis_tender,
                data: {
                    id_url_rup: id_url_rup,
                    sts_checked_neraca_keuangan: sts_checked_neraca_keuangan,
                    type: type
                },
                dataType: "JSON",
                success: function(response) {
                    $('[name="sts_checked_neraca_keuangan"]').val(response['row_syarat_izin_teknis_tender']['sts_checked_neraca_keuangan']);
                }
            })
        } else {
            var url_update_syarat_izin_teknis_tender = $('[name="url_update_syarat_izin_teknis_tender"]').val();
            var id_url_rup = $('[name="id_url_rup"]').val();
            var sts_checked_neraca_keuangan = 0;
            var type = 'sts_checked_neraca_keuangan';
            $.ajax({
                type: "POST",
                url: url_update_syarat_izin_teknis_tender,
                data: {
                    id_url_rup: id_url_rup,
                    sts_checked_neraca_keuangan: sts_checked_neraca_keuangan,
                    type: type
                },
                dataType: "JSON",
                success: function(response) {
                    $('[name="sts_checked_neraca_keuangan"]').val(response['row_syarat_izin_teknis_tender']['sts_checked_neraca_keuangan']);
                }
            })
        }
    });

    function pilih_tahun_awal_neraca_keuangan() {
        var url_update_syarat_izin_teknis_tender = $('[name="url_update_syarat_izin_teknis_tender"]').val();
        var id_url_rup = $('[name="id_url_rup"]').val();
        var tahun_awal_neraca_keuangan = $('[name="tahun_awal_neraca_keuangan"]').val();
        var type = 'tahun_awal_neraca_keuangan';
        $.ajax({
            type: "POST",
            url: url_update_syarat_izin_teknis_tender,
            data: {
                id_url_rup: id_url_rup,
                tahun_awal_neraca_keuangan: tahun_awal_neraca_keuangan,
                type: type
            },
            dataType: "JSON",
            success: function(response) {
                $('[name="tahun_awal_neraca_keuangan"]').val(response['row_syarat_izin_teknis_tender']['tahun_awal_neraca_keuangan']);
            }
        })
    }

    function pilih_tahun_akhir_neraca_keuangan() {
        var url_update_syarat_izin_teknis_tender = $('[name="url_update_syarat_izin_teknis_tender"]').val();
        var id_url_rup = $('[name="id_url_rup"]').val();
        var tahun_akhir_neraca_keuangan = $('[name="tahun_akhir_neraca_keuangan"]').val();
        var type = 'tahun_akhir_neraca_keuangan';
        $.ajax({
            type: "POST",
            url: url_update_syarat_izin_teknis_tender,
            data: {
                id_url_rup: id_url_rup,
                tahun_akhir_neraca_keuangan: tahun_akhir_neraca_keuangan,
                type: type
            },
            dataType: "JSON",
            success: function(response) {
                $('[name="tahun_akhir_neraca_keuangan"]').val(response['row_syarat_izin_teknis_tender']['tahun_akhir_neraca_keuangan']);
            }
        })
    }
</script>