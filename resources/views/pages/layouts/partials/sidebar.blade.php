<style>
    .aktif {
        background-color: rgba(63,135,245,0.15);
    }
</style>

<div class="side-nav">
    <div class="side-nav-inner">
        <ul class="side-nav-menu scrollable">
            <li class="nav-item {{ Request::segment(2) == "dashboard" ? 'aktif' : '' }} ">
                <a href="{{ url('/admin/dashboard') }}">
                    <span class="icon-holder">
                        <i class="anticon anticon-dashboard"></i>
                    </span>
                    <span class="title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item {{ Request::segment(2) == "tagar" ? 'aktif' : '' }}">
                <a href="{{ url('/admin/tagar') }}">
                    <span class="icon-holder">
                        <i class="anticon anticon-dashboard"></i>
                    </span>
                    <span class="title">Tagar</span>
                </a>
            </li>
            <li class="nav-item {{ Request::segment(2) == "postingan" ? 'aktif' : '' }} ">
                <a href="{{ url('/admin/postingan') }}">
                    <span class="icon-holder">
                        <i class="anticon anticon-dashboard"></i>
                    </span>
                    <span class="title">Postingan</span>
                </a>
            </li>
            <li class="nav-item {{ Request::segment(2) == "suka" ? 'aktif' : '' }} ">
                <a href="{{ url('/admin/suka') }}">
                    <span class="icon-holder">
                        <i class="anticon anticon-dashboard"></i>
                    </span>
                    <span class="title">Menyukai Postingan</span>
                </a>
            </li>
            <li class="nav-item {{ Request::segment(2) == "komentar" ? 'aktif' : '' }} ">
                <a href="{{ url('/admin/komentar') }}">
                    <span class="icon-holder">
                        <i class="anticon anticon-dashboard"></i>
                    </span>
                    <span class="title">Komentar</span>
                </a>
            </li>
            <li class="nav-item dropdown {{ Request::segment(2) == "akun" ? 'open' : '' }} ">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="anticon anticon-appstore"></i>
                    </span>
                    <span class="title">Akun</span>
                    <span class="arrow">
                        <i class="arrow-icon"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li class="{{ Request::segment(3) == "profil" ? 'aktif' : '' }}">
                        <a href="{{ url('/admin/akun/profil') }}">
                            Profil Saya
                        </a>
                    </li>
                    <li class="{{ Request::segment(3) == "pegawai" ? 'aktif' : '' }}">
                        <a href="{{ url('/admin/akun/pegawai') }}">
                            Data Pegawai
                        </a>
                    </li>
                    <li class="{{ Request::segment(3) == "admin" ? 'aktif' : '' }}">
                        <a href="{{ url('/admin/akun/admin') }}">
                            Data Admin
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
