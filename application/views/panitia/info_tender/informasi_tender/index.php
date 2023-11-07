<main class="container-fluid">
    <!-- id rup global -->
    <input type="hidden" name="id_rup" value="<?= $row_rup['id_rup'] ?>">

    <div class="row">
        <div class="col">
            <div class="card border-dark">
                <div class="card-header border-dark bg-white text-black">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link active" style="margin-left: 5px;" href="<?= base_url('panitia/info_tender/informasi_tender/informasi_pengadaan/' . $row_rup['id_url_rup']) ?>"><i class="fa fa-columns" aria-hidden="true"></i> Informasi Pengadaan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link bg-primary text-white" style="margin-left: 5px;" href="<?= base_url('panitia/info_tender/informasi_tender/aanwijzing/' . $row_rup['id_url_rup']) ?>"><i class="fa fa-comments" aria-hidden="true"></i> Aanwijzing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link bg-primary text-white" style="margin-left: 5px;" href="<?= base_url('panitia/info_tender/informasi_tender/evaluasi/' . $row_rup['id_url_rup']) ?>"><i class="fa fa-pencil-square" aria-hidden="true"></i> Evaluasi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link bg-primary text-white" style="margin-left: 5px;" href="<?= base_url('panitia/info_tender/informasi_tender/negosiasi/' . $row_rup['id_url_rup']) ?>"><i class="fa fa-tags" aria-hidden="true"></i> Negosiasi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link bg-primary text-white " style="margin-left: 5px;" href="<?= base_url('panitia/info_tender/informasi_tender/sanggahan_prakualifikasi/' . $row_rup['id_url_rup']) ?>"><i class="fa fa-hourglass-start" aria-hidden="true"></i> Sanggahan Prakualifikasi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link bg-primary text-white" style="margin-left: 5px;" href="<?= base_url('panitia/info_tender/informasi_tender/sanggahan_akhir/' . $row_rup['id_url_rup']) ?>"><i class="fa fa-hourglass-start" aria-hidden="true"></i> Sanggahan </a>
                        </li>
                    </ul>
                </div>
            </div>
            <hr>
            <div class="card border-dark">
                <div class="card-header border-dark bg-primary d-flex justify-content-between align-items-center">
                    <div class="flex-grow-1 bd-highlight">
                        <span class="text-dark">
                            <small class="text-white"><strong><i class="fa-solid fa-table px-1"></i> Data Tabel - Info Pengadaan</strong></small>
                        </span>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table table-striped table-bordered">
                        <tr>
                            <th style="width: 300px;">Kode Pengadaan</th>
                            <th> <?= $row_rup['kode_rup'] ?></th>
                        </tr>
                        <tr>
                            <th>Nama Paket</th>
                            <th> <?= $row_rup['nama_rup'] ?></th>
                        </tr>
                        <tr>
                            <th>TKDN/PDN/IMPORT</th>
                            <th> <?= $row_rup['status_pencatatan'] ?> (<?= $row_rup['persen_pencatatan'] ?>%)</th>
                        </tr>
                        <tr>
                            <th>Jadwal Pengadaan</th>
                            <th>
                                <button type="button" class="btn btn-sm btn-primary" onclick="lihat_detail_jadwal('<?= $row_rup['id_url_rup'] ?>')">
                                    <i class="fa fa-calendar" aria-hidden="true"></i> Lihat Jadwal
                                </button>
                            </th>
                        </tr>
                        <tr>
                            <th>Jumlah Peserta</th>
                            <th><button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#lihat_peserta">
                                    <i class="fa fa-users" aria-hidden="true"></i> <?= $hitung_peserta ?> Peserta
                                </button></th>
                        </tr>
                        <tr>
                            <th>Dokumen Pengadaan</th>
                            <th>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card">
                                            <div class="card-header bg-primary text-white">
                                                List Dokumen Pengadaan
                                            </div>
                                            <div class="card-body">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Nama File</th>
                                                            <th>File</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $no = 1;
                                                        foreach ($dok_lelang as $key => $value) { ?>
                                                            <tr>
                                                                <td scope="row"><?= $no++ ?></td>
                                                                <td><?= $value['nama_dok_pengadaan'] ?></td>
                                                                <td><a target="_blank" href="<?= base_url('file_paket/' . $row_rup['nama_rup'] . '/DOKUMEN_PENGADAAN' . '/' . $value['file_dok_pengadaan']) ?>" class="btn btn-sm btn-danger"><i class="fas fa fa-file"></i> View</a> </td>
                                                            </tr>
                                                        <?php } ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card">
                                            <div class="card-header bg-primary text-white">
                                                List Dokumen Prakualifikasi
                                            </div>
                                            <div class="card-body">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Nama File</th>
                                                            <th>File</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $no = 1;
                                                        foreach ($dok_prakualifikasi as $key => $value) { ?>
                                                            <tr>
                                                                <td scope="row"><?= $no++ ?></td>
                                                                <td><?= $value['nama_dok_prakualifikasi'] ?></td>
                                                                <td><a target="_blank" href="<?= base_url('file_paket/' . $row_rup['nama_rup'] . '/DOKUMEN_PRAKUALIFIKASI' . '/' . $value['file_dok_prakualifikasi']) ?>" class="btn btn-sm btn-danger"><i class="fas fa fa-file"></i> View</a> </td>
                                                            </tr>
                                                        <?php } ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card">
                                            <div class="card-header bg-primary text-white">
                                                Persyaratan Tambahan
                                            </div>
                                            <div class="card-body">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Nama Persyaratan</th>
                                                            <th>File</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $no = 1;
                                                        foreach ($dok_tambahan as $key => $value) { ?>
                                                            <tr>
                                                                <td scope="row"><?= $no++ ?></td>
                                                                <td><?= $value['nama_syarat_tambahan'] ?></td>
                                                                <td><a target="_blank" href="<?= base_url('file_paket/' . $row_rup['nama_rup'] . '/DOKUMEN_PRAKUALIFIKASI' . '/' . $value['file_syarat_tambahan']) ?>" class="btn btn-sm btn-danger"><i class="fas fa fa-file"></i> View</a> </td>
                                                            </tr>
                                                        <?php } ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </th>
                        </tr>
                        <tr>
                            <th>Persyaratan Tambahan Penyedia</th>
                            <th>
                                <div class="row">
                                    <div class="col-md-10">
                                        <div class="card">
                                            <div class="card-header bg-primary text-white">
                                                Persyaratan Tambahan Penyedia
                                            </div>
                                            <div class="card-body">
                                                <table class="table table-bordered" id="tbl_persyaratan_tambahan_vendor">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Nama Penyedia</th>
                                                            <th>Status</th>
                                                            <th>Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>

                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </th>
                        </tr>
                        <tr>
                            <th>Bobot Teknis</th>
                            <th><?= $row_rup['bobot_teknis'] ?>
                            </th>
                        </tr>
                        <tr>
                            <th>Bobot Biaya</th>
                            <th><?= $row_rup['bobot_biaya'] ?></th>
                        </tr>
                        <tr>
                            <th>Undangan Pembuktian</th>
                            <th><button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#undangan_pembuktian">
                                    <i class="fa fa-upload" aria-hidden="true"></i> Upload Undangan Pembuktian
                                </button></th>
                        </tr>
                        <tr>
                            <th>Pengumuman Hasil Prakualifikasi</th>
                            <th><button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#hasil_prakualifikasi">
                                    <i class="fa fa-upload" aria-hidden="true"></i> Upload Hasil Prakualifikasi
                                </button></th>
                        </tr>

                        <tr>
                            <th>Pembukaan Penawaran</th>
                            <th>
                                <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#buka_dokumen_penawaran">
                                    <i class="fa fa-folder-open" aria-hidden="true"></i> Buka Dokumen Penawaran
                                </button>
                            </th>
                        </tr>
                        <tr>

                            <th>Berita Acara Pengadaan</th>
                            <th>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="card">
                                            <div class="card-header bg-primary text-white">
                                                Upload Berita Acara Pengadaan
                                                <a href="" style="float: right;" data-bs-toggle="modal" data-bs-target="#upload_berita_acara_tender" class="btn btn-danger btn-sm"> <i class="fas fa fa-upload"></i> Upload</a>
                                            </div>
                                            <div class="card-body">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Nama File</th>
                                                            <th>File</th>
                                                            <th>Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody id="tbl_ba_tender">
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- <div class="col-md-4">
                                        <div class="card">
                                            <div class="card-header bg-warning text-white">
                                                Upload Evaluasi Hasil Penawaran
                                                <a href="javascript:;" style="float: right;" data-bs-toggle="modal" data-bs-target="#upload_berita_acara_penawaran" class="btn btn-danger btn-sm"> <i class="fas fa fa-upload"></i> Upload</a>
                                            </div>
                                            <div class="card-body">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Nama File</th>
                                                            <th>File</th>
                                                            <th>Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="card">
                                            <div class="card-header bg-primary text-white">
                                                Upload Evaluasi Hasil Pengadaan
                                                <a href="" style="float: right;" data-bs-toggle="modal" data-bs-target="#upload_berita_acara_tender" class="btn btn-danger btn-sm"> <i class="fas fa fa-upload"></i> Upload</a>
                                            </div>
                                            <div class="card-body">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>No</th>
                                                            <th>Nama File</th>
                                                            <th>File</th>
                                                            <th>Aksi</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td scope="row">1</td>
                                                            <td>Berita Acara Hasil Evaluasi</td>
                                                            <td><a href="" class="btn btn-sm btn-warning"><i class="fas fa fa-file"></i></a></td>
                                                            <td>
                                                                <a href="" class="btn btn-sm btn-danger btn-success"> <i class="fas fa fa-trash"></i></a>
                                                            </td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div> -->
                                </div>
                            </th>
                        </tr>
                        <tr>
                            <th>Pengumuman Pemenang</th>
                            <th> <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#pengumuman_pemenang">
                                    <i class="fa fa-bullhorn" aria-hidden="true"></i> Pengumuman Pemenang
                                </button></th>
                        </tr>
                        <tr>
                            <th>Surat Penunjukan Pemenang Pengadaan</th>
                            <th><button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#surat_penunjukan">
                                    <i class="fa fa-upload" aria-hidden="true"></i> Upload Surat Penunjukan
                                </button></th>
                        </tr>

                    </table>
                </div>
            </div>
        </div>
