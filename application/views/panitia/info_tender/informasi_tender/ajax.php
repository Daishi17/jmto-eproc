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
        var id_rup = $('[name="id_rup"]').val()
        $('#tbl_hea_tkdn').DataTable({
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
                "url": '<?= base_url('panitia/info_tender/informasi_tender/get_evaluasi_hea_tkdn/') ?>' + id_rup,
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

    function reload_evaluasi_hea_tkdn() {
        $('#tbl_hea_tkdn').DataTable().ajax.reload();
    }


    $(document).ready(function() {
        var id_rup = $('[name="id_rup"]').val()
        $('#tbl_akhir_hea').DataTable({
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
                "url": '<?= base_url('panitia/info_tender/informasi_tender/get_evaluasi_akhir_hea/') ?>' + id_rup,
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

    function reload_evaluasi_hea_akhir() {
        $('#tbl_akhir_hea').DataTable().ajax.reload();
    }

    $(document).ready(function() {
        var id_rup = $('[name="id_rup"]').val()
        $('#tbl_peringkat_akhir_terendah').DataTable({
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
                "url": '<?= base_url('panitia/info_tender/informasi_tender/get_evaluasi_akhir_harga_terendah/') ?>' + id_rup,
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
        var modal_evaluasi_hea_tkdn = $('#modal_evaluasi_hea_tkdn')
        var modal_evaluasi_akhir_hea = $('#modal_evaluasi_akhir_hea')
        var id_rup = $('[name="id_rup"]').val()
        $.ajax({
            type: "GET",
            url: url_byid_mengikuti + id_vendor_mengikuti_paket,
            dataType: "JSON",
            success: function(response) {
                if (type == 'kualifikasi') {
                    modal_evaluasi_kualifikasi.modal('show')
                    $('.nama_usaha').text(response['row_vendor_mengikuti'].nama_usaha)
                    $('[name="id_vendor_mengikuti_paket"]').val(id_vendor_mengikuti_paket)
                } else if (type == 'penawaran') {
                    modal_evaluasi_penawaran.modal('show')
                    $('.nama_usaha').text(response['row_vendor_mengikuti'].nama_usaha)
                    $('[name="id_vendor_mengikuti_paket"]').val(id_vendor_mengikuti_paket)
                } else if (type == 'hea_tkdn') {
                    modal_evaluasi_hea_tkdn.modal('show')
                    $('.nama_usaha').text(response['row_vendor_mengikuti'].nama_usaha)
                    $('[name="id_vendor_mengikuti_paket"]').val(id_vendor_mengikuti_paket)
                } else if (type == 'akhir_hea') {
                    modal_evaluasi_akhir_hea.modal('show')
                    $('.nama_usaha').text(response['row_vendor_mengikuti'].nama_usaha)
                    $('[name="ev_hea_harga"]').val(response['row_vendor_mengikuti'].ev_hea_harga)
                    $('[name="id_vendor_mengikuti_paket"]').val(id_vendor_mengikuti_paket)
                } else if (type == 'syarat_tambahan') {
                    $('#lihat_syarat_tambahan_vendor').modal('show')
                    $('#nama_usaha_tambahan').text(response['row_vendor_mengikuti'].nama_usaha)
                    $(document).ready(function() {
                        $('#get_dokumen_syarat_tambahan').DataTable({
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
                                "url": '<?= base_url('panitia/info_tender/informasi_tender/get_dokumen_syarat_tambahan/') ?>' + response['row_vendor_mengikuti'].id_vendor + '/' + id_rup,
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
                } else {

                }

            }
        })
    }

    function format_rupiah2() {
        var ev_hea_penawaran = $('[name="ev_hea_penawaran"]').val()
        var rupiahFormat = ev_hea_penawaran.toString().replace(/\B(?=(\d{3})+(?!\d))/g, '.');
        $('[name="penawaran_rp2"]').val('Rp. ' + rupiahFormat)
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

    var form_evaluasi_hea_tkdn = $('#form_evaluasi_hea_tkdn')
    form_evaluasi_hea_tkdn.on('submit', function(e) {
        var url_simpan_evaluasi_hea_tkdn = $('[name="url_simpan_evaluasi_hea_tkdn"]').val();
        e.preventDefault();
        $.ajax({
            url: url_simpan_evaluasi_hea_tkdn,
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
                    $('#btn_ev_tkdn').attr("disabled", false);
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
                            $('#btn_ev_tkdn').attr("disabled", false);
                            $('#modal_evaluasi_hea_tkdn').modal('hide')
                            form_evaluasi_hea_tkdn[0].reset();
                            reload_evaluasi_hea_tkdn()
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

    var form_evaluasi_akhir_hea = $('#form_evaluasi_akhir_hea')
    form_evaluasi_akhir_hea.on('submit', function(e) {
        var url_simpan_evaluasi_akhir_hea = $('[name="url_simpan_evaluasi_akhir_hea"]').val();
        e.preventDefault();
        $.ajax({
            url: url_simpan_evaluasi_akhir_hea,
            method: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            beforeSend: function() {
                $('#btn_ev_hea_akhir').attr("disabled", true);
            },
            success: function(response) {
                if (response['error']) {
                    // $("#error_ev_keuangan").html(response['error']['ev_keuangan']);
                    // $("#error_ev_teknis").html(response['error']['ev_teknis']);
                    $('#btn_ev_tkdn').attr("disabled", false);
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
                            $('#btn_ev_hea_akhir').attr("disabled", false);
                            $('#modal_evaluasi_akhir_hea').modal('hide')
                            form_evaluasi_akhir_hea[0].reset();
                            reload_evaluasi_hea_akhir()
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

    // persyaratan tambahan
    $(document).ready(function() {
        var id_rup = $('[name="id_rup"]').val()
        $('#tbl_persyaratan_tambahan_vendor').DataTable({
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
                "url": '<?= base_url('panitia/info_tender/informasi_tender/get_syarat_tambahan/') ?>' + id_rup,
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

    function reload_table_dokumen_syarat_tambahan() {
        $('#get_dokumen_syarat_tambahan').DataTable().ajax.reload();
    }

    function reload_table_syarat_tambahan() {
        $('#tbl_persyaratan_tambahan_vendor').DataTable().ajax.reload();
    }

    function byid_syarat_tambahan(id_vendor_mengikuti_paket, type) {
        var url_byid_syarat_tambahan = $('[name="url_byid_syarat_tambahan"]').val()
        $.ajax({
            type: "GET",
            url: url_byid_syarat_tambahan + id_vendor_mengikuti_paket,
            dataType: "JSON",
            success: function(response) {
                if (type == 'evaluasi_syarat_tambah') {
                    $('#evaluasi_syarat_tambahan').modal('show')
                    $('.nama_usaha_evaluasi_tambahan').text(response['row_vendor_tambahan'].nama_usaha)
                    $('.nama_persyaratan_tambahan').text(response['row_vendor_tambahan'].nama_syarat_tambahan)
                    $('[name="id_vendor_mengikuti_paket"]').val(id_vendor_mengikuti_paket)
                    $('[name="id_vendor_syarat_tambahan"]').val(response['row_vendor_tambahan'].id_vendor_syarat_tambahan)
                } else {

                }

            }
        })
    }

    var form_persyaratan_tambahan = $('#form_persyaratan_tambahan')
    form_persyaratan_tambahan.on('submit', function(e) {
        var url_simpan_evaluasi_syarat_tambahan = $('[name="url_simpan_evaluasi_syarat_tambahan"]').val();
        e.preventDefault();
        $.ajax({
            url: url_simpan_evaluasi_syarat_tambahan,
            method: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            beforeSend: function() {
                $('#btn_lulus').attr("disabled", true);
                $('#btn_tidak_lulus').attr("disabled", true);
            },
            success: function(response) {
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
                        $('#btn_lulus').attr("disabled", false);
                        $('#btn_tidak_lulus').attr("disabled", false);
                        $('#evaluasi_syarat_tambahan').modal('hide')
                        form_persyaratan_tambahan[0].reset();
                        reload_table_dokumen_syarat_tambahan()
                        reload_table_syarat_tambahan()
                    }
                }).then((result) => {
                    /* Read more about handling dismissals below */
                    if (result.dismiss === Swal.DismissReason.timer) {

                    }
                })

            }
        })
    })

    function lulus_syarat_tambahan() {
        $('[name="status"]').val(1)
    }

    function tidak_lulus_syarat_tambahan() {
        $('[name="status"]').val(2)
    }
    // end persyaratan tambahan
</script>