@extends('layout.layout')

@section('content')
<!-- Main content -->
<div class="content-wrapper">

    <!-- Page header -->
    <div class="page-header">
            <div class="page-header page-header-light">
    <div class="page-header-content header-elements-md-inline">
        <div class="page-title d-flex">
            <h4><span class="font-weight-semibold">Kampus Merdeka</span> - Daftar Program Outbound</h4>
        </div>
    </div>
</div>
    </div>
    <!-- /page header -->


    <!-- Content area -->
    <div class="content">
        
<div class="card">
    <div class="card-header header-elements-inline">
        <h5 class="card-title">Daftar Program Outbound</h5>
        <div class="header-elements">
            <a href="javascript:void(0)" data-toggle="modal" data-backdrop="static" data-keyboard="false" data-target="#modal_add" class="btn btn-primary"><i class="icon-plus2"></i> Mendaftar Program</a>
        </div>
    </div>

    <table class="table datatable-basic" id="table_data">
        <thead>
        <tr>
            <th>No.</th>
            <th>Tahun Akademik</th>
            <th>Program</th>
            <th>Status</th>
            <th>Aksi</th>
        </tr>
        </thead>
        <tbody>
                        </tbody>
    </table>
</div>

<form method="POST" action="#" accept-charset="UTF-8" id="form-register"><input name="_token" type="hidden" value="dY4tDhoMUBcHGZ6ceRfXpBfjbmHIaJ54XvDkQZZ6">

<!-- Modal -->
<div class="modal fade" id="modal_add" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Pendaftaran Program</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>

            <div class="modal-body">

                <div class="row">
                    <div class="col-md-4">
                        <div class="text-center">
                            <img src="https://siakng.undiksha.ac.id/assets/images/student-exchange.svg" style="width: 200px"/>
                        </div>
                    </div>
                    <div class="col-md-8 form-horizontal">

                        <div class="alert alert-success border-0">
                            Pilih program dan masukan tahun semester untuk mendaftar ke Program Transfer.
                        </div>


                        <div class="form-group row">
                            <label class="col-form-label col-md-3">Pilih Nama Program</label>
                            <div class="col-md-9">
                                <select class="form-control select2" required name="id_mhs_transfer_program"><option selected="selected" value="">Pilih salah satu</option><option value="1">PSA - Permata Sakti</option><option value="2">MTK - Mahasiswa Transfer Kredit</option><option value="3">ICT - International Credit Transfer</option><option value="4">PMS - Pertukaran Mahasiswa</option><option value="5">KMI - Program Kredensial Mikro Mahasiswa Indonesia</option><option value="6">IPD - Inovasi Pembelajaran Digital</option><option value="7">PCT - Practice Teaching</option><option value="10">PMM - Pertukaran Mahasiswa Merdeka</option><option value="11">PTK - Permata LPTK</option><option value="12">WMK - Program Wirausaha Merdeka</option><option value="13">DDS - Darmasiswa</option></select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-md-3">Tahun Ajar</label>
                            <div class="col-md-9">
                                <select class="form-control select2" required name="tahun_ajar"><option value="">Pilih salah satu</option><option value="20181">Ganjil, 2018/2019</option><option value="20182">Genap, 2018/2020</option><option value="20191">Ganjil, 2019/2020</option><option value="20192">Genap, 2019/2021</option><option value="20201">Ganjil, 2020/2021</option><option value="20202">Genap, 2020/2022</option><option value="20211">Ganjil, 2021/2022</option><option value="20212">Genap, 2021/2023</option><option value="20221">Ganjil, 2022/2023</option><option value="20222">Genap, 2022/2024</option><option value="20231">Ganjil, 2023/2024</option><option value="20232" selected="selected">Genap, 2023/2025</option><option value="20241">Ganjil, 2024/2025</option><option value="20242">Genap, 2024/2026</option></select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-form-label col-md-3">Lama Program</label>
                            <div class="col-md-9">
                                <select class="form-control select2" required readonly name="lama_program"><option value="">Pilih salah satu</option><option value="1" selected="selected">1 Semester</option></select>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary">Daftar</button>
            </div>
        </div>
    </div>
</div>
</form>


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