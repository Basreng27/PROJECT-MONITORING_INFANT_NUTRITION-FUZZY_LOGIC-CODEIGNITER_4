<?= $this->extend('Pages\Static\layout_admin'); ?>

<?= $this->section('content_admin'); ?>

<section role="main" class="content-body">
    <header class="page-header">
        <h2>Tinggi Badan</h2>
    </header>

    <?php if (session()->getFlashdata('gagal')) { ?>
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            Data Tinggi Badan <strong>gagal</strong> ditambahkan
        </div>
    <?php } ?>

    <?php if (session()->getFlashdata('berhasil')) { ?>
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            Data Tinggi Badan <strong>berhasil</strong> ditambahkan
        </div>
    <?php } ?>

    <?php if (session()->getFlashdata('berhasil-delete')) { ?>
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            Data Tinggi Badan <strong>berhasil</strong> didelete
        </div>
    <?php } ?>

    <!-- start: page -->
    <section class="panel">
        <header class="panel-heading">
            <div class="panel-actions">
                <a href="#" class="fa fa-caret-down"></a>
                <a href="#" class="fa fa-times"></a>
            </div>

            <h2 class="panel-title">Tinggi Badan</h2>
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
                    foreach ($data_tinggi as $tinggi) : ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $tinggi['kategori_tinggi']; ?></td>
                            <td><?= $tinggi['keterangan_tinggi']; ?></td>
                            <td>
                                <a href="#modalFormEdit<?= $tinggi['id_tinggi']; ?>" class="modal-with-form on-default edit-row"><i class="fa fa-pencil"></i></a>
                                ||
                                <a href="#modalDanger<?= $tinggi['id_tinggi']; ?>" class="modal-with-form on-default"><i class="fa fa-trash-o"></i></a>
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
            <h2 class="panel-title">Tambah Tinggi Badan</h2>
        </header>
        <form id="demo-form" class="form-horizontal mb-lg" action="/proses-add-tinggi" method="POST" novalidate="novalidate">
            <div class="panel-body">
                <div class="form-group mt-lg">
                    <label class="col-sm-3 control-label">Kategori</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control <?= ($validation->hasError('kategori_tinggi')) ? 'is-invalid' : ''; ?>" value="<?= old('kategori_tinggi'); ?>" name="kategori_tinggi" placeholder="Masukan Nama Kategori" required />
                        <div class="invalid-feedback"><?= $validation->getError('kategori_tinggi'); ?></div>
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-sm-3 control-label">Keterangan</label>
                    <div class="col-sm-9">
                        <textarea rows="5" class="form-control <?= ($validation->hasError('keterangan_tinggi')) ? 'is-invalid' : ''; ?>" value="<?= old('keterangan_tinggi'); ?>" name="keterangan_tinggi" placeholder="Masukan Keterangan" required></textarea>
                        <div class="invalid-feedback"><?= $validation->getError('keterangan_tinggi'); ?></div>
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

<?php foreach ($data_tinggi as $tinggis) : ?>
    <div id="modalFormEdit<?= $tinggis['id_tinggi']; ?>" class="modal-block modal-block-primary mfp-hide">
        <section class="panel">
            <header class="panel-heading">
                <h2 class="panel-title">Edit Data Tinggi Badan</h2>
            </header>
            <form id="demo-form" class="form-horizontal mb-lg" action="/proses-update-tinggi" method="POST" novalidate="novalidate">
                <div class="panel-body">
                    <input type="hidden" name="id_tinggi" value="<?= $tinggis['id_tinggi']; ?>">

                    <div class="form-group mt-lg">
                        <label class="col-sm-3 control-label">Kategori</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control <?= ($validation->hasError('kategori_tinggi')) ? 'is-invalid' : ''; ?>" value="<?= $tinggis['kategori_tinggi'] ?>" name="kategori_tinggi" placeholder="Masukan Nama Kategori" required />
                            <div class="invalid-feedback"><?= $validation->getError('kategori_tinggi'); ?></div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-sm-3 control-label">Keterangan</label>
                        <div class="col-sm-9">
                            <textarea rows="5" class="form-control <?= ($validation->hasError('keterangan_tinggi')) ? 'is-invalid' : ''; ?>" name="keterangan_tinggi" placeholder="Masukan Keterangan" required><?= $tinggis['keterangan_tinggi'] ?></textarea>
                            <div class="invalid-feedback"><?= $validation->getError('keterangan_tinggi'); ?></div>
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

<?php foreach ($data_tinggi as $tinggidel) : ?>
    <div id="modalDanger<?= $tinggidel['id_tinggi']; ?>" class="modal-block modal-block-danger mfp-hide">
        <section class="panel">
            <header class="panel-heading">
                <h2 class="panel-title">Delete Data!</h2>
            </header>
            <form id="demo-form" action="/delete-tinggi/<?= $tinggi['id_tinggi']; ?>" method="POST" class="form-horizontal mb-lg" novalidate="novalidate">
                <div class="panel-body">
                    <div class="modal-wrapper">
                        <div class="modal-icon">
                            <i class="fa fa-times-circle"></i>
                        </div>
                        <div class="modal-text">
                            <h4>Delete</h4>
                            <p>Anda Yakin akan menghapus data tinggi <?= $tinggidel['kategori_tinggi']; ?>.</p>
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