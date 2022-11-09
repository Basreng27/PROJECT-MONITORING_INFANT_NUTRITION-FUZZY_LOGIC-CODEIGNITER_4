<?= $this->extend('Pages\Static\layout_admin'); ?>

<?= $this->section('content_admin'); ?>

<section role="main" class="content-body">
    <header class="page-header">
        <h2>Balita</h2>
    </header>

    <!-- start: page -->
    <section class="panel">
        <header class="panel-heading">
            <div class="panel-actions">
                <a href="#" class="fa fa-caret-down"></a>
                <a href="#" class="fa fa-times"></a>
            </div>

            <h2 class="panel-title">Data Balita</h2>
        </header>
        <div class="panel-body">
            <a class="modal-with-form btn btn-default" href="#modalForm">Add <i class="fa fa-plus"></i></a>
            <table class="table table-bordered table-striped mb-none" id="datatable-tabletools" data-swf-path="assets/vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Orang Tua</th>
                        <th>Umur</th>
                        <th>Berat Badan</th>
                        <th>Tinggi Badan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Ucup</td>
                        <td>Laki Laki</td>
                        <td>Udin</td>
                        <td>2 Bulan</td>
                        <td>72 Cm</td>
                        <td>23 Kg</td>
                        <td>
                            <a href="#modalFormEdit" class="modal-with-form on-default edit-row"><i class="fa fa-pencil"></i></a>
                            <a href="#" class="on-default remove-row"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
    <!-- end: page -->
</section>

<div id="modalForm" class="modal-block modal-block-primary mfp-hide">
    <section class="panel">
        <header class="panel-heading">
            <h2 class="panel-title">Tambah Data Balita</h2>
        </header>
        <div class="panel-body">
            <form id="demo-form" class="form-horizontal mb-lg" novalidate="novalidate">
                <div class="form-group mt-lg">
                    <label class="col-sm-3 control-label">Nama</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" placeholder="Masukan Nama" required />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label" for="inputSuccess">Jenis Kelamin</label>
                    <div class="col-md-6">
                        <select class="form-control mb-md">
                            <option>Laki-Laki</option>
                            <option>Perempuan</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Nama Orang Tua</label>
                    <div class="col-md-6">
                        <select data-plugin-selectTwo class="form-control populate">
                            <optgroup label="Nama Orang Tua">
                                <option value="AK">Udin</option>
                            </optgroup>
                        </select>
                    </div>
                </div>

                <div class="form-group mt-lg">
                    <label class="col-sm-3 control-label">Umur</label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control" placeholder="Masukan Umur Dalam hitungan Bulan" required />
                    </div>
                </div>

                <div class="form-group mt-lg">
                    <label class="col-sm-3 control-label">Tinggi</label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control" placeholder="Masukan Tinggi Dalam hitungan Cm" required />
                    </div>
                </div>

                <div class="form-group mt-lg">
                    <label class="col-sm-3 control-label">Berat</label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control" placeholder="Masukan Berat Dalam hitungan Kg" required />
                    </div>
                </div>
            </form>
        </div>
        <footer class="panel-footer">
            <div class="row">
                <div class="col-md-12 text-right">
                    <button class="btn btn-default modal-dismiss">Cancel</button>
                    <button class="btn btn-primary modal-confirm">Save</button>
                </div>
            </div>
        </footer>
    </section>
</div>

<div id="modalFormEdit" class="modal-block modal-block-primary mfp-hide">
    <section class="panel">
        <header class="panel-heading">
            <h2 class="panel-title">Edit Data OBalita</h2>
        </header>
        <div class="panel-body">
            <form id="demo-form" class="form-horizontal mb-lg" novalidate="novalidate">
                <div class="form-group mt-lg">
                    <label class="col-sm-3 control-label">Nama</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" placeholder="Masukan Nama" required />
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label" for="inputSuccess">Jenis Kelamin</label>
                    <div class="col-md-6">
                        <select class="form-control mb-md">
                            <option>Laki-Laki</option>
                            <option>Perempuan</option>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Nama Orang Tua</label>
                    <div class="col-md-6">
                        <select data-plugin-selectTwo class="form-control populate">
                            <optgroup label="Nama Orang Tua">
                                <option value="AK">Udin</option>
                            </optgroup>
                        </select>
                    </div>
                </div>

                <div class="form-group mt-lg">
                    <label class="col-sm-3 control-label">Umur</label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control" placeholder="Masukan Umur Dalam hitungan Bulan" required />
                    </div>
                </div>

                <div class="form-group mt-lg">
                    <label class="col-sm-3 control-label">Tinggi</label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control" placeholder="Masukan Tinggi Dalam hitungan Cm" required />
                    </div>
                </div>

                <div class="form-group mt-lg">
                    <label class="col-sm-3 control-label">Berat</label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control" placeholder="Masukan Berat Dalam hitungan Kg" required />
                    </div>
                </div>
            </form>
        </div>
        <footer class="panel-footer">
            <div class="row">
                <div class="col-md-12 text-right">
                    <button class="btn btn-default modal-dismiss">Cancel</button>
                    <button class="btn btn-primary modal-confirm">Save</button>
                </div>
            </div>
        </footer>
    </section>
</div>

<?= $this->endSection(); ?>