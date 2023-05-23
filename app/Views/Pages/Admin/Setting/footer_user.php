<?= $this->extend('Pages\Static\layout_admin'); ?>

<?= $this->section('content_admin'); ?>

<section role="main" class="content-body">
    <header class="page-header">
        <h2>Footer User</h2>
    </header>

    <?php if (session()->getFlashdata('gagal')) { ?>
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            Data Footer User <strong>gagal</strong> ditambahkan
        </div>
    <?php } ?>

    <?php if (session()->getFlashdata('berhasil')) { ?>
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            Data Footer User <strong>berhasil</strong> ditambahkan
        </div>
    <?php } ?>

    <?php if (session()->getFlashdata('berhasil-delete')) { ?>
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            Data Footer User <strong>berhasil</strong> didelete
        </div>
    <?php } ?>

    <!-- start: page -->
    <section class="panel">
        <header class="panel-heading">
            <div class="panel-actions">
                <a href="#" class="fa fa-caret-down"></a>
                <a href="#" class="fa fa-times"></a>
            </div>

            <h2 class="panel-title">Data Footer User</h2>
        </header>
        <div class="panel-body">
            <table class="table table-bordered table-striped mb-none" id="datatable-tabletools" data-swf-path="assets/vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Alamat</th>
                        <th>No Telpon</th>
                        <th>Email</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($data_ortu as $ortu) : ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $ortu['alamat']; ?></td>
                            <td><?= $ortu['no_telpon']; ?></td>
                            <td><?= $ortu['email']; ?></td>
                            <td>
                                <a href="#modalFormEdit<?= $ortu['id']; ?>" class="modal-with-form on-default edit-row"><i class="fa fa-pencil"></i></a>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </section>
    <!-- end: page -->
</section>

<?php foreach ($data_ortu as $ortus) : ?>
    <div id="modalFormEdit<?= $ortus['id']; ?>" class="modal-block modal-block-primary mfp-hide">
        <section class="panel">
            <header class="panel-heading">
                <h2 class="panel-title">Edit Setting Footer User</h2>
            </header>
            <form id="demo-form" action="/proses-update-footer-user" method="POST" class="form-horizontal mb-lg" novalidate="novalidate">
                <div class="panel-body">
                    <input type="hidden" name="id" value="<?= $ortus['id']; ?>">

                    <div class="form-group mt-lg">
                        <label class="col-sm-3 control-label">Alamat</label>
                        <div class="col-sm-9">
                            <textarea type="text" name="alamat" class="form-control <?= ($validation->hasError('alamat')) ? 'is-invalid' : ''; ?>" required><?= $ortus['alamat'] ?></textarea>
                            <div class="invalid-feedback"><?= $validation->getError('alamat'); ?></div>
                        </div>
                    </div>

                    <div class="form-group mt-lg">
                        <label class="col-sm-3 control-label">No Telpon</label>
                        <div class="col-sm-9">
                            <input type="text" name="no_telpon" class="form-control <?= ($validation->hasError('no_telpon')) ? 'is-invalid' : ''; ?>" value="<?= $ortus['no_telpon'] ?>" required />
                            <div class="invalid-feedback"><?= $validation->getError('no_telpon'); ?></div>
                        </div>
                    </div>

                    <div class="form-group mt-lg">
                        <label class="col-sm-3 control-label">Email</label>
                        <div class="col-sm-9">
                            <input type="text" name="email" class="form-control <?= ($validation->hasError('email')) ? 'is-invalid' : ''; ?>" value="<?= $ortus['email'] ?>" required />
                            <div class="invalid-feedback"><?= $validation->getError('email'); ?></div>
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
<?= $this->endSection(); ?>