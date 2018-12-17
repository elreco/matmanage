<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <?= $this->fetch('meta') ?>
    <title>AEMA -
        <?= $this->fetch('title') ?>
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
                
                <li class="menu-left__item menu-left__item--active">
                    <a href="https://docs.cleanuitemplate.com/" target="_blank">
                        <span class="menu-left__icon icmn-books"></span>
                        Documentation
                    </a>
                </li>
                <li class="menu-left__item menu-left__submenu">
                    <a href="javascript: void(0);">
                        <span class="menu-left__icon icmn-loop"></span>
                        Pages
                    </a>
                    <ul class="menu-left__list">
                        <li class="menu-left__item">
                            <a href="dashboards-alpha.html">
                                <span class="menu-left__icon icmn-home"></span>
                                <span class="badge badge-primary pull-right">New</span>
                                Dashboard Alpha
                            </a>
                        </li>
                        <li class="menu-left__item">
                            <a href="dashboards-beta.html">
                                <span class="menu-left__icon icmn-home"></span>
                                Dashboard Beta
                            </a>
                        </li>
                        <li class="menu-left__item">
                            <a href="dashboards-crypto.html">
                                <span class="menu-left__icon icmn-home"></span>
                                <span class="badge badge-primary pull-right">New</span>
                                Dashboard Crypto
                            </a>
                        </li>
                        <li class="menu-left__item">
                            <a href="dashboards-gamma.html">
                                <span class="menu-left__icon icmn-home"></span>
                                <span class="badge badge-primary pull-right">New</span>
                                Dashboard Gamma
                            </a>
                        </li>
                        <li class="menu-left__divider">
                            <!-- -->
                        </li>
                        <li class="menu-left__item menu-left__submenu">
                            <a href="javascript: void(0);">
                                <span class="menu-left__icon icmn-file-text"></span>
                                Default Pages
                            </a>
                            <ul class="menu-left__list">
                                <li class="menu-left__item">
                                    <a href="pages-login-alpha.html">
                                        <span class="menu-left__icon">LA</span>
                                        Login Alpha
                                    </a>
                                </li>
                                <li class="menu-left__item">
                                    <a href="pages-login-beta.html">
                                        <span class="menu-left__icon">LB</span>
                                        Login Beta
                                    </a>
                                </li>
                                <li class="menu-left__item">
                                    <a href="pages-register.html">
                                        <span class="menu-left__icon">R</span>
                                        Register
                                    </a>
                                </li>
                                <li class="menu-left__item">
                                    <a href="pages-lockscreen.html">
                                        <span class="menu-left__icon">LS</span>
                                        Lockscreen
                                    </a>
                                </li>
                                <li class="menu-left__item">
                                    <a href="pages-pricing-tables.html">
                                        <span class="menu-left__icon">PT</span>
                                        Pricing Tables
                                    </a>
                                </li>
                                <li class="menu-left__item">
                                    <a href="pages-invoice.html">
                                        <span class="menu-left__icon">I</span>
                                        Invoice
                                    </a>
                                </li>
                                <li class="menu-left__item">
                                    <a href="pages-page-404.html">
                                        <span class="menu-left__icon">P4</span>
                                        Page 404
                                    </a>
                                </li>
                                <li class="menu-left__item">
                                    <a href="pages-page-500.html">
                                        <span class="menu-left__icon">P5</span>
                                        Page 500
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-left__item menu-left__submenu">
                            <a href="javascript: void(0);">
                                <span class="menu-left__icon icmn-download"></span>
                                Ecommerce
                            </a>
                            <ul class="menu-left__list">
                                <li class="menu-left__item">
                                    <a href="ecommerce-dashboard.html">
                                        <span class="menu-left__icon">DB</span>
                                        Dashboard
                                    </a>
                                </li>
                                <li class="menu-left__item">
                                    <a href="ecommerce-products-catalog.html">
                                        <span class="menu-left__icon">PC</span>
                                        Products Catalog
                                    </a>
                                </li>
                                <li class="menu-left__item">
                                    <a href="ecommerce-product-details.html">
                                        <span class="menu-left__icon">PD</span>
                                        Product Details
                                    </a>
                                </li>
                                <li class="menu-left__item">
                                    <a href="ecommerce-product-edit.html">
                                        <span class="menu-left__icon">PE</span>
                                        Product Edit
                                    </a>
                                </li>
                                <li class="menu-left__item">
                                    <a href="ecommerce-products-list.html">
                                        <span class="menu-left__icon">PL</span>
                                        Products List
                                    </a>
                                </li>
                                <li class="menu-left__item">
                                    <a href="ecommerce-orders.html">
                                        <span class="menu-left__icon">O</span>
                                        Orders
                                    </a>
                                </li>
                                <li class="menu-left__item">
                                    <a href="ecommerce-cart-checkout.html">
                                        <span class="menu-left__icon">CC</span>
                                        Cart / Checkout
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-left__item">
                            <a href="apps-profile.html">
                                <span class="menu-left__icon icmn-profile"></span>
                                Profile
                            </a>
                        </li>
                        <li class="menu-left__item">
                            <a href="apps-messaging.html">
                                <span class="menu-left__icon icmn-bubbles4"></span>
                                <span class="badge badge-danger pull-right">768</span>
                                Messaging
                            </a>
                        </li>
                        <li class="menu-left__item">
                            <a href="apps-mail.html">
                                <span class="menu-left__icon icmn-envelop"></span>
                                <span class="badge badge-success pull-right">84</span>
                                Mail
                            </a>
                        </li>
                        <li class="menu-left__item">
                            <a href="apps-calendar.html">
                                <span class="menu-left__icon icmn-calendar"></span>
                                Calendar
                            </a>
                        </li>
                        <li class="menu-left__item">
                            <a href="apps-gallery.html">
                                <span class="menu-left__icon icmn-images"></span>
                                Gallery
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-left__item menu-left__submenu">
                    <a href="javascript: void(0);">
                        <span class="menu-left__icon icmn-loop"></span>
                        Components
                    </a>
                    <ul class="menu-left__list">
                        <li class="menu-left__item menu-left__submenu">
                            <a href="javascript: void(0);">
                                <span class="menu-left__icon icmn-list"></span>
                                Forms
                            </a>
                            <ul class="menu-left__list">
                                <li class="menu-left__item">
                                    <a href="forms-basic-form-elements.html">
                                        <span class="menu-left__icon">BF</span>
                                        Basic Form Elements
                                    </a>
                                </li>
                                <li class="menu-left__item">
                                    <a href="forms-buttons.html">
                                        <span class="menu-left__icon">B</span>
                                        Buttons
                                    </a>
                                </li>
                                <li class="menu-left__item">
                                    <a href="forms-dropdowns.html">
                                        <span class="menu-left__icon">D</span>
                                        Dropdowns
                                    </a>
                                </li>
                                <li class="menu-left__item">
                                    <a href="forms-selectboxes.html">
                                        <span class="menu-left__icon">SB</span>
                                        Selectboxes
                                    </a>
                                </li>
                                <li class="menu-left__item">
                                    <a href="forms-checkboxes-radio.html">
                                        <span class="menu-left__icon">CR</span>
                                        Checkboxes / Radio
                                    </a>
                                </li>
                                <li class="menu-left__item">
                                    <a href="forms-form-wizard.html">
                                        <span class="menu-left__icon">FW</span>
                                        Form Wizard
                                    </a>
                                </li>
                                <li class="menu-left__item">
                                    <a href="forms-form-validation.html">
                                        <span class="menu-left__icon">FV</span>
                                        Form Validation
                                    </a>
                                </li>
                                <li class="menu-left__item">
                                    <a href="forms-autocomplete.html">
                                        <span class="menu-left__icon">AC</span>
                                        Autocomplete
                                    </a>
                                </li>
                                <li class="menu-left__item">
                                    <a href="forms-input-mask.html">
                                        <span class="menu-left__icon">IM</span>
                                        Input Mask
                                    </a>
                                </li>
                                <li class="menu-left__item">
                                    <a href="forms-file-uploads.html">
                                        <span class="menu-left__icon">FU</span>
                                        File Uploads
                                    </a>
                                </li>
                                <li class="menu-left__item">
                                    <a href="forms-extras.html">
                                        <span class="menu-left__icon">E</span>
                                        Extras
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-left__item menu-left__submenu">
                            <a href="javascript: void(0);">
                                <span class="menu-left__icon icmn-loop"></span>
                                Components
                            </a>
                            <ul class="menu-left__list">
                                <li class="menu-left__item">
                                    <a href="components-date-picker.html">
                                        <span class="menu-left__icon">DP</span>
                                        Date Picker
                                    </a>
                                </li>
                                <li class="menu-left__item">
                                    <a href="components-calendar.html">
                                        <span class="menu-left__icon">CL</span>
                                        Calendar
                                    </a>
                                </li>
                                <li class="menu-left__item">
                                    <a href="components-carousel.html">
                                        <span class="menu-left__icon">CR</span>
                                        Carousel
                                    </a>
                                </li>
                                <li class="menu-left__item">
                                    <a href="components-media-players.html">
                                        <span class="menu-left__icon">MP</span>
                                        Media Players
                                    </a>
                                </li>
                                <li class="menu-left__item">
                                    <a href="components-slider.html">
                                        <span class="menu-left__icon">SL</span>
                                        Slider
                                    </a>
                                </li>
                                <li class="menu-left__item">
                                    <a href="components-modal.html">
                                        <span class="menu-left__icon">M</span>
                                        Modal
                                    </a>
                                </li>
                                <li class="menu-left__item">
                                    <a href="components-tooltips-popovers.html">
                                        <span class="menu-left__icon">TP</span>
                                        Tooltips & Popovers
                                    </a>
                                </li>
                                <li class="menu-left__item">
                                    <a href="components-notifications-alerts.html">
                                        <span class="menu-left__icon">NA</span>
                                        Notifications & Alerts
                                    </a>
                                </li>
                                <li class="menu-left__item">
                                    <a href="components-loading-progress.html">
                                        <span class="menu-left__icon">LP</span>
                                        Loading Progress
                                    </a>
                                </li>
                                <li class="menu-left__item">
                                    <a href="components-progress-bars.html">
                                        <span class="menu-left__icon">PB</span>
                                        Progress Bars
                                    </a>
                                </li>
                                <li class="menu-left__item">
                                    <a href="components-badges-labels.html">
                                        <span class="menu-left__icon">BL</span>
                                        Badges & Labels
                                    </a>
                                </li>
                                <li class="menu-left__item">
                                    <a href="components-steps.html">
                                        <span class="menu-left__icon">S</span>
                                        Steps
                                    </a>
                                </li>
                                <li class="menu-left__item">
                                    <a href="components-breadcrumbs.html">
                                        <span class="menu-left__icon">B</span>
                                        Breadcrumbs
                                    </a>
                                </li>
                                <li class="menu-left__item">
                                    <a href="components-pagination.html">
                                        <span class="menu-left__icon">P</span>
                                        Pagination
                                    </a>
                                </li>
                                <li class="menu-left__item">
                                    <a href="components-collapse.html">
                                        <span class="menu-left__icon">C</span>
                                        Collapse
                                    </a>
                                </li>
                                <li class="menu-left__item">
                                    <a href="components-tabs.html">
                                        <span class="menu-left__icon">T</span>
                                        Tabs
                                    </a>
                                </li>
                                <li class="menu-left__item">
                                    <a href="components-text-editor.html">
                                        <span class="menu-left__icon">TE</span>
                                        Text Editor
                                    </a>
                                </li>
                                <li class="menu-left__item">
                                    <a href="components-nestable.html">
                                        <span class="menu-left__icon">N</span>
                                        Nestable
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-left__item menu-left__submenu">
                            <a href="javascript: void(0);">
                                <span class="menu-left__icon icmn-table"></span>
                                Tables
                            </a>
                            <ul class="menu-left__list">
                                <li class="menu-left__item">
                                    <a href="tables-basic-tables.html">
                                        <span class="menu-left__icon">BT</span>
                                        Basic Tables
                                    </a>
                                </li>
                                <li class="menu-left__item">
                                    <a href="tables-datatables.html">
                                        <span class="menu-left__icon">DT</span>
                                        DataTables
                                    </a>
                                </li>
                                <li class="menu-left__item">
                                    <a href="tables-editable-tables.html">
                                        <span class="menu-left__icon">ET</span>
                                        Editable Tables
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-left__item menu-left__submenu">
                            <a href="javascript: void(0);">
                                <span class="menu-left__icon icmn-stats-bars"></span>
                                Charts
                            </a>
                            <ul class="menu-left__list">
                                <li class="menu-left__item">
                                    <a href="charts-chartistjs.html">
                                        <span class="menu-left__icon">CT</span>
                                        Chartist.js
                                    </a>
                                </li>
                                <li class="menu-left__item">
                                    <a href="charts-chartjs.html">
                                        <span class="menu-left__icon">CR</span>
                                        Chart.js
                                    </a>
                                </li>
                                <li class="menu-left__item">
                                    <a href="charts-c3.html">
                                        <span class="menu-left__icon">C3</span>
                                        C3
                                    </a>
                                </li>
                                <li class="menu-left__item">
                                    <a href="charts-peity.html">
                                        <span class="menu-left__icon">PT</span>
                                        Peity
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-left__item">
                            <a href="components-mail-templates.html">
                                <span class="menu-left__icon icmn-envelop"></span>
                                Mail Templates
                            </a>
                        </li>
                        <li class="menu-left__item menu-left__submenu">
                            <a href="javascript: void(0);">
                                <span class="menu-left__icon icmn-star-full"></span>
                                Icons
                            </a>
                            <ul class="menu-left__list">
                                <li class="menu-left__item">
                                    <a href="icons-fontawesome.html">
                                        <span class="menu-left__icon">FA</span>
                                        FontAwesome
                                    </a>
                                </li>
                                <li class="menu-left__item">
                                    <a href="icons-linear-icons-free.html">
                                        <span class="menu-left__icon">LI</span>
                                        Linearicons Free
                                    </a>
                                </li>
                                <li class="menu-left__item">
                                    <a href="icons-icomoon-free.html">
                                        <span class="menu-left__icon">IC</span>
                                        Icomoon Free
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="menu-left__item menu-left__submenu">
                    <a href="javascript: void(0);">
                        <span class="menu-left__icon icmn-checkbox-unchecked"></span>
                        Layout
                    </a>
                    <ul class="menu-left__list">
                        <li class="menu-left__item">
                            <a href="layout-grid.html">
                                <span class="menu-left__icon">G</span>
                                Grid
                            </a>
                        </li>
                        <li class="menu-left__item">
                            <a href="layout-cards.html">
                                <span class="menu-left__icon">PC</span>
                                Cards / Panels
                            </a>
                        </li>
                        <li class="menu-left__item">
                            <a href="layout-sidebars.html">
                                <span class="menu-left__icon">SB</span>
                                Sidebars
                            </a>
                        </li>
                        <li class="menu-left__item">
                            <a href="layout-utilities.html">
                                <span class="menu-left__icon">U</span>
                                Utilities
                            </a>
                        </li>
                        <li class="menu-left__item">
                            <a href="layout-typography.html">
                                <span class="menu-left__icon icmn-font-size"></span>
                                Typography
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="menu-left__item menu-left__item--disabled">
                    <a href="javascript: void(0);">
                        <span class="menu-left__icon">D</span>
                        Disabled Item
                    </a>
                </li>
                <li class="menu-left__item menu-left__submenu">
                    <a href="javascript: void(0);">
                        <span class="menu-left__icon">IN</span>
                        Infinity Nested
                    </a>
                    <!-- level 1 -->
                    <ul class="menu-left__list">
                        <li class="menu-left__item menu-left__submenu">
                            <a href="javascript: void(0);">
                                Level 1
                            </a>
                            <!-- level 2 -->
                            <ul class="menu-left__list">
                                <li class="menu-left__item menu-left__submenu">
                                    <a href="javascript: void(0);">
                                        Level 1.2
                                    </a>
                                    <!-- level 3 -->
                                    <ul class="menu-left__list">
                                        <li class="menu-left__item">
                                            <a href="javascript: void(0);">
                                                Level 1.2.3
                                            </a>
                                        </li>
                                        <li class="menu-left__item menu-left__submenu">
                                            <a href="javascript: void(0);">
                                                Level 1.2.3
                                            </a>
                                            <!-- level 4 -->
                                            <ul class="menu-left__list">
                                                <li class="menu-left__item">
                                                    <a href="javascript: void(0);">
                                                        Level 1.2.3.4
                                                    </a>
                                                </li>
                                            </ul>

                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-left__item">
                                    <a href="javascript: void(0);">
                                        Level 1.2
                                    </a>
                                </li>
                                <li class="menu-left__item">
                                    <a href="javascript: void(0);">
                                        Level 1.2
                                    </a>
                                </li>
                                <li class="menu-left__item">
                                    <a href="javascript: void(0);">
                                        Level 1.2
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="menu-left__item">
                            <a href="javascript: void(0);">
                                Level 1
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
    <div class="top-bar">
        <!-- left aligned items -->
        <div class="top-bar__left">
            <div class="top-bar__logo">
                <a href="dashboards-alpha.html">
                    <img src="<?= $this->request->webroot ?>components/dummy-assets/common/img/logo.png" alt="" />
                </a>
            </div>
            <div class="top-bar__item d-none d-md-block">
                <div class="dropdown">
                    <a href="javascript: void(0);" class="dropdown-toggle text-nowrap" data-toggle="dropdown"
                        aria-expanded="false">
                        <i class="icmn-folder-open mr-2"></i>
                        <span class="d-none d-xl-inline-block"><strong>Issues History</strong></span>
                    </a>
                    <div class="dropdown-menu" role="menu">
                        <a class="dropdown-item" href="javascript:void(0)">Current search</a>
                        <a class="dropdown-item" href="javascript:void(0)">Search for issues</a>
                        <div class="dropdown-divider"></div>
                        <div class="dropdown-header">Opened</div>
                        <a class="dropdown-item" href="javascript:void(0)"><i class="dropdown-icon icmn-checkmark"></i>
                            CLNUI-253
                            Project implemen...</a>
                        <a class="dropdown-item" href="javascript:void(0)"><i class="dropdown-icon icmn-checkmark"></i>
                            CLNUI-234
                            Active history iss...</a>
                        <a class="dropdown-item" href="javascript:void(0)"><i class="dropdown-icon icmn-clock"></i>
                            CLNUI-424 Ionicons
                            intergrat...</a>
                        <a class="dropdown-item" href="javascript:void(0)">More...</a>
                        <div class="dropdown-divider"></div>
                        <div class="dropdown-header">Filters</div>
                        <a class="dropdown-item" href="javascript:void(0)">My open issues</a>
                        <a class="dropdown-item" href="javascript:void(0)">Reported by me</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:void(0)">Import issues from CSV</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:void(0)"><i class="dropdown-icon icmn-cog"></i>
                            Settings</a>
                    </div>
                </div>
            </div>
            <div class="top-bar__item d-none d-md-block">
                <div class="dropdown">
                    <a href="javascript: void(0);" class="dropdown-toggle text-nowrap" data-toggle="dropdown"
                        aria-expanded="false">
                        <i class="icmn-database mr-2"></i>
                        <span class="d-none d-xl-inline-block"><strong>Project Management</strong></span>
                    </a>
                    <div class="dropdown-menu" role="menu">
                        <div class="dropdown-header">Active</div>
                        <a class="dropdown-item" href="javascript:void(0)">Project Management</a>
                        <a class="dropdown-item" href="javascript:void(0)">User Inetrface Development</a>
                        <a class="dropdown-item" href="javascript:void(0)">Documentation</a>
                        <div class="dropdown-header">Inactive</div>
                        <a class="dropdown-item" href="javascript:void(0)">Marketing</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:void(0)"><i class="dropdown-icon icmn-cog"></i>
                            Settings</a>
                    </div>
                </div>
            </div>
            <div class="top-bar__item d-none d-xl-inline-block">
                <div class="top-bar__search">
                    <i class="icmn-search">
                        <!-- --></i>
                    <input type="text" placeholder="Type to search..." />
                </div>
            </div>
        </div>
        <!-- right aligned items -->
        <div class="top-bar__right">
            <div class="top-bar__item d-none d-md-block">
                <a href="https://themeforest.net/item/clean-ui-admin-template-modular-trendy-design-modules-market-bem-angular-2-visual-builder/19597589?s_rank=4&ref=mediatec_software"
                    target="_blank" class="btn btn-sm btn-outline-danger">Buy Now 24$</a>
            </div>
            <div class="top-bar__item top-bar__item--hiddenOn1300">
                <div class="top-bar__mini-chart text-nowrap">
                    Server Load:
                    <div class="top-bar__mini-chart__inner">
                        <i style="height: 30%;"></i>
                        <i style="height: 78%;"></i>
                        <i style="height: 10%;"></i>
                        <i style="height: 46%;"></i>
                        <i style="height: 26%;"></i>
                        <i style="height: 29%;"></i>
                        <i style="height: 50%;"></i>
                        <i style="height: 89%;"></i>
                        <i style="height: 30%;"></i>
                    </div>
                    20%
                </div>
            </div>
            <div class="top-bar__item d-none d-md-block">
                <div class="dropdown">
                    <a href="javascript: void(0);" class="dropdown-toggle text-nowrap" data-toggle="dropdown"
                        aria-expanded="false">
                        <i class="menu-notification-icon icmn-home"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" role="menu">

                        <div class="top-bar__activity">
                            <div class="top-bar__activity__item">
                                <i class="top-bar__activity__icon icmn-star-full"></i>
                                <div class="top-bar__activity__inner">
                                    <div class="top-bar__activity__title">
                                        <span class="pull-right">now</span>
                                        <a href="javascript: void(0);">Update Status: <span class="badge badge-danger">New</span></a>
                                    </div>
                                    <div class="top-bar__activity__descr">
                                        Failed to get available update data. To ensure the proper functioning of your
                                        application, update now.
                                    </div>
                                </div>
                            </div>
                            <div class="top-bar__activity__item">
                                <i class="top-bar__activity__icon icmn-stack"></i>
                                <div class="top-bar__activity__inner">
                                    <div class="top-bar__activity__title">
                                        <span class="pull-right">24 min ago</span>
                                        <a href="javascript: void(0);">Income: <span class="badge badge-default">$299.00</span></a>
                                    </div>
                                    <div class="top-bar__activity__descr">
                                        Failed to get available update data. To ensure the proper functioning of your
                                        application, update now.
                                    </div>
                                </div>
                            </div>
                            <div class="top-bar__activity__item">
                                <i class="top-bar__activity__icon icmn-list"></i>
                                <div class="top-bar__activity__inner">
                                    <div class="top-bar__activity__title">
                                        <span class="pull-right">30 min ago</span>
                                        <a href="javascript: void(0);">Inbox Message</a>
                                    </div>
                                    <div class="top-bar__activity__descr">
                                        From: <a href="javascript: void(0);">David Bowie</a>
                                    </div>
                                </div>
                            </div>
                            <div class="top-bar__activity__item">
                                <i class="top-bar__activity__icon icmn-home"></i>
                                <div class="top-bar__activity__inner">
                                    <div class="top-bar__activity__title">
                                        <span class="pull-right">now</span>
                                        <a href="javascript: void(0);">Update Status: <span class="badge badge-primary">New</span></a>
                                    </div>
                                    <div class="top-bar__activity__descr">
                                        Failed to get available update data. To ensure the proper functioning of your
                                        application, update now.
                                    </div>
                                </div>
                            </div>
                            <div class="top-bar__activity__item">
                                <i class="top-bar__activity__icon icmn-loop"></i>
                                <div class="top-bar__activity__inner">
                                    <div class="top-bar__activity__title">
                                        <span class="pull-right">24 min ago</span>
                                        <a href="javascript: void(0);">Income: <span class="badge badge-warning">$299.00</span></a>
                                    </div>
                                    <div class="top-bar__activity__descr">
                                        Failed to get available update data. To ensure the proper functioning of your
                                        application, update now.
                                    </div>
                                </div>
                            </div>
                            <div class="top-bar__activity__item">
                                <i class="top-bar__activity__icon icmn-cog utils__spin-delayed--pseudo-selector"></i>
                                <div class="top-bar__activity__inner">
                                    <div class="top-bar__activity__title">
                                        <span class="pull-right">30 min ago</span>
                                        <a href="javascript: void(0);">Inbox Message</a>
                                    </div>
                                    <div class="top-bar__activity__descr">
                                        From: <a href="javascript: void(0);">David Bowie</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="top-bar__item">
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
                            System
                            Dashboard</a>
                        <a class="dropdown-item" href="javascript:void(0)"><i class="dropdown-icon icmn-circle-right"></i>
                            User Boards</a>
                        <a class="dropdown-item" href="javascript:void(0)"><i class="dropdown-icon icmn-circle-right"></i>
                            Issue
                            Navigator (35 New)</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="javascript:void(0)"><i class="dropdown-icon icmn-exit"></i>
                            Logout</a>
                    </div>
                </div>
            </div>
            <div class="top-bar__item">
                <div class="top-bar__menu-button menu-right__action--menu-toggle">
                    <i class="fa fa-bars">
                        <!-- --></i>
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
    <!-- CLEAN UI HTML ADMIN TEMPLATE MODULES-->
    <!-- v2.0.0 -->
    <script src="<?= $this->request->webroot ?>components/menu-left/common/menu-left.cleanui.js"></script>
    <script src="<?= $this->request->webroot ?>components/menu-right/common/menu-right.cleanui.js"></script>
</body>

</html>
