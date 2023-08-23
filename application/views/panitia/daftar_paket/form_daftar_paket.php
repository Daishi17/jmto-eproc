<main class="container-fluid">
    <input type="hidden" name="id_url_rup" value="<?= $row_rup['id_url_rup'] ?>">

    <div class="row">
        <div class="col">
            <div class="card border-dark">
                <div class="card-header border-dark bg-gradient-color1">
                    <h6 class="card-title">
                        <span class="text-white">
                            <i class="fa-solid fa-business-time"></i>
                            <small><strong>Transaksi Tender / Pengadaan</strong></small>
                        </span>
                    </h6>
                </div>
            </div>
            <hr>
            <div class="card border-dark">
                <div class="card-header border-dark bg-gradient-yellow d-flex justify-content-between align-items-center">
                    <div class="flex-grow-1 bd-highlight">
                        <span class="text-dark">
                            <i class="fa-solid fa-table px-1"></i>
                            <small><strong>Form Isian - Paket Penyedia</strong></small>
                        </span>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <from>
                                <table class="table table-bordered table-sm shadow-lg">
                                    <tr>
                                        <th class="bg-light">
                                            <small>Kode</small>
                                        </th>
                                        <td>
                                            <i class="fa-solid fa-barcode px-2"></i>
                                            <small><?= $row_rup['kode_rup'] ?></small>
                                        </td>
                                        <th class="bg-light">
                                            <small>Tahun</small>
                                        </th>
                                        <td>
                                            <i class="fa-solid fa-calendar-days px-2"></i>
                                            <small><?= $row_rup['tahun_rup'] ?></small>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="bg-light">
                                            <small>Departemen</small>
                                        </th>
                                        <td>
                                            <i class="fa-solid fa-building-columns px-2"></i>
                                            <small><?= $row_rup['nama_departemen'] ?></small>
                                        </td>
                                        <th class="bg-light">
                                            <small>Sections</small>
                                        </th>
                                        <td>
                                            <i class="fa-solid fa-map px-2"></i>
                                            <small><?= $row_rup['nama_section'] ?></small>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="bg-light">
                                            <small>Nama Paket</small>
                                        </th>
                                        <td colspan="3">
                                            <i class="fa-solid fa-gift px-2"></i>
                                            <small><?= $row_rup['nama_rup'] ?></small>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="bg-light">
                                            <small>Lokasi Ruas Toll</small>
                                        </th>
                                        <td colspan="3">
                                            <i class="fa-solid fa-road px-2"></i>
                                            <small><?= $row_rup['nama_ruas'] ?></small>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="bg-light">
                                            <small>Waktu Pelaksanaan</small>
                                        </th>
                                        <td>
                                            <i class="fa-regular fa-calendar-days px-2"></i>
                                            <small><?= $row_rup['jangka_waktu_mulai_pelaksanaan'] ?></small> - <small><?= $row_rup['jangka_waktu_selesai_pelaksanaan'] ?></small>&nbsp;&amp;
                                            <i class="fa-solid fa-clock px-1"></i>
                                            <small><?= $row_rup['jangka_waktu_hari_pelaksanaan'] ?></small>&nbsp; Hari
                                        </td>
                                        <th class="bg-light">
                                            <small>Kualifikasi Usaha</small>
                                        </th>
                                        <td>
                                            <i class="fa-solid fa-building-circle-check px-1"></i>
                                            <small><?= $row_rup['kualifikasi_usaha'] ?></small>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="bg-light">
                                            <small><?= $row_rup['status_pencatatan'] ?></small>
                                        </th>
                                        <td>
                                            <i class="fa-solid fa-pen-to-square px-2"></i>
                                            <small>TKDN</small>
                                        </td>
                                        <th class="bg-light">
                                            <small>( % ) Pencatatan </small>
                                        </th>
                                        <td>
                                            <i class="fa-solid fa-chart-simple px-2"></i>
                                            <small><?= $row_rup['persen_pencatatan'] ?></small>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th colspan="4">
                                            <div class="card border-dark shadow-lg">
                                                <div class="card-header border-dark bg-gradient-color2 d-flex justify-content-between align-items-center">
                                                    <div class="flex-grow-1 bd-highlight text-center">
                                                        <span class="text-dark">
                                                            <i class="fa-solid fa-business-time px-1"></i>
                                                            <small>Deskripsi Jenis & Metode Pengadaan</small>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <table class="table table-bordered border-dark table-sm shadow-lg">
                                                        <thead class="bg-secondary text-white">
                                                            <tr>
                                                                <th><small>Jenis Anggaran</small></th>
                                                                <th><small>Jenis Pengadaan</small></th>
                                                                <th><small>Metode Pengadaan</small></th>
                                                                <th><small>Metode Kualifikasi</small></th>
                                                                <th><small>Dokumen Pemilihan</small></th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <i class="fa-solid fa-money-bill px-1"></i>
                                                                    <small><?= $row_rup['nama_jenis_anggaran'] ?></small>
                                                                </td>
                                                                <td>
                                                                    <i class="fa-solid fa-briefcase px-1"></i>
                                                                    <small><?= $row_rup['nama_jenis_pengadaan'] ?></small>
                                                                </td>
                                                                <td>
                                                                    <i class="fa-solid fa-business-time px-1"></i>
                                                                    <small><?= $row_rup['nama_metode_pengadaan'] ?></small>
                                                                </td>
                                                                <td>
                                                                    <i class="fa-solid fa-bars-progress px-1"></i>
                                                                    <small><?= $row_rup['metode_kualifikasi'] ?></small>
                                                                </td>
                                                                <td>
                                                                    <i class="fa-solid fa-folder-tree px-1"></i>
                                                                    <small><?= $row_rup['metode_dokumen'] ?></small>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th colspan="4">
                                            <div class="card border-dark shadow-lg">
                                                <div class="card-header border-dark bg-gradient-color2 d-flex justify-content-between align-items-center">
                                                    <div class="flex-grow-1 bd-highlight text-center">
                                                        <span class="text-dark">
                                                            <i class="fa-solid fa-money-bill-wave px-1"></i>
                                                            <small>Form Isian HPS</small>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <table class="table table-bordered border-dark table-sm shadow-lg">
                                                        <thead class="bg-secondary text-white">
                                                            <tr>
                                                                <th><small>Total Pagu Paket</small></th>
                                                                <th><small>Total HPS </small></th>
                                                                <th><small>Upload Dokumen HPS</small></th>
                                                                <th>
                                                                    <div class="text-center">
                                                                        <small>Dokumen HPS</small>
                                                                    </div>
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td style="vertical-align: middle;">
                                                                    <i class="fa-solid fa-rupiah-sign px-1"></i>
                                                                    <input type="hidden" name="total_pagu_rup" value="<?= $row_rup['total_pagu_rup'] ?>" class="form-control" placeholder="Total HPS">
                                                                    <small><?= "Rp " . number_format($row_rup['total_pagu_rup'], 2, ',', '.') ?></small>
                                                                </td>
                                                                <td>
                                                                    <div class="col-sm-12">
                                                                        <div class="input-group">
                                                                            <span class="input-group-text">Rp.</span>
                                                                            <input type="number" name="total_hps_rup" onkeyup="total_hps_validasi('<?= $row_rup['id_url_rup'] ?>')" class="form-control " placeholder="Total HPS" value="<?= $row_rup['total_hps_rup'] ?>">
                                                                            <input type="text" id="rupiah_total_hps" class="form-control bg-light" readonly value="<?= "Rp " . number_format($row_rup['total_hps_rup'], 2, ',', '.') ?>">
                                                                        </div>
                                                                    </div>
                                                                </td>

                                                                <td>
                                                                    <form id="form_hps" action="javascript:;" enctype="multipart/form-data">
                                                                        <div class="input-group">
                                                                            <input type="hidden" name="id_rup" value="<?= $row_rup['id_rup'] ?>">
                                                                            <input type="hidden" name="nama_rup" value="<?= $row_rup['nama_rup'] ?>">
                                                                            <input type="hidden" name="date_y" value="<?= date('Y') ?>">

                                                                            <input type="file" class="form-control" accept=".xlsx, .xls, .pdf" name="file_hps">

                                                                            <button class="btn btn-outline-secondary file_hps_btn" type="submit">Upload</button>
                                                                        </div>
                                                                    </form>
                                                                </td>

                                                                <td>
                                                                    <div class="text-center load_dok_Hps">

                                                                    </div>
                                                                </td>

                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th class="bg-light">
                                            <small>Jadwal Pengadaan</small>
                                        </th>
                                        <td class="bg-default" colspan="3">
                                            <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#modal-xl-jadwal">
                                                <i class="fa-solid fa-calendar-days px-1"></i>
                                                Buat Jadwal Pengadaan
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="bg-light">
                                            <small>Jenis Kontrak</small>
                                        </th>
                                        <td>
                                            <div class="input-group mb-2">
                                                <span class="input-group-text"><i class="fa-solid fa-square-pen px-1"></i></span>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected disabled value="">Pilih Jenis Kontrak..</option>
                                                    <option value="1">Lump Sum</option>
                                                    <option value="2">Harga Satuan</option>
                                                    <option value="3">Gabungan Lump Sum dan Harga Satuan</option>
                                                    <option value="4">Terima Jadi (Trunkey)</option>
                                                    <option value="5">Persentase (%)</option>
                                                </select>
                                            </div>
                                        </td>
                                        <th class="bg-light">
                                            <small>Pembebanan Tahun Anggaran</small>
                                        </th>
                                        <td>
                                            <div class="input-group mb-2">
                                                <span class="input-group-text"><i class="fa-solid fa-calendar-plus"></i></span>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected disabled value="">Pilih...</option>
                                                    <option value="1">Tahun Tunggal</option>
                                                    <option value="2">Tahun Jamak</option>
                                                </select>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="bg-light">
                                            <small>Bobot Penilaian</small>
                                        </th>
                                        <td>
                                            <div class="input-group mb-2">
                                                <span class="input-group-text"><i class="fa-solid fa-gear"></i></span>
                                                <select class="form-select" aria-label="Default select example">
                                                    <option selected disabled value="">Pilih...</option>
                                                    <option value="1">Kombinasi</option>
                                                    <option value="2">Bobot Teknis</option>
                                                    <option value="3">Bobot Biaya</option>
                                                </select>
                                            </div>
                                        </td>
                                        <td colspan="2">
                                            <div class="input-group mb-2">
                                                <span class="input-group-text"><i class="fa-solid fa-money-bill"></i></span>
                                                <input type="number" class="form-control bg-light" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==3) return false;" placeholder="Bobot Teknis" readonly>
                                                <span class="input-group-text"><i class="fa-solid fa-percent"></i></span>
                                                <span class="input-group-text"><i class="fa-solid fa-money-bill"></i></span>
                                                <input type="number" class="form-control bg-light" pattern="/^-?\d+\.?\d*$/" onKeyPress="if(this.value.length==3) return false;" placeholder="Bobot Biaya" readonly>
                                                <span class="input-group-text"><i class="fa-solid fa-percent"></i></span>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="bg-light">
                                            <small>Dokumen Persyaratan Pengadaan</small>
                                        </th>
                                        <td class="bg-default" colspan="3">
                                            <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#modal-xl-syarat">
                                                <i class="fa-regular fa-folder-open px-1"></i>
                                                Setting Dokumen Persyaratan
                                            </button>
                                            <button type="button" class="btn btn-sm btn-info" data-bs-toggle="modal" data-bs-target="#modal-xl-rekomendasi">
                                                <i class="fa-solid fa-building-user px-1"></i>
                                                Lihat Rekanan Terrekomendasi
                                            </button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th class="bg-light">
                                            <small>Daftar Rekanan Tervalidasi (DRT)</small>
                                        </th>
                                        <td class="bg-default" colspan="3">
                                            <button type="button" class="btn btn-sm btn-warning" data-bs-toggle="modal" data-bs-target="#modal-xl-rekanan">
                                                <i class="fa-solid fa-building-user px-1"></i>
                                                Pilih Rekanan Tervalidasi
                                            </button>
                                            <span class="text-danger"><small>* Khusus Jenis Tender Terbatas, Seleksi Terbatas, Pengadaan Langsung & Penunjukan Langsung</small></span>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th colspan="4">
                                            <div class="card border-dark shadow-lg">
                                                <div class="card-header border-dark bg-gradient-color2 d-flex justify-content-between align-items-center">
                                                    <div class="flex-grow-1 bd-highlight text-center">
                                                        <span class="text-dark">
                                                            <i class="fa-regular fa-folder-open px-1"></i>
                                                            <small>Form Isian Dokumen Pengadaan & Prakualifikasi</small>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <table class="table table-bordered border-dark table-sm shadow-lg">
                                                        <thead class="bg-secondary text-white">
                                                            <tr>
                                                                <th>
                                                                    <div class="text-center">
                                                                        <small>Dokumen Pengadaan</small>
                                                                    </div>
                                                                </th>
                                                                <th>
                                                                    <div class="text-center">
                                                                        <small>Dokumen Prakualifikasi </small>
                                                                    </div>
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="input-group mb-2">
                                                                        <span class="input-group-text"><i class="fa-solid fa-keyboard"></i></span>
                                                                        <input type="text" class="form-control" placeholder="Nama Dokumen Pengadaan">
                                                                    </div>
                                                                    <div class="input-group mb-2">
                                                                        <input type="file" class="form-control" id="file" accept=".pdf, .docx, .doc, .xlsx">
                                                                        <button class="btn btn-outline-secondary" type="button">Upload</button>
                                                                    </div>
                                                                    <button type="button" class="btn btn-sm btn-success">
                                                                        <i class="fa-solid fa-square-plus"></i>
                                                                        Tambah Dokumen Pengadaan
                                                                    </button>
                                                                </td>
                                                                <td>
                                                                    <div class="input-group mb-2">
                                                                        <span class="input-group-text"><i class="fa-solid fa-keyboard"></i></span>
                                                                        <input type="text" class="form-control" placeholder="Nama Dokumen Prakualifikasi">
                                                                    </div>
                                                                    <div class="input-group mb-2">
                                                                        <input type="file" class="form-control" id="file" accept=".pdf, .docx, .doc, .xlsx">
                                                                        <button class="btn btn-outline-secondary" type="button">Upload</button>
                                                                    </div>
                                                                    <button type="button" class="btn btn-sm btn-success">
                                                                        <i class="fa-solid fa-square-plus"></i>
                                                                        Tambah Dokumen Prakualifikasi
                                                                    </button>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <table class="table table-bordered border-dark table-sm shadow-lg">
                                                                        <thead class="bg-info text-dark">
                                                                            <tr>
                                                                                <th>
                                                                                    <small>Nama Dokumen Pengadaan</small>
                                                                                </th>
                                                                                <th>
                                                                                    <small>File Dokumen</small>
                                                                                </th>
                                                                                <th>
                                                                                    <div class="text-center">
                                                                                        <small>#</small>
                                                                                    </div>
                                                                                </th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>
                                                                                    <small>Nama Dokumen</small>
                                                                                </td>
                                                                                <td>
                                                                                    <button type="button" class="btn btn-sm btn-danger">
                                                                                        <i class="fa-solid fa-folder-open"></i>
                                                                                        File Dokumen Pengadaan
                                                                                    </button>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="text-center">
                                                                                        <button type="button" class="btn btn-sm btn-danger">
                                                                                            <i class="fa-solid fa-trash"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                                <td>
                                                                    <table class="table table-bordered border-dark table-sm shadow-lg">
                                                                        <thead class="bg-info text-dark">
                                                                            <tr>
                                                                                <th>
                                                                                    <small>Nama Dokumen Prakualifikasi</small>
                                                                                </th>
                                                                                <th>
                                                                                    <small>File Dokumen</small>
                                                                                </th>
                                                                                <th>
                                                                                    <div class="text-center">
                                                                                        <small>#</small>
                                                                                    </div>
                                                                                </th>
                                                                            </tr>
                                                                        </thead>
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>
                                                                                    <small>Nama Dokumen</small>
                                                                                </td>
                                                                                <td>
                                                                                    <button type="button" class="btn btn-sm btn-danger">
                                                                                        <i class="fa-solid fa-folder-open"></i>
                                                                                        File Dokumen Prakualifikasi
                                                                                    </button>
                                                                                </td>
                                                                                <td>
                                                                                    <div class="text-center">
                                                                                        <button type="button" class="btn btn-sm btn-danger">
                                                                                            <i class="fa-solid fa-trash"></i>
                                                                                        </button>
                                                                                    </div>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </th>
                                    </tr>
                                    <tr>
                                        <th colspan="4">
                                            <div class="card border-dark shadow-lg">
                                                <div class="card-header border-dark bg-gradient-color2 d-flex justify-content-between align-items-center">
                                                    <div class="flex-grow-1 bd-highlight text-center">
                                                        <span class="text-dark">
                                                            <i class="fa-solid fa-users px-1"></i>
                                                            <small>Panitia Pelaksana Pengadaan</small>
                                                        </span>
                                                    </div>
                                                </div>
                                                <div class="card-body">
                                                    <table class="table table-bordered border-dark table-sm shadow-lg">
                                                        <thead class="bg-secondary text-white">
                                                            <tr>
                                                                <th>
                                                                    <small>Nama Panitia Pelaksana Pengadaan</small>
                                                                </th>
                                                                <th>
                                                                    <small>Jabatan Panitia</small>
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <small>Ahmad Fikri Zulfikar</small>
                                                                </td>
                                                                <td>
                                                                    <small>Ketua Panitia</small>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <small>Angga Pramuja S</small>
                                                                </td>
                                                                <td>
                                                                    <small>Sekretaris</small>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <small>Dana Prasetyo S</small>
                                                                </td>
                                                                <td>
                                                                    <small>Anggota</small>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                    <table class="table table-bordered border-dark table-sm shadow-lg">
                                                        <tr>
                                                            <th><small>Peryataan Pakta Integritas</small></th>
                                                            <td>
                                                                <div class="input-group">
                                                                    <div class="input-group-text">
                                                                        <input class="form-check-input mt-0" type="checkbox" value="Setuju">
                                                                    </div>
                                                                    <input type="text" class="form-control" placeholder="Kami setuju dengan pakta integritas yang berlaku" readonly>
                                                                    <button class="btn btn-outline-secondary" type="button" data-bs-toggle="modal" data-bs-target="#modal-xl-pakta">
                                                                        <i class="fa-solid fa-file"></i>
                                                                        Lihat Pakta Integritas
                                                                    </button>
                                                                </div>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                </div>
                                            </div>
                                        </th>
                                    </tr>
                                </table>
                            </from>
                        </div>
                    </div>
                </div>
                <div class="card-footer bg-transparent border-dark">
                    <button type="button" class="btn btn-default btn-success" disabled>
                        <i class="fa-solid fa-floppy-disk px-1"></i>
                        Simpan Data Paket
                    </button>
                    <button type="button" class="btn btn-default btn-info" disabled>
                        <i class="fa-solid fa-bullhorn"></i>
                        Umumkan Paket
                    </button>
                    <button type="button" class="btn btn-default btn-warning" onclick="history.back()">
                        <i class="fa-solid fa-angles-left px-1"></i>
                        Kembali Kemenu Sebelumnya
                    </button>
                </div>
            </div>
            <!-- modal buat jadwal -->
            <div class="modal fade modal-dialog-centered modal-dialog-scrollable" id="modal-xl-jadwal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
                <div class="modal-dialog modal-xl">
                    <div class="modal-content">
                        <div class="modal-header">
                            <a class="navbar-brand">
                                <img src="<?php echo base_url(); ?>/assets/brand/jm1.png" alt="" width="27" height="27" class="d-inline-block align-text-top">
                                <b><span class="text-primary">Jasamarga Tollroad Operator</span></b>
                            </a>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="javascript:;" id="form_jadwal">
                            <input type="hidden" value="<?= $row_rup['id_rup'] ?>" name="id_rup">
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col">
                                        <div class="card border-dark shadow-lg">
                                            <div class="card-header border-dark bd-blue-700 d-flex justify-content-between align-items-center">
                                                <div class="flex-grow-1 bd-highlight">
                                                    <span class="text-white">
                                                        <i class="fa-regular fa-rectangle-list px-1"></i>
                                                        <small><strong>Form Data - Jadwal Pengadaan/Tender</strong></small>
                                                    </span>
                                                </div>
                                            </div>
                                            <div class="card-body">

                                                <table class="table table-bordered table-sm shadow-lg">
                                                    <thead class="bg-secondary text-white">
                                                        <tr>
                                                            <th><small>No</small></th>
                                                            <th><small>Keterangan Jadwal Tender</small></th>
                                                            <th><small>Tanggal Awal</small></th>
                                                            <th><small>Tanggal Akhir</small></th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php
                                                        $i = 1;
                                                        $j = 1;
                                                        $k = 1;
                                                        foreach ($jadwal as $key => $value) { ?>
                                                            <input type="hidden" name="id_jadwal_rup[<?= $j ?>]">
                                                            <tr>
                                                                <td><small><?= $i++ ?></small></td>
                                                                <td><small><?= $value['nama_jadwal_rup'] ?></small></td>
                                                                <td>
                                                                    <small>
                                                                        <div class="input-group mb-2">
                                                                            <span class="input-group-text"><i class="fa-regular fa-calendar-days"></i></span>
                                                                            <input type="datetime-local" class="form-control" name="waktu_mulai[<?= $k ?>]" value="<?= $value['waktu_mulai'] ?>">
                                                                        </div>
                                                                    </small>
                                                                </td>
                                                                <td>
                                                                    <small>
                                                                        <div class="input-group mb-2">
                                                                            <span class="input-group-text"><i class="fa-regular fa-calendar-days"></i></span>
                                                                            <input type="datetime-local" class="form-control" name="waktu_selesai[<?= $k ?>]" value="<?= $value['waktu_selesai'] ?>">
                                                                        </div>
                                                                    </small>
                                                                </td>
                                                            </tr>
                                                            <?php $j++ ?>
                                                            <?php $k++ ?>
                                                        <?php  } ?>

                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="modal-footer justify-content-start">
                                <div class="container-fluid">
                                    <button type="submit" class="btn btn-success btn_jadwal">
                                        <i class="fa-solid fa-hard-drive"></i>
                                        Simpan Data
                                    </button>
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
                                        <i class="fa-solid fa-angles-left"></i>
                                        Kembali
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- modal buat syarat administrasi dan teknis -->
        <div class="modal fade" id="modal-xl-syarat" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
            <div class="modal-dialog modal-dialog-scrollable modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <a class="navbar-brand">
                            <img src="<?php echo base_url(); ?>/assets/brand/jm1.png" alt="" width="27" height="27" class="d-inline-block align-text-top">
                            <b><span class="text-primary">Jasamarga Tollroad Operator</span></b>
                        </a>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form>
                        <div class="modal-body">
                            <div class="row">
                                <div class="col">
                                    <div class="card border-dark shadow-lg">
                                        <div class="card-header border-dark bd-blue-700 d-flex justify-content-between align-items-center">
                                            <div class="flex-grow-1 bd-highlight">
                                                <span class="text-white">
                                                    <i class="fa-regular fa-rectangle-list px-1"></i>
                                                    <small><strong>Form Data - Persyaratan Administrasi & Teknis Pengadaan</strong></small>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <table class="table table-bordered table-sm shadow-lg">
                                                <tr>
                                                    <th><small>Kualifikasi Usaha</small></th>
                                                    <td>
                                                        <div class="input-group">
                                                            <span class="input-group-text"><i class="fa-solid fa-gear"></i></span>
                                                            <select class="form-select form-select-sm" aria-label="Default select example">
                                                                <option selected disabled value="">Pilih Kualifikasi...</option>
                                                                <option value="1">Besar</option>
                                                                <option value="2">Minimal Menengah</option>
                                                                <option value="3">Maksimal Menengah</option>
                                                                <option value="4">Kecil/UMKM</option>
                                                            </select>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        <div class="card border-dark shadow-lg">
                                                            <div class="card-header border-dark bg-warning d-flex justify-content-between align-items-center">
                                                                <div class="flex-grow-1 text-center bd-highlight">
                                                                    <span class="text-dark">
                                                                        <i class="fa-regular fa-rectangle-list px-1"></i>
                                                                        <small><strong>Persyaratan Administrasi / Legalitas</strong></small>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <table class="table table-sm table-bordered table-sm shadow-lg">
                                                                    <thead class="bg-secondary text-white text-center">
                                                                        <tr>
                                                                            <th colspan="2"><small>Izin Usaha</small></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <thead class="bg-light text-center">
                                                                        <tr>
                                                                            <th><small>Keterangan Jenis Izin Usaha</small></th>
                                                                            <th><small>Tahun Berlaku / Seumur Hidup</small></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="input-group mb-1">
                                                                                    <div class="input-group-text">
                                                                                        <input class="form-check-input mt-0" type="checkbox" value="Setuju">
                                                                                    </div>
                                                                                    <input type="text" class="form-control form-control-sm" value="Surat Izin Usaha Perdagangan (SIUP)" readonly>
                                                                                </div>
                                                                                <div class="input-group mb-1">
                                                                                    <div class="input-group-text">
                                                                                        <input class="form-check-input mt-0" type="checkbox" value="Setuju">
                                                                                    </div>
                                                                                    <input type="text" class="form-control form-control-sm" value="Nomor Induk Berusaha (NIB/TDP)" readonly>
                                                                                </div>
                                                                                <div class="input-group mb-1">
                                                                                    <div class="input-group-text">
                                                                                        <input class="form-check-input mt-0" type="checkbox" value="Setuju">
                                                                                    </div>
                                                                                    <input type="text" class="form-control form-control-sm" value="Sertifikat Badan Usaha (SBU)" readonly>
                                                                                </div>
                                                                                <div class="input-group mb-1">
                                                                                    <div class="input-group-text">
                                                                                        <input class="form-check-input mt-0" type="checkbox" value="Setuju">
                                                                                    </div>
                                                                                    <input type="text" class="form-control form-control-sm" value="Surat Izin Jasa Konstruksi (SIUJK)" readonly>
                                                                                </div>
                                                                                <div class="input-group mb-1">
                                                                                    <div class="input-group-text">
                                                                                        <input class="form-check-input mt-0" type="checkbox" value="Setuju">
                                                                                    </div>
                                                                                    <input type="text" class="form-control form-control-sm" value="Surat Keterangan Domisili Perusahan (SKDP)" readonly>
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="input-group mb-1">
                                                                                    <span class="input-group-text"><i class="fa-regular fa-calendar-days"></i></span>
                                                                                    <select class="form-select form-select-sm" aria-label="Default select example">
                                                                                        <option selected disabled value="">Pilih...</option>
                                                                                        <option value="1">Seumur Hidup</option>
                                                                                        <option value="2">Tanggal</option>
                                                                                    </select>
                                                                                    <input type="date" class="form-control form-control-sm">
                                                                                </div>
                                                                                <div class="input-group mb-1">
                                                                                    <span class="input-group-text"><i class="fa-regular fa-calendar-days"></i></span>
                                                                                    <select class="form-select form-select-sm" aria-label="Default select example">
                                                                                        <option selected disabled value="">Pilih...</option>
                                                                                        <option value="1">Seumur Hidup</option>
                                                                                        <option value="2">Tanggal</option>
                                                                                    </select>
                                                                                    <input type="date" class="form-control form-control-sm">
                                                                                </div>
                                                                                <div class="input-group mb-1">
                                                                                    <span class="input-group-text"><i class="fa-regular fa-calendar-days"></i></span>
                                                                                    <select class="form-select form-select-sm" aria-label="Default select example">
                                                                                        <option selected disabled value="">Pilih...</option>
                                                                                        <option value="1">Seumur Hidup</option>
                                                                                        <option value="2">Tanggal</option>
                                                                                    </select>
                                                                                    <input type="date" class="form-control form-control-sm">
                                                                                </div>
                                                                                <div class="input-group mb-1">
                                                                                    <span class="input-group-text"><i class="fa-regular fa-calendar-days"></i></span>
                                                                                    <select class="form-select form-select-sm" aria-label="Default select example">
                                                                                        <option selected disabled value="">Pilih...</option>
                                                                                        <option value="1">Seumur Hidup</option>
                                                                                        <option value="2">Tanggal</option>
                                                                                    </select>
                                                                                    <input type="date" class="form-control form-control-sm">
                                                                                </div>
                                                                                <div class="input-group mb-1">
                                                                                    <span class="input-group-text"><i class="fa-regular fa-calendar-days"></i></span>
                                                                                    <select class="form-select form-select-sm" aria-label="Default select example">
                                                                                        <option selected disabled value="">Pilih...</option>
                                                                                        <option value="1">Seumur Hidup</option>
                                                                                        <option value="2">Tanggal</option>
                                                                                    </select>
                                                                                    <input type="date" class="form-control form-control-sm">
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <table class="table table-sm table-bordered table-sm shadow-lg">
                                                                    <thead class="bg-secondary text-white text-center">
                                                                        <tr>
                                                                            <th colspan="3"><small>Klasifikasi Buku Lapang Usaha Indonesia (KBLI)</small></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td class="col-sm-10">
                                                                                <div class="input-group">
                                                                                    <span class="input-group-text"><small>Jenis KBLI</small></span>
                                                                                    <span class="input-group-text"><i class="fa-solid fa-list"></i></span>
                                                                                    <input class="form-control form-control-sm" list="datalistOptions" placeholder="Pilih...">
                                                                                    <datalist id="datalistOptions">
                                                                                        <option value="1001 || Peralatan Komputer dan Lainnya">
                                                                                        <option value="1002 || Pemrograman dan Teknologi Informasi Lainnya">
                                                                                    </datalist>
                                                                                </div>
                                                                            </td>
                                                                            <td class="col-sm-2 text-center">
                                                                                <button type="submit" class="btn btn-sm btn-primary">
                                                                                    <i class="fa-solid fa-square-plus"></i>
                                                                                    Tambah KBLI
                                                                                </button>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td colspan="3">
                                                                                <table class="table table-sm table-bordered table-sm shadow-lg">
                                                                                    <thead class="bg-info">
                                                                                        <tr>
                                                                                            <th><small>Keterangan Jenis KBLI</small></th>
                                                                                            <th>
                                                                                                <div class="text-center">
                                                                                                    <small>#</small>
                                                                                                </div>
                                                                                            </th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                </table>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                                <table class="table table-sm table-bordered table-sm shadow-lg">
                                                                    <thead class="bg-secondary text-white text-center">
                                                                        <tr>
                                                                            <th colspan="3"><small>Sertifikat Badan Usaha (SBU)</small></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td class="col-sm-10">
                                                                                <div class="input-group">
                                                                                    <span class="input-group-text"><small>Jenis SBU</small></span>
                                                                                    <span class="input-group-text"><i class="fa-solid fa-list"></i></span>
                                                                                    <input class="form-control form-control-sm" list="datalistOptions" placeholder="Pilih...">
                                                                                    <datalist id="datalistOptions">
                                                                                        <option value="1001 || Peralatan Komputer dan Lainnya">
                                                                                        <option value="1002 || Pemrograman dan Teknologi Informasi Lainnya">
                                                                                    </datalist>
                                                                                </div>
                                                                            </td>
                                                                            <td class="col-sm-2 text-center">
                                                                                <button type="submit" class="btn btn-sm btn-primary">
                                                                                    <i class="fa-solid fa-square-plus"></i>
                                                                                    Tambah SBU
                                                                                </button>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td colspan="3">
                                                                                <table class="table table-sm table-bordered table-sm shadow-lg">
                                                                                    <thead class="bg-info">
                                                                                        <tr>
                                                                                            <th><small>Keterangan Jenis SBU</small></th>
                                                                                            <th>
                                                                                                <div class="text-center">
                                                                                                    <small>#</small>
                                                                                                </div>
                                                                                            </th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                </table>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        <div class="card border-dark shadow-lg">
                                                            <div class="card-header border-dark bg-warning d-flex justify-content-between align-items-center">
                                                                <div class="flex-grow-1 text-center bd-highlight">
                                                                    <span class="text-dark">
                                                                        <i class="fa-regular fa-rectangle-list px-1"></i>
                                                                        <small><strong>Persyaratan Teknis</strong></small>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <table class="table table-sm table-bordered table-sm shadow-lg">
                                                                    <tr>
                                                                        <td colspan="3">
                                                                            <div class="input-group">
                                                                                <div class="input-group-text">
                                                                                    <input class="form-check-input mt-0" type="checkbox" value="Setuju">
                                                                                </div>
                                                                                <input type="text" class="form-control form-control-sm" value="Pengalaman Pekerjaan Perusahaan" readonly>
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="col-sm-8" colspan=2>
                                                                            <div class="input-group">
                                                                                <div class="input-group-text">
                                                                                    <input class="form-check-input mt-0" type="checkbox" value="Setuju">
                                                                                </div>
                                                                                <input type="text" class="form-control form-control-sm" value="Surat Pemberitahuan Tahunan (SPT) Badan" readonly>
                                                                            </div>
                                                                        </td>
                                                                        <td class="col-sm-4">
                                                                            <div class="input-group">
                                                                                <span class="input-group-text"><small>Tahun Lapor</small></span>
                                                                                <span class="input-group-text"><i class="fa-regular fa-calendar-days"></i></span>
                                                                                <input type="number" class="form-control form-control-sm" min="2020" max="2099" step="1" value="2020">
                                                                                <!-- <span class="input-group-text"><i class="fa-regular fa-calendar-days"></i>&nbsp;<small>Akhir</small></span>
                                                                                    <input type="number" class="form-control form-control-sm" min="2020" max="2099" step="1" value="2020"> -->
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="col-sm-8" colspan="2">
                                                                            <div class="input-group">
                                                                                <div class="input-group-text">
                                                                                    <input class="form-check-input mt-0" type="checkbox" value="Setuju">
                                                                                </div>
                                                                                <input type="text" class="form-control form-control-sm" value="Laporan Keuangan" readonly>
                                                                                <span class="input-group-text"><i class="fa-solid fa-gear"></i></span>
                                                                                <select class="form-select form-select-sm" aria-label="Default select example">
                                                                                    <option selected disabled value="">Pilih Status...</option>
                                                                                    <option value="1">Audit</option>
                                                                                    <option value="2">Tidak Audit</option>
                                                                                </select>
                                                                            </div>
                                                                        </td>

                                                                        <td class="col-sm-4">
                                                                            <div class="input-group">
                                                                                <span class="input-group-text"><small>Awal</small></span>
                                                                                <!-- <span class="input-group-text"><i class="fa-regular fa-calendar-days"></i></span> -->
                                                                                <input type="number" class="form-control form-control-sm" min="2020" max="2099" step="1" value="2020">

                                                                                <span class="input-group-text"><small>Akhir</small></span>
                                                                                <!-- <span class="input-group-text"><i class="fa-regular fa-calendar-days"></i></span> -->
                                                                                <input type="number" class="form-control form-control-sm" min="2020" max="2099" step="1" value="2020">
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td class="col-sm-8">
                                                                            <div class="input-group">
                                                                                <div class="input-group-text">
                                                                                    <input class="form-check-input mt-0" type="checkbox" value="Setuju">
                                                                                </div>
                                                                                <input type="text" class="form-control form-control-sm" value="Neraca Keuangan" readonly>
                                                                            </div>
                                                                        </td>
                                                                        <td class="col-sm-4" colspan="2">
                                                                            <div class="input-group">
                                                                                <span class="input-group-text"><small>Awal</small></span>
                                                                                <!-- <span class="input-group-text"><i class="fa-regular fa-calendar-days"></i></span> -->
                                                                                <input type="number" class="form-control form-control-sm" min="2020" max="2099" step="1" value="2020">

                                                                                <span class="input-group-text"><small>Akhir</small></span>
                                                                                <!-- <span class="input-group-text"><i class="fa-regular fa-calendar-days"></i></span> -->
                                                                                <input type="number" class="form-control form-control-sm" min="2020" max="2099" step="1" value="2020">
                                                                            </div>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2">
                                                        <div class="card border-dark shadow-lg">
                                                            <div class="card-header border-dark bg-warning d-flex justify-content-between align-items-center">
                                                                <div class="flex-grow-1 text-center bd-highlight">
                                                                    <span class="text-dark">
                                                                        <i class="fa-regular fa-rectangle-list px-1"></i>
                                                                        <small><strong>Persyaratan Tambahan</strong></small>
                                                                    </span>
                                                                </div>
                                                            </div>
                                                            <div class="card-body">
                                                                <table class="table table-sm table-bordered table-sm shadow-lg">
                                                                    <thead class="bg-secondary text-white text-center">
                                                                        <tr>
                                                                            <th class="col-sm-8"><small>Keterangan Persyaratan</small></th>
                                                                            <th class="col-sm-4"><small>Upload Contoh Format File Excel</small></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        <tr>
                                                                            <td>
                                                                                <div class="input-group">
                                                                                    <span class="input-group-text"><i class="fa-solid fa-keyboard"></i></span>
                                                                                    <input type="text" class="form-control form-control-sm">
                                                                                </div>
                                                                            </td>
                                                                            <td>
                                                                                <div class="input-group">
                                                                                    <span class="input-group-text"><i class="fa-solid fa-cloud-arrow-up"></i></span>
                                                                                    <input type="file" class="form-control form-control-sm" accept=".xlsx, .xls">
                                                                                </div>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td colspan="2">
                                                                                <button type="submit" class="btn btn-sm btn-primary">
                                                                                    <i class="fa-solid fa-square-plus"></i>
                                                                                    Persyaratan Tambahan
                                                                                </button>
                                                                            </td>
                                                                        </tr>
                                                                        <tr>
                                                                            <td colspan="2">
                                                                                <table class="table table-sm table-bordered table-sm shadow-lg">
                                                                                    <thead class="bg-info">
                                                                                        <tr>
                                                                                            <th class="col-sm-9"><small>Keterangan Persyaratan</small></th>
                                                                                            <th class="col-sm-2">
                                                                                                <div class="text-center">
                                                                                                    <small>Contoh Format File</small>
                                                                                                </div>
                                                                                            </th>
                                                                                            <th class="col-sm-1">
                                                                                                <div class="text-center">
                                                                                                    <small>#</small>
                                                                                                </div>
                                                                                            </th>
                                                                                        </tr>
                                                                                    </thead>
                                                                                </table>
                                                                            </td>
                                                                        </tr>
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer justify-content-start">
                            <div class="container">
                                <button type="submit" class="btn btn-success">
                                    <i class="fa-solid fa-hard-drive"></i>
                                    Simpan Data
                                </button>
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
                                    <i class="fa-solid fa-angles-left"></i>
                                    Kembali
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- modal Cek Rekanan Terrekomendasi -->
        <div class="modal fade" id="modal-xl-rekomendasi" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1">
            <div class="modal-dialog modal-dialog-scrollable modal-xl">
                <div class="modal-content">
                    <div class="modal-header">
                        <a class="navbar-brand">
                            <img src="<?php echo base_url(); ?>/assets/brand/jm1.png" alt="" width="27" height="27" class="d-inline-block align-text-top">
                            <b><span class="text-primary">Jasamarga Tollroad Operator</span></b>
                        </a>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col">
                                <div class="card border-dark shadow-lg">
                                    <div class="card-header border-dark bd-blue-700 d-flex justify-content-between align-items-center">
                                        <div class="flex-grow-1 bd-highlight">
                                            <span class="text-white">
                                                <i class="fa-regular fa-rectangle-list px-1"></i>
                                                <small><strong>List Data - Rekanan Terrekomendasi Sesuai Persyaratan Pengadaan</strong></small>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <table class="table table-sm table-bordered border-dark table-sm shadow-lg">
                                            <thead class="bg-secondary text-white text-center">
                                                <tr>
                                                    <th class="col-sm-4"><small>Nama Perusahaan</small></th>
                                                    <th class="col-sm-3"><small>Jenis Usaha</small></th>
                                                    <th class="col-sm-2"><small>Kualifikasi Usaha</small></th>
                                                    <th class="col-sm-2"><small>NIK Pelaksana</small></th>
                                                    <th class="col-sm-1"><small>#</small></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <small>
                                                            <span>Kreatif Intelegensi Teknologi</span>
                                                        </small>
                                                    </td>
                                                    <td>
                                                        <small>
                                                            <span>Jasa Lain & Jasa Konsultasi & Pengadaan Barang</span>
                                                        </small>
                                                    </td>
                                                    <td>
                                                        <small>
                                                            <span>Menengah</span>
                                                        </small>
                                                    </td>
                                                    <td>
                                                        <small>
                                                            <span>36740711223344</span>
                                                        </small>
                                                    </td>
                                                    <td>
                                                        <div class="text-center">
                                                            <button type="button" class="btn btn-sm btn-danger">
                                                                <i class="fa-solid fa-trash"></i>
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer justify-content-start">
                        <div class="container-fluid">
                            <button type="submit" class="btn btn-success">
                                <i class="fa-solid fa-hard-drive"></i>
                                Simpan Data
                            </button>
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">
                                <i class="fa-solid fa-angles-left"></i>
                                Kembali
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>