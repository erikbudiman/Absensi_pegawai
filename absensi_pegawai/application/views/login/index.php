<!doctype html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?= $title ?></title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <link rel="icon" href="../favicon.ico" type="image/x-icon" />

        <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800" rel="stylesheet">
        
        <link rel="stylesheet" href="<?= base_url() ?>vendor/plugins/bootstrap/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="<?= base_url() ?>vendor/plugins/fontawesome-free/css/all.min.css">
        <link rel="stylesheet" href="<?= base_url() ?>vendor/plugins/ionicons/dist/css/ionicons.min.css">
        <link rel="stylesheet" href="<?= base_url() ?>vendor/plugins/icon-kit/dist/css/iconkit.min.css">
        <link rel="stylesheet" href="<?= base_url() ?>vendor/plugins/perfect-scrollbar/css/perfect-scrollbar.css">
        <link rel="stylesheet" href="<?= base_url() ?>vendor/dist/css/theme.min.css">
        <script src="<?= base_url() ?>vendor/src/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>

    <body>

        <div class="auth-wrapper">
            <div class="container-fluid h-100">
                <div class="row flex-row h-100 bg-white">
                    <div class="col-xl-8 col-lg-6 col-md-5 p-0 d-md-block d-lg-block d-sm-none d-none">
                        <div class="lavalite-bg" style="background-image: url('<?= base_url() ?>vendor/img/auth/login-bg.jpg')">
                            <div class="lavalite-overlay"></div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-6 col-md-7 my-auto p-0">
                        <div class="authentication-form mx-auto">
                            <div class="logo-centered">
                                <a href="<?= base_url() ?>vendor/index.html"><img src="<?= base_url() ?>vendor/src/img/brand.svg" alt=""></a>
                            </div>
                            <div class="error" data-error="<?= $this->session->flashdata('error') ?>"></div>
                            <div class="warning" data-warning="<?= $this->session->flashdata('warning') ?>"></div>
                            <div class="success" data-success="<?= $this->session->flashdata('success') ?>"></div>
                            <h3 class="text-center">Login</h3>
                            <?= form_open() ?>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="username" placeholder="Username" value="<?= set_value('username') ?>">
                                    <i class="ik ik-user"></i>
                                    <?= form_error('username', '<small class="text-danger">', '</small>') ?>
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control" placeholder="Password">
                                    <i class="ik ik-lock"></i>
                                    <?= form_error('password', '<small class="text-danger">', '</small>') ?>
                                </div>
                                <div class="row">
                                    <div class="col text-left">
                                        <label class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="item_checkbox" name="item_checkbox" value="option1">
                                            <span class="custom-control-label">&nbsp;Remember Me</span>
                                        </label>
                                    </div>
                                    <div class="col text-right">
                                        <a href="forgot-password.html">Forgot Password ?</a>
                                    </div>
                                </div>
                                <div class="sign-btn text-center">
                                    <button type="submit" class="btn btn-theme">Sign In</button>
                                </div>
                            <?= form_close() ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <script>window.jQuery || document.write('<script src="<?= base_url() ?>vendor/src/js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
        <script src="<?= base_url() ?>vendor/plugins/popper.js/dist/umd/popper.min.js"></script>
        <script src="<?= base_url() ?>vendor/plugins/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="<?= base_url() ?>vendor/plugins/perfect-scrollbar/dist/perfect-scrollbar.min.js"></script>
        <script src="<?= base_url() ?>vendor/plugins/sweetalert2/dist/sweetalert2.all.min.js"></script>
        <script src="<?= base_url() ?>assets/js/main.js"></script>
        <script src="<?= base_url() ?>vendor/plugins/screenfull/dist/screenfull.js"></script>
        <script src="<?= base_url() ?>vendor/dist/js/theme.js"></script>
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>
