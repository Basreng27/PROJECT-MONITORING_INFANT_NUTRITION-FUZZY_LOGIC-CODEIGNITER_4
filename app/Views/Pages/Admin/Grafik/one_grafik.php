<?= $this->extend('Pages\Static\layout_admin'); ?>

<?= $this->section('content_admin'); ?>

<section role="main" class="content-body">
    <header class="page-header">
        <h2>Grafik Balita</h2>
    </header>

    <section class="panel">
        <header class="panel-heading">
            <div class="panel-actions">
                <a href="#" class="fa fa-caret-down"></a>
                <a href="#" class="fa fa-times"></a>
            </div>

            <h2 class="panel-title">Grafik Balita <?= $balita['nama_balita']; ?></h2>
        </header>

        <div class="panel-body">
            <div class="row">
                <div class="col-md-6 col-lg-12 col-xl-6">
                    <section class="panel">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="chart-data-selector" id="salesSelectorWrapper">
                                        <h2>
                                            Grafik :
                                            <strong>
                                                <select class="form-control" id="salesSelector">
                                                    <option value="BB/U" selected>Berat Badan / Umur(BB/U)</option>
                                                    <option value="PB/U">Panjang Badan / Umur(PB/U)</option>
                                                </select>
                                            </strong>
                                        </h2>

                                        <div id="salesSelectorItems" class="chart-data-selector-items mt-sm">
                                            <div class="chart chart-sm" data-sales-rel="BB/U" id="flotDashSales1" class="chart-active"></div>

                                            <script>
                                                var flotDashSales1Data = [{
                                                    data: [
                                                        <?php foreach ($totalData as $data) { ?>[
                                                                <?= $data['umur']; ?>, <?= $data['berat']; ?>
                                                            ],
                                                        <?php }; ?>
                                                    ],
                                                    color: "#0088cc"
                                                }];
                                            </script>

                                            <div class="chart chart-sm" data-sales-rel="PB/U" id="flotDashSales2" class="chart-hidden"></div>

                                            <script>
                                                var flotDashSales2Data = [{
                                                    data: [
                                                        <?php foreach ($totalData as $data2) { ?>[
                                                                <?= $data2['umur']; ?>, <?= $data2['tinggi']; ?>
                                                            ],
                                                        <?php }; ?>
                                                    ],
                                                    color: "#2baab1"
                                                }];
                                            </script>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </section>
</section>
<?= $this->endSection(); ?>