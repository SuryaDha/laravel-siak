@extends('layout.layout')

@section('content')
<!-- Main content -->
<div class="content-wrapper">

    <!-- Page header -->
    <div class="page-header">
            <div class="page-header page-header-light">
    <div class="page-header-content header-elements-md-inline">
        <div class="page-title d-flex">
            <h4><span class="font-weight-semibold">Wisuda</span> - Pendataan Yudisium</h4>
        </div>
        <div class="header-elements">
            <div class="d-flex justify-content-center">
                <a href="/wisuda" class="btn btn-primary"><i class="icon-graduation2"></i>
                    Prosedur Wisuda</a>
            </div>
        </div>
    </div>
</div>
    </div>
    <!-- /page header -->


    <!-- Content area -->
    <div class="content">
            <div class="row">
    <div class="col-md-4">
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">Data Profil</h5>
            </div>
            <div class="card-body">
                <div class="text-center ">
                    <img src="..\..\..\..\global_assets\images\profil.jpg" style="width: 30%;" />
                </div>
            </div>
            <table class="table">
                <tr>
                    <td>NIM</td>
                    <td>:</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Nama Lengkap</td>
                    <td>:</td>
                    <td>
                        {{ Auth::user()->name }} <br />
                        <small class="text-grey-300">Pastikan nama sesuai Ijasah atau Akta kelahiran</small>
                    </td>
                </tr>
                <tr>
                    <td>Tempat, Tanggal Lahir</td>
                    <td>:</td>
                    <td>
                        -<br />
                        <small class="text-grey-300">Pastikan tempat dan tanggal sesuai Ijasah atau Akta
                            kelahiran</small>
                    </td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>No. KTP</td>
                    <td>:</td>
                    <td>-</td>
                </tr>
            </table>
        </div>
    </div>
    <div class="col-md-8">
                    <div class="card">
            <div class="card-body">
                <div class=" text-center">
                    <i
                        class="icon-cross icon-2x text-danger-400 border-warning-400 border-3 rounded-round p-3 mb-3 mt-1"></i>
                </div>
                <h5 class="card-title text-center">Pendataan Yudisium Belum
                    Dapat Dilakukan</h5>
                                    <div class="list-type2">
                    <ol>
                                                        <li><a href="#" class="danger">Belum menyelesaikan Karya Akhir</a></li>
                                                        <li><a href="#" class="danger">Belum melakukan pengecekan similiarity atau pengecekan belum selesai</a></li>
                                                        <li><a href="https://tracer-study.undiksha.ac.id/" target="_blank" class="danger">Klik untuk mengisi tracer study</a></li>
                                                        <li><a href="#" class="success">Tidak ada peminjaman buku di perpustakaan</a></li>
                                                        <li><a href="https://repo.undiksha.ac.id/" target="_blank" class="danger">Klik untuk mengunggah laporan akhir anda di Repositori Undiksha</a></li>
                                                        <li><a href="#" class="danger">Belum menyetor hardcopy laporan akhir ke Perpustakaan Undiksha</a></li>
                                                </ol>
                </div>
                                </div>
        </div>
    </div>
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