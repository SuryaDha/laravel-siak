@extends('layout.layout')

@section('content')
<!-- Main content -->
<div class="content-wrapper">

    <!-- Page header -->
    <div class="page-header">
            <div class="page-header page-header-light">
    <div class="page-header-content header-elements-md-inline">
        <div class="page-title d-flex">
            <h4><span class="font-weight-semibold">Kartu Hasil Studi</span> - Statistik Nilai Mahasiswa</h4>
        </div>
    </div>
</div>
    </div>
    <!-- /page header -->


    <!-- Content area -->
    <div class="content">
        
<div class="card">
    <div class="card-body">
        <div class="alert alert-info alert-styled-left border-top-0 border-bottom-0 border-right-0 alert-dismissible">
            <button type="button" class="close" data-dismiss="alert"><span>×</span></button>
            <span class="font-weight-semibold">Petunjuk!</span><br/>
            <ol class="mb-0 pl-3">
                <li>Pilih tahun akademik yang ingin anda lihat lalu tekan tombol Lihat Nilai.</li>
            </ol>
        </div>

        <form method="POST" action="#" accept-charset="UTF-8" id="form_lihat" class="form-horizontal"><input name="_token" type="hidden" value="dY4tDhoMUBcHGZ6ceRfXpBfjbmHIaJ54XvDkQZZ6">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <label class="col-form-label col-md-4">Pilih Semester</label>
                        <div class="col-md-8">
                            <select name="id_krs" class="form-control" required>
                                                                        <option value="12097"  >Semester Ganjil, 2020/2021</option>
                                                                        <option value="14295"  >Semester Genap, 2020/2021</option>
                                                                        <option value="26871"  >Semester Ganjil, 2021/2022</option>
                                                                        <option value="36191"  >Semester Genap, 2021/2022</option>
                                                                        <option value="43168"  >Semester Ganjil, 2022/2023</option>
                                                                        <option value="56884"  >Semester Genap, 2022/2023</option>
                                                                        <option value="494940"  >Semester Ganjil, 2023/2024</option>
                                                                        <option value="647292" selected >Semester Genap, 2023/2024</option>
                                                                </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <button type="submit" class="btn bg-blue-300 btn-labeled btn-labeled-left"><b><i class="icon-eye"></i></b> Lihat Nilai</button>
                </div>
            </div>
        </form>

    </div>
</div>

<div class="row">
    <div class="col-md-12" id="target_list"></div>
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