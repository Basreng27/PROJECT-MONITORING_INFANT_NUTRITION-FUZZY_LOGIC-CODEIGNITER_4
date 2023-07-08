<?= $this->extend('Pages\Static\layout_admin'); ?>

<?= $this->section('content_admin'); ?>

<section role="main" class="content-body">
    <header class="page-header">
        <h2>Balita</h2>
    </header>

    <?php if (session()->getFlashdata('gagal')) { ?>
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            Data Balita <strong>gagal</strong> ditambahkan
        </div>
    <?php } ?>

    <?php if (session()->getFlashdata('berhasil')) { ?>
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            Data Balita <strong>berhasil</strong> ditambahkan
        </div>
    <?php } ?>

    <?php if (session()->getFlashdata('berhasil-delete')) { ?>
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            Data Balita <strong>berhasil</strong> didelete
        </div>
    <?php } ?>

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
                        <th>NIK</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Anak Ke-</th>
                        <th>Berat Badan Lahir</th>
                        <th>Ayah</th>
                        <th>Ibu</th>
                        <th>Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $no = 1;
                    foreach ($data_balita as $balita) : ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $balita['nik']; ?></td>
                            <td><?= $balita['nama_balita']; ?></td>
                            <td><?= $balita['jk']; ?></td>
                            <td><?= $balita['anak_ke']; ?></td>
                            <td><?= $balita['bb_lahir']; ?></td>
                            <td><?= $balita['nama_ortu']; ?></td>
                            <td><?= $balita['nama_ibu']; ?></td>
                            <td>
                                <a href="#modalFormEdit<?= $balita['id_balita']; ?>" class="modal-with-form on-default edit-row"><i class="fa fa-pencil"></i></a>
                                ||
                                <a href="#modalDanger<?= $balita['id_balita']; ?>" class="modal-with-form on-default"><i class="fa fa-trash-o"></i></a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </section>
</section>

<div id="modalForm" class="modal-block modal-block-primary mfp-hide">
    <section class="panel">
        <header class="panel-heading">
            <h2 class="panel-title">Tambah Data Balita</h2>
        </header>
        <form id="demo-form" action="/proses-add-balita" method="POST" class="form-horizontal mb-lg" novalidate="novalidate">
            <div class="panel-body">
                <div class="form-group mt-lg">
                    <label class="col-sm-3 control-label">NIK</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control <?= ($validation->hasError('nik')) ? 'is-invalid' : ''; ?>" value="<?= old('nik'); ?>" name="nik" placeholder="Masukan NIK" required />
                        <div class="invalid-feedback"><?= $validation->getError('nik'); ?></div>
                    </div>
                </div>

                <div class="form-group mt-lg">
                    <label class="col-sm-3 control-label">Nama</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control <?= ($validation->hasError('nama_balita')) ? 'is-invalid' : ''; ?>" value="<?= old('nama_balita'); ?>" name="nama_balita" placeholder="Masukan Nama" required />
                        <div class="invalid-feedback"><?= $validation->getError('nama_balita'); ?></div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label" for="inputSuccess">Jenis Kelamin</label>
                    <div class="col-md-6">
                        <select class="form-control mb-md" name="id_jk_balita">
                            <option value="1">Laki-Laki</option>
                            <option value="2">Perempuan</option>
                        </select>
                    </div>
                </div>

                <div class="form-group mt-lg">
                    <label class="col-sm-3 control-label">Anak Ke-</label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control <?= ($validation->hasError('anak_ke')) ? 'is-invalid' : ''; ?>" value="<?= old('anak_ke'); ?>" name="anak_ke" placeholder="Masukan Anak ke" required />
                        <div class="invalid-feedback"><?= $validation->getError('anak_ke'); ?></div>
                    </div>
                </div>

                <div class="form-group mt-lg">
                    <label class="col-sm-3 control-label">Berat Badan Lahir</label>
                    <div class="col-sm-9">
                        <input type="number" class="form-control <?= ($validation->hasError('bb_lahir')) ? 'is-invalid' : ''; ?>" value="<?= old('bb_lahir'); ?>" name="bb_lahir" placeholder="Masukan Berat Badan Lahir" required />
                        <div class="invalid-feedback"><?= $validation->getError('bb_lahir'); ?></div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Nama Ayah</label>
                    <div class="col-md-6">
                        <select name="id_ortu_ayah" class="form-control">
                            <option value="">===== Pilih Ayah =====</option>
                            <?php foreach ($data_ayah as $ortu) : ?>
                                <option value="<?= $ortu['id_ortu']; ?>"><?= $ortu['nama_ortu']; ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label">Nama Ibu</label>
                    <div class="col-md-6">
                        <select name="id_ortu_ibu" class="form-control">
                            <option value="">===== Pilih Ibu =====</option>
                            <?php foreach ($data_ibu as $ortu) : ?>
                                <option value="<?= $ortu['id_ortu']; ?>"><?= $ortu['nama_ortu']; ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label" for="inputSuccess">Dari Keluarga</label>
                    <div class="col-md-6">
                        <select class="form-control mb-md" name="dari_keluarga">
                            <option value="">===== Pilih Ibu =====</option>
                            <option value="N">N</option>
                            <option value="G">G</option>
                        </select>
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

