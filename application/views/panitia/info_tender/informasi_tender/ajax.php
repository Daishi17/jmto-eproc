<script>
    $(document).ready(function() {
        $('#tbl_evaluasi').DataTable({

        }).buttons().container().appendTo('#tbl_rkap .col-md-6:eq(0)');
    });

    $(document).ready(function() {
        $('#tbl_file_1').DataTable({

        }).buttons().container().appendTo('#tbl_rkap .col-md-6:eq(0)');
    });

    $(document).ready(function() {
        $('#tbl_file_2').DataTable({

        }).buttons().container().appendTo('#tbl_rkap .col-md-6:eq(0)');
    });
</script>

<!-- INI UNTUK INFOMARSI PENGADAAN -->
<script>
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
</script>