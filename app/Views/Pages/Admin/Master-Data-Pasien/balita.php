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
                    <label class="col-md-3 control-label">Basic select</label>
                    <div class="col-md-6">
                        <select data-plugin-selectTwo class="form-control populate">
                            <optgroup label="Alaskan/Hawaiian Time Zone">
                                <option value="AK">Alaska</option>
                                <option value="HI">Hawaii</option>
                            </optgroup>
                            <optgroup label="Pacific Time Zone">
                                <option value="CA">California</option>
                                <option value="NV">Nevada</option>
                                <option value="OR">Oregon</option>
                                <option value="WA">Washington</option>
                            </optgroup>
                            <optgroup label="Mountain Time Zone">
                                <option value="AZ">Arizona</option>
                                <option value="CO">Colorado</option>
                                <option value="ID">Idaho</option>
                                <option value="MT">Montana</option>
                                <option value="NE">Nebraska</option>
                                <option value="NM">New Mexico</option>
                                <option value="ND">North Dakota</option>
                                <option value="UT">Utah</option>
                                <option value="WY">Wyoming</option>
                            </optgroup>
                            <optgroup label="Central Time Zone">
                                <option value="AL">Alabama</option>
                                <option value="AR">Arkansas</option>
                                <option value="IL">Illinois</option>
                                <option value="IA">Iowa</option>
                                <option value="KS">Kansas</option>
                                <option value="KY">Kentucky</option>
                                <option value="LA">Louisiana</option>
                                <option value="MN">Minnesota</option>
                                <option value="MS">Mississippi</option>
                                <option value="MO">Missouri</option>
                                <option value="OK">Oklahoma</option>
                                <option value="SD">South Dakota</option>
                                <option value="TX">Texas</option>
                                <option value="TN">Tennessee</option>
                                <option value="WI">Wisconsin</option>
                            </optgroup>
                            <optgroup label="Eastern Time Zone">
                                <option value="CT">Connecticut</option>
                                <option value="DE">Delaware</option>
                                <option value="FL">Florida</option>
                                <option value="GA">Georgia</option>
                                <option value="IN">Indiana</option>
                                <option value="ME">Maine</option>
                                <option value="MD">Maryland</option>
                                <option value="MA">Massachusetts</option>
                                <option value="MI">Michigan</option>
                                <option value="NH">New Hampshire</option>
                                <option value="NJ">New Jersey</option>
                                <option value="NY">New York</option>
                                <option value="NC">North Carolina</option>
                                <option value="OH">Ohio</option>
                                <option value="PA">Pennsylvania</option>
                                <option value="RI">Rhode Island</option>
                                <option value="SC">South Carolina</option>
                                <option value="VT">Vermont</option>
                                <option value="VA">Virginia</option>
                                <option value="WV">West Virginia</option>
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