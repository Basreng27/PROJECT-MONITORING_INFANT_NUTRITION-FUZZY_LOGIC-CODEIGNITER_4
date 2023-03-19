<?= $this->extend('Pages\Static\layout_admin'); ?>

<?= $this->section('content_admin'); ?>

<section role="main" class="content-body">
    <header class="page-header">
        <h2>Misi</h2>
    </header>

    <?php if (session()->getFlashdata('gagal')) { ?>
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            Data Misi <strong>gagal</strong> ditambahkan
        </div>
    <?php } ?>

    <?php if (session()->getFlashdata('berhasil')) { ?>
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            Data Misi <strong>berhasil</strong> ditambahkan
        </div>
    <?php } ?>

    <?php if (session()->getFlashdata('berhasil-delete')) { ?>
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            Data Misi <strong>berhasil</strong> didelete
        </div>
    <?php } ?>

    <!-- start: page -->
    <section class="panel">
        <header class="panel-heading">
            <div class="panel-actions">
                <a href="#" class="fa fa-caret-down"></a>
                <a href="#" class="fa fa-times"></a>
            </div>

            <h2 class="panel-title">Data Misi</h2>
        </header>
        <div class="panel-body">
            <a class="modal-with-form btn btn-default" href="#modalForm">Add <i class="fa fa-plus"></i></a>
            <table class="table table-bordered table-striped mb-none" id="datatable-tabletools" data-swf-path="assets/vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Misi</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($misi as $d_misi) : ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $d_misi['misi']; ?></td>
                            <td>
                                <a href="#modalForm<?= $d_misi['id']; ?>" class="modal-with-form on-default edit-row"><i class="fa fa-pencil"></i></a>
                                ||
                                <a href="#modalDanger<?= $d_misi['id']; ?>" class="modal-with-form on-default"><i class="fa fa-trash-o"></i></a>
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
            <h2 class="panel-title">Tambah Data Misi</h2>
        </header>
        <form id="demo-form" action="/save-misi" method="POST" class="form-horizontal mb-lg" novalidate="novalidate">
            <div class="panel-body">
                <div class="form-group mt-lg">
                    <label class="col-sm-3 control-label">Misi</label>
                    <div class="col-sm-9">
                        <textarea class="form-control <?= ($validation->hasError('misi')) ? 'is-invalid' : ''; ?>" value="<?= old('misi'); ?>" placeholder="Masukan Misi..." name="misi" rows="3" data-plugin-maxlength maxlength="140"></textarea>
                        <div class="invalid-feedback"><?= $validation->getError('misi'); ?></div>
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

<?php foreach ($misi as $e_misi) : ?>
    <div id="modalForm<?= $e_misi['id']; ?>" class="modal-block modal-block-primary mfp-hide">
        <section class="panel">
            <header class="panel-heading">
                <h2 class="panel-title">Edit Data Misi</h2>
            </header>
            <form id="demo-form" action="/save-misi" method="POST" class="form-horizontal mb-lg" novalidate="novalidate">
                <div class="panel-body">
                    <input type="hidden" name="id_misi" value="<?= $e_misi['id']; ?>">
                    <div class="form-group mt-lg">
                        <label class="col-sm-3 control-label">Misi</label>
                        <div class="col-sm-9">
                            <textarea class="form-control <?= ($validation->hasError('misi')) ? 'is-invalid' : ''; ?>" value="<?= old('misi'); ?>" placeholder="Masukan Misi..." name="misi" rows="3" data-plugin-maxlength maxlength="140"><?= $e_misi['misi'] ?? null ?></textarea>
                            <div class="invalid-feedback"><?= $validation->getError('misi'); ?></div>
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

<?php foreach ($misi as $d_misi) : ?>
    <div id="modalDanger<?= $d_misi['id']; ?>" class="modal-block modal-block-danger mfp-hide">
        <section class="panel">
            <header class="panel-heading">
                <h2 class="panel-title">Delete Data!</h2>
            </header>
            <form id="demo-form" action="/delete-misi/<?= $d_misi['id']; ?>" method="POST" class="form-horizontal mb-lg" novalidate="novalidate">
                <div class="panel-body">
                    <div class="modal-wrapper">
                        <div class="modal-icon">
                            <i class="fa fa-times-circle"></i>
                        </div>
                        <div class="modal-text">
                            <h4>Delete</h4>
                            <p>Anda Yakin akan menghapus data Misi <?= $d_misi['id']; ?>.</p>
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