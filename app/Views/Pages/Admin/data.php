<?= $this->extend('Pages\Static\layout_admin'); ?>

<?= $this->section('content_admin'); ?>

<section role="main" class="content-body">
    <header class="page-header">
        <h2>Data Antropometri Balita</h2>
    </header>

    <?php if (session()->getFlashdata('gagal')) { ?>
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            Data Antropometri Balita <strong>gagal</strong> ditambahkan
        </div>
    <?php } ?>

    <?php if (session()->getFlashdata('berhasil')) { ?>
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            Data Antropometri Balita <strong>berhasil</strong> ditambahkan
        </div>
    <?php } ?>

    <?php if (session()->getFlashdata('berhasil-delete')) { ?>
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            Data Antropometri Balita <strong>berhasil</strong> didelete
        </div>
    <?php } ?>

    <!-- start: page -->
    <section class="panel">
        <header class="panel-heading">
            <div class="panel-actions">
                <a href="#" class="fa fa-caret-down"></a>
                <a href="#" class="fa fa-times"></a>
            </div>

            <h2 class="panel-title">Data Antropometri Balita</h2>
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
                        <th>Tanggal</th>
                        <th>Umur</th>
                        <th>Tinggi</th>
                        <th>Berat</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($data_antropologi as $data) : ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $data['nama_balita']; ?></td>
                            <td><?= $data['jk']; ?></td>
                            <td><?= $data['nama_ortu']; ?></td>
                            <td><?= $data['tanggal']; ?></td>
                            <td><?= $data['umur']; ?></td>
                            <td><?= $data['tinggi']; ?></td>
                            <td><?= $data['berat']; ?></td>
                            <td>
                                <a href="#modalDanger<?= $data['id_data']; ?>" class="modal-with-form on-default"><i class="fa fa-trash-o"></i></a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </section>
    <!-- end: page -->
</section>

<div id="modalForm" class="modal-block modal-block-primary mfp-hide">
    <section class="panel">
        <header class="panel-heading">
            <h2 class="panel-title">Tambah Data Antropometri Balita</h2>
        </header>
        <form id="demo-form" action="/proses-add-data" method="POST" class="form-horizontal mb-lg" novalidate="novalidate">
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-md-3 control-label">Balita</label>
                    <div class="col-md-6">
                        <select name="id_balita" class="form-control">
                            <option value="">===== Pilih Balita =====</option>
                            <?php foreach ($data_balita as $balita) : ?>
                                <option value="<?= $balita['id_balita']; ?>"><?= $balita['nama_balita']; ?></option>
                            <?php endforeach ?>
                        </select>
                        <div class="invalid-feedback"><?= $validation->getError('id_balita'); ?></div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Tanggal Kunjungan</label>
                    <div class="col-md-6">
                        <div class="input-group">
                            <!-- <span class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </span> -->
                            <!-- <input type="text" data-plugin-datepicker class="form-control" value="<?php date('Y-d-h') ?>" readonly> -->
                            <input type="date" class="form-control" name="tanggal">
                        </div>
                    </div>
                </div>

                <div class="form-group mt-lg">
                    <label class="col-sm-3 control-label">Umur (Bulan)</label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control <?= ($validation->hasError('umur')) ? 'is-invalid' : ''; ?>" value="<?= old('umur'); ?>" name="umur" placeholder="Masukan Umur Dalam hitungan Bulan" required />
                        <div class="invalid-feedback"><?= $validation->getError('umur'); ?></div>
                    </div>
                </div>

                <div class="form-group mt-lg">
                    <label class="col-sm-3 control-label">Tinggi (Cm)</label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control <?= ($validation->hasError('tinggi')) ? 'is-invalid' : ''; ?>" value="<?= old('tinggi'); ?>" name="tinggi" placeholder="Masukan Tinggi Dalam hitungan Cm" required />
                        <div class="invalid-feedback"><?= $validation->getError('tinggi'); ?></div>
                    </div>
                </div>

                <div class="form-group mt-lg">
                    <label class="col-sm-3 control-label">Berat (Kg)</label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control <?= ($validation->hasError('berat')) ? 'is-invalid' : ''; ?>" value="<?= old('berat'); ?>" name="berat" placeholder="Masukan Berat Dalam hitungan Kg" required />
                        <div class="invalid-feedback"><?= $validation->getError('berat'); ?></div>
                    </div>
                </div>
            </div>
            <footer class="panel-footer">
                <div class="row">
                    <div class="col-md-12 text-right">
                        <button class="btn btn-default modal-dismiss">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </div>
            </footer>
        </form>
    </section>
</div>

<?php foreach ($data_antropologi as $datadel) : ?>
    <div id="modalDanger<?= $datadel['id_data']; ?>" class="modal-block modal-block-danger mfp-hide">
        <section class="panel">
            <header class="panel-heading">
                <h2 class="panel-title">Delete Data!</h2>
            </header>
            <form id="demo-form" action="/delete-data/<?= $datadel['id_data']; ?>" method="POST" class="form-horizontal mb-lg" novalidate="novalidate">
                <div class="panel-body">
                    <div class="modal-wrapper">
                        <div class="modal-icon">
                            <i class="fa fa-times-circle"></i>
                        </div>
                        <div class="modal-text">
                            <h4>Delete</h4>
                            <p>Anda Yakin akan menghapus data Antropometri balita <?= $datadel['nama_balita']; ?>.</p>
                        </div>
                    </div>
                </div>
                <footer class="panel-footer">
                    <div class="row">
                        <div class="col-md-12 text-right">
                            <button class="btn btn-default modal-dismiss">Cancel</button>
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </div>
                    </div>
                </footer>
            </form>
        </section>
    </div>
<?php endforeach ?>

<?= $this->endSection(); ?>