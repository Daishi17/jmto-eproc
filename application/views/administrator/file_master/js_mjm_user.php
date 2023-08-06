<script>
    function get_pegawai() {
        var url_get_bynip = $('[name="url_get_bynip"]').val()
        var id_pegawai = $('[name="id_pegawai"]').val()
        $.ajax({
            type: "GET",
            url: url_get_bynip + id_pegawai,
            dataType: "JSON",
            success: function(response) {
                $('[name="nama_departemen"]').val(response.nama_departemen)
            }
        })
    }

    var form_mjm_user = $('#form_mjm_user');
    var url_post = $('[name="url_post"]').val()
    form_mjm_user.on('submit', function(e) {
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
                    $(".id_pegawai").html(response['error']['id_pegawai']);
                    $(".role").html(response['error']['id_role']);
                    $(".username").html(response['error']['username']);
                    $(".password").html(response['error']['password']);
                    $(".password2").html(response['error']['password2']);
                } else if (response['error2']) {
                    $(".role").html(response['error']['id_role']);
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

                            form_mjm_user[0].reset();
                            $('[name="kode_mjm_user"]').val(response.kode);
                            // reload_table()
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
</script>