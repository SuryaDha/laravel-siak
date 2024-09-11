
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Sistem Informasi Akademik - Undiksha</title>
    <meta name="description" content="Sistem Informasi Akademik - Undiksha" />
	<meta name="keywords" content="">
	<meta name="author" content="UPTTIK Undiksha" />

    <meta name="develop_on" content="Juli 2019" />
    <meta name="programmer" content="I Wayan Adi Sparta" />
    <meta content="dY4tDhoMUBcHGZ6ceRfXpBfjbmHIaJ54XvDkQZZ6" name="csrf_token" />

    <link rel="shortcut icon" href="https://siakng.undiksha.ac.id/assets/images/undiksha.png">
    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="https://siakng.undiksha.ac.id/global_assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
    <link href="https://siakng.undiksha.ac.id/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="https://siakng.undiksha.ac.id/assets/css/bootstrap_limitless.min.css" rel="stylesheet" type="text/css">
    <link href="https://siakng.undiksha.ac.id/assets/css/layout.min.css" rel="stylesheet" type="text/css">
    <link href="https://siakng.undiksha.ac.id/assets/css/components.min.css" rel="stylesheet" type="text/css">
    <link href="https://siakng.undiksha.ac.id/assets/css/colors.min.css" rel="stylesheet" type="text/css">
    <link href="https://siakng.undiksha.ac.id/assets/css/custom.css" rel="stylesheet" type="text/css">

    
    <!-- Core JS files -->
    <script src="https://siakng.undiksha.ac.id/global_assets/js/main/jquery.min.js"></script>
    <script src="https://siakng.undiksha.ac.id/global_assets/js/main/bootstrap.bundle.min.js"></script>
    <script src="https://siakng.undiksha.ac.id/global_assets/js/plugins/loaders/blockui.min.js"></script>
    <script src="https://siakng.undiksha.ac.id/global_assets/js/plugins/tables/datatables/datatables.min.js"></script>
    <script src="https://siakng.undiksha.ac.id/global_assets/js/plugins/tables/datatables/extensions/responsive.min.js"></script>
    <script src="https://siakng.undiksha.ac.id/global_assets/js/plugins/notifications/noty.min.js"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script src="https://siakng.undiksha.ac.id/global_assets/js/plugins/ui/perfect_scrollbar.min.js"></script>
    <script src="https://siakng.undiksha.ac.id/assets/js/app.js"></script>
    <script src="https://siakng.undiksha.ac.id/global_assets/js/demo_pages/layout_fixed_sidebar_custom.js"></script>
    <script src="https://siakng.undiksha.ac.id/global_assets/js/plugins/forms/validation/validate.min.js"></script>
    <script src="https://siakng.undiksha.ac.id/global_assets/js/plugins/forms/validation/localization/messages_id.js"></script>
    <script src="https://siakng.undiksha.ac.id/global_assets/js/plugins/forms/jquery.form.min.js"></script>
    <script src="https://siakng.undiksha.ac.id/assets/js/main-page.js"></script>
    <!-- /theme JS files -->

    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.css" />
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>



    <link href="..\..\..\..\global_assets\css\icons\icomoon\styles.css" rel="stylesheet" type="text/css">
    <style>
        .v-top {
            vertical-align: top;
        }
        .dtr-inline.collapsed tbody tr td:first-child, .dtr-inline.collapsed tbody tr th:first-child {
            white-space: normal;
        }

        @keyframes  blink {
            0% {
                opacity: 1;
            }
            50% {
                opacity: 0;
            }
            100% {
                opacity: 1;
            }
        }

        .kedip1 {
            animation-name: blink;
            animation-duration: 1s;
            animation-timing-function: linear;
            animation-iteration-count: infinite;
        }
        .kedip2 {
            animation-name: blink;
            animation-duration: 1.2s;
            animation-timing-function: linear;
            animation-iteration-count: infinite;
        }
        .kedip3 {
            animation-name: blink;
            animation-duration: 1.4s;
            animation-timing-function: linear;
            animation-iteration-count: infinite;
        }
    </style>

</head>

<body id="super-body" class="navbar-top ">

@include('dosen.bar.navbar')


@include('dosen.bar.sidebar')


@yield('content')


<script>
    function loader() {
        this.transferData = function(is_show = true, img = "https://siakng.undiksha.ac.id/assets/cloud3.gif", w = 50, text = 'Sedang diproses'){
            if(is_show == true){

                $.blockUI({
                    message: `
                    <div class="d-flex justify-content-center align-items-center flex-column ">
                        <img src="${img}" alt="" style="width:${w}%;">
                        <h4 style="color:white">${text}<span class="kedip1">.</span><span class="kedip2">.</span><span class="kedip3">.</span> </h4>
                    </div>
                    `,
                    overlayCSS: {
                        cursor: 'wait',
                        zIndex : 99999
                    },
                    css: {
                        border: 0,
                        padding: 0,
                        borderRadius : 3,
                        padding : 10,
                        zIndex : 99999,
                        color: 'transparent',
                        backgroundColor: 'transparent'
                    }
                });
            }
            else{
                $.unblockUI();
            }
        }
    }
</script>

<script>
    window.onerror = function(msg, url, line){
        var xhr = new XMLHttpRequest();
        var params = {
            message : encodeURIComponent(msg),
            url : encodeURIComponent(url),
            line : line,
            _token : "dY4tDhoMUBcHGZ6ceRfXpBfjbmHIaJ54XvDkQZZ6"
        };
        xhr.open("POST", "https://siakng.undiksha.ac.id/client-log", true);
        xhr.setRequestHeader('Content-Type', 'application/json');
        xhr.send(JSON.stringify(params));
    };
    $(function(){
        $('form').attr('autocomplete', 'off');
    })
    
    
</script>

    <script>
        var mainPage = new mainPage();

        function loadDaftarKuliah(){
            mainPage.showLoading();
            $.get('https://siakng.undiksha.ac.id/mahasiswa/ajax/view/x/get-jadwal-kuliah', function(respon){
                mainPage.showLoading(false);

                if(respon.status == 'success'){
                    $('#modal_jadwal').modal('show');
                    $('#modal_jadwal_content').html(respon.data.view);
                }
                else{
                    mainPage.showErrorPage();
                }

            }).fail(function(){
                mainPage.showLoading(false);
                mainPage.showErrorPage();
            })
        }

        $(function(){
            setTimeout(function(){
                $('#content_info_krs').slideDown();
            }, 1000);


        })
    </script>


</body>
</html>
