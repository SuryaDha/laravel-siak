@extends('layout.layout')

@section('content')
<!-- Main content -->
<div class="content-wrapper">

    <!-- Page header -->
    <div class="page-header">
            <div class="page-header page-header-light">
    <div class="page-header-content header-elements-md-inline">
        <div class="page-title d-flex">
            <h4><span class="font-weight-semibold">Kartu Rencana Studi</span> - Menyusun</h4>
        </div>
        <div class="header-elements d-none">
            <div class="d-flex justify-content-center">
                <a href="#penawaran" class="btn btn-light"><i class="icon-arrow-down7"></i> Menyusun KRS</a>
            </div>
        </div>
    </div>
</div>
    </div>
    <!-- /page header -->


    <!-- Content area -->
    <div class="content">
        
<div class="card">
    <div class="card-body">
        <ol class="mb-0">
            <li>Anda dinyatakan <span style="color: red; ">AKTIF jika membayar SPP/UKT</span></li>
            <li>Anda <span style="color: red; ">AKTIF (membayar SPP/UKT) BERARTI ANDA WAJIB MENYUSUN KRS</span></li>
            <li><span style="color: red; ">Anda tidak menyusun KRS MAKA nilai tidak akan dimasukkan. Anda wajib mengulangnya pada semester selanjutnya.</span></li>
        </ol>
    </div>
</div>
<div class="card">
    <div class="card-body">
        <ol class="mb-0">
            <li>Anda harus mengetahui <span style="color: red; ">kurikulum</span> yang anda gunakan selama kuliah. Baca pedoman study masing-masing jurusan dan angkatan.</li>
            <li>Perhatikan baik-baik <span style="color: red; ">Kode Mata Kuliah, Nama Mata Kuliah, SKS dan Kelas</span> yang akan anda ambil.</li>
            <li>Jika matakuliah yang akan anda ambil <span style="color: red; ">tidak muncul</span>, silahkan tanyakan ke Pegawai Fakultas "Apakah matakuliah yang akan anda ambil ditawarkan atau tidak oleh jurusan masing-masing." Jika jurusan menawarkan matakuliah yang akan diambil, silahkan hubungi tim IT fakultas untuk menambahkan matakuliah penawaran baru.</li>
            <li><span style="color: red; ">Matakuliah kurang, Kelas Kurang, Kode dan Nama Mata Kuliah</span> berbeda dari seharusnya yang anda ambil, sebelum terjadi kesalahan lebih baik diskusikan ke jurusan. tanyakan ke UPTTIK untuk lebih jelasnya hal-hal yang ingin ditanyakan.</li>
            <li>Jika anda ingin mengulang matakuliah, berarti anda harus menggunakan <span style="color: red; ">Kode, Nama dan SKS</span> yang sama pada matakuliah yang akan anda ulang.</li>
        </ol>
    </div>
</div>

<h5 class="mb-0 font-weight-semibold" id="penawaran">
    Penawaran Matakuliah
</h5>

<div class="card mt-2">
    <div class="card-body">
        <h5 class="mb-0 text-danger">Penyusunan KRS untuk tahun 2023, semester Genap</h5>
                        <p class="text-danger">Anda akan melakukan penyusunan KRS untuk pengambilan matakuliah semester 8</p>
                </div>
</div>

<div class="alert alert-success alert-styled-left border-top-0 border-bottom-0 border-right-0 alert-dismissible mt-3">
    <button type="button" class="close" data-dismiss="alert"><span>×</span></button>
    <span class="font-weight-semibold">Status Pengisian data!</span> 
    <ol class="mb-0">
                        <li><span class="icon-checkmark3 text-success"></span> Biodata anda telah anda lengkapi;</li>
                        <li><span class="icon-checkmark3 text-success"></span> Pas foto terbaru anda telah diunggah;</li>
                        <li><span class="icon-checkmark3 text-success"></span> Tempat kuliah telah diisi;</li>
                        <li><span class="icon-checkmark3 text-success"></span> Data keluarga anda sudah dilengkapi;</li>
                        <li><span class="icon-checkmark3 text-success"></span> Surat pernyataan sudah diunggah;</li>
                </ol>
</div>

        <div class="alert alert-danger alert-styled-left border-top-0 border-bottom-0 border-right-0 alert-dismissible mt-3">
        <button type="button" class="close" data-dismiss="alert"><span>×</span></button>
        <span class="font-weight-semibold">Maaf!</span> Periode KRS untuk semester ini belum dimulai atau sudah berakhir.</span>
    </div>


        <form method="POST" action="https://siakng.undiksha.ac.id/mahasiswa/krs/mencetak" accept-charset="UTF-8" id="form_cetak" class="form-horizontal"><input name="_token" type="hidden" value="dY4tDhoMUBcHGZ6ceRfXpBfjbmHIaJ54XvDkQZZ6">
        <input type="hidden" name="id_krs" value="647292" />
    </form>


<div class="modal" tabindex="-1" id="infoMatkulModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bg-primary">
                <h6 class="modal-title">Informasi Matakuliah</h6>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body-target">
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