</main>
<div class="modal fade" id="upload_dokumen_penawaran" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="exampleModalLabel"> <i class="fa fa-folder-open" aria-hidden="true"></i> Upload Dokumen Penawaran</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="alert alert-primary d-flex align-items-center" role="alert">
                        <div>
                            <i class="fa fa-info-circle" aria-hidden="true"></i> Silakan Masukan Username Panitia Anda Untuk Dapat Mengakses Upload Dokumen Penawaran !!!
                        </div>
                    </div>
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-8">
                        <center>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"> <i class="fas fa fa-user"></i></span>
                                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"> <i class="fa fa-unlock-alt" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" readonly value="radxH8GTvQwcdX8sSLoAtfFJu63uCykCUjyn6x7PXeexHrMJbfE45lnRPJDC1aggY2nP7j9BUWF6DvhYbqpIOBtOsphTW0m2omFB04wb9h5stGKEzS9TLOXeNYR71KV3" aria-describedby="basic-addon1">
                            </div>
                            <br>
                            <a target="_blank" href="<?= base_url('panitia/info_tender/informasi_tender/buka_penawaran/' . $row_rup['id_url_rup']) ?>" class="btn btn-warning" style="width: 300px;"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Akses Dokumen</a>
                        </center>
                    </div>
                    <div class="col-md-2">

                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="buka_dokumen_penawaran" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="exampleModalLabel"> <i class="fa fa-folder-open" aria-hidden="true"></i> Buka Dokumen Penawaran</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="alert alert-primary d-flex align-items-center" role="alert">
                        <div>
                            <i class="fa fa-info-circle" aria-hidden="true"></i> Silakan Masukan Username Panitia Anda Untuk Dapat Mengakses Pembukan Dokumen Penawaran !!!
                        </div>
                    </div>
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-8">
                        <center>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"> <i class="fas fa fa-user"></i></span>
                                <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1">
                            </div>
                            <div class="input-group mb-3">
                                <span class="input-group-text" id="basic-addon1"> <i class="fa fa-unlock-alt" aria-hidden="true"></i></span>
                                <input type="text" class="form-control" readonly value="radxH8GTvQwcdX8sSLoAtfFJu63uCykCUjyn6x7PXeexHrMJbfE45lnRPJDC1aggY2nP7j9BUWF6DvhYbqpIOBtOsphTW0m2omFB04wb9h5stGKEzS9TLOXeNYR71KV3" aria-describedby="basic-addon1">
                            </div>
                            <br>
                            <a target="_blank" href="<?= base_url('panitia/info_tender/informasi_tender/buka_penawaran/' . $row_rup['id_url_rup']) ?>" class="btn btn-warning" style="width: 300px;"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Akses Dokumen</a>
                        </center>
                    </div>
                    <div class="col-md-2">

                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- modal ba tender -->
