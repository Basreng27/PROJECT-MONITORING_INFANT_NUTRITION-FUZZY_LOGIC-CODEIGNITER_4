<!doctype html>
<html class="fixed">

<head>
    <!-- Basic -->
    <meta charset="UTF-8">

    <title>Dashboard Admin</title>
    <meta name="keywords" content="HTML5 Admin Template" />
    <meta name="description" content="JSOFT Admin - Responsive HTML5 Template">
    <meta name="author" content="JSOFT.net">

    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- Web Fonts  -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800|Shadows+Into+Light" rel="stylesheet" type="text/css">

    <!-- Vendor CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/vendor/bootstrap/css/bootstrap.css" />
    <link rel="stylesheet" href="<?= base_url() ?>/assets/vendor/font-awesome/css/font-awesome.css" />
    <link rel="stylesheet" href="<?= base_url() ?>/assets/vendor/magnific-popup/magnific-popup.css" />
    <link rel="stylesheet" href="<?= base_url() ?>/assets/vendor/bootstrap-datepicker/css/datepicker3.css" />

    <!-- Specific Page Vendor CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/vendor/jquery-ui/css/ui-lightness/jquery-ui-1.10.4.custom.css" />
    <link rel="stylesheet" href="<?= base_url() ?>/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.css" />
    <link rel="stylesheet" href="<?= base_url() ?>/assets/vendor/morris/morris.css" />
    <link rel="stylesheet" href="<?= base_url() ?>/assets/vendor/select2/select2.css" />
    <link rel="stylesheet" href="<?= base_url() ?>/assets/vendor/jquery-datatables-bs3/assets/css/datatables.css" />
    <link rel="stylesheet" href="<?= base_url() ?>/assets/vendor/pnotify/pnotify.custom.css" />
    <link rel="stylesheet" href="<?= base_url() ?>/assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.css" />
    <link rel="stylesheet" href="<?= base_url() ?>/assets/vendor/bootstrap-colorpicker/css/bootstrap-colorpicker.css" />
    <link rel="stylesheet" href="<?= base_url() ?>/assets/vendor/bootstrap-timepicker/css/bootstrap-timepicker.css" />
    <link rel="stylesheet" href="<?= base_url() ?>/assets/vendor/dropzone/css/basic.css" />
    <link rel="stylesheet" href="<?= base_url() ?>/assets/vendor/dropzone/css/dropzone.css" />
    <link rel="stylesheet" href="<?= base_url() ?>/assets/vendor/bootstrap-markdown/css/bootstrap-markdown.min.css" />
    <link rel="stylesheet" href="<?= base_url() ?>/assets/vendor/summernote/summernote.css" />
    <link rel="stylesheet" href="<?= base_url() ?>/assets/vendor/summernote/summernote-bs3.css" />
    <link rel="stylesheet" href="<?= base_url() ?>/assets/vendor/codemirror/lib/codemirror.css" />
    <link rel="stylesheet" href="<?= base_url() ?>/assets/vendor/codemirror/theme/monokai.css" />

    <!-- Theme CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/stylesheets/theme.css" />

    <!-- Skin CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/stylesheets/skins/default.css" />

    <!-- Theme Custom CSS -->
    <link rel="stylesheet" href="<?= base_url() ?>/assets/stylesheets/theme-custom.css">

    <!-- Head Libs -->
    <script src="<?= base_url() ?>/assets/vendor/modernizr/modernizr.js"></script>
</head>

