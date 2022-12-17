<?= $this->extend('Pages\Static\layout_admin'); ?>

<?= $this->section('content_admin'); ?>

<section role="main" class="content-body">
    <header class="page-header">
        <h2>Orang Tua</h2>
    </header>

    <?php if (session()->getFlashdata('gagal')) { ?>
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            Data Orag Tua <strong>gagal</strong> ditambahkan
        </div>
    <?php } ?>

    <?php if (session()->getFlashdata('berhasil')) { ?>
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            Data Orag Tua <strong>berhasil</strong> ditambahkan
        </div>
    <?php } ?>

    <?php if (session()->getFlashdata('berhasil-delete')) { ?>
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            Data Orag Tua <strong>berhasil</strong> didelete
        </div>
    <?php } ?>

    <!-- start: page -->
    <section class="panel">
        <header class="panel-heading">
            <div class="panel-actions">
                <a href="#" class="fa fa-caret-down"></a>
                <a href="#" class="fa fa-times"></a>
            </div>

            <h2 class="panel-title">Data Orang Tua</h2>
        </header>
        <div class="panel-body">
            <a class="modal-with-form btn btn-default" href="#modalForm">Add <i class="fa fa-plus"></i></a>
            <table class="table table-bordered table-striped mb-none" id="datatable-tabletools" data-swf-path="assets/vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Pekerjaan</th>
                        <th>No Telpon</th>
                        <th>Jenis Kelamin</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($data_ortu as $ortu) : ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $ortu['nama_ortu']; ?></td>
                            <td><?= $ortu['alamat']; ?></td>
                            <td><?= $ortu['pekerjaan']; ?></td>
                            <td><?= $ortu['no_telpon']; ?></td>
                            <td><?= $ortu['jk']; ?></td>
                            <td>
                                <a href="#modalFormEdit<?= $ortu['id_ortu']; ?>" class="modal-with-form on-default edit-row"><i class="fa fa-pencil"></i></a>
                                ||
                                <!-- <a href="#modalDanger<?= $ortu['id_ortu']; ?>" class="on-default remove-row"><i class="fa fa-trash-o"></i></a> -->
                                <a href="#modalDanger<?= $ortu['id_ortu']; ?>" class="modal-with-form on-default"><i class="fa fa-trash-o"></i></a>
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
            <h2 class="panel-title">Tambah Data Orang Tua</h2>
        </header>
        <form id="demo-form" action="/proses-add-orang-tua" class="form-horizontal mb-lg" method="POST" novalidate="novalidate">
            <div class="panel-body">
                <div class="form-group mt-lg">
                    <label class="col-sm-3 control-label">Nama</label>
                    <div class="col-sm-9">
                        <input type="text" name="nama_ortu" class="form-control <?= ($validation->hasError('nama_ortu')) ? 'is-invalid' : ''; ?>" value="<?= old('nama_ortu'); ?>" required />
                        <div class="invalid-feedback"><?= $validation->getError('nama_ortu'); ?></div>
                    </div>
                </div>

                <div class="form-group mt-lg">
                    <label class="col-sm-3 control-label">Alamat</label>
                    <div class="col-sm-9">
                        <textarea type="text" name="alamat" class="form-control <?= ($validation->hasError('alamat')) ? 'is-invalid' : ''; ?>" required><?= old('alamat'); ?></textarea>
                        <div class="invalid-feedback"><?= $validation->getError('alamat'); ?></div>
                    </div>
                </div>

                <div class="form-group mt-lg">
                    <label class="col-sm-3 control-label">Pekerjaan</label>
                    <div class="col-sm-9">
                        <input type="text" name="pekerjaan" class="form-control <?= ($validation->hasError('pekerjaan')) ? 'is-invalid' : ''; ?>" value="<?= old('pekerjaan'); ?>" required />
                        <div class="invalid-feedback"><?= $validation->getError('pekerjaan'); ?></div>
                    </div>
                </div>

                <div class="form-group mt-lg">
                    <label class="col-sm-3 control-label">No Telpon</label>
                    <div class="col-sm-9">
                        <input type="text" name="no_telpon" class="form-control <?= ($validation->hasError('no_telpon')) ? 'is-invalid' : ''; ?>" value="<?= old('no_telpon'); ?>" required />
                        <div class="invalid-feedback"><?= $validation->getError('no_telpon'); ?></div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label" for="inputSuccess">Jenis Kelamin</label>
                    <div class="col-md-6">
                        <select class="form-control mb-md" name="id_jk_ortu">
                            <option value="1">Laki-Laki</option>
                            <option value="2">Perempuan</option>
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

