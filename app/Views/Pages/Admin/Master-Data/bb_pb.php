<?= $this->extend('Pages\Static\layout_admin'); ?>

<?= $this->section('content_admin'); ?>

<section role="main" class="content-body">
    <header class="page-header">
        <h2>Tabel Standar Antropometri Penilaian Status Gizi Anak Umur 0-60 bulan</h2>
    </header>

    <section class="panel">
        <header class="panel-heading">
            <div class="panel-actions">
                <a href="#" class="fa fa-caret-down"></a>
                <a href="#" class="fa fa-times"></a>
            </div>

            <h2 class="panel-title"> Standar Berat Badan menurut Umur (BB/U) Anak <?= ($jk == 1) ? 'Laki-Laki' : 'Perempuan' ?> Umur 0-24 Bulan</h2>
        </header>
        <div class="panel-body">
            <table class="table table-bordered table-striped mb-none" id="datatable-tabletools" data-swf-path="assets/vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf">
                <thead style="text-align: center;">
                    <tr>
                        <td rowspan="2">No</td>
                        <td rowspan="2"> Panjang Badan (CM)</td>
                        <td colspan="7"> Berat Badan (KG)</td>
                    </tr>
                    <tr>
                        <td> -3 SD</td>
                        <td> -2 SD</td>
                        <td> -1 SD</td>
                        <td> Median</td>
                        <td> +1 SD</td>
                        <td> +2 SD</td>
                        <td> +3 SD</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($data_bb_pb_0 as $data) : ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $data['panjang_badan_bb_pb']; ?></td>
                            <td><?= $data['min_3_sd']; ?></td>
                            <td><?= $data['min_2_sd']; ?></td>
                            <td><?= $data['min_1_sd']; ?></td>
                            <td><?= $data['median']; ?></td>
                            <td><?= $data['plus_1_sd']; ?></td>
                            <td><?= $data['plus_2_sd']; ?></td>
                            <td><?= $data['plus_3_sd']; ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </section>

    <section class="panel">
        <header class="panel-heading">
            <div class="panel-actions">
                <a href="#" class="fa fa-caret-down"></a>
                <a href="#" class="fa fa-times"></a>
            </div>

            <h2 class="panel-title"> Standar Berat Badan menurut Umur (BB/U) Anak <?= ($jk == 1) ? 'Laki-Laki' : 'Perempuan' ?> Umur 24-60 Bulan</h2>
        </header>
        <div class="panel-body">
            <table class="table table-bordered table-striped mb-none" id="datatable-tabletools" data-swf-path="assets/vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf">
                <thead style="text-align: center;">
                    <tr>
                        <td rowspan="2">No</td>
                        <td rowspan="2"> Panjang Badan (CM)</td>
                        <td colspan="7"> Berat Badan (KG)</td>
                    </tr>
                    <tr>
                        <td> -3 SD</td>
                        <td> -2 SD</td>
                        <td> -1 SD</td>
                        <td> Median</td>
                        <td> +1 SD</td>
                        <td> +2 SD</td>
                        <td> +3 SD</td>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($data_bb_pb_24 as $data) : ?>
                        <tr>
                            <td><?= $no++; ?></td>
                            <td><?= $data['panjang_badan_bb_pb']; ?></td>
                            <td><?= $data['min_3_sd']; ?></td>
                            <td><?= $data['min_2_sd']; ?></td>
                            <td><?= $data['min_1_sd']; ?></td>
                            <td><?= $data['median']; ?></td>
                            <td><?= $data['plus_1_sd']; ?></td>
                            <td><?= $data['plus_2_sd']; ?></td>
                            <td><?= $data['plus_3_sd']; ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </section>
</section>

<?= $this->endSection(); ?>