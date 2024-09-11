@extends('layout.layout')

@section('content')
<!-- Main content -->
<div class="content-wrapper">

    <!-- Page header -->
    <div class="page-header">
            <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<div class="page-header page-header-light">
    <div class="page-header-content header-elements-md-inline">
        <div class="page-title d-flex">
            <h4><span class="font-weight-semibold">Jadwal Kuliah</span> - Jadwal Per Dosen</h4>
        </div>
    </div>
</div>
    </div>
    <!-- /page header -->


    <!-- Content area -->
    <div class="content">
            <form method="POST" action="https://siakng.undiksha.ac.id/mahasiswa/jadwal/dosen" accept-charset="UTF-8" id="form_filter"><input name="_token" type="hidden" value="dY4tDhoMUBcHGZ6ceRfXpBfjbmHIaJ54XvDkQZZ6">
    <div class="card">
        <div class="card-body">

            <div class="alert alert-info alert-styled-left border-top-0 border-bottom-0 border-right-0 alert-dismissible ">
                <button type="button" class="close" data-dismiss="alert"><span>×</span></button>
                Lengkapi formulir berikut untuk melihat daftar jadwal kuliah per dosen
            </div>

            <div class="row">
                <label class="col-form-label col-md-2 text-right">Dosen : </label>
                <div class="col-md-4">
                    <select class="form-control select-dosen" required name="id_dosen"><option selected="selected" value="">Pilih salah satu</option></select>
                </div>
                <div class="col-md-2">
                    <button type="submit" class="btn btn-primary">Tampilkan</button>
                </div>
            </div>
        </div>
    </div>
</form>

<div id="jadwal_target"></div>

    </div>
    <!-- /content area -->

    <!-- Footer -->
    <div class="navbar navbar-expand-lg navbar-light">
        <div class="text-center d-lg-none w-100">
            <button type="button" class="navbar-toggler dropdown-toggle" data-toggle="collapse" data-target="#navbar-footer">
                <i class="icon-unfold mr-2"></i>
                Footer
            </button>
        </div>
        <div class="navbar-collapse collapse" id="navbar-footer">
            <span class="navbar-text">
                &copy; 2019. Develop with <i class="icon-heart5 text-pink"></i> by <a href="http://upttik.undiksha.ac.id" target="_blank">UPT TIK Undiksha</a>
            </span>
            <ul class="navbar-nav ml-lg-auto">
                <li class="nav-item">Version alpha 0.0.3</li>
            </ul>
        </div>
    </div>
    <!-- /footer -->

</div>
<!-- /main content -->

</div>
<!-- /page content -->

<div class="modal" tabindex="-1" id="loadingModal">
<div class="modal-dialog modal-xs modal-dialog-centered">
    <div class="modal-content">
        <div class="modal-body text-center">
            <div class="pace-demo" style="background: #FFF;">
                <div class="theme_tail">
                    <div class="pace_progress" data-progress-text="60%" data-progress="60" style="width: 60%;"></div>
                    <div class="pace_activity" style="border-left-color:red"></div>
                </div>
            </div>
            <p>Mohon menunggu...</p>
        </div>
    </div>
</div>
</div>
@endsection