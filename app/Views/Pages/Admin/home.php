<?= $this->extend('Pages\Static\layout_admin'); ?>

<?= $this->section('content_admin'); ?>

<section role="main" class="content-body">
    <header class="page-header">
        <h2>Dashboard Admin</h2>
    </header>

    <!-- start: page -->
    <div class="row">
        <div class="col-md-6 col-lg-12 col-xl-6">
            <div class="row">

                <div class="col-md-12 col-lg-6 col-xl-6">
                    <section class="panel panel-featured-left panel-featured-primary">
                        <div class="panel-body">
                            <div class="widget-summary">
                                <div class="widget-summary-col widget-summary-col-icon">
                                    <div class="summary-icon bg-primary">
                                        <i class="fa fa-user"></i>
                                    </div>
                                </div>
                                <div class="widget-summary-col">
                                    <div class="summary">
                                        <h4 class="title">Data Balita</h4>
                                        <div class="info">
                                            <strong class="amount"><?= $data_balita; ?></strong>
                                        </div>
                                    </div>
                                    <div class="summary-footer">
                                        <a class="text-muted text-uppercase">(report)</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>

                <div class="col-md-12 col-lg-6 col-xl-6">
                    <section class="panel panel-featured-left panel-featured-quartenary">
                        <div class="panel-body">
                            <div class="widget-summary">
                                <div class="widget-summary-col widget-summary-col-icon">
                                    <div class="summary-icon bg-quartenary">
                                        <i class="fa fa-users"></i>
                                    </div>
                                </div>
                                <div class="widget-summary-col">
                                    <div class="summary">
                                        <h4 class="title">Data Orang Tua</h4>
                                        <div class="info">
                                            <strong class="amount"><?= $data_ortu; ?></strong>
                                        </div>
                                    </div>
                                    <div class="summary-footer">
                                        <a class="text-muted text-uppercase">(report)</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <section class="panel">
            <div class="panel-body">
                <div class="col-md-12 col-lg-6 col-xl-6">
                    <h3 class="tittle text-center">Visi</h3>
                    <hr>
                    <?php $nov = 1;
                    foreach ($visi as $v) : ?>
                        <h4 class="ml-xlg">
                            <?= $nov++ . '. ' . $v['visi']; ?>
                        </h4>
                    <?php endforeach ?>
                </div>
                <div class="col-md-12 col-lg-6 col-xl-6">
                    <h3 class="tittle text-center">Misi</h3>
                    <hr>
                    <?php $nom = 1;
                    foreach ($misi as $m) : ?>
                        <h4 class="ml-xlg">
                            <?= $nom++ . '. ' . $m['misi']; ?>
                        </h4>
                    <?php endforeach ?>
                </div>
            </div>
        </section>
    </div>
    <!-- end: page -->
</section>

<?= $this->endSection(); ?>