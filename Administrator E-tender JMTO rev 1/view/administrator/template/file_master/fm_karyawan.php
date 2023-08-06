<main class="container-fluid">
    <div class="row">
        <div class="col">
            <div class="card border-dark">
                <div class="card-header border-dark bg-danger">
                    <h6 class="card-title">
                        <span class="text-white">
                            <i class="fa-regular fa-folder-open px-1"></i>
                            <small><strong>File Master</strong></small>
                        </span>
                    </h6>
                </div>
            </div><hr>
            <div class="card border-dark">
                <div class="card-header border-dark bg-warning d-flex justify-content-between align-items-center">
                    <div class="flex-grow-1 bd-highlight">
                        <span class="text-dark">
                            <i class="fa-solid fa-id-card-clip px-1"></i>
                            <small><strong>Data Tabel - Karyawan</strong></small>
                        </span>
                    </div>
                    <div class="bd-highlight">
                        <button type="button" class="btn btn-primary btn-sm shadow-lg" data-bs-toggle="modal" data-bs-target="#modal-xl-tambah">
                            <i class="fa-solid fa-circle-plus px-1"></i>
                            Tambah Data
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-sm table-striped">
                        <thead class="bg-secondary">
                            <tr>
                                <th style="width:10%;"><small class="text-white">NIK</small></th>
                                <th style="width:20%;"><small class="text-white">Nama Karyawan</small></th>
                                <th style="width:15%;"><small class="text-white">Departemen</small></th>
                                <th style="width:10%;"><small class="text-white">Sections</small></th>
                                <th style="width:15%;"><small class="text-white">Email</small></th>
                                <th style="width:10%;"><small class="text-white">Status</small></th>
                                <th style="width:20%;"><small class="text-white"><div class="text-center">More Options</div></small></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><small>234567</small></td>
                                <td><small>Angga</small></td>
                                <td><small>Human Capital & General Affair</small></td>
                                <td><small>Procurement</small></td>
                                <td><small>angga@jmto.co.id</small></td>
                                <td><small><span class="badge bg-success">Aktif</span></small></td>
                                <td>
                                    <div class="text-center">
                                        <button type="button" class="btn btn-info btn-sm shadow-lg" data-bs-toggle="modal" data-bs-target="#modal-xl-tambah">
                                            <i class="fa-solid fa-users-viewfinder px-1"></i>
                                            <small>Detail</small>
                                        </button>
                                        <button type="button" class="btn btn-danger btn-sm shadow-lg">
                                            <i class="fa-solid fa-trash-can px-1"></i>
                                            <small>Non Aktif</small>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <td><small>123456</small></td>
                                <td><small>Danang</small></td>
                                <td><small>Human Capital & General Affair</small></td>
                                <td><small>Procurement</small></td>
                                <td><small>danang@jmto.co.id</small></td>
                                <td><small><span class="badge bg-success">Aktif</span></small></td>
                                <td>
                                    <div class="text-center">
                                        <button type="button" class="btn btn-info btn-sm shadow-lg" data-bs-toggle="modal" data-bs-target="#modal-xl-tambah">
                                            <i class="fa-solid fa-users-viewfinder px-1"></i>
                                            <small>Detail</small>
                                        </button>
                                        <button type="button" class="btn btn-danger btn-sm shadow-lg">
                                            <i class="fa-solid fa-trash-can px-1"></i>
                                            <small>Non Aktif</small>
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
    <div class="modal fade" tabindex="-1" id="modal-xl-tambah">
        <div class="modal-dialog modal-dialog-scrollable modal-xl">
            <div class="modal-content">
                <div class="modal-header">
                    <a class="navbar-brand">
                        <img src="<?php echo base_url();?>/assets/brand/jm1.png" alt="" width="25" height="25" class="d-inline-block align-text-top">
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
                                            <small><strong>Form Data - Karyawan</strong></small>
                                        </span>
                                    </div>
                                    <div class="bd-highlight">
                                        <button type="button" class="btn btn-secondary btn-sm shadow-lg">
                                            <i class="fa-solid fa-pen-to-square px-1"></i>
                                            Ubah Data
                                        </button>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <form >
                                        <div class="row g-1">
                                            <div class="col-sm-6">
                                                <div class="input-group mb-1">
                                                    <span class="input-group-text"><i class="fa-solid fa-barcode"></i></span>
                                                    <input type="text" class="form-control" placeholder="NIK"> 
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="input-group mb-1">
                                                    <span class="input-group-text"><i class="fa-solid fa-keyboard"></i></span>
                                                    <input type="text" class="form-control" placeholder="Nama Karyawan">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="input-group mb-1">
                                                    <span class="input-group-text"><i class="fa-solid fa-building-columns"></i></span>
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected>Pilih Departemen</option>
                                                        <option value="1">Human Capital & General Affair</option>
                                                        <option value="2">Keuangan</option>
                                                        <option value="3">IT Infra</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="input-group mb-1">
                                                    <span class="input-group-text"><i class="fa-solid fa-map"></i></span>
                                                    <select class="form-select" aria-label="Default select example">
                                                        <option selected>Pilih Sections</option>
                                                        <option value="1">Prucurement</option>
                                                        <option value="2">Accounting</option>
                                                        <option value="3">Operations 1 Japek</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="input-group mb-1">
                                                    <span class="input-group-text"><i class="fa-solid fa-envelope"></i></span>
                                                    <input type="text" class="form-control" placeholder="Alamat Email">
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="input-group mb-1">
                                                    <span class="input-group-text"><i class="fa-solid fa-phone-volume"></i></span>
                                                    <input type="number" class="form-control" placeholder="Nomor Telepon">
                                                </div>
                                            </div>
                                            <!-- <div class="col-sm-2">
                                                <button type="button" class="btn btn-success btn-sm shadow-lg" disabled>
                                                    <i class="fa-solid fa-floppy-disk px-1"></i>
                                                    Simpan Data
                                                </button>
                                            </div> -->
                                        </div>
                                    </from>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-start">
                    <button type="button" class="btn btn-success btn-default shadow-lg" disabled>
                        <i class="fa-solid fa-floppy-disk px-1"></i>
                        Simpan Data
                    </button>
                    <button type="button" class="btn btn-default btn-danger" data-bs-dismiss="modal">
                        <i class="fa-solid fa-rectangle-xmark"></i>
                        Keluar
                    </button>
                </div>
            </div>
        </div>
    </div>
</main>