<!-- Page content -->
<div class="page-content">

    <!-- Main sidebar -->
    <div class="sidebar sidebar-dark sidebar-main sidebar-fixed sidebar-expand-md ">

        <!-- Sidebar mobile toggler -->
        <div class="sidebar-mobile-toggler text-center">
            <a href="#" class="sidebar-mobile-main-toggle">
                <i class="icon-arrow-left8"></i>
            </a>
            Navigation
            <a href="#" class="sidebar-mobile-expand">
                <i class="icon-screen-full"></i>
                <i class="icon-screen-normal"></i>
            </a>
        </div>
        <!-- /sidebar mobile toggler -->


        <!-- Sidebar content -->
        <div class="sidebar-content">
            <div class="sidebar-user-material">
                <div class="sidebar-user-material-body">
                    <div class="card-body">
                        <div class="media">
                            <div class="mr-3">
                                <a href="#"><img src="..\..\..\..\global_assets\images\profil.jpg" width="38" height="38" class="rounded-circle" alt="" style="object-fit: cover"></a>
                            </div>

                            <div class="media-body">
                                <div class="media-title font-weight-semibold">{{ Auth::user()->name }}</div>
                                <div class="font-size-xs opacity-50">
                                    {{ Auth::user()->role }}
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <!-- Main navigation -->
            <div class="card card-sidebar-mobile">
                <ul class="nav nav-sidebar" data-nav-type="accordion">

                <!-- Main -->
                <li class="nav-item-header"><div class="text-uppercase font-size-xs line-height-xs">Main</div> <i class="icon-menu" title="Main"></i></li>
                <li class="nav-item">
                    <a href="/" class="nav-link active">
                        <i class="icon-home4"></i>
                        <span>
                            Dashboard               
                        </span>
                    </a>
                </li>
        <li class="nav-item nav-item-submenu ">
            <a href="#" class="nav-link"><i class="icon-user"></i> <span>Biodata</span></a>
            <ul class="nav nav-group-sub" data-submenu-title="Biodata Mahasiswa">
                <li class="nav-item"><a href="{{ route('biodata') }}" class="nav-link ">Biodata</a></li>
                                    <li class="nav-item"><a href="/data_keluarga" class="nav-link ">Data Keluarga</a></li>
                                <li class="nav-item"><a href="/kelengkapan_data" class="nav-link ">Cek Kelengkapan Data</a></li>
            </ul>
        </li>

        <li class="nav-item nav-item-submenu ">
            <a href="#" class="nav-link"><i class="icon-bookmark4"></i> <span>Kartu Rencana Studi</span></a>
            <ul class="nav nav-group-sub" data-submenu-title="Kartu Rencana Studi">
                <li class="nav-item"><a href="/susun_krs" class="nav-link ">Menyusun KRS</a></li>
                                <li class="nav-item"><a href="/cetak_krs" class="nav-link ">Mencetak KRS</a></li>
            </ul>
        </li>

        <li class="nav-item nav-item-submenu ">
            <a href="#" class="nav-link"><i class="icon-calendar"></i> <span>Jadwal Kuliah</span></a>
            <ul class="nav nav-group-sub" data-submenu-title="Jadwal Kuliah">
                <li class="nav-item"><a href="/jadwal_dosen" class="nav-link ">Jadwal Dosen</a></li>
            </ul>
        </li>

        
            <li class="nav-item ">
                <a href="/agenda_mengajar" class="nav-link "><i class="icon-file-check2"></i> <span>Validasi Agenda Mengajar</span></a>
            </li>
        

        <li class="nav-item nav-item-submenu ">
            <a href="#" class="nav-link"><i class="icon-credit-card"></i> <span>Kartu Hasil Studi</span></a>
            <ul class="nav nav-group-sub" data-submenu-title="Kartu Hasil Studi">
                <li class="nav-item"><a href="/nilai" class="nav-link ">Nilai Mahasiswa</a></li>
                <li class="nav-item"><a href="/angket_dosen" class="nav-link ">Evaluasi Angket Dosen</a></li>
                
                <li class="nav-item"><a href="/cetak_khs" class="nav-link ">Mencetak KHS</a></li>
                                    <li class="nav-item"><a href="/cetak_kdn" class="nav-link ">Kutipan Daftar Nilai</a></li>
                            </ul>
        </li>
        

            <li class="nav-item nav-item-submenu ">
                <a href="#" class="nav-link"><i class="icon-book3"></i> <span>Karya Akhir</span></a>
                <ul class="nav nav-group-sub" data-submenu-title="Karya Akhir">
                    <li class="nav-item"><a href="/karya_akhir" class="nav-link ">Pengajuan Karya</a></li>
                    <li class="nav-item"><a href="/laporan_akhir" class="nav-link ">Laporan Akhir</a></li>
                </ul>
            </li>


            <li class="nav-item nav-item-submenu ">
                <a href="#" class="nav-link"><i class="icon-graduation2"></i> <span>Yudisium & Wisuda</span></a>
                <ul class="nav nav-group-sub" data-submenu-title="Wisuda">
                    <li class="nav-item"><a href="/yudisium" class="nav-link ">Pendaftaran Yudisium</a></li>
                    <li class="nav-item"><a href="/wisuda" class="nav-link ">Pendaftaran Wisuda</a></li>
                </ul>
            </li>

            <li class="nav-item nav-item-submenu ">
                <a href="#" class="nav-link"><i class="icon-flag7"></i> <span>Kampus Merdeka</span></a>
                <ul class="nav nav-group-sub" data-submenu-title="Kampus Merdeka">
                    <li class="nav-item"><a href="/outbound" class="nav-link ">Program Outbound</a></li>
                    <li class="nav-item"><a href="/mbkm" class="nav-link ">MBKM</a></li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="/skpi" class="nav-link ">
                    <i class="icon-trophy2"></i>
                    <span>
                        Data SKPI                    </span>
                </a>
            </li>
        









    </ul>
</div>
                        <!-- /main navigation -->

        </div>
        <!-- /sidebar content -->

    </div>
    <!-- /main sidebar -->