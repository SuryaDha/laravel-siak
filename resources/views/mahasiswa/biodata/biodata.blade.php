@extends('layout.layout')

@section('content')
<!-- Main content -->
<div class="content-wrapper">

    <!-- Page header -->
    <div class="page-header">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.12/cropper.min.css" integrity="sha512-0SPWAwpC/17yYyZ/4HSllgaK7/gg9OlVozq8K7rf3J8LvCjYEEIfzzpnA2/SSjpGIunCSD18r3UhvDcu/xncWA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<div class="page-header page-header-light">
    <div class="page-header-content header-elements-md-inline">
        <div class="page-title d-flex">
            <h4><span class="font-weight-semibold">Biodata</span> - Data Mahasiswa</h4>
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
                <h5 class="card-title">Data Mahasiswa</h5>
                <div class="header-elements">
                    <a href="#" class="btn bg-pink"><i class="icon-pencil7"></i> Ubah Profil</a>
                    <a href="#" class="btn btn-info ml-2"><i class="icon-printer"></i> Cetak Biodata</a>
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
                        {{ Auth::user()->name }} <br/>
                        <small class="text-grey-300">Pastikan nama sesuai Ijasah atau Akta kelahiran</small>
                    </td>
                </tr>
                <tr>
                    <td>Tempat Lahir, Tanggal Lahir</td>
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
                    <td>Agama</td>
                    <td>:</td>
                    <td>-</td>
                </tr>
                
                <tr>
                    <td>Nomor KTP</td>
                    <td>:</td>
                    <td>-</td>
                </tr>

                <tr>
                    <td>Fakultas</td>
                    <td>:</td>
                    <td>Fakultas Teknik dan Kejuruan</td>
                </tr>
                <tr>
                    <td>Jurusan/Prodi</td>
                    <td>:</td>
                    <td>Jurusan Teknik Informatika<br/>Pendidikan Teknik Informatika (PTI) (S1)</td>
                </tr>
                <tr>
                    <td>Telepon</td>
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

                <tr>
                    <td>Ayah</td>
                    <td>:</td>
                    <td>-</td>
                </tr>
                <tr>
                    <td>Ibu</td>
                    <td>:</td>
                    <td>-</td>
                </tr>

                                        <tr>
                        <td>Asal Sekolah</td>
                        <td>:</td>
                        <td>-</td>
                    </tr>
                                </table>
        </div>
    </div>
    <div class="col-md-6">
        <div class="card">

            <div class="card-body">
                <div class="text-center ">
                    <img src="..\..\..\..\global_assets\images\profil.jpg" id="sample_image" style="width: 50%;" />
                </div>

                <div class="text-center mt-2">
                    <div class="help-block text-danger">Gunakan foto dengan ukuran 2 banding 3 untuk keperluan Kartu Tanda Mahasiswa</div>
                </div>
            </div>

            <div class="card-footer">
                <form method="POST" action="#" accept-charset="UTF-8" id="form_photo" enctype="multipart/form-data"><input name="_method" type="hidden" value="PATCH"><input name="_token" type="hidden" value="dY4tDhoMUBcHGZ6ceRfXpBfjbmHIaJ54XvDkQZZ6">
                    <div class="row">
                        <label class="col-form-label col-md-3 text-right">Ganti Foto : </label>
                        <div class="col-md-6">
                            <input type="file" name="fileUpload" accept="image/*" required id="upload_image" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <button type="" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>
</div>

    </div>
    <!-- /content area -->
@endsection