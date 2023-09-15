<?= $this->extend('Pages\Static\layout_admin'); ?>

<?= $this->section('content_admin'); ?>

<section role="main" class="content-body">
    <header class="page-header">
        <h2>Semua Data</h2>
    </header>

    <!-- start: page -->
    <section class="panel">
        <header class="panel-heading">
            <div class="panel-actions">
                <a href="#" class="fa fa-caret-down"></a>
                <a href="#" class="fa fa-times"></a>
            </div>
        </header>

        <div class="panel-body">
            <table class="table table-bordered table-striped mb-none" id="datatable-tabletools" data-swf-path="assets/vendor/jquery-datatables/extras/TableTools/swf/copy_csv_xls_pdf.swf">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>NIK</th>
                        <th>Nama Balita</th>
                        <th>Anak Ke</th>
                        <th>Tinggi</th>
                        <th>Berat</th>
                        <th>Umur</th>
                        <th>Tanggal Kunjungan</th>
                        <th>Jenis Kelamin</th>
                        <th>NIK Ayah</th>
                        <th>Nama Ayah</th>
                        <th>No Ayah</th>
                        <th>Pekerjaan Ayah</th>
                        <th>Alamat Ayah</th>
                        <th>NIK Ibu</th>
                        <th>Nama Ibu</th>
                        <th>No Ibu</th>
                        <th>Pekerjaan Ibu</th>
                        <th>Alamat Ibu</th>
                        <th>Dari Keluarga</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($data as $key => $value) : ?>
                        <tr>
                            <td><?= $key + 1; ?></td>
                            <td><?= $value['nik_balita']; ?></td>
                            <td><?= $value['nama_balita']; ?></td>
                            <td><?= $value['anak_ke']; ?></td>
                            <td><?= $value['tinggi']; ?></td>
                            <td><?= $value['berat']; ?></td>
                            <td><?= $value['umur']; ?></td>
                            <td><?= $value['tanggal'] ?></td>
                            <td><?= $value['jenis_kelamin']; ?></td>
                            <td><?= $value['nik_ayah']; ?></td>
                            <td><?= $value['nama_ayah']; ?></td>
                            <td><?= $value['no_ayah']; ?></td>
                            <td><?= $value['pekerjaan_ayah']; ?></td>
                            <td><?= $value['alamat_ayah']; ?></td>
                            <td><?= $value['nik_ibu']; ?></td>
                            <td><?= $value['nama_ibu']; ?></td>
                            <td><?= $value['no_ibu']; ?></td>
                            <td><?= $value['pekerjaan_ibu']; ?></td>
                            <td><?= $value['alamat_ibu']; ?></td>
                            <td><?= $value['dari_keluarga']; ?></td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </section>
    <!-- end: page -->
</section>

<?= $this->endSection(); ?>