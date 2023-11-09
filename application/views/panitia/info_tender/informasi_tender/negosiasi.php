<main class="container">
    <div class="row">
        <div class="col">
            <div class="card border-dark">
                <div class="card-header border-dark bg-white text-black">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a class="nav-link bg-primary text-white" style="margin-left: 5px;" href="<?= base_url('panitia/info_tender/informasi_tender/informasi_pengadaan/' . $row_rup['id_url_rup']) ?>"><i class="fa fa-columns" aria-hidden="true"></i> Informasi Pengadaan</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link bg-primary text-white" style="margin-left: 5px;" href="<?= base_url('panitia/info_tender/informasi_tender/aanwijzing/' . $row_rup['id_url_rup']) ?>"><i class="fa fa-comments" aria-hidden="true"></i> Aanwijzing</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link bg-primary text-white" style="margin-left: 5px;" href="<?= base_url('panitia/info_tender/informasi_tender/evaluasi/' . $row_rup['id_url_rup']) ?>"><i class="fa fa-pencil-square" aria-hidden="true"></i> Evaluasi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" style="margin-left: 5px;" href="<?= base_url('panitia/info_tender/informasi_tender/negosiasi/' . $row_rup['id_url_rup']) ?>"><i class="fa fa-tags" aria-hidden="true"></i> Negosiasi</a>
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
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h4>Negosiasi Pengadaan</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <tr>
                                <th>Nama Paket</th>
                                <td>PAKET KEMERDEKAAN 78 RI BOGOR</td>
                            </tr>
                            <tr>
                                <th>Nama Jenis Pengadaan</th>
                                <td>JASA KONSTRUKSI</td>

                            </tr>
                            <tr>
                                <th>Nama Metode Pemilihan </th>
                                <td>Prakualifikasi 2 file</td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="card-header border-dark bg-primary d-flex justify-content-between align-items-center">
                    <div class="flex-grow-1 bd-highlight">
                        <span class="text-dark">
                            <small class="text-white"><strong><i class="fa-solid fa-table px-1"></i> Data Tabel - Negosiasi Pengadaan</strong></small>
                        </span>
                    </div>
                </div>
                <div class="card-body">
                    <div style="overflow-x: auto;">
                        <table class="table table-bordered" id="tbl_evaluasi">
                            <thead class="bg-primary text-white">
                                <tr>
                                    <th width="50px">No</th>
                                    <th width="200px">Nama Peserta</th>
                                    <th>Tanggal Negosiasi</th>
                                    <th>Link Meet (Jika Daring)</th>
                                    <th>Upload Bukti</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td>PT. KINTEK</td>
                                    <td>
                                        <span class="badge bg-primary"><i class="fa fa-date" aria-hidden="true"></i>
                                            19-10-2023</span>
                                    </td>
                                    <td>https://meet.google.com/</td>
                                    <td>
                                        <a href="javascript:;" class="btn btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal_negosiasi"><i class="fa fa-file" aria-hidden="true"></i>
                                            Upload</a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>2</td>
                                    <td>PT. PANGRANGO</td>
                                    <td>
                                        <span class="badge bg-primary"><i class="fa fa-date" aria-hidden="true"></i>
                                            19-10-2023</span>
                                    </td>
                                    <td>https://meet.google.com/</td>
                                    <td>
                                        <a href="javascript:;" class="btn btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal_negosiasi"><i class="fa fa-file" aria-hidden="true"></i>
                                            Upload</a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
</main>


<!-- Modal -->
<!-- Modal -->
<div class="modal fade" id="modal_negosiasi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary text-white">
                <h5 class="modal-title" id="exampleModalLabel">Form Negosiasi</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Link Meet (Jika Daring)</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Upload Bukti</label>
                        <input type="file" class="form-control" id="exampleInputPassword1">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                <button type="button" class="btn btn-primary">Simpan</button>
            </div>
        </div>
    </div>
</div>