<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <?= $this->fetch('meta') ?>
    <title><?= $title ?> — AEMA
        
    </title>
    <link href="<?= $this->request->webroot ?>img/favicon.png" rel="shortcut icon">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:400,400i,700,700i" rel="stylesheet">
    <?= $this->fetch('css') ?>
    <link rel="stylesheet" type="text/css" href="<?= $this->request->webroot ?>vendors/bootstrap/dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?= $this->request->webroot ?>vendors/perfect-scrollbar/css/perfect-scrollbar.css">
    <link rel="stylesheet" type="text/css" href="<?= $this->request->webroot ?>vendors/ladda/dist/ladda-themeless.min.css">
    <link rel="stylesheet" type="text/css" href="<?= $this->request->webroot ?>vendors/bootstrap-select/dist/css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="<?= $this->request->webroot ?>vendors/select2/dist/css/select2.min.css">
    <link rel="stylesheet" type="text/css" href="<?= $this->request->webroot ?>vendors/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" type="text/css" href="<?= $this->request->webroot ?>vendors/fullcalendar/dist/fullcalendar.min.css">
    <link rel="stylesheet" type="text/css" href="<?= $this->request->webroot ?>vendors/bootstrap-sweetalert/dist/sweetalert.css">
    <link rel="stylesheet" type="text/css" href="<?= $this->request->webroot ?>vendors/summernote/dist/summernote.css">
    <link rel="stylesheet" type="text/css" href="<?= $this->request->webroot ?>vendors/owl.carousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="<?= $this->request->webroot ?>vendors/ionrangeslider/css/ion.rangeSlider.css">
    <link rel="stylesheet" type="text/css" href="<?= $this->request->webroot ?>vendors/datatables/media/css/dataTables.bootstrap4.css">
    <link rel="stylesheet" type="text/css" href="<?= $this->request->webroot ?>vendors/c3/c3.min.css">
    <link rel="stylesheet" type="text/css" href="<?= $this->request->webroot ?>vendors/chartist/dist/chartist.min.css">
    <link rel="stylesheet" type="text/css" href="<?= $this->request->webroot ?>vendors/nprogress/nprogress.css">
    <link rel="stylesheet" type="text/css" href="<?= $this->request->webroot ?>vendors/jquery-steps/demo/css/jquery.steps.css">
    <link rel="stylesheet" type="text/css" href="<?= $this->request->webroot ?>vendors/dropify/dist/css/dropify.min.css">
    <link rel="stylesheet" type="text/css" href="<?= $this->request->webroot ?>vendors/font-linearicons/style.css">
    <link rel="stylesheet" type="text/css" href="<?= $this->request->webroot ?>vendors/font-icomoon/style.css">
    <link rel="stylesheet" type="text/css" href="<?= $this->request->webroot ?>vendors/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?= $this->request->webroot ?>vendors/cleanhtmlaudioplayer/src/player.css">
    <link rel="stylesheet" type="text/css" href="<?= $this->request->webroot ?>vendors/cleanhtmlvideoplayer/src/player.css">
    <link rel="stylesheet" type="text/css" href="<?= $this->request->webroot ?>vendors/cleanhtmlvideoplayer/src/player.css">
    <!-- CLEAN UI HTML ADMIN TEMPLATE MODULES-->
    <!-- v2.0.0 -->
    <link rel="stylesheet" type="text/css" href="<?= $this->request->webroot ?>components/core/common/core.cleanui.css">
    <link rel="stylesheet" type="text/css" href="<?= $this->request->webroot ?>components/core/widgets/widgets.cleanui.css">
    <link rel="stylesheet" type="text/css" href="<?= $this->request->webroot ?>components/vendors/common/vendors.cleanui.css">
    <link rel="stylesheet" type="text/css" href="<?= $this->request->webroot ?>components/settings/common/settings.cleanui.css">
    <link rel="stylesheet" type="text/css" href="<?= $this->request->webroot ?>components/settings/themes/themes.cleanui.css">
    <link rel="stylesheet" type="text/css" href="<?= $this->request->webroot ?>components/menu-left/common/menu-left.cleanui.css">
    <link rel="stylesheet" type="text/css" href="<?= $this->request->webroot ?>components/menu-right/common/menu-right.cleanui.css">
    <link rel="stylesheet" type="text/css" href="<?= $this->request->webroot ?>components/top-bar/common/top-bar.cleanui.css">
    <link rel="stylesheet" type="text/css" href="<?= $this->request->webroot ?>components/footer/common/footer.cleanui.css">
    <link rel="stylesheet" type="text/css" href="<?= $this->request->webroot ?>components/pages/common/pages.cleanui.css">
    <link rel="stylesheet" type="text/css" href="<?= $this->request->webroot ?>components/ecommerce/common/ecommerce.cleanui.css">
    <link rel="stylesheet" type="text/css" href="<?= $this->request->webroot ?>components/apps/common/apps.cleanui.css">
    <link rel="stylesheet" type="text/css" href="<?= $this->request->webroot ?>css/custom.css">
