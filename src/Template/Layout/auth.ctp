<!DOCTYPE html>
<html lang="fr" class="height100">

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

<body class="no-padding height100">
    <div class="login height100" style="background-image: url(<?= $this->request->webroot ?>components/pages/common/img/login/1.jpg)">
        <div class="login__header">
            <div class="row">
                <div class="col-lg-12">
                    <div class="login__header__logo">
                        <a href="<?= $this->Url->build(['controller' => 'Users', 'action' => 'login']) ?>">
                            <img src="<?= $this->request->webroot ?>img/Logo-Agence.png" alt="Logo Ecole">
                            <a href="javascript: void(0);" class="btn btn-sm btn-outline ml-3 random-bg-image" data-img="1">Changer le fond d'écran</a>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <?= $this->fetch('content') ?>
    </div>

    
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
    <!-- CLEAN UI HTML ADMIN TEMPLATE MODULES-->
    <!-- v2.0.0 -->
    <script src="<?= $this->request->webroot ?>components/menu-left/common/menu-left.cleanui.js"></script>
    <script src="<?= $this->request->webroot ?>components/menu-right/common/menu-right.cleanui.js"></script>
    <script src="<?= $this->request->webroot ?>js/custom.js"></script>
    <?= $this->fetch('script') ?>
    <?= $this->Flash->render(); ?>
    <script>
        // Change BG
      $('.random-bg-image').on('click', function () {
        var min = 1, max = 5,
          next = Math.floor($('.random-bg-image').data('img')) + 1,
          final = next > max ? min : next;

        $('.random-bg-image').data('img', final);
        $('.login').data('img', final).css('backgroundImage', 'url(<?= $this->request->webroot ?>/components/pages/common/img/login/' + final + '.jpg)');
      })
    </script>
</body>

</html>
