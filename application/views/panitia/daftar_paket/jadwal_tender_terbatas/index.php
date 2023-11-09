<main class="container-fluid">
    <input type="hidden" name="id_rup_global" value="<?= $row_rup['id_rup'] ?>">
    <div class="row">
        <div class="col">
            <br><br> <br>
            <div class="row">
                <div class="card">
                    <div class="card-body">
                        <form action="javascript:;" id="form_jadwal_tender_terbatas">
                            <div class="card" style="position: fixed; top:100px;z-index:999;width:95%;">
                                <div class="card border-dark">
                                    <div class="card-header border-dark bg-primary">
                                        <h6 class="card-title">
                                            <span class="text-white">
                                                <i class="fa-solid fa-business-time"></i>
                                                <small><strong>Jadwal <?= $row_rup['nama_jadwal_pengadaan'] ?></strong></small>
                                            </span>
                                        </h6>
                                    </div>
                                </div>
                                <style>
                                    #header-fixed {
                                        position: fixed;
                                        top: 0px;
                                        display: none;
                                        background-color: white;
                                    }
                                </style>
                                <center>
                                    <a style="margin-top: -20;" href="<?= base_url('panitia/daftar_paket/daftar_paket/form_daftar_paket/') . $row_rup['id_url_rup'] ?>" class="btn btn-danger mb-2"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i> Kembali</a>
                                    <button style="margin-top: -20;" type="submit" class="btnSave mb-2 btn btn-success">Update Jadwal</button>
                                </center>
                            </div>
                            <input type="hidden" name="id_url_rup" id="id_url_rup" value="<?= $row_rup['id_url_rup'] ?>">
                            <table id="table_jadwal" class="table table-hover">
                                <thead>
                                    <tr class="btn-grad100">
                                        <th>No</th>
                                        <th>Nama Jadwal</th>
                                        <th>Tanggal & Jam Mulai</th>
                                        <th>Tanggal & Jam Selesai</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1;
                                    $mulai_detail = 1;
                                    $selesai_detail = 1;
                                    $erorr_detail = 1;
                                    $bener_detail = 1;
                                    $erorrtext_detail = 1;
                                    $benertext_detail = 1;
                                    $erorr_row_detail = 1;
                                    $name_jadwal_detail = 1;
                                    $i = 1;
                                    foreach ($jadwal as  $value2) { ?>
                                        <tr id="erorr_jadwal_row<?= $erorr_row_detail++ ?>">
                                            <td><?= $no++ ?><input type="hidden" name="id_jadwal_rup[<?= $i ?>]" value="<?= $value2['id_jadwal_rup'] ?>"></td>
                                            <td><?= $value2['nama_jadwal_rup'] ?></td>
                                            <div class="alert alert-danger" style="display: none;" role="alert">
                                                Jadwal <?= $value2['nama_jadwal_rup'] ?> Belum Benar Mengisinya
                                            </div>
                                            <div class="alert alert-success" style="display: none;" role="alert">
                                                Jadwal <?= $value2['nama_jadwal_rup'] ?> Sudah Benar
                                            </div>
                                            <td><input class="form-control form-control-sm" name="waktu_mulai[<?= $i ?>]" id="mulai<?= $mulai_detail++ ?>" value="<?= $value2['waktu_mulai'] ?>" type="text"></td>
                                            <td><input class="form-control form-control-sm" name="waktu_selesai[<?= $i ?>]" id="selesai<?= $selesai_detail++ ?>" value="<?= $value2['waktu_selesai']  ?>" type="text"></td>
                                        </tr>
                                        <?php $i++ ?>
                                    <?php  } ?>
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>