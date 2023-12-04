<!DOCTYPE html>
<html lang="en">

<head>
    <title>EPROC - JMTM | PAKET</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="Shortcut Icon" href="https://eproc.jmtm.co.id/assets/img/unnamed.png" type="image/x-icon" sizes="96x96" />
    <link rel="stylesheet" href="https://eproc.jmtm.co.id/assets/boostrapnew/dist/css/bootstrap.min.css" type="text/css" media="screen" />
    <!-- dataTables -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://eproc.jmtm.co.id/assets/fontawesome/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- select2 -->
    <link rel="stylesheet" href="https://eproc.jmtm.co.id/assets/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="https://eproc.jmtm.co.id/assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
    <!-- custom -->
    <link rel="stylesheet" href="https://eproc.jmtm.co.id/assets/kintek.css" type="text/css" media="screen">
    <!-- Sweetalert-->
    <link href="https://eproc.jmtm.co.id/assets/sweetalert2/sweetalert2.min.css" rel="stylesheet">
    <link href="https://eproc.jmtm.co.id/assets/datetimepicekernew/plugins/jquery.datetimepicker.min.css" rel="stylesheet">
    <script type="text/javascript" src="https://gc.kis.v2.scr.kaspersky-labs.com/FD126C42-EBFA-4E12-B309-BB3FDD723AC1/main.js?attr=3T0lpr9OsCLLbWHetmU7S8hujyjIiDyCvAVtB7Y6Y2IregTYCK-CwC_EJNcsLntW_WpypCpuw1qKMgMj1gtFasNOI1U91CpiKM3919n5vrM" charset="UTF-8"></script>
    <script src="https://eproc.jmtm.co.id/assets/js/sweetalert.min.js"></script>

    <script type="text/javascript" src="https://eproc.jmtm.co.id/assets/boostrapnew/dist/js/jquery.min.js"></script>
    <style>
        .preloader {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background-color: #fff;
        }

        .preloader .loading {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            font: 14px arial;
        }
    </style>
</head>

<body style="font-size: 13px;" oncontextmenu="return false;">
    <div class="container-fluid">
        <img class="pull-right" alt="LPSE" src="https://eproc.jmtm.co.id/assets/img/jmtm2.png" width="15%" />
        <img class="pull-left" alt="LPSE" src="https://eproc.jmtm.co.id/assets/img/bumn.png" width="15%" style="margin-left: 69%;" />
    </div>
    <!-- end header -->

    <!-- start navbar -->

    <div style="background-color:yellow;height:5px">
    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" style=" background-image: linear-gradient(to top, rgb(252, 252, 252), rgb(75, 136, 250)) !important;">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container-fluid" style="font-size:medium">
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup" style="margin-bottom: 10px;">
                <ul class="navbar-nav">
                    <li style="font-size: 11px;font-weight:bold;"><a class="nav-link" href="https://eproc.jmtm.co.id/beranda"><i class="fas fa-home"></i> BERANDA</a></li>
                    <li style="font-size: 11px;font-weight:bold;"><a class="nav-link" href="https://eproc.jmtm.co.id/paket"><i class="fas fa-cubes"></i> PAKET</a></li>
                    <!-- <li style="font-size: 11px;font-weight:bold;"><a class="nav-link" href="https://eproc.jmtm.co.id/panitia"><i class="fas fa fa-users"></i> PANITIA PEMILHAN</a></li> -->
                    <li style="font-size: 11px;font-weight:bold;"><a class="nav-link" href="https://eproc.jmtm.co.id/beranda/penilaian_kinerja"><i class="fas fa-chart-line"></i> PENILAIAN KINERJA</a></li>
                    <li style="font-size: 11px;font-weight:bold;"><a class="nav-link" href="https://eproc.jmtm.co.id/beranda/progres_kinerja_vendor"><i class="far fa-chart-bar"></i> PROGRES KINERJA</a></li>
                    <li style="font-size: 11px;font-weight:bold;"><a class="nav-link" href="https://eproc.jmtm.co.id/index.php/vendor_agency"><i class="fas fa-chalkboard-teacher"></i> VENDOR</a></li>
                    <li style="font-size: 11px;font-weight:bold;"><a class="nav-link" href="https://eproc.jmtm.co.id/panitiajmtm/logakses"><i class="fas fa-user-lock"></i> LOG AKSES</a></li>
                    <li style="font-size: 11px;font-weight:bold;"><a class="nav-link" href="https://eproc.jmtm.co.id/gantipassword"><i class="fas fa-lock"></i> GANTI PASSWORD</a></li>
                    <li style="font-size: 11px;font-weight:bold;"><a class="nav-link" href="https://eproc.jmtm.co.id/upload_kontrak"><i class="fas fa-file"></i> UPLOAD KONTRAK</a></li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li>
                        <a href="https://eproc.jmtm.co.id/auth/logout" role="button" aria-haspopup="true" aria-expanded="false" class="nav-item btn btn-danger ml-auto" style="font-size: 14px;font-weight:bold;">LOGOUT</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div style="background-color: yellow;">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 mb-1">
                    <a href="https://eproc.jmtm.co.id/assets/User_AGENCY.pdf" target="_blank">
                        <span class="badge badge-primary">Petunjuk Penggunaan</span></a>
                    <a href=""> <span class="badge badge-primary">Aplikasi e-Procurement Lainnya</span></a>
                    <label> 04 December 2023 ||</label>
                    <label id="jam2"></label>
                    <label id="jam3"></label>
                    <label for="">WIB</label>

                </div>
                <div class="col" style="color: black;">

                    agency_developer - Procurement </div>

            </div>
        </div>
    </div>
    <style>
        #kirim_ke_vendor {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 9999;
            background-color: #fff;
        }

        #kirim_ke_vendor #dikirim_ke_vendor {
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            font: 14px arial;
        }
    </style>
    <div id="kirim_ke_vendor" style="display: none;">
        <div id="dikirim_ke_vendor">
            <img src="https://eproc.jmtm.co.id/assets/img/info_penyedia.gif" width="100%">
        </div>
    </div>
    <div class="preloader">
        <div class="loading">
            <img src="https://eproc.jmtm.co.id/assets/img/palsewait.gif" width="100%">
        </div>
    </div>
    <form id="form_update_tanggal_kontrak">
        <input type="hidden" name="tanggal_nomor_kontak">
    </form>
    <form id="form_update_nomor_kontrak">
        <input type="hidden" name="nomor_kontrak">
    </form>
    <form id="form_update_jangka_mulai">
        <input type="hidden" name="jangka_mulai">
    </form>
    <form id="form_update_jangka_selesai">
        <input type="hidden" name="jangka_selesai">
    </form>
    <div class="container">
        <br>
        <div class="card" style="box-shadow: 2px 2px 10px 2px black;">
            <div class="card-header btn-grad">
                <i class="fas fa-chart-line"></i> Form Penilaian Kinerja Vendor
            </div>
            <input type="hidden" name="id_paket" id="id_paket" value="1443">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <div class="card" style="box-shadow: 2px 2px 10px 2px black;">
                            <div class="card-header btn-grad">
                                <i class="fas fa-chart-line"></i> Jenis Penilaian
                            </div>
                            <div class="card-body">
                                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                    <a class="nav-link" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Kinerja Pekerjaan Konstruksi</a>
                                    <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Kinerja Konsultan Perencana Konstruksi</a>
                                    <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Kinerja Konsultan Kajian/Studi/Sistem Informatika</a>
                                    <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Kinerja Konsultan Pengawas Konstruksi</a>
                                    <a class="nav-link" id="v-pills-jasa_lainya-tab" data-toggle="pill" href="#v-pills-jasa_lainya" role="tab" aria-controls="v-pills-jasa_lainya" aria-selected="false">Kinerja Jasa Lainya</a>
                                    <a class="nav-link" id="v-pills-penyedia_barang-tab" data-toggle="pill" href="#v-pills-penyedia_barang" role="tab" aria-controls="v-pills-penyedia_barang" aria-selected="false">Kinerja Penyedia Barang</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="tab-content" id="v-pills-tabContent">
                            <!-- INI PEKERJAAN KONTRUKSI -->
                            <div class="tab-pane fade" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                                <div class="card" style="box-shadow: 2px 2px 10px 2px black;">
                                    <div class="card-header btn-grad">
                                        <i class="fas fa-chart-line"></i> Penilaian Kinerja Pekerjaan Konstruksi
                                    </div>
                                    <div class="card-body">
                                        <div style="overflow-x: auto;">
                                            <table class="table" style="font-size: 12px;">
                                                <tr>
                                                    <th>Kode Tender</th>
                                                    <th>: B.02.004.00021.00001.JMTM.071120230003</th>
                                                </tr>
                                                <tr>
                                                    <th>Nama Paket</th>
                                                    <th>: Jasa Pemborongan Pekerjaan Stabilitas Lereng Km 346+100 s.d KM 346+300 A Pada Ruas Jalan Tol Batang-Semarang Tahun 2023</th>
                                                </tr>
                                                <tr>
                                                    <th>Divisi</th>
                                                    <th>: Area Control 4</th>
                                                </tr>
                                                <tr>
                                                    <th>Nama Vendor</th>
                                                    <th>: BANGUN SEJAHTERA, CV</th>
                                                </tr>
                                                <tr>
                                                    <th>Alamat Perusahaan</th>
                                                    <th>: Jl. Sembungan Utara No.266 Ungaran</th>
                                                </tr>
                                                <tr>
                                                    <th>Lokasi Pekerjaan 1</th>
                                                    <th>: Provinsi : JAWA TENGAH <br> : Kabupaten : KABUPATEN BATANG <br> : Alamat : Lereng Km 346+100 s.d KM 346+300 A Pada Ruas Jalan Tol Batang-Semarang </th>
                                                </tr>
                                                <tr>
                                                    <th>Nilai Kontrak</th>
                                                    <th>:
                                                        Rp 1.808.137.830,00 </th>
                                                </tr>
                                                <tr>
                                                    <th>Nomor Kontrak</th>
                                                    <th>&nbsp;
                                                        <div class="row">
                                                            <input style="width: 200px;height:30px" type="text" name="nomor_kontrak1" value="" id="nomor_kontrak1" placeholder="Nomor Kontrak..." class="form-control form-control-sm ml-2"><input style="width: 200px;height:30px" type="text" name="tanggal_nomor_kontak1" value="" id="tanggal_nomor_kontak1" placeholder="Tanggal" class="form-control form-control-sm ml-1">
                                                        </div>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th>Jangka Waktu Pelaksanaan</th>
                                                    <th>
                                                        <div class="row">
                                                            <input style="width: 200px;height:30px" type="text" name="jangka_mulai1" placeholder="Tanggal Mulai" value="" id="jangka_mulai1" class="form-control form-control-sm ml-2 mr-1"><label for="" class="text-small mt-1">S/D</label> <input style="width: 200px;height:30px" type="text" value="" name="jangka_selesai1" id="jangka_selesai1" placeholder="Tanggal Selesai" class="form-control form-control-sm ml-1">
                                                        </div>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th>Metode Pemilihan</th>
                                                    <th>: TENDER TERBATAS</th>
                                                </tr>
                                            </table><br>
                                            <div class="alert alert-success" role="alert">
                                                <img src="https://eproc.jmtm.co.id/assets/img/aman2.png" width="70px" alt="">
                                                <label for="">Vendor Ini Aman / Tiadak Memiliki Warning !!!</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="card" style="box-shadow: 2px 2px 10px 2px black;">
                                    <div class="card-header btn-grad">
                                        <i class="fas fa-chart-line"></i> Table Penilaian Kinerja Pekerjaan Konstruksi
                                    </div>
                                    <div class="card-body">
                                        <div style="overflow-x: auto;">
                                            <form action="" id="form_tambah_pekerjaan_kontruksi">
                                                <input type="hidden" name="id_paket" value="1443">
                                                <input type="hidden" name="id_vendor" value="896">
                                                <table id="nilai_tbl" class="table table-bordered">
                                                    <tr class="btn-grad">
                                                        <th>No</th>
                                                        <th>Aspek Kerja</th>
                                                        <th>Indikator</th>
                                                        <th>Bobot(%)</th>
                                                        <th>Penilaian</th>
                                                        <th>Nilai Akhir</th>
                                                    </tr>
                                                    <tr>

                                                        <td rowspan="3">1</td>
                                                        <td rowspan="3">Administrasi
                                                            (20%)</td>
                                                        <!-- ketika update  -->
                                                        <td>
                                                            Ketaatan dan kelengkapan dalam memenuhi Administrasi Pekerjaan sesuai Kontrak (Time Schedule, Shop Drawing, Asbuilt Drawing, LaporanLaporan, Buku Tamu, Buku Direksi, Buku Bahan, Buku,Tenaga,Perizinan,dll). <textarea id="indikator_pekerjaan_kontruksi1" hidden name="indikator_pekerjaan_kontruksi[]">Ketaatan dan kelengkapan dalam memenuhi Administrasi Pekerjaan sesuai Kontrak (Time Schedule, Shop Drawing, Asbuilt Drawing, LaporanLaporan, Buku Tamu, Buku Direksi, Buku Bahan, Buku,Tenaga,Perizinan,dll).</textarea>
                                                        </td>
                                                        <td>10
                                                            <input type="hidden" id="bobot_pekerjaan_kontruksi1" name="bobot_pekerjaan_kontruksi[]" value="10">
                                                        </td>
                                                        <td>
                                                            <input type="text" id="penilaian_kontruksi1" name="penilaian_kontruksi[]" class="form-control form-control-sm" style="width: 60px;">
                                                        </td>
                                                        <td><input type="text" name="nilai_akhir_pekerjaan_kontruksi[]" id="nilai_akhir_pekerjaan_kontruksi_aspek1" class="form-control form-control-sm" readonly style="width: 60px;"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Ketaatan dalam penyelesaian Administrasi Keuangan (termin, pajak, jaminan, retribusi, dll). <textarea id="indikator_pekerjaan_kontruksi2" name="indikator_pekerjaan_kontruksi[]" hidden>Ketaatan dalam penyelesaian Administrasi Keuangan (termin, pajak, jaminan, retribusi, dll).                                                                                    </textarea>
                                                        </td>
                                                        <td>5
                                                            <input type="hidden" id="bobot_pekerjaan_kontruksi2" name="bobot_pekerjaan_kontruksi[]" value="5">
                                                        </td>
                                                        <td>
                                                            <input type="text" id="penilaian_kontruksi2" name="penilaian_kontruksi[]" class="form-control form-control-sm" style="width: 60px;">
                                                        </td>
                                                        <td><input type="text" name="nilai_akhir_pekerjaan_kontruksi[]" id="nilai_akhir_pekerjaan_kontruksi_aspek2" class="form-control form-control-sm" readonly style="width: 60px;"></td>


                                                    </tr>
                                                    <tr>
                                                        <td>Kelengkapan Kantor Administrasi: Gudang, Kantor Direksi, Papan Nama, dll. <textarea hidden id="indikator_pekerjaan_kontruksi3" name="indikator_pekerjaan_kontruksi[]">Kelengkapan Kantor Administrasi: Gudang, Kantor Direksi, Papan Nama, dll.	</textarea>
                                                        </td>
                                                        <td>5
                                                            <input type="hidden" id="bobot_pekerjaan_kontruksi3" name="bobot_pekerjaan_kontruksi[]" value="5">
                                                        </td>
                                                        <td>
                                                            <input type="text" id="penilaian_kontruksi3" name="penilaian_kontruksi[]" class="form-control form-control-sm" style="width: 60px;">
                                                        </td>
                                                        <td><input type=" text" name="nilai_akhir_pekerjaan_kontruksi[]" id="nilai_akhir_pekerjaan_kontruksi_aspek3" class="form-control form-control-sm" readonly style="width: 60px;">
                                                        </td>
                                                    </tr>
                                                    <!-- Kedua -->
                                                    <tr>

                                                        <td rowspan="2">2</td>
                                                        <td rowspan="2">Jadwal Dan
                                                            Waktu (10%)</td>


                                                        <td>Pelaksanaan Pekerjaan sesuai Jangka Waktu pelaksanaan yang ditetapkan dalam Kontrak. <textarea hidden id="indikator_pekerjaan_kontruksi4" name="indikator_pekerjaan_kontruksi[]">Pelaksanaan Pekerjaan sesuai Jangka Waktu pelaksanaan yang ditetapkan dalam Kontrak.</textarea>
                                                        </td>
                                                        <td>5
                                                            <input type="hidden" id="bobot_pekerjaan_kontruksi4" name="bobot_pekerjaan_kontruksi[]" value="5">
                                                        </td>
                                                        <td>
                                                            <input type="text" id="penilaian_kontruksi4" name="penilaian_kontruksi[]" class="form-control form-control-sm" style="width: 60px;">
                                                        </td>
                                                        <td><input type=" text" name="nilai_akhir_pekerjaan_kontruksi[]" id="nilai_akhir_pekerjaan_kontruksi_aspek4" class="form-control form-control-sm" readonly style="width: 60px;">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Progress/Prestasi Pekerjaan sesuai Jadwal dan Tidak ada keterlambatan. <textarea hidden id="indikator_pekerjaan_kontruksi5" name="indikator_pekerjaan_kontruksi[]">Progress/Prestasi Pekerjaan sesuai Jadwal dan Tidak ada keterlambatan.</textarea>
                                                        </td>
                                                        <td>5
                                                            <input type="hidden" id="bobot_pekerjaan_kontruksi5" name="bobot_pekerjaan_kontruksi[]" value="5">
                                                        </td>
                                                        <td>

                                                            <input type="text" id="penilaian_kontruksi5" name="penilaian_kontruksi[]" class="form-control form-control-sm" style="width: 60px;">
                                                        </td>
                                                        <td><input type="text" name="nilai_akhir_pekerjaan_kontruksi[]" id="nilai_akhir_pekerjaan_kontruksi_aspek5" class="form-control form-control-sm" readonly style="width: 60px;"></td>

                                                    </tr>
                                                    <!-- Ketiga -->
                                                    <tr>

                                                        <td rowspan="3">3</td>
                                                        <td rowspan="3">Kualitas Dan Kuantitas
                                                            (25%)
                                                        </td>
                                                        <td>Uji Fungsi/Test Laboratorium,/Uji Teknis/Kesesuaian Teknis dilaksanakan sesuai Kontrak. <textarea hidden id="indikator_pekerjaan_kontruksi6" name="indikator_pekerjaan_kontruksi[]">Uji Fungsi/Test Laboratorium,/Uji Teknis/Kesesuaian Teknis dilaksanakan sesuai Kontrak.</textarea>
                                                        </td>
                                                        <td>5
                                                            <input type="hidden" id="bobot_pekerjaan_kontruksi6" name="bobot_pekerjaan_kontruksi[]" value="5">
                                                        </td>
                                                        <td>
                                                            <input type="text" id="penilaian_kontruksi6" name="penilaian_kontruksi[]" class="form-control form-control-sm" style="width: 60px;">
                                                        </td>
                                                        <td><input type="text" name="nilai_akhir_pekerjaan_kontruksi[]" id="nilai_akhir_pekerjaan_kontruksi_aspek6" class="form-control form-control-sm" readonly style="width: 60px;"></td>

                                                    </tr>
                                                    <tr>

                                                        <td>Kualitas Pekerjaan sesuai dengan Spesifikasi Teknis. <textarea hidden id="indikator_pekerjaan_kontruksi7" name="indikator_pekerjaan_kontruksi[]">Kualitas Pekerjaan sesuai dengan Spesifikasi Teknis.</textarea>
                                                        </td>
                                                        <td>10
                                                            <input type="hidden" id="bobot_pekerjaan_kontruksi7" name="bobot_pekerjaan_kontruksi[]" value="10">
                                                        </td>
                                                        <td>
                                                            <input type="text" id="penilaian_kontruksi7" name="penilaian_kontruksi[]" class="form-control form-control-sm" style="width: 60px;">
                                                        </td>
                                                        <td><input type="text" name="nilai_akhir_pekerjaan_kontruksi[]" id="nilai_akhir_pekerjaan_kontruksi_aspek7" class="form-control form-control-sm" readonly style="width: 60px;"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Kuantitas Pekerjaan sesuai dengan Daftar Kuantitas dan Harga. <textarea hidden id="indikator_pekerjaan_kontruksi8" name="indikator_pekerjaan_kontruksi[]">Kuantitas Pekerjaan sesuai dengan Daftar Kuantitas dan Harga.</textarea>
                                                        </td>
                                                        <td>10
                                                            <input type="hidden" id="bobot_pekerjaan_kontruksi8" name="bobot_pekerjaan_kontruksi[]" value="10">
                                                        </td>
                                                        <td>
                                                            <input type="text" id="penilaian_kontruksi8" name="penilaian_kontruksi[]" class="form-control form-control-sm" style="width: 60px;">
                                                        </td>
                                                        <td><input type="text" name="nilai_akhir_pekerjaan_kontruksi[]" id="nilai_akhir_pekerjaan_kontruksi_aspek8" class="form-control form-control-sm" readonly style="width: 60px;"></td>
                                                    </tr>
                                                    <!-- Ke empat -->
                                                    <tr>

                                                        <td rowspan="2">4</td>
                                                        <td rowspan="2">Material
                                                            (10%)
                                                        </td>
                                                        <td>Ketersediaan Bahan selama Pelaksanaan Pekerjaan terpenuhi. <textarea hidden id="indikator_pekerjaan_kontruksi9" name="indikator_pekerjaan_kontruksi[]">Ketersediaan Bahan selama Pelaksanaan Pekerjaan terpenuhi.</textarea>
                                                        </td>
                                                        <td>5
                                                            <input type="hidden" id="bobot_pekerjaan_kontruksi9" name="bobot_pekerjaan_kontruksi[]" value="5">
                                                        </td>
                                                        <td>
                                                            <input type="text" id="penilaian_kontruksi9" name="penilaian_kontruksi[]" class="form-control form-control-sm" style="width: 60px;">
                                                        </td>
                                                        <td><input type="text" name="nilai_akhir_pekerjaan_kontruksi[]" id="nilai_akhir_pekerjaan_kontruksi_aspek9" class="form-control form-control-sm" readonly style="width: 60px;"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Bahan yang digunakan sesuai dengan Spesifikasi Teknis. <textarea hidden id="indikator_pekerjaan_kontruksi10" name="indikator_pekerjaan_kontruksi[]">Bahan yang digunakan sesuai dengan Spesifikasi Teknis.</textarea>
                                                        </td>
                                                        <td>5
                                                            <input type="hidden" id="bobot_pekerjaan_kontruksi10" name="bobot_pekerjaan_kontruksi[]" value="5">
                                                        </td>
                                                        <td>
                                                            <input type="text" id="penilaian_kontruksi10" name="penilaian_kontruksi[]" class="form-control form-control-sm" style="width: 60px;">
                                                        </td>
                                                        <td><input type="text" name="nilai_akhir_pekerjaan_kontruksi[]" id="nilai_akhir_pekerjaan_kontruksi_aspek10" class="form-control form-control-sm" readonly style="width: 60px;"></td>
                                                    </tr>

                                                    <!-- Ke lima -->
                                                    <tr>

                                                        <td rowspan="3">5</td>
                                                        <td rowspan="3">Tenaga Kerja dan Peralatan (15%)
                                                        </td>
                                                        <td>Jumlah Tenaga kerja dan peralatan selama Waktu Pelaksanaan pekerjaan terpenuhi. <textarea hidden id="indikator_pekerjaan_kontruksi11" name="indikator_pekerjaan_kontruksi[]">Jumlah Tenaga kerja dan peralatan selama Waktu Pelaksanaan pekerjaan terpenuhi.	</textarea>
                                                        </td>
                                                        <td>5
                                                            <input type="hidden" id="bobot_pekerjaan_kontruksi11" name="bobot_pekerjaan_kontruksi[]" value="5">
                                                        </td>
                                                        <td>
                                                            <input type="text" id="penilaian_kontruksi11" name="penilaian_kontruksi[]" class="form-control form-control-sm" style="width: 60px;">
                                                        </td>
                                                        <td><input type="text" name="nilai_akhir_pekerjaan_kontruksi[]" id="nilai_akhir_pekerjaan_kontruksi_aspek11" class="form-control form-control-sm" readonly style="width: 60px;"></td>

                                                    </tr>
                                                    <tr>
                                                        <td>Kemampuan/Keahlian tenaga kerja sesuai ketentuan Kontrak. <textarea hidden id="indikator_pekerjaan_kontruksi12" name="indikator_pekerjaan_kontruksi[]">Kemampuan/Keahlian tenaga kerja sesuai ketentuan Kontrak.</textarea>
                                                        </td>
                                                        <td>5
                                                            <input type="hidden" id="bobot_pekerjaan_kontruksi12" name="bobot_pekerjaan_kontruksi[]" value="5">
                                                        </td>
                                                        <td>
                                                            <input type="text" id="penilaian_kontruksi12" name="penilaian_kontruksi[]" class="form-control form-control-sm" style="width: 60px;">
                                                        </td>
                                                        <td><input type="text" name="nilai_akhir_pekerjaan_kontruksi[]" id="nilai_akhir_pekerjaan_kontruksi_aspek12" class="form-control form-control-sm" readonly style="width: 60px;"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Kapasitas dan Jenis Peralatan sesuai ketentuan Kontrak. <textarea hidden id="indikator_pekerjaan_kontruksi13" name="indikator_pekerjaan_kontruksi[]">Kapasitas dan Jenis Peralatan sesuai ketentuan Kontrak.</textarea>
                                                        </td>
                                                        <td>5
                                                            <input type="hidden" id="bobot_pekerjaan_kontruksi13" name="bobot_pekerjaan_kontruksi[]" value="5">
                                                        </td>
                                                        <td>
                                                            <input type="text" id="penilaian_kontruksi13" name="penilaian_kontruksi[]" class="form-control form-control-sm" style="width: 60px;">
                                                        </td>
                                                        <td><input type="text" name="nilai_akhir_pekerjaan_kontruksi[]" id="nilai_akhir_pekerjaan_kontruksi_aspek13" class="form-control form-control-sm" readonly style="width: 60px;"></td>
                                                    </tr>

                                                    <!-- Ke enam -->
                                                    <tr>

                                                        <td rowspan="2">4</td>
                                                        <td rowspan="2">Keselamatan dan Kesehatan Kerja (10%)
                                                        </td>
                                                        <td>Kelengkapan K3 selama Pelaksanaan Pekerjaan terpenuhi: Peralatan, Bahan, Pakaian, Sepatu, Helm, Rambu-rambu, Alat Pengaman, dan Catatan kejadian. <textarea hidden id="indikator_pekerjaan_kontruksi14" name="indikator_pekerjaan_kontruksi[]">Kelengkapan K3 selama Pelaksanaan Pekerjaan terpenuhi: Peralatan, Bahan, Pakaian, Sepatu, Helm, Rambu-rambu, Alat Pengaman, dan Catatan kejadian.</textarea>
                                                        </td>
                                                        <td>5
                                                            <input type="hidden" id="bobot_pekerjaan_kontruksi14" name="bobot_pekerjaan_kontruksi[]" value="5">
                                                        </td>
                                                        <td>
                                                            <input type="text" id="penilaian_kontruksi14" name="penilaian_kontruksi[]" class="form-control form-control-sm" style="width: 60px;">
                                                        </td>
                                                        <td><input type="text" name="nilai_akhir_pekerjaan_kontruksi[]" id="nilai_akhir_pekerjaan_kontruksi_aspek14" class="form-control form-control-sm" readonly style="width: 60px;"></td>
                                                    </tr>
                                                    <tr>

                                                        <td>Perlindungan tenaga kerja dipenuhi (BPJS, asuransi, dll). <textarea hidden id="indikator_pekerjaan_kontruksi15" name="indikator_pekerjaan_kontruksi[]">Perlindungan tenaga kerja dipenuhi (BPJS, asuransi, dll).</textarea>
                                                        </td>
                                                        <td>5
                                                            <input type="hidden" id="bobot_pekerjaan_kontruksi15" name="bobot_pekerjaan_kontruksi[]" value="5">
                                                        </td>
                                                        <td>
                                                            <input type="text" id="penilaian_kontruksi15" name="penilaian_kontruksi[]" class="form-control form-control-sm" style="width: 60px;">
                                                        </td>
                                                        <td><input type="text" name="nilai_akhir_pekerjaan_kontruksi[]" id="nilai_akhir_pekerjaan_kontruksi_aspek15" class="form-control form-control-sm" readonly style="width: 60px;"></td>

                                                    </tr>


                                                    <!-- Ke tuju -->
                                                    <tr>

                                                        <td rowspan="2">7</td>
                                                        <td rowspan="2">Lingkungan
                                                            (10%)
                                                        </td>
                                                        <td>Adanya Sosialisasi/Pem beritahuan ke lingkungan sekitar pekerjaan. <textarea hidden id="indikator_pekerjaan_kontruksi16" name="indikator_pekerjaan_kontruksi[]">Adanya Sosialisasi/Pem beritahuan ke lingkungan sekitar pekerjaan.</textarea>
                                                        </td>
                                                        <td>5
                                                            <input type="hidden" id="bobot_pekerjaan_kontruksi16" name="bobot_pekerjaan_kontruksi[]" value="5">
                                                        </td>
                                                        <td>
                                                            <input type="text" id="penilaian_kontruksi16" name="penilaian_kontruksi[]" class="form-control form-control-sm" style="width: 60px;">
                                                        </td>
                                                        <td><input type="text" name="nilai_akhir_pekerjaan_kontruksi[]" id="nilai_akhir_pekerjaan_kontruksi_aspek16" class="form-control form-control-sm" readonly style="width: 60px;"></td>
                                                    </tr>
                                                    <tr>

                                                        <td>Tidak ada Komplain/Permasalahan dengan Lingkungan sekitar. <textarea hidden id="indikator_pekerjaan_kontruksi17" name="indikator_pekerjaan_kontruksi[]">Tidak ada Komplain/Permasalahan dengan Lingkungan sekitar.</textarea>
                                                        </td>
                                                        <td>5
                                                            <input type="hidden" id="bobot_pekerjaan_kontruksi17" name="bobot_pekerjaan_kontruksi[]" value="5">
                                                        </td>
                                                        <td>
                                                            <input type="text" id="penilaian_kontruksi17" name="penilaian_kontruksi[]" class="form-control form-control-sm" style="width: 60px;">
                                                        </td>
                                                        <td><input type="text" name="nilai_akhir_pekerjaan_kontruksi[]" id="nilai_akhir_pekerjaan_kontruksi_aspek17" class="form-control form-control-sm" readonly style="width: 60px;"></td>
                                                    </tr>
                                                    <input type="hidden" name="rating_penilaian_vendor_pekerjaan_kontruksi">
                                                    <input type="hidden" name="status_rating_pekerjaan_kontruksi">
                                                    <input type="hidden" name="status_nilai_akhir_pekerjaan_kontruksi">
                                                    <tfoot>
                                                        <tr class="text-center">
                                                            <td></td>
                                                            <td><b> RATING </b></td>
                                                            <td>
                                                                <div id="status_pekerjaan_kontruksi">

                                                                </div>
                                                            </td>
                                                            <td colspan="3">
                                                                <div id="bintang_pekerjaan_kontruksi"></div>
                                                            </td>
                                                        </tr>
                                                    </tfoot>
                                                    <tfoot>
                                                        <tr class="text-center">
                                                            <td></td>
                                                            <td colspan="2"><b> TOTAL NILAI AKHIR </b></td>
                                                            <td><b>100</b></td>
                                                            <td></td>
                                                            <td><input type="number" style="width: 80px;" class="form-control form-control-sm" readonly id="total_nilai_pekerjaan_kontruksi"></td>
                                                        </tr>
                                                    </tfoot>

                                                    <br>
                                                </table>
                                            </form>
                                        </div><br>
                                        <center>
                                            <div class="row">
                                                <div class="col">
                                                    <a class="btn btn-grad7 text-white btn-sm btn-block" style="box-shadow: 2px 2px 8px 2px black;" href="https://eproc.jmtm.co.id/beranda/penilaian_kinerja"><i class="fas fa fa-arrow-left"></i> Kembali</a>
                                                </div>
                                                <div class="col">
                                                    <div id="save_button" style="display: none;"> <button type="button" onclick="Simpan_pekerjaan_kontruksi()" class="btn btn-grad8 text-white btn-sm btn-block">Simpan Penilaian</button></div>
                                                    <div id="warning_button" style="display: none;"> <button type="button" onclick="Simpan_Warning_pekerjaan_kontruksi_warning()" class="btn btn-grad10 text-white btn-sm btn-block">warning Penilaian</button></div>
                                                </div>
                                            </div>
                                        </center>
                                    </div>
                                </div>
                            </div>
                            <!-- END PEKERJAAN KONTRUKSI -->





                            <!-- INI KONSULTAN PRENCANAAN KONTRUKSI -->
                            <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                                <div class="card" style="box-shadow: 2px 2px 10px 2px black;">
                                    <div class="card-header btn-grad">
                                        <i class="fas fa-chart-line"></i> Penilaian Kinerja Konsultan Perencana Konstruksi
                                    </div>
                                    <div class="card-body">
                                        <div style="overflow-x: auto;">
                                            <table class="table" style="font-size: 12px;">
                                                <tr>
                                                    <th>Kode Tender</th>
                                                    <th>: B.02.004.00021.00001.JMTM.071120230003</th>
                                                </tr>
                                                <tr>
                                                    <th>Nama Paket</th>
                                                    <th>: Jasa Pemborongan Pekerjaan Stabilitas Lereng Km 346+100 s.d KM 346+300 A Pada Ruas Jalan Tol Batang-Semarang Tahun 2023</th>
                                                </tr>
                                                <tr>
                                                    <th>Divisi</th>
                                                    <th>: Area Control 4</th>
                                                </tr>
                                                <tr>
                                                    <th>Nama Vendor</th>
                                                    <th>: BANGUN SEJAHTERA, CV</th>
                                                </tr>
                                                <tr>
                                                    <th>Alamat Perusahaan</th>
                                                    <th>: Jl. Sembungan Utara No.266 Ungaran</th>
                                                </tr>
                                                <tr>
                                                    <th>Lokasi Pekerjaan 1</th>
                                                    <th>: Provinsi : JAWA TENGAH <br> : Kabupaten : KABUPATEN BATANG <br> : Alamat : Lereng Km 346+100 s.d KM 346+300 A Pada Ruas Jalan Tol Batang-Semarang </th>
                                                </tr>
                                                <tr>
                                                    <th>Nilai Kontrak</th>
                                                    <th>: Rp 1.808.137.830,00 </th>
                                                </tr>
                                                <tr>
                                                    <th>Nomor Kontrak</th>
                                                    <th>&nbsp;
                                                        <div class="row">
                                                            <input style="width: 200px;height:30px" type="text" name="nomor_kontrak2" value="" id="nomor_kontrak2" placeholder="Nomor Kontrak..." class="form-control form-control-sm ml-2"><input style="width: 200px;height:30px" type="text" name="tanggal_nomor_kontak2" value="" id="tanggal_nomor_kontak2" placeholder="Tanggal" class="form-control form-control-sm ml-1">
                                                        </div>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th>Jangka Waktu Pelaksanaan</th>
                                                    <th>
                                                        <div class="row">
                                                            <input style="width: 200px;height:30px" type="text" name="jangka_mulai2" placeholder="Tanggal Mulai" value="" id="jangka_mulai2" class="form-control form-control-sm ml-2 mr-1"><label for="" class="text-small mt-1">S/D</label> <input style="width: 200px;height:30px" type="text" value="" name="jangka_selesai2" id="jangka_selesai2" placeholder="Tanggal Selesai" class="form-control form-control-sm ml-1">
                                                        </div>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th>Metode Pemilihan</th>
                                                    <th>: TENDER TERBATAS</th>
                                                </tr>
                                            </table><br>
                                            <div class="alert alert-success" role="alert">
                                                <img src="https://eproc.jmtm.co.id/assets/img/aman2.png" width="70px" alt="">
                                                <label for="">Vendor Ini Aman / Tiadak Memiliki Warning !!!</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="card" style="box-shadow: 2px 2px 10px 2px black;">
                                    <div class="card-header btn-grad">
                                        <i class="fas fa-chart-line"></i> Table Penilaian Kinerja Konsultan Perencana Konstruksi
                                    </div>
                                    <div class="card-body">
                                        <div style="overflow-x: auto;">
                                            <form action="" id="form_tambah_pekerjaan_konsultan_kontruksi">
                                                <input type="hidden" name="id_paket" value="1443">
                                                <input type="hidden" name="id_vendor" value="896">
                                                <table id="nilai_tbl" class="table table-bordered">
                                                    <tr class="btn-grad">
                                                        <th>No</th>
                                                        <th>Aspek Kerja</th>
                                                        <th>Indikator</th>
                                                        <th>Bobot(%)</th>
                                                        <th>Penilaian</th>
                                                        <th>Nilai Akhir</th>
                                                    </tr>
                                                    <tr>

                                                        <td rowspan="3">1</td>
                                                        <td rowspan="3">Administrasi
                                                            (15%)</td>
                                                        <!-- ketika update  -->
                                                        <td>
                                                            Kantor, Studio, dan sarana prasarana perusahan memadai untuk melaksanakan pekerjaan/sesuai kualifikasi. <textarea id="indikator_pekerjaan_konsultan_kontruksi1" hidden name="indikator_pekerjaan_konsultan_kontruksi[]">Kantor, Studio, dan sarana prasarana perusahan memadai untuk melaksanakan pekerjaan/sesuai kualifikasi.</textarea>
                                                        </td>
                                                        <td>5
                                                            <input type="hidden" id="bobot_pekerjaan_konsultan_kontruksi1" name="bobot_pekerjaan_konsultan_kontruksi[]" value="5">
                                                        </td>
                                                        <td>
                                                            <input type="text" id="penilaian_konsultan_kontruksi1" name="penilaian_konsultan_kontruksi[]" class="form-control form-control-sm" style="width: 60px;">
                                                        </td>
                                                        <td><input type="text" name="nilai_akhir_pekerjaan_konsultan_kontruksi[]" id="nilai_akhir_pekerjaan_konsultan_kontruksi_aspek1" class="form-control form-control-sm" readonly style="width: 60px;"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Ketaatan dalam penyelesaian Administrasi Keuangan(termin, pajak, jaminan, dll). <textarea id="indikator_pekerjaan_konsultan_kontruksi2" name="indikator_pekerjaan_konsultan_kontruksi[]" hidden>Ketaatan dalam penyelesaian Administrasi Keuangan(termin, pajak, jaminan, dll).                                                                                    </textarea>
                                                        </td>
                                                        <td>5
                                                            <input type="hidden" id="bobot_pekerjaan_konsultan_kontruksi2" name="bobot_pekerjaan_konsultan_kontruksi[]" value="5">
                                                        </td>
                                                        <td>
                                                            <input type="text" id="penilaian_konsultan_kontruksi2" name="penilaian_konsultan_kontruksi[]" class="form-control form-control-sm" style="width: 60px;">
                                                        </td>
                                                        <td><input type="text" name="nilai_akhir_pekerjaan_konsultan_kontruksi[]" id="nilai_akhir_pekerjaan_konsultan_kontruksi_aspek2" class="form-control form-control-sm" readonly style="width: 60px;"></td>


                                                    </tr>
                                                    <tr>
                                                        <td>Organisasi (pengurus, tenaga ahli, tenaga administrasi, tenaga teknis) perusahan memadai/sesuai dengan kualifikasi. <textarea hidden id="indikator_pekerjaan_konsultan_kontruksi3" name="indikator_pekerjaan_konsultan_kontruksi[]">Organisasi (pengurus, tenaga ahli, tenaga administrasi, tenaga teknis) perusahan memadai/sesuai dengan kualifikasi.</textarea>
                                                        </td>
                                                        <td>5
                                                            <input type="hidden" id="bobot_pekerjaan_konsultan_kontruksi3" name="bobot_pekerjaan_konsultan_kontruksi[]" value="5">
                                                        </td>
                                                        <td>
                                                            <input type="text" id="penilaian_konsultan_kontruksi3" name="penilaian_konsultan_kontruksi[]" class="form-control form-control-sm" style="width: 60px;">
                                                        </td>
                                                        <td><input type=" text" name="nilai_akhir_pekerjaan_konsultan_kontruksi[]" id="nilai_akhir_pekerjaan_konsultan_kontruksi_aspek3" class="form-control form-control-sm" readonly style="width: 60px;">
                                                        </td>
                                                    </tr>
                                                    <!-- Kedua -->
                                                    <tr>

                                                        <td rowspan="2">2</td>
                                                        <td rowspan="2">Jadwal Dan
                                                            Waktu (25%)</td>

                                                        <td>Tenaga Ahli dan Tenaga Teknis yang ditugaskan sesuai dengan yang diusulkan. <textarea hidden id="indikator_pekerjaan_konsultan_kontruksi4" name="indikator_pekerjaan_konsultan_kontruksi[]">Tenaga Ahli dan Tenaga Teknis yang ditugaskan sesuai dengan yang diusulkan.</textarea>
                                                        </td>
                                                        <td>15
                                                            <input type="hidden" id="bobot_pekerjaan_konsultan_kontruksi4" name="bobot_pekerjaan_konsultan_kontruksi[]" value="15">
                                                        </td>
                                                        <td>
                                                            <input type="text" id="penilaian_konsultan_kontruksi4" name="penilaian_konsultan_kontruksi[]" class="form-control form-control-sm" style="width: 60px;">
                                                        </td>
                                                        <td><input type=" text" name="nilai_akhir_pekerjaan_konsultan_kontruksi[]" id="nilai_akhir_pekerjaan_konsultan_kontruksi_aspek4" class="form-control form-control-sm" readonly style="width: 60px;">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tenaga Ahli dan Tenaga Teknis memiliki kemampuan sesuai dengan kualifikasi pekerjaan. <textarea hidden id="indikator_pekerjaan_konsultan_kontruksi5" name="indikator_pekerjaan_konsultan_kontruksi[]">Tenaga Ahli dan Tenaga Teknis memiliki kemampuan sesuai dengan kualifikasi pekerjaan.</textarea>
                                                        </td>
                                                        <td>10
                                                            <input type="hidden" id="bobot_pekerjaan_konsultan_kontruksi5" name="bobot_pekerjaan_konsultan_kontruksi[]" value="10">
                                                        </td>
                                                        <td>

                                                            <input type="text" id="penilaian_konsultan_kontruksi5" name="penilaian_konsultan_kontruksi[]" class="form-control form-control-sm" style="width: 60px;">
                                                        </td>
                                                        <td><input type="text" name="nilai_akhir_pekerjaan_konsultan_kontruksi[]" id="nilai_akhir_pekerjaan_konsultan_kontruksi_aspek5" class="form-control form-control-sm" readonly style="width: 60px;"></td>

                                                    </tr>
                                                    <!-- Ketiga -->
                                                    <tr>

                                                        <td rowspan="4">3</td>
                                                        <td rowspan="4">Kualitas Dan Kuantitas Produk
                                                            (30%)
                                                        </td>
                                                        <td>Kualitas Hasil Pekerjaan Konstruksi yang dilaksanakan Pelaksana sesuai Kontrak. <textarea hidden id="indikator_pekerjaan_konsultan_kontruksi6" name="indikator_pekerjaan_konsultan_kontruksi[]">Kualitas Hasil Pekerjaan Konstruksi yang dilaksanakan Pelaksana sesuai Kontrak.</textarea>
                                                        </td>
                                                        <td>10
                                                            <input type="hidden" id="bobot_pekerjaan_konsultan_kontruksi6" name="bobot_pekerjaan_konsultan_kontruksi[]" value="10">
                                                        </td>
                                                        <td>
                                                            <input type="text" id="penilaian_konsultan_kontruksi6" name="penilaian_konsultan_kontruksi[]" class="form-control form-control-sm" style="width: 60px;">
                                                        </td>
                                                        <td><input type="text" name="nilai_akhir_pekerjaan_konsultan_kontruksi[]" id="nilai_akhir_pekerjaan_konsultan_kontruksi_aspek6" class="form-control form-control-sm" readonly style="width: 60px;"></td>

                                                    </tr>
                                                    <tr>

                                                        <td>Rapat Monitoring dan Evaluasi Pekerjaan dilaksanakan secara periodik dapat ditepati. <textarea hidden id="indikator_pekerjaan_konsultan_kontruksi7" name="indikator_pekerjaan_konsultan_kontruksi[]">Rapat Monitoring dan Evaluasi Pekerjaan dilaksanakan secara periodik dapat ditepati.</textarea>
                                                        </td>
                                                        <td>5
                                                            <input type="hidden" id="bobot_pekerjaan_konsultan_kontruksi7" name="bobot_pekerjaan_konsultan_kontruksi[]" value="5">
                                                        </td>
                                                        <td>
                                                            <input type="text" id="penilaian_konsultan_kontruksi7" name="penilaian_konsultan_kontruksi[]" class="form-control form-control-sm" style="width: 60px;">
                                                        </td>
                                                        <td><input type="text" name="nilai_akhir_pekerjaan_konsultan_kontruksi[]" id="nilai_akhir_pekerjaan_konsultan_kontruksi_aspek7" class="form-control form-control-sm" readonly style="width: 60px;"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Memberikan Instruksi-Instruksi kepada Pelaksana sesuai Prosedur Tetap (Protap)/Manual Mutu/SOP. <textarea hidden id="indikator_pekerjaan_konsultan_kontruksi8" name="indikator_pekerjaan_konsultan_kontruksi[]">Memberikan Instruksi-Instruksi kepada Pelaksana sesuai Prosedur Tetap (Protap)/Manual Mutu/SOP.</textarea>
                                                        </td>
                                                        <td>10
                                                            <input type="hidden" id="bobot_pekerjaan_konsultan_kontruksi8" name="bobot_pekerjaan_konsultan_kontruksi[]" value="10">
                                                        </td>
                                                        <td>
                                                            <input type="text" id="penilaian_konsultan_kontruksi8" name="penilaian_konsultan_kontruksi[]" class="form-control form-control-sm" style="width: 60px;">
                                                        </td>
                                                        <td><input type="text" name="nilai_akhir_pekerjaan_konsultan_kontruksi[]" id="nilai_akhir_pekerjaan_konsultan_kontruksi_aspek8" class="form-control form-control-sm" readonly style="width: 60px;"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Laporan-laporan dan Produk dibuat tepat waktu/tidak ada keterlambatan. <textarea hidden id="indikator_pekerjaan_konsultan_kontruksi9" name="indikator_pekerjaan_konsultan_kontruksi[]">Laporan-laporan dan Produk dibuat tepat waktu/tidak ada keterlambatan.</textarea>
                                                        </td>
                                                        <td>5
                                                            <input type="hidden" id="bobot_pekerjaan_konsultan_kontruksi9" name="bobot_pekerjaan_konsultan_kontruksi[]" value="5">
                                                        </td>
                                                        <td>
                                                            <input type="text" id="penilaian_konsultan_kontruksi9" name="penilaian_konsultan_kontruksi[]" class="form-control form-control-sm" style="width: 60px;">
                                                        </td>
                                                        <td><input type="text" name="nilai_akhir_pekerjaan_konsultan_kontruksi[]" id="nilai_akhir_pekerjaan_konsultan_kontruksi_aspek9" class="form-control form-control-sm" readonly style="width: 60px;"></td>
                                                    </tr>
                                                    <!-- Ke empat -->
                                                    <tr>

                                                        <td rowspan="2">4</td>
                                                        <td rowspan="2">Jadwal Dan Waktu
                                                            (10%)
                                                        </td>
                                                        <td>Pelaksanaan Pekerjaan sesuai Jangka Waktu pelaksanaan yang ditetapkan dalam Kontrak. <textarea hidden id="indikator_pekerjaan_konsultan_kontruksi10" name="indikator_pekerjaan_konsultan_kontruksi[]">Pelaksanaan Pekerjaan sesuai Jangka Waktu pelaksanaan yang ditetapkan dalam Kontrak.</textarea>
                                                        </td>
                                                        <td>5
                                                            <input type="hidden" id="bobot_pekerjaan_konsultan_kontruksi10" name="bobot_pekerjaan_konsultan_kontruksi[]" value="5">
                                                        </td>
                                                        <td>
                                                            <input type="text" id="penilaian_konsultan_kontruksi10" name="penilaian_konsultan_kontruksi[]" class="form-control form-control-sm" style="width: 60px;">
                                                        </td>
                                                        <td><input type="text" name="nilai_akhir_pekerjaan_konsultan_kontruksi[]" id="nilai_akhir_pekerjaan_konsultan_kontruksi_aspek10" class="form-control form-control-sm" readonly style="width: 60px;"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Prestasi Pekerjaan sesuai Jadwal dan Tidak ada keterlambatan (Progress pekerjaan). <textarea hidden id="indikator_pekerjaan_konsultan_kontruksi11" name="indikator_pekerjaan_konsultan_kontruksi[]">Prestasi Pekerjaan sesuai Jadwal dan Tidak ada keterlambatan (Progress pekerjaan).</textarea>
                                                        </td>
                                                        <td>5
                                                            <input type="hidden" id="bobot_pekerjaan_konsultan_kontruksi11" name="bobot_pekerjaan_konsultan_kontruksi[]" value="5">
                                                        </td>
                                                        <td>
                                                            <input type="text" id="penilaian_konsultan_kontruksi11" name="penilaian_konsultan_kontruksi[]" class="form-control form-control-sm" style="width: 60px;">
                                                        </td>
                                                        <td><input type="text" name="nilai_akhir_pekerjaan_konsultan_kontruksi[]" id="nilai_akhir_pekerjaan_konsultan_kontruksi_aspek11" class="form-control form-control-sm" readonly style="width: 60px;"></td>
                                                    </tr>

                                                    <!-- Ke lima -->
                                                    <tr>

                                                        <td rowspan="4">5</td>
                                                        <td rowspan="4">Pelaksanaa Pekerjaan (20%)
                                                        </td>
                                                        <td>Penugasan Tenaga kerja selama Waktu Pelaksanaan pekerjaan terpenuhi. <textarea hidden id="indikator_pekerjaan_konsultan_kontruksi12" name="indikator_pekerjaan_konsultan_kontruksi[]">Penugasan Tenaga kerja selama Waktu Pelaksanaan pekerjaan terpenuhi.</textarea>
                                                        </td>
                                                        <td>5
                                                            <input type="hidden" id="bobot_pekerjaan_konsultan_kontruksi12" name="bobot_pekerjaan_konsultan_kontruksi[]" value="5">
                                                        </td>
                                                        <td>
                                                            <input type="text" id="penilaian_konsultan_kontruksi12" name="penilaian_konsultan_kontruksi[]" class="form-control form-control-sm" style="width: 60px;">
                                                        </td>
                                                        <td><input type="text" name="nilai_akhir_pekerjaan_konsultan_kontruksi[]" id="nilai_akhir_pekerjaan_konsultan_kontruksi_aspek12" class="form-control form-control-sm" readonly style="width: 60px;"></td>

                                                    </tr>
                                                    <tr>
                                                        <td>Melakukan koordinasi dan konsultasi rutin dengan pengguna jasa. <textarea hidden id="indikator_pekerjaan_konsultan_kontruksi13" name="indikator_pekerjaan_konsultan_kontruksi[]">Melakukan koordinasi dan konsultasi rutin dengan pengguna jasa.</textarea>
                                                        </td>
                                                        <td>5
                                                            <input type="hidden" id="bobot_pekerjaan_konsultan_kontruksi13" name="bobot_pekerjaan_konsultan_kontruksi[]" value="5">
                                                        </td>
                                                        <td>
                                                            <input type="text" id="penilaian_konsultan_kontruksi13" name="penilaian_konsultan_kontruksi[]" class="form-control form-control-sm" style="width: 60px;">
                                                        </td>
                                                        <td><input type="text" name="nilai_akhir_pekerjaan_konsultan_kontruksi[]" id="nilai_akhir_pekerjaan_konsultan_kontruksi_aspek13" class="form-control form-control-sm" readonly style="width: 60px;"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Sarana Prasarana (Peralatan) selama pelaksanaan pekerjaan memadai/sesuai ketentuan. <textarea hidden id="indikator_pekerjaan_konsultan_kontruksi14" name="indikator_pekerjaan_konsultan_kontruksi[]">Sarana Prasarana (Peralatan) selama pelaksanaan pekerjaan memadai/sesuai ketentuan.</textarea>
                                                        </td>
                                                        <td>5
                                                            <input type="hidden" id="bobot_pekerjaan_konsultan_kontruksi14" name="bobot_pekerjaan_konsultan_kontruksi[]" value="5">
                                                        </td>
                                                        <td>
                                                            <input type="text" id="penilaian_konsultan_kontruksi14" name="penilaian_konsultan_kontruksi[]" class="form-control form-control-sm" style="width: 60px;">
                                                        </td>
                                                        <td><input type="text" name="nilai_akhir_pekerjaan_konsultan_kontruksi[]" id="nilai_akhir_pekerjaan_konsultan_kontruksi_aspek14" class="form-control form-control-sm" readonly style="width: 60px;"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Selama pelaksanaan pekerjaan tidak ada teguran,peringatan. <textarea hidden id="indikator_pekerjaan_konsultan_kontruksi15" name="indikator_pekerjaan_konsultan_kontruksi[]">Selama pelaksanaan pekerjaan tidak ada teguran,peringatan.</textarea>
                                                        </td>
                                                        <td>5
                                                            <input type="hidden" id="bobot_pekerjaan_konsultan_kontruksi15" name="bobot_pekerjaan_konsultan_kontruksi[]" value="5">
                                                        </td>
                                                        <td>
                                                            <input type="text" id="penilaian_konsultan_kontruksi15" name="penilaian_konsultan_kontruksi[]" class="form-control form-control-sm" style="width: 60px;">
                                                        </td>
                                                        <td><input type="text" name="nilai_akhir_pekerjaan_konsultan_kontruksi[]" id="nilai_akhir_pekerjaan_konsultan_kontruksi_aspek15" class="form-control form-control-sm" readonly style="width: 60px;"></td>

                                                    </tr>

                                                    <input type="hidden" name="rating_penilaian_vendor_pekerjaan_konsultan_kontruksi">
                                                    <input type="hidden" name="status_rating_pekerjaan_konsultan_kontruksi">
                                                    <input type="hidden" name="status_nilai_akhir_pekerjaan_konsultan_kontruksi">
                                                    <tfoot>
                                                        <tr class="text-center">
                                                            <td></td>
                                                            <td><b> RATING </b></td>
                                                            <td>
                                                                <div id="status_pekerjaan_konsultan_kontruksi">

                                                                </div>
                                                            </td>
                                                            <td colspan="3">
                                                                <div id="bintang_pekerjaan_konsultan_kontruksi"></div>
                                                            </td>
                                                        </tr>
                                                    </tfoot>
                                                    <tfoot>
                                                        <tr class="text-center">
                                                            <td></td>
                                                            <td colspan="2"><b> TOTAL NILAI AKHIR </b></td>
                                                            <td><b>100</b></td>
                                                            <td></td>
                                                            <td><input type="number" style="width: 80px;" class="form-control form-control-sm" readonly id="total_nilai_pekerjaan_konsultan_kontruksi"></td>
                                                        </tr>
                                                    </tfoot>

                                                    <br>
                                                </table>
                                            </form>
                                        </div><br>
                                        <center>
                                            <div class="row">
                                                <div class="col">
                                                    <a class="btn btn-grad7 text-white btn-sm btn-block" style="box-shadow: 2px 2px 8px 2px black;" href="https://eproc.jmtm.co.id/beranda/penilaian_kinerja"><i class="fas fa fa-arrow-left"></i> Kembali</a>
                                                </div>
                                                <div class="col">
                                                    <div id="save_button_konsultan_kontruksi" style="display: none;"> <button type="button" onclick="Simpan_pekerjaan_konsultan_kontruksi()" class="btn btn-grad8 text-white btn-sm btn-block">Simpan konsultan Penilaian</button></div>
                                                    <div id="warning_button_konsultan_kontruksi" style="display: none;"> <button type="button" onclick="Simpan_Warning_pekerjaan_konsultan_kontruksi_warning()" class="btn btn-grad10 text-white btn-sm btn-block">warning konsultan Penilaian</button></div>
                                                </div>
                                            </div>
                                        </center>
                                    </div>
                                </div>
                            </div>
                            <!-- END INI KONSULTAN PRENCANAAN KONTRUKSI -->


                            <!-- INI BAGIAN PEKERJAAN KONSULTAN KAJIAN -->
                            <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                                <div class="card" style="box-shadow: 2px 2px 10px 2px black;">
                                    <div class="card-header btn-grad">
                                        <i class="fas fa-chart-line"></i> Penilaian Kinerja Konsultan Kajian/Studi/Sistem Informatika
                                    </div>
                                    <div class="card-body">
                                        <div style="overflow-x: auto;">
                                            <table class="table" style="font-size: 12px;">
                                                <tr>
                                                    <th>Kode Tender</th>
                                                    <th>: B.02.004.00021.00001.JMTM.071120230003</th>
                                                </tr>
                                                <tr>
                                                    <th>Nama Paket</th>
                                                    <th>: Jasa Pemborongan Pekerjaan Stabilitas Lereng Km 346+100 s.d KM 346+300 A Pada Ruas Jalan Tol Batang-Semarang Tahun 2023</th>
                                                </tr>
                                                <tr>
                                                    <th>Divisi</th>
                                                    <th>: Area Control 4</th>
                                                </tr>
                                                <tr>
                                                    <th>Nama Vendor</th>
                                                    <th>: BANGUN SEJAHTERA, CV</th>
                                                </tr>
                                                <tr>
                                                    <th>Alamat Perusahaan</th>
                                                    <th>: Jl. Sembungan Utara No.266 Ungaran</th>
                                                </tr>
                                                <tr>
                                                    <th>Lokasi Pekerjaan 1</th>
                                                    <th>: Provinsi : JAWA TENGAH <br> : Kabupaten : KABUPATEN BATANG <br> : Alamat : Lereng Km 346+100 s.d KM 346+300 A Pada Ruas Jalan Tol Batang-Semarang </th>
                                                </tr>
                                                <tr>
                                                    <th>Nilai Kontrak</th>
                                                    <th>: Rp 1.808.137.830,00 </th>
                                                </tr>
                                                <tr>
                                                    <th>Nomor Kontrak</th>
                                                    <th>&nbsp;
                                                        <div class="row">
                                                            <input style="width: 200px;height:30px" type="text" name="nomor_kontrak3" value="" id="nomor_kontrak3" placeholder="Nomor Kontrak..." class="form-control form-control-sm ml-2"><input style="width: 200px;height:30px" type="text" name="tanggal_nomor_kontak3" value="" id="tanggal_nomor_kontak3" placeholder="Tanggal" class="form-control form-control-sm ml-1">
                                                        </div>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th>Jangka Waktu Pelaksanaan</th>
                                                    <th>
                                                        <div class="row">
                                                            <input style="width: 200px;height:30px" type="text" name="jangka_mulai3" placeholder="Tanggal Mulai" value="" id="jangka_mulai3" class="form-control form-control-sm ml-2 mr-1"><label for="" class="text-small mt-1">S/D</label> <input style="width: 200px;height:30px" type="text" value="" name="jangka_selesai3" id="jangka_selesai3" placeholder="Tanggal Selesai" class="form-control form-control-sm ml-1">
                                                        </div>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th>Metode Pemilihan</th>
                                                    <th>: TENDER TERBATAS</th>
                                                </tr>
                                            </table>
                                            <br>
                                            <div class="alert alert-success" role="alert">
                                                <img src="https://eproc.jmtm.co.id/assets/img/aman2.png" width="70px" alt="">
                                                <label for="">Vendor Ini Aman / Tiadak Memiliki Warning !!!</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="card" style="box-shadow: 2px 2px 10px 2px black;">
                                    <div class="card-header btn-grad">
                                        <i class="fas fa-chart-line"></i> Table PENILAIAN KINERJA KONSULTAN KAJIAN/STUDI/SISTEM INFORMATIKA
                                    </div>
                                    <div class="card-body">
                                        <div style="overflow-x: auto;">
                                            <form action="" id="form_tambah_pekerjaan_kajian_konsultan_kontruksi">
                                                <input type="hidden" name="id_paket" value="1443">
                                                <input type="hidden" name="id_vendor" value="896">
                                                <table id="nilai_tbl" class="table table-bordered">
                                                    <tr class="btn-grad">
                                                        <th>No</th>
                                                        <th>Aspek Kerja</th>
                                                        <th>Indikator</th>
                                                        <th>Bobot(%)</th>
                                                        <th>Penilaian</th>
                                                        <th>Nilai Akhir</th>
                                                    </tr>
                                                    <tr>

                                                        <td rowspan="3">1</td>
                                                        <td rowspan="3">Administrasi
                                                            (15%)</td>
                                                        <!-- ketika update  -->
                                                        <td>
                                                            Ketaatan dan kelengkapan dalam memenuhi Administrasi Pekerjaan (Laporan-Laporan, Produk perencanaan, dll). <textarea id="indikator_pekerjaan_kajian_konsultan_kontruksi1" hidden name="indikator_pekerjaan_kajian_konsultan_kontruksi[]">Ketaatan dan kelengkapan dalam memenuhi Administrasi Pekerjaan (Laporan-Laporan, Produk perencanaan, dll).</textarea>
                                                        </td>
                                                        <td>5
                                                            <input type="hidden" id="bobot_pekerjaan_kajian_konsultan_kontruksi1" name="bobot_pekerjaan_kajian_konsultan_kontruksi[]" value="5">
                                                        </td>
                                                        <td>
                                                            <input type="text" id="penilaian_kajian_konsultan_kontruksi1" name="penilaian_kajian_konsultan_kontruksi[]" class="form-control form-control-sm" style="width: 60px;">
                                                        </td>
                                                        <td><input type="text" name="nilai_akhir_pekerjaan_kajian_konsultan_kontruksi[]" id="nilai_akhir_pekerjaan_kajian_konsultan_kontruksi_aspek1" class="form-control form-control-sm" readonly style="width: 60px;"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Ketaatan dalam penyelesaian Adm inistrasi Keuangan (termin, pajak, jaminan, dll). <textarea id="indikator_pekerjaan_kajian_konsultan_kontruksi2" name="indikator_pekerjaan_kajian_konsultan_kontruksi[]" hidden>Ketaatan dalam penyelesaian Adm inistrasi Keuangan (termin, pajak, jaminan, dll).                                                                                    </textarea>
                                                        </td>
                                                        <td>5
                                                            <input type="hidden" id="bobot_pekerjaan_kajian_konsultan_kontruksi2" name="bobot_pekerjaan_kajian_konsultan_kontruksi[]" value="5">
                                                        </td>
                                                        <td>
                                                            <input type="text" id="penilaian_kajian_konsultan_kontruksi2" name="penilaian_kajian_konsultan_kontruksi[]" class="form-control form-control-sm" style="width: 60px;">
                                                        </td>
                                                        <td><input type="text" name="nilai_akhir_pekerjaan_kajian_konsultan_kontruksi[]" id="nilai_akhir_pekerjaan_kajian_konsultan_kontruksi_aspek2" class="form-control form-control-sm" readonly style="width: 60px;"></td>


                                                    </tr>
                                                    <tr>
                                                        <td>Kantor, Studio, Organisasi, dan Sarana prasarana perusahaan memadai untuk melaksanakan pekerjaan. <textarea hidden id="indikator_pekerjaan_kajian_konsultan_kontruksi3" name="indikator_pekerjaan_kajian_konsultan_kontruksi[]">Kantor, Studio, Organisasi, dan Sarana prasarana perusahaan memadai untuk melaksanakan pekerjaan.</textarea>
                                                        </td>
                                                        <td>5
                                                            <input type="hidden" id="bobot_pekerjaan_kajian_konsultan_kontruksi3" name="bobot_pekerjaan_kajian_konsultan_kontruksi[]" value="5">
                                                        </td>
                                                        <td>
                                                            <input type="text" id="penilaian_kajian_konsultan_kontruksi3" name="penilaian_kajian_konsultan_kontruksi[]" class="form-control form-control-sm" style="width: 60px;">
                                                        </td>
                                                        <td><input type=" text" name="nilai_akhir_pekerjaan_kajian_konsultan_kontruksi[]" id="nilai_akhir_pekerjaan_kajian_konsultan_kontruksi_aspek3" class="form-control form-control-sm" readonly style="width: 60px;">
                                                        </td>
                                                    </tr>
                                                    <!-- Kedua -->
                                                    <tr>

                                                        <td rowspan="2">2</td>
                                                        <td rowspan="2">
                                                            Tenaga Ahli dan Tenaga Teknis (30%)
                                                        </td>
                                                        <td>Tenaga Ahli dan Tenaga Teknis yang ditugaskan sesuai dengan yang diusulkan. <textarea hidden id="indikator_pekerjaan_kajian_konsultan_kontruksi4" name="indikator_pekerjaan_kajian_konsultan_kontruksi[]">Tenaga Ahli dan Tenaga Teknis yang ditugaskan sesuai dengan yang diusulkan.</textarea>
                                                        </td>
                                                        <td>15
                                                            <input type="hidden" id="bobot_pekerjaan_kajian_konsultan_kontruksi4" name="bobot_pekerjaan_kajian_konsultan_kontruksi[]" value="15">
                                                        </td>
                                                        <td>
                                                            <input type="text" id="penilaian_kajian_konsultan_kontruksi4" name="penilaian_kajian_konsultan_kontruksi[]" class="form-control form-control-sm" style="width: 60px;">
                                                        </td>
                                                        <td><input type=" text" name="nilai_akhir_pekerjaan_kajian_konsultan_kontruksi[]" id="nilai_akhir_pekerjaan_kajian_konsultan_kontruksi_aspek4" class="form-control form-control-sm" readonly style="width: 60px;">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tenaga Ahli dan Tenaga Teknis memiliki kemampuan sesuai dengan kualifikasi pekerjaan. <textarea hidden id="indikator_pekerjaan_kajian_konsultan_kontruksi5" name="indikator_pekerjaan_kajian_konsultan_kontruksi[]">Tenaga Ahli dan Tenaga Teknis memiliki kemampuan sesuai dengan kualifikasi pekerjaan.</textarea>
                                                        </td>
                                                        <td>15
                                                            <input type="hidden" id="bobot_pekerjaan_kajian_konsultan_kontruksi5" name="bobot_pekerjaan_kajian_konsultan_kontruksi[]" value="15">
                                                        </td>
                                                        <td>

                                                            <input type="text" id="penilaian_kajian_konsultan_kontruksi5" name="penilaian_kajian_konsultan_kontruksi[]" class="form-control form-control-sm" style="width: 60px;">
                                                        </td>
                                                        <td><input type="text" name="nilai_akhir_pekerjaan_kajian_konsultan_kontruksi[]" id="nilai_akhir_pekerjaan_kajian_konsultan_kontruksi_aspek5" class="form-control form-control-sm" readonly style="width: 60px;"></td>

                                                    </tr>
                                                    <!-- Ketiga -->
                                                    <tr>

                                                        <td rowspan="4">3</td>
                                                        <td rowspan="4">Kualitas Dan Kuantitas Produk
                                                            (30%)
                                                        </td>
                                                        <td>Hasil Perencanaan memenuhi persyaratan, standar dan kualitas sesuai ketentuan dalam kontrak. <textarea hidden id="indikator_pekerjaan_kajian_konsultan_kontruksi6" name="indikator_pekerjaan_kajian_konsultan_kontruksi[]">Hasil Perencanaan memenuhi persyaratan, standar dan kualitas sesuai ketentuan dalam kontrak.</textarea>
                                                        </td>
                                                        <td>10
                                                            <input type="hidden" id="bobot_pekerjaan_kajian_konsultan_kontruksi6" name="bobot_pekerjaan_kajian_konsultan_kontruksi[]" value="10">
                                                        </td>
                                                        <td>
                                                            <input type="text" id="penilaian_kajian_konsultan_kontruksi6" name="penilaian_kajian_konsultan_kontruksi[]" class="form-control form-control-sm" style="width: 60px;">
                                                        </td>
                                                        <td><input type="text" name="nilai_akhir_pekerjaan_kajian_konsultan_kontruksi[]" id="nilai_akhir_pekerjaan_kajian_konsultan_kontruksi_aspek6" class="form-control form-control-sm" readonly style="width: 60px;"></td>

                                                    </tr>
                                                    <tr>

                                                        <td>Kuantitas Pekerjaan sesuai dengan ketentuan kontrak. <textarea hidden id="indikator_pekerjaan_kajian_konsultan_kontruksi7" name="indikator_pekerjaan_kajian_konsultan_kontruksi[]">Kuantitas Pekerjaan sesuai dengan ketentuan kontrak.</textarea>
                                                        </td>
                                                        <td>5
                                                            <input type="hidden" id="bobot_pekerjaan_kajian_konsultan_kontruksi7" name="bobot_pekerjaan_kajian_konsultan_kontruksi[]" value="5">
                                                        </td>
                                                        <td>
                                                            <input type="text" id="penilaian_kajian_konsultan_kontruksi7" name="penilaian_kajian_konsultan_kontruksi[]" class="form-control form-control-sm" style="width: 60px;">
                                                        </td>
                                                        <td><input type="text" name="nilai_akhir_pekerjaan_kajian_konsultan_kontruksi[]" id="nilai_akhir_pekerjaan_kajian_konsultan_kontruksi_aspek7" class="form-control form-control-sm" readonly style="width: 60px;"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Hasil Perencanaan dapat diaplikasikan dengan baik dan tidak banyak perubahan/revisi. <textarea hidden id="indikator_pekerjaan_kajian_konsultan_kontruksi8" name="indikator_pekerjaan_kajian_konsultan_kontruksi[]">Hasil Perencanaan dapat diaplikasikan dengan baik dan tidak banyak perubahan/revisi.</textarea>
                                                        </td>
                                                        <td>10
                                                            <input type="hidden" id="bobot_pekerjaan_kajian_konsultan_kontruksi8" name="bobot_pekerjaan_kajian_konsultan_kontruksi[]" value="10">
                                                        </td>
                                                        <td>
                                                            <input type="text" id="penilaian_kajian_konsultan_kontruksi8" name="penilaian_kajian_konsultan_kontruksi[]" class="form-control form-control-sm" style="width: 60px;">
                                                        </td>
                                                        <td><input type="text" name="nilai_akhir_pekerjaan_kajian_konsultan_kontruksi[]" id="nilai_akhir_pekerjaan_kajian_konsultan_kontruksi_aspek8" class="form-control form-control-sm" readonly style="width: 60px;"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Adanya Inovasi dan Alih Teknologi dalam perencanaan. <textarea hidden id="indikator_pekerjaan_kajian_konsultan_kontruksi9" name="indikator_pekerjaan_kajian_konsultan_kontruksi[]">Adanya Inovasi dan Alih Teknologi dalam perencanaan.</textarea>
                                                        </td>
                                                        <td>5
                                                            <input type="hidden" id="bobot_pekerjaan_kajian_konsultan_kontruksi9" name="bobot_pekerjaan_kajian_konsultan_kontruksi[]" value="5">
                                                        </td>
                                                        <td>
                                                            <input type="text" id="penilaian_kajian_konsultan_kontruksi9" name="penilaian_kajian_konsultan_kontruksi[]" class="form-control form-control-sm" style="width: 60px;">
                                                        </td>
                                                        <td><input type="text" name="nilai_akhir_pekerjaan_kajian_konsultan_kontruksi[]" id="nilai_akhir_pekerjaan_kajian_konsultan_kontruksi_aspek9" class="form-control form-control-sm" readonly style="width: 60px;"></td>
                                                    </tr>
                                                    <!-- Ke empat -->
                                                    <tr>

                                                        <td rowspan="2">4</td>
                                                        <td rowspan="2">Jadwal Dan Waktu
                                                            (10%)
                                                        </td>
                                                        <td>Pelaksanaan Pekerjaan sesuai Jangka Waktu pelaksanaan yang ditetapkan dalam Kontrak. <textarea hidden id="indikator_pekerjaan_kajian_konsultan_kontruksi10" name="indikator_pekerjaan_kajian_konsultan_kontruksi[]">Pelaksanaan Pekerjaan sesuai Jangka Waktu pelaksanaan yang ditetapkan dalam Kontrak.</textarea>
                                                        </td>
                                                        <td>5
                                                            <input type="hidden" id="bobot_pekerjaan_kajian_konsultan_kontruksi10" name="bobot_pekerjaan_kajian_konsultan_kontruksi[]" value="5">
                                                        </td>
                                                        <td>
                                                            <input type="text" id="penilaian_kajian_konsultan_kontruksi10" name="penilaian_kajian_konsultan_kontruksi[]" class="form-control form-control-sm" style="width: 60px;">
                                                        </td>
                                                        <td><input type="text" name="nilai_akhir_pekerjaan_kajian_konsultan_kontruksi[]" id="nilai_akhir_pekerjaan_kajian_konsultan_kontruksi_aspek10" class="form-control form-control-sm" readonly style="width: 60px;"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Progres/Prestasi Pekerjaan sesuai Jadwal dan Tidak ada keterlambatan. <textarea hidden id="indikator_pekerjaan_kajian_konsultan_kontruksi11" name="indikator_pekerjaan_kajian_konsultan_kontruksi[]">Progres/Prestasi Pekerjaan sesuai Jadwal dan Tidak ada keterlambatan.</textarea>
                                                        </td>
                                                        <td>5
                                                            <input type="hidden" id="bobot_pekerjaan_kajian_konsultan_kontruksi11" name="bobot_pekerjaan_kajian_konsultan_kontruksi[]" value="5">
                                                        </td>
                                                        <td>
                                                            <input type="text" id="penilaian_kajian_konsultan_kontruksi11" name="penilaian_kajian_konsultan_kontruksi[]" class="form-control form-control-sm" style="width: 60px;">
                                                        </td>
                                                        <td><input type="text" name="nilai_akhir_pekerjaan_kajian_konsultan_kontruksi[]" id="nilai_akhir_pekerjaan_kajian_konsultan_kontruksi_aspek11" class="form-control form-control-sm" readonly style="width: 60px;"></td>
                                                    </tr>

                                                    <!-- Ke lima -->
                                                    <tr>

                                                        <td rowspan="3">5</td>
                                                        <td rowspan="3">Presentasi Laporan (15%)
                                                        </td>
                                                        <td>Jadwal presentasi laporan, FGD, Konsultasi publik dilaksanakan sesuai dengan rencana. <textarea hidden id="indikator_pekerjaan_kajian_konsultan_kontruksi12" name="indikator_pekerjaan_kajian_konsultan_kontruksi[]">Jadwal presentasi laporan, FGD, Konsultasi publik dilaksanakan sesuai dengan rencana.</textarea>
                                                        </td>
                                                        <td>5
                                                            <input type="hidden" id="bobot_pekerjaan_kajian_konsultan_kontruksi12" name="bobot_pekerjaan_kajian_konsultan_kontruksi[]" value="5">
                                                        </td>
                                                        <td>
                                                            <input type="text" id="penilaian_kajian_konsultan_kontruksi12" name="penilaian_kajian_konsultan_kontruksi[]" class="form-control form-control-sm" style="width: 60px;">
                                                        </td>
                                                        <td><input type="text" name="nilai_akhir_pekerjaan_kajian_konsultan_kontruksi[]" id="nilai_akhir_pekerjaan_kajian_konsultan_kontruksi_aspek12" class="form-control form-control-sm" readonly style="width: 60px;"></td>

                                                    </tr>
                                                    <tr>
                                                        <td>Kehadiran Tenaga Ahli selama presentasi, FGD,Konsultasi publik dapat terpenuhi. <textarea hidden id="indikator_pekerjaan_kajian_konsultan_kontruksi13" name="indikator_pekerjaan_kajian_konsultan_kontruksi[]">Kehadiran Tenaga Ahli selama presentasi, FGD,Konsultasi publik dapat terpenuhi.</textarea>
                                                        </td>
                                                        <td>5
                                                            <input type="hidden" id="bobot_pekerjaan_kajian_konsultan_kontruksi13" name="bobot_pekerjaan_kajian_konsultan_kontruksi[]" value="5">
                                                        </td>
                                                        <td>
                                                            <input type="text" id="penilaian_kajian_konsultan_kontruksi13" name="penilaian_kajian_konsultan_kontruksi[]" class="form-control form-control-sm" style="width: 60px;">
                                                        </td>
                                                        <td><input type="text" name="nilai_akhir_pekerjaan_kajian_konsultan_kontruksi[]" id="nilai_akhir_pekerjaan_kajian_konsultan_kontruksi_aspek13" class="form-control form-control-sm" readonly style="width: 60px;"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Melaksanakan konsultasi rutin dengan pengguna jasa selama pelaksanaan pekerjaan. <textarea hidden id="indikator_pekerjaan_kajian_konsultan_kontruksi14" name="indikator_pekerjaan_kajian_konsultan_kontruksi[]">Melaksanakan konsultasi rutin dengan pengguna jasa selama pelaksanaan pekerjaan.</textarea>
                                                        </td>
                                                        <td>5
                                                            <input type="hidden" id="bobot_pekerjaan_kajian_konsultan_kontruksi14" name="bobot_pekerjaan_kajian_konsultan_kontruksi[]" value="5">
                                                        </td>
                                                        <td>
                                                            <input type="text" id="penilaian_kajian_konsultan_kontruksi14" name="penilaian_kajian_konsultan_kontruksi[]" class="form-control form-control-sm" style="width: 60px;">
                                                        </td>
                                                        <td><input type="text" name="nilai_akhir_pekerjaan_kajian_konsultan_kontruksi[]" id="nilai_akhir_pekerjaan_kajian_konsultan_kontruksi_aspek14" class="form-control form-control-sm" readonly style="width: 60px;"></td>
                                                    </tr>
                                                    <input type="hidden" name="rating_penilaian_vendor_pekerjaan_kajian_konsultan_kontruksi">
                                                    <input type="hidden" name="status_rating_pekerjaan_kajian_konsultan_kontruksi">
                                                    <input type="hidden" name="status_nilai_akhir_pekerjaan_kajian_konsultan_kontruksi">
                                                    <tfoot>
                                                        <tr class="text-center">
                                                            <td></td>
                                                            <td><b> RATING </b></td>
                                                            <td>
                                                                <div id="status_pekerjaan_kajian_konsultan_kontruksi">

                                                                </div>
                                                            </td>
                                                            <td colspan="3">
                                                                <div id="bintang_pekerjaan_kajian_konsultan_kontruksi"></div>
                                                            </td>
                                                        </tr>
                                                    </tfoot>
                                                    <tfoot>
                                                        <tr class="text-center">
                                                            <td></td>
                                                            <td colspan="2"><b> TOTAL NILAI AKHIR </b></td>
                                                            <td><b>100</b></td>
                                                            <td></td>
                                                            <td><input type="number" style="width: 80px;" class="form-control form-control-sm" readonly id="total_nilai_pekerjaan_kajian_konsultan_kontruksi"></td>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </form>
                                        </div><br>
                                        <center>
                                            <div class="row">
                                                <div class="col">
                                                    <a class="btn btn-grad7 text-white btn-sm btn-block" style="box-shadow: 2px 2px 8px 2px black;" href="https://eproc.jmtm.co.id/beranda/penilaian_kinerja"><i class="fas fa fa-arrow-left"></i> Kembali</a>
                                                </div>
                                                <div class="col">
                                                    <div id="save_button_kajian_konsultan_kontruksi" style="display: none;"> <button type="button" onclick="Simpan_pekerjaan_kajian_konsultan_kontruksi()" class="btn btn-grad8 text-white btn-sm btn-block">Simpan kajian konsultan Penilaian</button></div>
                                                    <div id="warning_button_kajian_konsultan_kontruksi" style="display: none;"> <button type="button" onclick="Simpan_Warning_pekerjaan_kajian_konsultan_kontruksi_warning()" class="btn btn-grad10 text-white btn-sm btn-block">warning kajian konsultan Penilaian</button></div>
                                                </div>
                                            </div>
                                        </center>
                                    </div>
                                </div>
                            </div>

                            <!-- END PENILAIAN KKONSULTAN KAJIAN KONTRUKSI -->


                            <!-- BAGIAN KONSULTAN PENGAWAS KONTRUKSI -->
                            <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
                                <div class="card" style="box-shadow: 2px 2px 10px 2px black;">
                                    <div class="card-header btn-grad">
                                        <i class="fas fa-chart-line"></i> Penilaian Konsultan Pengawas Kontruksi
                                    </div>
                                    <div class="card-body">
                                        <div style="overflow-x: auto;">
                                            <table class="table" style="font-size: 12px;">
                                                <tr>
                                                    <th>Kode Tender</th>
                                                    <th>: B.02.004.00021.00001.JMTM.071120230003</th>
                                                </tr>
                                                <tr>
                                                    <th>Nama Paket</th>
                                                    <th>: Jasa Pemborongan Pekerjaan Stabilitas Lereng Km 346+100 s.d KM 346+300 A Pada Ruas Jalan Tol Batang-Semarang Tahun 2023</th>
                                                </tr>
                                                <tr>
                                                    <th>Divisi</th>
                                                    <th>: Area Control 4</th>
                                                </tr>
                                                <tr>
                                                    <th>Nama Vendor</th>
                                                    <th>: BANGUN SEJAHTERA, CV</th>
                                                </tr>
                                                <tr>
                                                    <th>Alamat Perusahaan</th>
                                                    <th>: Jl. Sembungan Utara No.266 Ungaran</th>
                                                </tr>
                                                <tr>
                                                    <th>Lokasi Pekerjaan 1</th>
                                                    <th>: Provinsi : JAWA TENGAH <br> : Kabupaten : KABUPATEN BATANG <br> : Alamat : Lereng Km 346+100 s.d KM 346+300 A Pada Ruas Jalan Tol Batang-Semarang </th>
                                                </tr>
                                                <tr>
                                                    <th>Nilai Kontrak</th>
                                                    <th>: Rp 1.808.137.830,00 </th>
                                                </tr>
                                                <tr>
                                                    <th>Nomor Kontrak</th>
                                                    <th>&nbsp;
                                                        <div class="row">
                                                            <input style="width: 200px;height:30px" type="text" name="nomor_kontrak4" value="" id="nomor_kontrak4" placeholder="Nomor Kontrak..." class="form-control form-control-sm ml-2"><input style="width: 200px;height:30px" type="text" name="tanggal_nomor_kontak4" value="" id="tanggal_nomor_kontak4" placeholder="Tanggal" class="form-control form-control-sm ml-1">
                                                        </div>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th>Jangka Waktu Pelaksanaan</th>
                                                    <th>
                                                        <div class="row">
                                                            <input style="width: 200px;height:30px" type="text" name="jangka_mulai4" placeholder="Tanggal Mulai" value="" id="jangka_mulai4" class="form-control form-control-sm ml-2 mr-1"><label for="" class="text-small mt-1">S/D</label> <input style="width: 200px;height:30px" type="text" value="" name="jangka_selesai4" id="jangka_selesai4" placeholder="Tanggal Selesai" class="form-control form-control-sm ml-1">
                                                        </div>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th>Metode Pemilihan</th>
                                                    <th>: TENDER TERBATAS</th>
                                                </tr>
                                            </table><br>
                                            <div class="alert alert-success" role="alert">
                                                <img src="https://eproc.jmtm.co.id/assets/img/aman2.png" width="70px" alt="">
                                                <label for="">Vendor Ini Aman / Tiadak Memiliki Warning !!!</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="card" style="box-shadow: 2px 2px 10px 2px black;">
                                    <div class="card-header btn-grad">
                                        <i class="fas fa-chart-line"></i> Table Penilaian Konsultan Pengawas Kontruksi
                                    </div>
                                    <div class="card-body">
                                        <div style="overflow-x: auto;">
                                            <form action="" id="form_tambah_pekerjaan_konsultan_pengawas_kontruksi">
                                                <input type="hidden" name="id_paket" value="1443">
                                                <input type="hidden" name="id_vendor" value="896">
                                                <table id="nilai_tbl" class="table table-bordered">
                                                    <tr class="btn-grad">
                                                        <th>No</th>
                                                        <th>Aspek Kerja</th>
                                                        <th>Indikator</th>
                                                        <th>Bobot(%)</th>
                                                        <th>Penilaian</th>
                                                        <th>Nilai Akhir</th>
                                                    </tr>
                                                    <tr>

                                                        <td rowspan="3">1</td>
                                                        <td rowspan="3">Administrasi
                                                            (15%)</td>
                                                        <!-- ketika update  -->
                                                        <td>
                                                            Ketaatan dan kelengkapan dalam memenuhi Administrasi Pekerjaan (Laporan-Laporan, Produk perencanaan, dll). <textarea id="indikator_pekerjaan_konsultan_pengawas_kontruksi1" hidden name="indikator_pekerjaan_konsultan_pengawas_kontruksi[]">Ketaatan dan kelengkapan dalam memenuhi Administrasi Pekerjaan (Laporan-Laporan, Produk perencanaan, dll).</textarea>
                                                        </td>
                                                        <td>5
                                                            <input type="hidden" id="bobot_pekerjaan_konsultan_pengawas_kontruksi1" name="bobot_pekerjaan_konsultan_pengawas_kontruksi[]" value="5">
                                                        </td>
                                                        <td>
                                                            <input type="text" id="penilaian_konsultan_pengawas_kontruksi1" name="penilaian_konsultan_pengawas_kontruksi[]" class="form-control form-control-sm" style="width: 60px;">
                                                        </td>
                                                        <td><input type="text" name="nilai_akhir_pekerjaan_konsultan_pengawas_kontruksi[]" id="nilai_akhir_pekerjaan_konsultan_pengawas_kontruksi_aspek1" class="form-control form-control-sm" readonly style="width: 60px;"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Ketaatan dalam penyelesaian Adm inistrasi Keuangan (termin, pajak, jaminan, dll). <textarea id="indikator_pekerjaan_konsultan_pengawas_kontruksi2" name="indikator_pekerjaan_konsultan_pengawas_kontruksi[]" hidden>Ketaatan dalam penyelesaian Adm inistrasi Keuangan (termin, pajak, jaminan, dll).                                                                                    </textarea>
                                                        </td>
                                                        <td>5
                                                            <input type="hidden" id="bobot_pekerjaan_konsultan_pengawas_kontruksi2" name="bobot_pekerjaan_konsultan_pengawas_kontruksi[]" value="5">
                                                        </td>
                                                        <td>
                                                            <input type="text" id="penilaian_konsultan_pengawas_kontruksi2" name="penilaian_konsultan_pengawas_kontruksi[]" class="form-control form-control-sm" style="width: 60px;">
                                                        </td>
                                                        <td><input type="text" name="nilai_akhir_pekerjaan_konsultan_pengawas_kontruksi[]" id="nilai_akhir_pekerjaan_konsultan_pengawas_kontruksi_aspek2" class="form-control form-control-sm" readonly style="width: 60px;"></td>


                                                    </tr>
                                                    <tr>
                                                        <td>Kantor, Studio, Organisasi, dan Sarana prasarana perusahaan memadai untuk melaksanakan pekerjaan. <textarea hidden id="indikator_pekerjaan_konsultan_pengawas_kontruksi3" name="indikator_pekerjaan_konsultan_pengawas_kontruksi[]">Kantor, Studio, Organisasi, dan Sarana prasarana perusahaan memadai untuk melaksanakan pekerjaan.</textarea>
                                                        </td>
                                                        <td>5
                                                            <input type="hidden" id="bobot_pekerjaan_konsultan_pengawas_kontruksi3" name="bobot_pekerjaan_konsultan_pengawas_kontruksi[]" value="5">
                                                        </td>
                                                        <td>
                                                            <input type="text" id="penilaian_konsultan_pengawas_kontruksi3" name="penilaian_konsultan_pengawas_kontruksi[]" class="form-control form-control-sm" style="width: 60px;">
                                                        </td>
                                                        <td><input type=" text" name="nilai_akhir_pekerjaan_konsultan_pengawas_kontruksi[]" id="nilai_akhir_pekerjaan_konsultan_pengawas_kontruksi_aspek3" class="form-control form-control-sm" readonly style="width: 60px;">
                                                        </td>
                                                    </tr>
                                                    <!-- Kedua -->
                                                    <tr>

                                                        <td rowspan="2">2</td>
                                                        <td rowspan="2">Tenaga Ahli Dan Tenaga Teknis (25%)</td>


                                                        <td>Tenaga Ahli dan Tenaga Teknis yang ditugaskan sesuai dengan yang diusulkan. <textarea hidden id="indikator_pekerjaan_konsultan_pengawas_kontruksi4" name="indikator_pekerjaan_konsultan_pengawas_kontruksi[]">Tenaga Ahli dan Tenaga Teknis yang ditugaskan sesuai dengan yang diusulkan.</textarea>
                                                        </td>
                                                        <td>15
                                                            <input type="hidden" id="bobot_pekerjaan_konsultan_pengawas_kontruksi4" name="bobot_pekerjaan_konsultan_pengawas_kontruksi[]" value="15">
                                                        </td>
                                                        <td>
                                                            <input type="text" id="penilaian_konsultan_pengawas_kontruksi4" name="penilaian_konsultan_pengawas_kontruksi[]" class="form-control form-control-sm" style="width: 60px;">
                                                        </td>
                                                        <td><input type=" text" name="nilai_akhir_pekerjaan_konsultan_pengawas_kontruksi[]" id="nilai_akhir_pekerjaan_konsultan_pengawas_kontruksi_aspek4" class="form-control form-control-sm" readonly style="width: 60px;">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tenaga Ahli dan Tenaga Teknis memiliki kemampuan sesuai dengan kualifikasi pekerjaan. <textarea hidden id="indikator_pekerjaan_konsultan_pengawas_kontruksi5" name="indikator_pekerjaan_konsultan_pengawas_kontruksi[]">Tenaga Ahli dan Tenaga Teknis memiliki kemampuan sesuai dengan kualifikasi pekerjaan.</textarea>
                                                        </td>
                                                        <td>10
                                                            <input type="hidden" id="bobot_pekerjaan_konsultan_pengawas_kontruksi5" name="bobot_pekerjaan_konsultan_pengawas_kontruksi[]" value="10">
                                                        </td>
                                                        <td>

                                                            <input type="text" id="penilaian_konsultan_pengawas_kontruksi5" name="penilaian_konsultan_pengawas_kontruksi[]" class="form-control form-control-sm" style="width: 60px;">
                                                        </td>
                                                        <td><input type="text" name="nilai_akhir_pekerjaan_konsultan_pengawas_kontruksi[]" id="nilai_akhir_pekerjaan_konsultan_pengawas_kontruksi_aspek5" class="form-control form-control-sm" readonly style="width: 60px;"></td>

                                                    </tr>
                                                    <!-- Ketiga -->
                                                    <tr>

                                                        <td rowspan="4">3</td>
                                                        <td rowspan="4">Kualitas Dan Kuantitas Produk
                                                            (30%)
                                                        </td>
                                                        <td>Hasil Perencanaan memenuhi persyaratan, standar dan kualitas sesuai ketentuan dalam kontrak. <textarea hidden id="indikator_pekerjaan_konsultan_pengawas_kontruksi6" name="indikator_pekerjaan_konsultan_pengawas_kontruksi[]">Hasil Perencanaan memenuhi persyaratan, standar dan kualitas sesuai ketentuan dalam kontrak.</textarea>
                                                        </td>
                                                        <td>10
                                                            <input type="hidden" id="bobot_pekerjaan_konsultan_pengawas_kontruksi6" name="bobot_pekerjaan_konsultan_pengawas_kontruksi[]" value="10">
                                                        </td>
                                                        <td>
                                                            <input type="text" id="penilaian_konsultan_pengawas_kontruksi6" name="penilaian_konsultan_pengawas_kontruksi[]" class="form-control form-control-sm" style="width: 60px;">
                                                        </td>
                                                        <td><input type="text" name="nilai_akhir_pekerjaan_konsultan_pengawas_kontruksi[]" id="nilai_akhir_pekerjaan_konsultan_pengawas_kontruksi_aspek6" class="form-control form-control-sm" readonly style="width: 60px;"></td>

                                                    </tr>
                                                    <tr>

                                                        <td>Kuantitas Pekerjaan sesuai dengan ketentuan kontrak. <textarea hidden id="indikator_pekerjaan_konsultan_pengawas_kontruksi7" name="indikator_pekerjaan_konsultan_pengawas_kontruksi[]">Kuantitas Pekerjaan sesuai dengan ketentuan kontrak.</textarea>
                                                        </td>
                                                        <td>5
                                                            <input type="hidden" id="bobot_pekerjaan_konsultan_pengawas_kontruksi7" name="bobot_pekerjaan_konsultan_pengawas_kontruksi[]" value="5">
                                                        </td>
                                                        <td>
                                                            <input type="text" id="penilaian_konsultan_pengawas_kontruksi7" name="penilaian_konsultan_pengawas_kontruksi[]" class="form-control form-control-sm" style="width: 60px;">
                                                        </td>
                                                        <td><input type="text" name="nilai_akhir_pekerjaan_konsultan_pengawas_kontruksi[]" id="nilai_akhir_pekerjaan_konsultan_pengawas_kontruksi_aspek7" class="form-control form-control-sm" readonly style="width: 60px;"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Hasil Perencanaan dapat diaplikasikan dengan baik dan tidak banyak perubahan/revisi. <textarea hidden id="indikator_pekerjaan_konsultan_pengawas_kontruksi8" name="indikator_pekerjaan_konsultan_pengawas_kontruksi[]">Hasil Perencanaan dapat diaplikasikan dengan baik dan tidak banyak perubahan/revisi.</textarea>
                                                        </td>
                                                        <td>10
                                                            <input type="hidden" id="bobot_pekerjaan_konsultan_pengawas_kontruksi8" name="bobot_pekerjaan_konsultan_pengawas_kontruksi[]" value="10">
                                                        </td>
                                                        <td>
                                                            <input type="text" id="penilaian_konsultan_pengawas_kontruksi8" name="penilaian_konsultan_pengawas_kontruksi[]" class="form-control form-control-sm" style="width: 60px;">
                                                        </td>
                                                        <td><input type="text" name="nilai_akhir_pekerjaan_konsultan_pengawas_kontruksi[]" id="nilai_akhir_pekerjaan_konsultan_pengawas_kontruksi_aspek8" class="form-control form-control-sm" readonly style="width: 60px;"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Adanya Inovasi dan Alih Teknologi dalam perencanaan. <textarea hidden id="indikator_pekerjaan_konsultan_pengawas_kontruksi9" name="indikator_pekerjaan_konsultan_pengawas_kontruksi[]">Adanya Inovasi dan Alih Teknologi dalam perencanaan.</textarea>
                                                        </td>
                                                        <td>10
                                                            <input type="hidden" id="bobot_pekerjaan_konsultan_pengawas_kontruksi9" name="bobot_pekerjaan_konsultan_pengawas_kontruksi[]" value="5">
                                                        </td>
                                                        <td>
                                                            <input type="text" id="penilaian_konsultan_pengawas_kontruksi9" name="penilaian_konsultan_pengawas_kontruksi[]" class="form-control form-control-sm" style="width: 60px;">
                                                        </td>
                                                        <td><input type="text" name="nilai_akhir_pekerjaan_konsultan_pengawas_kontruksi[]" id="nilai_akhir_pekerjaan_konsultan_pengawas_kontruksi_aspek9" class="form-control form-control-sm" readonly style="width: 60px;"></td>
                                                    </tr>
                                                    <!-- Ke empat -->
                                                    <tr>

                                                        <td rowspan="2">4</td>
                                                        <td rowspan="2">Jadwal Dan Waktu
                                                            (10%)
                                                        </td>
                                                        <td>Pelaksanaan Pekerjaan sesuai Jangka Waktu pelaksanaan yang ditetapkan dalam Kontrak. <textarea hidden id="indikator_pekerjaan_konsultan_pengawas_kontruksi10" name="indikator_pekerjaan_konsultan_pengawas_kontruksi[]">Pelaksanaan Pekerjaan sesuai Jangka Waktu pelaksanaan yang ditetapkan dalam Kontrak.</textarea>
                                                        </td>
                                                        <td>5
                                                            <input type="hidden" id="bobot_pekerjaan_konsultan_pengawas_kontruksi10" name="bobot_pekerjaan_konsultan_pengawas_kontruksi[]" value="5">
                                                        </td>
                                                        <td>
                                                            <input type="text" id="penilaian_konsultan_pengawas_kontruksi10" name="penilaian_konsultan_pengawas_kontruksi[]" class="form-control form-control-sm" style="width: 60px;">
                                                        </td>
                                                        <td><input type="text" name="nilai_akhir_pekerjaan_konsultan_pengawas_kontruksi[]" id="nilai_akhir_pekerjaan_konsultan_pengawas_kontruksi_aspek10" class="form-control form-control-sm" readonly style="width: 60px;"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Progres/Prestasi Pekerjaan sesuai Jadwal dan Tidak ada keterlambatan. <textarea hidden id="indikator_pekerjaan_konsultan_pengawas_kontruksi11" name="indikator_pekerjaan_konsultan_pengawas_kontruksi[]">Progres/Prestasi Pekerjaan sesuai Jadwal dan Tidak ada keterlambatan.</textarea>
                                                        </td>
                                                        <td>5
                                                            <input type="hidden" id="bobot_pekerjaan_konsultan_pengawas_kontruksi11" name="bobot_pekerjaan_konsultan_pengawas_kontruksi[]" value="5">
                                                        </td>
                                                        <td>
                                                            <input type="text" id="penilaian_konsultan_pengawas_kontruksi11" name="penilaian_konsultan_pengawas_kontruksi[]" class="form-control form-control-sm" style="width: 60px;">
                                                        </td>
                                                        <td><input type="text" name="nilai_akhir_pekerjaan_konsultan_pengawas_kontruksi[]" id="nilai_akhir_pekerjaan_konsultan_pengawas_kontruksi_aspek11" class="form-control form-control-sm" readonly style="width: 60px;"></td>
                                                    </tr>

                                                    <!-- Ke lima -->
                                                    <tr>

                                                        <td rowspan="4">5</td>
                                                        <td rowspan="4">Pendampingan Pelaksanaan Pekerjaan Konstruks (20%)
                                                        </td>
                                                        <td>Pengawasan Berkala dilakukan rutin sesuai dengan ketentuan kontrak. <textarea hidden id="indikator_pekerjaan_konsultan_pengawas_kontruksi12" name="indikator_pekerjaan_konsultan_pengawas_kontruksi[]">Pengawasan Berkala dilakukan rutin sesuai dengan ketentuan kontrak.</textarea>
                                                        </td>
                                                        <td>5
                                                            <input type="hidden" id="bobot_pekerjaan_konsultan_pengawas_kontruksi12" name="bobot_pekerjaan_konsultan_pengawas_kontruksi[]" value="5">
                                                        </td>
                                                        <td>
                                                            <input type="text" id="penilaian_konsultan_pengawas_kontruksi12" name="penilaian_konsultan_pengawas_kontruksi[]" class="form-control form-control-sm" style="width: 60px;">
                                                        </td>
                                                        <td><input type="text" name="nilai_akhir_pekerjaan_konsultan_pengawas_kontruksi[]" id="nilai_akhir_pekerjaan_konsultan_pengawas_kontruksi_aspek12" class="form-control form-control-sm" readonly style="width: 60px;"></td>

                                                    </tr>
                                                    <tr>
                                                        <td>Tenaga kerja yang ditugaskan memadai untuk pengawasan berkala. <textarea hidden id="indikator_pekerjaan_konsultan_pengawas_kontruksi13" name="indikator_pekerjaan_konsultan_pengawas_kontruksi[]">Tenaga kerja yang ditugaskan memadai untuk pengawasan berkala.</textarea>
                                                        </td>
                                                        <td>5
                                                            <input type="hidden" id="bobot_pekerjaan_konsultan_pengawas_kontruksi13" name="bobot_pekerjaan_konsultan_pengawas_kontruksi[]" value="5">
                                                        </td>
                                                        <td>
                                                            <input type="text" id="penilaian_konsultan_pengawas_kontruksi13" name="penilaian_konsultan_pengawas_kontruksi[]" class="form-control form-control-sm" style="width: 60px;">
                                                        </td>
                                                        <td><input type="text" name="nilai_akhir_pekerjaan_konsultan_pengawas_kontruksi[]" id="nilai_akhir_pekerjaan_konsultan_pengawas_kontruksi_aspek13" class="form-control form-control-sm" readonly style="width: 60px;"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Perubahan gambar, spek, RAB, dan permasalahan dalam pelaksanaan segera ditindaklajuti. <textarea hidden id="indikator_pekerjaan_konsultan_pengawas_kontruksi14" name="indikator_pekerjaan_konsultan_pengawas_kontruksi[]">Perubahan gambar, spek, RAB, dan permasalahan dalam pelaksanaan segera ditindaklajuti.</textarea>
                                                        </td>
                                                        <td>5
                                                            <input type="hidden" id="bobot_pekerjaan_konsultan_pengawas_kontruksi14" name="bobot_pekerjaan_konsultan_pengawas_kontruksi[]" value="5">
                                                        </td>
                                                        <td>
                                                            <input type="text" id="penilaian_konsultan_pengawas_kontruksi14" name="penilaian_konsultan_pengawas_kontruksi[]" class="form-control form-control-sm" style="width: 60px;">
                                                        </td>
                                                        <td><input type="text" name="nilai_akhir_pekerjaan_konsultan_pengawas_kontruksi[]" id="nilai_akhir_pekerjaan_konsultan_pengawas_kontruksi_aspek14" class="form-control form-control-sm" readonly style="width: 60px;"></td>
                                                    </tr>

                                                    <tr>
                                                        <td>Selama pelaksanaan pekerjaan tidak ada teguran,peringatan. <textarea hidden id="indikator_pekerjaan_konsultan_pengawas_kontruksi15" name="indikator_pekerjaan_konsultan_pengawas_kontruksi[]">Selama pelaksanaan pekerjaan tidak ada teguran,peringatan.</textarea>
                                                        </td>
                                                        <td>5
                                                            <input type="hidden" id="bobot_pekerjaan_konsultan_pengawas_kontruksi15" name="bobot_pekerjaan_konsultan_pengawas_kontruksi[]" value="5">
                                                        </td>
                                                        <td>
                                                            <input type="text" id="penilaian_konsultan_pengawas_kontruksi15" name="penilaian_konsultan_pengawas_kontruksi[]" class="form-control form-control-sm" style="width: 60px;">
                                                        </td>
                                                        <td><input type="text" name="nilai_akhir_pekerjaan_konsultan_pengawas_kontruksi[]" id="nilai_akhir_pekerjaan_konsultan_pengawas_kontruksi_aspek15" class="form-control form-control-sm" readonly style="width: 60px;"></td>
                                                    </tr>
                                                    <input type="hidden" name="rating_penilaian_vendor_pekerjaan_konsultan_pengawas_kontruksi">
                                                    <input type="hidden" name="status_rating_pekerjaan_konsultan_pengawas_kontruksi">
                                                    <input type="hidden" name="status_nilai_akhir_pekerjaan_konsultan_pengawas_kontruksi">
                                                    <tfoot>
                                                        <tr class="text-center">
                                                            <td></td>
                                                            <td><b> RATING </b></td>
                                                            <td>
                                                                <div id="status_pekerjaan_konsultan_pengawas_kontruksi">

                                                                </div>
                                                            </td>
                                                            <td colspan="3">
                                                                <div id="bintang_pekerjaan_konsultan_pengawas_kontruksi"></div>
                                                            </td>
                                                        </tr>
                                                    </tfoot>
                                                    <tfoot>
                                                        <tr class="text-center">
                                                            <td></td>
                                                            <td colspan="2"><b> TOTAL NILAI AKHIR </b></td>
                                                            <td><b>100</b></td>
                                                            <td></td>
                                                            <td><input type="number" style="width: 80px;" class="form-control form-control-sm" readonly id="total_nilai_pekerjaan_konsultan_pengawas_kontruksi"></td>
                                                        </tr>
                                                    </tfoot>

                                                    <br>
                                                </table>
                                            </form>
                                        </div><br>
                                        <center>
                                            <div class="row">
                                                <div class="col">
                                                    <a class="btn btn-grad7 text-white btn-sm btn-block" style="box-shadow: 2px 2px 8px 2px black;" href="https://eproc.jmtm.co.id/beranda/penilaian_kinerja"><i class="fas fa fa-arrow-left"></i> Kembali</a>
                                                </div>
                                                <div class="col">
                                                    <div id="save_button_konsultan_pengawas_kontruksi" style="display: none;"> <button type="button" onclick="Simpan_pekerjaan_konsultan_pengawas_kontruksi()" class="btn btn-grad8 text-white btn-sm btn-block">Simpan Penilaian</button></div>
                                                    <div id="warning_button_konsultan_pengawas_kontruksi" style="display: none;"> <button type="button" onclick="Simpan_Warning_pekerjaan_konsultan_pengawas_kontruksi_warning()" class="btn btn-grad10 text-white btn-sm btn-block">warning Penilaian</button></div>
                                                </div>
                                            </div>
                                        </center>
                                    </div>
                                </div>
                            </div>

                            <!-- INI UNTUK JENIS JASA LAINYA -->
                            <div class="tab-pane fade" id="v-pills-jasa_lainya" role="tabpanel" aria-labelledby="v-pills-jasa_lainya-tab">
                                <div class="card" style="box-shadow: 2px 2px 10px 2px black;">
                                    <div class="card-header btn-grad">
                                        <i class="fas fa-chart-line"></i> Penilaian Kinerja Jasa Lainya
                                    </div>
                                    <div class="card-body">
                                        <div style="overflow-x: auto;">
                                            <table class="table" style="font-size: 12px;">
                                                <tr>
                                                    <th>Kode Tender</th>
                                                    <th>: B.02.004.00021.00001.JMTM.071120230003</th>
                                                </tr>
                                                <tr>
                                                    <th>Nama Paket</th>
                                                    <th>: Jasa Pemborongan Pekerjaan Stabilitas Lereng Km 346+100 s.d KM 346+300 A Pada Ruas Jalan Tol Batang-Semarang Tahun 2023</th>
                                                </tr>
                                                <tr>
                                                    <th>Divisi</th>
                                                    <th>: Area Control 4</th>
                                                </tr>
                                                <tr>
                                                    <th>Nama Vendor</th>
                                                    <th>: BANGUN SEJAHTERA, CV</th>
                                                </tr>
                                                <tr>
                                                    <th>Alamat Perusahaan</th>
                                                    <th>: Jl. Sembungan Utara No.266 Ungaran</th>
                                                </tr>
                                                <tr>
                                                    <th>Lokasi Pekerjaan 1</th>
                                                    <th>: Provinsi : JAWA TENGAH <br> : Kabupaten : KABUPATEN BATANG <br> : Alamat : Lereng Km 346+100 s.d KM 346+300 A Pada Ruas Jalan Tol Batang-Semarang </th>
                                                </tr>
                                                <tr>
                                                    <th>Nilai Kontrak</th>
                                                    <th>: Rp 1.808.137.830,00 </th>
                                                </tr>
                                                <tr>
                                                    <th>Nomor Kontrak</th>
                                                    <th>&nbsp;
                                                        <div class="row">
                                                            <input style="width: 200px;height:30px" type="text" name="nomor_kontrak5" value="" id="nomor_kontrak5" placeholder="Nomor Kontrak..." class="form-control form-control-sm ml-2"><input style="width: 200px;height:30px" type="text" name="tanggal_nomor_kontak5" value="" id="tanggal_nomor_kontak5" placeholder="Tanggal" class="form-control form-control-sm ml-1">
                                                        </div>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th>Jangka Waktu Pelaksanaan</th>
                                                    <th>
                                                        <div class="row">
                                                            <input style="width: 200px;height:30px" type="text" name="jangka_mulai5" placeholder="Tanggal Mulai" value="" id="jangka_mulai5" class="form-control form-control-sm ml-2 mr-1"><label for="" class="text-small mt-1">S/D</label> <input style="width: 200px;height:30px" type="text" value="" name="jangka_selesai5" id="jangka_selesai5" placeholder="Tanggal Selesai" class="form-control form-control-sm ml-1">
                                                        </div>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th>Metode Pemilihan</th>
                                                    <th>: TENDER TERBATAS</th>
                                                </tr>
                                            </table><br>
                                            <div class="alert alert-success" role="alert">
                                                <img src="https://eproc.jmtm.co.id/assets/img/aman2.png" width="70px" alt="">
                                                <label for="">Vendor Ini Aman / Tiadak Memiliki Warning !!!</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="card" style="box-shadow: 2px 2px 10px 2px black;">
                                    <div class="card-header btn-grad">
                                        <i class="fas fa-chart-line"></i> Table Penilaian Kinerja Jasa Lainya
                                    </div>
                                    <div class="card-body">
                                        <div style="overflow-x: auto;">
                                            <form action="" id="form_tambah_pekerjaan_konsultan_jasa_lainya_kontruksi">
                                                <input type="hidden" name="id_paket" value="1443">
                                                <input type="hidden" name="id_vendor" value="896">
                                                <table id="nilai_tbl" class="table table-bordered">
                                                    <tr class="btn-grad">
                                                        <th>No</th>
                                                        <th>Aspek Kerja</th>
                                                        <th>Indikator</th>
                                                        <th>Bobot(%)</th>
                                                        <th>Penilaian</th>
                                                        <th>Nilai Akhir</th>
                                                    </tr>
                                                    <tr>

                                                        <td rowspan="3">1</td>
                                                        <td rowspan="3">Administrasi
                                                            (15%)</td>
                                                        <!-- ketika update  -->
                                                        <td>
                                                            Kantor, Studio, dan sarana prasarana perusahan memadai untuk melaksanakan pekerjaan/sesuai kualifikasi. <textarea id="indikator_pekerjaan_konsultan_jasa_lainya_kontruksi1" hidden name="indikator_pekerjaan_konsultan_jasa_lainya_kontruksi[]">Kantor, Studio, dan sarana prasarana perusahan memadai untuk melaksanakan pekerjaan/sesuai kualifikasi.</textarea>
                                                        </td>
                                                        <td>5
                                                            <input type="hidden" id="bobot_pekerjaan_konsultan_jasa_lainya_kontruksi1" name="bobot_pekerjaan_konsultan_jasa_lainya_kontruksi[]" value="5">
                                                        </td>
                                                        <td>
                                                            <input type="text" id="penilaian_konsultan_jasa_lainya_kontruksi1" name="penilaian_konsultan_jasa_lainya_kontruksi[]" class="form-control form-control-sm" style="width: 60px;">
                                                        </td>
                                                        <td><input type="text" name="nilai_akhir_pekerjaan_konsultan_jasa_lainya_kontruksi[]" id="nilai_akhir_pekerjaan_konsultan_jasa_lainya_kontruksi_aspek1" class="form-control form-control-sm" readonly style="width: 60px;"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Ketaatan dalam penyelesaian Administrasi Keuangan (termin, pajak, jaminan, dll). <textarea id="indikator_pekerjaan_konsultan_jasa_lainya_kontruksi2" name="indikator_pekerjaan_konsultan_jasa_lainya_kontruksi[]" hidden>Ketaatan dalam penyelesaian Administrasi Keuangan (termin, pajak, jaminan, dll).                                                                                    </textarea>
                                                        </td>
                                                        <td>5
                                                            <input type="hidden" id="bobot_pekerjaan_konsultan_jasa_lainya_kontruksi2" name="bobot_pekerjaan_konsultan_jasa_lainya_kontruksi[]" value="5">
                                                        </td>
                                                        <td>
                                                            <input type="text" id="penilaian_konsultan_jasa_lainya_kontruksi2" name="penilaian_konsultan_jasa_lainya_kontruksi[]" class="form-control form-control-sm" style="width: 60px;">
                                                        </td>
                                                        <td><input type="text" name="nilai_akhir_pekerjaan_konsultan_jasa_lainya_kontruksi[]" id="nilai_akhir_pekerjaan_konsultan_jasa_lainya_kontruksi_aspek2" class="form-control form-control-sm" readonly style="width: 60px;"></td>


                                                    </tr>
                                                    <tr>
                                                        <td>Organisasi (pengurus, tenaga ahli, tenaga administrasi, tenaga teknis) perusahan memadai/sesuai dengan kualifikasi. <textarea hidden id="indikator_pekerjaan_konsultan_jasa_lainya_kontruksi3" name="indikator_pekerjaan_konsultan_jasa_lainya_kontruksi[]">Organisasi (pengurus, tenaga ahli, tenaga administrasi, tenaga teknis) perusahan memadai/sesuai dengan kualifikasi.</textarea>
                                                        </td>
                                                        <td>5
                                                            <input type="hidden" id="bobot_pekerjaan_konsultan_jasa_lainya_kontruksi3" name="bobot_pekerjaan_konsultan_jasa_lainya_kontruksi[]" value="5">
                                                        </td>
                                                        <td>
                                                            <input type="text" id="penilaian_konsultan_jasa_lainya_kontruksi3" name="penilaian_konsultan_jasa_lainya_kontruksi[]" class="form-control form-control-sm" style="width: 60px;">
                                                        </td>
                                                        <td><input type=" text" name="nilai_akhir_pekerjaan_konsultan_jasa_lainya_kontruksi[]" id="nilai_akhir_pekerjaan_konsultan_jasa_lainya_kontruksi_aspek3" class="form-control form-control-sm" readonly style="width: 60px;">
                                                        </td>
                                                    </tr>
                                                    <!-- Kedua -->
                                                    <tr>

                                                        <td rowspan="3">2</td>
                                                        <td rowspan="3">Tenaga Ahli Dan Tenaga Teknis (30%)</td>

                                                        <td>Tenaga Ahli dan Tenaga Teknis yang ditugaskan sesuai dengan yang diusulkan. <textarea hidden id="indikator_pekerjaan_konsultan_jasa_lainya_kontruksi4" name="indikator_pekerjaan_konsultan_jasa_lainya_kontruksi[]">Tenaga Ahli dan Tenaga Teknis yang ditugaskan sesuai dengan yang diusulkan.</textarea>
                                                        </td>
                                                        <td>10
                                                            <input type="hidden" id="bobot_pekerjaan_konsultan_jasa_lainya_kontruksi4" name="bobot_pekerjaan_konsultan_jasa_lainya_kontruksi[]" value="10">
                                                        </td>
                                                        <td>
                                                            <input type="text" id="penilaian_konsultan_jasa_lainya_kontruksi4" name="penilaian_konsultan_jasa_lainya_kontruksi[]" class="form-control form-control-sm" style="width: 60px;">
                                                        </td>
                                                        <td><input type=" text" name="nilai_akhir_pekerjaan_konsultan_jasa_lainya_kontruksi[]" id="nilai_akhir_pekerjaan_konsultan_jasa_lainya_kontruksi_aspek4" class="form-control form-control-sm" readonly style="width: 60px;">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tenaga Ahli dan Tenaga Teknis memiliki kemampuan sesuai dengan kualifikasi pekerjaan. <textarea hidden id="indikator_pekerjaan_konsultan_jasa_lainya_kontruksi5" name="indikator_pekerjaan_konsultan_jasa_lainya_kontruksi[]">Tenaga Ahli dan Tenaga Teknis memiliki kemampuan sesuai dengan kualifikasi pekerjaan.</textarea>
                                                        </td>
                                                        <td>10
                                                            <input type="hidden" id="bobot_pekerjaan_konsultan_jasa_lainya_kontruksi5" name="bobot_pekerjaan_konsultan_jasa_lainya_kontruksi[]" value="10">
                                                        </td>
                                                        <td>

                                                            <input type="text" id="penilaian_konsultan_jasa_lainya_kontruksi5" name="penilaian_konsultan_jasa_lainya_kontruksi[]" class="form-control form-control-sm" style="width: 60px;">
                                                        </td>
                                                        <td><input type="text" name="nilai_akhir_pekerjaan_konsultan_jasa_lainya_kontruksi[]" id="nilai_akhir_pekerjaan_konsultan_jasa_lainya_kontruksi_aspek5" class="form-control form-control-sm" readonly style="width: 60px;"></td>

                                                    </tr>
                                                    <tr>
                                                        <td>Kuantitas Personel sesuai kontrak. <textarea hidden id="indikator_pekerjaan_konsultan_jasa_lainya_kontruksi6" name="indikator_pekerjaan_konsultan_jasa_lainya_kontruksi[]">Kuantitas Personel sesuai kontrak.</textarea>
                                                        </td>
                                                        <td>10
                                                            <input type="hidden" id="bobot_pekerjaan_konsultan_jasa_lainya_kontruksi6" name="bobot_pekerjaan_konsultan_jasa_lainya_kontruksi[]" value="10">
                                                        </td>
                                                        <td>

                                                            <input type="text" id="penilaian_konsultan_jasa_lainya_kontruksi6" name="penilaian_konsultan_jasa_lainya_kontruksi[]" class="form-control form-control-sm" style="width: 60px;">
                                                        </td>
                                                        <td><input type="text" name="nilai_akhir_pekerjaan_konsultan_jasa_lainya_kontruksi[]" id="nilai_akhir_pekerjaan_konsultan_jasa_lainya_kontruksi_aspek6" class="form-control form-control-sm" readonly style="width: 60px;"></td>

                                                    </tr>
                                                    <!-- Ketiga -->
                                                    <tr>

                                                        <td rowspan="2">3</td>
                                                        <td rowspan="2">Bahan
                                                            (10%)
                                                        </td>
                                                        <td>Kualitas bahan sesuai kontrak. <textarea hidden id="indikator_pekerjaan_konsultan_jasa_lainya_kontruksi7" name="indikator_pekerjaan_konsultan_jasa_lainya_kontruksi[]">Kualitas bahan sesuai kontrak.</textarea>
                                                        </td>
                                                        <td>5
                                                            <input type="hidden" id="bobot_pekerjaan_konsultan_jasa_lainya_kontruksi7" name="bobot_pekerjaan_konsultan_jasa_lainya_kontruksi[]" value="5">
                                                        </td>
                                                        <td>
                                                            <input type="text" id="penilaian_konsultan_jasa_lainya_kontruksi7" name="penilaian_konsultan_jasa_lainya_kontruksi[]" class="form-control form-control-sm" style="width: 60px;">
                                                        </td>
                                                        <td><input type="text" name="nilai_akhir_pekerjaan_konsultan_jasa_lainya_kontruksi[]" id="nilai_akhir_pekerjaan_konsultan_jasa_lainya_kontruksi_aspek7" class="form-control form-control-sm" readonly style="width: 60px;"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Volume bahan sesuai kontrak. <textarea hidden id="indikator_pekerjaan_konsultan_jasa_lainya_kontruksi8" name="indikator_pekerjaan_konsultan_jasa_lainya_kontruksi[]">Volume bahan sesuai kontrak.</textarea>
                                                        </td>
                                                        <td>5
                                                            <input type="hidden" id="bobot_pekerjaan_konsultan_jasa_lainya_kontruksi8" name="bobot_pekerjaan_konsultan_jasa_lainya_kontruksi[]" value="5">
                                                        </td>
                                                        <td>
                                                            <input type="text" id="penilaian_konsultan_jasa_lainya_kontruksi8" name="penilaian_konsultan_jasa_lainya_kontruksi[]" class="form-control form-control-sm" style="width: 60px;">
                                                        </td>
                                                        <td><input type="text" name="nilai_akhir_pekerjaan_konsultan_jasa_lainya_kontruksi[]" id="nilai_akhir_pekerjaan_konsultan_jasa_lainya_kontruksi_aspek8" class="form-control form-control-sm" readonly style="width: 60px;"></td>
                                                    </tr>
                                                    <!-- Ke empat -->
                                                    <tr>

                                                        <td rowspan="2">4</td>
                                                        <td rowspan="2">Peralatan
                                                            (10%)
                                                        </td>
                                                        <td>Kualitas peralatan sesuai kontrak. <textarea hidden id="indikator_pekerjaan_konsultan_jasa_lainya_kontruksi9" name="indikator_pekerjaan_konsultan_jasa_lainya_kontruksi[]">Kualitas peralatan sesuai kontrak.</textarea>
                                                        </td>
                                                        <td>5
                                                            <input type="hidden" id="bobot_pekerjaan_konsultan_jasa_lainya_kontruksi9" name="bobot_pekerjaan_konsultan_jasa_lainya_kontruksi[]" value="5">
                                                        </td>
                                                        <td>
                                                            <input type="text" id="penilaian_konsultan_jasa_lainya_kontruksi9" name="penilaian_konsultan_jasa_lainya_kontruksi[]" class="form-control form-control-sm" style="width: 60px;">
                                                        </td>
                                                        <td><input type="text" name="nilai_akhir_pekerjaan_konsultan_jasa_lainya_kontruksi[]" id="nilai_akhir_pekerjaan_konsultan_jasa_lainya_kontruksi_aspek9" class="form-control form-control-sm" readonly style="width: 60px;"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Volume peralatan sesuai kontrak. <textarea hidden id="indikator_pekerjaan_konsultan_jasa_lainya_kontruksi10" name="indikator_pekerjaan_konsultan_jasa_lainya_kontruksi[]">Volume peralatan sesuai kontrak.</textarea>
                                                        </td>
                                                        <td>5
                                                            <input type="hidden" id="bobot_pekerjaan_konsultan_jasa_lainya_kontruksi10" name="bobot_pekerjaan_konsultan_jasa_lainya_kontruksi[]" value="5">
                                                        </td>
                                                        <td>
                                                            <input type="text" id="penilaian_konsultan_jasa_lainya_kontruksi10" name="penilaian_konsultan_jasa_lainya_kontruksi[]" class="form-control form-control-sm" style="width: 60px;">
                                                        </td>
                                                        <td><input type="text" name="nilai_akhir_pekerjaan_konsultan_jasa_lainya_kontruksi[]" id="nilai_akhir_pekerjaan_konsultan_jasa_lainya_kontruksi_aspek10" class="form-control form-control-sm" readonly style="width: 60px;"></td>
                                                    </tr>

                                                    <!-- Ke lima -->
                                                    <tr>
                                                        <td rowspan="2">5</td>
                                                        <td rowspan="2">Jadwal Dan Waktu (10%)
                                                        </td>
                                                        <td>Pelaksanaan Pekerjaan sesuai Jangka Waktu pelaksanaan yang ditetapkan dalam kontrak. <textarea hidden id="indikator_pekerjaan_konsultan_jasa_lainya_kontruksi11" name="indikator_pekerjaan_konsultan_jasa_lainya_kontruksi[]">Pelaksanaan Pekerjaan sesuai Jangka Waktu pelaksanaan yang ditetapkan dalam kontrak.</textarea>
                                                        </td>
                                                        <td>5
                                                            <input type="hidden" id="bobot_pekerjaan_konsultan_jasa_lainya_kontruksi11" name="bobot_pekerjaan_konsultan_jasa_lainya_kontruksi[]" value="5">
                                                        </td>
                                                        <td>
                                                            <input type="text" id="penilaian_konsultan_jasa_lainya_kontruksi11" name="penilaian_konsultan_jasa_lainya_kontruksi[]" class="form-control form-control-sm" style="width: 60px;">
                                                        </td>
                                                        <td><input type="text" name="nilai_akhir_pekerjaan_konsultan_jasa_lainya_kontruksi[]" id="nilai_akhir_pekerjaan_konsultan_jasa_lainya_kontruksi_aspek11" class="form-control form-control-sm" readonly style="width: 60px;"></td>

                                                    </tr>
                                                    <tr>
                                                        <td>Prestasi Pekerjaan sesuai Jadwal dan Tidak ada keterlambatan (Progress pekerjaan). <textarea hidden id="indikator_pekerjaan_konsultan_jasa_lainya_kontruksi12" name="indikator_pekerjaan_konsultan_jasa_lainya_kontruksi[]">Prestasi Pekerjaan sesuai Jadwal dan Tidak ada keterlambatan (Progress pekerjaan).</textarea>
                                                        </td>
                                                        <td>5
                                                            <input type="hidden" id="bobot_pekerjaan_konsultan_jasa_lainya_kontruksi12" name="bobot_pekerjaan_konsultan_jasa_lainya_kontruksi[]" value="5">
                                                        </td>
                                                        <td>
                                                            <input type="text" id="penilaian_konsultan_jasa_lainya_kontruksi12" name="penilaian_konsultan_jasa_lainya_kontruksi[]" class="form-control form-control-sm" style="width: 60px;">
                                                        </td>
                                                        <td><input type="text" name="nilai_akhir_pekerjaan_konsultan_jasa_lainya_kontruksi[]" id="nilai_akhir_pekerjaan_konsultan_jasa_lainya_kontruksi_aspek12" class="form-control form-control-sm" readonly style="width: 60px;"></td>
                                                    </tr>
                                                    <!-- Enam -->
                                                    <tr>
                                                        <td rowspan="1">6</td>
                                                        <td rowspan="1">Kualitas Hasil Pekerjaan (25%)
                                                        </td>
                                                        <td>Kualitas/spesifikasi hasil pekerjaan sesuai kontrak. <textarea hidden id="indikator_pekerjaan_konsultan_jasa_lainya_kontruksi13" name="indikator_pekerjaan_konsultan_jasa_lainya_kontruksi[]">Kualitas/spesifikasi hasil pekerjaan sesuai kontrak.</textarea>
                                                        </td>
                                                        <td>25
                                                            <input type="hidden" id="bobot_pekerjaan_konsultan_jasa_lainya_kontruksi13" name="bobot_pekerjaan_konsultan_jasa_lainya_kontruksi[]" value="25">
                                                        </td>
                                                        <td>
                                                            <input type="text" id="penilaian_konsultan_jasa_lainya_kontruksi13" name="penilaian_konsultan_jasa_lainya_kontruksi[]" class="form-control form-control-sm" style="width: 60px;">
                                                        </td>
                                                        <td><input type="text" name="nilai_akhir_pekerjaan_konsultan_jasa_lainya_kontruksi[]" id="nilai_akhir_pekerjaan_konsultan_jasa_lainya_kontruksi_aspek13" class="form-control form-control-sm" readonly style="width: 60px;"></td>
                                                    </tr>
                                                    <input type="hidden" name="rating_penilaian_vendor_pekerjaan_konsultan_jasa_lainya_kontruksi">
                                                    <input type="hidden" name="status_rating_pekerjaan_konsultan_jasa_lainya_kontruksi">
                                                    <input type="hidden" name="status_nilai_akhir_pekerjaan_konsultan_jasa_lainya_kontruksi">
                                                    <tfoot>
                                                        <tr class="text-center">
                                                            <td></td>
                                                            <td><b> RATING </b></td>
                                                            <td>
                                                                <div id="status_pekerjaan_konsultan_jasa_lainya_kontruksi">

                                                                </div>
                                                            </td>
                                                            <td colspan="3">
                                                                <div id="bintang_pekerjaan_konsultan_jasa_lainya_kontruksi"></div>
                                                            </td>
                                                        </tr>
                                                    </tfoot>
                                                    <tfoot>
                                                        <tr class="text-center">
                                                            <td></td>
                                                            <td colspan="2"><b> TOTAL NILAI AKHIR </b></td>
                                                            <td><b>100</b></td>
                                                            <td></td>
                                                            <td><input type="number" style="width: 80px;" class="form-control form-control-sm" readonly id="total_nilai_pekerjaan_konsultan_jasa_lainya_kontruksi"></td>
                                                        </tr>
                                                    </tfoot>

                                                    <br>
                                                </table>
                                            </form>
                                        </div><br>
                                        <center>
                                            <div class="row">
                                                <div class="col">
                                                    <a class="btn btn-grad7 text-white btn-sm btn-block" style="box-shadow: 2px 2px 8px 2px black;" href="https://eproc.jmtm.co.id/beranda/penilaian_kinerja"><i class="fas fa fa-arrow-left"></i> Kembali</a>
                                                </div>
                                                <div class="col">
                                                    <div id="save_button_konsultan_jasa_lainya_kontruksi" style="display: none;"> <button type="button" onclick="Simpan_pekerjaan_konsultan_jasa_lainya_kontruksi()" class="btn btn-grad8 text-white btn-sm btn-block">Simpan Penilaian</button></div>
                                                    <div id="warning_button_konsultan_jasa_lainya_kontruksi" style="display: none;"> <button type="button" onclick="Simpan_Warning_pekerjaan_konsultan_jasa_lainya_kontruksi_warning()" class="btn btn-grad10 text-white btn-sm btn-block">warning Penilaian</button></div>
                                                </div>
                                            </div>
                                        </center>
                                    </div>
                                </div>
                            </div>


                            <!-- INI UNTUK BAGIAN PENYEDIA BARANG DAN JASA -->
                            <div class="tab-pane fade" id="v-pills-penyedia_barang" role="tabpanel" aria-labelledby="v-pills-penyedia_barang-tab">
                                <div class="card" style="box-shadow: 2px 2px 10px 2px black;">
                                    <div class="card-header btn-grad">
                                        <i class="fas fa-chart-line"></i> Penilaian Penyedia Barang
                                    </div>
                                    <div class="card-body">
                                        <div style="overflow-x: auto;">
                                            <table class="table" style="font-size: 12px;">
                                                <tr>
                                                    <th>Kode Tender</th>
                                                    <th>: B.02.004.00021.00001.JMTM.071120230003</th>
                                                </tr>
                                                <tr>
                                                    <th>Nama Paket</th>
                                                    <th>: Jasa Pemborongan Pekerjaan Stabilitas Lereng Km 346+100 s.d KM 346+300 A Pada Ruas Jalan Tol Batang-Semarang Tahun 2023</th>
                                                </tr>
                                                <tr>
                                                    <th>Divisi</th>
                                                    <th>: Area Control 4</th>
                                                </tr>
                                                <tr>
                                                    <th>Nama Vendor</th>
                                                    <th>: BANGUN SEJAHTERA, CV</th>
                                                </tr>
                                                <tr>
                                                    <th>Alamat Perusahaan</th>
                                                    <th>: Jl. Sembungan Utara No.266 Ungaran</th>
                                                </tr>
                                                <tr>
                                                    <th>Lokasi Pekerjaan 1</th>
                                                    <th>: Provinsi : JAWA TENGAH <br> : Kabupaten : KABUPATEN BATANG <br> : Alamat : Lereng Km 346+100 s.d KM 346+300 A Pada Ruas Jalan Tol Batang-Semarang </th>
                                                </tr>
                                                <tr>
                                                    <th>Nilai Kontrak</th>
                                                    <th>: Rp 1.808.137.830,00 </th>
                                                </tr>
                                                <tr>
                                                    <th>Nomor Kontrak</th>
                                                    <th>&nbsp;
                                                        <div class="row">
                                                            <input style="width: 200px;height:30px" type="text" name="nomor_kontrak6" value="" id="nomor_kontrak6" placeholder="Nomor Kontrak..." class="form-control form-control-sm ml-2"><input style="width: 200px;height:30px" type="text" name="tanggal_nomor_kontak6" value="" id="tanggal_nomor_kontak6" placeholder="Tanggal" class="form-control form-control-sm ml-1">
                                                        </div>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th>Jangka Waktu Pelaksanaan</th>
                                                    <th>
                                                        <div class="row">
                                                            <input style="width: 200px;height:30px" type="text" name="jangka_mulai6" placeholder="Tanggal Mulai" value="" id="jangka_mulai6" class="form-control form-control-sm ml-2 mr-1"><label for="" class="text-small mt-1">S/D</label> <input style="width: 200px;height:30px" type="text" value="" name="jangka_selesai6" id="jangka_selesai6" placeholder="Tanggal Selesai" class="form-control form-control-sm ml-1">
                                                        </div>
                                                    </th>
                                                </tr>
                                                <tr>
                                                    <th>Metode Pemilihan</th>
                                                    <th>: TENDER TERBATAS</th>
                                                </tr>
                                            </table><br>
                                            <div class="alert alert-success" role="alert">
                                                <img src="https://eproc.jmtm.co.id/assets/img/aman2.png" width="70px" alt="">
                                                <label for="">Vendor Ini Aman / Tiadak Memiliki Warning !!!</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="card" style="box-shadow: 2px 2px 10px 2px black;">
                                    <div class="card-header btn-grad">
                                        <i class="fas fa-chart-line"></i> Table Penilaian Penyedia Barang
                                    </div>
                                    <div class="card-body">
                                        <div style="overflow-x: auto;">
                                            <form action="" id="form_tambah_pekerjaan_konsultan_penyedia_barang_kontruksi">
                                                <input type="hidden" name="id_paket" value="1443">
                                                <input type="hidden" name="id_vendor" value="896">
                                                <table id="nilai_tbl" class="table table-bordered">
                                                    <tr class="btn-grad">
                                                        <th>No</th>
                                                        <th>Aspek Kerja</th>
                                                        <th>Indikator</th>
                                                        <th>Bobot(%)</th>
                                                        <th>Penilaian</th>
                                                        <th>Nilai Akhir</th>
                                                    </tr>
                                                    <tr>

                                                        <td rowspan="3">1</td>
                                                        <td rowspan="3">Administrasi
                                                            (15%)</td>
                                                        <!-- ketika update  -->
                                                        <td>
                                                            Kantor, Studio, dan sarana prasarana perusahan memadai untuk melaksanakan pekerjaan/sesuai kualifikasi. <textarea id="indikator_pekerjaan_konsultan_penyedia_barang_kontruksi1" hidden name="indikator_pekerjaan_konsultan_penyedia_barang_kontruksi[]">Kantor, Studio, dan sarana prasarana perusahan memadai untuk melaksanakan pekerjaan/sesuai kualifikasi.</textarea>
                                                        </td>
                                                        <td>5
                                                            <input type="hidden" id="bobot_pekerjaan_konsultan_penyedia_barang_kontruksi1" name="bobot_pekerjaan_konsultan_penyedia_barang_kontruksi[]" value="5">
                                                        </td>
                                                        <td>
                                                            <input type="text" id="penilaian_konsultan_penyedia_barang_kontruksi1" name="penilaian_konsultan_penyedia_barang_kontruksi[]" class="form-control form-control-sm" style="width: 60px;">
                                                        </td>
                                                        <td><input type="text" name="nilai_akhir_pekerjaan_konsultan_penyedia_barang_kontruksi[]" id="nilai_akhir_pekerjaan_konsultan_penyedia_barang_kontruksi_aspek1" class="form-control form-control-sm" readonly style="width: 60px;"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            Ketaatan dalam penyelesaian Administrasi Keuangan (termin, pajak, jaminan, dll). <textarea id="indikator_pekerjaan_konsultan_penyedia_barang_kontruksi2" name="indikator_pekerjaan_konsultan_penyedia_barang_kontruksi[]" hidden>Ketaatan dalam penyelesaian Administrasi Keuangan (termin, pajak, jaminan, dll).                                                                                    </textarea>
                                                        </td>
                                                        <td>5
                                                            <input type="hidden" id="bobot_pekerjaan_konsultan_penyedia_barang_kontruksi2" name="bobot_pekerjaan_konsultan_penyedia_barang_kontruksi[]" value="5">
                                                        </td>
                                                        <td>
                                                            <input type="text" id="penilaian_konsultan_penyedia_barang_kontruksi2" name="penilaian_konsultan_penyedia_barang_kontruksi[]" class="form-control form-control-sm" style="width: 60px;">
                                                        </td>
                                                        <td><input type="text" name="nilai_akhir_pekerjaan_konsultan_penyedia_barang_kontruksi[]" id="nilai_akhir_pekerjaan_konsultan_penyedia_barang_kontruksi_aspek2" class="form-control form-control-sm" readonly style="width: 60px;"></td>


                                                    </tr>
                                                    <tr>
                                                        <td>Organisasi (pengurus, tenaga ahli, tenaga administrasi, tenaga teknis) perusahan memadai/sesuai dengan kualifikasi. <textarea hidden id="indikator_pekerjaan_konsultan_penyedia_barang_kontruksi3" name="indikator_pekerjaan_konsultan_penyedia_barang_kontruksi[]">Organisasi (pengurus, tenaga ahli, tenaga administrasi, tenaga teknis) perusahan memadai/sesuai dengan kualifikasi.</textarea>
                                                        </td>
                                                        <td>5
                                                            <input type="hidden" id="bobot_pekerjaan_konsultan_penyedia_barang_kontruksi3" name="bobot_pekerjaan_konsultan_penyedia_barang_kontruksi[]" value="5">
                                                        </td>
                                                        <td>
                                                            <input type="text" id="penilaian_konsultan_penyedia_barang_kontruksi3" name="penilaian_konsultan_penyedia_barang_kontruksi[]" class="form-control form-control-sm" style="width: 60px;">
                                                        </td>
                                                        <td><input type=" text" name="nilai_akhir_pekerjaan_konsultan_penyedia_barang_kontruksi[]" id="nilai_akhir_pekerjaan_konsultan_penyedia_barang_kontruksi_aspek3" class="form-control form-control-sm" readonly style="width: 60px;">
                                                        </td>
                                                    </tr>
                                                    <!-- Kedua -->
                                                    <tr>

                                                        <td rowspan="2">2</td>
                                                        <td rowspan="2">Tenaga Ahli Dan Tenaga Teknis (10%)</td>
                                                        <td>Tenaga Ahli dan Tenaga Teknis yang ditugaskan sesuai dengan yang diusulkan. <textarea hidden id="indikator_pekerjaan_konsultan_penyedia_barang_kontruksi4" name="indikator_pekerjaan_konsultan_penyedia_barang_kontruksi[]">Tenaga Ahli dan Tenaga Teknis yang ditugaskan sesuai dengan yang diusulkan.</textarea>
                                                        </td>
                                                        <td>5
                                                            <input type="hidden" id="bobot_pekerjaan_konsultan_penyedia_barang_kontruksi4" name="bobot_pekerjaan_konsultan_penyedia_barang_kontruksi[]" value="5">
                                                        </td>
                                                        <td>
                                                            <input type="text" id="penilaian_konsultan_penyedia_barang_kontruksi4" name="penilaian_konsultan_penyedia_barang_kontruksi[]" class="form-control form-control-sm" style="width: 60px;">
                                                        </td>
                                                        <td><input type=" text" name="nilai_akhir_pekerjaan_konsultan_penyedia_barang_kontruksi[]" id="nilai_akhir_pekerjaan_konsultan_penyedia_barang_kontruksi_aspek4" class="form-control form-control-sm" readonly style="width: 60px;">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>Tenaga Ahli dan Tenaga Teknis memiliki kemampuan sesuai dengan kualifikasi pekerjaan. <textarea hidden id="indikator_pekerjaan_konsultan_penyedia_barang_kontruksi5" name="indikator_pekerjaan_konsultan_penyedia_barang_kontruksi[]">Tenaga Ahli dan Tenaga Teknis memiliki kemampuan sesuai dengan kualifikasi pekerjaan.</textarea>
                                                        </td>
                                                        <td>5
                                                            <input type="hidden" id="bobot_pekerjaan_konsultan_penyedia_barang_kontruksi5" name="bobot_pekerjaan_konsultan_penyedia_barang_kontruksi[]" value="5">
                                                        </td>
                                                        <td>

                                                            <input type="text" id="penilaian_konsultan_penyedia_barang_kontruksi5" name="penilaian_konsultan_penyedia_barang_kontruksi[]" class="form-control form-control-sm" style="width: 60px;">
                                                        </td>
                                                        <td><input type="text" name="nilai_akhir_pekerjaan_konsultan_penyedia_barang_kontruksi[]" id="nilai_akhir_pekerjaan_konsultan_penyedia_barang_kontruksi_aspek5" class="form-control form-control-sm" readonly style="width: 60px;"></td>

                                                    </tr>
                                                    <!-- Ketiga -->
                                                    <tr>

                                                        <td rowspan="3">3</td>
                                                        <td rowspan="3">BaKualitas Dan Kuantitas Produk
                                                            (60%)
                                                        </td>
                                                        <td>Kualitas/Spesifikasi barang yang dikirim sesuai kontrak. <textarea hidden id="indikator_pekerjaan_konsultan_penyedia_barang_kontruksi6" name="indikator_pekerjaan_konsultan_penyedia_barang_kontruksi[]">Kualitas/Spesifikasi barang yang dikirim sesuai kontrak.</textarea>
                                                        </td>
                                                        <td>25
                                                            <input type="hidden" id="bobot_pekerjaan_konsultan_penyedia_barang_kontruksi6" name="bobot_pekerjaan_konsultan_penyedia_barang_kontruksi[]" value="25">
                                                        </td>
                                                        <td>
                                                            <input type="text" id="penilaian_konsultan_penyedia_barang_kontruksi6" name="penilaian_konsultan_penyedia_barang_kontruksi[]" class="form-control form-control-sm" style="width: 60px;">
                                                        </td>
                                                        <td><input type="text" name="nilai_akhir_pekerjaan_konsultan_penyedia_barang_kontruksi[]" id="nilai_akhir_pekerjaan_konsultan_penyedia_barang_kontruksi_aspek6" class="form-control form-control-sm" readonly style="width: 60px;"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Kuantitas barang yang dikirim sesuai kontrak. <textarea hidden id="indikator_pekerjaan_konsultan_penyedia_barang_kontruksi7" name="indikator_pekerjaan_konsultan_penyedia_barang_kontruksi[]">Kuantitas barang yang dikirim sesuai kontrak.</textarea>
                                                        </td>
                                                        <td>25
                                                            <input type="hidden" id="bobot_pekerjaan_konsultan_penyedia_barang_kontruksi7" name="bobot_pekerjaan_konsultan_penyedia_barang_kontruksi[]" value="25">
                                                        </td>
                                                        <td>
                                                            <input type="text" id="penilaian_konsultan_penyedia_barang_kontruksi7" name="penilaian_konsultan_penyedia_barang_kontruksi[]" class="form-control form-control-sm" style="width: 60px;">
                                                        </td>
                                                        <td><input type="text" name="nilai_akhir_pekerjaan_konsultan_penyedia_barang_kontruksi[]" id="nilai_akhir_pekerjaan_konsultan_penyedia_barang_kontruksi_aspek7" class="form-control form-control-sm" readonly style="width: 60px;"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Sertifikat Garansi Barang/Jaminan Purna Jual. <textarea hidden id="indikator_pekerjaan_konsultan_penyedia_barang_kontruksi8" name="indikator_pekerjaan_konsultan_penyedia_barang_kontruksi[]">Sertifikat Garansi Barang/Jaminan Purna Jual.</textarea>
                                                        </td>
                                                        <td>10
                                                            <input type="hidden" id="bobot_pekerjaan_konsultan_penyedia_barang_kontruksi8" name="bobot_pekerjaan_konsultan_penyedia_barang_kontruksi[]" value="10">
                                                        </td>
                                                        <td>
                                                            <input type="text" id="penilaian_konsultan_penyedia_barang_kontruksi8" name="penilaian_konsultan_penyedia_barang_kontruksi[]" class="form-control form-control-sm" style="width: 60px;">
                                                        </td>
                                                        <td><input type="text" name="nilai_akhir_pekerjaan_konsultan_penyedia_barang_kontruksi[]" id="nilai_akhir_pekerjaan_konsultan_penyedia_barang_kontruksi_aspek8" class="form-control form-control-sm" readonly style="width: 60px;"></td>
                                                    </tr>
                                                    <!-- Ke empat -->
                                                    <tr>

                                                        <td rowspan="2">4</td>
                                                        <td rowspan="2">Jadwal Dan Waktu
                                                            (10%)
                                                        </td>
                                                        <td>Pelaksanaan Pekerjaan sesuai Jangka Waktu pelaksanaan yang ditetapkan dalam kontrak. <textarea hidden id="indikator_pekerjaan_konsultan_penyedia_barang_kontruksi9" name="indikator_pekerjaan_konsultan_penyedia_barang_kontruksi[]">Pelaksanaan Pekerjaan sesuai Jangka Waktu pelaksanaan yang ditetapkan dalam kontrak.</textarea>
                                                        </td>
                                                        <td>5
                                                            <input type="hidden" id="bobot_pekerjaan_konsultan_penyedia_barang_kontruksi9" name="bobot_pekerjaan_konsultan_penyedia_barang_kontruksi[]" value="5">
                                                        </td>
                                                        <td>
                                                            <input type="text" id="penilaian_konsultan_penyedia_barang_kontruksi9" name="penilaian_konsultan_penyedia_barang_kontruksi[]" class="form-control form-control-sm" style="width: 60px;">
                                                        </td>
                                                        <td><input type="text" name="nilai_akhir_pekerjaan_konsultan_penyedia_barang_kontruksi[]" id="nilai_akhir_pekerjaan_konsultan_penyedia_barang_kontruksi_aspek9" class="form-control form-control-sm" readonly style="width: 60px;"></td>
                                                    </tr>
                                                    <tr>
                                                        <td>Pengiriman barang sesuai Jadwal dan Tidak ada keterlambatan (Progress pekerjaan). <textarea hidden id="indikator_pekerjaan_konsultan_penyedia_barang_kontruksi10" name="indikator_pekerjaan_konsultan_penyedia_barang_kontruksi[]">Pengiriman barang sesuai Jadwal dan Tidak ada keterlambatan (Progress pekerjaan).</textarea>
                                                        </td>
                                                        <td>5
                                                            <input type="hidden" id="bobot_pekerjaan_konsultan_penyedia_barang_kontruksi10" name="bobot_pekerjaan_konsultan_penyedia_barang_kontruksi[]" value="10">
                                                        </td>
                                                        <td>
                                                            <input type="text" id="penilaian_konsultan_penyedia_barang_kontruksi10" name="penilaian_konsultan_penyedia_barang_kontruksi[]" class="form-control form-control-sm" style="width: 60px;">
                                                        </td>
                                                        <td><input type="text" name="nilai_akhir_pekerjaan_konsultan_penyedia_barang_kontruksi[]" id="nilai_akhir_pekerjaan_konsultan_penyedia_barang_kontruksi_aspek10" class="form-control form-control-sm" readonly style="width: 60px;"></td>
                                                    </tr>
                                                    <input type="hidden" name="rating_penilaian_vendor_pekerjaan_konsultan_penyedia_barang_kontruksi">
                                                    <input type="hidden" name="status_rating_pekerjaan_konsultan_penyedia_barang_kontruksi">
                                                    <input type="hidden" name="status_nilai_akhir_pekerjaan_konsultan_penyedia_barang_kontruksi">
                                                    <tfoot>
                                                        <tr class="text-center">
                                                            <td></td>
                                                            <td><b> RATING </b></td>
                                                            <td>
                                                                <div id="status_pekerjaan_konsultan_penyedia_barang_kontruksi">

                                                                </div>
                                                            </td>
                                                            <td colspan="3">
                                                                <div id="bintang_pekerjaan_konsultan_penyedia_barang_kontruksi"></div>
                                                            </td>
                                                        </tr>
                                                    </tfoot>
                                                    <tfoot>
                                                        <tr class="text-center">
                                                            <td></td>
                                                            <td colspan="2"><b> TOTAL NILAI AKHIR </b></td>
                                                            <td><b>100</b></td>
                                                            <td></td>
                                                            <td><input type="number" style="width: 80px;" class="form-control form-control-sm" readonly id="total_nilai_pekerjaan_konsultan_penyedia_barang_kontruksi"></td>
                                                        </tr>
                                                    </tfoot>

                                                    <br>
                                                </table>
                                            </form>
                                        </div><br>
                                        <center>
                                            <div class="row">
                                                <div class="col">
                                                    <a class="btn btn-grad7 text-white btn-sm btn-block" style="box-shadow: 2px 2px 8px 2px black;" href="https://eproc.jmtm.co.id/beranda/penilaian_kinerja"><i class="fas fa fa-arrow-left"></i> Kembali</a>
                                                </div>
                                                <div class="col">
                                                    <div id="save_button_konsultan_penyedia_barang_kontruksi" style="display: none;"> <button type="button" onclick="Simpan_pekerjaan_konsultan_penyedia_barang_kontruksi()" class="btn btn-grad8 text-white btn-sm btn-block">Simpan Penilaian</button></div>
                                                    <div id="warning_button_konsultan_penyedia_barang_kontruksi" style="display: none;"> <button type="button" onclick="Simpan_Warning_pekerjaan_konsultan_penyedia_barang_kontruksi_warning()" class="btn btn-grad10 text-white btn-sm btn-block">warning Penilaian</button></div>
                                                </div>
                                            </div>
                                        </center>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="footer" style="background-image: linear-gradient(to top, rgb(252, 252, 252), rgb(75, 136, 250));color:black;">
        <div class="container">
            <div id="footerInfo">
                <div id="infoRight">
                    <p>&copy; 2021 E-Procurement Jasamarga Tollroad Maintenance(<a href="#" target="_blank">JMTM</a>)</p>
                </div>
            </div>
        </div>
    </div>


    <!-- Jquery -->


    <!-- Bootstrap -->
    <script type="text/javascript" src="https://eproc.jmtm.co.id/assets/boostrapnew/dist/js/bootstrap.min.js"></script>


    <!-- dataTables -->
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <!-- select2 -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <!-- custom js -->
    <script type="text/javascript" src="https://eproc.jmtm.co.id/assets/kintek.js"></script>
    <script type="text/javascript" src="https://eproc.jmtm.co.id/assets/datetimepicekernew/plugins/jquery.datetimepicker.full.min.js"></script>
    <script>
        // jam digital
        function jam() {
            setInterval(function() {

                var waktu = new Date();
                var jam = document.getElementById('jam4');
                var hours = waktu.getHours();
                var minutes = waktu.getMinutes();
                var seconds = waktu.getSeconds();

                if (waktu.getHours() < 10) {
                    hours = '0' + waktu.getHours();
                }
                if (waktu.getMinutes() < 10) {
                    minutes = '0' + waktu.getMinutes();
                }
                if (waktu.getSeconds() < 10) {
                    seconds = '0' + waktu.getSeconds();
                }
                jam.innerHTML = '<span>' + hours + ':</span>' +
                    '<span>' + minutes + ':</span>' +
                    '<span>' + seconds + '</span>';
            }, 1000);
        }

        jam();
    </script>


    <script>
        $(document).ready(function() {
            window.setTimeout(function() {
                $(".preloader").fadeTo(500, 0).slideUp(500, function() {
                    $(this).remove();
                });
            }, 2000)
        })
    </script>
</body>

</html><!-- INI BATAS PENILAIAN KONTRUKSI ===================================================================================================================================== -->

<!-- AJAX BARUUU TAMBAH REVISI -->
<script>
    function message2(icon, text) {
        swal({
            title: "Good Jobs!!!",
            text: text,
            icon: icon,
        });
    }

    function message5(icon, text) {
        swal({
            title: "Anda Berhasil Mereset Nilai!!!",
            text: text,
            icon: icon,
        });
    }
    var form_tambah_pekerjaan_kontruksi = $('#form_tambah_pekerjaan_kontruksi');

    function Simpan_pekerjaan_kontruksi() {
        $.ajax({
            method: "POST",
            url: 'https://eproc.jmtm.co.id/beranda/tambah_pekerjaan_kontruksisaya',
            data: form_tambah_pekerjaan_kontruksi.serialize(),
            dataType: "JSON",
            success: function(response) {
                if (response == 'success') {
                    message2('success', 'Penilaian Berhasil Di Buat!!');
                    location.reload();
                }
            },
        })
    }

    var form_tambah_pekerjaan_kontruksi = $('#form_tambah_pekerjaan_kontruksi');

    function Simpan_Warning_pekerjaan_kontruksi_warning() {
        $.ajax({
            method: "POST",
            url: 'https://eproc.jmtm.co.id/beranda/tambah_warning_pekerjaan_kontruksisaya',
            data: form_tambah_pekerjaan_kontruksi.serialize(),
            dataType: "JSON",
            beforeSend: function() {
                $("#kirim_ke_vendor").css('display', 'block');
            },
            success: function(response) {
                $("#kirim_ke_vendor").css('display', 'none');
                window.open('https://api.whatsapp.com/send?phone=+62' + response['telpon'] + '&text=Laporan Penilaian Kinerja Vendor Nama Paket  : ' + response['paket'].nama_paket + ' Dengan Metode Pemilihan : ' + response['paket'].nama_metode_pemilihan + '  Agency : ' + response['paket'].nama_unit_kerja + ', Info : ' + response['isi'] + '', '_blank');
                message2('success', 'Penilaian Berhasil Di Buat');
                location.reload();
            },
        })
    }

    var form_tambah_pekerjaan_kontruksi_reset = $('#form_tambah_pekerjaan_kontruksi');

    function Reset_nilai_pekerjaan_kontruksi() {
        $.ajax({
            method: "POST",
            url: 'https://eproc.jmtm.co.id/beranda/reset_penilaian_performance_pekerjaan_kontruksi',
            data: form_tambah_pekerjaan_kontruksi_reset.serialize(),
            dataType: "JSON",
            beforeSend: function() {
                $("#kirim_ke_vendor").css('display', 'block');
            },
            success: function(response) {
                $("#kirim_ke_vendor").css('display', 'none');
                window.open('https://api.whatsapp.com/send?phone=+62' + response['telpon'] + '&text=Laporan Penilaian Kinerja Vendor Nama Paket  : ' + response['paket'].nama_paket + ' Dengan Metode Pemilihan : ' + response['paket'].nama_metode_pemilihan + '  Agency : ' + response['paket'].nama_unit_kerja + ', Info : ' + response['isi'] + '', '_blank');
                message5('success', 'Penilaian Berhasil Di Reset');
                location.reload();
            },
        })
    }
</script>


<!-- INI UNTUK VALIDASI ANGKANYA Bagian UPDATE-->
<script>
    function message(icon, text) {
        swal({
            title: "Maaf Tidak Boleh Huruf Yaa !!!",
            text: text,
            icon: icon,
        });
    }

    function message_gak_boleh_lebih_angkanya(icon, text) {
        swal({
            title: "Maaf Angka Penilaian Tidak Boleh Lebih Dari 100 Yaa !!!",
            text: text,
            icon: icon,
        });
    }

    $('#penilaian_kontruksi_update1').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_kontruksi_update1').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_kontruksi_update1").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_kontruksi_update1 = $('#penilaian_kontruksi_update1').val();
                if (penilaian_kontruksi_update1.match(validasiHuruf)) {
                    $('#penilaian_kontruksi_update1').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_kontruksi_update1').css('border-color', 'green');
                    $('#penilaian_kontruksi_update1').val(penilaian_kontruksi_update1);

                }

            };

        }
    });

    $('#penilaian_kontruksi_update2').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_kontruksi_update2').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_kontruksi_update2").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_kontruksi_update1 = $('#penilaian_kontruksi_update2').val();
                if (penilaian_kontruksi_update1.match(validasiHuruf)) {
                    $('#penilaian_kontruksi_update2').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_kontruksi_update2').css('border-color', 'green');
                    $('#penilaian_kontruksi_update2').val(penilaian_kontruksi_update1);

                }

            };

        }
    });
    $('#penilaian_kontruksi_update3').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_kontruksi_update3').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_kontruksi_update3").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_kontruksi_update1 = $('#penilaian_kontruksi_update3').val();
                if (penilaian_kontruksi_update1.match(validasiHuruf)) {
                    $('#penilaian_kontruksi_update3').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_kontruksi_update3').css('border-color', 'green');
                    $('#penilaian_kontruksi_update3').val(penilaian_kontruksi_update1);

                }

            };

        }
    });
    $('#penilaian_kontruksi_update4').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_kontruksi_update4').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_kontruksi_update4").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_kontruksi_update1 = $('#penilaian_kontruksi_update4').val();
                if (penilaian_kontruksi_update1.match(validasiHuruf)) {
                    $('#penilaian_kontruksi_update4').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_kontruksi_update4').css('border-color', 'green');
                    $('#penilaian_kontruksi_update4').val(penilaian_kontruksi_update1);

                }

            };

        }
    });
    $('#penilaian_kontruksi_update5').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_kontruksi_update5').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_kontruksi_update5").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_kontruksi_update1 = $('#penilaian_kontruksi_update5').val();
                if (penilaian_kontruksi_update1.match(validasiHuruf)) {
                    $('#penilaian_kontruksi_update5').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_kontruksi_update5').css('border-color', 'green');
                    $('#penilaian_kontruksi_update5').val(penilaian_kontruksi_update1);

                }

            };

        }
    });
    $('#penilaian_kontruksi_update6').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_kontruksi_update6').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_kontruksi_update6").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_kontruksi_update1 = $('#penilaian_kontruksi_update6').val();
                if (penilaian_kontruksi_update1.match(validasiHuruf)) {
                    $('#penilaian_kontruksi_update6').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_kontruksi_update6').css('border-color', 'green');
                    $('#penilaian_kontruksi_update6').val(penilaian_kontruksi_update1);

                }

            };

        }
    });
    $('#penilaian_kontruksi_update7').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_kontruksi_update7').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_kontruksi_update7").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_kontruksi_update1 = $('#penilaian_kontruksi_update7').val();
                if (penilaian_kontruksi_update1.match(validasiHuruf)) {
                    $('#penilaian_kontruksi_update7').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_kontruksi_update7').css('border-color', 'green');
                    $('#penilaian_kontruksi_update7').val(penilaian_kontruksi_update1);

                }

            };

        }
    });
    $('#penilaian_kontruksi_update8').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_kontruksi_update8').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_kontruksi_update8").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_kontruksi_update1 = $('#penilaian_kontruksi_update8').val();
                if (penilaian_kontruksi_update1.match(validasiHuruf)) {
                    $('#penilaian_kontruksi_update8').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_kontruksi_update8').css('border-color', 'green');
                    $('#penilaian_kontruksi_update8').val(penilaian_kontruksi_update1);

                }

            };

        }
    });
    $('#penilaian_kontruksi_update9').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_kontruksi_update9').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_kontruksi_update9").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_kontruksi_update1 = $('#penilaian_kontruksi_update9').val();
                if (penilaian_kontruksi_update1.match(validasiHuruf)) {
                    $('#penilaian_kontruksi_update9').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_kontruksi_update9').css('border-color', 'green');
                    $('#penilaian_kontruksi_update9').val(penilaian_kontruksi_update1);

                }

            };

        }
    });
    $('#penilaian_kontruksi_update10').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_kontruksi_update10').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_kontruksi_update10").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_kontruksi_update1 = $('#penilaian_kontruksi_update10').val();
                if (penilaian_kontruksi_update1.match(validasiHuruf)) {
                    $('#penilaian_kontruksi_update10').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_kontruksi_update10').css('border-color', 'green');
                    $('#penilaian_kontruksi_update10').val(penilaian_kontruksi_update1);

                }

            };

        }
    });
    $('#penilaian_kontruksi_update11').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_kontruksi_update11').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_kontruksi_update11").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_kontruksi_update1 = $('#penilaian_kontruksi_update11').val();
                if (penilaian_kontruksi_update1.match(validasiHuruf)) {
                    $('#penilaian_kontruksi_update11').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_kontruksi_update11').css('border-color', 'green');
                    $('#penilaian_kontruksi_update11').val(penilaian_kontruksi_update1);

                }

            };

        }
    });
    $('#penilaian_kontruksi_update12').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_kontruksi_update12').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_kontruksi_update12").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_kontruksi_update1 = $('#penilaian_kontruksi_update12').val();
                if (penilaian_kontruksi_update1.match(validasiHuruf)) {
                    $('#penilaian_kontruksi_update12').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_kontruksi_update12').css('border-color', 'green');
                    $('#penilaian_kontruksi_update12').val(penilaian_kontruksi_update1);

                }

            };

        }
    });
    $('#penilaian_kontruksi_update13').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_kontruksi_update13').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_kontruksi_update13").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_kontruksi_update1 = $('#penilaian_kontruksi_update13').val();
                if (penilaian_kontruksi_update1.match(validasiHuruf)) {
                    $('#penilaian_kontruksi_update13').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_kontruksi_update13').css('border-color', 'green');
                    $('#penilaian_kontruksi_update13').val(penilaian_kontruksi_update1);

                }

            };

        }
    });
    $('#penilaian_kontruksi_update14').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_kontruksi_update14').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_kontruksi_update14").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_kontruksi_update1 = $('#penilaian_kontruksi_update14').val();
                if (penilaian_kontruksi_update1.match(validasiHuruf)) {
                    $('#penilaian_kontruksi_update14').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_kontruksi_update14').css('border-color', 'green');
                    $('#penilaian_kontruksi_update14').val(penilaian_kontruksi_update1);

                }

            };

        }
    });
    $('#penilaian_kontruksi_update15').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_kontruksi_update15').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_kontruksi_update15").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_kontruksi_update1 = $('#penilaian_kontruksi_update15').val();
                if (penilaian_kontruksi_update1.match(validasiHuruf)) {
                    $('#penilaian_kontruksi_update15').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_kontruksi_update15').css('border-color', 'green');
                    $('#penilaian_kontruksi_update15').val(penilaian_kontruksi_update1);

                }

            };

        }
    });
    $('#penilaian_kontruksi_update16').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_kontruksi_update16').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_kontruksi_update16").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_kontruksi_update1 = $('#penilaian_kontruksi_update16').val();
                if (penilaian_kontruksi_update1.match(validasiHuruf)) {
                    $('#penilaian_kontruksi_update16').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_kontruksi_update16').css('border-color', 'green');
                    $('#penilaian_kontruksi_update16').val(penilaian_kontruksi_update1);

                }

            };

        }
    });
    $('#penilaian_kontruksi_update17').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_kontruksi_update17').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_kontruksi_update17").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_kontruksi_update1 = $('#penilaian_kontruksi_update17').val();
                if (penilaian_kontruksi_update1.match(validasiHuruf)) {
                    $('#penilaian_kontruksi_update17').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_kontruksi_update17').css('border-color', 'green');
                    $('#penilaian_kontruksi_update17').val(penilaian_kontruksi_update1);

                }

            };

        }
    });
</script>


<!-- INI UNTUK VALIDASI ANGKANYA Bagian tambah-->
<script>
    function message(icon, text) {
        swal({
            title: "Maaf Tidak Boleh Huruf Yaa !!!",
            text: text,
            icon: icon,
        });
    }

    function message_gak_boleh_lebih_angkanya(icon, text) {
        swal({
            title: "Maaf Angka Penilaian Tidak Boleh Lebih Dari 100 Yaa !!!",
            text: text,
            icon: icon,
        });
    }
    $('#penilaian_kontruksi1').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_kontruksi1').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_kontruksi1").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_kontruksi1 = $('#penilaian_kontruksi1').val();
                if (penilaian_kontruksi1.match(validasiHuruf)) {
                    $('#penilaian_kontruksi1').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_kontruksi1').css('border-color', 'green');
                    $('#penilaian_kontruksi1').val(penilaian_kontruksi1);

                }

            };

        }
    });
    $('#penilaian_kontruksi2').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_kontruksi2').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_kontruksi2").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_kontruksi2 = $('#penilaian_kontruksi2').val();
                if (penilaian_kontruksi2.match(validasiHuruf)) {
                    $('#penilaian_kontruksi2').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_kontruksi2').css('border-color', 'green');
                    $('#penilaian_kontruksi2').val(penilaian_kontruksi2);

                }

            };

        }
    });
    $('#penilaian_kontruksi2').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_kontruksi2').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_kontruksi2").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_kontruksi2 = $('#penilaian_kontruksi2').val();
                if (penilaian_kontruksi2.match(validasiHuruf)) {
                    $('#penilaian_kontruksi2').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_kontruksi2').css('border-color', 'green');
                    $('#penilaian_kontruksi2').val(penilaian_kontruksi2);

                }

            };

        }
    });
    $('#penilaian_kontruksi3').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_kontruksi3').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_kontruksi3").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_kontruksi3 = $('#penilaian_kontruksi3').val();
                if (penilaian_kontruksi3.match(validasiHuruf)) {
                    $('#penilaian_kontruksi3').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_kontruksi3').css('border-color', 'green');
                    $('#penilaian_kontruksi3').val(penilaian_kontruksi3);

                }

            };

        }
    });
    $('#penilaian_kontruksi4').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_kontruksi4').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_kontruksi4").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_kontruksi4 = $('#penilaian_kontruksi2').val();
                if (penilaian_kontruksi4.match(validasiHuruf)) {
                    $('#penilaian_kontruksi4').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_kontruksi4').css('border-color', 'green');
                    $('#penilaian_kontruksi4').val(penilaian_kontruksi4);

                }

            };

        }
    });
    $('#penilaian_kontruksi5').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_kontruksi5').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_kontruksi5").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_kontruksi5 = $('#penilaian_kontruksi2').val();
                if (penilaian_kontruksi5.match(validasiHuruf)) {
                    $('#penilaian_kontruksi5').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_kontruksi5').css('border-color', 'green');
                    $('#penilaian_kontruksi5').val(penilaian_kontruksi5);

                }

            };

        }
    });
    $('#penilaian_kontruksi6').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_kontruksi6').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_kontruksi6").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_kontruksi6 = $('#penilaian_kontruksi6').val();
                if (penilaian_kontruksi6.match(validasiHuruf)) {
                    $('#penilaian_kontruksi6').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_kontruksi6').css('border-color', 'green');
                    $('#penilaian_kontruksi6').val(penilaian_kontruksi6);

                }

            };

        }
    });
    $('#penilaian_kontruksi7').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_kontruksi7').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_kontruksi7").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_kontruksi7 = $('#penilaian_kontruksi7').val();
                if (penilaian_kontruksi7.match(validasiHuruf)) {
                    $('#penilaian_kontruksi7').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_kontruksi7').css('border-color', 'green');
                    $('#penilaian_kontruksi7').val(penilaian_kontruksi7);

                }

            };

        }
    });
    $('#penilaian_kontruksi8').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_kontruksi8').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_kontruksi8").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_kontruksi8 = $('#penilaian_kontruksi8').val();
                if (penilaian_kontruksi8.match(validasiHuruf)) {
                    $('#penilaian_kontruksi8').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_kontruksi8').css('border-color', 'green');
                    $('#penilaian_kontruksi8').val(penilaian_kontruksi8);

                }

            };

        }
    });
    $('#penilaian_kontruksi9').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_kontruksi9').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_kontruksi9").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_kontruksi9 = $('#penilaian_kontruksi9').val();
                if (penilaian_kontruksi9.match(validasiHuruf)) {
                    $('#penilaian_kontruksi9').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_kontruksi9').css('border-color', 'green');
                    $('#penilaian_kontruksi9').val(penilaian_kontruksi9);

                }

            };

        }
    });
    $('#penilaian_kontruksi10').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_kontruksi10').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_kontruksi10").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_kontruksi10 = $('#penilaian_kontruksi10').val();
                if (penilaian_kontruksi10.match(validasiHuruf)) {
                    $('#penilaian_kontruksi10').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_kontruksi10').css('border-color', 'green');
                    $('#penilaian_kontruksi10').val(penilaian_kontruksi10);

                }

            };

        }
    });
    $('#penilaian_kontruksi11').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_kontruksi11').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_kontruksi11").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_kontruksi11 = $('#penilaian_kontruksi11').val();
                if (penilaian_kontruksi11.match(validasiHuruf)) {
                    $('#penilaian_kontruksi11').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_kontruksi11').css('border-color', 'green');
                    $('#penilaian_kontruksi11').val(penilaian_kontruksi11);

                }

            };

        }
    });
    $('#penilaian_kontruksi12').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_kontruksi12').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_kontruksi12").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_kontruksi12 = $('#penilaian_kontruksi12').val();
                if (penilaian_kontruksi12.match(validasiHuruf)) {
                    $('#penilaian_kontruksi12').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_kontruksi12').css('border-color', 'green');
                    $('#penilaian_kontruksi12').val(penilaian_kontruksi12);

                }

            };

        }
    });
    $('#penilaian_kontruksi13').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_kontruksi13').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_kontruksi13").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_kontruksi13 = $('#penilaian_kontruksi13').val();
                if (penilaian_kontruksi13.match(validasiHuruf)) {
                    $('#penilaian_kontruksi13').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_kontruksi13').css('border-color', 'green');
                    $('#penilaian_kontruksi13').val(penilaian_kontruksi13);

                }

            };

        }
    });
    $('#penilaian_kontruksi14').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_kontruksi14').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_kontruksi14").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_kontruksi14 = $('#penilaian_kontruksi14').val();
                if (penilaian_kontruksi14.match(validasiHuruf)) {
                    $('#penilaian_kontruksi14').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_kontruksi14').css('border-color', 'green');
                    $('#penilaian_kontruksi14').val(penilaian_kontruksi14);

                }

            };

        }
    });
    $('#penilaian_kontruksi15').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_kontruksi15').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_kontruksi15").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_kontruksi15 = $('#penilaian_kontruksi15').val();
                if (penilaian_kontruksi15.match(validasiHuruf)) {
                    $('#penilaian_kontruksi15').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_kontruksi15').css('border-color', 'green');
                    $('#penilaian_kontruksi15').val(penilaian_kontruksi15);

                }

            };

        }
    });
    $('#penilaian_kontruksi16').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_kontruksi16').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_kontruksi16").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_kontruksi16 = $('#penilaian_kontruksi16').val();
                if (penilaian_kontruksi16.match(validasiHuruf)) {
                    $('#penilaian_kontruksi16').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_kontruksi16').css('border-color', 'green');
                    $('#penilaian_kontruksi16').val(penilaian_kontruksi16);

                }

            };

        }
    });
    $('#penilaian_kontruksi17').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_kontruksi17').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_kontruksi17").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_kontruksi17 = $('#penilaian_kontruksi17').val();
                if (penilaian_kontruksi17.match(validasiHuruf)) {
                    $('#penilaian_kontruksi17').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_kontruksi17').css('border-color', 'green');
                    $('#penilaian_kontruksi17').val(penilaian_kontruksi17);

                }

            };

        }
    });
</script>


<!-- ININ UNTUK VALIDASI BUTTON dan nilaik akhir TAMBAH -->
<!-- keyup nilai pekerjaan kontruksi -->

<script>
    $(document).ready(function() {
        $("#penilaian_kontruksi1, #penilaian_kontruksi2, #penilaian_kontruksi3, #penilaian_kontruksi4,#penilaian_kontruksi5,#penilaian_kontruksi6,#penilaian_kontruksi7,#penilaian_kontruksi8,#penilaian_kontruksi9,#penilaian_kontruksi10,#penilaian_kontruksi11,#penilaian_kontruksi12,#penilaian_kontruksi13,#penilaian_kontruksi14,#penilaian_kontruksi15,#penilaian_kontruksi16,#penilaian_kontruksi17").keyup(function() {
            // 1
            var bobot_pekerjaan_kontruksi1 = $('#bobot_pekerjaan_kontruksi1').val();
            var penilaian_kontruksi1 = $('#penilaian_kontruksi1').val();
            var nilai_akhir_kontruksi1 = bobot_pekerjaan_kontruksi1 * penilaian_kontruksi1 / 100;
            $('#nilai_akhir_pekerjaan_kontruksi_aspek1').val(parseFloat(nilai_akhir_kontruksi1));
            // 2
            var bobot_pekerjaan_kontruksi2 = $('#bobot_pekerjaan_kontruksi2').val();
            var penilaian_kontruksi2 = $('#penilaian_kontruksi2').val();
            var nilai_akhir_kontruksi2 = bobot_pekerjaan_kontruksi2 * penilaian_kontruksi2 / 100;
            $('#nilai_akhir_pekerjaan_kontruksi_aspek2').val(parseFloat(nilai_akhir_kontruksi2));
            // 3
            var bobot_pekerjaan_kontruksi3 = $('#bobot_pekerjaan_kontruksi3').val();
            var penilaian_kontruksi3 = $('#penilaian_kontruksi3').val();
            var nilai_akhir_kontruksi3 = bobot_pekerjaan_kontruksi3 * penilaian_kontruksi3 / 100;
            $('#nilai_akhir_pekerjaan_kontruksi_aspek3').val(parseFloat(nilai_akhir_kontruksi3));
            // 4
            var bobot_pekerjaan_kontruksi4 = $('#bobot_pekerjaan_kontruksi4').val();
            var penilaian_kontruksi4 = $('#penilaian_kontruksi4').val();
            var nilai_akhir_kontruksi4 = bobot_pekerjaan_kontruksi4 * penilaian_kontruksi4 / 100;
            $('#nilai_akhir_pekerjaan_kontruksi_aspek4').val(parseFloat(nilai_akhir_kontruksi4));
            // 5
            var bobot_pekerjaan_kontruksi5 = $('#bobot_pekerjaan_kontruksi5').val();
            var penilaian_kontruksi5 = $('#penilaian_kontruksi5').val();
            var nilai_akhir_kontruksi5 = bobot_pekerjaan_kontruksi5 * penilaian_kontruksi5 / 100;
            $('#nilai_akhir_pekerjaan_kontruksi_aspek5').val(parseFloat(nilai_akhir_kontruksi5));
            // 6
            var bobot_pekerjaan_kontruksi6 = $('#bobot_pekerjaan_kontruksi6').val();
            var penilaian_kontruksi6 = $('#penilaian_kontruksi6').val();
            var nilai_akhir_kontruksi6 = bobot_pekerjaan_kontruksi6 * penilaian_kontruksi6 / 100;
            $('#nilai_akhir_pekerjaan_kontruksi_aspek6').val(parseFloat(nilai_akhir_kontruksi6));
            // 7
            var bobot_pekerjaan_kontruksi7 = $('#bobot_pekerjaan_kontruksi7').val();
            var penilaian_kontruksi7 = $('#penilaian_kontruksi7').val();
            var nilai_akhir_kontruksi7 = bobot_pekerjaan_kontruksi7 * penilaian_kontruksi7 / 100;
            $('#nilai_akhir_pekerjaan_kontruksi_aspek7').val(parseFloat(nilai_akhir_kontruksi7));
            // 8
            var bobot_pekerjaan_kontruksi8 = $('#bobot_pekerjaan_kontruksi8').val();
            var penilaian_kontruksi8 = $('#penilaian_kontruksi8').val();
            var nilai_akhir_kontruksi8 = bobot_pekerjaan_kontruksi8 * penilaian_kontruksi8 / 100;
            $('#nilai_akhir_pekerjaan_kontruksi_aspek8').val(parseFloat(nilai_akhir_kontruksi8));
            // 9
            var bobot_pekerjaan_kontruksi9 = $('#bobot_pekerjaan_kontruksi9').val();
            var penilaian_kontruksi9 = $('#penilaian_kontruksi9').val();
            var nilai_akhir_kontruksi9 = bobot_pekerjaan_kontruksi9 * penilaian_kontruksi9 / 100;
            $('#nilai_akhir_pekerjaan_kontruksi_aspek9').val(parseFloat(nilai_akhir_kontruksi9));
            // 10
            var bobot_pekerjaan_kontruksi10 = $('#bobot_pekerjaan_kontruksi10').val();
            var penilaian_kontruksi10 = $('#penilaian_kontruksi10').val();
            var nilai_akhir_kontruksi10 = bobot_pekerjaan_kontruksi10 * penilaian_kontruksi10 / 100;
            $('#nilai_akhir_pekerjaan_kontruksi_aspek10').val(parseFloat(nilai_akhir_kontruksi10));
            // 11
            var bobot_pekerjaan_kontruksi11 = $('#bobot_pekerjaan_kontruksi11').val();
            var penilaian_kontruksi11 = $('#penilaian_kontruksi11').val();
            var nilai_akhir_kontruksi11 = bobot_pekerjaan_kontruksi11 * penilaian_kontruksi11 / 100;
            $('#nilai_akhir_pekerjaan_kontruksi_aspek11').val(parseFloat(nilai_akhir_kontruksi11));
            // 12
            var bobot_pekerjaan_kontruksi12 = $('#bobot_pekerjaan_kontruksi12').val();
            var penilaian_kontruksi12 = $('#penilaian_kontruksi12').val();
            var nilai_akhir_kontruksi12 = bobot_pekerjaan_kontruksi12 * penilaian_kontruksi12 / 100;
            $('#nilai_akhir_pekerjaan_kontruksi_aspek12').val(parseFloat(nilai_akhir_kontruksi12));
            // 13
            var bobot_pekerjaan_kontruksi13 = $('#bobot_pekerjaan_kontruksi13').val();
            var penilaian_kontruksi13 = $('#penilaian_kontruksi13').val();
            var nilai_akhir_kontruksi13 = bobot_pekerjaan_kontruksi13 * penilaian_kontruksi13 / 100;
            $('#nilai_akhir_pekerjaan_kontruksi_aspek13').val(parseFloat(nilai_akhir_kontruksi13));
            // 14
            var bobot_pekerjaan_kontruksi14 = $('#bobot_pekerjaan_kontruksi14').val();
            var penilaian_kontruksi14 = $('#penilaian_kontruksi14').val();
            var nilai_akhir_kontruksi14 = bobot_pekerjaan_kontruksi14 * penilaian_kontruksi14 / 100;
            $('#nilai_akhir_pekerjaan_kontruksi_aspek14').val(parseFloat(nilai_akhir_kontruksi14));
            // 15
            var bobot_pekerjaan_kontruksi15 = $('#bobot_pekerjaan_kontruksi15').val();
            var penilaian_kontruksi15 = $('#penilaian_kontruksi15').val();
            var nilai_akhir_kontruksi15 = bobot_pekerjaan_kontruksi15 * penilaian_kontruksi15 / 100;
            $('#nilai_akhir_pekerjaan_kontruksi_aspek15').val(parseFloat(nilai_akhir_kontruksi15));
            // 16
            var bobot_pekerjaan_kontruksi16 = $('#bobot_pekerjaan_kontruksi16').val();
            var penilaian_kontruksi16 = $('#penilaian_kontruksi16').val();
            var nilai_akhir_kontruksi16 = bobot_pekerjaan_kontruksi16 * penilaian_kontruksi16 / 100;
            $('#nilai_akhir_pekerjaan_kontruksi_aspek16').val(parseFloat(nilai_akhir_kontruksi16));
            // 17
            var bobot_pekerjaan_kontruksi17 = $('#bobot_pekerjaan_kontruksi17').val();
            var penilaian_kontruksi17 = $('#penilaian_kontruksi17').val();
            var nilai_akhir_kontruksi17 = bobot_pekerjaan_kontruksi17 * penilaian_kontruksi17 / 100;
            $('#nilai_akhir_pekerjaan_kontruksi_aspek17').val(parseFloat(nilai_akhir_kontruksi17));

            var total = parseFloat(nilai_akhir_kontruksi1) + parseFloat(nilai_akhir_kontruksi2) + parseFloat(nilai_akhir_kontruksi3) + parseFloat(nilai_akhir_kontruksi4) + parseFloat(nilai_akhir_kontruksi5) + parseFloat(nilai_akhir_kontruksi6) + parseFloat(nilai_akhir_kontruksi7) + parseFloat(nilai_akhir_kontruksi8) + parseFloat(nilai_akhir_kontruksi9) + parseFloat(nilai_akhir_kontruksi10) + parseFloat(nilai_akhir_kontruksi11) + parseFloat(nilai_akhir_kontruksi12) + parseFloat(nilai_akhir_kontruksi13) + parseFloat(nilai_akhir_kontruksi14) + parseFloat(nilai_akhir_kontruksi15) + parseFloat(nilai_akhir_kontruksi16) + parseFloat(nilai_akhir_kontruksi17);
            var total_button = $("#total_nilai_pekerjaan_kontruksi").val(total);
            if (total <= 50) {
                $('[name="rating_penilaian_vendor_pekerjaan_kontruksi"]').val(4);
                $('[name="status_rating_pekerjaan_kontruksi"]').val('sangat kurang');
                $('[name="status_nilai_akhir_pekerjaan_kontruksi"]').val(total);
                $('#status_pekerjaan_kontruksi').html('<label for="" class="badge badge-danger">Kurang Baik</label>');
                $('#warning_button').show();
                $('#save_button').hide();
                $('#bintang_pekerjaan_kontruksi').html('');
            } else if (total <= 70) {
                $('[name="rating_penilaian_vendor_pekerjaan_kontruksi"]').val(1);
                $('[name="status_rating_pekerjaan_kontruksi"]').val('cukup baik');
                $('[name="status_nilai_akhir_pekerjaan_kontruksi"]').val(total);
                $('#save_button').show();
                $('#warning_button').hide();
                $('#status_pekerjaan_kontruksi').html('<label for="" class="badge badge-warning">Cukup Baik</label>');
                $('#bintang_pekerjaan_kontruksi').html('<i class="fas fa fa-star text-warning"></i>');
            } else if (total <= 80) {
                $('[name="rating_penilaian_vendor_pekerjaan_kontruksi"]').val(2);
                $('[name="status_rating_pekerjaan_kontruksi"]').val('baik');
                $('[name="status_nilai_akhir_pekerjaan_kontruksi"]').val(total);
                $('#save_button').show();
                $('#warning_button').hide();
                $('#status_pekerjaan_kontruksi').html('<label for="" class="badge badge-warning">Baik</label>');
                $('#bintang_pekerjaan_kontruksi').html('<i class="fas fa fa-star text-warning"></i><i class="fas fa fa-star text-warning"></i>');
            } else {
                $('[name="rating_penilaian_vendor_pekerjaan_kontruksi"]').val(3);
                $('[name="status_rating_pekerjaan_kontruksi"]').val('sangat baik');
                $('[name="status_nilai_akhir_pekerjaan_kontruksi"]').val(total);
                $('#save_button').show();
                $('#warning_button').hide();
                $('#status_pekerjaan_kontruksi').html('<label for="" class="badge badge-success">Sangat Baik</label>');
                $('#bintang_pekerjaan_kontruksi').html('<i class="fas fa fa-star text-warning"></i><i class="fas fa fa-star text-warning"></i><i class="fas fa fa-star text-warning"></i>');
            }

        });
    });
</script>
<!-- INI UNTUK UPDATENYA -->
<script>
    function message2(icon, text) {
        swal({
            title: "Good Jobs!!!",
            text: text,
            icon: icon,
        });
    }
    var form_tambah_pekerjaan_kontruksi = $('#form_tambah_pekerjaan_kontruksi');

    function Update_pekerjaan_kontruksi() {
        $.ajax({
            method: "POST",
            url: 'https://eproc.jmtm.co.id/beranda/update_pekerjaan_kontruksisaya',
            data: form_tambah_pekerjaan_kontruksi.serialize(),
            dataType: "JSON",
            success: function(response) {
                if (response == 'success') {
                    message2('success', 'Penilaian Berhasil Di Update!!');
                    location.reload();
                }
            },
        })
    }
    var form_tambah_pekerjaan_kontruksi_awrningku = $('#form_tambah_pekerjaan_kontruksi');

    function Update_warning_pekerjaan_kontruksi() {
        $.ajax({
            method: "POST",
            url: 'https://eproc.jmtm.co.id/beranda/Update_warning_pekerjaan_kontruksi',
            data: form_tambah_pekerjaan_kontruksi_awrningku.serialize(),
            dataType: "JSON",
            success: function(response) {
                if (response == 'success') {
                    message2('success', 'Penilaian Berhasil Di Update!!');
                    location.reload();
                }
            },
        })
    }
</script>



<!-- ININ UNTUK VALIDASI BUTTON dan nilaik akhir Update -->
<!-- keyup nilai pekerjaan kontruksi -->
<!-- <script>
    $(document).ready(function() {
        $("#penilaian_kontruksi_update1, #penilaian_kontruksi_update2, #penilaian_kontruksi_update3, #penilaian_kontruksi_update4,#penilaian_kontruksi_update5,#penilaian_kontruksi_update6,#penilaian_kontruksi_update7,#penilaian_kontruksi_update8,#penilaian_kontruksi_update9,#penilaian_kontruksi_update10,#penilaian_kontruksi_update11,#penilaian_kontruksi_update12,#penilaian_kontruksi_update13,#penilaian_kontruksi_update14,#penilaian_kontruksi_update15,#penilaian_kontruksi_update16,#penilaian_kontruksi_update17").keyup(function() {
            // 1
            var bobot_pekerjaan_kontruksi1 = $('#bobot_pekerjaan_kontruksi_update1').val();
            var penilaian_kontruksi1 = $('#penilaian_kontruksi_update1').val();
            var nilai_akhir_kontruksi1 = bobot_pekerjaan_kontruksi1 * penilaian_kontruksi1 / 100;
            $('#nilai_akhir_pekerjaan_kontruksi_aspek_update1').val(parseFloat(nilai_akhir_kontruksi1));
            // 2
            var bobot_pekerjaan_kontruksi2 = $('#bobot_pekerjaan_kontruksi_update2').val();
            var penilaian_kontruksi2 = $('#penilaian_kontruksi_update2').val();
            var nilai_akhir_kontruksi2 = bobot_pekerjaan_kontruksi2 * penilaian_kontruksi2 / 100;
            $('#nilai_akhir_pekerjaan_kontruksi_aspek_update2').val(parseFloat(nilai_akhir_kontruksi2));
            // 3
            var bobot_pekerjaan_kontruksi3 = $('#bobot_pekerjaan_kontruksi_update3').val();
            var penilaian_kontruksi3 = $('#penilaian_kontruksi_update3').val();
            var nilai_akhir_kontruksi3 = bobot_pekerjaan_kontruksi3 * penilaian_kontruksi3 / 100;
            $('#nilai_akhir_pekerjaan_kontruksi_aspek_update3').val(parseFloat(nilai_akhir_kontruksi3));
            // 4
            var bobot_pekerjaan_kontruksi4 = $('#bobot_pekerjaan_kontruksi_update4').val();
            var penilaian_kontruksi4 = $('#penilaian_kontruksi_update4').val();
            var nilai_akhir_kontruksi4 = bobot_pekerjaan_kontruksi4 * penilaian_kontruksi4 / 100;
            $('#nilai_akhir_pekerjaan_kontruksi_aspek_update4').val(parseFloat(nilai_akhir_kontruksi4));
            // 5
            var bobot_pekerjaan_kontruksi5 = $('#bobot_pekerjaan_kontruksi_update5').val();
            var penilaian_kontruksi5 = $('#penilaian_kontruksi_update5').val();
            var nilai_akhir_kontruksi5 = bobot_pekerjaan_kontruksi5 * penilaian_kontruksi5 / 100;
            $('#nilai_akhir_pekerjaan_kontruksi_aspek_update5').val(parseFloat(nilai_akhir_kontruksi5));
            // 6
            var bobot_pekerjaan_kontruksi6 = $('#bobot_pekerjaan_kontruksi_update6').val();
            var penilaian_kontruksi6 = $('#penilaian_kontruksi_update6').val();
            var nilai_akhir_kontruksi6 = bobot_pekerjaan_kontruksi6 * penilaian_kontruksi6 / 100;
            $('#nilai_akhir_pekerjaan_kontruksi_aspek_update6').val(parseFloat(nilai_akhir_kontruksi6));
            // 7
            var bobot_pekerjaan_kontruksi7 = $('#bobot_pekerjaan_kontruksi_update7').val();
            var penilaian_kontruksi7 = $('#penilaian_kontruksi_update7').val();
            var nilai_akhir_kontruksi7 = bobot_pekerjaan_kontruksi7 * penilaian_kontruksi7 / 100;
            $('#nilai_akhir_pekerjaan_kontruksi_aspek_update7').val(parseFloat(nilai_akhir_kontruksi7));
            // 8
            var bobot_pekerjaan_kontruksi8 = $('#bobot_pekerjaan_kontruksi_update8').val();
            var penilaian_kontruksi8 = $('#penilaian_kontruksi_update8').val();
            var nilai_akhir_kontruksi8 = bobot_pekerjaan_kontruksi8 * penilaian_kontruksi8 / 100;
            $('#nilai_akhir_pekerjaan_kontruksi_aspek_update8').val(parseFloat(nilai_akhir_kontruksi8));
            // 9
            var bobot_pekerjaan_kontruksi9 = $('#bobot_pekerjaan_kontruksi_update9').val();
            var penilaian_kontruksi9 = $('#penilaian_kontruksi_update9').val();
            var nilai_akhir_kontruksi9 = bobot_pekerjaan_kontruksi9 * penilaian_kontruksi9 / 100;
            $('#nilai_akhir_pekerjaan_kontruksi_aspek_update9').val(parseFloat(nilai_akhir_kontruksi9));
            // 10
            var bobot_pekerjaan_kontruksi10 = $('#bobot_pekerjaan_kontruksi_update10').val();
            var penilaian_kontruksi10 = $('#penilaian_kontruksi_update10').val();
            var nilai_akhir_kontruksi10 = bobot_pekerjaan_kontruksi10 * penilaian_kontruksi10 / 100;
            $('#nilai_akhir_pekerjaan_kontruksi_aspek_update10').val(parseFloat(nilai_akhir_kontruksi10));
            // 11
            var bobot_pekerjaan_kontruksi11 = $('#bobot_pekerjaan_kontruksi_update11').val();
            var penilaian_kontruksi11 = $('#penilaian_kontruksi_update11').val();
            var nilai_akhir_kontruksi11 = bobot_pekerjaan_kontruksi11 * penilaian_kontruksi11 / 100;
            $('#nilai_akhir_pekerjaan_kontruksi_aspek_update11').val(parseFloat(nilai_akhir_kontruksi11));
            // 12
            var bobot_pekerjaan_kontruksi12 = $('#bobot_pekerjaan_kontruksi_update12').val();
            var penilaian_kontruksi12 = $('#penilaian_kontruksi_update12').val();
            var nilai_akhir_kontruksi12 = bobot_pekerjaan_kontruksi12 * penilaian_kontruksi12 / 100;
            $('#nilai_akhir_pekerjaan_kontruksi_aspek_update12').val(parseFloat(nilai_akhir_kontruksi12));
            // 13
            var bobot_pekerjaan_kontruksi13 = $('#bobot_pekerjaan_kontruksi_update13').val();
            var penilaian_kontruksi13 = $('#penilaian_kontruksi_update13').val();
            var nilai_akhir_kontruksi13 = bobot_pekerjaan_kontruksi13 * penilaian_kontruksi13 / 100;
            $('#nilai_akhir_pekerjaan_kontruksi_aspek_update13').val(parseFloat(nilai_akhir_kontruksi13));
            // 14
            var bobot_pekerjaan_kontruksi14 = $('#bobot_pekerjaan_kontruksi_update14').val();
            var penilaian_kontruksi14 = $('#penilaian_kontruksi_update14').val();
            var nilai_akhir_kontruksi14 = bobot_pekerjaan_kontruksi14 * penilaian_kontruksi14 / 100;
            $('#nilai_akhir_pekerjaan_kontruksi_aspek_update14').val(parseFloat(nilai_akhir_kontruksi14));
            // 15
            var bobot_pekerjaan_kontruksi15 = $('#bobot_pekerjaan_kontruksi_update15').val();
            var penilaian_kontruksi15 = $('#penilaian_kontruksi_update15').val();
            var nilai_akhir_kontruksi15 = bobot_pekerjaan_kontruksi15 * penilaian_kontruksi15 / 100;
            $('#nilai_akhir_pekerjaan_kontruksi_aspek_update15').val(parseFloat(nilai_akhir_kontruksi15));
            // 16
            var bobot_pekerjaan_kontruksi16 = $('#bobot_pekerjaan_kontruksi_update16').val();
            var penilaian_kontruksi16 = $('#penilaian_kontruksi_update16').val();
            var nilai_akhir_kontruksi16 = bobot_pekerjaan_kontruksi16 * penilaian_kontruksi16 / 100;
            $('#nilai_akhir_pekerjaan_kontruksi_aspek_update16').val(parseFloat(nilai_akhir_kontruksi16));
            // 17
            var bobot_pekerjaan_kontruksi17 = $('#bobot_pekerjaan_kontruksi_update17').val();
            var penilaian_kontruksi17 = $('#penilaian_kontruksi_update17').val();
            var nilai_akhir_kontruksi17 = bobot_pekerjaan_kontruksi17 * penilaian_kontruksi17 / 100;
            $('#nilai_akhir_pekerjaan_kontruksi_aspek_update17').val(parseFloat(nilai_akhir_kontruksi17));

            var total = parseFloat(nilai_akhir_kontruksi1) + parseFloat(nilai_akhir_kontruksi2) + parseFloat(nilai_akhir_kontruksi3) + parseFloat(nilai_akhir_kontruksi4) + parseFloat(nilai_akhir_kontruksi5) + parseFloat(nilai_akhir_kontruksi6) + parseFloat(nilai_akhir_kontruksi7) + parseFloat(nilai_akhir_kontruksi8) + parseFloat(nilai_akhir_kontruksi9) + parseFloat(nilai_akhir_kontruksi10) + parseFloat(nilai_akhir_kontruksi11) + parseFloat(nilai_akhir_kontruksi12) + parseFloat(nilai_akhir_kontruksi13) + parseFloat(nilai_akhir_kontruksi14) + parseFloat(nilai_akhir_kontruksi15) + parseFloat(nilai_akhir_kontruksi16) + parseFloat(nilai_akhir_kontruksi17);
            var total_button = $("#total_nilai_pekerjaan_kontruksi_update").val(total);
            if (total <= 51) {
                $('[name="rating_penilaian_vendor_pekerjaan_kontruksi_update"]').val(4);
                $('[name="status_nilai_akhir_pekerjaan_kontruksi_update"]').val(total);
                $('[name="status_rating_pekerjaan_kontruksi_update"]').val('kurang baik');
                $('#status_pekerjaan_kontruksi_update').html('<label for="" class="badge badge-danger">Kurang Baik</label>');
                $('#warning_button_update').show();
                $('#save_button_update').hide();
                $('#bintang_pekerjaan_kontruksi_update').html('');
            } else if (total <= 70) {
                $('[name="rating_penilaian_vendor_pekerjaan_kontruksi_update"]').val(1);
                $('[name="status_nilai_akhir_pekerjaan_kontruksi_update"]').val(total);
                $('[name="status_rating_pekerjaan_kontruksi_update"]').val('cukup baik');
                $('#save_button_update').show();
                $('#warning_button_update').hide();
                $('#status_pekerjaan_kontruksi_update').html('<label for="" class="badge badge-warning">Cukup Baik</label>');
                $('#bintang_pekerjaan_kontruksi_update').html('<i class="fas fa fa-star text-warning"></i>');
            } else if (total <= 80) {
                $('[name="rating_penilaian_vendor_pekerjaan_kontruksi_update"]').val(2);
                $('[name="status_nilai_akhir_pekerjaan_kontruksi_update"]').val(total);
                $('[name="status_rating_pekerjaan_kontruksi_update"]').val('baik');
                $('#save_button_update').show();
                $('#warning_button_update').hide();
                $('#status_pekerjaan_kontruksi_update').html('<label for="" class="badge badge-warning">Baik</label>');
                $('#bintang_pekerjaan_kontruksi_update').html('<i class="fas fa fa-star text-warning"></i><i class="fas fa fa-star text-warning"></i>');
            } else {
                $('[name="rating_penilaian_vendor_pekerjaan_kontruksi_update"]').val(3);
                $('[name="status_nilai_akhir_pekerjaan_kontruksi_update"]').val(total);
                $('[name="status_rating_pekerjaan_kontruksi_update"]').val('sangat baik');
                $('#save_button_update').show();
                $('#warning_button_update').hide();
                $('#status_pekerjaan_kontruksi_update').html('<label for="" class="badge badge-success">Sangat Baik</label>');
                $('#bintang_pekerjaan_kontruksi_update').html('<i class="fas fa fa-star text-warning"></i><i class="fas fa fa-star text-warning"></i><i class="fas fa fa-star text-warning"></i>');
            }

        });
    });
</script> -->

<!-- INI BATAS PENILAIAN KONTRUKSI ===================================================================================================================================== -->







<!-- INI BATAS PENILAIAN KONSULTAN KONTRUKSI ===================================================================================================================================== -->

<!-- AJAX BARUUU TAMBAH REVISI -->
<script>
    function message3(icon, text) {
        swal({
            title: "Good Jobs!!!",
            text: text,
            icon: icon,
        });
    }

    function message5(icon, text) {
        swal({
            title: "Anda Berhasil Mereset Nilai!!!",
            text: text,
            icon: icon,
        });
    }
    var form_tambah_pekerjaan_konsultan_kontruksi = $('#form_tambah_pekerjaan_konsultan_kontruksi');

    function Simpan_pekerjaan_konsultan_kontruksi() {
        $.ajax({
            method: "POST",
            url: 'https://eproc.jmtm.co.id/beranda/tambah_pekerjaan_konsultan_kontruksisaya',
            data: form_tambah_pekerjaan_konsultan_kontruksi.serialize(),
            dataType: "JSON",
            success: function(response) {
                if (response == 'success') {
                    message3('success', 'Penilaian Berhasil Di Buat!!');
                    location.reload();
                }
            },
        })
    }

    var form_tambah_pekerjaan_konsultan_kontruksi = $('#form_tambah_pekerjaan_konsultan_kontruksi');

    function Simpan_Warning_pekerjaan_konsultan_kontruksi_warning() {
        $.ajax({
            method: "POST",
            url: 'https://eproc.jmtm.co.id/beranda/tambah_warning_pekerjaan_konsultan_kontruksisaya',
            data: form_tambah_pekerjaan_konsultan_kontruksi.serialize(),
            dataType: "JSON",
            beforeSend: function() {
                $("#kirim_ke_vendor").css('display', 'block');
            },
            success: function(response) {
                $("#kirim_ke_vendor").css('display', 'none');
                window.open('https://api.whatsapp.com/send?phone=+62' + response['telpon'] + '&text=Laporan Penilaian Kinerja Vendor Nama Paket  : ' + response['paket'].nama_paket + ' Dengan Metode Pemilihan : ' + response['paket'].nama_metode_pemilihan + '  Agency : ' + response['paket'].nama_unit_kerja + ', Info : ' + response['isi'] + '', '_blank');
                message3('success', 'Penilaian Berhasil Di Buat');
                location.reload();
            },
        })
    }

    var form_tambah_pekerjaan_konsultan_kontruksi_reset = $('#form_tambah_pekerjaan_konsultan_kontruksi');

    function Reset_nilai_pekerjaan_konsultan_kontruksi() {
        $.ajax({
            method: "POST",
            url: 'https://eproc.jmtm.co.id/beranda/reset_penilaian_performance_pekerjaan_konsultan_kontruksi',
            data: form_tambah_pekerjaan_konsultan_kontruksi_reset.serialize(),
            dataType: "JSON",
            beforeSend: function() {
                $("#kirim_ke_vendor").css('display', 'block');
            },
            success: function(response) {
                $("#kirim_ke_vendor").css('display', 'none');
                window.open('https://api.whatsapp.com/send?phone=+62' + response['telpon'] + '&text=Laporan Penilaian Kinerja Vendor Nama Paket  : ' + response['paket'].nama_paket + ' Dengan Metode Pemilihan : ' + response['paket'].nama_metode_pemilihan + '  Agency : ' + response['paket'].nama_unit_kerja + ', Info : ' + response['isi'] + '', '_blank');
                message5('success', 'Penilaian Berhasil Di Reset');
                location.reload();
            },
        })
    }
</script>
<!-- INI UNTUK UPDATENYA -->
<script>
    function message3(icon, text) {
        swal({
            title: "Good Jobs!!!",
            text: text,
            icon: icon,
        });
    }
    var form_tambah_pekerjaan_konsultan_kontruksi = $('#form_tambah_pekerjaan_konsultan_kontruksi');

    function Update_pekerjaan_konsultan_kontruksi() {
        $.ajax({
            method: "POST",
            url: 'https://eproc.jmtm.co.id/beranda/update_pekerjaan_konsultan_kontruksisaya',
            data: form_tambah_pekerjaan_konsultan_kontruksi.serialize(),
            dataType: "JSON",
            success: function(response) {
                if (response == 'success') {
                    message3('success', 'Penilaian Berhasil Di Update!!');
                    location.reload();
                }
            },
        })
    }
</script>


<!-- INI UNTUK VALIDASI ANGKANYA Bagian UPDATE-->
<script>
    function message(icon, text) {
        swal({
            title: "Maaf Tidak Boleh Huruf Yaa !!!",
            text: text,
            icon: icon,
        });
    }

    function message_gak_boleh_lebih_angkanya(icon, text) {
        swal({
            title: "Maaf Angka Penilaian Tidak Boleh Lebih Dari 100 Yaa !!!",
            text: text,
            icon: icon,
        });
    }
    $('#penilaian_konsultan_kontruksi_update1').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_kontruksi_update1').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_kontruksi_update1").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_kontruksi_update1 = $('#penilaian_konsultan_kontruksi_update1').val();
                if (penilaian_konsultan_kontruksi_update1.match(validasiHuruf)) {
                    $('#penilaian_konsultan_kontruksi_update1').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_kontruksi_update1').css('border-color', 'green');
                    $('#penilaian_konsultan_kontruksi_update1').val(penilaian_konsultan_kontruksi_update1);

                }

            };

        }
    });
    $('#penilaian_konsultan_kontruksi_update2').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_kontruksi_update2').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_kontruksi_update2").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_kontruksi_update2 = $('#penilaian_konsultan_kontruksi_update2').val();
                if (penilaian_konsultan_kontruksi_update2.match(validasiHuruf)) {
                    $('#penilaian_konsultan_kontruksi_update2').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_kontruksi_update2').css('border-color', 'green');
                    $('#penilaian_konsultan_kontruksi_update2').val(penilaian_konsultan_kontruksi_update2);

                }

            };

        }
    });

    $('#penilaian_konsultan_kontruksi_update3').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_kontruksi_update3').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_kontruksi_update3").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_kontruksi_update3 = $('#penilaian_konsultan_kontruksi_update3').val();
                if (penilaian_konsultan_kontruksi_update3.match(validasiHuruf)) {
                    $('#penilaian_konsultan_kontruksi_update3').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_kontruksi_update3').css('border-color', 'green');
                    $('#penilaian_konsultan_kontruksi_update3').val(penilaian_konsultan_kontruksi_update3);

                }

            };

        }
    });
    $('#penilaian_konsultan_kontruksi_update4').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_kontruksi_update4').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_kontruksi_update4").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_kontruksi_update4 = $('#penilaian_konsultan_kontruksi_update4').val();
                if (penilaian_konsultan_kontruksi_update4.match(validasiHuruf)) {
                    $('#penilaian_konsultan_kontruksi_update4').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_kontruksi_update4').css('border-color', 'green');
                    $('#penilaian_konsultan_kontruksi_update4').val(penilaian_konsultan_kontruksi_update4);

                }

            };

        }
    });
    $('#penilaian_konsultan_kontruksi_update5').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_kontruksi_update5').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_kontruksi_update5").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_kontruksi_update5 = $('#penilaian_konsultan_kontruksi_update5').val();
                if (penilaian_konsultan_kontruksi_update5.match(validasiHuruf)) {
                    $('#penilaian_konsultan_kontruksi_update5').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_kontruksi_update5').css('border-color', 'green');
                    $('#penilaian_konsultan_kontruksi_update5').val(penilaian_konsultan_kontruksi_update5);

                }

            };

        }
    });
    $('#penilaian_konsultan_kontruksi_update6').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_kontruksi_update6').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_kontruksi_update6").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_kontruksi_update6 = $('#penilaian_konsultan_kontruksi_update6').val();
                if (penilaian_konsultan_kontruksi_update6.match(validasiHuruf)) {
                    $('#penilaian_konsultan_kontruksi_update6').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_kontruksi_update6').css('border-color', 'green');
                    $('#penilaian_konsultan_kontruksi_update6').val(penilaian_konsultan_kontruksi_update6);

                }

            };

        }
    });
    $('#penilaian_konsultan_kontruksi_update7').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_kontruksi_update7').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_kontruksi_update7").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_kontruksi_update7 = $('#penilaian_konsultan_kontruksi_update7').val();
                if (penilaian_konsultan_kontruksi_update7.match(validasiHuruf)) {
                    $('#penilaian_konsultan_kontruksi_update7').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_kontruksi_update7').css('border-color', 'green');
                    $('#penilaian_konsultan_kontruksi_update7').val(penilaian_konsultan_kontruksi_update7);

                }

            };

        }
    });
    $('#penilaian_konsultan_kontruksi_update8').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_kontruksi_update8').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_kontruksi_update8").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_kontruksi_update8 = $('#penilaian_konsultan_kontruksi_update8').val();
                if (penilaian_konsultan_kontruksi_update8.match(validasiHuruf)) {
                    $('#penilaian_konsultan_kontruksi_update8').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_kontruksi_update8').css('border-color', 'green');
                    $('#penilaian_konsultan_kontruksi_update8').val(penilaian_konsultan_kontruksi_update8);

                }

            };

        }
    });
    $('#penilaian_konsultan_kontruksi_update9').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_kontruksi_update9').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_kontruksi_update9").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_kontruksi_update9 = $('#penilaian_konsultan_kontruksi_update9').val();
                if (penilaian_konsultan_kontruksi_update9.match(validasiHuruf)) {
                    $('#penilaian_konsultan_kontruksi_update9').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_kontruksi_update9').css('border-color', 'green');
                    $('#penilaian_konsultan_kontruksi_update9').val(penilaian_konsultan_kontruksi_update9);

                }

            };

        }
    });
    $('#penilaian_konsultan_kontruksi_update10').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_kontruksi_update10').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_kontruksi_update10").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_kontruksi_update10 = $('#penilaian_konsultan_kontruksi_update10').val();
                if (penilaian_konsultan_kontruksi_update10.match(validasiHuruf)) {
                    $('#penilaian_konsultan_kontruksi_update10').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_kontruksi_update10').css('border-color', 'green');
                    $('#penilaian_konsultan_kontruksi_update10').val(penilaian_konsultan_kontruksi_update10);

                }

            };

        }
    });
    $('#penilaian_konsultan_kontruksi_update11').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_kontruksi_update11').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_kontruksi_update11").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_kontruksi_update11 = $('#penilaian_konsultan_kontruksi_update11').val();
                if (penilaian_konsultan_kontruksi_update11.match(validasiHuruf)) {
                    $('#penilaian_konsultan_kontruksi_update11').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_kontruksi_update11').css('border-color', 'green');
                    $('#penilaian_konsultan_kontruksi_update11').val(penilaian_konsultan_kontruksi_update11);

                }

            };

        }
    });
    $('#penilaian_konsultan_kontruksi_update12').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_kontruksi_update12').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_kontruksi_update12").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_kontruksi_update12 = $('#penilaian_konsultan_kontruksi_update12').val();
                if (penilaian_konsultan_kontruksi_update12.match(validasiHuruf)) {
                    $('#penilaian_konsultan_kontruksi_update12').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_kontruksi_update12').css('border-color', 'green');
                    $('#penilaian_konsultan_kontruksi_update12').val(penilaian_konsultan_kontruksi_update12);

                }

            };

        }
    });
    $('#penilaian_konsultan_kontruksi_update13').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_kontruksi_update13').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_kontruksi_update13").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_kontruksi_update13 = $('#penilaian_konsultan_kontruksi_update13').val();
                if (penilaian_konsultan_kontruksi_update13.match(validasiHuruf)) {
                    $('#penilaian_konsultan_kontruksi_update13').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_kontruksi_update13').css('border-color', 'green');
                    $('#penilaian_konsultan_kontruksi_update13').val(penilaian_konsultan_kontruksi_update13);

                }

            };

        }
    });
    $('#penilaian_konsultan_kontruksi_update14').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_kontruksi_update14').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_kontruksi_update14").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_kontruksi_update14 = $('#penilaian_konsultan_kontruksi_update14').val();
                if (penilaian_konsultan_kontruksi_update14.match(validasiHuruf)) {
                    $('#penilaian_konsultan_kontruksi_update14').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_kontruksi_update14').css('border-color', 'green');
                    $('#penilaian_konsultan_kontruksi_update14').val(penilaian_konsultan_kontruksi_update14);

                }

            };

        }
    });
    $('#penilaian_konsultan_kontruksi_update15').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_kontruksi_update15').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_kontruksi_update15").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_kontruksi_update15 = $('#penilaian_konsultan_kontruksi_update15').val();
                if (penilaian_konsultan_kontruksi_update15.match(validasiHuruf)) {
                    $('#penilaian_konsultan_kontruksi_update15').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_kontruksi_update15').css('border-color', 'green');
                    $('#penilaian_konsultan_kontruksi_update15').val(penilaian_konsultan_kontruksi_update15);

                }

            };

        }
    });
</script>


<!-- INI UNTUK VALIDASI ANGKANYA Bagian tambah-->
<script>
    function message(icon, text) {
        swal({
            title: "Maaf Tidak Boleh Huruf Yaa !!!",
            text: text,
            icon: icon,
        });
    }

    function message_gak_boleh_lebih_angkanya(icon, text) {
        swal({
            title: "Maaf Angka Penilaian Tidak Boleh Lebih Dari 100 Yaa !!!",
            text: text,
            icon: icon,
        });
    }
    $('#penilaian_konsultan_kontruksi1').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_kontruksi1').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_kontruksi1").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_kontruksi1 = $('#penilaian_konsultan_kontruksi1').val();
                if (penilaian_konsultan_kontruksi1.match(validasiHuruf)) {
                    $('#penilaian_konsultan_kontruksi1').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_kontruksi1').css('border-color', 'green');
                    $('#penilaian_konsultan_kontruksi1').val(penilaian_konsultan_kontruksi1);

                }

            };

        }
    });
    $('#penilaian_konsultan_kontruksi2').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_kontruksi2').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_kontruksi2").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_kontruksi2 = $('#penilaian_konsultan_kontruksi2').val();
                if (penilaian_konsultan_kontruksi2.match(validasiHuruf)) {
                    $('#penilaian_konsultan_kontruksi2').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_kontruksi2').css('border-color', 'green');
                    $('#penilaian_konsultan_kontruksi2').val(penilaian_konsultan_kontruksi2);

                }

            };

        }
    });

    $('#penilaian_konsultan_kontruksi3').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_kontruksi3').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_kontruksi3").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_kontruksi3 = $('#penilaian_konsultan_kontruksi3').val();
                if (penilaian_konsultan_kontruksi3.match(validasiHuruf)) {
                    $('#penilaian_konsultan_kontruksi3').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_kontruksi3').css('border-color', 'green');
                    $('#penilaian_konsultan_kontruksi3').val(penilaian_konsultan_kontruksi3);

                }

            };

        }
    });
    $('#penilaian_konsultan_kontruksi4').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_kontruksi4').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_kontruksi4").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_kontruksi4 = $('#penilaian_konsultan_kontruksi4').val();
                if (penilaian_konsultan_kontruksi4.match(validasiHuruf)) {
                    $('#penilaian_konsultan_kontruksi4').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_kontruksi4').css('border-color', 'green');
                    $('#penilaian_konsultan_kontruksi4').val(penilaian_konsultan_kontruksi4);

                }

            };

        }
    });
    $('#penilaian_konsultan_kontruksi5').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_kontruksi5').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_kontruksi5").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_kontruksi5 = $('#penilaian_konsultan_kontruksi5').val();
                if (penilaian_konsultan_kontruksi5.match(validasiHuruf)) {
                    $('#penilaian_konsultan_kontruksi5').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_kontruksi5').css('border-color', 'green');
                    $('#penilaian_konsultan_kontruksi5').val(penilaian_konsultan_kontruksi5);

                }

            };

        }
    });
    $('#penilaian_konsultan_kontruksi6').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_kontruksi6').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_kontruksi6").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_kontruksi6 = $('#penilaian_konsultan_kontruksi6').val();
                if (penilaian_konsultan_kontruksi6.match(validasiHuruf)) {
                    $('#penilaian_konsultan_kontruksi6').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_kontruksi6').css('border-color', 'green');
                    $('#penilaian_konsultan_kontruksi6').val(penilaian_konsultan_kontruksi6);

                }

            };

        }
    });
    $('#penilaian_konsultan_kontruksi7').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_kontruksi7').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_kontruksi7").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_kontruksi7 = $('#penilaian_konsultan_kontruksi7').val();
                if (penilaian_konsultan_kontruksi7.match(validasiHuruf)) {
                    $('#penilaian_konsultan_kontruksi7').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_kontruksi7').css('border-color', 'green');
                    $('#penilaian_konsultan_kontruksi7').val(penilaian_konsultan_kontruksi7);

                }

            };

        }
    });
    $('#penilaian_konsultan_kontruksi8').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_kontruksi8').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_kontruksi8").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_kontruksi8 = $('#penilaian_konsultan_kontruksi8').val();
                if (penilaian_konsultan_kontruksi8.match(validasiHuruf)) {
                    $('#penilaian_konsultan_kontruksi8').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_kontruksi8').css('border-color', 'green');
                    $('#penilaian_konsultan_kontruksi8').val(penilaian_konsultan_kontruksi8);

                }

            };

        }
    });
    $('#penilaian_konsultan_kontruksi9').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_kontruksi9').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_kontruksi9").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_kontruksi9 = $('#penilaian_konsultan_kontruksi9').val();
                if (penilaian_konsultan_kontruksi9.match(validasiHuruf)) {
                    $('#penilaian_konsultan_kontruksi9').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_kontruksi9').css('border-color', 'green');
                    $('#penilaian_konsultan_kontruksi9').val(penilaian_konsultan_kontruksi9);

                }

            };

        }
    });
    $('#penilaian_konsultan_kontruksi10').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_kontruksi10').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_kontruksi10").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_kontruksi10 = $('#penilaian_konsultan_kontruksi10').val();
                if (penilaian_konsultan_kontruksi10.match(validasiHuruf)) {
                    $('#penilaian_konsultan_kontruksi10').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_kontruksi10').css('border-color', 'green');
                    $('#penilaian_konsultan_kontruksi10').val(penilaian_konsultan_kontruksi10);

                }

            };

        }
    });
    $('#penilaian_konsultan_kontruksi11').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_kontruksi11').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_kontruksi11").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_kontruksi11 = $('#penilaian_konsultan_kontruksi11').val();
                if (penilaian_konsultan_kontruksi11.match(validasiHuruf)) {
                    $('#penilaian_konsultan_kontruksi11').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_kontruksi11').css('border-color', 'green');
                    $('#penilaian_konsultan_kontruksi11').val(penilaian_konsultan_kontruksi11);

                }

            };

        }
    });
    $('#penilaian_konsultan_kontruksi12').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_kontruksi12').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_kontruksi12").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_kontruksi12 = $('#penilaian_konsultan_kontruksi12').val();
                if (penilaian_konsultan_kontruksi12.match(validasiHuruf)) {
                    $('#penilaian_konsultan_kontruksi12').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_kontruksi12').css('border-color', 'green');
                    $('#penilaian_konsultan_kontruksi12').val(penilaian_konsultan_kontruksi12);

                }

            };

        }
    });
    $('#penilaian_konsultan_kontruksi13').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_kontruksi13').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_kontruksi13").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_kontruksi13 = $('#penilaian_konsultan_kontruksi13').val();
                if (penilaian_konsultan_kontruksi13.match(validasiHuruf)) {
                    $('#penilaian_konsultan_kontruksi13').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_kontruksi13').css('border-color', 'green');
                    $('#penilaian_konsultan_kontruksi13').val(penilaian_konsultan_kontruksi13);

                }

            };

        }
    });
    $('#penilaian_konsultan_kontruksi14').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_kontruksi14').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_kontruksi14").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_kontruksi14 = $('#penilaian_konsultan_kontruksi14').val();
                if (penilaian_konsultan_kontruksi14.match(validasiHuruf)) {
                    $('#penilaian_konsultan_kontruksi14').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_kontruksi14').css('border-color', 'green');
                    $('#penilaian_konsultan_kontruksi14').val(penilaian_konsultan_kontruksi14);

                }

            };

        }
    });
    $('#penilaian_konsultan_kontruksi15').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_kontruksi15').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_kontruksi15").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_kontruksi15 = $('#penilaian_konsultan_kontruksi15').val();
                if (penilaian_konsultan_kontruksi15.match(validasiHuruf)) {
                    $('#penilaian_konsultan_kontruksi15').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_kontruksi15').css('border-color', 'green');
                    $('#penilaian_konsultan_kontruksi15').val(penilaian_konsultan_kontruksi15);

                }

            };

        }
    });
</script>


<!-- ININ UNTUK VALIDASI BUTTON dan nilaik akhir TAMBAH -->
<!-- keyup nilai pekerjaan kontruksi -->
<script>
    $(document).ready(function() {
        $("#penilaian_konsultan_kontruksi1, #penilaian_konsultan_kontruksi2, #penilaian_konsultan_kontruksi3, #penilaian_konsultan_kontruksi4,#penilaian_konsultan_kontruksi5,#penilaian_konsultan_kontruksi6,#penilaian_konsultan_kontruksi7,#penilaian_konsultan_kontruksi8,#penilaian_konsultan_kontruksi9,#penilaian_konsultan_kontruksi10,#penilaian_konsultan_kontruksi11,#penilaian_konsultan_kontruksi12,#penilaian_konsultan_kontruksi13,#penilaian_konsultan_kontruksi14,#penilaian_konsultan_kontruksi15,#penilaian_konsultan_kontruksi16,#penilaian_konsultan_kontruksi17").keyup(function() {
            // 1
            var bobot_pekerjaan_kontruksi1 = $('#bobot_pekerjaan_konsultan_kontruksi1').val();
            var penilaian_kontruksi1 = $('#penilaian_konsultan_kontruksi1').val();
            var nilai_akhir_kontruksi1 = bobot_pekerjaan_kontruksi1 * penilaian_kontruksi1 / 100;
            $('#nilai_akhir_pekerjaan_konsultan_kontruksi_aspek1').val(parseFloat(nilai_akhir_kontruksi1));
            // 2
            var bobot_pekerjaan_kontruksi2 = $('#bobot_pekerjaan_konsultan_kontruksi2').val();
            var penilaian_kontruksi2 = $('#penilaian_konsultan_kontruksi2').val();
            var nilai_akhir_kontruksi2 = bobot_pekerjaan_kontruksi2 * penilaian_kontruksi2 / 100;
            $('#nilai_akhir_pekerjaan_konsultan_kontruksi_aspek2').val(parseFloat(nilai_akhir_kontruksi2));
            // 3
            var bobot_pekerjaan_kontruksi3 = $('#bobot_pekerjaan_konsultan_kontruksi3').val();
            var penilaian_kontruksi3 = $('#penilaian_konsultan_kontruksi3').val();
            var nilai_akhir_kontruksi3 = bobot_pekerjaan_kontruksi3 * penilaian_kontruksi3 / 100;
            $('#nilai_akhir_pekerjaan_konsultan_kontruksi_aspek3').val(parseFloat(nilai_akhir_kontruksi3));
            // 4
            var bobot_pekerjaan_kontruksi4 = $('#bobot_pekerjaan_konsultan_kontruksi4').val();
            var penilaian_kontruksi4 = $('#penilaian_konsultan_kontruksi4').val();
            var nilai_akhir_kontruksi4 = bobot_pekerjaan_kontruksi4 * penilaian_kontruksi4 / 100;
            $('#nilai_akhir_pekerjaan_konsultan_kontruksi_aspek4').val(parseFloat(nilai_akhir_kontruksi4));
            // 5
            var bobot_pekerjaan_kontruksi5 = $('#bobot_pekerjaan_konsultan_kontruksi5').val();
            var penilaian_kontruksi5 = $('#penilaian_konsultan_kontruksi5').val();
            var nilai_akhir_kontruksi5 = bobot_pekerjaan_kontruksi5 * penilaian_kontruksi5 / 100;
            $('#nilai_akhir_pekerjaan_konsultan_kontruksi_aspek5').val(parseFloat(nilai_akhir_kontruksi5));
            // 6
            var bobot_pekerjaan_kontruksi6 = $('#bobot_pekerjaan_konsultan_kontruksi6').val();
            var penilaian_kontruksi6 = $('#penilaian_konsultan_kontruksi6').val();
            var nilai_akhir_kontruksi6 = bobot_pekerjaan_kontruksi6 * penilaian_kontruksi6 / 100;
            $('#nilai_akhir_pekerjaan_konsultan_kontruksi_aspek6').val(parseFloat(nilai_akhir_kontruksi6));
            // 7
            var bobot_pekerjaan_kontruksi7 = $('#bobot_pekerjaan_konsultan_kontruksi7').val();
            var penilaian_kontruksi7 = $('#penilaian_konsultan_kontruksi7').val();
            var nilai_akhir_kontruksi7 = bobot_pekerjaan_kontruksi7 * penilaian_kontruksi7 / 100;
            $('#nilai_akhir_pekerjaan_konsultan_kontruksi_aspek7').val(parseFloat(nilai_akhir_kontruksi7));
            // 8
            var bobot_pekerjaan_kontruksi8 = $('#bobot_pekerjaan_konsultan_kontruksi8').val();
            var penilaian_kontruksi8 = $('#penilaian_konsultan_kontruksi8').val();
            var nilai_akhir_kontruksi8 = bobot_pekerjaan_kontruksi8 * penilaian_kontruksi8 / 100;
            $('#nilai_akhir_pekerjaan_konsultan_kontruksi_aspek8').val(parseFloat(nilai_akhir_kontruksi8));
            // 9
            var bobot_pekerjaan_kontruksi9 = $('#bobot_pekerjaan_konsultan_kontruksi9').val();
            var penilaian_kontruksi9 = $('#penilaian_konsultan_kontruksi9').val();
            var nilai_akhir_kontruksi9 = bobot_pekerjaan_kontruksi9 * penilaian_kontruksi9 / 100;
            $('#nilai_akhir_pekerjaan_konsultan_kontruksi_aspek9').val(parseFloat(nilai_akhir_kontruksi9));
            // 10
            var bobot_pekerjaan_kontruksi10 = $('#bobot_pekerjaan_konsultan_kontruksi10').val();
            var penilaian_kontruksi10 = $('#penilaian_konsultan_kontruksi10').val();
            var nilai_akhir_kontruksi10 = bobot_pekerjaan_kontruksi10 * penilaian_kontruksi10 / 100;
            $('#nilai_akhir_pekerjaan_konsultan_kontruksi_aspek10').val(parseFloat(nilai_akhir_kontruksi10));
            // 11
            var bobot_pekerjaan_kontruksi11 = $('#bobot_pekerjaan_konsultan_kontruksi11').val();
            var penilaian_kontruksi11 = $('#penilaian_konsultan_kontruksi11').val();
            var nilai_akhir_kontruksi11 = bobot_pekerjaan_kontruksi11 * penilaian_kontruksi11 / 100;
            $('#nilai_akhir_pekerjaan_konsultan_kontruksi_aspek11').val(parseFloat(nilai_akhir_kontruksi11));
            // 12
            var bobot_pekerjaan_kontruksi12 = $('#bobot_pekerjaan_konsultan_kontruksi12').val();
            var penilaian_kontruksi12 = $('#penilaian_konsultan_kontruksi12').val();
            var nilai_akhir_kontruksi12 = bobot_pekerjaan_kontruksi12 * penilaian_kontruksi12 / 100;
            $('#nilai_akhir_pekerjaan_konsultan_kontruksi_aspek12').val(parseFloat(nilai_akhir_kontruksi12));
            // 13
            var bobot_pekerjaan_kontruksi13 = $('#bobot_pekerjaan_konsultan_kontruksi13').val();
            var penilaian_kontruksi13 = $('#penilaian_konsultan_kontruksi13').val();
            var nilai_akhir_kontruksi13 = bobot_pekerjaan_kontruksi13 * penilaian_kontruksi13 / 100;
            $('#nilai_akhir_pekerjaan_konsultan_kontruksi_aspek13').val(parseFloat(nilai_akhir_kontruksi13));
            // 14
            var bobot_pekerjaan_kontruksi14 = $('#bobot_pekerjaan_konsultan_kontruksi14').val();
            var penilaian_kontruksi14 = $('#penilaian_konsultan_kontruksi14').val();
            var nilai_akhir_kontruksi14 = bobot_pekerjaan_kontruksi14 * penilaian_kontruksi14 / 100;
            $('#nilai_akhir_pekerjaan_konsultan_kontruksi_aspek14').val(parseFloat(nilai_akhir_kontruksi14));
            // 15
            var bobot_pekerjaan_kontruksi15 = $('#bobot_pekerjaan_konsultan_kontruksi15').val();
            var penilaian_kontruksi15 = $('#penilaian_konsultan_kontruksi15').val();
            var nilai_akhir_kontruksi15 = bobot_pekerjaan_kontruksi15 * penilaian_kontruksi15 / 100;
            $('#nilai_akhir_pekerjaan_konsultan_kontruksi_aspek15').val(parseFloat(nilai_akhir_kontruksi15));

            var total = parseFloat(nilai_akhir_kontruksi1) + parseFloat(nilai_akhir_kontruksi2) + parseFloat(nilai_akhir_kontruksi3) + parseFloat(nilai_akhir_kontruksi4) + parseFloat(nilai_akhir_kontruksi5) + parseFloat(nilai_akhir_kontruksi6) + parseFloat(nilai_akhir_kontruksi7) + parseFloat(nilai_akhir_kontruksi8) + parseFloat(nilai_akhir_kontruksi9) + parseFloat(nilai_akhir_kontruksi10) + parseFloat(nilai_akhir_kontruksi11) + parseFloat(nilai_akhir_kontruksi12) + parseFloat(nilai_akhir_kontruksi13) + parseFloat(nilai_akhir_kontruksi14) + parseFloat(nilai_akhir_kontruksi15);
            var total_button = $("#total_nilai_pekerjaan_konsultan_kontruksi").val(total);
            if (total <= 51) {
                $('[name="rating_penilaian_vendor_pekerjaan_konsultan_kontruksi"]').val(4);
                $('[name="status_rating_pekerjaan_konsultan_kontruksi"]').val('kurang baik');
                $('[name="status_nilai_akhir_pekerjaan_konsultan_kontruksi"]').val(total);
                $('#status_pekerjaan_konsultan_kontruksi').html('<label for="" class="badge badge-danger">Kurang Baik</label>');
                $('#warning_button_konsultan_kontruksi').show();
                $('#save_button_konsultan_kontruksi').hide();
                $('#bintang_pekerjaan_konsultan_kontruksi').html('');
            } else if (total <= 70) {
                $('[name="rating_penilaian_vendor_pekerjaan_konsultan_kontruksi"]').val(1);
                $('[name="status_rating_pekerjaan_konsultan_kontruksi"]').val('cukup baik');
                $('[name="status_nilai_akhir_pekerjaan_konsultan_kontruksi"]').val(total);
                $('#save_button_konsultan_kontruksi').show();
                $('#warning_button_konsultan_kontruksi').hide();
                $('#status_pekerjaan_konsultan_kontruksi').html('<label for="" class="badge badge-warning">Cukup Baik</label>');
                $('#bintang_pekerjaan_konsultan_kontruksi').html('<i class="fas fa fa-star text-warning"></i>');
            } else if (total <= 80) {
                $('[name="rating_penilaian_vendor_pekerjaan_konsultan_kontruksi"]').val(2);
                $('[name="status_rating_pekerjaan_konsultan_kontruksi"]').val('baik');
                $('[name="status_nilai_akhir_pekerjaan_konsultan_kontruksi"]').val(total);
                $('#save_button_konsultan_kontruksi').show();
                $('#warning_button_konsultan_kontruksi').hide();
                $('#status_pekerjaan_konsultan_kontruksi').html('<label for="" class="badge badge-warning">Baik</label>');
                $('#bintang_pekerjaan_konsultan_kontruksi').html('<i class="fas fa fa-star text-warning"></i><i class="fas fa fa-star text-warning"></i>');
            } else {
                $('[name="rating_penilaian_vendor_pekerjaan_konsultan_kontruksi"]').val(3);
                $('[name="status_rating_pekerjaan_konsultan_kontruksi"]').val('sangat baik');
                $('[name="status_nilai_akhir_pekerjaan_konsultan_kontruksi"]').val(total);
                $('#save_button_konsultan_kontruksi').show();
                $('#warning_button_konsultan_kontruksi').hide();
                $('#status_pekerjaan_konsultan_kontruksi').html('<label for="" class="badge badge-success">Sangat Baik</label>');
                $('#bintang_pekerjaan_konsultan_kontruksi').html('<i class="fas fa fa-star text-warning"></i><i class="fas fa fa-star text-warning"></i><i class="fas fa fa-star text-warning"></i>');
            }

        });
    });
</script>







<!-- INI BATAS PENILAIAN KAJIAN KONSULTAN KONTRUKSI ===================================================================================================================================== -->

<!-- AJAX BARUUU TAMBAH REVISI -->
<script>
    function message3(icon, text) {
        swal({
            title: "Good Jobs!!!",
            text: text,
            icon: icon,
        });
    }

    function message5(icon, text) {
        swal({
            title: "Anda Berhasil Mereset Nilai!!!",
            text: text,
            icon: icon,
        });
    }
    var form_tambah_pekerjaan_kajian_konsultan_kontruksi = $('#form_tambah_pekerjaan_kajian_konsultan_kontruksi');

    function Simpan_pekerjaan_kajian_konsultan_kontruksi() {
        $.ajax({
            method: "POST",
            url: 'https://eproc.jmtm.co.id/beranda/tambah_pekerjaan_kajian_konsultan_kontruksisaya',
            data: form_tambah_pekerjaan_kajian_konsultan_kontruksi.serialize(),
            dataType: "JSON",
            success: function(response) {
                if (response == 'success') {
                    message3('success', 'Penilaian Berhasil Di Buat!!');
                    location.reload();
                }
            },
        })
    }

    var form_tambah_pekerjaan_kajian_konsultan_kontruksi = $('#form_tambah_pekerjaan_kajian_konsultan_kontruksi');

    function Simpan_Warning_pekerjaan_kajian_konsultan_kontruksi_warning() {
        $.ajax({
            method: "POST",
            url: 'https://eproc.jmtm.co.id/beranda/tambah_warning_pekerjaan_kajian_konsultan_kontruksisaya',
            data: form_tambah_pekerjaan_kajian_konsultan_kontruksi.serialize(),
            dataType: "JSON",
            beforeSend: function() {
                $("#kirim_ke_vendor").css('display', 'block');
            },
            success: function(response) {
                $("#kirim_ke_vendor").css('display', 'none');
                window.open('https://api.whatsapp.com/send?phone=+62' + response['telpon'] + '&text=Laporan Penilaian Kinerja Vendor Nama Paket  : ' + response['paket'].nama_paket + ' Dengan Metode Pemilihan : ' + response['paket'].nama_metode_pemilihan + '  Agency : ' + response['paket'].nama_unit_kerja + ', Info : ' + response['isi'] + '', '_blank');
                message3('success', 'Penilaian Berhasil Di Buat');
                location.reload();
            },
        })
    }

    var form_tambah_pekerjaan_kajian_konsultan_kontruksi_reset = $('#form_tambah_pekerjaan_kajian_konsultan_kontruksi');

    function Reset_nilai_pekerjaan_kajian_konsultan_kontruksi() {
        $.ajax({
            method: "POST",
            url: 'https://eproc.jmtm.co.id/beranda/reset_penilaian_performance_pekerjaan_kajian_konsultan_kontruksi',
            data: form_tambah_pekerjaan_kajian_konsultan_kontruksi_reset.serialize(),
            dataType: "JSON",
            beforeSend: function() {
                $("#kirim_ke_vendor").css('display', 'block');
            },
            success: function(response) {
                $("#kirim_ke_vendor").css('display', 'none');
                window.open('https://api.whatsapp.com/send?phone=+62' + response['telpon'] + '&text=Laporan Penilaian Kinerja Vendor Nama Paket  : ' + response['paket'].nama_paket + ' Dengan Metode Pemilihan : ' + response['paket'].nama_metode_pemilihan + '  Agency : ' + response['paket'].nama_unit_kerja + ', Info : ' + response['isi'] + '', '_blank');
                message5('success', 'Penilaian Berhasil Di Reset');
                location.reload();
            },
        })
    }
</script>
<!-- INI UNTUK UPDATENYA -->
<script>
    function message3(icon, text) {
        swal({
            title: "Good Jobs!!!",
            text: text,
            icon: icon,
        });
    }
    var form_tambah_pekerjaan_kajian_konsultan_kontruksi = $('#form_tambah_pekerjaan_kajian_konsultan_kontruksi');

    function Update_pekerjaan_kajian_konsultan_kontruksi() {
        $.ajax({
            method: "POST",
            url: 'https://eproc.jmtm.co.id/beranda/update_pekerjaan_kajian_konsultan_kontruksisaya',
            data: form_tambah_pekerjaan_kajian_konsultan_kontruksi.serialize(),
            dataType: "JSON",
            success: function(response) {
                if (response == 'success') {
                    message3('success', 'Penilaian Berhasil Di Update!!');
                    location.reload();
                }
            },
        })
    }
</script>


<!-- INI UNTUK VALIDASI ANGKANYA Bagian UPDATE-->
<script>
    function message(icon, text) {
        swal({
            title: "Maaf Tidak Boleh Huruf Yaa !!!",
            text: text,
            icon: icon,
        });
    }

    function message_gak_boleh_lebih_angkanya(icon, text) {
        swal({
            title: "Maaf Angka Penilaian Tidak Boleh Lebih Dari 100 Yaa !!!",
            text: text,
            icon: icon,
        });
    }
    $('#penilaian_kajian_konsultan_kontruksi_update1').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_kajian_konsultan_kontruksi_update1').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_kajian_konsultan_kontruksi_update1").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_kajian_konsultan_kontruksi_update1 = $('#penilaian_kajian_konsultan_kontruksi_update1').val();
                if (penilaian_kajian_konsultan_kontruksi_update1.match(validasiHuruf)) {
                    $('#penilaian_kajian_konsultan_kontruksi_update1').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_kajian_konsultan_kontruksi_update1').css('border-color', 'green');
                    $('#penilaian_kajian_konsultan_kontruksi_update1').val(penilaian_kajian_konsultan_kontruksi_update1);

                }

            };

        }
    });
    $('#penilaian_kajian_konsultan_kontruksi_update2').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_kajian_konsultan_kontruksi_update2').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_kajian_konsultan_kontruksi_update2").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_kajian_konsultan_kontruksi_update2 = $('#penilaian_kajian_konsultan_kontruksi_update2').val();
                if (penilaian_kajian_konsultan_kontruksi_update2.match(validasiHuruf)) {
                    $('#penilaian_kajian_konsultan_kontruksi_update2').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_kajian_konsultan_kontruksi_update2').css('border-color', 'green');
                    $('#penilaian_kajian_konsultan_kontruksi_update2').val(penilaian_kajian_konsultan_kontruksi_update2);

                }

            };

        }
    });

    $('#penilaian_kajian_konsultan_kontruksi_update3').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_kajian_konsultan_kontruksi_update3').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_kajian_konsultan_kontruksi_update3").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_kajian_konsultan_kontruksi_update3 = $('#penilaian_kajian_konsultan_kontruksi_update3').val();
                if (penilaian_kajian_konsultan_kontruksi_update3.match(validasiHuruf)) {
                    $('#penilaian_kajian_konsultan_kontruksi_update3').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_kajian_konsultan_kontruksi_update3').css('border-color', 'green');
                    $('#penilaian_kajian_konsultan_kontruksi_update3').val(penilaian_kajian_konsultan_kontruksi_update3);

                }

            };

        }
    });
    $('#penilaian_kajian_konsultan_kontruksi_update4').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_kajian_konsultan_kontruksi_update4').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_kajian_konsultan_kontruksi_update4").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_kajian_konsultan_kontruksi_update4 = $('#penilaian_kajian_konsultan_kontruksi_update4').val();
                if (penilaian_kajian_konsultan_kontruksi_update4.match(validasiHuruf)) {
                    $('#penilaian_kajian_konsultan_kontruksi_update4').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_kajian_konsultan_kontruksi_update4').css('border-color', 'green');
                    $('#penilaian_kajian_konsultan_kontruksi_update4').val(penilaian_kajian_konsultan_kontruksi_update4);

                }

            };

        }
    });
    $('#penilaian_kajian_konsultan_kontruksi_update5').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_kajian_konsultan_kontruksi_update5').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_kajian_konsultan_kontruksi_update5").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_kajian_konsultan_kontruksi_update5 = $('#penilaian_kajian_konsultan_kontruksi_update5').val();
                if (penilaian_kajian_konsultan_kontruksi_update5.match(validasiHuruf)) {
                    $('#penilaian_kajian_konsultan_kontruksi_update5').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_kajian_konsultan_kontruksi_update5').css('border-color', 'green');
                    $('#penilaian_kajian_konsultan_kontruksi_update5').val(penilaian_kajian_konsultan_kontruksi_update5);

                }

            };

        }
    });
    $('#penilaian_kajian_konsultan_kontruksi_update6').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_kajian_konsultan_kontruksi_update6').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_kajian_konsultan_kontruksi_update6").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_kajian_konsultan_kontruksi_update6 = $('#penilaian_kajian_konsultan_kontruksi_update6').val();
                if (penilaian_kajian_konsultan_kontruksi_update6.match(validasiHuruf)) {
                    $('#penilaian_kajian_konsultan_kontruksi_update6').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_kajian_konsultan_kontruksi_update6').css('border-color', 'green');
                    $('#penilaian_kajian_konsultan_kontruksi_update6').val(penilaian_kajian_konsultan_kontruksi_update6);

                }

            };

        }
    });
    $('#penilaian_kajian_konsultan_kontruksi_update7').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_kajian_konsultan_kontruksi_update7').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_kajian_konsultan_kontruksi_update7").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_kajian_konsultan_kontruksi_update7 = $('#penilaian_kajian_konsultan_kontruksi_update7').val();
                if (penilaian_kajian_konsultan_kontruksi_update7.match(validasiHuruf)) {
                    $('#penilaian_kajian_konsultan_kontruksi_update7').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_kajian_konsultan_kontruksi_update7').css('border-color', 'green');
                    $('#penilaian_kajian_konsultan_kontruksi_update7').val(penilaian_kajian_konsultan_kontruksi_update7);

                }

            };

        }
    });
    $('#penilaian_kajian_konsultan_kontruksi_update8').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_kajian_konsultan_kontruksi_update8').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_kajian_konsultan_kontruksi_update8").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_kajian_konsultan_kontruksi_update8 = $('#penilaian_kajian_konsultan_kontruksi_update8').val();
                if (penilaian_kajian_konsultan_kontruksi_update8.match(validasiHuruf)) {
                    $('#penilaian_kajian_konsultan_kontruksi_update8').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_kajian_konsultan_kontruksi_update8').css('border-color', 'green');
                    $('#penilaian_kajian_konsultan_kontruksi_update8').val(penilaian_kajian_konsultan_kontruksi_update8);

                }

            };

        }
    });
    $('#penilaian_kajian_konsultan_kontruksi_update9').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_kajian_konsultan_kontruksi_update9').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_kajian_konsultan_kontruksi_update9").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_kajian_konsultan_kontruksi_update9 = $('#penilaian_kajian_konsultan_kontruksi_update9').val();
                if (penilaian_kajian_konsultan_kontruksi_update9.match(validasiHuruf)) {
                    $('#penilaian_kajian_konsultan_kontruksi_update9').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_kajian_konsultan_kontruksi_update9').css('border-color', 'green');
                    $('#penilaian_kajian_konsultan_kontruksi_update9').val(penilaian_kajian_konsultan_kontruksi_update9);

                }

            };

        }
    });
    $('#penilaian_kajian_konsultan_kontruksi_update10').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_kajian_konsultan_kontruksi_update10').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_kajian_konsultan_kontruksi_update10").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_kajian_konsultan_kontruksi_update10 = $('#penilaian_kajian_konsultan_kontruksi_update10').val();
                if (penilaian_kajian_konsultan_kontruksi_update10.match(validasiHuruf)) {
                    $('#penilaian_kajian_konsultan_kontruksi_update10').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_kajian_konsultan_kontruksi_update10').css('border-color', 'green');
                    $('#penilaian_kajian_konsultan_kontruksi_update10').val(penilaian_kajian_konsultan_kontruksi_update10);

                }

            };

        }
    });
    $('#penilaian_kajian_konsultan_kontruksi_update11').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_kajian_konsultan_kontruksi_update11').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_kajian_konsultan_kontruksi_update11").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_kajian_konsultan_kontruksi_update11 = $('#penilaian_kajian_konsultan_kontruksi_update11').val();
                if (penilaian_kajian_konsultan_kontruksi_update11.match(validasiHuruf)) {
                    $('#penilaian_kajian_konsultan_kontruksi_update11').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_kajian_konsultan_kontruksi_update11').css('border-color', 'green');
                    $('#penilaian_kajian_konsultan_kontruksi_update11').val(penilaian_kajian_konsultan_kontruksi_update11);

                }

            };

        }
    });
    $('#penilaian_kajian_konsultan_kontruksi_update12').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_kajian_konsultan_kontruksi_update12').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_kajian_konsultan_kontruksi_update12").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_kajian_konsultan_kontruksi_update12 = $('#penilaian_kajian_konsultan_kontruksi_update12').val();
                if (penilaian_kajian_konsultan_kontruksi_update12.match(validasiHuruf)) {
                    $('#penilaian_kajian_konsultan_kontruksi_update12').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_kajian_konsultan_kontruksi_update12').css('border-color', 'green');
                    $('#penilaian_kajian_konsultan_kontruksi_update12').val(penilaian_kajian_konsultan_kontruksi_update12);

                }

            };

        }
    });
    $('#penilaian_kajian_konsultan_kontruksi_update13').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_kajian_konsultan_kontruksi_update13').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_kajian_konsultan_kontruksi_update13").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_kajian_konsultan_kontruksi_update13 = $('#penilaian_kajian_konsultan_kontruksi_update13').val();
                if (penilaian_kajian_konsultan_kontruksi_update13.match(validasiHuruf)) {
                    $('#penilaian_kajian_konsultan_kontruksi_update13').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_kajian_konsultan_kontruksi_update13').css('border-color', 'green');
                    $('#penilaian_kajian_konsultan_kontruksi_update13').val(penilaian_kajian_konsultan_kontruksi_update13);

                }

            };

        }
    });
    $('#penilaian_kajian_konsultan_kontruksi_update14').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_kajian_konsultan_kontruksi_update14').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_kajian_konsultan_kontruksi_update14").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_kajian_konsultan_kontruksi_update14 = $('#penilaian_kajian_konsultan_kontruksi_update14').val();
                if (penilaian_kajian_konsultan_kontruksi_update14.match(validasiHuruf)) {
                    $('#penilaian_kajian_konsultan_kontruksi_update14').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_kajian_konsultan_kontruksi_update14').css('border-color', 'green');
                    $('#penilaian_kajian_konsultan_kontruksi_update14').val(penilaian_kajian_konsultan_kontruksi_update14);

                }

            };

        }
    });
</script>


<!-- INI UNTUK VALIDASI ANGKANYA Bagian tambah-->
<script>
    function message(icon, text) {
        swal({
            title: "Maaf Tidak Boleh Huruf Yaa !!!",
            text: text,
            icon: icon,
        });
    }

    function message_gak_boleh_lebih_angkanya(icon, text) {
        swal({
            title: "Maaf Angka Penilaian Tidak Boleh Lebih Dari 100 Yaa !!!",
            text: text,
            icon: icon,
        });
    }
    $('#penilaian_kajian_konsultan_kontruksi1').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_kajian_konsultan_kontruksi1').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_kajian_konsultan_kontruksi1").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_kajian_konsultan_kontruksi1 = $('#penilaian_kajian_konsultan_kontruksi1').val();
                if (penilaian_kajian_konsultan_kontruksi1.match(validasiHuruf)) {
                    $('#penilaian_kajian_konsultan_kontruksi1').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_kajian_konsultan_kontruksi1').css('border-color', 'green');
                    $('#penilaian_kajian_konsultan_kontruksi1').val(penilaian_kajian_konsultan_kontruksi1);

                }

            };

        }
    });
    $('#penilaian_kajian_konsultan_kontruksi2').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_kajian_konsultan_kontruksi2').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_kajian_konsultan_kontruksi2").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_kajian_konsultan_kontruksi2 = $('#penilaian_kajian_konsultan_kontruksi2').val();
                if (penilaian_kajian_konsultan_kontruksi2.match(validasiHuruf)) {
                    $('#penilaian_kajian_konsultan_kontruksi2').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_kajian_konsultan_kontruksi2').css('border-color', 'green');
                    $('#penilaian_kajian_konsultan_kontruksi2').val(penilaian_kajian_konsultan_kontruksi2);

                }

            };

        }
    });

    $('#penilaian_kajian_konsultan_kontruksi3').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_kajian_konsultan_kontruksi3').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_kajian_konsultan_kontruksi3").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_kajian_konsultan_kontruksi3 = $('#penilaian_kajian_konsultan_kontruksi3').val();
                if (penilaian_kajian_konsultan_kontruksi3.match(validasiHuruf)) {
                    $('#penilaian_kajian_konsultan_kontruksi3').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_kajian_konsultan_kontruksi3').css('border-color', 'green');
                    $('#penilaian_kajian_konsultan_kontruksi3').val(penilaian_kajian_konsultan_kontruksi3);

                }

            };

        }
    });
    $('#penilaian_kajian_konsultan_kontruksi4').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_kajian_konsultan_kontruksi4').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_kajian_konsultan_kontruksi4").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_kajian_konsultan_kontruksi4 = $('#penilaian_kajian_konsultan_kontruksi4').val();
                if (penilaian_kajian_konsultan_kontruksi4.match(validasiHuruf)) {
                    $('#penilaian_kajian_konsultan_kontruksi4').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_kajian_konsultan_kontruksi4').css('border-color', 'green');
                    $('#penilaian_kajian_konsultan_kontruksi4').val(penilaian_kajian_konsultan_kontruksi4);

                }

            };

        }
    });
    $('#penilaian_kajian_konsultan_kontruksi5').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_kajian_konsultan_kontruksi5').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_kajian_konsultan_kontruksi5").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_kajian_konsultan_kontruksi5 = $('#penilaian_kajian_konsultan_kontruksi5').val();
                if (penilaian_kajian_konsultan_kontruksi5.match(validasiHuruf)) {
                    $('#penilaian_kajian_konsultan_kontruksi5').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_kajian_konsultan_kontruksi5').css('border-color', 'green');
                    $('#penilaian_kajian_konsultan_kontruksi5').val(penilaian_kajian_konsultan_kontruksi5);

                }

            };

        }
    });
    $('#penilaian_kajian_konsultan_kontruksi6').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_kajian_konsultan_kontruksi6').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_kajian_konsultan_kontruksi6").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_kajian_konsultan_kontruksi6 = $('#penilaian_kajian_konsultan_kontruksi6').val();
                if (penilaian_kajian_konsultan_kontruksi6.match(validasiHuruf)) {
                    $('#penilaian_kajian_konsultan_kontruksi6').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_kajian_konsultan_kontruksi6').css('border-color', 'green');
                    $('#penilaian_kajian_konsultan_kontruksi6').val(penilaian_kajian_konsultan_kontruksi6);

                }

            };

        }
    });
    $('#penilaian_kajian_konsultan_kontruksi7').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_kajian_konsultan_kontruksi7').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_kajian_konsultan_kontruksi7").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_kajian_konsultan_kontruksi7 = $('#penilaian_kajian_konsultan_kontruksi7').val();
                if (penilaian_kajian_konsultan_kontruksi7.match(validasiHuruf)) {
                    $('#penilaian_kajian_konsultan_kontruksi7').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_kajian_konsultan_kontruksi7').css('border-color', 'green');
                    $('#penilaian_kajian_konsultan_kontruksi7').val(penilaian_kajian_konsultan_kontruksi7);

                }

            };

        }
    });
    $('#penilaian_kajian_konsultan_kontruksi8').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_kajian_konsultan_kontruksi8').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_kajian_konsultan_kontruksi8").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_kajian_konsultan_kontruksi8 = $('#penilaian_kajian_konsultan_kontruksi8').val();
                if (penilaian_kajian_konsultan_kontruksi8.match(validasiHuruf)) {
                    $('#penilaian_kajian_konsultan_kontruksi8').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_kajian_konsultan_kontruksi8').css('border-color', 'green');
                    $('#penilaian_kajian_konsultan_kontruksi8').val(penilaian_kajian_konsultan_kontruksi8);

                }

            };

        }
    });
    $('#penilaian_kajian_konsultan_kontruksi9').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_kajian_konsultan_kontruksi9').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_kajian_konsultan_kontruksi9").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_kajian_konsultan_kontruksi9 = $('#penilaian_kajian_konsultan_kontruksi9').val();
                if (penilaian_kajian_konsultan_kontruksi9.match(validasiHuruf)) {
                    $('#penilaian_kajian_konsultan_kontruksi9').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_kajian_konsultan_kontruksi9').css('border-color', 'green');
                    $('#penilaian_kajian_konsultan_kontruksi9').val(penilaian_kajian_konsultan_kontruksi9);

                }

            };

        }
    });
    $('#penilaian_kajian_konsultan_kontruksi10').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_kajian_konsultan_kontruksi10').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_kajian_konsultan_kontruksi10").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_kajian_konsultan_kontruksi10 = $('#penilaian_kajian_konsultan_kontruksi10').val();
                if (penilaian_kajian_konsultan_kontruksi10.match(validasiHuruf)) {
                    $('#penilaian_kajian_konsultan_kontruksi10').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_kajian_konsultan_kontruksi10').css('border-color', 'green');
                    $('#penilaian_kajian_konsultan_kontruksi10').val(penilaian_kajian_konsultan_kontruksi10);

                }

            };

        }
    });
    $('#penilaian_kajian_konsultan_kontruksi11').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_kajian_konsultan_kontruksi11').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_kajian_konsultan_kontruksi11").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_kajian_konsultan_kontruksi11 = $('#penilaian_kajian_konsultan_kontruksi11').val();
                if (penilaian_kajian_konsultan_kontruksi11.match(validasiHuruf)) {
                    $('#penilaian_kajian_konsultan_kontruksi11').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_kajian_konsultan_kontruksi11').css('border-color', 'green');
                    $('#penilaian_kajian_konsultan_kontruksi11').val(penilaian_kajian_konsultan_kontruksi11);

                }

            };

        }
    });
    $('#penilaian_kajian_konsultan_kontruksi12').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_kajian_konsultan_kontruksi12').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_kajian_konsultan_kontruksi12").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_kajian_konsultan_kontruksi12 = $('#penilaian_kajian_konsultan_kontruksi12').val();
                if (penilaian_kajian_konsultan_kontruksi12.match(validasiHuruf)) {
                    $('#penilaian_kajian_konsultan_kontruksi12').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_kajian_konsultan_kontruksi12').css('border-color', 'green');
                    $('#penilaian_kajian_konsultan_kontruksi12').val(penilaian_kajian_konsultan_kontruksi12);

                }

            };

        }
    });
    $('#penilaian_kajian_konsultan_kontruksi13').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_kajian_konsultan_kontruksi13').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_kajian_konsultan_kontruksi13").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_kajian_konsultan_kontruksi13 = $('#penilaian_kajian_konsultan_kontruksi13').val();
                if (penilaian_kajian_konsultan_kontruksi13.match(validasiHuruf)) {
                    $('#penilaian_kajian_konsultan_kontruksi13').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_kajian_konsultan_kontruksi13').css('border-color', 'green');
                    $('#penilaian_kajian_konsultan_kontruksi13').val(penilaian_kajian_konsultan_kontruksi13);

                }

            };

        }
    });
    $('#penilaian_kajian_konsultan_kontruksi14').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_kajian_konsultan_kontruksi14').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_kajian_konsultan_kontruksi14").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_kajian_konsultan_kontruksi14 = $('#penilaian_kajian_konsultan_kontruksi14').val();
                if (penilaian_kajian_konsultan_kontruksi14.match(validasiHuruf)) {
                    $('#penilaian_kajian_konsultan_kontruksi14').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_kajian_konsultan_kontruksi14').css('border-color', 'green');
                    $('#penilaian_kajian_konsultan_kontruksi14').val(penilaian_kajian_konsultan_kontruksi14);

                }

            };

        }
    });
</script>


<!-- ININ UNTUK VALIDASI BUTTON dan nilaik akhir TAMBAH -->
<!-- keyup nilai pekerjaan kontruksi -->
<script>
    $(document).ready(function() {
        $("#penilaian_kajian_konsultan_kontruksi1, #penilaian_kajian_konsultan_kontruksi2, #penilaian_kajian_konsultan_kontruksi3, #penilaian_kajian_konsultan_kontruksi4,#penilaian_kajian_konsultan_kontruksi5,#penilaian_kajian_konsultan_kontruksi6,#penilaian_kajian_konsultan_kontruksi7,#penilaian_kajian_konsultan_kontruksi8,#penilaian_kajian_konsultan_kontruksi9,#penilaian_kajian_konsultan_kontruksi10,#penilaian_kajian_konsultan_kontruksi11,#penilaian_kajian_konsultan_kontruksi12,#penilaian_kajian_konsultan_kontruksi13,#penilaian_kajian_konsultan_kontruksi14").keyup(function() {
            // 1
            var bobot_pekerjaan_kontruksi1 = $('#bobot_pekerjaan_kajian_konsultan_kontruksi1').val();
            var penilaian_kontruksi1 = $('#penilaian_kajian_konsultan_kontruksi1').val();
            var nilai_akhir_kontruksi1 = bobot_pekerjaan_kontruksi1 * penilaian_kontruksi1 / 100;
            $('#nilai_akhir_pekerjaan_kajian_konsultan_kontruksi_aspek1').val(parseFloat(nilai_akhir_kontruksi1));
            // 2
            var bobot_pekerjaan_kontruksi2 = $('#bobot_pekerjaan_kajian_konsultan_kontruksi2').val();
            var penilaian_kontruksi2 = $('#penilaian_kajian_konsultan_kontruksi2').val();
            var nilai_akhir_kontruksi2 = bobot_pekerjaan_kontruksi2 * penilaian_kontruksi2 / 100;
            $('#nilai_akhir_pekerjaan_kajian_konsultan_kontruksi_aspek2').val(parseFloat(nilai_akhir_kontruksi2));
            // 3
            var bobot_pekerjaan_kontruksi3 = $('#bobot_pekerjaan_kajian_konsultan_kontruksi3').val();
            var penilaian_kontruksi3 = $('#penilaian_kajian_konsultan_kontruksi3').val();
            var nilai_akhir_kontruksi3 = bobot_pekerjaan_kontruksi3 * penilaian_kontruksi3 / 100;
            $('#nilai_akhir_pekerjaan_kajian_konsultan_kontruksi_aspek3').val(parseFloat(nilai_akhir_kontruksi3));
            // 4
            var bobot_pekerjaan_kontruksi4 = $('#bobot_pekerjaan_kajian_konsultan_kontruksi4').val();
            var penilaian_kontruksi4 = $('#penilaian_kajian_konsultan_kontruksi4').val();
            var nilai_akhir_kontruksi4 = bobot_pekerjaan_kontruksi4 * penilaian_kontruksi4 / 100;
            $('#nilai_akhir_pekerjaan_kajian_konsultan_kontruksi_aspek4').val(parseFloat(nilai_akhir_kontruksi4));
            // 5
            var bobot_pekerjaan_kontruksi5 = $('#bobot_pekerjaan_kajian_konsultan_kontruksi5').val();
            var penilaian_kontruksi5 = $('#penilaian_kajian_konsultan_kontruksi5').val();
            var nilai_akhir_kontruksi5 = bobot_pekerjaan_kontruksi5 * penilaian_kontruksi5 / 100;
            $('#nilai_akhir_pekerjaan_kajian_konsultan_kontruksi_aspek5').val(parseFloat(nilai_akhir_kontruksi5));
            // 6
            var bobot_pekerjaan_kontruksi6 = $('#bobot_pekerjaan_kajian_konsultan_kontruksi6').val();
            var penilaian_kontruksi6 = $('#penilaian_kajian_konsultan_kontruksi6').val();
            var nilai_akhir_kontruksi6 = bobot_pekerjaan_kontruksi6 * penilaian_kontruksi6 / 100;
            $('#nilai_akhir_pekerjaan_kajian_konsultan_kontruksi_aspek6').val(parseFloat(nilai_akhir_kontruksi6));
            // 7
            var bobot_pekerjaan_kontruksi7 = $('#bobot_pekerjaan_kajian_konsultan_kontruksi7').val();
            var penilaian_kontruksi7 = $('#penilaian_kajian_konsultan_kontruksi7').val();
            var nilai_akhir_kontruksi7 = bobot_pekerjaan_kontruksi7 * penilaian_kontruksi7 / 100;
            $('#nilai_akhir_pekerjaan_kajian_konsultan_kontruksi_aspek7').val(parseFloat(nilai_akhir_kontruksi7));
            // 8
            var bobot_pekerjaan_kontruksi8 = $('#bobot_pekerjaan_kajian_konsultan_kontruksi8').val();
            var penilaian_kontruksi8 = $('#penilaian_kajian_konsultan_kontruksi8').val();
            var nilai_akhir_kontruksi8 = bobot_pekerjaan_kontruksi8 * penilaian_kontruksi8 / 100;
            $('#nilai_akhir_pekerjaan_kajian_konsultan_kontruksi_aspek8').val(parseFloat(nilai_akhir_kontruksi8));
            // 9
            var bobot_pekerjaan_kontruksi9 = $('#bobot_pekerjaan_kajian_konsultan_kontruksi9').val();
            var penilaian_kontruksi9 = $('#penilaian_kajian_konsultan_kontruksi9').val();
            var nilai_akhir_kontruksi9 = bobot_pekerjaan_kontruksi9 * penilaian_kontruksi9 / 100;
            $('#nilai_akhir_pekerjaan_kajian_konsultan_kontruksi_aspek9').val(parseFloat(nilai_akhir_kontruksi9));
            // 10
            var bobot_pekerjaan_kontruksi10 = $('#bobot_pekerjaan_kajian_konsultan_kontruksi10').val();
            var penilaian_kontruksi10 = $('#penilaian_kajian_konsultan_kontruksi10').val();
            var nilai_akhir_kontruksi10 = bobot_pekerjaan_kontruksi10 * penilaian_kontruksi10 / 100;
            $('#nilai_akhir_pekerjaan_kajian_konsultan_kontruksi_aspek10').val(parseFloat(nilai_akhir_kontruksi10));
            // 11
            var bobot_pekerjaan_kontruksi11 = $('#bobot_pekerjaan_kajian_konsultan_kontruksi11').val();
            var penilaian_kontruksi11 = $('#penilaian_kajian_konsultan_kontruksi11').val();
            var nilai_akhir_kontruksi11 = bobot_pekerjaan_kontruksi11 * penilaian_kontruksi11 / 100;
            $('#nilai_akhir_pekerjaan_kajian_konsultan_kontruksi_aspek11').val(parseFloat(nilai_akhir_kontruksi11));
            // 12
            var bobot_pekerjaan_kontruksi12 = $('#bobot_pekerjaan_kajian_konsultan_kontruksi12').val();
            var penilaian_kontruksi12 = $('#penilaian_kajian_konsultan_kontruksi12').val();
            var nilai_akhir_kontruksi12 = bobot_pekerjaan_kontruksi12 * penilaian_kontruksi12 / 100;
            $('#nilai_akhir_pekerjaan_kajian_konsultan_kontruksi_aspek12').val(parseFloat(nilai_akhir_kontruksi12));
            // 13
            var bobot_pekerjaan_kontruksi13 = $('#bobot_pekerjaan_kajian_konsultan_kontruksi13').val();
            var penilaian_kontruksi13 = $('#penilaian_kajian_konsultan_kontruksi13').val();
            var nilai_akhir_kontruksi13 = bobot_pekerjaan_kontruksi13 * penilaian_kontruksi13 / 100;
            $('#nilai_akhir_pekerjaan_kajian_konsultan_kontruksi_aspek13').val(parseFloat(nilai_akhir_kontruksi13));
            // 14
            var bobot_pekerjaan_kontruksi14 = $('#bobot_pekerjaan_kajian_konsultan_kontruksi14').val();
            var penilaian_kontruksi14 = $('#penilaian_kajian_konsultan_kontruksi14').val();
            var nilai_akhir_kontruksi14 = bobot_pekerjaan_kontruksi14 * penilaian_kontruksi14 / 100;
            $('#nilai_akhir_pekerjaan_kajian_konsultan_kontruksi_aspek14').val(parseFloat(nilai_akhir_kontruksi14));
            // 15

            var total = parseFloat(nilai_akhir_kontruksi1) + parseFloat(nilai_akhir_kontruksi2) + parseFloat(nilai_akhir_kontruksi3) + parseFloat(nilai_akhir_kontruksi4) + parseFloat(nilai_akhir_kontruksi5) + parseFloat(nilai_akhir_kontruksi6) + parseFloat(nilai_akhir_kontruksi7) + parseFloat(nilai_akhir_kontruksi8) + parseFloat(nilai_akhir_kontruksi9) + parseFloat(nilai_akhir_kontruksi10) + parseFloat(nilai_akhir_kontruksi11) + parseFloat(nilai_akhir_kontruksi12) + parseFloat(nilai_akhir_kontruksi13) + parseFloat(nilai_akhir_kontruksi14);
            var total_button = $("#total_nilai_pekerjaan_kajian_konsultan_kontruksi").val(total);
            if (total <= 51) {
                $('[name="rating_penilaian_vendor_pekerjaan_kajian_konsultan_kontruksi"]').val(4);
                $('[name="status_rating_pekerjaan_kajian_konsultan_kontruksi"]').val('kurang baik');
                $('[name="status_nilai_akhir_pekerjaan_kajian_konsultan_kontruksi"]').val(total);
                $('#status_pekerjaan_kajian_konsultan_kontruksi').html('<label for="" class="badge badge-danger">Kurang Baik</label>');
                $('#warning_button_kajian_konsultan_kontruksi').show();
                $('#save_button_kajian_konsultan_kontruksi').hide();
                $('#bintang_pekerjaan_kajian_konsultan_kontruksi').html('');
            } else if (total <= 70) {
                $('[name="rating_penilaian_vendor_pekerjaan_kajian_konsultan_kontruksi"]').val(1);
                $('[name="status_rating_pekerjaan_kajian_konsultan_kontruksi"]').val('cukup baik');
                $('[name="status_nilai_akhir_pekerjaan_kajian_konsultan_kontruksi"]').val(total);
                $('#save_button_kajian_konsultan_kontruksi').show();
                $('#warning_button_kajian_konsultan_kontruksi').hide();
                $('#status_pekerjaan_kajian_konsultan_kontruksi').html('<label for="" class="badge badge-warning">Cukup Baik</label>');
                $('#bintang_pekerjaan_kajian_konsultan_kontruksi').html('<i class="fas fa fa-star text-warning"></i>');
            } else if (total <= 80) {
                $('[name="rating_penilaian_vendor_pekerjaan_kajian_konsultan_kontruksi"]').val(2);
                $('[name="status_rating_pekerjaan_kajian_konsultan_kontruksi"]').val('baik');
                $('[name="status_nilai_akhir_pekerjaan_kajian_konsultan_kontruksi"]').val(total);
                $('#save_button_kajian_konsultan_kontruksi').show();
                $('#warning_button_kajian_konsultan_kontruksi').hide();
                $('#status_pekerjaan_kajian_konsultan_kontruksi').html('<label for="" class="badge badge-warning">Baik</label>');
                $('#bintang_pekerjaan_kajian_konsultan_kontruksi').html('<i class="fas fa fa-star text-warning"></i><i class="fas fa fa-star text-warning"></i>');
            } else {
                $('[name="rating_penilaian_vendor_pekerjaan_kajian_konsultan_kontruksi"]').val(3);
                $('[name="status_rating_pekerjaan_kajian_konsultan_kontruksi"]').val('sangat baik');
                $('[name="status_nilai_akhir_pekerjaan_kajian_konsultan_kontruksi"]').val(total);
                $('#save_button_kajian_konsultan_kontruksi').show();
                $('#warning_button_kajian_konsultan_kontruksi').hide();
                $('#status_pekerjaan_kajian_konsultan_kontruksi').html('<label for="" class="badge badge-success">Sangat Baik</label>');
                $('#bintang_pekerjaan_kajian_konsultan_kontruksi').html('<i class="fas fa fa-star text-warning"></i><i class="fas fa fa-star text-warning"></i><i class="fas fa fa-star text-warning"></i>');
            }

        });
    });
</script>
<!-- END KAJIAN KOSULTAN KONTRUKSI -->









<!-- INI BATAS PENILAIAN KONSULTAN PENGAWAS KONTRUKSI ===================================================================================================================================== -->

<!-- AJAX BARUUU TAMBAH REVISI -->
<script>
    function message3(icon, text) {
        swal({
            title: "Good Jobs!!!",
            text: text,
            icon: icon,
        });
    }

    function message5(icon, text) {
        swal({
            title: "Anda Berhasil Mereset Nilai!!!",
            text: text,
            icon: icon,
        });
    }
    var form_tambah_pekerjaan_konsultan_pengawas_kontruksi = $('#form_tambah_pekerjaan_konsultan_pengawas_kontruksi');

    function Simpan_pekerjaan_konsultan_pengawas_kontruksi() {
        $.ajax({
            method: "POST",
            url: 'https://eproc.jmtm.co.id/beranda/tambah_pekerjaan_konsultan_pengawas_kontruksisaya',
            data: form_tambah_pekerjaan_konsultan_pengawas_kontruksi.serialize(),
            dataType: "JSON",
            success: function(response) {
                if (response == 'success') {
                    message3('success', 'Penilaian Berhasil Di Buat!!');
                    location.reload();
                }
            },
        })
    }

    var form_tambah_pekerjaan_konsultan_pengawas_kontruksi = $('#form_tambah_pekerjaan_konsultan_pengawas_kontruksi');

    function Simpan_Warning_pekerjaan_konsultan_pengawas_kontruksi_warning() {
        $.ajax({
            method: "POST",
            url: 'https://eproc.jmtm.co.id/beranda/tambah_warning_pekerjaan_konsultan_pengawas_kontruksisaya',
            data: form_tambah_pekerjaan_konsultan_pengawas_kontruksi.serialize(),
            dataType: "JSON",
            beforeSend: function() {
                $("#kirim_ke_vendor").css('display', 'block');
            },
            success: function(response) {
                $("#kirim_ke_vendor").css('display', 'none');
                window.open('https://api.whatsapp.com/send?phone=+62' + response['telpon'] + '&text=Laporan Penilaian Kinerja Vendor Nama Paket  : ' + response['paket'].nama_paket + ' Dengan Metode Pemilihan : ' + response['paket'].nama_metode_pemilihan + '  Agency : ' + response['paket'].nama_unit_kerja + ', Info : ' + response['isi'] + '', '_blank');
                message3('success', 'Penilaian Berhasil Di Buat');
                location.reload();
            },
        })
    }

    var form_tambah_pekerjaan_konsultan_pengawas_kontruksi_reset = $('#form_tambah_pekerjaan_konsultan_pengawas_kontruksi');

    function Reset_nilai_pekerjaan_konsultan_pengawas_kontruksi() {
        $.ajax({
            method: "POST",
            url: 'https://eproc.jmtm.co.id/beranda/reset_penilaian_performance_pekerjaan_konsultan_pengawas_kontruksi',
            data: form_tambah_pekerjaan_konsultan_pengawas_kontruksi_reset.serialize(),
            dataType: "JSON",
            beforeSend: function() {
                $("#kirim_ke_vendor").css('display', 'block');
            },
            success: function(response) {
                $("#kirim_ke_vendor").css('display', 'none');
                window.open('https://api.whatsapp.com/send?phone=+62' + response['telpon'] + '&text=Laporan Penilaian Kinerja Vendor Nama Paket  : ' + response['paket'].nama_paket + ' Dengan Metode Pemilihan : ' + response['paket'].nama_metode_pemilihan + '  Agency : ' + response['paket'].nama_unit_kerja + ', Info : ' + response['isi'] + '', '_blank');
                message5('success', 'Penilaian Berhasil Di Reset');
                location.reload();
            },
        })
    }
</script>
<!-- INI UNTUK UPDATENYA -->
<script>
    function message3(icon, text) {
        swal({
            title: "Good Jobs!!!",
            text: text,
            icon: icon,
        });
    }
    var form_tambah_pekerjaan_konsultan_pengawas_kontruksi = $('#form_tambah_pekerjaan_konsultan_pengawas_kontruksi');

    function Update_pekerjaan_konsultan_pengawas_kontruksi() {
        $.ajax({
            method: "POST",
            url: 'https://eproc.jmtm.co.id/beranda/update_pekerjaan_konsultan_pengawas_kontruksisaya',
            data: form_tambah_pekerjaan_konsultan_pengawas_kontruksi.serialize(),
            dataType: "JSON",
            success: function(response) {
                if (response == 'success') {
                    message3('success', 'Penilaian Berhasil Di Update!!');
                    location.reload();
                }
            },
        })
    }
</script>


<!-- INI UNTUK VALIDASI ANGKANYA Bagian UPDATE-->
<script>
    function message(icon, text) {
        swal({
            title: "Maaf Tidak Boleh Huruf Yaa !!!",
            text: text,
            icon: icon,
        });
    }

    function message_gak_boleh_lebih_angkanya(icon, text) {
        swal({
            title: "Maaf Angka Penilaian Tidak Boleh Lebih Dari 100 Yaa !!!",
            text: text,
            icon: icon,
        });
    }
    $('#penilaian_konsultan_pengawas_kontruksi_update1').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_pengawas_kontruksi_update1').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_pengawas_kontruksi_update1").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_pengawas_kontruksi_update1 = $('#penilaian_konsultan_pengawas_kontruksi_update1').val();
                if (penilaian_konsultan_pengawas_kontruksi_update1.match(validasiHuruf)) {
                    $('#penilaian_konsultan_pengawas_kontruksi_update1').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_pengawas_kontruksi_update1').css('border-color', 'green');
                    $('#penilaian_konsultan_pengawas_kontruksi_update1').val(penilaian_konsultan_pengawas_kontruksi_update1);

                }

            };

        }
    });
    $('#penilaian_konsultan_pengawas_kontruksi_update2').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_pengawas_kontruksi_update2').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_pengawas_kontruksi_update2").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_pengawas_kontruksi_update2 = $('#penilaian_konsultan_pengawas_kontruksi_update2').val();
                if (penilaian_konsultan_pengawas_kontruksi_update2.match(validasiHuruf)) {
                    $('#penilaian_konsultan_pengawas_kontruksi_update2').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_pengawas_kontruksi_update2').css('border-color', 'green');
                    $('#penilaian_konsultan_pengawas_kontruksi_update2').val(penilaian_konsultan_pengawas_kontruksi_update2);

                }

            };

        }
    });

    $('#penilaian_konsultan_pengawas_kontruksi_update3').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_pengawas_kontruksi_update3').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_pengawas_kontruksi_update3").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_pengawas_kontruksi_update3 = $('#penilaian_konsultan_pengawas_kontruksi_update3').val();
                if (penilaian_konsultan_pengawas_kontruksi_update3.match(validasiHuruf)) {
                    $('#penilaian_konsultan_pengawas_kontruksi_update3').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_pengawas_kontruksi_update3').css('border-color', 'green');
                    $('#penilaian_konsultan_pengawas_kontruksi_update3').val(penilaian_konsultan_pengawas_kontruksi_update3);

                }

            };

        }
    });
    $('#penilaian_konsultan_pengawas_kontruksi_update4').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_pengawas_kontruksi_update4').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_pengawas_kontruksi_update4").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_pengawas_kontruksi_update4 = $('#penilaian_konsultan_pengawas_kontruksi_update4').val();
                if (penilaian_konsultan_pengawas_kontruksi_update4.match(validasiHuruf)) {
                    $('#penilaian_konsultan_pengawas_kontruksi_update4').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_pengawas_kontruksi_update4').css('border-color', 'green');
                    $('#penilaian_konsultan_pengawas_kontruksi_update4').val(penilaian_konsultan_pengawas_kontruksi_update4);

                }

            };

        }
    });
    $('#penilaian_konsultan_pengawas_kontruksi_update5').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_pengawas_kontruksi_update5').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_pengawas_kontruksi_update5").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_pengawas_kontruksi_update5 = $('#penilaian_konsultan_pengawas_kontruksi_update5').val();
                if (penilaian_konsultan_pengawas_kontruksi_update5.match(validasiHuruf)) {
                    $('#penilaian_konsultan_pengawas_kontruksi_update5').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_pengawas_kontruksi_update5').css('border-color', 'green');
                    $('#penilaian_konsultan_pengawas_kontruksi_update5').val(penilaian_konsultan_pengawas_kontruksi_update5);

                }

            };

        }
    });
    $('#penilaian_konsultan_pengawas_kontruksi_update6').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_pengawas_kontruksi_update6').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_pengawas_kontruksi_update6").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_pengawas_kontruksi_update6 = $('#penilaian_konsultan_pengawas_kontruksi_update6').val();
                if (penilaian_konsultan_pengawas_kontruksi_update6.match(validasiHuruf)) {
                    $('#penilaian_konsultan_pengawas_kontruksi_update6').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_pengawas_kontruksi_update6').css('border-color', 'green');
                    $('#penilaian_konsultan_pengawas_kontruksi_update6').val(penilaian_konsultan_pengawas_kontruksi_update6);

                }

            };

        }
    });
    $('#penilaian_konsultan_pengawas_kontruksi_update7').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_pengawas_kontruksi_update7').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_pengawas_kontruksi_update7").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_pengawas_kontruksi_update7 = $('#penilaian_konsultan_pengawas_kontruksi_update7').val();
                if (penilaian_konsultan_pengawas_kontruksi_update7.match(validasiHuruf)) {
                    $('#penilaian_konsultan_pengawas_kontruksi_update7').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_pengawas_kontruksi_update7').css('border-color', 'green');
                    $('#penilaian_konsultan_pengawas_kontruksi_update7').val(penilaian_konsultan_pengawas_kontruksi_update7);

                }

            };

        }
    });
    $('#penilaian_konsultan_pengawas_kontruksi_update8').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_pengawas_kontruksi_update8').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_pengawas_kontruksi_update8").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_pengawas_kontruksi_update8 = $('#penilaian_konsultan_pengawas_kontruksi_update8').val();
                if (penilaian_konsultan_pengawas_kontruksi_update8.match(validasiHuruf)) {
                    $('#penilaian_konsultan_pengawas_kontruksi_update8').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_pengawas_kontruksi_update8').css('border-color', 'green');
                    $('#penilaian_konsultan_pengawas_kontruksi_update8').val(penilaian_konsultan_pengawas_kontruksi_update8);

                }

            };

        }
    });
    $('#penilaian_konsultan_pengawas_kontruksi_update9').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_pengawas_kontruksi_update9').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_pengawas_kontruksi_update9").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_pengawas_kontruksi_update9 = $('#penilaian_konsultan_pengawas_kontruksi_update9').val();
                if (penilaian_konsultan_pengawas_kontruksi_update9.match(validasiHuruf)) {
                    $('#penilaian_konsultan_pengawas_kontruksi_update9').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_pengawas_kontruksi_update9').css('border-color', 'green');
                    $('#penilaian_konsultan_pengawas_kontruksi_update9').val(penilaian_konsultan_pengawas_kontruksi_update9);

                }

            };

        }
    });
    $('#penilaian_konsultan_pengawas_kontruksi_update10').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_pengawas_kontruksi_update10').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_pengawas_kontruksi_update10").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_pengawas_kontruksi_update10 = $('#penilaian_konsultan_pengawas_kontruksi_update10').val();
                if (penilaian_konsultan_pengawas_kontruksi_update10.match(validasiHuruf)) {
                    $('#penilaian_konsultan_pengawas_kontruksi_update10').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_pengawas_kontruksi_update10').css('border-color', 'green');
                    $('#penilaian_konsultan_pengawas_kontruksi_update10').val(penilaian_konsultan_pengawas_kontruksi_update10);

                }

            };

        }
    });
    $('#penilaian_konsultan_pengawas_kontruksi_update11').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_pengawas_kontruksi_update11').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_pengawas_kontruksi_update11").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_pengawas_kontruksi_update11 = $('#penilaian_konsultan_pengawas_kontruksi_update11').val();
                if (penilaian_konsultan_pengawas_kontruksi_update11.match(validasiHuruf)) {
                    $('#penilaian_konsultan_pengawas_kontruksi_update11').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_pengawas_kontruksi_update11').css('border-color', 'green');
                    $('#penilaian_konsultan_pengawas_kontruksi_update11').val(penilaian_konsultan_pengawas_kontruksi_update11);

                }

            };

        }
    });
    $('#penilaian_konsultan_pengawas_kontruksi_update12').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_pengawas_kontruksi_update12').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_pengawas_kontruksi_update12").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_pengawas_kontruksi_update12 = $('#penilaian_konsultan_pengawas_kontruksi_update12').val();
                if (penilaian_konsultan_pengawas_kontruksi_update12.match(validasiHuruf)) {
                    $('#penilaian_konsultan_pengawas_kontruksi_update12').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_pengawas_kontruksi_update12').css('border-color', 'green');
                    $('#penilaian_konsultan_pengawas_kontruksi_update12').val(penilaian_konsultan_pengawas_kontruksi_update12);

                }

            };

        }
    });
    $('#penilaian_konsultan_pengawas_kontruksi_update13').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_pengawas_kontruksi_update13').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_pengawas_kontruksi_update13").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_pengawas_kontruksi_update13 = $('#penilaian_konsultan_pengawas_kontruksi_update13').val();
                if (penilaian_konsultan_pengawas_kontruksi_update13.match(validasiHuruf)) {
                    $('#penilaian_konsultan_pengawas_kontruksi_update13').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_pengawas_kontruksi_update13').css('border-color', 'green');
                    $('#penilaian_konsultan_pengawas_kontruksi_update13').val(penilaian_konsultan_pengawas_kontruksi_update13);

                }

            };

        }
    });
    $('#penilaian_konsultan_pengawas_kontruksi_update14').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_pengawas_kontruksi_update14').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_pengawas_kontruksi_update14").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_pengawas_kontruksi_update14 = $('#penilaian_konsultan_pengawas_kontruksi_update14').val();
                if (penilaian_konsultan_pengawas_kontruksi_update14.match(validasiHuruf)) {
                    $('#penilaian_konsultan_pengawas_kontruksi_update14').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_pengawas_kontruksi_update14').css('border-color', 'green');
                    $('#penilaian_konsultan_pengawas_kontruksi_update14').val(penilaian_konsultan_pengawas_kontruksi_update14);

                }

            };

        }
    });
    $('#penilaian_konsultan_pengawas_kontruksi_update15').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_pengawas_kontruksi_update15').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_pengawas_kontruksi_update15").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_pengawas_kontruksi_update15 = $('#penilaian_konsultan_pengawas_kontruksi_update15').val();
                if (penilaian_konsultan_pengawas_kontruksi_update15.match(validasiHuruf)) {
                    $('#penilaian_konsultan_pengawas_kontruksi_update15').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_pengawas_kontruksi_update15').css('border-color', 'green');
                    $('#penilaian_konsultan_pengawas_kontruksi_update15').val(penilaian_konsultan_pengawas_kontruksi_update15);

                }

            };

        }
    });
</script>


<!-- INI UNTUK VALIDASI ANGKANYA Bagian tambah-->
<script>
    function message(icon, text) {
        swal({
            title: "Maaf Tidak Boleh Huruf Yaa !!!",
            text: text,
            icon: icon,
        });
    }

    function message_gak_boleh_lebih_angkanya(icon, text) {
        swal({
            title: "Maaf Angka Penilaian Tidak Boleh Lebih Dari 100 Yaa !!!",
            text: text,
            icon: icon,
        });
    }
    $('#penilaian_konsultan_pengawas_kontruksi1').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_pengawas_kontruksi1').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_pengawas_kontruksi1").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_pengawas_kontruksi1 = $('#penilaian_konsultan_pengawas_kontruksi1').val();
                if (penilaian_konsultan_pengawas_kontruksi1.match(validasiHuruf)) {
                    $('#penilaian_konsultan_pengawas_kontruksi1').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_pengawas_kontruksi1').css('border-color', 'green');
                    $('#penilaian_konsultan_pengawas_kontruksi1').val(penilaian_konsultan_pengawas_kontruksi1);

                }

            };

        }
    });
    $('#penilaian_konsultan_pengawas_kontruksi2').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_pengawas_kontruksi2').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_pengawas_kontruksi2").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_pengawas_kontruksi2 = $('#penilaian_konsultan_pengawas_kontruksi2').val();
                if (penilaian_konsultan_pengawas_kontruksi2.match(validasiHuruf)) {
                    $('#penilaian_konsultan_pengawas_kontruksi2').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_pengawas_kontruksi2').css('border-color', 'green');
                    $('#penilaian_konsultan_pengawas_kontruksi2').val(penilaian_konsultan_pengawas_kontruksi2);

                }

            };

        }
    });

    $('#penilaian_konsultan_pengawas_kontruksi3').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_pengawas_kontruksi3').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_pengawas_kontruksi3").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_pengawas_kontruksi3 = $('#penilaian_konsultan_pengawas_kontruksi3').val();
                if (penilaian_konsultan_pengawas_kontruksi3.match(validasiHuruf)) {
                    $('#penilaian_konsultan_pengawas_kontruksi3').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_pengawas_kontruksi3').css('border-color', 'green');
                    $('#penilaian_konsultan_pengawas_kontruksi3').val(penilaian_konsultan_pengawas_kontruksi3);

                }

            };

        }
    });
    $('#penilaian_konsultan_pengawas_kontruksi4').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_pengawas_kontruksi4').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_pengawas_kontruksi4").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_pengawas_kontruksi4 = $('#penilaian_konsultan_pengawas_kontruksi4').val();
                if (penilaian_konsultan_pengawas_kontruksi4.match(validasiHuruf)) {
                    $('#penilaian_konsultan_pengawas_kontruksi4').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_pengawas_kontruksi4').css('border-color', 'green');
                    $('#penilaian_konsultan_pengawas_kontruksi4').val(penilaian_konsultan_pengawas_kontruksi4);

                }

            };

        }
    });
    $('#penilaian_konsultan_pengawas_kontruksi5').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_pengawas_kontruksi5').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_pengawas_kontruksi5").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_pengawas_kontruksi5 = $('#penilaian_konsultan_pengawas_kontruksi5').val();
                if (penilaian_konsultan_pengawas_kontruksi5.match(validasiHuruf)) {
                    $('#penilaian_konsultan_pengawas_kontruksi5').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_pengawas_kontruksi5').css('border-color', 'green');
                    $('#penilaian_konsultan_pengawas_kontruksi5').val(penilaian_konsultan_pengawas_kontruksi5);

                }

            };

        }
    });
    $('#penilaian_konsultan_pengawas_kontruksi6').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_pengawas_kontruksi6').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_pengawas_kontruksi6").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_pengawas_kontruksi6 = $('#penilaian_konsultan_pengawas_kontruksi6').val();
                if (penilaian_konsultan_pengawas_kontruksi6.match(validasiHuruf)) {
                    $('#penilaian_konsultan_pengawas_kontruksi6').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_pengawas_kontruksi6').css('border-color', 'green');
                    $('#penilaian_konsultan_pengawas_kontruksi6').val(penilaian_konsultan_pengawas_kontruksi6);

                }

            };

        }
    });
    $('#penilaian_konsultan_pengawas_kontruksi7').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_pengawas_kontruksi7').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_pengawas_kontruksi7").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_pengawas_kontruksi7 = $('#penilaian_konsultan_pengawas_kontruksi7').val();
                if (penilaian_konsultan_pengawas_kontruksi7.match(validasiHuruf)) {
                    $('#penilaian_konsultan_pengawas_kontruksi7').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_pengawas_kontruksi7').css('border-color', 'green');
                    $('#penilaian_konsultan_pengawas_kontruksi7').val(penilaian_konsultan_pengawas_kontruksi7);

                }

            };

        }
    });
    $('#penilaian_konsultan_pengawas_kontruksi8').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_pengawas_kontruksi8').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_pengawas_kontruksi8").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_pengawas_kontruksi8 = $('#penilaian_konsultan_pengawas_kontruksi8').val();
                if (penilaian_konsultan_pengawas_kontruksi8.match(validasiHuruf)) {
                    $('#penilaian_konsultan_pengawas_kontruksi8').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_pengawas_kontruksi8').css('border-color', 'green');
                    $('#penilaian_konsultan_pengawas_kontruksi8').val(penilaian_konsultan_pengawas_kontruksi8);

                }

            };

        }
    });
    $('#penilaian_konsultan_pengawas_kontruksi9').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_pengawas_kontruksi9').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_pengawas_kontruksi9").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_pengawas_kontruksi9 = $('#penilaian_konsultan_pengawas_kontruksi9').val();
                if (penilaian_konsultan_pengawas_kontruksi9.match(validasiHuruf)) {
                    $('#penilaian_konsultan_pengawas_kontruksi9').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_pengawas_kontruksi9').css('border-color', 'green');
                    $('#penilaian_konsultan_pengawas_kontruksi9').val(penilaian_konsultan_pengawas_kontruksi9);

                }

            };

        }
    });
    $('#penilaian_konsultan_pengawas_kontruksi10').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_pengawas_kontruksi10').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_pengawas_kontruksi10").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_pengawas_kontruksi10 = $('#penilaian_konsultan_pengawas_kontruksi10').val();
                if (penilaian_konsultan_pengawas_kontruksi10.match(validasiHuruf)) {
                    $('#penilaian_konsultan_pengawas_kontruksi10').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_pengawas_kontruksi10').css('border-color', 'green');
                    $('#penilaian_konsultan_pengawas_kontruksi10').val(penilaian_konsultan_pengawas_kontruksi10);

                }

            };

        }
    });
    $('#penilaian_konsultan_pengawas_kontruksi11').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_pengawas_kontruksi11').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_pengawas_kontruksi11").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_pengawas_kontruksi11 = $('#penilaian_konsultan_pengawas_kontruksi11').val();
                if (penilaian_konsultan_pengawas_kontruksi11.match(validasiHuruf)) {
                    $('#penilaian_konsultan_pengawas_kontruksi11').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_pengawas_kontruksi11').css('border-color', 'green');
                    $('#penilaian_konsultan_pengawas_kontruksi11').val(penilaian_konsultan_pengawas_kontruksi11);

                }

            };

        }
    });
    $('#penilaian_konsultan_pengawas_kontruksi12').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_pengawas_kontruksi12').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_pengawas_kontruksi12").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_pengawas_kontruksi12 = $('#penilaian_konsultan_pengawas_kontruksi12').val();
                if (penilaian_konsultan_pengawas_kontruksi12.match(validasiHuruf)) {
                    $('#penilaian_konsultan_pengawas_kontruksi12').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_pengawas_kontruksi12').css('border-color', 'green');
                    $('#penilaian_konsultan_pengawas_kontruksi12').val(penilaian_konsultan_pengawas_kontruksi12);

                }

            };

        }
    });
    $('#penilaian_konsultan_pengawas_kontruksi13').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_pengawas_kontruksi13').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_pengawas_kontruksi13").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_pengawas_kontruksi13 = $('#penilaian_konsultan_pengawas_kontruksi13').val();
                if (penilaian_konsultan_pengawas_kontruksi13.match(validasiHuruf)) {
                    $('#penilaian_konsultan_pengawas_kontruksi13').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_pengawas_kontruksi13').css('border-color', 'green');
                    $('#penilaian_konsultan_pengawas_kontruksi13').val(penilaian_konsultan_pengawas_kontruksi13);

                }

            };

        }
    });
    $('#penilaian_konsultan_pengawas_kontruksi14').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_pengawas_kontruksi14').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_pengawas_kontruksi14").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_pengawas_kontruksi14 = $('#penilaian_konsultan_pengawas_kontruksi14').val();
                if (penilaian_konsultan_pengawas_kontruksi14.match(validasiHuruf)) {
                    $('#penilaian_konsultan_pengawas_kontruksi14').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_pengawas_kontruksi14').css('border-color', 'green');
                    $('#penilaian_konsultan_pengawas_kontruksi14').val(penilaian_konsultan_pengawas_kontruksi14);

                }

            };

        }
    });
    $('#penilaian_konsultan_pengawas_kontruksi15').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_pengawas_kontruksi15').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_pengawas_kontruksi15").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_pengawas_kontruksi15 = $('#penilaian_konsultan_pengawas_kontruksi15').val();
                if (penilaian_konsultan_pengawas_kontruksi15.match(validasiHuruf)) {
                    $('#penilaian_konsultan_pengawas_kontruksi15').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_pengawas_kontruksi15').css('border-color', 'green');
                    $('#penilaian_konsultan_pengawas_kontruksi15').val(penilaian_konsultan_pengawas_kontruksi15);

                }

            };

        }
    });
</script>


<!-- ININ UNTUK VALIDASI BUTTON dan nilaik akhir TAMBAH -->
<!-- keyup nilai pekerjaan kontruksi -->
<script>
    $(document).ready(function() {
        $("#penilaian_konsultan_pengawas_kontruksi1, #penilaian_konsultan_pengawas_kontruksi2, #penilaian_konsultan_pengawas_kontruksi3, #penilaian_konsultan_pengawas_kontruksi4,#penilaian_konsultan_pengawas_kontruksi5,#penilaian_konsultan_pengawas_kontruksi6,#penilaian_konsultan_pengawas_kontruksi7,#penilaian_konsultan_pengawas_kontruksi8,#penilaian_konsultan_pengawas_kontruksi9,#penilaian_konsultan_pengawas_kontruksi10,#penilaian_konsultan_pengawas_kontruksi11,#penilaian_konsultan_pengawas_kontruksi12,#penilaian_konsultan_pengawas_kontruksi13,#penilaian_konsultan_pengawas_kontruksi14,#penilaian_konsultan_pengawas_kontruksi15,#penilaian_konsultan_pengawas_kontruksi16,#penilaian_konsultan_pengawas_kontruksi17").keyup(function() {
            // 1
            var bobot_pekerjaan_kontruksi1 = $('#bobot_pekerjaan_konsultan_pengawas_kontruksi1').val();
            var penilaian_kontruksi1 = $('#penilaian_konsultan_pengawas_kontruksi1').val();
            var nilai_akhir_kontruksi1 = bobot_pekerjaan_kontruksi1 * penilaian_kontruksi1 / 100;
            $('#nilai_akhir_pekerjaan_konsultan_pengawas_kontruksi_aspek1').val(parseFloat(nilai_akhir_kontruksi1));
            // 2
            var bobot_pekerjaan_kontruksi2 = $('#bobot_pekerjaan_konsultan_pengawas_kontruksi2').val();
            var penilaian_kontruksi2 = $('#penilaian_konsultan_pengawas_kontruksi2').val();
            var nilai_akhir_kontruksi2 = bobot_pekerjaan_kontruksi2 * penilaian_kontruksi2 / 100;
            $('#nilai_akhir_pekerjaan_konsultan_pengawas_kontruksi_aspek2').val(parseFloat(nilai_akhir_kontruksi2));
            // 3
            var bobot_pekerjaan_kontruksi3 = $('#bobot_pekerjaan_konsultan_pengawas_kontruksi3').val();
            var penilaian_kontruksi3 = $('#penilaian_konsultan_pengawas_kontruksi3').val();
            var nilai_akhir_kontruksi3 = bobot_pekerjaan_kontruksi3 * penilaian_kontruksi3 / 100;
            $('#nilai_akhir_pekerjaan_konsultan_pengawas_kontruksi_aspek3').val(parseFloat(nilai_akhir_kontruksi3));
            // 4
            var bobot_pekerjaan_kontruksi4 = $('#bobot_pekerjaan_konsultan_pengawas_kontruksi4').val();
            var penilaian_kontruksi4 = $('#penilaian_konsultan_pengawas_kontruksi4').val();
            var nilai_akhir_kontruksi4 = bobot_pekerjaan_kontruksi4 * penilaian_kontruksi4 / 100;
            $('#nilai_akhir_pekerjaan_konsultan_pengawas_kontruksi_aspek4').val(parseFloat(nilai_akhir_kontruksi4));
            // 5
            var bobot_pekerjaan_kontruksi5 = $('#bobot_pekerjaan_konsultan_pengawas_kontruksi5').val();
            var penilaian_kontruksi5 = $('#penilaian_konsultan_pengawas_kontruksi5').val();
            var nilai_akhir_kontruksi5 = bobot_pekerjaan_kontruksi5 * penilaian_kontruksi5 / 100;
            $('#nilai_akhir_pekerjaan_konsultan_pengawas_kontruksi_aspek5').val(parseFloat(nilai_akhir_kontruksi5));
            // 6
            var bobot_pekerjaan_kontruksi6 = $('#bobot_pekerjaan_konsultan_pengawas_kontruksi6').val();
            var penilaian_kontruksi6 = $('#penilaian_konsultan_pengawas_kontruksi6').val();
            var nilai_akhir_kontruksi6 = bobot_pekerjaan_kontruksi6 * penilaian_kontruksi6 / 100;
            $('#nilai_akhir_pekerjaan_konsultan_pengawas_kontruksi_aspek6').val(parseFloat(nilai_akhir_kontruksi6));
            // 7
            var bobot_pekerjaan_kontruksi7 = $('#bobot_pekerjaan_konsultan_pengawas_kontruksi7').val();
            var penilaian_kontruksi7 = $('#penilaian_konsultan_pengawas_kontruksi7').val();
            var nilai_akhir_kontruksi7 = bobot_pekerjaan_kontruksi7 * penilaian_kontruksi7 / 100;
            $('#nilai_akhir_pekerjaan_konsultan_pengawas_kontruksi_aspek7').val(parseFloat(nilai_akhir_kontruksi7));
            // 8
            var bobot_pekerjaan_kontruksi8 = $('#bobot_pekerjaan_konsultan_pengawas_kontruksi8').val();
            var penilaian_kontruksi8 = $('#penilaian_konsultan_pengawas_kontruksi8').val();
            var nilai_akhir_kontruksi8 = bobot_pekerjaan_kontruksi8 * penilaian_kontruksi8 / 100;
            $('#nilai_akhir_pekerjaan_konsultan_pengawas_kontruksi_aspek8').val(parseFloat(nilai_akhir_kontruksi8));
            // 9
            var bobot_pekerjaan_kontruksi9 = $('#bobot_pekerjaan_konsultan_pengawas_kontruksi9').val();
            var penilaian_kontruksi9 = $('#penilaian_konsultan_pengawas_kontruksi9').val();
            var nilai_akhir_kontruksi9 = bobot_pekerjaan_kontruksi9 * penilaian_kontruksi9 / 100;
            $('#nilai_akhir_pekerjaan_konsultan_pengawas_kontruksi_aspek9').val(parseFloat(nilai_akhir_kontruksi9));
            // 10
            var bobot_pekerjaan_kontruksi10 = $('#bobot_pekerjaan_konsultan_pengawas_kontruksi10').val();
            var penilaian_kontruksi10 = $('#penilaian_konsultan_pengawas_kontruksi10').val();
            var nilai_akhir_kontruksi10 = bobot_pekerjaan_kontruksi10 * penilaian_kontruksi10 / 100;
            $('#nilai_akhir_pekerjaan_konsultan_pengawas_kontruksi_aspek10').val(parseFloat(nilai_akhir_kontruksi10));
            // 11
            var bobot_pekerjaan_kontruksi11 = $('#bobot_pekerjaan_konsultan_pengawas_kontruksi11').val();
            var penilaian_kontruksi11 = $('#penilaian_konsultan_pengawas_kontruksi11').val();
            var nilai_akhir_kontruksi11 = bobot_pekerjaan_kontruksi11 * penilaian_kontruksi11 / 100;
            $('#nilai_akhir_pekerjaan_konsultan_pengawas_kontruksi_aspek11').val(parseFloat(nilai_akhir_kontruksi11));
            // 12
            var bobot_pekerjaan_kontruksi12 = $('#bobot_pekerjaan_konsultan_pengawas_kontruksi12').val();
            var penilaian_kontruksi12 = $('#penilaian_konsultan_pengawas_kontruksi12').val();
            var nilai_akhir_kontruksi12 = bobot_pekerjaan_kontruksi12 * penilaian_kontruksi12 / 100;
            $('#nilai_akhir_pekerjaan_konsultan_pengawas_kontruksi_aspek12').val(parseFloat(nilai_akhir_kontruksi12));
            // 13
            var bobot_pekerjaan_kontruksi13 = $('#bobot_pekerjaan_konsultan_pengawas_kontruksi13').val();
            var penilaian_kontruksi13 = $('#penilaian_konsultan_pengawas_kontruksi13').val();
            var nilai_akhir_kontruksi13 = bobot_pekerjaan_kontruksi13 * penilaian_kontruksi13 / 100;
            $('#nilai_akhir_pekerjaan_konsultan_pengawas_kontruksi_aspek13').val(parseFloat(nilai_akhir_kontruksi13));
            // 14
            var bobot_pekerjaan_kontruksi14 = $('#bobot_pekerjaan_konsultan_pengawas_kontruksi14').val();
            var penilaian_kontruksi14 = $('#penilaian_konsultan_pengawas_kontruksi14').val();
            var nilai_akhir_kontruksi14 = bobot_pekerjaan_kontruksi14 * penilaian_kontruksi14 / 100;
            $('#nilai_akhir_pekerjaan_konsultan_pengawas_kontruksi_aspek14').val(parseFloat(nilai_akhir_kontruksi14));
            // 15
            var bobot_pekerjaan_kontruksi15 = $('#bobot_pekerjaan_konsultan_pengawas_kontruksi15').val();
            var penilaian_kontruksi15 = $('#penilaian_konsultan_pengawas_kontruksi15').val();
            var nilai_akhir_kontruksi15 = bobot_pekerjaan_kontruksi15 * penilaian_kontruksi15 / 100;
            $('#nilai_akhir_pekerjaan_konsultan_pengawas_kontruksi_aspek15').val(parseFloat(nilai_akhir_kontruksi15));

            var total = parseFloat(nilai_akhir_kontruksi1) + parseFloat(nilai_akhir_kontruksi2) + parseFloat(nilai_akhir_kontruksi3) + parseFloat(nilai_akhir_kontruksi4) + parseFloat(nilai_akhir_kontruksi5) + parseFloat(nilai_akhir_kontruksi6) + parseFloat(nilai_akhir_kontruksi7) + parseFloat(nilai_akhir_kontruksi8) + parseFloat(nilai_akhir_kontruksi9) + parseFloat(nilai_akhir_kontruksi10) + parseFloat(nilai_akhir_kontruksi11) + parseFloat(nilai_akhir_kontruksi12) + parseFloat(nilai_akhir_kontruksi13) + parseFloat(nilai_akhir_kontruksi14) + parseFloat(nilai_akhir_kontruksi15);
            var total_button = $("#total_nilai_pekerjaan_konsultan_pengawas_kontruksi").val(total);
            if (total <= 51) {
                $('[name="rating_penilaian_vendor_pekerjaan_konsultan_pengawas_kontruksi"]').val(4);
                $('[name="status_rating_pekerjaan_konsultan_pengawas_kontruksi"]').val('kurang baik');
                $('[name="status_nilai_akhir_pekerjaan_konsultan_pengawas_kontruksi"]').val(total);
                $('#status_pekerjaan_konsultan_pengawas_kontruksi').html('<label for="" class="badge badge-danger">Kurang Baik</label>');
                $('#warning_button_konsultan_pengawas_kontruksi').show();
                $('#save_button_konsultan_pengawas_kontruksi').hide();
                $('#bintang_pekerjaan_konsultan_pengawas_kontruksi').html('');
            } else if (total <= 70) {
                $('[name="rating_penilaian_vendor_pekerjaan_konsultan_pengawas_kontruksi"]').val(1);
                $('[name="status_rating_pekerjaan_konsultan_pengawas_kontruksi"]').val('cukup baik');
                $('[name="status_nilai_akhir_pekerjaan_konsultan_pengawas_kontruksi"]').val(total);
                $('#save_button_konsultan_pengawas_kontruksi').show();
                $('#warning_button_konsultan_pengawas_kontruksi').hide();
                $('#status_pekerjaan_konsultan_pengawas_kontruksi').html('<label for="" class="badge badge-warning">Cukup Baik</label>');
                $('#bintang_pekerjaan_konsultan_pengawas_kontruksi').html('<i class="fas fa fa-star text-warning"></i>');
            } else if (total <= 80) {
                $('[name="rating_penilaian_vendor_pekerjaan_konsultan_pengawas_kontruksi"]').val(2);
                $('[name="status_rating_pekerjaan_konsultan_pengawas_kontruksi"]').val('baik');
                $('[name="status_nilai_akhir_pekerjaan_konsultan_pengawas_kontruksi"]').val(total);
                $('#save_button_konsultan_pengawas_kontruksi').show();
                $('#warning_button_konsultan_pengawas_kontruksi').hide();
                $('#status_pekerjaan_konsultan_pengawas_kontruksi').html('<label for="" class="badge badge-warning">Baik</label>');
                $('#bintang_pekerjaan_konsultan_pengawas_kontruksi').html('<i class="fas fa fa-star text-warning"></i><i class="fas fa fa-star text-warning"></i>');
            } else {
                $('[name="rating_penilaian_vendor_pekerjaan_konsultan_pengawas_kontruksi"]').val(3);
                $('[name="status_rating_pekerjaan_konsultan_pengawas_kontruksi"]').val('sangat baik');
                $('[name="status_nilai_akhir_pekerjaan_konsultan_pengawas_kontruksi"]').val(total);
                $('#save_button_konsultan_pengawas_kontruksi').show();
                $('#warning_button_konsultan_pengawas_kontruksi').hide();
                $('#status_pekerjaan_konsultan_pengawas_kontruksi').html('<label for="" class="badge badge-success">Sangat Baik</label>');
                $('#bintang_pekerjaan_konsultan_pengawas_kontruksi').html('<i class="fas fa fa-star text-warning"></i><i class="fas fa fa-star text-warning"></i><i class="fas fa fa-star text-warning"></i>');
            }

        });
    });
</script>










<!-- INI BAGIAN UNTUK PENILAIAN PEKERJAAN JASA LAINYA -->

<!-- INI BATAS PENILAIAN PEKERJAAN JASA LAINYA ===================================================================================================================================== -->

<!-- AJAX BARUUU TAMBAH REVISI -->
<script>
    function message3(icon, text) {
        swal({
            title: "Good Jobs!!!",
            text: text,
            icon: icon,
        });
    }

    function message5(icon, text) {
        swal({
            title: "Anda Berhasil Mereset Nilai!!!",
            text: text,
            icon: icon,
        });
    }
    var form_tambah_pekerjaan_konsultan_jasa_lainya_kontruksi = $('#form_tambah_pekerjaan_konsultan_jasa_lainya_kontruksi');

    function Simpan_pekerjaan_konsultan_jasa_lainya_kontruksi() {
        $.ajax({
            method: "POST",
            url: 'https://eproc.jmtm.co.id/beranda/tambah_pekerjaan_konsultan_jasa_lainya_kontruksisaya',
            data: form_tambah_pekerjaan_konsultan_jasa_lainya_kontruksi.serialize(),
            dataType: "JSON",
            success: function(response) {
                if (response == 'success') {
                    message3('success', 'Penilaian Berhasil Di Buat!!');
                    location.reload();
                }
            },
        })
    }

    var form_tambah_pekerjaan_konsultan_jasa_lainya_kontruksi = $('#form_tambah_pekerjaan_konsultan_jasa_lainya_kontruksi');

    function Simpan_Warning_pekerjaan_konsultan_jasa_lainya_kontruksi_warning() {
        $.ajax({
            method: "POST",
            url: 'https://eproc.jmtm.co.id/beranda/tambah_warning_pekerjaan_konsultan_jasa_lainya_kontruksisaya',
            data: form_tambah_pekerjaan_konsultan_jasa_lainya_kontruksi.serialize(),
            dataType: "JSON",
            beforeSend: function() {
                $("#kirim_ke_vendor").css('display', 'block');
            },
            success: function(response) {
                $("#kirim_ke_vendor").css('display', 'none');
                window.open('https://api.whatsapp.com/send?phone=+62' + response['telpon'] + '&text=Laporan Penilaian Kinerja Vendor Nama Paket  : ' + response['paket'].nama_paket + ' Dengan Metode Pemilihan : ' + response['paket'].nama_metode_pemilihan + '  Agency : ' + response['paket'].nama_unit_kerja + ', Info : ' + response['isi'] + '', '_blank');
                message3('success', 'Penilaian Berhasil Di Buat');
                location.reload();
            },
        })
    }

    var form_tambah_pekerjaan_konsultan_jasa_lainya_kontruksi_reset = $('#form_tambah_pekerjaan_konsultan_jasa_lainya_kontruksi');

    function Reset_nilai_pekerjaan_konsultan_jasa_lainya_kontruksi() {
        $.ajax({
            method: "POST",
            url: 'https://eproc.jmtm.co.id/beranda/reset_penilaian_performance_pekerjaan_konsultan_jasa_lainya_kontruksi',
            data: form_tambah_pekerjaan_konsultan_jasa_lainya_kontruksi_reset.serialize(),
            dataType: "JSON",
            beforeSend: function() {
                $("#kirim_ke_vendor").css('display', 'block');
            },
            success: function(response) {
                $("#kirim_ke_vendor").css('display', 'none');
                window.open('https://api.whatsapp.com/send?phone=+62' + response['telpon'] + '&text=Laporan Penilaian Kinerja Vendor Nama Paket  : ' + response['paket'].nama_paket + ' Dengan Metode Pemilihan : ' + response['paket'].nama_metode_pemilihan + '  Agency : ' + response['paket'].nama_unit_kerja + ', Info : ' + response['isi'] + '', '_blank');
                message5('success', 'Penilaian Berhasil Di Reset');
                location.reload();
            },
        })
    }
</script>
<!-- INI UNTUK UPDATENYA -->
<script>
    function message3(icon, text) {
        swal({
            title: "Good Jobs!!!",
            text: text,
            icon: icon,
        });
    }
    var form_tambah_pekerjaan_konsultan_jasa_lainya_kontruksi = $('#form_tambah_pekerjaan_konsultan_jasa_lainya_kontruksi');

    function Update_pekerjaan_konsultan_jasa_lainya_kontruksi() {
        $.ajax({
            method: "POST",
            url: 'https://eproc.jmtm.co.id/beranda/update_pekerjaan_konsultan_jasa_lainya_kontruksisaya',
            data: form_tambah_pekerjaan_konsultan_jasa_lainya_kontruksi.serialize(),
            dataType: "JSON",
            success: function(response) {
                if (response == 'success') {
                    message3('success', 'Penilaian Berhasil Di Update!!');
                    location.reload();
                }
            },
        })
    }
</script>


<!-- INI UNTUK VALIDASI ANGKANYA Bagian UPDATE-->
<script>
    function message(icon, text) {
        swal({
            title: "Maaf Tidak Boleh Huruf Yaa !!!",
            text: text,
            icon: icon,
        });
    }

    function message_gak_boleh_lebih_angkanya(icon, text) {
        swal({
            title: "Maaf Angka Penilaian Tidak Boleh Lebih Dari 100 Yaa !!!",
            text: text,
            icon: icon,
        });
    }
    $('#penilaian_konsultan_jasa_lainya_kontruksi_update1').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_jasa_lainya_kontruksi_update1').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_jasa_lainya_kontruksi_update1").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_jasa_lainya_kontruksi_update1 = $('#penilaian_konsultan_jasa_lainya_kontruksi_update1').val();
                if (penilaian_konsultan_jasa_lainya_kontruksi_update1.match(validasiHuruf)) {
                    $('#penilaian_konsultan_jasa_lainya_kontruksi_update1').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_jasa_lainya_kontruksi_update1').css('border-color', 'green');
                    $('#penilaian_konsultan_jasa_lainya_kontruksi_update1').val(penilaian_konsultan_jasa_lainya_kontruksi_update1);

                }

            };

        }
    });
    $('#penilaian_konsultan_jasa_lainya_kontruksi_update2').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_jasa_lainya_kontruksi_update2').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_jasa_lainya_kontruksi_update2").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_jasa_lainya_kontruksi_update2 = $('#penilaian_konsultan_jasa_lainya_kontruksi_update2').val();
                if (penilaian_konsultan_jasa_lainya_kontruksi_update2.match(validasiHuruf)) {
                    $('#penilaian_konsultan_jasa_lainya_kontruksi_update2').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_jasa_lainya_kontruksi_update2').css('border-color', 'green');
                    $('#penilaian_konsultan_jasa_lainya_kontruksi_update2').val(penilaian_konsultan_jasa_lainya_kontruksi_update2);

                }

            };

        }
    });

    $('#penilaian_konsultan_jasa_lainya_kontruksi_update3').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_jasa_lainya_kontruksi_update3').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_jasa_lainya_kontruksi_update3").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_jasa_lainya_kontruksi_update3 = $('#penilaian_konsultan_jasa_lainya_kontruksi_update3').val();
                if (penilaian_konsultan_jasa_lainya_kontruksi_update3.match(validasiHuruf)) {
                    $('#penilaian_konsultan_jasa_lainya_kontruksi_update3').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_jasa_lainya_kontruksi_update3').css('border-color', 'green');
                    $('#penilaian_konsultan_jasa_lainya_kontruksi_update3').val(penilaian_konsultan_jasa_lainya_kontruksi_update3);

                }

            };

        }
    });
    $('#penilaian_konsultan_jasa_lainya_kontruksi_update4').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_jasa_lainya_kontruksi_update4').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_jasa_lainya_kontruksi_update4").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_jasa_lainya_kontruksi_update4 = $('#penilaian_konsultan_jasa_lainya_kontruksi_update4').val();
                if (penilaian_konsultan_jasa_lainya_kontruksi_update4.match(validasiHuruf)) {
                    $('#penilaian_konsultan_jasa_lainya_kontruksi_update4').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_jasa_lainya_kontruksi_update4').css('border-color', 'green');
                    $('#penilaian_konsultan_jasa_lainya_kontruksi_update4').val(penilaian_konsultan_jasa_lainya_kontruksi_update4);

                }

            };

        }
    });
    $('#penilaian_konsultan_jasa_lainya_kontruksi_update5').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_jasa_lainya_kontruksi_update5').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_jasa_lainya_kontruksi_update5").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_jasa_lainya_kontruksi_update5 = $('#penilaian_konsultan_jasa_lainya_kontruksi_update5').val();
                if (penilaian_konsultan_jasa_lainya_kontruksi_update5.match(validasiHuruf)) {
                    $('#penilaian_konsultan_jasa_lainya_kontruksi_update5').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_jasa_lainya_kontruksi_update5').css('border-color', 'green');
                    $('#penilaian_konsultan_jasa_lainya_kontruksi_update5').val(penilaian_konsultan_jasa_lainya_kontruksi_update5);

                }

            };

        }
    });
    $('#penilaian_konsultan_jasa_lainya_kontruksi_update6').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_jasa_lainya_kontruksi_update6').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_jasa_lainya_kontruksi_update6").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_jasa_lainya_kontruksi_update6 = $('#penilaian_konsultan_jasa_lainya_kontruksi_update6').val();
                if (penilaian_konsultan_jasa_lainya_kontruksi_update6.match(validasiHuruf)) {
                    $('#penilaian_konsultan_jasa_lainya_kontruksi_update6').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_jasa_lainya_kontruksi_update6').css('border-color', 'green');
                    $('#penilaian_konsultan_jasa_lainya_kontruksi_update6').val(penilaian_konsultan_jasa_lainya_kontruksi_update6);

                }

            };

        }
    });
    $('#penilaian_konsultan_jasa_lainya_kontruksi_update7').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_jasa_lainya_kontruksi_update7').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_jasa_lainya_kontruksi_update7").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_jasa_lainya_kontruksi_update7 = $('#penilaian_konsultan_jasa_lainya_kontruksi_update7').val();
                if (penilaian_konsultan_jasa_lainya_kontruksi_update7.match(validasiHuruf)) {
                    $('#penilaian_konsultan_jasa_lainya_kontruksi_update7').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_jasa_lainya_kontruksi_update7').css('border-color', 'green');
                    $('#penilaian_konsultan_jasa_lainya_kontruksi_update7').val(penilaian_konsultan_jasa_lainya_kontruksi_update7);

                }

            };

        }
    });
    $('#penilaian_konsultan_jasa_lainya_kontruksi_update8').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_jasa_lainya_kontruksi_update8').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_jasa_lainya_kontruksi_update8").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_jasa_lainya_kontruksi_update8 = $('#penilaian_konsultan_jasa_lainya_kontruksi_update8').val();
                if (penilaian_konsultan_jasa_lainya_kontruksi_update8.match(validasiHuruf)) {
                    $('#penilaian_konsultan_jasa_lainya_kontruksi_update8').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_jasa_lainya_kontruksi_update8').css('border-color', 'green');
                    $('#penilaian_konsultan_jasa_lainya_kontruksi_update8').val(penilaian_konsultan_jasa_lainya_kontruksi_update8);

                }

            };

        }
    });
    $('#penilaian_konsultan_jasa_lainya_kontruksi_update9').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_jasa_lainya_kontruksi_update9').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_jasa_lainya_kontruksi_update9").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_jasa_lainya_kontruksi_update9 = $('#penilaian_konsultan_jasa_lainya_kontruksi_update9').val();
                if (penilaian_konsultan_jasa_lainya_kontruksi_update9.match(validasiHuruf)) {
                    $('#penilaian_konsultan_jasa_lainya_kontruksi_update9').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_jasa_lainya_kontruksi_update9').css('border-color', 'green');
                    $('#penilaian_konsultan_jasa_lainya_kontruksi_update9').val(penilaian_konsultan_jasa_lainya_kontruksi_update9);

                }

            };

        }
    });
    $('#penilaian_konsultan_jasa_lainya_kontruksi_update10').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_jasa_lainya_kontruksi_update10').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_jasa_lainya_kontruksi_update10").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_jasa_lainya_kontruksi_update10 = $('#penilaian_konsultan_jasa_lainya_kontruksi_update10').val();
                if (penilaian_konsultan_jasa_lainya_kontruksi_update10.match(validasiHuruf)) {
                    $('#penilaian_konsultan_jasa_lainya_kontruksi_update10').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_jasa_lainya_kontruksi_update10').css('border-color', 'green');
                    $('#penilaian_konsultan_jasa_lainya_kontruksi_update10').val(penilaian_konsultan_jasa_lainya_kontruksi_update10);

                }

            };

        }
    });
    $('#penilaian_konsultan_jasa_lainya_kontruksi_update11').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_jasa_lainya_kontruksi_update11').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_jasa_lainya_kontruksi_update11").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_jasa_lainya_kontruksi_update11 = $('#penilaian_konsultan_jasa_lainya_kontruksi_update11').val();
                if (penilaian_konsultan_jasa_lainya_kontruksi_update11.match(validasiHuruf)) {
                    $('#penilaian_konsultan_jasa_lainya_kontruksi_update11').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_jasa_lainya_kontruksi_update11').css('border-color', 'green');
                    $('#penilaian_konsultan_jasa_lainya_kontruksi_update11').val(penilaian_konsultan_jasa_lainya_kontruksi_update11);

                }

            };

        }
    });
    $('#penilaian_konsultan_jasa_lainya_kontruksi_update12').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_jasa_lainya_kontruksi_update12').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_jasa_lainya_kontruksi_update12").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_jasa_lainya_kontruksi_update12 = $('#penilaian_konsultan_jasa_lainya_kontruksi_update12').val();
                if (penilaian_konsultan_jasa_lainya_kontruksi_update12.match(validasiHuruf)) {
                    $('#penilaian_konsultan_jasa_lainya_kontruksi_update12').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_jasa_lainya_kontruksi_update12').css('border-color', 'green');
                    $('#penilaian_konsultan_jasa_lainya_kontruksi_update12').val(penilaian_konsultan_jasa_lainya_kontruksi_update12);

                }

            };

        }
    });
    $('#penilaian_konsultan_jasa_lainya_kontruksi_update13').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_jasa_lainya_kontruksi_update13').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_jasa_lainya_kontruksi_update13").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_jasa_lainya_kontruksi_update13 = $('#penilaian_konsultan_jasa_lainya_kontruksi_update13').val();
                if (penilaian_konsultan_jasa_lainya_kontruksi_update13.match(validasiHuruf)) {
                    $('#penilaian_konsultan_jasa_lainya_kontruksi_update13').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_jasa_lainya_kontruksi_update13').css('border-color', 'green');
                    $('#penilaian_konsultan_jasa_lainya_kontruksi_update13').val(penilaian_konsultan_jasa_lainya_kontruksi_update13);

                }

            };

        }
    });
    $('#penilaian_konsultan_jasa_lainya_kontruksi_update14').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_jasa_lainya_kontruksi_update14').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_jasa_lainya_kontruksi_update14").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_jasa_lainya_kontruksi_update14 = $('#penilaian_konsultan_jasa_lainya_kontruksi_update14').val();
                if (penilaian_konsultan_jasa_lainya_kontruksi_update14.match(validasiHuruf)) {
                    $('#penilaian_konsultan_jasa_lainya_kontruksi_update14').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_jasa_lainya_kontruksi_update14').css('border-color', 'green');
                    $('#penilaian_konsultan_jasa_lainya_kontruksi_update14').val(penilaian_konsultan_jasa_lainya_kontruksi_update14);

                }

            };

        }
    });
    $('#penilaian_konsultan_jasa_lainya_kontruksi_update15').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_jasa_lainya_kontruksi_update15').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_jasa_lainya_kontruksi_update15").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_jasa_lainya_kontruksi_update15 = $('#penilaian_konsultan_jasa_lainya_kontruksi_update15').val();
                if (penilaian_konsultan_jasa_lainya_kontruksi_update15.match(validasiHuruf)) {
                    $('#penilaian_konsultan_jasa_lainya_kontruksi_update15').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_jasa_lainya_kontruksi_update15').css('border-color', 'green');
                    $('#penilaian_konsultan_jasa_lainya_kontruksi_update15').val(penilaian_konsultan_jasa_lainya_kontruksi_update15);

                }

            };

        }
    });
</script>


<!-- INI UNTUK VALIDASI ANGKANYA Bagian tambah-->
<script>
    function message(icon, text) {
        swal({
            title: "Maaf Tidak Boleh Huruf Yaa !!!",
            text: text,
            icon: icon,
        });
    }

    function message_gak_boleh_lebih_angkanya(icon, text) {
        swal({
            title: "Maaf Angka Penilaian Tidak Boleh Lebih Dari 100 Yaa !!!",
            text: text,
            icon: icon,
        });
    }
    $('#penilaian_konsultan_jasa_lainya_kontruksi1').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_jasa_lainya_kontruksi1').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_jasa_lainya_kontruksi1").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_jasa_lainya_kontruksi1 = $('#penilaian_konsultan_jasa_lainya_kontruksi1').val();
                if (penilaian_konsultan_jasa_lainya_kontruksi1.match(validasiHuruf)) {
                    $('#penilaian_konsultan_jasa_lainya_kontruksi1').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_jasa_lainya_kontruksi1').css('border-color', 'green');
                    $('#penilaian_konsultan_jasa_lainya_kontruksi1').val(penilaian_konsultan_jasa_lainya_kontruksi1);

                }

            };

        }
    });
    $('#penilaian_konsultan_jasa_lainya_kontruksi2').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_jasa_lainya_kontruksi2').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_jasa_lainya_kontruksi2").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_jasa_lainya_kontruksi2 = $('#penilaian_konsultan_jasa_lainya_kontruksi2').val();
                if (penilaian_konsultan_jasa_lainya_kontruksi2.match(validasiHuruf)) {
                    $('#penilaian_konsultan_jasa_lainya_kontruksi2').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_jasa_lainya_kontruksi2').css('border-color', 'green');
                    $('#penilaian_konsultan_jasa_lainya_kontruksi2').val(penilaian_konsultan_jasa_lainya_kontruksi2);

                }

            };

        }
    });

    $('#penilaian_konsultan_jasa_lainya_kontruksi3').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_jasa_lainya_kontruksi3').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_jasa_lainya_kontruksi3").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_jasa_lainya_kontruksi3 = $('#penilaian_konsultan_jasa_lainya_kontruksi3').val();
                if (penilaian_konsultan_jasa_lainya_kontruksi3.match(validasiHuruf)) {
                    $('#penilaian_konsultan_jasa_lainya_kontruksi3').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_jasa_lainya_kontruksi3').css('border-color', 'green');
                    $('#penilaian_konsultan_jasa_lainya_kontruksi3').val(penilaian_konsultan_jasa_lainya_kontruksi3);

                }

            };

        }
    });
    $('#penilaian_konsultan_jasa_lainya_kontruksi4').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_jasa_lainya_kontruksi4').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_jasa_lainya_kontruksi4").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_jasa_lainya_kontruksi4 = $('#penilaian_konsultan_jasa_lainya_kontruksi4').val();
                if (penilaian_konsultan_jasa_lainya_kontruksi4.match(validasiHuruf)) {
                    $('#penilaian_konsultan_jasa_lainya_kontruksi4').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_jasa_lainya_kontruksi4').css('border-color', 'green');
                    $('#penilaian_konsultan_jasa_lainya_kontruksi4').val(penilaian_konsultan_jasa_lainya_kontruksi4);

                }

            };

        }
    });
    $('#penilaian_konsultan_jasa_lainya_kontruksi5').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_jasa_lainya_kontruksi5').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_jasa_lainya_kontruksi5").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_jasa_lainya_kontruksi5 = $('#penilaian_konsultan_jasa_lainya_kontruksi5').val();
                if (penilaian_konsultan_jasa_lainya_kontruksi5.match(validasiHuruf)) {
                    $('#penilaian_konsultan_jasa_lainya_kontruksi5').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_jasa_lainya_kontruksi5').css('border-color', 'green');
                    $('#penilaian_konsultan_jasa_lainya_kontruksi5').val(penilaian_konsultan_jasa_lainya_kontruksi5);

                }

            };

        }
    });
    $('#penilaian_konsultan_jasa_lainya_kontruksi6').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_jasa_lainya_kontruksi6').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_jasa_lainya_kontruksi6").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_jasa_lainya_kontruksi6 = $('#penilaian_konsultan_jasa_lainya_kontruksi6').val();
                if (penilaian_konsultan_jasa_lainya_kontruksi6.match(validasiHuruf)) {
                    $('#penilaian_konsultan_jasa_lainya_kontruksi6').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_jasa_lainya_kontruksi6').css('border-color', 'green');
                    $('#penilaian_konsultan_jasa_lainya_kontruksi6').val(penilaian_konsultan_jasa_lainya_kontruksi6);

                }

            };

        }
    });
    $('#penilaian_konsultan_jasa_lainya_kontruksi7').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_jasa_lainya_kontruksi7').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_jasa_lainya_kontruksi7").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_jasa_lainya_kontruksi7 = $('#penilaian_konsultan_jasa_lainya_kontruksi7').val();
                if (penilaian_konsultan_jasa_lainya_kontruksi7.match(validasiHuruf)) {
                    $('#penilaian_konsultan_jasa_lainya_kontruksi7').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_jasa_lainya_kontruksi7').css('border-color', 'green');
                    $('#penilaian_konsultan_jasa_lainya_kontruksi7').val(penilaian_konsultan_jasa_lainya_kontruksi7);

                }

            };

        }
    });
    $('#penilaian_konsultan_jasa_lainya_kontruksi8').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_jasa_lainya_kontruksi8').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_jasa_lainya_kontruksi8").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_jasa_lainya_kontruksi8 = $('#penilaian_konsultan_jasa_lainya_kontruksi8').val();
                if (penilaian_konsultan_jasa_lainya_kontruksi8.match(validasiHuruf)) {
                    $('#penilaian_konsultan_jasa_lainya_kontruksi8').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_jasa_lainya_kontruksi8').css('border-color', 'green');
                    $('#penilaian_konsultan_jasa_lainya_kontruksi8').val(penilaian_konsultan_jasa_lainya_kontruksi8);

                }

            };

        }
    });
    $('#penilaian_konsultan_jasa_lainya_kontruksi9').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_jasa_lainya_kontruksi9').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_jasa_lainya_kontruksi9").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_jasa_lainya_kontruksi9 = $('#penilaian_konsultan_jasa_lainya_kontruksi9').val();
                if (penilaian_konsultan_jasa_lainya_kontruksi9.match(validasiHuruf)) {
                    $('#penilaian_konsultan_jasa_lainya_kontruksi9').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_jasa_lainya_kontruksi9').css('border-color', 'green');
                    $('#penilaian_konsultan_jasa_lainya_kontruksi9').val(penilaian_konsultan_jasa_lainya_kontruksi9);

                }

            };

        }
    });
    $('#penilaian_konsultan_jasa_lainya_kontruksi10').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_jasa_lainya_kontruksi10').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_jasa_lainya_kontruksi10").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_jasa_lainya_kontruksi10 = $('#penilaian_konsultan_jasa_lainya_kontruksi10').val();
                if (penilaian_konsultan_jasa_lainya_kontruksi10.match(validasiHuruf)) {
                    $('#penilaian_konsultan_jasa_lainya_kontruksi10').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_jasa_lainya_kontruksi10').css('border-color', 'green');
                    $('#penilaian_konsultan_jasa_lainya_kontruksi10').val(penilaian_konsultan_jasa_lainya_kontruksi10);

                }

            };

        }
    });
    $('#penilaian_konsultan_jasa_lainya_kontruksi11').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_jasa_lainya_kontruksi11').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_jasa_lainya_kontruksi11").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_jasa_lainya_kontruksi11 = $('#penilaian_konsultan_jasa_lainya_kontruksi11').val();
                if (penilaian_konsultan_jasa_lainya_kontruksi11.match(validasiHuruf)) {
                    $('#penilaian_konsultan_jasa_lainya_kontruksi11').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_jasa_lainya_kontruksi11').css('border-color', 'green');
                    $('#penilaian_konsultan_jasa_lainya_kontruksi11').val(penilaian_konsultan_jasa_lainya_kontruksi11);

                }

            };

        }
    });
    $('#penilaian_konsultan_jasa_lainya_kontruksi12').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_jasa_lainya_kontruksi12').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_jasa_lainya_kontruksi12").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_jasa_lainya_kontruksi12 = $('#penilaian_konsultan_jasa_lainya_kontruksi12').val();
                if (penilaian_konsultan_jasa_lainya_kontruksi12.match(validasiHuruf)) {
                    $('#penilaian_konsultan_jasa_lainya_kontruksi12').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_jasa_lainya_kontruksi12').css('border-color', 'green');
                    $('#penilaian_konsultan_jasa_lainya_kontruksi12').val(penilaian_konsultan_jasa_lainya_kontruksi12);

                }

            };

        }
    });
    $('#penilaian_konsultan_jasa_lainya_kontruksi13').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_jasa_lainya_kontruksi13').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_jasa_lainya_kontruksi13").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_jasa_lainya_kontruksi13 = $('#penilaian_konsultan_jasa_lainya_kontruksi13').val();
                if (penilaian_konsultan_jasa_lainya_kontruksi13.match(validasiHuruf)) {
                    $('#penilaian_konsultan_jasa_lainya_kontruksi13').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_jasa_lainya_kontruksi13').css('border-color', 'green');
                    $('#penilaian_konsultan_jasa_lainya_kontruksi13').val(penilaian_konsultan_jasa_lainya_kontruksi13);

                }

            };

        }
    });
</script>


<!-- ININ UNTUK VALIDASI BUTTON dan nilaik akhir TAMBAH -->
<!-- keyup nilai pekerjaan kontruksi -->
<script>
    $(document).ready(function() {
        $("#penilaian_konsultan_jasa_lainya_kontruksi1, #penilaian_konsultan_jasa_lainya_kontruksi2, #penilaian_konsultan_jasa_lainya_kontruksi3, #penilaian_konsultan_jasa_lainya_kontruksi4,#penilaian_konsultan_jasa_lainya_kontruksi5,#penilaian_konsultan_jasa_lainya_kontruksi6,#penilaian_konsultan_jasa_lainya_kontruksi7,#penilaian_konsultan_jasa_lainya_kontruksi8,#penilaian_konsultan_jasa_lainya_kontruksi9,#penilaian_konsultan_jasa_lainya_kontruksi10,#penilaian_konsultan_jasa_lainya_kontruksi11,#penilaian_konsultan_jasa_lainya_kontruksi12,#penilaian_konsultan_jasa_lainya_kontruksi13").keyup(function() {
            // 1
            var bobot_pekerjaan_kontruksi1 = $('#bobot_pekerjaan_konsultan_jasa_lainya_kontruksi1').val();
            var penilaian_kontruksi1 = $('#penilaian_konsultan_jasa_lainya_kontruksi1').val();
            var nilai_akhir_kontruksi1 = bobot_pekerjaan_kontruksi1 * penilaian_kontruksi1 / 100;
            $('#nilai_akhir_pekerjaan_konsultan_jasa_lainya_kontruksi_aspek1').val(parseFloat(nilai_akhir_kontruksi1));
            // 2
            var bobot_pekerjaan_kontruksi2 = $('#bobot_pekerjaan_konsultan_jasa_lainya_kontruksi2').val();
            var penilaian_kontruksi2 = $('#penilaian_konsultan_jasa_lainya_kontruksi2').val();
            var nilai_akhir_kontruksi2 = bobot_pekerjaan_kontruksi2 * penilaian_kontruksi2 / 100;
            $('#nilai_akhir_pekerjaan_konsultan_jasa_lainya_kontruksi_aspek2').val(parseFloat(nilai_akhir_kontruksi2));
            // 3
            var bobot_pekerjaan_kontruksi3 = $('#bobot_pekerjaan_konsultan_jasa_lainya_kontruksi3').val();
            var penilaian_kontruksi3 = $('#penilaian_konsultan_jasa_lainya_kontruksi3').val();
            var nilai_akhir_kontruksi3 = bobot_pekerjaan_kontruksi3 * penilaian_kontruksi3 / 100;
            $('#nilai_akhir_pekerjaan_konsultan_jasa_lainya_kontruksi_aspek3').val(parseFloat(nilai_akhir_kontruksi3));
            // 4
            var bobot_pekerjaan_kontruksi4 = $('#bobot_pekerjaan_konsultan_jasa_lainya_kontruksi4').val();
            var penilaian_kontruksi4 = $('#penilaian_konsultan_jasa_lainya_kontruksi4').val();
            var nilai_akhir_kontruksi4 = bobot_pekerjaan_kontruksi4 * penilaian_kontruksi4 / 100;
            $('#nilai_akhir_pekerjaan_konsultan_jasa_lainya_kontruksi_aspek4').val(parseFloat(nilai_akhir_kontruksi4));
            // 5
            var bobot_pekerjaan_kontruksi5 = $('#bobot_pekerjaan_konsultan_jasa_lainya_kontruksi5').val();
            var penilaian_kontruksi5 = $('#penilaian_konsultan_jasa_lainya_kontruksi5').val();
            var nilai_akhir_kontruksi5 = bobot_pekerjaan_kontruksi5 * penilaian_kontruksi5 / 100;
            $('#nilai_akhir_pekerjaan_konsultan_jasa_lainya_kontruksi_aspek5').val(parseFloat(nilai_akhir_kontruksi5));
            // 6
            var bobot_pekerjaan_kontruksi6 = $('#bobot_pekerjaan_konsultan_jasa_lainya_kontruksi6').val();
            var penilaian_kontruksi6 = $('#penilaian_konsultan_jasa_lainya_kontruksi6').val();
            var nilai_akhir_kontruksi6 = bobot_pekerjaan_kontruksi6 * penilaian_kontruksi6 / 100;
            $('#nilai_akhir_pekerjaan_konsultan_jasa_lainya_kontruksi_aspek6').val(parseFloat(nilai_akhir_kontruksi6));
            // 7
            var bobot_pekerjaan_kontruksi7 = $('#bobot_pekerjaan_konsultan_jasa_lainya_kontruksi7').val();
            var penilaian_kontruksi7 = $('#penilaian_konsultan_jasa_lainya_kontruksi7').val();
            var nilai_akhir_kontruksi7 = bobot_pekerjaan_kontruksi7 * penilaian_kontruksi7 / 100;
            $('#nilai_akhir_pekerjaan_konsultan_jasa_lainya_kontruksi_aspek7').val(parseFloat(nilai_akhir_kontruksi7));
            // 8
            var bobot_pekerjaan_kontruksi8 = $('#bobot_pekerjaan_konsultan_jasa_lainya_kontruksi8').val();
            var penilaian_kontruksi8 = $('#penilaian_konsultan_jasa_lainya_kontruksi8').val();
            var nilai_akhir_kontruksi8 = bobot_pekerjaan_kontruksi8 * penilaian_kontruksi8 / 100;
            $('#nilai_akhir_pekerjaan_konsultan_jasa_lainya_kontruksi_aspek8').val(parseFloat(nilai_akhir_kontruksi8));
            // 9
            var bobot_pekerjaan_kontruksi9 = $('#bobot_pekerjaan_konsultan_jasa_lainya_kontruksi9').val();
            var penilaian_kontruksi9 = $('#penilaian_konsultan_jasa_lainya_kontruksi9').val();
            var nilai_akhir_kontruksi9 = bobot_pekerjaan_kontruksi9 * penilaian_kontruksi9 / 100;
            $('#nilai_akhir_pekerjaan_konsultan_jasa_lainya_kontruksi_aspek9').val(parseFloat(nilai_akhir_kontruksi9));
            // 10
            var bobot_pekerjaan_kontruksi10 = $('#bobot_pekerjaan_konsultan_jasa_lainya_kontruksi10').val();
            var penilaian_kontruksi10 = $('#penilaian_konsultan_jasa_lainya_kontruksi10').val();
            var nilai_akhir_kontruksi10 = bobot_pekerjaan_kontruksi10 * penilaian_kontruksi10 / 100;
            $('#nilai_akhir_pekerjaan_konsultan_jasa_lainya_kontruksi_aspek10').val(parseFloat(nilai_akhir_kontruksi10));
            // 11
            var bobot_pekerjaan_kontruksi11 = $('#bobot_pekerjaan_konsultan_jasa_lainya_kontruksi11').val();
            var penilaian_kontruksi11 = $('#penilaian_konsultan_jasa_lainya_kontruksi11').val();
            var nilai_akhir_kontruksi11 = bobot_pekerjaan_kontruksi11 * penilaian_kontruksi11 / 100;
            $('#nilai_akhir_pekerjaan_konsultan_jasa_lainya_kontruksi_aspek11').val(parseFloat(nilai_akhir_kontruksi11));
            // 12
            var bobot_pekerjaan_kontruksi12 = $('#bobot_pekerjaan_konsultan_jasa_lainya_kontruksi12').val();
            var penilaian_kontruksi12 = $('#penilaian_konsultan_jasa_lainya_kontruksi12').val();
            var nilai_akhir_kontruksi12 = bobot_pekerjaan_kontruksi12 * penilaian_kontruksi12 / 100;
            $('#nilai_akhir_pekerjaan_konsultan_jasa_lainya_kontruksi_aspek12').val(parseFloat(nilai_akhir_kontruksi12));
            // 13
            var bobot_pekerjaan_kontruksi13 = $('#bobot_pekerjaan_konsultan_jasa_lainya_kontruksi13').val();
            var penilaian_kontruksi13 = $('#penilaian_konsultan_jasa_lainya_kontruksi13').val();
            var nilai_akhir_kontruksi13 = bobot_pekerjaan_kontruksi13 * penilaian_kontruksi13 / 100;
            $('#nilai_akhir_pekerjaan_konsultan_jasa_lainya_kontruksi_aspek13').val(parseFloat(nilai_akhir_kontruksi13));

            var total = parseFloat(nilai_akhir_kontruksi1) + parseFloat(nilai_akhir_kontruksi2) + parseFloat(nilai_akhir_kontruksi3) + parseFloat(nilai_akhir_kontruksi4) + parseFloat(nilai_akhir_kontruksi5) + parseFloat(nilai_akhir_kontruksi6) + parseFloat(nilai_akhir_kontruksi7) + parseFloat(nilai_akhir_kontruksi8) + parseFloat(nilai_akhir_kontruksi9) + parseFloat(nilai_akhir_kontruksi10) + parseFloat(nilai_akhir_kontruksi11) + parseFloat(nilai_akhir_kontruksi12) + parseFloat(nilai_akhir_kontruksi13);
            var total_button = $("#total_nilai_pekerjaan_konsultan_jasa_lainya_kontruksi").val(total);
            if (total <= 51) {
                $('[name="rating_penilaian_vendor_pekerjaan_konsultan_jasa_lainya_kontruksi"]').val(4);
                $('[name="status_rating_pekerjaan_konsultan_jasa_lainya_kontruksi"]').val('kurang baik');
                $('[name="status_nilai_akhir_pekerjaan_konsultan_jasa_lainya_kontruksi"]').val(total);
                $('#status_pekerjaan_konsultan_jasa_lainya_kontruksi').html('<label for="" class="badge badge-danger">Kurang Baik</label>');
                $('#warning_button_konsultan_jasa_lainya_kontruksi').show();
                $('#save_button_konsultan_jasa_lainya_kontruksi').hide();
                $('#bintang_pekerjaan_konsultan_jasa_lainya_kontruksi').html('');
            } else if (total <= 70) {
                $('[name="rating_penilaian_vendor_pekerjaan_konsultan_jasa_lainya_kontruksi"]').val(1);
                $('[name="status_rating_pekerjaan_konsultan_jasa_lainya_kontruksi"]').val('cukup baik');
                $('[name="status_nilai_akhir_pekerjaan_konsultan_jasa_lainya_kontruksi"]').val(total);
                $('#save_button_konsultan_jasa_lainya_kontruksi').show();
                $('#warning_button_konsultan_jasa_lainya_kontruksi').hide();
                $('#status_pekerjaan_konsultan_jasa_lainya_kontruksi').html('<label for="" class="badge badge-warning">Cukup Baik</label>');
                $('#bintang_pekerjaan_konsultan_jasa_lainya_kontruksi').html('<i class="fas fa fa-star text-warning"></i>');
            } else if (total <= 80) {
                $('[name="rating_penilaian_vendor_pekerjaan_konsultan_jasa_lainya_kontruksi"]').val(2);
                $('[name="status_rating_pekerjaan_konsultan_jasa_lainya_kontruksi"]').val('baik');
                $('[name="status_nilai_akhir_pekerjaan_konsultan_jasa_lainya_kontruksi"]').val(total);
                $('#save_button_konsultan_jasa_lainya_kontruksi').show();
                $('#warning_button_konsultan_jasa_lainya_kontruksi').hide();
                $('#status_pekerjaan_konsultan_jasa_lainya_kontruksi').html('<label for="" class="badge badge-warning">Baik</label>');
                $('#bintang_pekerjaan_konsultan_jasa_lainya_kontruksi').html('<i class="fas fa fa-star text-warning"></i><i class="fas fa fa-star text-warning"></i>');
            } else {
                $('[name="rating_penilaian_vendor_pekerjaan_konsultan_jasa_lainya_kontruksi"]').val(3);
                $('[name="status_rating_pekerjaan_konsultan_jasa_lainya_kontruksi"]').val('sangat baik');
                $('[name="status_nilai_akhir_pekerjaan_konsultan_jasa_lainya_kontruksi"]').val(total);
                $('#save_button_konsultan_jasa_lainya_kontruksi').show();
                $('#warning_button_konsultan_jasa_lainya_kontruksi').hide();
                $('#status_pekerjaan_konsultan_jasa_lainya_kontruksi').html('<label for="" class="badge badge-success">Sangat Baik</label>');
                $('#bintang_pekerjaan_konsultan_jasa_lainya_kontruksi').html('<i class="fas fa fa-star text-warning"></i><i class="fas fa fa-star text-warning"></i><i class="fas fa fa-star text-warning"></i>');
            }

        });
    });
</script>





<!-- INI BAGIAN UNTUK PENILAIAN Penyedia Barang -->

<!-- INI BATAS PENILAIAN Penyedia Barang ===================================================================================================================================== -->

<!-- AJAX BARUUU TAMBAH REVISI -->
<script>
    function message3(icon, text) {
        swal({
            title: "Good Jobs!!!",
            text: text,
            icon: icon,
        });
    }

    function message5(icon, text) {
        swal({
            title: "Anda Berhasil Mereset Nilai!!!",
            text: text,
            icon: icon,
        });
    }
    var form_tambah_pekerjaan_konsultan_penyedia_barang_kontruksi = $('#form_tambah_pekerjaan_konsultan_penyedia_barang_kontruksi');

    function Simpan_pekerjaan_konsultan_penyedia_barang_kontruksi() {
        $.ajax({
            method: "POST",
            url: 'https://eproc.jmtm.co.id/beranda/tambah_pekerjaan_konsultan_penyedia_barang_kontruksisaya',
            data: form_tambah_pekerjaan_konsultan_penyedia_barang_kontruksi.serialize(),
            dataType: "JSON",
            success: function(response) {
                if (response == 'success') {
                    message3('success', 'Penilaian Berhasil Di Buat!!');
                    location.reload();
                }
            },
        })
    }
    var form_tambah_pekerjaan_konsultan_penyedia_barang_kontruksi = $('#form_tambah_pekerjaan_konsultan_penyedia_barang_kontruksi');

    function Simpan_Warning_pekerjaan_konsultan_penyedia_barang_kontruksi_warning() {
        $.ajax({
            method: "POST",
            url: 'https://eproc.jmtm.co.id/beranda/tambah_warning_pekerjaan_konsultan_penyedia_barang_kontruksisaya',
            data: form_tambah_pekerjaan_konsultan_penyedia_barang_kontruksi.serialize(),
            dataType: "JSON",
            beforeSend: function() {
                $("#kirim_ke_vendor").css('display', 'block');
            },
            success: function(response) {
                $("#kirim_ke_vendor").css('display', 'none');
                window.open('https://api.whatsapp.com/send?phone=+62' + response['telpon'] + '&text=Laporan Penilaian Kinerja Vendor Nama Paket  : ' + response['paket'].nama_paket + ' Dengan Metode Pemilihan : ' + response['paket'].nama_metode_pemilihan + '  Agency : ' + response['paket'].nama_unit_kerja + ', Info : ' + response['isi'] + '', '_blank');
                message3('success', 'Penilaian Berhasil Di Buat');
                location.reload();
            },
        })
    }

    var form_tambah_pekerjaan_konsultan_penyedia_barang_kontruksi_reset = $('#form_tambah_pekerjaan_konsultan_penyedia_barang_kontruksi');

    function Reset_nilai_pekerjaan_konsultan_penyedia_barang_kontruksi() {
        $.ajax({
            method: "POST",
            url: 'https://eproc.jmtm.co.id/beranda/reset_penilaian_performance_pekerjaan_konsultan_penyedia_barang_kontruksi',
            data: form_tambah_pekerjaan_konsultan_penyedia_barang_kontruksi_reset.serialize(),
            dataType: "JSON",
            beforeSend: function() {
                $("#kirim_ke_vendor").css('display', 'block');
            },
            success: function(response) {
                $("#kirim_ke_vendor").css('display', 'none');
                window.open('https://api.whatsapp.com/send?phone=+62' + response['telpon'] + '&text=Laporan Penilaian Kinerja Vendor Nama Paket  : ' + response['paket'].nama_paket + ' Dengan Metode Pemilihan : ' + response['paket'].nama_metode_pemilihan + '  Agency : ' + response['paket'].nama_unit_kerja + ', Info : ' + response['isi'] + '', '_blank');
                message5('success', 'Penilaian Berhasil Di Reset');
                location.reload();
            },
        })
    }
</script>
<!-- INI UNTUK UPDATENYA -->
<script>
    function message3(icon, text) {
        swal({
            title: "Good Jobs!!!",
            text: text,
            icon: icon,
        });
    }
    var form_tambah_pekerjaan_konsultan_penyedia_barang_kontruksi = $('#form_tambah_pekerjaan_konsultan_penyedia_barang_kontruksi');

    function Update_pekerjaan_konsultan_penyedia_barang_kontruksi() {
        $.ajax({
            method: "POST",
            url: 'https://eproc.jmtm.co.id/beranda/update_pekerjaan_konsultan_penyedia_barang_kontruksisaya',
            data: form_tambah_pekerjaan_konsultan_penyedia_barang_kontruksi.serialize(),
            dataType: "JSON",
            success: function(response) {
                if (response == 'success') {
                    message3('success', 'Penilaian Berhasil Di Update!!');
                    location.reload();
                }
            },
        })
    }
</script>


<!-- INI UNTUK VALIDASI ANGKANYA Bagian UPDATE-->
<script>
    function message(icon, text) {
        swal({
            title: "Maaf Tidak Boleh Huruf Yaa !!!",
            text: text,
            icon: icon,
        });
    }

    function message_gak_boleh_lebih_angkanya(icon, text) {
        swal({
            title: "Maaf Angka Penilaian Tidak Boleh Lebih Dari 100 Yaa !!!",
            text: text,
            icon: icon,
        });
    }
    $('#penilaian_konsultan_penyedia_barang_kontruksi_update1').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_penyedia_barang_kontruksi_update1').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_penyedia_barang_kontruksi_update1").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_penyedia_barang_kontruksi_update1 = $('#penilaian_konsultan_penyedia_barang_kontruksi_update1').val();
                if (penilaian_konsultan_penyedia_barang_kontruksi_update1.match(validasiHuruf)) {
                    $('#penilaian_konsultan_penyedia_barang_kontruksi_update1').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_penyedia_barang_kontruksi_update1').css('border-color', 'green');
                    $('#penilaian_konsultan_penyedia_barang_kontruksi_update1').val(penilaian_konsultan_penyedia_barang_kontruksi_update1);

                }

            };

        }
    });
    $('#penilaian_konsultan_penyedia_barang_kontruksi_update2').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_penyedia_barang_kontruksi_update2').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_penyedia_barang_kontruksi_update2").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_penyedia_barang_kontruksi_update2 = $('#penilaian_konsultan_penyedia_barang_kontruksi_update2').val();
                if (penilaian_konsultan_penyedia_barang_kontruksi_update2.match(validasiHuruf)) {
                    $('#penilaian_konsultan_penyedia_barang_kontruksi_update2').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_penyedia_barang_kontruksi_update2').css('border-color', 'green');
                    $('#penilaian_konsultan_penyedia_barang_kontruksi_update2').val(penilaian_konsultan_penyedia_barang_kontruksi_update2);

                }

            };

        }
    });

    $('#penilaian_konsultan_penyedia_barang_kontruksi_update3').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_penyedia_barang_kontruksi_update3').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_penyedia_barang_kontruksi_update3").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_penyedia_barang_kontruksi_update3 = $('#penilaian_konsultan_penyedia_barang_kontruksi_update3').val();
                if (penilaian_konsultan_penyedia_barang_kontruksi_update3.match(validasiHuruf)) {
                    $('#penilaian_konsultan_penyedia_barang_kontruksi_update3').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_penyedia_barang_kontruksi_update3').css('border-color', 'green');
                    $('#penilaian_konsultan_penyedia_barang_kontruksi_update3').val(penilaian_konsultan_penyedia_barang_kontruksi_update3);

                }

            };

        }
    });
    $('#penilaian_konsultan_penyedia_barang_kontruksi_update4').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_penyedia_barang_kontruksi_update4').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_penyedia_barang_kontruksi_update4").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_penyedia_barang_kontruksi_update4 = $('#penilaian_konsultan_penyedia_barang_kontruksi_update4').val();
                if (penilaian_konsultan_penyedia_barang_kontruksi_update4.match(validasiHuruf)) {
                    $('#penilaian_konsultan_penyedia_barang_kontruksi_update4').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_penyedia_barang_kontruksi_update4').css('border-color', 'green');
                    $('#penilaian_konsultan_penyedia_barang_kontruksi_update4').val(penilaian_konsultan_penyedia_barang_kontruksi_update4);

                }

            };

        }
    });
    $('#penilaian_konsultan_penyedia_barang_kontruksi_update5').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_penyedia_barang_kontruksi_update5').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_penyedia_barang_kontruksi_update5").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_penyedia_barang_kontruksi_update5 = $('#penilaian_konsultan_penyedia_barang_kontruksi_update5').val();
                if (penilaian_konsultan_penyedia_barang_kontruksi_update5.match(validasiHuruf)) {
                    $('#penilaian_konsultan_penyedia_barang_kontruksi_update5').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_penyedia_barang_kontruksi_update5').css('border-color', 'green');
                    $('#penilaian_konsultan_penyedia_barang_kontruksi_update5').val(penilaian_konsultan_penyedia_barang_kontruksi_update5);

                }

            };

        }
    });
    $('#penilaian_konsultan_penyedia_barang_kontruksi_update6').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_penyedia_barang_kontruksi_update6').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_penyedia_barang_kontruksi_update6").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_penyedia_barang_kontruksi_update6 = $('#penilaian_konsultan_penyedia_barang_kontruksi_update6').val();
                if (penilaian_konsultan_penyedia_barang_kontruksi_update6.match(validasiHuruf)) {
                    $('#penilaian_konsultan_penyedia_barang_kontruksi_update6').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_penyedia_barang_kontruksi_update6').css('border-color', 'green');
                    $('#penilaian_konsultan_penyedia_barang_kontruksi_update6').val(penilaian_konsultan_penyedia_barang_kontruksi_update6);

                }

            };

        }
    });
    $('#penilaian_konsultan_penyedia_barang_kontruksi_update7').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_penyedia_barang_kontruksi_update7').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_penyedia_barang_kontruksi_update7").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_penyedia_barang_kontruksi_update7 = $('#penilaian_konsultan_penyedia_barang_kontruksi_update7').val();
                if (penilaian_konsultan_penyedia_barang_kontruksi_update7.match(validasiHuruf)) {
                    $('#penilaian_konsultan_penyedia_barang_kontruksi_update7').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_penyedia_barang_kontruksi_update7').css('border-color', 'green');
                    $('#penilaian_konsultan_penyedia_barang_kontruksi_update7').val(penilaian_konsultan_penyedia_barang_kontruksi_update7);

                }

            };

        }
    });
    $('#penilaian_konsultan_penyedia_barang_kontruksi_update8').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_penyedia_barang_kontruksi_update8').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_penyedia_barang_kontruksi_update8").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_penyedia_barang_kontruksi_update8 = $('#penilaian_konsultan_penyedia_barang_kontruksi_update8').val();
                if (penilaian_konsultan_penyedia_barang_kontruksi_update8.match(validasiHuruf)) {
                    $('#penilaian_konsultan_penyedia_barang_kontruksi_update8').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_penyedia_barang_kontruksi_update8').css('border-color', 'green');
                    $('#penilaian_konsultan_penyedia_barang_kontruksi_update8').val(penilaian_konsultan_penyedia_barang_kontruksi_update8);

                }

            };

        }
    });
    $('#penilaian_konsultan_penyedia_barang_kontruksi_update9').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_penyedia_barang_kontruksi_update9').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_penyedia_barang_kontruksi_update9").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_penyedia_barang_kontruksi_update9 = $('#penilaian_konsultan_penyedia_barang_kontruksi_update9').val();
                if (penilaian_konsultan_penyedia_barang_kontruksi_update9.match(validasiHuruf)) {
                    $('#penilaian_konsultan_penyedia_barang_kontruksi_update9').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_penyedia_barang_kontruksi_update9').css('border-color', 'green');
                    $('#penilaian_konsultan_penyedia_barang_kontruksi_update9').val(penilaian_konsultan_penyedia_barang_kontruksi_update9);

                }

            };

        }
    });
    $('#penilaian_konsultan_penyedia_barang_kontruksi_update10').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_penyedia_barang_kontruksi_update10').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_penyedia_barang_kontruksi_update10").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_penyedia_barang_kontruksi_update10 = $('#penilaian_konsultan_penyedia_barang_kontruksi_update10').val();
                if (penilaian_konsultan_penyedia_barang_kontruksi_update10.match(validasiHuruf)) {
                    $('#penilaian_konsultan_penyedia_barang_kontruksi_update10').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_penyedia_barang_kontruksi_update10').css('border-color', 'green');
                    $('#penilaian_konsultan_penyedia_barang_kontruksi_update10').val(penilaian_konsultan_penyedia_barang_kontruksi_update10);

                }

            };

        }
    });
    $('#penilaian_konsultan_penyedia_barang_kontruksi_update11').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_penyedia_barang_kontruksi_update11').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_penyedia_barang_kontruksi_update11").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_penyedia_barang_kontruksi_update11 = $('#penilaian_konsultan_penyedia_barang_kontruksi_update11').val();
                if (penilaian_konsultan_penyedia_barang_kontruksi_update11.match(validasiHuruf)) {
                    $('#penilaian_konsultan_penyedia_barang_kontruksi_update11').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_penyedia_barang_kontruksi_update11').css('border-color', 'green');
                    $('#penilaian_konsultan_penyedia_barang_kontruksi_update11').val(penilaian_konsultan_penyedia_barang_kontruksi_update11);

                }

            };

        }
    });
    $('#penilaian_konsultan_penyedia_barang_kontruksi_update12').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_penyedia_barang_kontruksi_update12').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_penyedia_barang_kontruksi_update12").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_penyedia_barang_kontruksi_update12 = $('#penilaian_konsultan_penyedia_barang_kontruksi_update12').val();
                if (penilaian_konsultan_penyedia_barang_kontruksi_update12.match(validasiHuruf)) {
                    $('#penilaian_konsultan_penyedia_barang_kontruksi_update12').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_penyedia_barang_kontruksi_update12').css('border-color', 'green');
                    $('#penilaian_konsultan_penyedia_barang_kontruksi_update12').val(penilaian_konsultan_penyedia_barang_kontruksi_update12);

                }

            };

        }
    });
    $('#penilaian_konsultan_penyedia_barang_kontruksi_update13').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_penyedia_barang_kontruksi_update13').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_penyedia_barang_kontruksi_update13").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_penyedia_barang_kontruksi_update13 = $('#penilaian_konsultan_penyedia_barang_kontruksi_update13').val();
                if (penilaian_konsultan_penyedia_barang_kontruksi_update13.match(validasiHuruf)) {
                    $('#penilaian_konsultan_penyedia_barang_kontruksi_update13').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_penyedia_barang_kontruksi_update13').css('border-color', 'green');
                    $('#penilaian_konsultan_penyedia_barang_kontruksi_update13').val(penilaian_konsultan_penyedia_barang_kontruksi_update13);

                }

            };

        }
    });
    $('#penilaian_konsultan_penyedia_barang_kontruksi_update14').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_penyedia_barang_kontruksi_update14').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_penyedia_barang_kontruksi_update14").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_penyedia_barang_kontruksi_update14 = $('#penilaian_konsultan_penyedia_barang_kontruksi_update14').val();
                if (penilaian_konsultan_penyedia_barang_kontruksi_update14.match(validasiHuruf)) {
                    $('#penilaian_konsultan_penyedia_barang_kontruksi_update14').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_penyedia_barang_kontruksi_update14').css('border-color', 'green');
                    $('#penilaian_konsultan_penyedia_barang_kontruksi_update14').val(penilaian_konsultan_penyedia_barang_kontruksi_update14);

                }

            };

        }
    });
    $('#penilaian_konsultan_penyedia_barang_kontruksi_update15').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_penyedia_barang_kontruksi_update15').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_penyedia_barang_kontruksi_update15").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_penyedia_barang_kontruksi_update15 = $('#penilaian_konsultan_penyedia_barang_kontruksi_update15').val();
                if (penilaian_konsultan_penyedia_barang_kontruksi_update15.match(validasiHuruf)) {
                    $('#penilaian_konsultan_penyedia_barang_kontruksi_update15').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_penyedia_barang_kontruksi_update15').css('border-color', 'green');
                    $('#penilaian_konsultan_penyedia_barang_kontruksi_update15').val(penilaian_konsultan_penyedia_barang_kontruksi_update15);

                }

            };

        }
    });
</script>


<!-- INI UNTUK VALIDASI ANGKANYA Bagian tambah-->
<script>
    function message(icon, text) {
        swal({
            title: "Maaf Tidak Boleh Huruf Yaa !!!",
            text: text,
            icon: icon,
        });
    }

    function message_gak_boleh_lebih_angkanya(icon, text) {
        swal({
            title: "Maaf Angka Penilaian Tidak Boleh Lebih Dari 100 Yaa !!!",
            text: text,
            icon: icon,
        });
    }
    $('#penilaian_konsultan_penyedia_barang_kontruksi1').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_penyedia_barang_kontruksi1').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_penyedia_barang_kontruksi1").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_penyedia_barang_kontruksi1 = $('#penilaian_konsultan_penyedia_barang_kontruksi1').val();
                if (penilaian_konsultan_penyedia_barang_kontruksi1.match(validasiHuruf)) {
                    $('#penilaian_konsultan_penyedia_barang_kontruksi1').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_penyedia_barang_kontruksi1').css('border-color', 'green');
                    $('#penilaian_konsultan_penyedia_barang_kontruksi1').val(penilaian_konsultan_penyedia_barang_kontruksi1);

                }

            };

        }
    });
    $('#penilaian_konsultan_penyedia_barang_kontruksi2').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_penyedia_barang_kontruksi2').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_penyedia_barang_kontruksi2").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_penyedia_barang_kontruksi2 = $('#penilaian_konsultan_penyedia_barang_kontruksi2').val();
                if (penilaian_konsultan_penyedia_barang_kontruksi2.match(validasiHuruf)) {
                    $('#penilaian_konsultan_penyedia_barang_kontruksi2').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_penyedia_barang_kontruksi2').css('border-color', 'green');
                    $('#penilaian_konsultan_penyedia_barang_kontruksi2').val(penilaian_konsultan_penyedia_barang_kontruksi2);

                }

            };

        }
    });

    $('#penilaian_konsultan_penyedia_barang_kontruksi3').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_penyedia_barang_kontruksi3').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_penyedia_barang_kontruksi3").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_penyedia_barang_kontruksi3 = $('#penilaian_konsultan_penyedia_barang_kontruksi3').val();
                if (penilaian_konsultan_penyedia_barang_kontruksi3.match(validasiHuruf)) {
                    $('#penilaian_konsultan_penyedia_barang_kontruksi3').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_penyedia_barang_kontruksi3').css('border-color', 'green');
                    $('#penilaian_konsultan_penyedia_barang_kontruksi3').val(penilaian_konsultan_penyedia_barang_kontruksi3);

                }

            };

        }
    });
    $('#penilaian_konsultan_penyedia_barang_kontruksi4').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_penyedia_barang_kontruksi4').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_penyedia_barang_kontruksi4").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_penyedia_barang_kontruksi4 = $('#penilaian_konsultan_penyedia_barang_kontruksi4').val();
                if (penilaian_konsultan_penyedia_barang_kontruksi4.match(validasiHuruf)) {
                    $('#penilaian_konsultan_penyedia_barang_kontruksi4').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_penyedia_barang_kontruksi4').css('border-color', 'green');
                    $('#penilaian_konsultan_penyedia_barang_kontruksi4').val(penilaian_konsultan_penyedia_barang_kontruksi4);

                }

            };

        }
    });
    $('#penilaian_konsultan_penyedia_barang_kontruksi5').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_penyedia_barang_kontruksi5').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_penyedia_barang_kontruksi5").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_penyedia_barang_kontruksi5 = $('#penilaian_konsultan_penyedia_barang_kontruksi5').val();
                if (penilaian_konsultan_penyedia_barang_kontruksi5.match(validasiHuruf)) {
                    $('#penilaian_konsultan_penyedia_barang_kontruksi5').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_penyedia_barang_kontruksi5').css('border-color', 'green');
                    $('#penilaian_konsultan_penyedia_barang_kontruksi5').val(penilaian_konsultan_penyedia_barang_kontruksi5);

                }

            };

        }
    });
    $('#penilaian_konsultan_penyedia_barang_kontruksi6').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_penyedia_barang_kontruksi6').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_penyedia_barang_kontruksi6").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_penyedia_barang_kontruksi6 = $('#penilaian_konsultan_penyedia_barang_kontruksi6').val();
                if (penilaian_konsultan_penyedia_barang_kontruksi6.match(validasiHuruf)) {
                    $('#penilaian_konsultan_penyedia_barang_kontruksi6').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_penyedia_barang_kontruksi6').css('border-color', 'green');
                    $('#penilaian_konsultan_penyedia_barang_kontruksi6').val(penilaian_konsultan_penyedia_barang_kontruksi6);

                }

            };

        }
    });
    $('#penilaian_konsultan_penyedia_barang_kontruksi7').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_penyedia_barang_kontruksi7').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_penyedia_barang_kontruksi7").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_penyedia_barang_kontruksi7 = $('#penilaian_konsultan_penyedia_barang_kontruksi7').val();
                if (penilaian_konsultan_penyedia_barang_kontruksi7.match(validasiHuruf)) {
                    $('#penilaian_konsultan_penyedia_barang_kontruksi7').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_penyedia_barang_kontruksi7').css('border-color', 'green');
                    $('#penilaian_konsultan_penyedia_barang_kontruksi7').val(penilaian_konsultan_penyedia_barang_kontruksi7);

                }

            };

        }
    });
    $('#penilaian_konsultan_penyedia_barang_kontruksi8').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_penyedia_barang_kontruksi8').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_penyedia_barang_kontruksi8").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_penyedia_barang_kontruksi8 = $('#penilaian_konsultan_penyedia_barang_kontruksi8').val();
                if (penilaian_konsultan_penyedia_barang_kontruksi8.match(validasiHuruf)) {
                    $('#penilaian_konsultan_penyedia_barang_kontruksi8').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_penyedia_barang_kontruksi8').css('border-color', 'green');
                    $('#penilaian_konsultan_penyedia_barang_kontruksi8').val(penilaian_konsultan_penyedia_barang_kontruksi8);

                }

            };

        }
    });
    $('#penilaian_konsultan_penyedia_barang_kontruksi9').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_penyedia_barang_kontruksi9').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_penyedia_barang_kontruksi9").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_penyedia_barang_kontruksi9 = $('#penilaian_konsultan_penyedia_barang_kontruksi9').val();
                if (penilaian_konsultan_penyedia_barang_kontruksi9.match(validasiHuruf)) {
                    $('#penilaian_konsultan_penyedia_barang_kontruksi9').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_penyedia_barang_kontruksi9').css('border-color', 'green');
                    $('#penilaian_konsultan_penyedia_barang_kontruksi9').val(penilaian_konsultan_penyedia_barang_kontruksi9);

                }

            };

        }
    });
    $('#penilaian_konsultan_penyedia_barang_kontruksi10').keyup(function() {
        if ($(this).val() > 100) {
            $('#penilaian_konsultan_penyedia_barang_kontruksi10').css('border-color', 'red');
            message_gak_boleh_lebih_angkanya('warning', 'Beri Penilaian 1 => 100!!');
            $(this).val('100');
        } else {
            document.getElementById("penilaian_konsultan_penyedia_barang_kontruksi10").onkeyup = function() {
                var validasiHuruf = /^[a-zA-Z ]+$/;
                var penilaian_konsultan_penyedia_barang_kontruksi10 = $('#penilaian_konsultan_penyedia_barang_kontruksi10').val();
                if (penilaian_konsultan_penyedia_barang_kontruksi10.match(validasiHuruf)) {
                    $('#penilaian_konsultan_penyedia_barang_kontruksi10').css('border-color', 'red');
                    message('warning', 'Beri Penilaian Dengan Angka Yaa!!');
                } else {
                    $('#penilaian_konsultan_penyedia_barang_kontruksi10').css('border-color', 'green');
                    $('#penilaian_konsultan_penyedia_barang_kontruksi10').val(penilaian_konsultan_penyedia_barang_kontruksi10);

                }

            };

        }
    });
</script>


<!-- ININ UNTUK VALIDASI BUTTON dan nilaik akhir TAMBAH -->
<!-- keyup nilai pekerjaan kontruksi -->
<script>
    $(document).ready(function() {
        $("#penilaian_konsultan_penyedia_barang_kontruksi1, #penilaian_konsultan_penyedia_barang_kontruksi2, #penilaian_konsultan_penyedia_barang_kontruksi3, #penilaian_konsultan_penyedia_barang_kontruksi4,#penilaian_konsultan_penyedia_barang_kontruksi5,#penilaian_konsultan_penyedia_barang_kontruksi6,#penilaian_konsultan_penyedia_barang_kontruksi7,#penilaian_konsultan_penyedia_barang_kontruksi8,#penilaian_konsultan_penyedia_barang_kontruksi9,#penilaian_konsultan_penyedia_barang_kontruksi10,#penilaian_konsultan_penyedia_barang_kontruksi11,#penilaian_konsultan_penyedia_barang_kontruksi12,#penilaian_konsultan_penyedia_barang_kontruksi13").keyup(function() {
            // 1
            var bobot_pekerjaan_kontruksi1 = $('#bobot_pekerjaan_konsultan_penyedia_barang_kontruksi1').val();
            var penilaian_kontruksi1 = $('#penilaian_konsultan_penyedia_barang_kontruksi1').val();
            var nilai_akhir_kontruksi1 = bobot_pekerjaan_kontruksi1 * penilaian_kontruksi1 / 100;
            $('#nilai_akhir_pekerjaan_konsultan_penyedia_barang_kontruksi_aspek1').val(parseFloat(nilai_akhir_kontruksi1));
            // 2
            var bobot_pekerjaan_kontruksi2 = $('#bobot_pekerjaan_konsultan_penyedia_barang_kontruksi2').val();
            var penilaian_kontruksi2 = $('#penilaian_konsultan_penyedia_barang_kontruksi2').val();
            var nilai_akhir_kontruksi2 = bobot_pekerjaan_kontruksi2 * penilaian_kontruksi2 / 100;
            $('#nilai_akhir_pekerjaan_konsultan_penyedia_barang_kontruksi_aspek2').val(parseFloat(nilai_akhir_kontruksi2));
            // 3
            var bobot_pekerjaan_kontruksi3 = $('#bobot_pekerjaan_konsultan_penyedia_barang_kontruksi3').val();
            var penilaian_kontruksi3 = $('#penilaian_konsultan_penyedia_barang_kontruksi3').val();
            var nilai_akhir_kontruksi3 = bobot_pekerjaan_kontruksi3 * penilaian_kontruksi3 / 100;
            $('#nilai_akhir_pekerjaan_konsultan_penyedia_barang_kontruksi_aspek3').val(parseFloat(nilai_akhir_kontruksi3));
            // 4
            var bobot_pekerjaan_kontruksi4 = $('#bobot_pekerjaan_konsultan_penyedia_barang_kontruksi4').val();
            var penilaian_kontruksi4 = $('#penilaian_konsultan_penyedia_barang_kontruksi4').val();
            var nilai_akhir_kontruksi4 = bobot_pekerjaan_kontruksi4 * penilaian_kontruksi4 / 100;
            $('#nilai_akhir_pekerjaan_konsultan_penyedia_barang_kontruksi_aspek4').val(parseFloat(nilai_akhir_kontruksi4));
            // 5
            var bobot_pekerjaan_kontruksi5 = $('#bobot_pekerjaan_konsultan_penyedia_barang_kontruksi5').val();
            var penilaian_kontruksi5 = $('#penilaian_konsultan_penyedia_barang_kontruksi5').val();
            var nilai_akhir_kontruksi5 = bobot_pekerjaan_kontruksi5 * penilaian_kontruksi5 / 100;
            $('#nilai_akhir_pekerjaan_konsultan_penyedia_barang_kontruksi_aspek5').val(parseFloat(nilai_akhir_kontruksi5));
            // 6
            var bobot_pekerjaan_kontruksi6 = $('#bobot_pekerjaan_konsultan_penyedia_barang_kontruksi6').val();
            var penilaian_kontruksi6 = $('#penilaian_konsultan_penyedia_barang_kontruksi6').val();
            var nilai_akhir_kontruksi6 = bobot_pekerjaan_kontruksi6 * penilaian_kontruksi6 / 100;
            $('#nilai_akhir_pekerjaan_konsultan_penyedia_barang_kontruksi_aspek6').val(parseFloat(nilai_akhir_kontruksi6));
            // 7
            var bobot_pekerjaan_kontruksi7 = $('#bobot_pekerjaan_konsultan_penyedia_barang_kontruksi7').val();
            var penilaian_kontruksi7 = $('#penilaian_konsultan_penyedia_barang_kontruksi7').val();
            var nilai_akhir_kontruksi7 = bobot_pekerjaan_kontruksi7 * penilaian_kontruksi7 / 100;
            $('#nilai_akhir_pekerjaan_konsultan_penyedia_barang_kontruksi_aspek7').val(parseFloat(nilai_akhir_kontruksi7));
            // 8
            var bobot_pekerjaan_kontruksi8 = $('#bobot_pekerjaan_konsultan_penyedia_barang_kontruksi8').val();
            var penilaian_kontruksi8 = $('#penilaian_konsultan_penyedia_barang_kontruksi8').val();
            var nilai_akhir_kontruksi8 = bobot_pekerjaan_kontruksi8 * penilaian_kontruksi8 / 100;
            $('#nilai_akhir_pekerjaan_konsultan_penyedia_barang_kontruksi_aspek8').val(parseFloat(nilai_akhir_kontruksi8));
            // 9
            var bobot_pekerjaan_kontruksi9 = $('#bobot_pekerjaan_konsultan_penyedia_barang_kontruksi9').val();
            var penilaian_kontruksi9 = $('#penilaian_konsultan_penyedia_barang_kontruksi9').val();
            var nilai_akhir_kontruksi9 = bobot_pekerjaan_kontruksi9 * penilaian_kontruksi9 / 100;
            $('#nilai_akhir_pekerjaan_konsultan_penyedia_barang_kontruksi_aspek9').val(parseFloat(nilai_akhir_kontruksi9));
            // 10
            var bobot_pekerjaan_kontruksi10 = $('#bobot_pekerjaan_konsultan_penyedia_barang_kontruksi10').val();
            var penilaian_kontruksi10 = $('#penilaian_konsultan_penyedia_barang_kontruksi10').val();
            var nilai_akhir_kontruksi10 = bobot_pekerjaan_kontruksi10 * penilaian_kontruksi10 / 100;
            $('#nilai_akhir_pekerjaan_konsultan_penyedia_barang_kontruksi_aspek10').val(parseFloat(nilai_akhir_kontruksi10));

            var total = parseFloat(nilai_akhir_kontruksi1) + parseFloat(nilai_akhir_kontruksi2) + parseFloat(nilai_akhir_kontruksi3) + parseFloat(nilai_akhir_kontruksi4) + parseFloat(nilai_akhir_kontruksi5) + parseFloat(nilai_akhir_kontruksi6) + parseFloat(nilai_akhir_kontruksi7) + parseFloat(nilai_akhir_kontruksi8) + parseFloat(nilai_akhir_kontruksi9) + parseFloat(nilai_akhir_kontruksi10);
            var total_button = $("#total_nilai_pekerjaan_konsultan_penyedia_barang_kontruksi").val(total);
            if (total <= 51) {
                $('[name="rating_penilaian_vendor_pekerjaan_konsultan_penyedia_barang_kontruksi"]').val(4);
                $('[name="status_rating_pekerjaan_konsultan_penyedia_barang_kontruksi"]').val('kurang baik');
                $('[name="status_nilai_akhir_pekerjaan_konsultan_penyedia_barang_kontruksi"]').val(total);
                $('#status_pekerjaan_konsultan_penyedia_barang_kontruksi').html('<label for="" class="badge badge-danger">Kurang Baik</label>');
                $('#warning_button_konsultan_penyedia_barang_kontruksi').show();
                $('#save_button_konsultan_penyedia_barang_kontruksi').hide();
                $('#bintang_pekerjaan_konsultan_penyedia_barang_kontruksi').html('');
            } else if (total <= 70) {
                $('[name="rating_penilaian_vendor_pekerjaan_konsultan_penyedia_barang_kontruksi"]').val(1);
                $('[name="status_rating_pekerjaan_konsultan_penyedia_barang_kontruksi"]').val('cukup baik');
                $('[name="status_nilai_akhir_pekerjaan_konsultan_penyedia_barang_kontruksi"]').val(total);
                $('#save_button_konsultan_penyedia_barang_kontruksi').show();
                $('#warning_button_konsultan_penyedia_barang_kontruksi').hide();
                $('#status_pekerjaan_konsultan_penyedia_barang_kontruksi').html('<label for="" class="badge badge-warning">Cukup Baik</label>');
                $('#bintang_pekerjaan_konsultan_penyedia_barang_kontruksi').html('<i class="fas fa fa-star text-warning"></i>');
            } else if (total <= 80) {
                $('[name="rating_penilaian_vendor_pekerjaan_konsultan_penyedia_barang_kontruksi"]').val(2);
                $('[name="status_rating_pekerjaan_konsultan_penyedia_barang_kontruksi"]').val('baik');
                $('[name="status_nilai_akhir_pekerjaan_konsultan_penyedia_barang_kontruksi"]').val(total);
                $('#save_button_konsultan_penyedia_barang_kontruksi').show();
                $('#warning_button_konsultan_penyedia_barang_kontruksi').hide();
                $('#status_pekerjaan_konsultan_penyedia_barang_kontruksi').html('<label for="" class="badge badge-warning">Baik</label>');
                $('#bintang_pekerjaan_konsultan_penyedia_barang_kontruksi').html('<i class="fas fa fa-star text-warning"></i><i class="fas fa fa-star text-warning"></i>');
            } else {
                $('[name="rating_penilaian_vendor_pekerjaan_konsultan_penyedia_barang_kontruksi"]').val(3);
                $('[name="status_rating_pekerjaan_konsultan_penyedia_barang_kontruksi"]').val('sangat baik');
                $('[name="status_nilai_akhir_pekerjaan_konsultan_penyedia_barang_kontruksi"]').val(total);
                $('#save_button_konsultan_penyedia_barang_kontruksi').show();
                $('#warning_button_konsultan_penyedia_barang_kontruksi').hide();
                $('#status_pekerjaan_konsultan_penyedia_barang_kontruksi').html('<label for="" class="badge badge-success">Sangat Baik</label>');
                $('#bintang_pekerjaan_konsultan_penyedia_barang_kontruksi').html('<i class="fas fa fa-star text-warning"></i><i class="fas fa fa-star text-warning"></i><i class="fas fa fa-star text-warning"></i>');
            }

        });
    });
</script>



<!-- INI UNTUK NILAI KONTRAK -->
<script>
    $('#tanggal_nomor_kontak1').datetimepicker({
        timepicker: true,
        datetimepicker: true,
        format: 'd-F-Y H:i',
        onShow: function(ct) {
            this.setOptions({
                maxDate: $('#tanggal_nomor_kontak1').val() ? $('#tanggal_nomor_kontak1').val() : false
            })
        }

    })

    $('#jangka_mulai1').datetimepicker({
        timepicker: true,
        datetimepicker: true,
        format: 'd-F-Y H:i',
        onShow: function(ct) {
            this.setOptions({
                maxDate: $('#jangka_mulai1').val() ? $('#jangka_mulai1').val() : false
            })
        }

    })

    $('#jangka_selesai1').datetimepicker({
        timepicker: true,
        datetimepicker: true,
        format: 'd-F-Y H:i',
        onShow: function(ct) {
            this.setOptions({
                maxDate: $('#jangka_selesai1').val() ? $('#jangka_selesai1').val() : false
            })
        }

    })
    // Ini Tanggal Kontrak
    document.getElementById("tanggal_nomor_kontak1").onchange = function() {
        var tanggal_kontarak = $('[name="tanggal_nomor_kontak1"]').val();
        $('[name="tanggal_nomor_kontak"]').val(tanggal_kontarak);
        update_tanggal_kontrak()
    };
    // Ini Nomor Kontrak
    $(document).ready(function() {
        $("#nomor_kontrak1 ").keyup(function() {
            var nomor_kontrak = $('[name="nomor_kontrak1"]').val();
            $('[name="nomor_kontrak"]').val(nomor_kontrak);
            update_nomor_kontrak()
        })
    })

    // Ini Untuk Jangka Waktu Mulai
    document.getElementById("jangka_mulai1").onchange = function() {
        var jangka_mulai = $('[name="jangka_mulai1"]').val();
        $('[name="jangka_mulai"]').val(jangka_mulai);
        update_jangka_mulai()
    };

    // Ini Untuk Jangka Waktu Selesai
    document.getElementById("jangka_selesai1").onchange = function() {
        var jangka_selesai = $('[name="jangka_selesai1"]').val();
        $('[name="jangka_selesai"]').val(jangka_selesai);
        update_jangka_selesai()
    };


    // INI KE DUA
    $('#tanggal_nomor_kontak2').datetimepicker({
        timepicker: true,
        datetimepicker: true,
        format: 'd-F-Y H:i',
        onShow: function(ct) {
            this.setOptions({
                maxDate: $('#tanggal_nomor_kontak2').val() ? $('#tanggal_nomor_kontak2').val() : false
            })
        }

    })

    $('#jangka_mulai2').datetimepicker({
        timepicker: true,
        datetimepicker: true,
        format: 'd-F-Y H:i',
        onShow: function(ct) {
            this.setOptions({
                maxDate: $('#jangka_mulai2').val() ? $('#jangka_mulai2').val() : false
            })
        }

    })

    $('#jangka_selesai2').datetimepicker({
        timepicker: true,
        datetimepicker: true,
        format: 'd-F-Y H:i',
        onShow: function(ct) {
            this.setOptions({
                maxDate: $('#jangka_selesai2').val() ? $('#jangka_selesai2').val() : false
            })
        }

    })
    // Ini Tanggal Kontrak
    document.getElementById("tanggal_nomor_kontak2").onchange = function() {
        var tanggal_kontarak = $('[name="tanggal_nomor_kontak2"]').val();
        $('[name="tanggal_nomor_kontak"]').val(tanggal_kontarak);
        update_tanggal_kontrak()
    };
    // Ini Nomor Kontrak
    $(document).ready(function() {
        $("#nomor_kontrak2 ").keyup(function() {
            var nomor_kontrak = $('[name="nomor_kontrak2"]').val();
            $('[name="nomor_kontrak"]').val(nomor_kontrak);
            update_nomor_kontrak()
        })
    })

    // Ini Untuk Jangka Waktu Mulai
    document.getElementById("jangka_mulai2").onchange = function() {
        var jangka_mulai = $('[name="jangka_mulai2"]').val();
        $('[name="jangka_mulai"]').val(jangka_mulai);
        update_jangka_mulai()
    };

    // Ini Untuk Jangka Waktu Selesai
    document.getElementById("jangka_selesai2").onchange = function() {
        var jangka_selesai = $('[name="jangka_selesai2"]').val();
        $('[name="jangka_selesai"]').val(jangka_selesai);
        update_jangka_selesai()
    };



    // INI KE 3
    $('#tanggal_nomor_kontak3').datetimepicker({
        timepicker: true,
        datetimepicker: true,
        format: 'd-F-Y H:i',
        onShow: function(ct) {
            this.setOptions({
                maxDate: $('#tanggal_nomor_kontak3').val() ? $('#tanggal_nomor_kontak3').val() : false
            })
        }

    })

    $('#jangka_mulai3').datetimepicker({
        timepicker: true,
        datetimepicker: true,
        format: 'd-F-Y H:i',
        onShow: function(ct) {
            this.setOptions({
                maxDate: $('#jangka_mulai3').val() ? $('#jangka_mulai3').val() : false
            })
        }

    })

    $('#jangka_selesai3').datetimepicker({
        timepicker: true,
        datetimepicker: true,
        format: 'd-F-Y H:i',
        onShow: function(ct) {
            this.setOptions({
                maxDate: $('#jangka_selesai3').val() ? $('#jangka_selesai3').val() : false
            })
        }

    })
    // Ini Tanggal Kontrak
    document.getElementById("tanggal_nomor_kontak3").onchange = function() {
        var tanggal_kontarak = $('[name="tanggal_nomor_kontak3"]').val();
        $('[name="tanggal_nomor_kontak"]').val(tanggal_kontarak);
        update_tanggal_kontrak()
    };
    // Ini Nomor Kontrak
    $(document).ready(function() {
        $("#nomor_kontrak3 ").keyup(function() {
            var nomor_kontrak = $('[name="nomor_kontrak3"]').val();
            $('[name="nomor_kontrak"]').val(nomor_kontrak);
            update_nomor_kontrak()
        })
    })

    // Ini Untuk Jangka Waktu Mulai
    document.getElementById("jangka_mulai3").onchange = function() {
        var jangka_mulai = $('[name="jangka_mulai3"]').val();
        $('[name="jangka_mulai"]').val(jangka_mulai);
        update_jangka_mulai()
    };

    // Ini Untuk Jangka Waktu Selesai
    document.getElementById("jangka_selesai3").onchange = function() {
        var jangka_selesai = $('[name="jangka_selesai3"]').val();
        $('[name="jangka_selesai"]').val(jangka_selesai);
        update_jangka_selesai()
    };


    // INI KE 4
    $('#tanggal_nomor_kontak4').datetimepicker({
        timepicker: true,
        datetimepicker: true,
        format: 'd-F-Y H:i',
        onShow: function(ct) {
            this.setOptions({
                maxDate: $('#tanggal_nomor_kontak4').val() ? $('#tanggal_nomor_kontak4').val() : false
            })
        }

    })

    $('#jangka_mulai4').datetimepicker({
        timepicker: true,
        datetimepicker: true,
        format: 'd-F-Y H:i',
        onShow: function(ct) {
            this.setOptions({
                maxDate: $('#jangka_mulai4').val() ? $('#jangka_mulai4').val() : false
            })
        }

    })

    $('#jangka_selesai4').datetimepicker({
        timepicker: true,
        datetimepicker: true,
        format: 'd-F-Y H:i',
        onShow: function(ct) {
            this.setOptions({
                maxDate: $('#jangka_selesai4').val() ? $('#jangka_selesai4').val() : false
            })
        }

    })
    // Ini Tanggal Kontrak
    document.getElementById("tanggal_nomor_kontak4").onchange = function() {
        var tanggal_kontarak = $('[name="tanggal_nomor_kontak4"]').val();
        $('[name="tanggal_nomor_kontak"]').val(tanggal_kontarak);
        update_tanggal_kontrak()
    };
    // Ini Nomor Kontrak
    $(document).ready(function() {
        $("#nomor_kontrak4 ").keyup(function() {
            var nomor_kontrak = $('[name="nomor_kontrak4"]').val();
            $('[name="nomor_kontrak"]').val(nomor_kontrak);
            update_nomor_kontrak()
        })
    })

    // Ini Untuk Jangka Waktu Mulai
    document.getElementById("jangka_mulai4").onchange = function() {
        var jangka_mulai = $('[name="jangka_mulai4"]').val();
        $('[name="jangka_mulai"]').val(jangka_mulai);
        update_jangka_mulai()
    };

    // Ini Untuk Jangka Waktu Selesai
    document.getElementById("jangka_selesai4").onchange = function() {
        var jangka_selesai = $('[name="jangka_selesai4"]').val();
        $('[name="jangka_selesai"]').val(jangka_selesai);
        update_jangka_selesai()
    };



    // INI KE 5
    $('#tanggal_nomor_kontak5').datetimepicker({
        timepicker: true,
        datetimepicker: true,
        format: 'd-F-Y H:i',
        onShow: function(ct) {
            this.setOptions({
                maxDate: $('#tanggal_nomor_kontak5').val() ? $('#tanggal_nomor_kontak5').val() : false
            })
        }

    })

    $('#jangka_mulai5').datetimepicker({
        timepicker: true,
        datetimepicker: true,
        format: 'd-F-Y H:i',
        onShow: function(ct) {
            this.setOptions({
                maxDate: $('#jangka_mulai5').val() ? $('#jangka_mulai5').val() : false
            })
        }

    })

    $('#jangka_selesai5').datetimepicker({
        timepicker: true,
        datetimepicker: true,
        format: 'd-F-Y H:i',
        onShow: function(ct) {
            this.setOptions({
                maxDate: $('#jangka_selesai5').val() ? $('#jangka_selesai5').val() : false
            })
        }

    })
    // Ini Tanggal Kontrak
    document.getElementById("tanggal_nomor_kontak5").onchange = function() {
        var tanggal_kontarak = $('[name="tanggal_nomor_kontak5"]').val();
        $('[name="tanggal_nomor_kontak"]').val(tanggal_kontarak);
        update_tanggal_kontrak()
    };
    // Ini Nomor Kontrak
    $(document).ready(function() {
        $("#nomor_kontrak5 ").keyup(function() {
            var nomor_kontrak = $('[name="nomor_kontrak5"]').val();
            $('[name="nomor_kontrak"]').val(nomor_kontrak);
            update_nomor_kontrak()
        })
    })

    // Ini Untuk Jangka Waktu Mulai
    document.getElementById("jangka_mulai5").onchange = function() {
        var jangka_mulai = $('[name="jangka_mulai5"]').val();
        $('[name="jangka_mulai"]').val(jangka_mulai);
        update_jangka_mulai()
    };

    // Ini Untuk Jangka Waktu Selesai
    document.getElementById("jangka_selesai5").onchange = function() {
        var jangka_selesai = $('[name="jangka_selesai5"]').val();
        $('[name="jangka_selesai"]').val(jangka_selesai);
        update_jangka_selesai()
    };



    // INI KE 6
    $('#tanggal_nomor_kontak6').datetimepicker({
        timepicker: true,
        datetimepicker: true,
        format: 'd-F-Y H:i',
        onShow: function(ct) {
            this.setOptions({
                maxDate: $('#tanggal_nomor_kontak6').val() ? $('#tanggal_nomor_kontak6').val() : false
            })
        }

    })

    $('#jangka_mulai6').datetimepicker({
        timepicker: true,
        datetimepicker: true,
        format: 'd-F-Y H:i',
        onShow: function(ct) {
            this.setOptions({
                maxDate: $('#jangka_mulai6').val() ? $('#jangka_mulai6').val() : false
            })
        }

    })

    $('#jangka_selesai6').datetimepicker({
        timepicker: true,
        datetimepicker: true,
        format: 'd-F-Y H:i',
        onShow: function(ct) {
            this.setOptions({
                maxDate: $('#jangka_selesai6').val() ? $('#jangka_selesai6').val() : false
            })
        }

    })
    // Ini Tanggal Kontrak
    document.getElementById("tanggal_nomor_kontak6").onchange = function() {
        var tanggal_kontarak = $('[name="tanggal_nomor_kontak6"]').val();
        $('[name="tanggal_nomor_kontak"]').val(tanggal_kontarak);
        update_tanggal_kontrak()
    };
    // Ini Nomor Kontrak
    $(document).ready(function() {
        $("#nomor_kontrak6 ").keyup(function() {
            var nomor_kontrak = $('[name="nomor_kontrak6"]').val();
            $('[name="nomor_kontrak"]').val(nomor_kontrak);
            update_nomor_kontrak()
        })
    })

    // Ini Untuk Jangka Waktu Mulai
    document.getElementById("jangka_mulai6").onchange = function() {
        var jangka_mulai = $('[name="jangka_mulai6"]').val();
        $('[name="jangka_mulai"]').val(jangka_mulai);
        update_jangka_mulai()
    };

    // Ini Untuk Jangka Waktu Selesai
    document.getElementById("jangka_selesai6").onchange = function() {
        var jangka_selesai = $('[name="jangka_selesai6"]').val();
        $('[name="jangka_selesai"]').val(jangka_selesai);
        update_jangka_selesai()
    };







    // ini untuk update tanggal kontrak
    var form_update_tanggal_kontrak = $('#form_update_tanggal_kontrak');

    function update_tanggal_kontrak() {
        var reusable = $('#id_paket').val();
        $.ajax({
            method: "POST",
            url: 'https://eproc.jmtm.co.id/beranda/update_tanggal_kontrak/' + reusable,
            data: form_update_tanggal_kontrak.serialize(),
            dataType: "JSON",
            success: function(response) {

            },
            error: function() {
                console.log(error);
            }
        })
    }

    // ini untuk update Nomor kontrak
    var form_update_nomor_kontrak = $('#form_update_nomor_kontrak');

    function update_nomor_kontrak() {
        var reusable = $('#id_paket').val();
        $.ajax({
            method: "POST",
            url: 'https://eproc.jmtm.co.id/beranda/update_nomor_kontrak/' + reusable,
            data: form_update_nomor_kontrak.serialize(),
            dataType: "JSON",
            success: function(response) {

            },
            error: function() {
                console.log(error);
            }
        })
    }

    // ini untuk jangan mulai
    var form_update_jangka_mulai = $('#form_update_jangka_mulai');

    function update_jangka_mulai() {
        var reusable = $('#id_paket').val();
        $.ajax({
            method: "POST",
            url: 'https://eproc.jmtm.co.id/beranda/update_jangka_mulai/' + reusable,
            data: form_update_jangka_mulai.serialize(),
            dataType: "JSON",
            success: function(response) {

            },
            error: function() {
                console.log(error);
            }
        })
    }
    // ini untuk jangan selesai
    var form_update_jangka_selesai = $('#form_update_jangka_selesai');

    function update_jangka_selesai() {
        var reusable = $('#id_paket').val();
        $.ajax({
            method: "POST",
            url: 'https://eproc.jmtm.co.id/beranda/update_jangka_selesai/' + reusable,
            data: form_update_jangka_selesai.serialize(),
            dataType: "JSON",
            success: function(response) {

            },
            error: function() {
                console.log(error);
            }
        })
    }
</script>