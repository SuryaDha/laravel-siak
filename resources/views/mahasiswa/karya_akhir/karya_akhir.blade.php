@extends('layout.layout')

@section('content')
<!-- Main content -->
<div class="content-wrapper">

    <!-- Page header -->
    <div class="page-header">
        
<style>
    #progressbar {
        margin-bottom: 30px;
        color: lightgrey;
    }

    #progressbar .active {
        color: #2196f3;
    }

    #progressbar li {
        text-align: center;
        list-style-type: none;
        font-size: 15px;
        width: 20%;
        float: left;
        position: relative;
        font-weight: 400;
    }

    #progressbar li a{
        text-decoration: none;
        color: lightgray;
    }

    #progressbar li.active a{
        text-decoration: none;
        color: #2196f3;
    }

    #progressbar .icon {
        width: 50px;
        height: 50px;
        line-height: 45px;
        display: block;
        font-size: 20px;
        color: #ffffff;
        background: lightgray;
        border-radius: 50%;
        margin: 0 auto 10px auto;
        padding: 2px;
        z-index: 10;
    }

    /*ProgressBar connectors*/
    #progressbar li:after {
        content: '';
        width: 100%;
        height: 2px;
        background: lightgray;
        position: absolute;
        left: 0;
        top: 25px;
        /* z-index: -1; */
    }

    #progressbar li.active:before, #progressbar li.active:after, #progressbar li.active .icon {
        background: #2196f3;
    }

</style>

<div class="page-header page-header-light">
    <div class="page-header-content header-elements-md-inline">
        <div class="page-title d-flex">
            <h4><span class="font-weight-semibold">Karya Akhir</span> - Timeline Karya Akhir</h4>
        </div>
    </div>
</div>
    </div>
    <!-- /page header -->


    <!-- Content area -->
    <div class="content">
        

<div class="card">
    <div class="card-header">

        <h5 class="card-title">
                                Tahapan Proposal
                        </h5>
    </div>
    <div class="card-body text-center">
        <ul id="progressbar">
            <li class="active">
                <a href="https://siakng.undiksha.ac.id/mahasiswa/karya-akhir/detail">
                    <i class="icon icon-file-plus"></i>
                    <strong>Pengajuan Judul</strong>
                </a>
            </li>

            <li
                                        class="active"
                                >
                <i class="icon icon-pencil7"></i>
                <strong>Bimbingan</strong>
            </li>
            <li
                                        class="active"
                                >
                <i class="icon icon-reading"></i>
                <strong>Ujian</strong>
            </li>
            <li
                                    >
                <i class="icon icon-pencil6"></i>
                <strong>Revisi</strong>
            </li>

            
        </ul>

    </div>
</div>



<div class="card">
<a href="https://siakng.undiksha.ac.id/assets/images/info-grafik-skripsi.jpg" target="_blank" id="image_info" ><img src="https://siakng.undiksha.ac.id/assets/images/info-grafik-skripsi.jpg" style="width: 100%" /></a>
<div class="card-footer">
    <a href="https://siakng.undiksha.ac.id/assets/images/info-grafik-skripsi.jpg" target="_blank" class="btn btn-primary">Unduh Infografik</a>
</div>
</div>


<div class="row">
    <div class="col-md-6">
        <div class="alert alert-success alert-styled-left border-top-0 border-bottom-0 border-right-0 alert-dismissible mb-0">
            <p class="font-weight-semibold">Karya Akhir!</span> Tahapan Karya Akhir Mahasiswa</p>
            <ol class="mb-0">
                <li>Mahasiswa setidaknya harus sudah mengambil 60 sks dengan status lulus.</li>
                <li>Mahasiswa mengajukan judul proposal. Dapat berupa usulan sendiri maupun usulan yang ditawarkan oleh Dosen.</li>
                <li>Ujian Proposal
                    <ol class="mb-0">
                        <li>Mahasiswa mengajukan Permintaan Ujian Proposal</li>
                        <li>Dosen Pembimbing akan memvalidasi apakah usulan proposal anda siap ujian</li>
                        <li>Apabila disetujui, jadwal akan segera diinformasikan</li>
                        <li>Setelah selesai ujian, mahasiswa melakukan revisi dan menggunggah file proposal final ke sistem</li>
                        <li>Setelah disetujui Pembimbing dan Penguji, anda akan masuk ke tahap Skripsi</li>
                    </ol>
                </li>
                <li>Ujian Skripsi
                    <ol class="mb-0">
                        <li>Mahasiswa mengajukan Permintaan Ujian Skripsi</li>
                        <li>Dosen Pembimbing akan memvalidasi apakah usulan Skripsi anda siap ujian</li>
                        <li>Apabila disetujui, jadwal akan segera diinformasikan</li>
                        <li>Setelah selesai ujian, mahasiswa melakukan revisi dan menggunggah file skripsi final ke sistem</li>
                    </ol>
                </li>
            </ol>
        </div>
    </div>

    <div class="col-md-6">

                        <div class="card">
                <div class="card-header header-elements-inline">
                    <h5 class="card-title">Detail Pengajuan Topik</h5>
                </div>
                <table class="table">
                    <tr>
                        <td style="vertical-align: top;">Status Judul</td>
                        <td style="vertical-align: top;">:</td>
                        <td style="vertical-align: top;">

                                                                                                        <span class="badge badge-primary">Judul Diterima</span>
                                                                                            </td>
                    </tr>
                    <tr>
                        <td>Tahapan</td>
                        <td>:</td>
                        <td><span class='badge bg-info'>Proposal</span> - Penilaian Ujian</td>
                    </tr>
                    <tr>
                        <td style="vertical-align: top">Status Keseluruhan</td>
                        <td style="vertical-align: top">:</td>
                        <td>
                                                                <span class="badge badge-info">On Proses</span>
                                                        </td>
                    </tr>
                    <tr>
                        <td style="width: 200px; vertical-align: top">Judul</td>
                        <td style="width: 5px; vertical-align: top">:</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>Metode Penelitian</td>
                        <td>:</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>Jenis Penelitian</td>
                        <td>:</td>
                        <td>-</td>
                    </tr>
                    <tr>
                        <td>Pembimbing Utama</td>
                        <td>:</td>
                        <td>-</td>
                    </tr>
                </table>
                <div class="card-footer">
                    <a href="#" class="btn btn-primary">Lihat Detail Pengajuan</a>
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