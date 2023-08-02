<script>
    $(document).ready(function() {
        var url_get_karyawan = $('[name="url_get_karyawan"').val()
        $('#tbl_karyawan').DataTable({
            "responsive": false,
            "ordering": true,
            "processing": true,
            "serverSide": true,
            "bDestroy": true,
            // "dom": 'Bfrtip',
            // "buttons": ["excel", "pdf", "print", "colvis"],
            "order": [],
            "ajax": {
                "url": url_get_karyawan,
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
        })
    });

    function reload_table() {
        $('#tbl_karyawan').DataTable().ajax.reload();
    }

    var form_karyawan = $('#form_karyawan');
    var url_post = $('[name="url_post"]').val()
    form_karyawan.on('submit', function(e) {
        e.preventDefault();
        $.ajax({
            url: url_post,
            method: "POST",
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function(response) {
                if (response['error']) {
                    $(".nip").html(response['error']['nip']);
                    $(".nama_pegawai").html(response['error']['nama_pegawai']);
                    $(".id_departemen").html(response['error']['id_departemen']);
                    $(".id_section").html(response['error']['id_section']);
                    $(".no_telpon").html(response['error']['no_telpon']);
                    $(".id_role").html(response['error']['id_role']);
                    $(".password").html(response['error']['password']);
                    $(".password2").html(response['error']['password2']);
                } else {
                    let timerInterval
                    Swal.fire({
                        title: 'Sedang Proses Menyimpan Data!',
                        html: 'Harap Tunggu <b></b>',
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
                            $('#modal-xl-tambah').modal('hide')

                            form_karyawan[0].reset();
                            reload_table()
                            Swal.fire('Data Berhasil Di Masukkan!', '', 'success')
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

    function byid(id, type) {
        if (type == 'edit') {
            saveData = 'edit';
        }
        if (type == 'aktifkan') {
            saveData = 'aktifkan';
        }
        if (type == 'nonaktifkan') {
            saveData = 'nonaktifkan';
        }
        var url_get_byid = $('[name="url_get_byid"]').val()
        $.ajax({
            type: "GET",
            url: url_get_byid + id,
            dataType: "JSON",
            success: function(response) {
                if (type == 'edit') {
                    $('[name="id_pegawai"]').val(response.id_pegawai);
                    $('[name="nip"]').val(response.nip);
                    $('[name="nama_pegawai"]').val(response.nama_pegawai);
                    $('[name="id_departemen"]').val(response.id_departemen);
                    $('[name="id_section"]').val(response.id_section)
                    $('[name="email"]').val(response.email)
                    $('[name="no_telpon"]').val(response.no_telpon)
                    $('[name="id_role"]').val(response.id_role)
                    $('[name="password"]').val(response.password)
                    $('[name="password2"]').val(response.password)
                    $('[name="password"]').attr('disabled', true)
                    $('[name="password2"]').attr('disabled', true)
                    $('#modal-xl-tambah').modal('show')
                } else if (type == 'aktif') {
                    Question_aktifkan(response.kode_section, response.nama_section);
                } else if (type == 'nonaktif') {
                    Question_nonaktifkan(response.kode_section, response.nama_section);
                }
                // else {
                // 	deleteQuestion(response.kd_lokasi, response.nm_lokasi);
                // }
            }
        })
    }

    function show_modal() {
        var form_karyawan = $('#form_karyawan');
        form_karyawan[0].reset();
        $('#button_ubah').attr('disabled', true)
        $('#modal-xl-tambah').modal('show')
        $('[name="id_pegawai"]').val();
    }
</script>