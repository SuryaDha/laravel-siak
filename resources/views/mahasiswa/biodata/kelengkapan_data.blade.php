@extends('layout.layout')

@section('content')
<!-- Main content -->
<div class="content-wrapper">

    <!-- Page header -->
    <div class="page-header">
            <div class="page-header page-header-light">
    <div class="page-header-content header-elements-md-inline">
        <div class="page-title d-flex">
            <h4><span class="font-weight-semibold">Biodata</span> - Status Kelengkapan Data</h4>
        </div>
    </div>
</div>
    </div>
    <!-- /page header -->


    <!-- Content area -->
    <div class="content">
        
<div class="row">
    <div class="col-md-6">
        <div class="card">
            <div class="card-header header-elements-inline">
                <h5 class="card-title">Data Profil</h5>
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
                        {{ Auth::user()->name }} <br/>
                        <small class="text-grey-300">Pastikan nama sesuai Ijasah atau Akta kelahiran</small>
                    </td>
                </tr>
                <tr>
                    <td>Tempat, Tanggal Lahir</td>
                    <td>:</td>
                    <td>
                        -<br/>
                        <small class="text-grey-300">Pastikan tempat dan tanggal sesuai Ijasah atau Akta kelahiran</small>
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
                    <td>- <br>
                        <small class="text-grey-300">Pastikan NIK sudah benar dan  terdiri atas 16 digit</small>
                    </td>
                </tr>
                <tr>
                    <td>No. Telp/Hp</td>
                    <td>:</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Tempat Kuliah</td>
                    <td>:</td>
                    <td>Singaraja</td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Alamat Orangtua</td>
                    <td>:</td>
                    <td>-</td>
                </tr>
            </table>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-body">
                <div class="alert alert-info border-top-0 border-bottom-0 border-right-0 alert-styled-left">
                    <strong>Informasi!</strong> Anda berhasil melengkapi keseluruhan data yang diperlukan untuk dapat menggunakan fitur di SIAKNG.
                </div>
                <div class="alert alert-success alert-styled-left border-top-0 border-bottom-0 border-right-0 alert-dismissible mt-3">
                    <button type="button" class="close" data-dismiss="alert"><span>×</span></button>
                    <span class="font-weight-semibold">Status Pengisian data!</span>
                    <ol class="mb-0">
                                                        <li><span class="icon-checkmark3 text-success"></span> Biodata anda telah anda lengkapi</li>
                                                        <li><span class="icon-checkmark3 text-success"></span> Pas foto terbaru anda telah diunggah</li>
                                                        <li><span class="icon-checkmark3 text-success"></span> Tempat kuliah telah diisi</li>
                                                        <li><span class="icon-checkmark3 text-success"></span> Data ayah telah terisi</li>
                                                        <li><span class="icon-checkmark3 text-success"></span> Data ibu telah terisi</li>
                                                </ol>
                </div>
            </div>
        </div>

        <div class="alert alert-warning border-top-0 border-bottom-0 border-right-0 alert-styled-left">
            <strong>PENTING!</strong> Pastikan data yang Anda inputkan sudah sesuai, jika dikemudian hari ditemukan kesalahan data, maka bukan menjadi tanggung jawab Universitas Pendidikan Ganesha
        </div>
        <a href="#" class="btn btn-primary" target="_blank">Unduh Format Surat Pernyataan</a>

                    <a href="#" class="btn btn-info" target="_blank">Unduh Surat Pernyataan Saya</a>
        
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