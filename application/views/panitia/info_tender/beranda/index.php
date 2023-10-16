<main class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="card border-dark">
                <div class="card-header border-dark bg-gradient-color1">
                    <h6 class="card-title">
                        <span class="text-white">
                            <i class="fa-solid fa-business-time"></i>
                            <small><strong>Info Tender</strong></small>
                        </span>
                    </h6>
                </div>
            </div>
            <hr>
            <div class="card border-dark">
                <div class="card-header border-dark bg-primary d-flex justify-content-between align-items-center">
                    <div class="flex-grow-1 bd-highlight">
                        <span class="text-dark">

                            <small class="text-white"><strong><i class="fa-solid fa-table px-1"></i> Data Tabel - Info Tender</strong></small>
                        </span>
                    </div>
                </div>
                <div class="card-body">
                    <table id="tbl_beranda" class="table table-bordered table-sm table-striped">
                        <thead class="bg-secondary">
                            <tr>
                                <th style="width:10%;"><small class="text-white">Tahun</small></th>
                                <th style="width:25%;"><small class="text-white">Nama Paket Penyedia</small></th>
                                <th style="width:10%;"><small class="text-white">Departemen</small></th>
                                <th style="width:10%;"><small class="text-white">Jenis Pengadaan</small></th>
                                <th style="width:15%;"><small class="text-white">Metode Pengadaan</small></th>
                                <th style="width:10%;"><small class="text-white">Total HPS (Rp)</small></th>
                                <th style="width:10%;"><small class="text-white">Status Tender</small></th>
                                <th style="width:10%;"><small class="text-white">
                                        <div class="text-center">More Options</div>
                                    </small></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>2023</td>
                                <td>PAKET KEMERDEKAAN 78 RI BOGOR</td>
                                <td>Command Center</td>
                                <td>Jasa Lain</td>
                                <td>Tender Umum</td>
                                <td>Rp 390.000.000,00</td>
                                <td><label for="" class="badge-badge-primary"> Pengumuman</label></td>
                                <td><a class="btn btn-info btn-sm" href="<?= base_url('panitia/info_tender/informasi_tender')?>"> <i class="fa-solid fa-folder-tree px-1"></i> Kelola Tender</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</main>