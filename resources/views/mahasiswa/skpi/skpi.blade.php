@extends('layout.layout')

@section('content')
<!-- Main content -->
<div class="content-wrapper">

    <!-- Page header -->
    <div class="page-header">
            <div class="page-header page-header-light">
    <div class="page-header-content header-elements-md-inline">
        <div class="page-title d-flex">
            <h4><span class="font-weight-semibold">SKPI</span> - Data Prestasi</h4>
        </div>
    </div>
</div>
    </div>
    <!-- /page header -->


    <!-- Content area -->
    <div class="content">
        
<div class="card">
    <div class="card-header header-elements-inline">
        <h5 class="card-title">Daftar Prestasi</h5>
        <div class="header-elements">
            <a href="#" class="btn btn-primary mr-2"><i class="icon-plus2"></i> Tambah Prestasi</a>
            <a target="_blank" href="#" class="btn btn-success">Lihat SKPI</a>
        </div>
    </div>

    <div class="card-body">
        <div class="alert alert-info alert-styled-left alert-dismissible" style="background: #FFF">
            <button type="button" class="close" data-dismiss="alert"><span>×</span></button>
            <span class="font-weight-semibold">Petunjuk!</span><br/>
            <ol class="mb-0 pl-3">
                <li>Silahkan masukan data SKPI anda dengan benar</li>
                <li>Setelah diinput, kirim SKPI anda menggunakan tombol <a href="javascript:void(0)" class="btn alpha-primary text-primary-800 btn-icon btn-sm">Kirim Untuk Validasi</a> agar dapat divalidasi oleh Fakultas</li>
                <li>Apabila telah divalidasi, anda dapat menandai Prestasi tersebut untuk masuk ke dalam berkas SKPI dengan menggunakan tombol <a href="javascript:void(0)" class="btn alpha-success text-success-800 btn-icon btn-sm">Set Berkas SKPI</a>.</li>
                <li>Tiap-tiap <b>Kualifikasi Prestasi</b> anda hanya bisa menandai masing-masing 1, sehingga maksimal yang dapat tampil pada berkas SKPI anda hanya 5 prestasi.</li>
            </ol>
        </div>
    </div>

    <table class="table datatable-basic" id="table_data">
        <thead>
        <tr>
            <th>Nama Kegiatan</th>
            <th>Kualifikasi Prestasi</th>
            <th>Status Validasi</th>
            <th>Status SKPI</th>
            <th>Aksi SKPI</th>
            <th>Aksi Data</th>
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