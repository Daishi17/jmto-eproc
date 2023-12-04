<main class="container-fluid">
    <input type="hidden" name="url_cek_dokumen_hps" value="<?= base_url('file_paket/') ?>">
    <input type="hidden" name="url_by_id_rup" value="<?= base_url('panitia/daftar_paket/daftar_paket/by_id_rup/') ?>">
    <input type="hidden" name="url_download_syarat_tambahan" value="<?= base_url('panitia/daftar_paket/daftar_paket/url_download_syarat_tambahan') ?>">
    <div class="row">
        <div class="col">
            <div class="card border-dark">
                <div class="card-header border-dark bg-gradient-color2">
                    <h6 class="card-title">
                        <span class="text-white">
                            <i class="fa-solid fa-circle-info"></i>
                            <small><strong>FORM PENILAIAN KINERJA VENDOR</strong></small>
                        </span>
                    </h6>
                </div>
            </div>
            <hr>
            <div class="card border-dark ">
                <div class="card-header border-dark bg-warning d-flex justify-content-between align-items-center">
                    <div class="flex-grow-1 bd-highlight">
                        <span class="text-dark">
                            <i class="fa-solid fa-table px-1"></i>
                            <small><strong>Data Tabel - FORM PENILAIAN KINERJA VENDOR</strong></small>
                        </span>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="penilaian_1-tab" data-bs-toggle="tab" data-bs-target="#penilaian_1" type="button" role="tab" aria-controls="penilaian_1" aria-selected="true">Kinerja Pekerjaan Konstruksi</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="penilaian_2-tab" data-bs-toggle="tab" data-bs-target="#penilaian_2" type="button" role="tab" aria-controls="penilaian_2" aria-selected="false">Kinerja Konsultan Perencana Konstruksi</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="penilaian_3-tab" data-bs-toggle="tab" data-bs-target="#penilaian_3" type="button" role="tab" aria-controls="penilaian_3" aria-selected="false">Kinerja Konsultan Kajian/Studi/Sistem Informatika</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="penilaian_4-tab" data-bs-toggle="tab" data-bs-target="#penilaian_4" type="button" role="tab" aria-controls="penilaian_4" aria-selected="false">Kinerja Konsultan Pengawas Konstruksi</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="penilaian_5-tab" data-bs-toggle="tab" data-bs-target="#penilaian_5" type="button" role="tab" aria-controls="penilaian_5" aria-selected="false">Kinerja Jasa Lainya</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="penilaian_6-tab" data-bs-toggle="tab" data-bs-target="#penilaian_6" type="button" role="tab" aria-controls="penilaian_6" aria-selected="false">Kinerja Penyedia Barang</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <br>
                        <div class="tab-pane fade show active" id="penilaian_1" role="tabpanel" aria-labelledby="home-tab">
                            <div class="card" style="box-shadow: 2px 2px 10px 2px black;">
                                <div class="card-header bg-warning text-white">
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
                                <div class="card-header bg-warning text-white">
                                    <i class="fas fa-chart-line"></i> Table Penilaian Kinerja Pekerjaan Konstruksi
                                </div>
                                <div class="card-body">
                                    <div style="overflow-x: auto;">
                                        <form action="" id="form_tambah_pekerjaan_kontruksi">
                                            <input type="hidden" name="id_paket" value="1443">
                                            <input type="hidden" name="id_vendor" value="896">
                                            <table id="nilai_tbl" class="table table-bordered">
                                                <tr class="bg-warning text-white">
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
                                            <div class="col-md-4">
                                                <a class="btn bg-warning text-white text-white btn-sm btn-block" style="width:200px;box-shadow: 2px 2px 8px 2px black;" href="https://eproc.jmtm.co.id/beranda/penilaian_kinerja"><i class="fas fa fa-arrow-left"></i> Kembali</a>
                                            </div>
                                            <div class="col-md-4">
                                                <div id="save_button" style="display: none;"> <button type="button" onclick="Simpan_pekerjaan_kontruksi()" class="btn bg-warning text-white8 text-white btn-sm btn-block">Simpan Penilaian</button></div>
                                                <div id="warning_button" style="display: none;"> <button type="button" onclick="Simpan_Warning_pekerjaan_kontruksi_warning()" class="btn bg-warning text-white10 text-white btn-sm btn-block">warning Penilaian</button></div>
                                            </div>
                                        </div>
                                    </center>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="penilaian_2" role="tabpanel" aria-labelledby="penilaian_2-tab">...</div>
                        <div class="tab-pane fade" id="penilaian_3" role="tabpanel" aria-labelledby="penilaian_3-tab">...</div>
                        <div class="tab-pane fade" id="penilaian_4" role="tabpanel" aria-labelledby="penilaian_4-tab">...</div>
                        <div class="tab-pane fade" id="penilaian_5" role="tabpanel" aria-labelledby="penilaian_5-tab">...</div>
                        <div class="tab-pane fade" id="penilaian_6" role="tabpanel" aria-labelledby="penilaian_6-tab">...</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>