</head>

<body class="config--horizontal config--borderLess menu-left--colorful">
    <nav class="menu-left">
        <div class="menu-left__lock menu-left__action--menu-toggle">
            <div class="menu-left__pin-button">
                <div>
                    <!-- -->
                </div>
            </div>
        </div>
        <div class="menu-left__logo">
            <a href="dashboards-alpha.html">
                <img src="<?= $this->request->webroot ?>img/Logo-Agence.png" alt="Logo Ecole">
            </a>
        </div>
        <div class="menu-left__inner">
            <ul class="menu-left__list menu-left__list--root">
                <li class="menu-left--colorful--yellow menu-left__item <?php if($this->Global->checkActive(['controller' => 'Global'])): ?>menu-left__item--active<?php endif; ?>">
                    <a href="<?= $this->Url->build(['controller' => 'Global', 'action' => 'index']) ?>">
                        <span class="menu-left__icon icmn-home"></span>
                        Accueil
                    </a>
                </li>
                <li class="menu-left--colorful--danger menu-left__item menu-left__submenu <?php if($this->Global->checkActive(['controller' => 'Users'])): ?>menu-left__item--active<?php endif; ?>">
                    <a href="javascript: void(0);">
                        <span class="menu-left__icon icmn-users"></span>
                        Utilisateurs
                    </a>
                    <ul class="menu-left__list">
                        <li class="menu-left__item">
                            <a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'list']) ?>">
                                <span class="menu-left__icon icmn-list"></span>
                                Liste
                            </a>
                        </li>
                        <li class="menu-left__item">
                            <a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'add']) ?>">
                                <span class="menu-left__icon icmn-plus"></span>
                                Ajouter
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-left--colorful--yellow menu-left__item <?php if($this->Global->checkActive(['controller' => 'Packages'])): ?>menu-left__item--active<?php endif; ?>">
                    <a href="<?= $this->Url->build(['controller' => 'Packages', 'action' => 'list']) ?>">
                        <span class="menu-left__icon icmn-cog"></span>
                        Gestion du matériel
                    </a>
                </li>
                <li class="menu-left--colorful--success menu-left__item <?php if($this->Global->checkActive(['controller' => 'Checks'])): ?>menu-left__item--active<?php endif; ?>">
                    <a href="<?= $this->Url->build(['controller' => 'Checks', 'action' => 'list']) ?>">
                        <span class="menu-left__icon fa fa-inbox"></span>
                        Gestion des emprunts
                    </a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="top-bar">
        <!-- left aligned items -->
        <div class="top-bar__left">
            <div class="top-bar__item d-xl-inline-block">
                <div class="top-bar__search">
                    <i class="icmn-search"></i>
                    <input type="text" placeholder="Rechercher un élève, un matériel..." />
                </div>
            </div>
        </div>
        <!-- right aligned items -->
        <div class="top-bar__right">
            
            <div class="top-bar__item top-bar__item--hiddenOn1300">
                <div class="top-bar__mini-chart text-nowrap">
                    Connecté en tant que 
                    <strong><?= $Auth->user('firstname') ?> <?= $Auth->user('lastname') ?></strong>
                </div>
            </div>
            <div class="top-bar__item ml-3">
                <div class="dropdown top-bar__avatar-dropdown">
                    <a href="javascript: void(0);" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                        <span class="top-bar__avatar">
                            <img src="<?= $this->request->webroot ?>components/dummy-assets/common/img/avatars/1.jpg" alt="" />
                        </span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" role="menu">
                        <a class="dropdown-item" href="javascript:void(0)"><i class="dropdown-icon icmn-user"></i>
                            Profile</a>
                        <div class="dropdown-divider"></div>
                        <div class="dropdown-header">Home</div>
                        <a class="dropdown-item" href="javascript:void(0)"><i class="dropdown-icon icmn-circle-right"></i>
                            Paramètres</a>
                        <a class="dropdown-item" href="javascript:void(0)"><i class="dropdown-icon icmn-circle-right"></i>
                            User Boards</a>
                        <a class="dropdown-item" href="javascript:void(0)"><i class="dropdown-icon icmn-circle-right"></i>
                            Issue
                            Navigator (35 New)</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?=$this->Url->build(['controller' => 'users', 'action' => 'logout']) ?>"><i class="dropdown-icon icmn-exit"></i>
                            Déconnexion</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="utils__content">
        <!-- START: dashboard alpha -->
        <?= $this->fetch('content') ?>
        <!-- END: dashboard alpha -->
        <div class="footer">
            <div class="footer__bottom">
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer__company">
                            <img class="footer__company-logo" src="<?= $this->request->webroot ?>img/favicon.png" title="Image École">
                            <span>
                                © 2019 <a href="http://mediatec.org/" target="_blank">Application de gestion du matériel audiovisuel</a>
                                <br>
                                Tous droits réservés
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <a href="javascript: void(0);" class="utils__scroll-top" onclick="$('body, html').animate({'scrollTop': 0}, 500)"><i
                    class="icmn-arrow-up"></i></a>
        </div>
    </div>

    <?= $this->fetch('script') ?>
    <script src="<?= $this->request->webroot ?>vendors/jquery/dist/jquery.min.js"></script>
    <script src="<?= $this->request->webroot ?>vendors/popper.js/dist/umd/popper.js"></script>
    <script src="<?= $this->request->webroot ?>vendors/jquery-ui/jquery-ui.min.js"></script>
    <script src="<?= $this->request->webroot ?>vendors/bootstrap/dist/js/bootstrap.js"></script>
    <script src="<?= $this->request->webroot ?>vendors/jquery-mousewheel/jquery.mousewheel.min.js"></script>
    <script src="<?= $this->request->webroot ?>vendors/perfect-scrollbar/js/perfect-scrollbar.jquery.js"></script>
    <script src="<?= $this->request->webroot ?>vendors/spin.js/spin.js"></script>
    <script src="<?= $this->request->webroot ?>vendors/ladda/dist/ladda.min.js"></script>
    <script src="<?= $this->request->webroot ?>vendors/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
    <script src="<?= $this->request->webroot ?>vendors/select2/dist/js/select2.full.min.js"></script>
    <script src="<?= $this->request->webroot ?>vendors/html5-form-validation/dist/jquery.validation.min.js"></script>
    <script src="<?= $this->request->webroot ?>vendors/jquery-typeahead/dist/jquery.typeahead.min.js"></script>
    <script src="<?= $this->request->webroot ?>vendors/jquery-mask-plugin/dist/jquery.mask.min.js"></script>
    <script src="<?= $this->request->webroot ?>vendors/autosize/dist/autosize.min.js"></script>
    <script src="<?= $this->request->webroot ?>vendors/bootstrap-show-password/bootstrap-show-password.min.js"></script>
    <script src="<?= $this->request->webroot ?>vendors/moment/min/moment.min.js"></script>
    <script src="<?= $this->request->webroot ?>vendors/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js"></script>
    <script src="<?= $this->request->webroot ?>vendors/fullcalendar/dist/fullcalendar.min.js"></script>
    <script src="<?= $this->request->webroot ?>vendors/bootstrap-sweetalert/dist/sweetalert.min.js"></script>
    <script src="<?= $this->request->webroot ?>vendors/remarkable-bootstrap-notify/dist/bootstrap-notify.min.js"></script>
    <script src="<?= $this->request->webroot ?>vendors/summernote/dist/summernote.min.js"></script>
    <script src="<?= $this->request->webroot ?>vendors/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="<?= $this->request->webroot ?>vendors/ionrangeslider/js/ion.rangeSlider.min.js"></script>
    <script src="<?= $this->request->webroot ?>vendors/nestable/jquery.nestable.js"></script>
    <script src="<?= $this->request->webroot ?>vendors/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="<?= $this->request->webroot ?>vendors/datatables/media/js/dataTables.bootstrap4.js"></script>
    <script src="<?= $this->request->webroot ?>vendors/datatables-fixedcolumns/js/dataTables.fixedColumns.js"></script>
    <script src="<?= $this->request->webroot ?>vendors/datatables-responsive/js/dataTables.responsive.js"></script>
    <script src="<?= $this->request->webroot ?>vendors/editable-table/mindmup-editabletable.js"></script>
    <script src="<?= $this->request->webroot ?>vendors/d3/d3.min.js"></script>
    <script src="<?= $this->request->webroot ?>vendors/c3/c3.min.js"></script>
    <script src="<?= $this->request->webroot ?>vendors/chartist/dist/chartist.min.js"></script>
    <script src="<?= $this->request->webroot ?>vendors/peity/jquery.peity.min.js"></script>
    <script src="<?= $this->request->webroot ?>vendors/chartist-plugin-tooltip/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="<?= $this->request->webroot ?>vendors/jquery-countTo/jquery.countTo.js"></script>
    <script src="<?= $this->request->webroot ?>vendors/nprogress/nprogress.js"></script>
    <script src="<?= $this->request->webroot ?>vendors/jquery-steps/build/jquery.steps.min.js"></script>
    <script src="<?= $this->request->webroot ?>vendors/chart.js/dist/Chart.bundle.min.js"></script>
    <script src="<?= $this->request->webroot ?>vendors/dropify/dist/js/dropify.min.js"></script>
    <script src="<?= $this->request->webroot ?>vendors/cleanhtmlaudioplayer/src/jquery.cleanaudioplayer.js"></script>
    <script src="<?= $this->request->webroot ?>vendors/cleanhtmlvideoplayer/src/jquery.cleanvideoplayer.js"></script>
    <script src="<?= $this->request->webroot ?>vendors/d3-dsv/dist/d3-dsv.js"></script>
    <script src="<?= $this->request->webroot ?>vendors/d3-time-format/dist/d3-time-format.js"></script>
    <script src="<?= $this->request->webroot ?>vendors/techan/dist/techan.min.js"></script>
    <script src="<?= $this->request->webroot ?>js/custom.js"></script>
    <!-- CLEAN UI HTML ADMIN TEMPLATE MODULES-->
    <!-- v2.0.0 -->
    <script src="<?= $this->request->webroot ?>components/menu-left/common/menu-left.cleanui.js"></script>
    <script src="<?= $this->request->webroot ?>components/menu-right/common/menu-right.cleanui.js"></script>
    <?= $this->Flash->render(); ?>
</body>

</html>
