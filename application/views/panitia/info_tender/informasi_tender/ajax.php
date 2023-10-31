<script>
    // jadwal
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
                        '<td>Panitia</td>' +
                        '<td></td>' +
                        '</tr>';
                }
                $('#load_jadwal').html(html);
            }
        })
    }
    // end jadwal

    // evaluasi kualifikasi
    $(document).ready(function() {
        var id_rup = $('[name="id_rup"]').val()
        $('#tbl_evaluasi_kualifikasi').DataTable({
            "responsive": false,
            "ordering": true,
            "processing": true,
            "serverSide": true,
            "autoWidth": false,
            "bDestroy": true,
            // "buttons": ["excel", "pdf", "print", "colvis"],
            initComplete: function() {
                this.api().buttons().container().appendTo($('.col-md-6:eq(0)', this.api().table().container()));
            },
            "order": [],
            "ajax": {
                "url": '<?= base_url('panitia/info_tender/informasi_tender/get_evaluasi_kualifikasi/') ?>' + id_rup,
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

    function reload_evaluasi_kualifikasi() {
        $('#tbl_evaluasi_kualifikasi').DataTable().ajax.reload();
    }

    $(document).ready(function() {
        var id_rup = $('[name="id_rup"]').val()
        $('#tbl_evaluasi_penawaran').DataTable({
            "responsive": false,
            "ordering": true,
            "processing": true,
            "serverSide": true,
            "autoWidth": false,
            "bDestroy": true,
            // "buttons": ["excel", "pdf", "print", "colvis"],
            initComplete: function() {
                this.api().buttons().container().appendTo($('.col-md-6:eq(0)', this.api().table().container()));
            },
            "order": [],
            "ajax": {
                "url": '<?= base_url('panitia/info_tender/informasi_tender/get_evaluasi_penawaran/') ?>' + id_rup,
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

    function reload_evaluasi_penawaran() {
        $('#tbl_evaluasi_penawaran').DataTable().ajax.reload();
    }

    $(document).ready(function() {
        $('#tbl_file_1').DataTable({

        }).buttons().container().appendTo('#tbl_rkap .col-md-6:eq(0)');
    });

    $(document).ready(function() {
        $('#tbl_file_2').DataTable({

        }).buttons().container().appendTo('#tbl_rkap .col-md-6:eq(0)');
    });



    function byid_mengikuti(id_vendor_mengikuti_paket, type) {
        var url_byid_mengikuti = $('[name="url_byid_mengikuti"]').val()
        var modal_evaluasi_kualifikasi = $('#modal_evaluasi_kualifikasi')
        var modal_evaluasi_penawaran = $('#modal_evaluasi_penawaran')
        $.ajax({
            type: "GET",
            url: url_byid_mengikuti + id_vendor_mengikuti_paket,
            dataType: "JSON",
            success: function(response) {
                if (type == 'kualifikasi') {
                    modal_evaluasi_kualifikasi.modal('show')
                    $('#nama_usaha').text(response['row_vendor_mengikuti'].nama_usaha)
                    $('[name="id_vendor_mengikuti_paket"]').val(id_vendor_mengikuti_paket)
                } else if (type == 'penawaran') {
                    modal_evaluasi_penawaran.modal('show')
                    $('#nama_usaha').text(response['row_vendor_mengikuti'].nama_usaha)
                    $('[name="id_vendor_mengikuti_paket"]').val(id_vendor_mengikuti_paket)
                } else {

                }

            }
        })
    }

    function format_rupiah() {
        var nilai_penawaran = $('[name="nilai_penawaran"]').val()
        var rupiahFormat = nilai_penawaran.toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.');
        $('[name="penawaran_rp"]').val('Rp. ' + rupiahFormat)
    }

    $(document).on('keyup', '.number_only', function(e) {

        var regex = /[^\d.]|\.(?=.*\.)/g;
        var subst = "";

        var str = $(this).val();
        var result = str.replace(regex, subst);
        $(this).val(result);

    });

    var form_evaluasi_kualifikasi = $('#form_evaluasi_kualifikasi')
    form_evaluasi_kualifikasi.on('submit', function(e) {
        var url_simpan_evaluasi_kualifikasi = $('[name="url_simpan_evaluasi_kualifikasi"]').val();
        e.preventDefault();
        $.ajax({
            url: url_simpan_evaluasi_kualifikasi,
            method: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            beforeSend: function() {
                $('#btn_ev_kualifikasi').attr("disabled", true);
            },
            success: function(response) {
                if (response['error']) {
                    $("#error_ev_keuangan").html(response['error']['ev_keuangan']);
                    $("#error_ev_teknis").html(response['error']['ev_teknis']);
                    $('#btn_ev_kualifikasi').attr("disabled", false);
                } else {
                    let timerInterval
                    Swal.fire({
                        title: 'Sedang Proses Menyimpan Data!',
                        html: 'Proses Data <b></b>',
                        timer: 1000,
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
                            $('#btn_ev_kualifikasi').attr("disabled", false);
                            $('#modal_evaluasi_kualifikasi').modal('hide')
                            form_evaluasi_kualifikasi[0].reset();
                            reload_evaluasi_kualifikasi()
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

    var form_evaluasi_penawaran = $('#form_evaluasi_penawaran')
    form_evaluasi_penawaran.on('submit', function(e) {
        var url_simpan_evaluasi_penawaran = $('[name="url_simpan_evaluasi_penawaran"]').val();
        e.preventDefault();
        $.ajax({
            url: url_simpan_evaluasi_penawaran,
            method: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            beforeSend: function() {
                $('#btn_ev_penawaran').attr("disabled", true);
            },
            success: function(response) {
                if (response['error']) {
                    // $("#error_ev_keuangan").html(response['error']['ev_keuangan']);
                    // $("#error_ev_teknis").html(response['error']['ev_teknis']);
                    $('#btn_ev_penawaran').attr("disabled", false);
                } else {
                    let timerInterval
                    Swal.fire({
                        title: 'Sedang Proses Menyimpan Data!',
                        html: 'Proses Data <b></b>',
                        timer: 1000,
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
                            $('#btn_ev_penawaran').attr("disabled", false);
                            $('#modal_evaluasi_penawaran').modal('hide')
                            form_evaluasi_penawaran[0].reset();
                            reload_evaluasi_penawaran()
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
    // end evaluasi kualifikasi
</script>