<body>
    <section class="body">
        <!-- start: header -->
        <header class="header">
            <div class="logo-container">
                <a href="/home" class="logo">
                    <img src="#" height="35" alt="Logo" />
                </a>

                <div class="visible-xs toggle-sidebar-left" data-toggle-class="sidebar-left-opened" data-target="html" data-fire-event="sidebar-left-opened">
                    <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
                </div>
            </div>

            <!-- start: search & user box -->
            <div class="header-right">
                <div id="userbox" class="userbox">
                    <a href="#" data-toggle="dropdown">
                        <div class="profile-info" data-lock-name="John Doe" data-lock-email="johndoe@JSOFT.com">
                            <span class="name"><?= session()->get('nama') ?></span>
                            <span class="role">Administrator</span>
                        </div>

                        <i class="fa custom-caret"></i>
                    </a>

                    <div class="dropdown-menu">
                        <ul class="list-unstyled">
                            <li class="divider"></li>
                            <li>
                                <a role="menuitem" tabindex="-1" href="/logout"><i class="fa fa-power-off"></i> Logout</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- end: search & user box -->
        </header>
        <!-- end: header -->

        <div class="inner-wrapper">
            <!-- start: sidebar -->
            <aside id="sidebar-left" class="sidebar-left">

                <div class="sidebar-header">
                    <div class="sidebar-title">
                        Navigation
                    </div>
                    <div class="sidebar-toggle hidden-xs" data-toggle-class="sidebar-left-collapsed" data-target="html" data-fire-event="sidebar-left-toggle">
                        <i class="fa fa-bars" aria-label="Toggle sidebar"></i>
                    </div>
                </div>

                <div class="nano">
                    <div class="nano-content">
                        <nav id="menu" class="nav-main" role="navigation">
                            <ul class="nav nav-main">
                                <li class="nav">
                                    <a href="/home">
                                        <i class="fa fa-home" aria-hidden="true"></i>
                                        <span>Dashboard</span>
                                    </a>
                                </li>

                                <li class="nav-parent">
                                    <a>
                                        <i class="fa fa-copy" aria-hidden="true"></i>
                                        <span>Master Data Pasien</span>
                                    </a>
                                    <ul class="nav nav-children">
                                        <li>
                                            <a href="/orang-tua">
                                                Orang Tua
                                            </a>
                                        </li>
                                        <li>
                                            <a href="/balita">
                                                Balita
                                            </a>
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav-parent">
                                    <a>
                                        <i class="fa fa-copy" aria-hidden="true"></i>
                                        <span>Master Data</span>
                                    </a>
                                    <ul class="nav nav-children">
                                        <li>
                                            <a href="/v_bb-u">
                                                BB/U
                                            </a>
                                            <!-- <a href="/umur">
                                                Umur
                                            </a> -->
                                        </li>
                                        <li>
                                            <a href="/v_pb-u">
                                                PB/U
                                            </a>
                                            <!-- <a href="/berat-badan">
                                                Berat Badan
                                            </a> -->
                                        </li>
                                        <li>
                                            <a href="/v_bb-pb">
                                                BB/PB
                                            </a>
                                            <!-- <a href="/tinggi-badan">
                                                Tinggi Badan
                                            </a> -->
                                        </li>
                                    </ul>
                                </li>

                                <li class="nav">
                                    <a href="/perhitungan">
                                        <i class="fa fa-reddit" aria-hidden="true"></i>
                                        <span>Perhitungan</span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>

                </div>

            </aside>
            <!-- end: sidebar -->

            <?= $this->renderSection('content_admin'); ?>

        </div>

    </section>

    <!-- Vendor -->
    <script src="<?= base_url() ?>/assets/vendor/jquery/jquery.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/jquery-browser-mobile/jquery.browser.mobile.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/bootstrap/js/bootstrap.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/nanoscroller/nanoscroller.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/magnific-popup/magnific-popup.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/jquery-placeholder/jquery.placeholder.js"></script>

    <!-- Specific Page Vendor -->
    <script src="<?= base_url() ?>/assets/vendor/jquery-ui/js/jquery-ui-1.10.4.custom.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/jquery-ui-touch-punch/jquery.ui.touch-punch.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/jquery-appear/jquery.appear.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/bootstrap-multiselect/bootstrap-multiselect.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/jquery-easypiechart/jquery.easypiechart.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/flot/jquery.flot.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/flot-tooltip/jquery.flot.tooltip.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/flot/jquery.flot.pie.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/flot/jquery.flot.categories.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/flot/jquery.flot.resize.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/jquery-sparkline/jquery.sparkline.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/raphael/raphael.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/morris/morris.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/gauge/gauge.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/snap-svg/snap.svg.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/liquid-meter/liquid.meter.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/jqvmap/jquery.vmap.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/jqvmap/data/jquery.vmap.sampledata.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/jqvmap/maps/jquery.vmap.world.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/jqvmap/maps/continents/jquery.vmap.africa.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/jqvmap/maps/continents/jquery.vmap.asia.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/jqvmap/maps/continents/jquery.vmap.australia.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/jqvmap/maps/continents/jquery.vmap.europe.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/jqvmap/maps/continents/jquery.vmap.north-america.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/select2/select2.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/jquery-datatables/media/js/jquery.dataTables.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/jquery-datatables/extras/TableTools/js/dataTables.tableTools.min.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/jquery-datatables-bs3/assets/js/datatables.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/jquery-maskedinput/jquery.maskedinput.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/bootstrap-tagsinput/bootstrap-tagsinput.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/bootstrap-colorpicker/js/bootstrap-colorpicker.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/fuelux/js/spinner.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/dropzone/dropzone.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/bootstrap-markdown/js/markdown.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/bootstrap-markdown/js/to-markdown.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/bootstrap-markdown/js/bootstrap-markdown.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/codemirror/lib/codemirror.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/codemirror/addon/selection/active-line.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/codemirror/addon/edit/matchbrackets.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/codemirror/mode/javascript/javascript.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/codemirror/mode/xml/xml.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/codemirror/mode/htmlmixed/htmlmixed.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/codemirror/mode/css/css.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/summernote/summernote.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/bootstrap-maxlength/bootstrap-maxlength.js"></script>
    <script src="<?= base_url() ?>/assets/vendor/ios7-switch/ios7-switch.js"></script>

    <!-- Theme Base, Components and Settings -->
    <script src="<?= base_url() ?>/assets/javascripts/theme.js"></script>

    <!-- Theme Custom -->
    <script src="<?= base_url() ?>/assets/javascripts/theme.custom.js"></script>

    <!-- Theme Initialization Files -->
    <script src="<?= base_url() ?>/assets/javascripts/theme.init.js"></script>

    <!-- Specific Page Vendor -->
    <script src="<?= base_url() ?>/assets/vendor/pnotify/pnotify.custom.js"></script>

    <!-- Examples -->
    <script src="<?= base_url() ?>/assets/javascripts/dashboard/examples.dashboard.js"></script>
    <script src="<?= base_url() ?>/assets/javascripts/tables/examples.datatables.default.js"></script>
    <script src="<?= base_url() ?>/assets/javascripts/tables/examples.datatables.row.with.details.js"></script>
    <script src="<?= base_url() ?>/assets/javascripts/tables/examples.datatables.tabletools.js"></script>
    <script src="<?= base_url() ?>/assets/javascripts/ui-elements/examples.modals.js"></script>
</body>
</script>

</html>