<?php foreach ($data_balita as $balitas) : ?>
    <div id="modalFormEdit<?= $balitas['id_balita']; ?>" class="modal-block modal-block-primary mfp-hide">
        <section class="panel">
            <header class="panel-heading">
                <h2 class="panel-title">Edit Data Balita</h2>
            </header>
            <form id="demo-form" action="/proses-update-balita" method="POST" class="form-horizontal mb-lg" novalidate="novalidate">
                <div class="panel-body">
                    <input type="hidden" name="id_balita" value="<?= $balitas['id_balita']; ?>">

                    <div class="form-group mt-lg">
                        <label class="col-sm-3 control-label">NIK</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control <?= ($validation->hasError('nik')) ? 'is-invalid' : ''; ?>" value="<?= $balitas['nik'] ?? null; ?>" name="nik" required />
                            <div class="invalid-feedback"><?= $validation->getError('nik'); ?></div>
                        </div>
                    </div>

                    <div class="form-group mt-lg">
                        <label class="col-sm-3 control-label">Nama</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control <?= ($validation->hasError('nama_balita')) ? 'is-invalid' : ''; ?>" value="<?= $balitas['nama_balita'] ?? null; ?>" name="nama_balita" required />
                            <div class="invalid-feedback"><?= $validation->getError('nama_balita'); ?></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="inputSuccess">Jenis Kelamin</label>
                        <div class="col-md-6">
                            <select class="form-control mb-md" name="id_jk_balita">
                                <option value="1" <?= $balitas['id_jk_balita'] == 1 ? 'selected' : null; ?>>Laki-Laki</option>
                                <option value="2" <?= $balitas['id_jk_balita'] == 2 ? 'selected' : null; ?>>Perempuan</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group mt-lg">
                        <label class="col-sm-3 control-label">Anak Ke</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control <?= ($validation->hasError('anak_ke')) ? 'is-invalid' : ''; ?>" value="<?= $balitas['anak_ke'] ?? null; ?>" name="anak_ke" required />
                            <div class="invalid-feedback"><?= $validation->getError('anak_ke'); ?></div>
                        </div>
                    </div>

                    <div class="form-group mt-lg">
                        <label class="col-sm-3 control-label">Berat Badan Lahir</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control <?= ($validation->hasError('bb_lahir')) ? 'is-invalid' : ''; ?>" value="<?= $balitas['bb_lahir'] ?? null; ?>" name="bb_lahir" required />
                            <div class="invalid-feedback"><?= $validation->getError('bb_lahir'); ?></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Nama Ayah</label>
                        <div class="col-md-6">
                            <select name="id_ortu_ayah" class="form-control">
                                <?php foreach ($data_ayah as $ortu) : ?>
                                    <option value="<?= $ortu['id_ortu']; ?>" <?= $balitas['id_ortu'] == $ortu['id_ortu'] ? 'selected' : null; ?>><?= $ortu['nama_ortu']; ?></option>
                                <?php endforeach ?>
                            </select>
                            <div class="invalid-feedback"><?= $validation->getError('id_ortu'); ?></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label">Nama Ibu</label>
                        <div class="col-md-6">
                            <select name="id_ortu_ibu" class="form-control">
                                <?php foreach ($data_ibu as $ortu) : ?>
                                    <option value="<?= $ortu['id_ortu']; ?>" <?= $balitas['id_ortu'] == $ortu['id_ortu'] ? 'selected' : null; ?>><?= $ortu['nama_ortu']; ?></option>
                                <?php endforeach ?>
                            </select>
                            <div class="invalid-feedback"><?= $validation->getError('id_ortu'); ?></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="inputSuccess">Dari Keluarga</label>
                        <div class="col-md-6">
                            <select class="form-control mb-md" name="dari_keluarga">
                                <option value="N" <?= $balitas['dari_keluarga'] == 'N' ? 'selected' : null; ?>>N</option>
                                <option value="G" <?= $balitas['dari_keluarga'] == 'G' ? 'selected' : null; ?>>G</option>
                            </select>
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
            </footer>
        </section>
    </div>
<?php endforeach ?>

<?php foreach ($data_balita as $balitadel) : ?>
    <div id="modalDanger<?= $balitadel['id_balita']; ?>" class="modal-block modal-block-danger mfp-hide">
        <section class="panel">
            <header class="panel-heading">
                <h2 class="panel-title">Delete Data!</h2>
            </header>
            <form id="demo-form" action="/delete-balita/<?= $balitadel['id_balita']; ?>" method="POST" class="form-horizontal mb-lg" novalidate="novalidate">
                <div class="panel-body">
                    <div class="modal-wrapper">
                        <div class="modal-icon">
                            <i class="fa fa-times-circle"></i>
                        </div>
                        <div class="modal-text">
                            <h4>Delete</h4>
                            <p>Anda Yakin akan menghapus data balita <?= $balitadel['nama_balita']; ?>.</p>
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