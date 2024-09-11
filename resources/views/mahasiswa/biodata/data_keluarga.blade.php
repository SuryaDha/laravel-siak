@extends('layout.layout')

@section('content')
<!-- Main content -->
<div class="content-wrapper">

    <!-- Page header -->
    <div class="page-header">
            <div class="page-header page-header-light">
    <div class="page-header-content header-elements-md-inline">
        <div class="page-title d-flex">
            <h4><span class="font-weight-semibold">Keluarga</span> - Daftar Keluarga</h4>
        </div>
    </div>
</div>
    </div>
    <!-- /page header -->


    <!-- Content area -->
    <div class="content">
        
<div class="card">
    <div class="card-header header-elements-inline">
        <h5 class="card-title">Daftar Keluarga</h5>
        <div class="header-elements">
            <a href="#" class="btn btn-primary"><i class="icon-plus2"></i> Tambah Anggota</a>
        </div>
    </div>

    <table class="table datatable-basic" id="table_data">
        <thead>
        <tr>
            <th>Nama Keluarga</th>
            <th>NIK</th>
            <th>Hubungan Keluarga</th>
            <th>TTL</th>
            <th>Nomor Telp/Hp</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
                                <tr>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>-</td>
                    <td>
                        <a href="#" class="btn alpha-orange text-warning-800 btn-icon btn-sm">Edit</a>
                        <a href="javascript:void(0)" onclick="mainDeleteConfirm('')" class="btn alpha-danger text-danger-800 btn-icon btn-sm">Hapus</a>
                    </td>
                </tr>
            
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