<div class="modal fade" id="upload_berita_acara_tender" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="exampleModalLabel"> <i class="fa fa-upload" aria-hidden="true"></i> Berita Acara Pengadaan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="form_upload_berita_acara_tender" action="javascript:;" enctype="multipart/form-data">
                <input type="hidden" name="id_rup_ba_tender" value="<?= $row_rup['id_rup'] ?>">
                <input type="hidden" name="nama_rup_ba_tender" value="<?= $row_rup['nama_rup'] ?>">
                <div class="modal-body">
                    <div class="alert alert-primary d-flex align-items-center" role="alert">
                        <div>
                            <i class="fa fa-info-circle" aria-hidden="true"> </i> Dokumen Umum Untuk Di Upload !!! <br>
                            <ol>
                                <li>Peringkat Teknis</li>
                                <li>Peringkat Penawaran Harga</li>
                                <li>Pengumuman Pemenang</li>
                                <li>Undangan Presentasi</li>
                                <li>Addendum Dokumen Pengadaan</li>
                                <li>Informasi Lainnya</li>
                            </ol>
                        </div>
                    </div>
                    <br>
                    <label>Nama File</label>
                    <input type="text" class="form-control" name="nama_file" placeholder="Nama File">
                    <br>
                    <input type="file" class="form-control" accept=".xlsx, .xls, .pdf" name="file_ba">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button class="btn btn-outline-success btn_file_ba" type="submit">Upload</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- end modal ba tender -->

