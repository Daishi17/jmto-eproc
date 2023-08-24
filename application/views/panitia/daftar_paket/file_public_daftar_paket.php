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
            beforeSend: function() {
                $('.btn_jadwal').attr("disabled", true);
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
                        $('.btn_jadwal').attr("disabled", false);
                    }
                }).then((result) => {
                    /* Read more about handling dismissals below */
                    if (result.dismiss === Swal.DismissReason.timer) {

                    }
                })
            }
        })
    })
</script>