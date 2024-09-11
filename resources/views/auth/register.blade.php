<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sistem Informasi Akademik - Undiksha</title>
    <link rel="shortcut icon" href="https://siakng.undiksha.ac.id/assets/images/undiksha.png">

    <meta name="description" content="Sistem Informasi Akademik - Undiksha" />
    <meta name="keywords" content="">
    <meta name="author" content="UPTTIK Undiksha" />

    <meta name="develop_on" content="Juli 2019" />
    <meta name="programmer" content="I Wayan Adi Sparta" />
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="https://siakng.undiksha.ac.id/global_assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
    <link href="https://siakng.undiksha.ac.id/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="https://siakng.undiksha.ac.id/assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
    <link href="https://siakng.undiksha.ac.id/assets/css/layout.min.css" rel="stylesheet" type="text/css">
    <link href="https://siakng.undiksha.ac.id/assets/css/components.min.css" rel="stylesheet" type="text/css">
    <link href="https://siakng.undiksha.ac.id/assets/css/colors.min.css" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script src="https://siakng.undiksha.ac.id/global_assets/js/main/jquery.min.js"></script>
    <script src="https://siakng.undiksha.ac.id/global_assets/js/main/bootstrap.bundle.min.js"></script>
    <script src="https://siakng.undiksha.ac.id/global_assets/js/plugins/loaders/blockui.min.js"></script>
    <script src="https://siakng.undiksha.ac.id/global_assets/js/plugins/notifications/noty.min.js"></script>
    <!-- /core JS files -->


    <link href="..\..\..\..\global_assets\css\icons\icomoon\styles.css" rel="stylesheet" type="text/css">
    <style>
        .h-captcha iframe {
            width: 100% !important;
        }
    </style>

</head>

<body>

<div class="page-content">

    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Content area -->
        <div class="content d-flex justify-content-center align-items-center">

            <!-- Login form -->
            <form method="POST" action="{{ route('register') }}" accept-charset="UTF-8" class="login-form" id="login_form" autocomplete="off">
                @csrf
                <div class="card mb-0">
                    <div class="card-body">
                        <div class="text-center">
                            <img src="https://siakng.undiksha.ac.id/assets/images/undiksha.png" style="width: 35%;" />
                            <h5 class="mb-0">SIAK - UNDIKSHA</h5>
                            <span class="d-block text-muted mb-3">Silahkan daftar terlebih dulu</span>
                        </div>

                        <div class="form-group form-group-feedback form-group-feedback-left">
                            <input id="name" type="text" class="form-control" placeholder="Nama" name="name" required>
                            <div class="form-control-feedback">
                                <i class="icon-user text-muted"></i>
                            </div>
                        </div>

                        <div class="form-group form-group-feedback form-group-feedback-left">
                            <input id="email" type="email" class="form-control" placeholder="Email" name="email" required>
                            <div class="form-control-feedback">
                                <i class="icon-user text-muted"></i>
                            </div>
                        </div>

                        <div class="form-group form-group-feedback form-group-feedback-left">
                            <input id="password" type="password" class="form-control" placeholder="Password" name="password" required>
                            <div class="form-control-feedback">
                                <i class="icon-lock2 text-muted"></i>
                            </div>
                        </div>

                        <div class="form-group form-group-feedback form-group-feedback-left">
                            <input id="password-confirm" type="password" class="form-control" placeholder="Password Confirmation" name="password_confirmation" required autocomplete="new-password">
                            <div class="form-control-feedback">
                                <i class="icon-lock2 text-muted"></i>
                            </div>
                        </div>

                        <div class="form-group form-group-feedback form-group-feedback-left">
                            <select name="role" id="role" class="form-control">
                                <option value="mahasiswa">Mahasiswa</option>
                                <option value="dosen">Dosen</option>
                            </select>
                            <div class="form-control-feedback">
                                <i class="icon-lock2 text-muted"></i>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Register <i class="icon-circle-right2 ml-2"></i></button>
                        </div>

                        <div class="content-divider text-muted form-group"><span>ATAU</span></div>
                        <a href="/login" class="btn bg-pink btn-block legitRipple">Login</a>
                    </div>
                </div>
            </form>
            <!-- /login form -->

        </div>
        <!-- /content area -->

    </div>
    <!-- /main content -->

</div>

<script>
    Noty.overrideDefaults({
        theme: 'limitless',
        layout: 'topCenter',
        type: 'alert',
        timeout: 2500
    });

    function loadingContent(container){
        container.block({
            message: '<i class="icon-spinner2 spinner"></i>',
            overlayCSS: {
                backgroundColor: '#fff',
                opacity: 0.8,
                cursor: 'wait'
            },
            css: {
                border: 0,
                padding: 0,
                backgroundColor: 'none'
            }
        });
    }
    function unLoadingContent(container){
        container.unblock();
    }

    // $(function(){
    //     $.ajaxSetup({
    //         headers: {
    //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //         }
    //     });

    //     var form = $('#login_form');
    //     form.on("submit", function(e){
    //         e.preventDefault();
    //         loadingContent($('.login-form'));
    //         $.ajax({
    //             type : 'POST',
    //             data : form.serialize(),
    //             url : form.attr('action'),
    //             success : function (e) {
    //                 unLoadingContent($('.login-form'));
    //                 if(e.status === 'success'){
    //                     new Noty({
    //                         text: e.message,
    //                         type: 'info'
    //                     }).show();

    //                     setTimeout(function(){
    //                         window.location = e.data.redirectUrl;
    //                     }, 2000);
    //                 }
    //                 else{
    //                     new Noty({
    //                         text: e.message,
    //                         type: 'error'
    //                     }).show();
    //                 }
    //             },
    //             error : function(e){
    //                 unLoadingContent($('.login-form'));
    //                 new Noty({
    //                     text: 'Maaf, terjadi kesalahan jaringan',
    //                     type: 'error'
    //                 }).show();
    //             }
    //         });
    //     });
    // });
</script>

</body>
</html>
