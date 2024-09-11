@extends('dosen.layout.layout')

@section('content')
    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Page header -->
        <div class="page-header">
                <div class="page-header page-header-light">
        <div class="page-header-content header-elements-md-inline">
            <div class="page-title d-flex">
                <h4><span class="font-weight-semibold">Laporan Akhir Mahasiswa</span></h4>
            </div>
        </div>
    </div>
        </div>
        <!-- /page header -->


        <!-- Content area -->
        <div class="content">

    <div class="card" id="target_tb">
        <table class="table datatable-basic" id="table_dt">
            <thead>
            <tr>
                <th>NIM</th>
                <th>Nama Lengkap</th>
                <th>Judul</th>
                <th>Prodi</th>
                <th>Status</th>
                <th class="text-center">Aksi</th>
            </tr>
            </thead>
            <tbody>
                        </tbody>
        </table>
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