<!-- modal ba penawaran -->
<div class="modal fade" id="upload_berita_acara_penawaran" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="exampleModalLabel"> <i class="fa fa-upload" aria-hidden="true"></i> Berita Acara Pengadaan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form id="form_upload_berita_acara_tender" action="javascript:;" enctype="multipart/form-data">
                <input type="hidden" name="id_rup_ba_tender" value="<?= $row_rup['id_rup'] ?>">
                <input type="hidden" name="nama_rup_ba_tender" value="<?= $row_rup['nama_rup'] ?>">
                <div class="modal-body">
                    <div class="alert alert-primary d-flex align-items-center" role="alert">
                        <div>
                            <i class="fa fa-info-circle" aria-hidden="true"> </i> Dokumen Umum Untuk Di Upload !!! <br>
                            <ol>
                                <li>Peringkat Teknis</li>
                                <li>Peringkat Penawaran Harga</li>
                                <li>Pengumuman Pemenang</li>
                                <li>Undangan Presentasi</li>
                                <li>Addendum Dokumen Pengadaan</li>
                            </ol>
                        </div>
                    </div>
                    <br>
                    <label>Nama File</label>
                    <input type="text" class="form-control" name="nama_file" placeholder="Nama File">
                    <br>
                    <input type="file" class="form-control" accept=".xlsx, .xls, .pdf" name="file_ba">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button class="btn btn-outline-success btn_file_ba" type="submit">Upload</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- end modal ba penawaran -->

