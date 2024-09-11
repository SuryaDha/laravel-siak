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
            <a href="#" class="nav-link"><i class="icon-users2"></i> <span>Akademik Mahasiswa</span></a>
            <ul class="nav nav-group-sub" data-submenu-title="Biodata Mahasiswa">
                <li class="nav-item"><a href="{{ route('proses_pembelajaran') }}" class="nav-link ">Persiapan Proses Pembelajaran</a></li>
                                    <li class="nav-item"><a href="{{ route('peserta_kuliah') }}" class="nav-link ">Daftar Peserta Kuliah</a></li>
                                <li class="nav-item"><a href="{{ route('pa') }}" class="nav-link ">Pembimbing Akademik</a></li>
                                <li class="nav-item nav-item-submenu ">
                                    <a href="#" class="nav-link"><span>Akademik Mahasiswa</span></a>
                                    <ul class="nav nav-group-sub" data-submenu-title="Biodata Mahasiswa">
                                        <li class="nav-item"><a href="{{ route('masukan') }}" class="nav-link ">Masukkan Agenda Mengajar</a></li>
                                        <li class="nav-item"><a href="{{ route('kehadiran') }}" class="nav-link ">Persentase Kehadiran</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item"><a href="{{ route('nilai') }}" class="nav-link ">Nilai Mahasiswa</a></li>
                                <li class="nav-item"><a href="{{ route('dpna') }}" class="nav-link ">Riwayat DPNA</a></li>
                                <li class="nav-item"><a href="{{ route('kritik_saran')}}" class="nav-link ">Kritik & Saran Dosen</a></li>
                                <li class="nav-item"><a href="{{ route('angket')}}" class="nav-link ">Angket Mahasiswa</a></li>
            </ul>
        </li>

        <li class="nav-item nav-item-submenu ">
            <a href="#" class="nav-link"><i class="icon-calendar"></i> <span>Jadwal Kuliah</span></a>
            <ul class="nav nav-group-sub" data-submenu-title="Jadwal Kuliah">
                <li class="nav-item"><a href="{{ route('kalender')}}" class="nav-link ">Kalender Kuliah</a></li>
                <li class="nav-item"><a href="{{ route('jadwal_dosen')}}" class="nav-link ">Jadwal Dosen</a></li>
            </ul>
        </li>

    
        <li class="nav-item nav-item-submenu ">
            <a href="#" class="nav-link"><i class="icon-flag7"></i> <span>Kampus Merdeka</span></a>
            <ul class="nav nav-group-sub" data-submenu-title="Kampus Merdeka">
                <li class="nav-item"><a href="{{ route('inbound')}}" class="nav-link ">Validasi Pengambilan Inbound</a></li>
                <li class="nav-item"><a href="{{ route('outbound')}}" class="nav-link ">Validasi Pengambilan Outbound</a></li>
                <li class="nav-item"><a href="{{ route('mbkm')}}" class="nav-link ">Program MBKM</a></li>
            </ul>
        </li>
        

            <li class="nav-item nav-item-submenu ">
                <a href="#" class="nav-link"><i class="icon-book3"></i> <span>Karya Akhir</span></a>
                <ul class="nav nav-group-sub" data-submenu-title="Karya Akhir">
                    <li class="nav-item"><a href="{{ route('infografik')}}" class="nav-link ">Info Grafik<span class="badge bg-success">Info Grafik</span></a></li>
                    <li class="nav-item"><a href="{{ route('penawaran')}}" class="nav-link ">Penawaran Topik</a></li>
                    <li class="nav-item"><a href="{{ route('pengajuan')}}" class="nav-link ">Pengajuan Topik</a></li>
                    <li class="nav-item"><a href="{{ route('pembimbing')}}" class="nav-link ">Sebagai Pembimbing</a></li>
                    <li class="nav-item"><a href="{{ route('penguji')}}" class="nav-link ">Sebagai Penguji</a></li>
                    <li class="nav-item"><a href="{{ route('laporan_akhir')}}" class="nav-link ">Laporan Akhir</a></li>
                    <li class="nav-item"><a href="{{ route('similarity')}}" class="nav-link ">File Similarity</a></li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="{{ route('profesi')}}" class="nav-link ">
                    <i class="icon-stack2"></i>
                    <span>
                        Profesi Kedokteran                    </span>
                </a>
            </li>
        









    </ul>
</div>
                        <!-- /main navigation -->

        </div>
        <!-- /sidebar content -->

    </div>
    <!-- /main sidebar -->