<?php foreach ($data_ortu as $ortus) : ?>
    <div id="modalFormEdit<?= $ortus['id_ortu']; ?>" class="modal-block modal-block-primary mfp-hide">
        <section class="panel">
            <header class="panel-heading">
                <h2 class="panel-title">Edit Data Orang Tua</h2>
            </header>
            <form id="demo-form" action="/proses-update-orang-tua" method="POST" class="form-horizontal mb-lg" novalidate="novalidate">
                <div class="panel-body">
                    <input type="hidden" name="id_ortu" value="<?= $ortus['id_ortu']; ?>">

                    <div class="form-group mt-lg">
                        <label class="col-sm-3 control-label">Nama</label>
                        <div class="col-sm-9">
                            <input type="text" name="nama_ortu" class="form-control <?= ($validation->hasError('nama_ortu')) ? 'is-invalid' : ''; ?>" value="<?= $ortus['nama_ortu'] ?>" required />
                            <div class="invalid-feedback"><?= $validation->getError('nama_ortu'); ?></div>
                        </div>
                    </div>

                    <div class="form-group mt-lg">
                        <label class="col-sm-3 control-label">Alamat</label>
                        <div class="col-sm-9">
                            <textarea type="text" name="alamat" class="form-control <?= ($validation->hasError('alamat')) ? 'is-invalid' : ''; ?>" required><?= $ortus['alamat'] ?></textarea>
                            <div class="invalid-feedback"><?= $validation->getError('alamat'); ?></div>
                        </div>
                    </div>

                    <div class="form-group mt-lg">
                        <label class="col-sm-3 control-label">Pekerjaan</label>
                        <div class="col-sm-9">
                            <input type="text" name="pekerjaan" class="form-control <?= ($validation->hasError('pekerjaan')) ? 'is-invalid' : ''; ?>" value="<?= $ortus['pekerjaan'] ?>" required />
                            <div class="invalid-feedback"><?= $validation->getError('pekerjaan'); ?></div>
                        </div>
                    </div>

                    <div class="form-group mt-lg">
                        <label class="col-sm-3 control-label">No Telpon</label>
                        <div class="col-sm-9">
                            <input type="text" name="no_telpon" class="form-control <?= ($validation->hasError('no_telpon')) ? 'is-invalid' : ''; ?>" value="<?= $ortus['no_telpon'] ?>" required />
                            <div class="invalid-feedback"><?= $validation->getError('no_telpon'); ?></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="inputSuccess">Jenis Kelamin</label>
                        <div class="col-md-6">
                            <select class="form-control mb-md" name="id_jk_ortu">
                                <option value="<?= $ortus['id_jk_ortu']; ?>"><?= $ortus['jk']; ?></option>
                                <option value="1">Laki-Laki</option>
                                <option value="2">Perempuan</option>
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
<?php endforeach ?>

<?php foreach ($data_ortu as $ortudel) : ?>
    <div id="modalDanger<?= $ortudel['id_ortu']; ?>" class="modal-block modal-block-danger mfp-hide">
        <section class="panel">
            <header class="panel-heading">
                <h2 class="panel-title">Delete Data!</h2>
            </header>
            <form id="demo-form" action="/delete-ortu/<?= $ortu['id_ortu']; ?>" method="POST" class="form-horizontal mb-lg" novalidate="novalidate">
                <div class="panel-body">
                    <div class="modal-wrapper">
                        <div class="modal-icon">
                            <i class="fa fa-times-circle"></i>
                        </div>
                        <div class="modal-text">
                            <h4>Delete</h4>
                            <p>Anda Yakin akan menghapus data ortu <?= $ortudel['nama_ortu']; ?>.</p>
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