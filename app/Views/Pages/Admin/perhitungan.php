<?= $this->extend('Pages\Static\layout_admin'); ?>

<?= $this->section('content_admin'); ?>

<section role="main" class="content-body">
    <header class="page-header">
        <h2>Perhitungan</h2>
    </header>

    <!-- start: page -->
    <section class="panel">
        <header class="panel-heading">
            <div class="panel-actions">
                <a href="#" class="fa fa-caret-down"></a>
                <a href="#" class="fa fa-times"></a>
            </div>

            <h2 class="panel-title">Data Perhitungan</h2>
        </header>
        <div class="panel-body">
            <table class="table table-bordered table-striped mb-none" id="datatable-tabletools" data-swf-path="assets/vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Orang Tua</th>
                        <th>Umur</th>
                        <th>Tinggi Badan</th>
                        <th>Berat Badan</th>
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
                            <td>OK</td>
                            <td>
                                <a href="/proses-hitung/<?= $data['id_balita']; ?>" class="on-default edit-row"><i class="fa fa-gear"></i></a>
                            </td>
                        <?php endforeach ?>
                        </tr>
                </tbody>
            </table>
        </div>
    </section>
    <!-- end: page -->
</section>

<?= $this->endSection(); ?>