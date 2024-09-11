@extends('dosen.layout.layout')

@section('content')
    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Page header -->
        <div class="page-header">
                <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><span class="font-weight-semibold">Dashboard</span></h4>
            </div>
        </div>
    </div>
        </div>
        <!-- /page header -->


        <!-- Content area -->
        <div class="content">
            


    <div class="row">

        <div class="col-md-4">

            <a href="/susun_krs">
                <div class="card card-body">
                    <div class="media">
                        <div class="media-body">
                            <h6 class="media-title font-weight-semibold text-dark">Menyusun KRS</h6>
                            <span class="text-muted">Menyusun KRS semester aktif</span>
                        </div>

                        <div class="ml-3 align-self-center">
                            <i class="icon-file-check icon-2x text-teal-300"></i>
                        </div>
                    </div>
                </div>
            </a>

        </div>
        <div class="col-md-4">
            <a href="/cetak_krs">
                <div class="card card-body">
                    <div class="media">
                        <div class="media-body">
                            <h6 class="media-title font-weight-semibold text-dark">Mencetak KRS</h6>
                            <span class="text-muted">Mencetak KRS sesuai semester</span>
                        </div>

                        <div class="ml-3 align-self-center">
                            <i class="icon-printer icon-2x text-blue-300"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-4">
            <a href="javascript:void(0)" onclick="loadDaftarKuliah()" >
                <div class="card card-body">
                    <div class="media">
                        <div class="media-body">
                            <h6 class="media-title font-weight-semibold text-dark">Jadwal Kuliah</h6>
                            <span class="text-muted">Jadwal perkuliahan semester aktif</span>
                        </div>

                        <div class="ml-3 align-self-center">
                            <i class="icon-calendar icon-2x text-green-300"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        {{-- <div class="col-md-3">
            <a href="javascript:void(0)" data-toggle="modal" data-target="#modalPetunjuk" >
                <div class="card card-body">
                    <div class="media">
                        <div class="media-body">
                            <h6 class="media-title font-weight-semibold text-dark">Petunjuk</h6>
                            <span class="text-muted">Petunjuk perbaikan nama mahasiswa</span>
                        </div>
                        <div class="ml-3 align-self-center">
                            <i class="icon-info22 icon-2x text-pink-300"></i>
                        </div>
                    </div>
                </div>
            </a>
        </div> --}}
    </div>

    <div class="row">

        <div class="col-md-6">
            <div class="alert alert-info alert-styled-left border-top-0 border-bottom-0 border-right-0 alert-dismissible mb-3">
                <button type="button" class="close" data-dismiss="alert"><span>×</span></button>
                <span class="font-weight-bold">Informasi Pembayaran UKT!</span>
                <p>Untuk mencegah malfungsi pengecekan status mahasiswa aktif, <strong><b>pembayaran UKT mohon dilakukan hanya melalui layanan BRI</b></strong>. Pembayaran UKT dapat dilakukan di semua mitra BRI se-Indonesia. Bukti Pembayaran mohon disimpan dengan baik</p>
            </div>
        </div>
        <div class="col-md-6">
            
            <div class="card ">
                <div class="card-header">
                    <h6 class="card-title">Jadwal</h6>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <ul class="media-list">
                                <li class="media">
                                    <div class="mr-3">
                                        <a href="javascript:void(0)" class="btn bg-transparent border-pink text-pink rounded-round border-2 btn-icon"><i class="icon-file-check"></i></a>
                                    </div>
                                    <div class="media-body">
                                        0                                <div class="text-muted">Beban SKS</div>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="mr-3">
                                        <a href="javascript:void(0)" class="btn bg-transparent border-warning text-warning rounded-round border-2 btn-icon"><i class="icon-pen-plus"></i></a>
                                    </div>
                                    <div class="media-body">
                                        0                                <div class="text-muted">Mahasiswa Diampu</div>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="mr-3">
                                        <a href="javascript:void(0)" class="btn bg-transparent border-warning text-warning rounded-round border-2 btn-icon"><i class="icon-pen-plus"></i></a>
                                    </div>
                                    <div class="media-body">
                                        0                                <div class="text-muted">Belum Valid KRS</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col">
                            <ul class="media-list">
                                <li class="media">
                                    <div class="mr-3">
                                        <a href="javascript:void(0)" class="btn bg-transparent border-pink text-pink rounded-round border-2 btn-icon"><i class="icon-file-check"></i></a>
                                    </div>
                                    <div class="media-body">
                                        10                                <div class="text-muted">Jumlah Kelas Kuliah</div>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="mr-3">
                                        <a href="javascript:void(0)" class="btn bg-transparent border-warning text-warning rounded-round border-2 btn-icon"><i class="icon-pen-plus"></i></a>
                                    </div>
                                    <div class="media-body">
                                        0                               <div class="text-muted">Jumlah Bimbingan PA</div>
                                    </div>
                                </li>
                                <li class="media">
                                    <div class="mr-3">
                                        <a href="javascript:void(0)" class="btn bg-transparent border-warning text-warning rounded-round border-2 btn-icon"><i class="icon-pen-plus"></i></a>
                                    </div>
                                    <div class="media-body">
                                        0                                <div class="text-muted">Belum Menyusun KRS</div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                    

                </div>
            </div>
        </div>

    </div>


    <div id="modal_jadwal" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-full">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title">Jadwal</h6>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div>
                    <div id="modal_jadwal_content"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-link" data-dismiss="modal">Tutup</button>
                </div>
            </div>
        </div>
    </div>

    <div id="modalPetunjuk" class="modal fade" tabindex="-1">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h6 class="modal-title">Petunjuk</h6>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <h6 class="font-weight-semibold">Perbaikan Nama</h6>
                    <p>Apabila terjadi kesalahan penulisan nama mohon segera melakukan perbaikan agar tidak terjadi kesalahan saat pencetakan IJAZAH, AKTA atau TRANSKRIP MAHASISWA. Perbaikan nama dilakukan mahasiswa dengan cara berikut ini:</p>
                    <ol>
                        <li>Siapkan AKTA KELAHIRAN, IJAZAH SMA TERAKHIR atau KARTU KELUARGA</li>
                        <li>Semua berkas tersebut harus dilegaliris oleh pejabat berwenang.</li>
                        <li>Berkas tersebut ditaruh dalam sebuah MAP sesuai dengan warna fakultas masing-masing.</li>
                        <li>Pada bagian depan MAP, isikan NIM Mahasiswa dan kata "PERBAIKAN NAMA"</li>
                        <li>Kirim berkas tersebut ke Fakultas bagian kemahasiswaan, untuk dilakukan proses perubahan nama,</li>
                        <li>Atau apabila terjadi kendala, bawa map tersebut ke UPTTIK.</li>
                    </ol>
                    <p>Segera lakukan proses ini sebelum anda Yudisium.</p>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-link" data-dismiss="modal">Tutup</button>
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