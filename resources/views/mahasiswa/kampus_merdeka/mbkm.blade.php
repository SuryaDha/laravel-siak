@extends('layout.layout')

@section('content')
<!-- Main content -->
<div class="content-wrapper">

    <!-- Page header -->
    <div class="page-header">
            <div class="page-header page-header-light">
    <div class="page-header-content header-elements-md-inline">
        <div class="page-title d-flex">
            <h4><span class="font-weight-semibold">Program MBKM</span> - Daftar Program</h4>
        </div>
    </div>
</div>
    </div>
    <!-- /page header -->


    <!-- Content area -->
    <div class="content">
        
<div class="card">
    <div class="card-header header-elements-inline">
        <h5 class="card-title">Daftar Program MBKM</h5>
    </div>
    <div class="card-body pb-0">
        <div class="alert alert-info alert-styled-left border-top-0 border-bottom-0 border-right-0 alert-dismissible">
            <button type="button" class="close" data-dismiss="alert"><span>×</span></button>
            <span class="font-weight-bold">Petunjuk!</span> Berikut merupakan daftar program MBKM aktif pada semester ini.
        </div>
    </div>

    <table class="table datatable-basic table-bordered" id="table_periode">
        <thead>
            <tr>
                <th>Tahun, Semester</th>
                <th>Jenis Program</th>
                <th>Level MBKM</th>
                <th>Keterangan</th>
                <th>Status Anda</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
        
                    </tbody>
    </table>
</div>

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