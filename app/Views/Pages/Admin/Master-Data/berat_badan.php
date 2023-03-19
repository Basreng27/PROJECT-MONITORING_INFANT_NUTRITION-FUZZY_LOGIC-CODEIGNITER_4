<?= $this->extend('Pages\Static\layout_admin'); ?>

<?= $this->section('content_admin'); ?>

<section role="main" class="content-body">
    <header class="page-header">
        <h2>Berat Badan</h2>
    </header>

    <?php if (session()->getFlashdata('gagal')) { ?>
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            Data Berat Badan <strong>gagal</strong> ditambahkan
        </div>
    <?php } ?>

    <?php if (session()->getFlashdata('berhasil')) { ?>
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            Data Berat Badan <strong>berhasil</strong> ditambahkan
        </div>
    <?php } ?>

    <?php if (session()->getFlashdata('berhasil-delete')) { ?>
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            Data Berat Badan <strong>berhasil</strong> didelete
        </div>
    <?php } ?>

    <!-- start: page -->
    <section class="panel">
        <header class="panel-heading">
            <div class="panel-actions">
                <a href="#" class="fa fa-caret-down"></a>
                <a href="#" class="fa fa-times"></a>
            </div>

            <h2 class="panel-title">Berat Badan</h2>
        </header>
        <div class="panel-body">
            <a class="modal-with-form btn btn-default" href="#modalForm">Add <i class="fa fa-plus"></i></a>
            <table class="table table-bordered table-striped mb-none" id="datatable-tabletools" data-swf-path="assets/vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kategori</th>
                        <th>Keterangan</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($data_berat as $berat) : ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $berat['kategori_berat']; ?></td>
                            <td><?= $berat['keterangan_berat']; ?></td>
                            <td>
                                <a href="#modalFormEdit<?= $berat['id_berat']; ?>" class="modal-with-form on-default edit-row"><i class="fa fa-pencil"></i></a>
                                ||
                                <a href="#modalDanger<?= $berat['id_berat']; ?>" class="modal-with-form on-default"><i class="fa fa-trash-o"></i></a>
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
            <h2 class="panel-title">Tambah Berat Badan</h2>
        </header>
        <form id="demo-form" class="form-horizontal mb-lg" action="/proses-add-berat" method="POST" novalidate="novalidate">
            <div class="panel-body">
                <div class="form-group mt-lg">
                    <label class="col-sm-3 control-label">Kategori</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control <?= ($validation->hasError('kategori_berat')) ? 'is-invalid' : ''; ?>" value="<?= old('kategori_berat'); ?>" name="kategori_berat" placeholder="Masukan Nama Kategori" required />
                        <div class="invalid-feedback"><?= $validation->getError('kategori_berat'); ?></div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Keterangan</label>
                    <div class="col-sm-9">
                        <textarea rows="5" class="form-control <?= ($validation->hasError('keterangan_berat')) ? 'is-invalid' : ''; ?>" value="<?= old('keterangan_berat'); ?>" name="keterangan_berat" placeholder="Masukan Keterangan" required></textarea>
                        <div class="invalid-feedback"><?= $validation->getError('keterangan_berat'); ?></div>
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

<?php foreach ($data_berat as $berats) : ?>
    <div id="modalFormEdit<?= $berats['id_berat']; ?>" class="modal-block modal-block-primary mfp-hide">
        <section class="panel">
            <header class="panel-heading">
                <h2 class="panel-title">Edit Data Berat Badan</h2>
            </header>
            <form id="demo-form" class="form-horizontal mb-lg" action="/proses-update-berat" method="POST" novalidate="novalidate">
                <div class="panel-body">
                    <input type="hidden" name="id_berat" value="<?= $berats['id_berat']; ?>">

                    <div class="form-group mt-lg">
                        <label class="col-sm-3 control-label">Kategori</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control <?= ($validation->hasError('kategori_berat')) ? 'is-invalid' : ''; ?>" value="<?= $berats['kategori_berat'] ?>" name="kategori_berat" placeholder="Masukan Nama Kategori" required />
                            <div class="invalid-feedback"><?= $validation->getError('kategori_berat'); ?></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Keterangan</label>
                        <div class="col-sm-9">
                            <textarea rows="5" class="form-control <?= ($validation->hasError('keterangan_berat')) ? 'is-invalid' : ''; ?>" name="keterangan_berat" placeholder="Masukan Keterangan" required><?= $berats['keterangan_berat'] ?></textarea>
                            <div class="invalid-feedback"><?= $validation->getError('keterangan_berat'); ?></div>
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

<?php foreach ($data_berat as $beratdel) : ?>
    <div id="modalDanger<?= $beratdel['id_berat']; ?>" class="modal-block modal-block-danger mfp-hide">
        <section class="panel">
            <header class="panel-heading">
                <h2 class="panel-title">Delete Data!</h2>
            </header>
            <form id="demo-form" action="/delete-berat/<?= $berat['id_berat']; ?>" method="POST" class="form-horizontal mb-lg" novalidate="novalidate">
                <div class="panel-body">
                    <div class="modal-wrapper">
                        <div class="modal-icon">
                            <i class="fa fa-times-circle"></i>
                        </div>
                        <div class="modal-text">
                            <h4>Delete</h4>
                            <p>Anda Yakin akan menghapus data berat <?= $beratdel['kategori_berat']; ?>.</p>
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