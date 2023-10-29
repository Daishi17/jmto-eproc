<main class="container-fluid">
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
                <div class="card">
                    <div class="card-header bg-primary text-white">
                        <h4>Informasi Pengadaan</h4>
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
                            <small class="text-white"><strong><i class="fa-solid fa-table px-1"></i> Data Tabel - Evalusi Pengadaan</strong></small>
                        </span>
                    </div>
                </div>
                <div class="card-body">
                    <div style="overflow-x: auto;">
                        <table class="table table-bordered" id="tbl_evaluasi">
                            <thead class="bg-primary text-white">
                                <tr>
                                    <th>No</th>
                                    <th width="200px">Nama Peserta</th>
                                    <th>Status Kelengkapan Dokumen Administrasi</th>
                                    <th>Status Kelengkapan Dokumen Kualifikasi</th>
                                    <th>Nilai Prakualifikasi</th>
                                    <th>Nilai Teknis</th>
                                    <th>Penawaran</th>
                                    <th>Penawaran Terkoreksi</th>
                                    <th>Negosiasi</th>
                                    <th>Peringkat Teknis</th>
                                    <th>Nilai Akhir</th>
                                    <th>Sanggahan Prakualifikasi</th>
                                    <th>Sanggahan Akhir</th>
                                    <th>Pemenang</th>
                                    <th>Mengundurkan Diri</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>1</td>
                                    <td><a style="text-decoration:none" href="javascirpt:;" data-bs-toggle="modal" data-bs-target="#modal_evaluasi"> PT. KINTEK</a></td>
                                    <td>
                                        <span class="badge bg-success"><i class="fa fa-check" aria-hidden="true"></i>
                                            Dokumen Lengkap</span>
                                    </td>
                                    <td>
                                        <span class="badge bg-success"><i class="fa fa-check" aria-hidden="true"></i>
                                            Dokumen Lengkap</span>
                                    </td>
                                    <td><span class="badge bg-primary">80.50</span> </td>
                                    <td><span class="badge bg-primary">75.50</span> </td>
                                    <td><span class="badge bg-primary">1.000.000.000</span> </td>
                                    <td><span class="badge bg-primary">1.000.000.000</span> </td>
                                    <td>-</td>
                                    <td><span class="badge bg-primary">1</span></td>
                                    <td><span class="badge bg-primary">80.00</span></td>
                                    <td><button class="btn btn-sm btn-info text-white"><i class="fa fa-eye" aria-hidden="true"></i> Lihat</button></td>
                                    <td><button class="btn btn-sm btn-info text-white"><i class="fa fa-eye" aria-hidden="true"></i> Lihat</button></td>
                                    <td>
                                        <span class="text-warning"><i class="fa fa-star" aria-hidden="true"></i>
                                        </span>
                                    </td>
                                    <td>
                                        <span class="text-danger"><i class="fa fa-times" aria-hidden="true"></i>
                                        </span>
                                    </td>
                                </tr>

                                <tr>
                                    <td>2</td>
                                    <td><a style="text-decoration:none" href="javascirpt:;" data-bs-toggle="modal" data-bs-target="#modal_evaluasi"> PT. PANGRANGO</a></td>
                                    <td>
                                        <span class="badge bg-success"><i class="fa fa-check" aria-hidden="true"></i>
                                            Dokumen Lengkap</span>
                                    </td>
                                    <td>
                                        <span class="badge bg-success"><i class="fa fa-check" aria-hidden="true"></i>
                                            Dokumen Lengkap</span>
                                    </td>
                                    <td><span class="badge bg-primary">60.50</span> </td>
                                    <td><span class="badge bg-primary">65.50</span> </td>
                                    <td><span class="badge bg-primary">2.000.000.000</span> </td>
                                    <td><span class="badge bg-primary">2.000.000.000</span> </td>
                                    <td>-</td>
                                    <td><span class="badge bg-primary">2</span></td>
                                    <td><span class="badge bg-primary">64.00</span></td>
                                    <td><button class="btn btn-sm btn-info text-white"><i class="fa fa-eye" aria-hidden="true"></i> Lihat</button></td>
                                    <td><button class="btn btn-sm btn-info text-white"><i class="fa fa-eye" aria-hidden="true"></i> Lihat</button></td>
                                    <td>
                                        <span class="text-danger"><i class="fa fa-times" aria-hidden="true"></i>
                                        </span>
                                    </td>
                                    <td>
                                        <span class="text-danger"><i class="fa fa-times" aria-hidden="true"></i>
                                        </span>
                                    </td>
                                </tr>

                                <tr>
                                    <td>3</td>
                                    <td><a style="text-decoration:none" href="javascirpt:;" data-bs-toggle="modal" data-bs-target="#modal_evaluasi"> PT. Ciledug</a></td>
                                    <td>
                                        <span class="badge bg-success"><i class="fa fa-check" aria-hidden="true"></i>
                                            Dokumen Lengkap</span>
                                    </td>
                                    <td>
                                        <span class="badge bg-danger"><i class="fa fa-times" aria-hidden="true"></i>
                                            Dokumen Tidak Lengkap</span>
                                    </td>
                                    <td><span class="badge bg-danger">Gugur</span> </td>
                                    <td><span class="badge bg-danger">Gugur</span></td>
                                    <td><span class="badge bg-danger">Gugur</span> </td>
                                    <td><span class="badge bg-danger">Gugur</span> </td>
                                    <td>-</td>
                                    <td><span class="badge bg-danger">Gugur</span></td>
                                    <td><span class="badge bg-danger">Gugur</span></td>
                                    <td><button class="btn btn-sm btn-info text-white"><i class="fa fa-eye" aria-hidden="true"></i> Lihat</button></td>
                                    <td><button class="btn btn-sm btn-info text-white"><i class="fa fa-eye" aria-hidden="true"></i> Lihat</button></td>
                                    <td>
                                        <span class="text-danger"><i class="fa fa-times" aria-hidden="true"></i>
                                        </span>
                                    </td>
                                    <td>
                                        <span class="text-danger"><i class="fa fa-times" aria-hidden="true"></i>
                                        </span>
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
<div class="modal fade" id="modal_evaluasi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <a class="navbar-brand">
                    <img src="<?php echo base_url(); ?>/assets/brand/jm1.png" alt="" width="25" height="25" class="d-inline-block align-text-top">
                    <b><span class="text-primary">Jasamarga Tollroad Operator</span></b>

                </a>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card p-2 bg-primary">
                    <b><span class="text-white">Evaluasi PT. Kintek</span></b>
                </div>
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-administrasi" type="button" role="tab" aria-controls="pills-administrasi" aria-selected="true">1. Evaluasi Dokumen Administrasi</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-tambahan" type="button" role="tab" aria-controls="pills-tambahan" aria-selected="false">2. Evaluasi Persyaratan Tambahan</button>
                    </li>
                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-prakualifikasi" type="button" role="tab" aria-controls="pills-prakualifikasi" aria-selected="false">3. Evaluasi Nilai Prakualifikasi</button>
                    </li>

                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-teknis" type="button" role="tab" aria-controls="pills-teknis" aria-selected="false">4. Evaluasi Nilai Teknis</button>
                    </li>

                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-peringkat" type="button" role="tab" aria-controls="pills-peringkat" aria-selected="false">5. Evaluasi Peringkat Teknis</button>
                    </li>

                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-terkoreksi" type="button" role="tab" aria-controls="pills-terkoreksi" aria-selected="false">6. Evaluasi Harga Terkoreksi</button>
                    </li>

                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-negosiasi" type="button" role="tab" aria-controls="pills-negosiasi" aria-selected="false">7. Evaluasi Negosiasi</button>
                    </li>

                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-akhir" type="button" role="tab" aria-controls="pills-akhir" aria-selected="false">8. Evaluasi Nilai Akhir</button>
                    </li>
                </ul>
                <div class="tab-content" id="pills-tabContent">
                    <div class="tab-pane fade show active" id="pills-administrasi" role="tabpanel" aria-labelledby="pills-home-tab">
                        <div class="card">
                            <div class="card-header bg-primary text-white">
                                Evaluasi Dokumen Administrasi
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <tr>
                                        <th>Status Dokumen Persyaratan Dari Vms</th>
                                        <th>Status</th>
                                    </tr>
                                    <tr>
                                        <td>Dokumen Sesuai Vms/Dokumen Lengkap</td>
                                        <td><span class="btn btn-sm btn-success"><i class="fa fa-check"></i> Lengkap</span></td>
                                    </tr>
                                </table>

                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="pills-tambahan" role="tabpanel" aria-labelledby="pills-profile-tab">
                        <div class="card">
                            <div class="card-header bg-primary text-white">
                                Evaluasi Persyaratan Tambahan
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Persyaratan</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>On Going Project</td>
                                            <td><span class="btn btn-sm btn-success"><i class="fa fa-check"></i> Valid</span></td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Dokumen_Kualifikasi_Paket IX</td>
                                            <td><span class="btn btn-sm btn-success"><i class="fa fa-check"></i> Valid</span></td>
                                        </tr>
                                    </tbody>

                                </table>

                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="pills-prakualifikasi" role="tabpanel" aria-labelledby="pills-contact-tab">
                        <div class="card">
                            <div class="card-header bg-primary text-white">
                                Evaluasi Nilai Prakualifikasi
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center; vertical-align: middle;">Nilai Prakualifikasi</th>
                                            <th><input type="text" class="form-control" placeholder="Nilai Prakualifikasi"></th>
                                        </tr>
                                    </thead>

                                </table>

                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="pills-teknis" role="tabpanel" aria-labelledby="pills-contact-tab">
                        <div class="card">
                            <div class="card-header bg-primary text-white">
                                Evaluasi Nilai Teknis
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center; vertical-align: middle;">Nilai Teknis</th>
                                            <th><input type="text" class="form-control" placeholder="Nilai Teknis"></th>
                                        </tr>
                                    </thead>

                                </table>

                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="pills-peringkat" role="tabpanel" aria-labelledby="pills-contact-tab">
                        <div class="card">
                            <div class="card-header bg-primary text-white">
                                Evaluasi Peringkat Teknis
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center; vertical-align: middle;">Peringkat Teknis</th>
                                            <th><input type="text" class="form-control" placeholder="Peringkat Teknis"></th>
                                        </tr>
                                    </thead>

                                </table>

                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="pills-terkoreksi" role="tabpanel" aria-labelledby="pills-contact-tab">
                        <div class="card">
                            <div class="card-header bg-primary text-white">
                                Evaluasi Penawaran Terkoreksi
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center; vertical-align: middle;">Penawaran Terkoreksi</th>
                                            <th><input type="text" class="form-control" placeholder="Penawaran Terkoreksi"></th>
                                            <th><input type="text" class="form-control" placeholder="RP" disabled></th>
                                        </tr>
                                    </thead>

                                </table>

                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="pills-negosiasi" role="tabpanel" aria-labelledby="pills-contact-tab">
                        <div class="card">
                            <div class="card-header bg-primary text-white">
                                Evaluasi Negosiasi
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center; vertical-align: middle;">Negosiasi</th>
                                            <th><input type="text" class="form-control" placeholder="Nilai Negosiasi"></th>
                                            <th><input type="text" class="form-control" placeholder="RP" disabled></th>
                                        </tr>
                                    </thead>

                                </table>

                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="pills-akhir" role="tabpanel" aria-labelledby="pills-contact-tab">
                        <div class="card">
                            <div class="card-header bg-primary text-white">
                                Evaluasi Nilai Akhir
                            </div>
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th style="text-align: center; vertical-align: middle;">Nilai Akhir</th>
                                            <th><input type="text" class="form-control" placeholder="Nilai Akhir"></th>
                                        </tr>
                                    </thead>

                                </table>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>