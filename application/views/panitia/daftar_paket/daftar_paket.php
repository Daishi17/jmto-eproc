<main class="container-fluid">
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
                <div class="card-header border-dark bg-warning d-flex justify-content-between align-items-center">
                    <div class="flex-grow-1 bd-highlight">
                        <span class="text-dark">
                            <i class="fa-solid fa-table px-1"></i>
                            <small><strong>Data Tabel - Daftar Paket Penyedia</strong></small>
                        </span>
                    </div>
                    <div class="bd-highlight">
                        <button type="button" class="btn btn-primary btn-sm shadow-lg" data-bs-toggle="modal" data-bs-target="#modal-xl-tambah">
                            <i class="fa-solid fa-circle-plus px-1"></i>
                            Tambah Paket Penyedia
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-sm table-striped">
                        <thead class="bg-secondary">
                            <tr>
                                <th style="width:10%;"><small class="text-white">Tahun</small></th>
                                <th style="width:25%;"><small class="text-white">Nama Paket Penyedia</small></th>
                                <th style="width:10%;"><small class="text-white">Departemen</small></th>
                                <th style="width:10%;"><small class="text-white">Jenis Pengadaan</small></th>
                                <th style="width:15%;"><small class="text-white">Metode Pengadaan</small></th>
                                <th style="width:10%;"><small class="text-white">Total HPS (Rp)</small></th>
                                <th style="width:10%;"><small class="text-white">Status</small></th>
                                <th style="width:10%;"><small class="text-white">
                                        <div class="text-center">More Options</div>
                                    </small></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><small>2023</small></td>
                                <td><small>Pengadaan Sewa Keamanan / Securty</small></td>
                                <td><small>Human Capital & General Affair</small></td>
                                <td><small>Jasa Lain</small></td>
                                <td><small>Tender Terbatas</small></td>
                                <td><small>1.300.000.000</small></td>
                                <td><small><span class="badge bg-warning text-dark">Draft Paket</span></small></td>
                                <td>
                                    <div class="text-center">
                                        <button type="button" class="btn btn-info btn-sm shadow-lg" data-bs-toggle="modal" data-bs-target="#modal-xl-detail">
                                            <i class="fa-solid fa-users-viewfinder"></i>
                                            <small>Detail</small>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><small>2023</small></td>
                                <td><small>Pengadaan Sewa Keamanan / Securty</small></td>
                                <td><small>Human Capital & General Affair</small></td>
                                <td><small>Jasa Lain</small></td>
                                <td><small>Tender Umum</small></td>
                                <td><small>1.300.000.000</small></td>
                                <td><small><span class="badge bg-success text-white">Paket Sudah Diumumkan</span></small></td>
                                <td>
                                    <div class="text-center">
                                        <button type="button" class="btn btn-info btn-sm shadow-lg" data-bs-toggle="modal" data-bs-target="#modal-xl-detail">
                                            <i class="fa-solid fa-users-viewfinder"></i>
                                            <small>Detail</small>
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
    <div class="modal fade" id="modal-xl-detail">
        <div class="modal-dialog modal-dialog-scrollable modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <a class="navbar-brand">
                        <img src="<?php echo base_url(); ?>/assets/brand/jm1.png" alt="" width="25" height="25" class="d-inline-block align-text-top">
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
                                            <i class="fa-solid fa-business-time px-1"></i>
                                            <small><strong>Form Data - Daftar Paket Penyedia</strong></small>
                                        </span>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <table class="table table-bordered table-sm shadow-lg">
                                        <tr>
                                            <th class="bg-light">
                                                <small>Kode</small>
                                            </th>
                                            <td>
                                                <i class="fa-solid fa-barcode px-2"></i>
                                                <small>CP.2023.101.0001</small>
                                            </td>
                                            <th class="bg-light">
                                                <small>Tahun</small>
                                            </th>
                                            <td>
                                                <i class="fa-solid fa-calendar-days px-2"></i>
                                                <small>2023</small>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="bg-light">
                                                <small>Departemen</small>
                                            </th>
                                            <td>
                                                <i class="fa-solid fa-building-columns px-2"></i>
                                                <small>Human Capital & General Affair</small>
                                            </td>
                                            <th class="bg-light">
                                                <small>Sections</small>
                                            </th>
                                            <td>
                                                <i class="fa-solid fa-map px-2"></i>
                                                <small>Procurement</small>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="bg-light">
                                                <small>Nama Paket Pengadaan</small>
                                            </th>
                                            <td colspan="3">
                                                <i class="fa-solid fa-gift px-2"></i>
                                                <small>Pengadaan Sewa Keamanan / Securty</small>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="bg-light">
                                                <small>Detail Lokasi / Ruas</small>
                                            </th>
                                            <td colspan="3">
                                                <i class="fa-solid fa-road px-2"></i>
                                                <small>Ruas Toll Jakarta Cikampek KM 17</small>&nbsp;&amp;
                                                <small>Ruas Toll Jakarta Cikampek KM 37</small>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="bg-light">
                                                <small>Waktu Pelaksanaan</small>
                                            </th>
                                            <td>
                                                <i class="fa-regular fa-calendar-days px-2"></i>
                                                <small>31/07/2023</small> - <small>31/07/2024</small>
                                            </td>
                                            <th class="bg-light">
                                                <small>Jangka Waktu</small>
                                            </th>
                                            <td>
                                                <i class="fa-solid fa-clock px-2"></i>
                                                <small>360</small>&nbsp; Hari
                                            </td>
                                        </tr>
                                        <tr>
                                            <th colspan="4">
                                                <div class="card border-dark shadow-lg">
                                                    <div class="card-header border-dark bg-gradient-red d-flex justify-content-between align-items-center">
                                                        <div class="flex-grow-1 bd-highlight text-center">
                                                            <span class="text-dark">
                                                                <i class="fa-solid fa-business-time px-1"></i>
                                                                <small>Deskripsi Jenis & Metode Pengadaan</small>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <table class="table table-bordered table-sm shadow-lg">
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
                                                                        <small>Capex</small>
                                                                    </td>
                                                                    <td>
                                                                        <i class="fa-solid fa-briefcase px-1"></i>
                                                                        <small>Jasa Lain</small>
                                                                    </td>
                                                                    <td>
                                                                        <i class="fa-solid fa-briefcase px-1"></i>
                                                                        <small>Tender Umum</small>
                                                                    </td>
                                                                    <td>
                                                                        <i class="fa-solid fa-bars-progress px-1"></i>
                                                                        <small>Prakualifikasi</small>
                                                                    </td>
                                                                    <td>
                                                                        <i class="fa-solid fa-folder-tree px-1"></i>
                                                                        <small>Satu File</small>
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
                                                <button type="button" class="btn btn-sm btn-primary">
                                                    <i class="fa-solid fa-calendar-days px-1"></i>
                                                    Detail Jadwal Pengadaan
                                                </button>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="bg-light">
                                                <small>Kualifikasi Usaha</small>
                                            </th>
                                            <td>
                                                <i class="fa-solid fa-building-circle-check px-1"></i>
                                                <small>Menengah</small>
                                            </td>
                                            <th class="bg-light">
                                                <small>Jenis Kontrak</small>
                                            </th>
                                            <td>
                                                <i class="fa-solid fa-square-pen px-1"></i>
                                                <small>Lump Sum</small>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th class="bg-light">
                                                <small>Bobot Teknis</small>
                                            </th>
                                            <td>
                                                <i class="fa-solid fa-percent px-1"></i>
                                                <small>60</small>
                                            </td>
                                            <th class="bg-light">
                                                <small>Bobot Biaya</small>
                                            </th>
                                            <td>
                                                <i class="fa-solid fa-percent px-1"></i>
                                                <small>40</small>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th colspan="4">
                                                <div class="card border-dark shadow-lg">
                                                    <div class="card-header border-dark bg-gradient-red d-flex justify-content-between align-items-center">
                                                        <div class="flex-grow-1 bd-highlight text-center">
                                                            <span class="text-dark">
                                                                <i class="fa-regular fa-money-bill-1 px-1"></i>
                                                                <small>Deskripsi Sumber Dana</small>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <table class="table table-bordered table-sm shadow-lg">
                                                            <thead class="bg-secondary text-white">
                                                                <tr>
                                                                    <th><small>Sumber Dana</small></th>
                                                                    <th><small>Total Pagu</small></th>
                                                                    <th><small>Total HPS</small></th>
                                                                    <th><small>Dokumen HPS</small></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <i class="fa-solid fa-building-columns px-1"></i>
                                                                        <small>Human Capital & General Affair</small>
                                                                    </td>
                                                                    <td>
                                                                        <i class="fa-solid fa-money-bills px-1"></i>
                                                                        <small>1.500.000.000</small>
                                                                    </td>
                                                                    <td>
                                                                        <i class="fa-solid fa-money-bill px-1"></i>
                                                                        <small>1.300.000.000</small>
                                                                    </td>
                                                                    <td>
                                                                        <button type="button" class="btn btn-sm btn-primary">
                                                                            <i class="fa-solid fa-file px-1"></i>
                                                                            Dokumen HPS
                                                                        </button>
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
                                                    <div class="card-header border-dark bg-gradient-red d-flex justify-content-between align-items-center">
                                                        <div class="flex-grow-1 bd-highlight text-center">
                                                            <span class="text-dark">
                                                                <i class="fa-solid fa-users px-1"></i>
                                                                <small>Deskripsi Panitia Pelaksana</small>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="card-body">
                                                        <table class="table table-bordered table-sm shadow-lg">
                                                            <thead class="bg-secondary text-white">
                                                                <tr>
                                                                    <th><small>Nama Panitia</small></th>
                                                                    <th><small>Jabatan Panitia</small></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <small>001 || 1001 || Angga Pramuja S</small>
                                                                    </td>
                                                                    <td>
                                                                        <small>Ketua Panitia</small>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <small>002 || 1002 || Danang Prasetyo</small>
                                                                    </td>
                                                                    <td>
                                                                        <small>Sekretaris</small>
                                                                    </td>
                                                                </tr>
                                                                <tr>
                                                                    <td>
                                                                        <small>003 || 1003 || Shadi Noris</small>
                                                                    </td>
                                                                    <td>
                                                                        <small>Anggota</small>
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
                                                <small>Status Publikasi Paket</small>
                                            </th>
                                            <td colspan="3"><small><span class="badge bg-warning text-dark">Draft Paket</span></small></td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="card-footer bg-transparent border-dark">
                                    <button type="button" class="btn btn-default btn-info">
                                        <i class="fa-solid fa-bullhorn"></i>
                                        Umumkan Paket
                                    </button>
                                    <a type="button" class="btn btn-default btn-warning" href="<?= base_url() ?>panitia/form_daftar_paket">
                                        <i class="fa-solid fa-pen-to-square"></i>
                                        Edit Paket
                                    </a>
                                    <button type="button" class="btn btn-default btn-danger" data-bs-dismiss="modal">
                                        <i class="fa-solid fa-rectangle-xmark"></i>
                                        Keluar
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" tabindex="-1" id="modal-xl-tambah">
        <div class="modal-dialog modal-dialog-scrollable modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <a class="navbar-brand">
                        <img src="<?php echo base_url(); ?>/assets/brand/jm1.png" alt="" width="25" height="25" class="d-inline-block align-text-top">
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
                                            <small><strong>Form Data - Daftar Paket Penyedia</strong></small>
                                        </span>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="col-md-12">
                                        <div class="card border-primary shadow-lg">
                                            <div class="card-header border-primary"><small class="text-primary"><b><i class="fa-solid fa-money-check-dollar px-1"></i>Daftar Paket Tender / Pengadaan Yang Sudah Finalisasi</b></small></div>
                                            <div class="card-body">
                                                <form>
                                                    <div class="row g-1">
                                                        <div class="col-sm-2">
                                                            <div class="input-group mb-1">
                                                                <span class="input-group-text"><i class="fa-solid fa-calendar-days"></i></span>
                                                                <select class="form-select" aria-label="Default select example" placeholder="Pilih Tahun..">
                                                                    <option selected>Pilih Tahun</option>
                                                                    <option value="0">All</option>
                                                                    <option value="1">2023</option>
                                                                    <option value="2">2024</option>
                                                                    <option value="3">2025</option>
                                                                    <option value="4">2026</option>
                                                                    <option value="5">2027</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-5">
                                                            <div class="input-group mb-2">
                                                                <span class="input-group-text"><i class="fa-solid fa-building-columns"></i></span>
                                                                <select class="form-select" aria-label="Default select example">
                                                                    <option selected>Pilih Jenis Pengadaan</option>
                                                                    <option value="0">All</option>
                                                                    <option value="1">Jasa Lain</option>
                                                                    <option value="2">Jasa Konsultasi</option>
                                                                    <option value="3">Jasa Pemborongan / Konstruksi</option>
                                                                    <option value="4">Pengadaan Barang</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-sm-5">
                                                            <div class="input-group mb-2">
                                                                <span class="input-group-text"><i class="fa-solid fa-map"></i></span>
                                                                <select class="form-select" aria-label="Default select example">
                                                                    <option selected>Pilih Metode Pengadaan</option>
                                                                    <option value="0">All</option>
                                                                    <option value="1">Tender Umum</option>
                                                                    <option value="2">Seleksi Umum</option>
                                                                    <option value="3">Penunjukan Langsung</option>
                                                                    <option value="4">Tender Terbatas</option>
                                                                    <option value="5">Seleksi Terbatas</option>
                                                                    <option value="6">Pengadaan Langsung</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-4">
                                                        <button type="button" class="btn btn-sm btn-secondary">
                                                            <i class="fa-solid fa-filter px-1"></i>
                                                            Filter Data
                                                        </button>
                                                    </div>
                                                    <hr>
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <table id="tbl_rup_finalisasi" class="table table-bordered table-sm table-striped">
                                                                <thead class="bg-secondary">
                                                                    <tr>
                                                                        <th style="width:8%;"><small class="text-white">Tahun</small></th>
                                                                        <th style="width:17%;"><small class="text-white">Nama Paket</small></th>
                                                                        <th style="width:12%;"><small class="text-white">Departemen</small></th>
                                                                        <th style="width:17%;"><small class="text-white">Total Pagu (Rp)</small></th>
                                                                        <th style="width:15%;"><small class="text-white">Jenis Pengadaan</small></th>
                                                                        <th style="width:13%;"><small class="text-white">Metode Pengadaan</small></th>
                                                                        <th style="width:18%;"><small class="text-white">
                                                                                <div class="text-center">Options</div>
                                                                            </small></th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>

                                                            </table>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-start">
                    <button type="button" class="btn btn-default btn-danger" data-bs-dismiss="modal">
                        <i class="fa-solid fa-rectangle-xmark"></i>
                        Keluar
                    </button>
                </div>
            </div>
        </div>
    </div>
</main>