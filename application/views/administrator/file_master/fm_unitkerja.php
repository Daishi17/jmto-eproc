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
            </div>
            <hr>
            <div class="card border-dark">
                <div class="card-header border-dark bg-warning d-flex justify-content-between align-items-center">
                    <div class="flex-grow-1 bd-highlight">
                        <span class="text-dark">
                            <i class="fa-solid fa-building-columns px-1"></i>
                            <small><strong>Data Tabel - Departemen</strong></small>
                        </span>
                    </div>
                    <div class="bd-highlight">
                        <button type="button" class="btn btn-primary btn-sm shadow-lg" data-bs-toggle="modal" data-bs-target="#modal-xl-tambah">
                            <i class="fa-solid fa-circle-plus px-1"></i>
                            Tambah Data
                        </button>
                    </div>
                </div>

                <!-- url -->
                <input type="hidden" name="url_post" value="<?= base_url('administrator/fm_unit_kerja/save') ?>">
                <input type="hidden" name="url_get_departemen" value="<?= base_url('administrator/fm_unit_kerja/datatable_departemen') ?>">
                <input type="hidden" name="url_get_byid" value="<?= base_url('administrator/fm_unit_kerja/byid/') ?>">
                <input type="hidden" name="url_aktifkan_departemen" value="<?= base_url('administrator/fm_unit_kerja/aktif/') ?>">
                <input type="hidden" name="url_nonaktifkan_departemen" value="<?= base_url('administrator/fm_unit_kerja/nonaktif/') ?>">
                <!-- end url -->

                <div class="card-body">
                    <div style="overflow-x: auto;">
                        <table id="tbl_departemen" class="table table-bordered table-sm table-striped">
                            <thead class="bg-secondary">
                                <tr>
                                    <th style="width:10%;"><small class="text-white">Kode</small></th>
                                    <th style="width:60%;"><small class="text-white">Nama Departemen</small></th>
                                    <th style="width:10%;"><small class="text-white">Status</small></th>
                                    <th style="width:20%;"><small class="text-white">
                                            <div class="text-center">More Options</div>
                                        </small>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- <tr>
                                <td><small>001</small></td>
                                <td><small>Human Capital & General Affair</small></td>
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
                            </tr> -->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>


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
                                        <small><strong>Form Data - Unit Kerja</strong></small>
                                    </span>
                                </div>
                                <!-- <div class="bd-highlight">
                                    <button type="button" class="btn btn-secondary btn-sm shadow-lg">
                                        <i class="fa-solid fa-pen-to-square px-1"></i>
                                        Ubah Data
                                    </button>
                                </div> -->
                            </div>
                            <form action="javascript:;" id="form_departemen">
                                <div class="card-body">
                                    <div class="row g-1">
                                        <div class="col-sm-3">
                                            <div class="input-group mb-2">
                                                <span class="input-group-text"><i class="fa-solid fa-barcode"></i></span>
                                                <input type="text" class="form-control" value="<?= $kode_departemen ?>" name="kode_departemen" readonly>
                                            </div>
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="input-group mb-2">
                                                <span class="input-group-text"><i class="fa-solid fa-keyboard"></i></span>
                                                <input type="text" class="form-control" name="nama_departemen" placeholder="Nama Departemen">
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <button type="submit" class="btn btn-success btn-sm shadow-lg">
                                                <i class="fa-solid fa-floppy-disk px-1"></i>
                                                Simpan Data
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer d-flex justify-content-start">
                <button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal">
                    <i class="fa-solid fa-rectangle-xmark"></i>
                    Keluar
                </button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" tabindex="-1" id="modal-xl-edit" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                        <small><strong>Form Data - Unit Kerja</strong></small>
                                    </span>
                                </div>
                                <!-- <div class="bd-highlight">
                                    <button type="button" class="btn btn-secondary btn-sm shadow-lg">
                                        <i class="fa-solid fa-pen-to-square px-1"></i>
                                        Ubah Data
                                    </button>
                                </div> -->
                            </div>
                            <form action="javascript:;" id="form_departemen_edit">
                                <div class="card-body">
                                    <div class="row g-1">
                                        <div class="col-sm-3">
                                            <input type="hidden" name="id_departemen">
                                            <div class="input-group mb-2">
                                                <span class="input-group-text"><i class="fa-solid fa-barcode"></i></span>
                                                <input type="text" class="form-control" name="kode_departemen" readonly>

                                            </div>
                                        </div>
                                        <div class="col-sm-9">
                                            <div class="input-group mb-2">
                                                <span class="input-group-text"><i class="fa-solid fa-keyboard"></i></span>
                                                <input type="text" class="form-control" name="nama_departemen" placeholder="Nama Departemen">
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <button type="submit" class="btn btn-success btn-sm shadow-lg">
                                                <i class="fa-solid fa-floppy-disk px-1"></i>
                                                Simpan Data
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer d-flex justify-content-start">
                <button type="button" class="btn btn-sm btn-danger" data-bs-dismiss="modal">
                    <i class="fa-solid fa-rectangle-xmark"></i>
                    Keluar
                </button>
            </div>
        </div>
    </div>
</div>