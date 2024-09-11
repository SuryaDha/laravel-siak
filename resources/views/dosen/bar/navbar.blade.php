<!-- Main navbar -->
<div class="navbar navbar-expand-md navbar-light fixed-top">

    <!-- Header with logos -->
    <div class="navbar-header navbar-dark d-none d-md-flex align-items-md-center">
        <div class="navbar-brand navbar-brand-md text-center ml-0" style="margin-right: 1.25rem;">
            <a href="javascript:void(0)" class="d-inline-block ">
                <img src="https://siakng.undiksha.ac.id/assets/images/logo_dark.svg" alt="">
            </a>
        </div>

        <div class="navbar-brand navbar-brand-xs">
            <a href="javascript:void(0)" class="d-inline-block">
                <img src="https://siakng.undiksha.ac.id/assets/images/logo.svg" alt="">
            </a>
        </div>
    </div>
    <!-- /header with logos -->

    <!-- Mobile controls -->
    <div class="d-flex flex-1 d-md-none">
        <div class="navbar-brand mr-auto">
            <a href="javascript:void(0)" class="d-inline-block">
                <img src="https://siakng.undiksha.ac.id/assets/images/logo_light.svg" alt="">
            </a>
        </div>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-mobile">
            <i class="icon-tree5"></i>
        </button>

        <button class="navbar-toggler sidebar-mobile-main-toggle" type="button">
            <i class="icon-paragraph-justify3"></i>
        </button>
    </div>
    <!-- /mobile controls -->


    <!-- Navbar content -->
    <div class="collapse navbar-collapse" id="navbar-mobile">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="#" class="navbar-nav-link sidebar-control sidebar-main-toggle d-none d-md-block">
                    <i class="icon-paragraph-justify3"></i>
                </a>
            </li>
        </ul>

        <span class="navbar-text ml-md-3 mr-md-auto">
                <span class="badge bg-pink badge-pill">
                    S1:2023,Genap
                </span>
                <span class="badge bg-pink badge-pill">
                    S2:2023,Genap
                </span>
                <span class="badge bg-pink badge-pill">
                    S3:2023,Genap
                </span>

        </span>

        <ul class="navbar-nav">
            
            
                                            <li class="nav-item dropdown dropdown-user">
                    <a href="javascript:void(0)" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
                        {{-- <img src="https://siakng.undiksha.ac.id/global_assets/images/lang/id.png" class="img-flag" style="margin-top: 10px;" />
                        <span>ID</span> --}}
                        <i class="icon-sort-time-desc" class="img-flag" style="margin-top: 10px;"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        {{-- <a href="/biodata" class="dropdown-item"><i class="icon-sort-time-desc"></i> Profile Saya</a> --}}
                        <a href="#" class="dropdown-item">
                            <img src="https://siakng.undiksha.ac.id/global_assets/images/lang/id.png" class="img-flag"/> Indonesia
                        </a>
                        <a href="#" class="dropdown-item">
                            <img src="https://siakng.undiksha.ac.id/global_assets/images/lang/en.png" class="img-flag"/> English
                        </a>
                    </div>
                </li>

            
            <li class="nav-item dropdown dropdown-user">
                <a href="javascript:void(0)" class="navbar-nav-link dropdown-toggle" data-toggle="dropdown">
                    <span>{{ Auth::user()->name }}</span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a href="/biodata" class="dropdown-item"><i class="icon-user-plus"></i> Profile Saya</a>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();" class="dropdown-item"><i class="icon-switch2"></i> Logout</a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                    </form>
                </div>
            </li>
        </ul>
    </div>
    <!-- /navbar content -->

</div>
<!-- /main navbar -->