<div class="modal fade" id="pengumuman_pemenang" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-warning text-white">
                <h5 class="modal-title" id="exampleModalLabel"> <i class="fa fa-bullhorn" aria-hidden="true"></i> Pengumuman Pemenang</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="alert alert-primary d-flex align-items-center" role="alert">
                    <div>
                        <i class="fa fa-info-circle" aria-hidden="true"> </i> Kirim Pengumuman Pemenang Pengadaan !!! <br>
                    </div>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Peserta</th>
                            <th>Email</th>
                            <th>Pemenang</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;
                        foreach ($get_pemenang as $key => $value) { ?>
                            <tr>
                                <td scope="row"><?= $i++ ?></td>
                                <td><?= $value['nama_usaha'] ?></td>
                                <td><?= $value['email'] ?></td>
                                <td>
                                    <?php if ($value['ev_hea_peringkat'] == 1) { ?>
                                        <i class="fas fa fa-star text-warning"></i>
                                    <?php   } else { ?>
                                        <i class="fas fa fa-times text-danger"></i>
                                    <?php   }  ?>

                                </td>
                            </tr>
                        <?php } ?>

                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-success" data-bs-dismiss="modal"><i class="fa fa-paper-plane" aria-hidden="true"></i> Kirim Pengumuman</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="undangan_pembuktian" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-warning text-white">
                <h5 class="modal-title" id="exampleModalLabel"> <i class="fa fa-bullhorn" aria-hidden="true"></i> Undangan Pembuktian</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="alert alert-primary d-flex align-items-center" role="alert">
                    <div>
                        <i class="fa fa-info-circle" aria-hidden="true"> </i> Undangan Pembuktian Pengadaan !!! <br>
                    </div>
                </div>
                <form id="form_upload_undangan_pembuktian" action="javascript:;" enctype="multipart/form-data">
                    <input type="hidden" name="id_rup_pembuktian" value="<?= $row_rup['id_rup'] ?>">
                    <input type="hidden" name="nama_rup_pembuktian" value="<?= $row_rup['nama_rup'] ?>">
                    <div class="input-group">
                        <input type="file" class="form-control" accept=".xlsx, .xls, .pdf" name="file_undangan_pembuktian">
                        <button class="btn btn-outline-secondary btn_undangan" type="submit">Upload</button>
                    </div>
                </form>
                <br>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama File</th>
                            <th>File</th>
                        </tr>
                    </thead>
                    <tbody id="tbl_undangan_pembuktian">
                        <!-- <tr>
                            <td scope="row">1</td>
                            <td>Undangan Pembuktian</td>
                            <td><label for="" class="btn btn-sm btn-danger"> Belum Upload Undangan</label></td>
                        </tr> -->
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="hasil_prakualifikasi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-warning text-white">
                <h5 class="modal-title" id="exampleModalLabel"> <i class="fa fa-bullhorn" aria-hidden="true"></i> Pengumuman Hasil Prakualifikasi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="alert alert-primary d-flex align-items-center" role="alert">
                    <div>
                        <i class="fa fa-info-circle" aria-hidden="true"> </i> Pengumuman Hasil Prakualifikasi Pengadaan !!! <br>
                    </div>
                </div>
                <form id="form_upload_hasil_prakualifikasi" action="javascript:;" enctype="multipart/form-data">
                    <div class="input-group">
                        <input type="hidden" name="id_rup_prakualifikasi" value="<?= $row_rup['id_rup'] ?>">
                        <input type="hidden" name="nama_rup_prakualifikasi" value="<?= $row_rup['nama_rup'] ?>">
                        <input type="file" class="form-control" accept=".xlsx, .xls, .pdf" name="file_pengumuman_prakualifikasi">
                        <button class="btn btn-outline-secondary btn_hasil_pra" type="submit">Upload</button>
                    </div>
                </form>
                <br>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama File</th>
                            <th>File</th>
                        </tr>
                    </thead>
                    <tbody id="tbl_hasil_prakualifikasi">
                        <!-- <tr>
                            <td scope="row">1</td>
                            <td>Pengumuman Hasil Prakualifikasi</td>
                            <td><label for="" class="btn btn-sm btn-danger"> Belum Upload</label></td>
                        </tr> -->
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="surat_penunjukan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="exampleModalLabel"> <i class="fa fa-bullhorn" aria-hidden="true"></i> Surat Penunjukan Pemenang</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="alert alert-primary d-flex align-items-center" role="alert">
                    <div>
                        <i class="fa fa-info-circle" aria-hidden="true"> </i>Upload Surat Penunjukan Pemenang Pengadaan !!! <br>
                    </div>
                </div>
                <form id="form_upload_surat_penunjukan" action="javascript:;" enctype="multipart/form-data">
                    <input type="hidden" name="id_rup_penunjukan" value="<?= $row_rup['id_rup'] ?>">
                    <input type="hidden" name="nama_rup_penunjukan" value="<?= $row_rup['nama_rup'] ?>">
                    <div class="input-group">
                        <input type="file" class="form-control" accept=".xlsx, .xls, .pdf" name="file_surat_penunjukan_pemenang">
                        <button class="btn btn-outline-secondary btn_penunjukan" type="submit">Upload</button>
                    </div>
                </form>
                <br>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama File</th>
                            <th>File</th>
                        </tr>
                    </thead>
                    <tbody id="tbl_penunjukan_pemenang">

                    </tbody>
                </table>
                <br>
                <hr>
                <center>
                    Vendor Pemenang
                </center>
                <hr>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Peserta</th>
                            <th>Email</th>
                            <th>Pemenang</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row">1</td>
                            <td><?= $get_rank1['nama_usaha'] ?></td>
                            <td><?= $get_rank1['email'] ?></td>
                            <td><i class="fas fa fa-star text-warning"></i></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="modal_detail_jadwal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="exampleModalLabel"> <i class="fa fa-bullhorn" aria-hidden="true"></i> Jadwal Pengadaan Berlangsung</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="alert alert-primary d-flex align-items-center" role="alert">
                    <div>
                        <i class="fa fa-info-circle" aria-hidden="true"> </i> Jadwal Pengadaan Berlangsung !!! <br>
                    </div>
                </div>
                <table class="table table-bordered">
                    <thead class="bg-secondary text-white">
                        <tr>
                            <th><small>No</small></th>
                            <th><small>Nama Jadwal</small></th>
                            <th><small>Waktu Mulai</small></th>
                            <th><small>Waktu Selesai</small></th>
                            <th><small>Status Tahap</small></th>
                            <th><small>Dibuat Oleh</small></th>
                            <th><small>Alasan Perubahan</small></th>
                        </tr>
                    </thead>
                    <tbody id="load_jadwal">

                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="lihat_peserta" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="exampleModalLabel"> <i class="fa fa-bullhorn" aria-hidden="true"></i> Peserta Pengadaan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="alert alert-primary d-flex align-items-center" role="alert">
                    <div>
                        <i class="fa fa-info-circle" aria-hidden="true"> </i> Peserta Ini Merupakan Peserta Yang Mengikuti Pengadaan !!! <br>
                    </div>
                </div>
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Peserta</th>
                            <th>Email</th>
                            <th>Telepon</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1;
                        foreach ($peserta_tender as $key => $value) { ?>
                            <tr>
                                <td scope="row"><?= $no++ ?></td>
                                <td><?= $value['nama_usaha'] ?></td>
                                <td><?= $value['email'] ?></td>
                                <td><?= $value['no_telpon'] ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="lihat_syarat_tambahan_vendor" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="exampleModalLabel"> <i class="fa fa-bullhorn" aria-hidden="true"></i> Syarat Tambahan Penyedia <label for="" id="nama_usaha_tambahan"></label></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="alert alert-primary d-flex align-items-center" role="alert">
                    <div>
                        <i class="fa fa-info-circle" aria-hidden="true"> </i> Lakukan Validasi Syarat Tambahan Penyedia !!! <br>
                    </div>
                </div>
                <table class="table table-bordered" id="get_dokumen_syarat_tambahan">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Persyaratan</th>
                            <th>File</th>
                            <th>Status Evaluasi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="evaluasi_syarat_tambahan" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="exampleModalLabel"> <i class="fa fa-bullhorn" aria-hidden="true"></i> Evaluasi Syarat Tambahan <label for="" class="nama_usaha_evaluasi_tambahan"></label></h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="javascript:;" id="form_persyaratan_tambahan">
                <input type="hidden" name="id_vendor_syarat_tambahan">
                <input type="hidden" name="status">
                <div class="modal-body">
                    <div class="alert alert-primary d-flex align-items-center" role="alert">
                        <div>
                            <i class="fa fa-info-circle" aria-hidden="true"> </i> Berikan Evaluasi Dan Validasi Syarat Tambahan Penyedia <label for="" class="nama_persyaratan_tambahan"></label>, <label for="" class="nama_usaha_evaluasi_tambahan"></label>!!! <br>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Keterangan Evaluasi Syarat Tambahan</label>
                        <textarea type="text" name="keterangan" id="" class="form-control" placeholder="" aria-describedby="helpId"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"> Close</button>
                    <button type="submit" onclick="lulus_syarat_tambahan()" class="btn btn-success btn_lulus"> <i class="fas fa fa-check"></i> Lulus Evaluasi</button>
                    <button type="submit" onclick="tidak_lulus_syarat_tambahan()" class="btn btn-danger btn_tidak_lulus"> <i class="fas fa fa-times"></i> Tidak Lulus Evaluasi</button>
                </div>
            </form>
        </div>
    </div>
</div>