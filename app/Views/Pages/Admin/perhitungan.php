<?= $this->extend('Pages\Static\layout_admin'); ?>

<?= $this->section('content_admin'); ?>

<section role="main" class="content-body">
    <header class="page-header">
        <h2>Perhitungan Antropometri</h2>
    </header>

    <?php if (session()->getFlashdata('berhasil')) { ?>
        <div class="alert alert-success">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            Data <strong>berhasil</strong> dihitung
        </div>
    <?php } ?>

    <?php if (session()->getFlashdata('bbTidakAda')) { ?>
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            Data <strong>gagal</strong> dihitung, karena <strong>BB/U</strong> Tidak ditemukan di master data
        </div>
    <?php } ?>

    <?php if (session()->getFlashdata('pbTidakAda')) { ?>
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            Data <strong>gagal</strong> dihitung, karena <strong>PB/U</strong> Tidak ditemukan di master data
        </div>
    <?php } ?>

    <?php if (session()->getFlashdata('bbpbTidakAda')) { ?>
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            Data <strong>gagal</strong> dihitung, karena <strong>BB/PB</strong> Tidak ditemukan di master data
        </div>
    <?php } ?>

    <?php if (session()->getFlashdata('kategoriTidakAda')) { ?>
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            Data <strong>gagal</strong> dihitung, karena <strong>Kategori</strong> Umur Tidak ditemukan di master data
        </div>
    <?php } ?>

    <section class="panel">
        <header class="panel-heading">
            <div class="panel-actions">
                <a href="#" class="fa fa-caret-down"></a>
                <a href="#" class="fa fa-times"></a>
            </div>

            <h2 class="panel-title">Data Perhitungan Antropometri</h2>
        </header>
        <div class="panel-body">
            <table class="table table-bordered table-striped mb-none" id="datatable-tabletools" data-swf-path="assets/vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Orang Tua</th>
                        <th>Umur (BB/U)</th>
                        <th>Tinggi Badan (BP/U)</th>
                        <th>Berat Badan (BB/BP)</th>
                        <th>Hasil</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($data_ as $data) : ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $data['nama_balita']; ?></td>
                            <td><?= $data['jk']; ?></td>
                            <td><?= $data['nama_ortu']; ?></td>
                            <td><?= $data['umur']; ?> Bulan</td>
                            <td><?= $data['tinggi']; ?> Cm</td>
                            <td><?= $data['berat']; ?> Kg</td>
                            <td><?= $data['status_bb_pb']; ?></td>
                            <td>
                                <?php if (!empty($data['status_bb_pb'])) { ?>
                                    <a href="#modalFormEdit<?= $data['id_data']; ?>" class="modal-with-form on-default edit-row"><i class="fa fa-pencil"> Detail</i></a>
                                <?php } else { ?>
                                    <a href="/proses-hitung/<?= $data['idData']; ?>" class="on-default edit-row"><i class="fa fa-gear"> Hitung</i></a>
                                <?php } ?>
                            </td>
                        <?php endforeach ?>
                        </tr>
                </tbody>
            </table>
        </div>
    </section>
</section>

<?php foreach ($data_ as $datas) : ?>
    <div id="modalFormEdit<?= $datas['id_data']; ?>" class="modal-block modal-block-primary mfp-hide">
        <section class="panel">
            <header class="panel-heading">
                <h2 class="panel-title">Detail Status Gizi</h2>
            </header>
            <div class="panel-body">
                <div class="form-group mt-lg">
                    <label class="col-sm-3 control-label">Nama</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" value="<?= $datas['nama_balita'] ?>" readonly />
                    </div>
                </div>

                <div class="form-group mt-lg">
                    <label class="col-sm-3 control-label">Jenis Kelamin</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" value="<?= $datas['jk'] ?>" readonly />
                    </div>
                </div>

                <div class="form-group mt-lg">
                    <label class="col-sm-3 control-label">Orang Tua</label>
                    <div class="col-sm-9">
                        <input type="text" class="form-control" value="<?= $datas['nama_ortu'] ?>" readonly />
                    </div>
                </div>

                <div class="form-group mt-lg" style="text-align: center;">
                    <div class="row">
                        <label class="col-sm-4 control-label">Umur</label>
                        <label class="col-sm-4 control-label">Tinggi</label>
                        <label class="col-sm-4 control-label">Berat</label>
                    </div>

                    <div class="row">
                        <div class="col-sm-4">
                            <input type="text" class="form-control" value="<?= $datas['umur'] ?> Bulan" readonly />
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" value="<?= $datas['tinggi'] ?> Cm" readonly />
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" value="<?= $datas['berat'] ?> Kg" readonly />
                        </div>
                    </div>
                </div>

                <div class="form-group mt-lg" style="text-align: center;">
                    <div class="row">
                        <label class="col-sm-3 control-label"><strong>Status</strong></label>
                    </div>

                    <div class="row">
                        <label class="col-sm-4 control-label">BB/U</label>
                        <label class="col-sm-4 control-label">PB/U</label>
                        <label class="col-sm-4 control-label">BB/PB</label>
                    </div>

                    <div class="row">
                        <div class="col-sm-4">
                            <input type="text" class="form-control" value="<?= $datas['status_bb_u'] ?>" readonly />
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" value="<?= $datas['status_pb_u'] ?>" readonly />
                        </div>
                        <div class="col-sm-4">
                            <input type="text" class="form-control" value="<?= $datas['status_bb_pb'] ?>" readonly />
                        </div>
                    </div>
                </div>
            </div>
            <footer class="panel-footer">
                <div class="row">
                    <div class="col-md-12 text-right">
                        <button class="btn btn-default modal-dismiss">OK</button>
                    </div>
                </div>
            </footer>
        </section>
    </div>
<?php endforeach ?>
<?= $this->endSection(); ?>