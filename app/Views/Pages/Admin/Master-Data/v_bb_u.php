<?= $this->extend('Pages\Static\layout_admin'); ?>

<?= $this->section('content_admin'); ?>

<section role="main" class="content-body">
    <header class="page-header">
        <h2>Tabel Standar Antropometri Penilaian Status Gizi Anak Umur 0-60 bulan</h2>
    </header>

    <!-- start: page -->
    <section class="panel">
        <header class="panel-heading">
            <div class="panel-actions">
                <a href="#" class="fa fa-caret-down"></a>
                <a href="#" class="fa fa-times"></a>
            </div>

            <h2 class="panel-title">Jenis Kelamin (BB/U)</h2>
        </header>
        <div class="panel-body">
            <!-- <a class="modal-with-form btn btn-default" href="#modalForm">Add <i class="fa fa-plus"></i></a> -->
            <table class="table table-bordered table-striped mb-none" id="datatable-tabletools" data-swf-path="assets/vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Jenis Kelamin</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($data_v_bb_u as $v) : ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><a href="bb-u/<?= $v['id_jk']; ?>"><?= $v['jk']; ?></a></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </section>
    <!-- end: page -->
</section>

<?= $this->endSection(); ?>