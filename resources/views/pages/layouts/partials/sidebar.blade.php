<div class="side-nav">
    <div class="side-nav-inner">
        <ul class="side-nav-menu scrollable">
            <li class="nav-item dropdown open">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="anticon anticon-dashboard"></i>
                    </span>
                    <span class="title">Home</span>
                    <span class="arrow">
                        <i class="arrow-icon"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li class="active">
                        <a href="{{ url('/admin/dashboard') }}">Dashboard</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item">
                <a href="{{ url('/admin/tagar') }}">
                    <span class="icon-holder">
                        <i class="anticon anticon-dashboard"></i>
                    </span>
                    <span class="title">Tagar</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/admin/postingan') }}">
                    <span class="icon-holder">
                        <i class="anticon anticon-dashboard"></i>
                    </span>
                    <span class="title">Postingan</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/admin/suka') }}">
                    <span class="icon-holder">
                        <i class="anticon anticon-dashboard"></i>
                    </span>
                    <span class="title">Menyukai Postingan</span>
                </a>
            </li>
            <li class="nav-item">
                <a href="{{ url('/admin/komentar') }}">
                    <span class="icon-holder">
                        <i class="anticon anticon-dashboard"></i>
                    </span>
                    <span class="title">Komentar</span>
                </a>
            </li>
            <li class="nav-item dropdown">
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
                    <li>
                        <a href="{{ url('/admin/akun/profil') }}">
                            Profil Saya
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/akun/pegawai') }}">
                            Data Pegawai
                        </a>
                    </li>
                    <li>
                        <a href="{{ url('/admin/akun/admin') }}">
                            Data Admin
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</div>
