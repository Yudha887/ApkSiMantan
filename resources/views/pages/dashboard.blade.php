@extends("pages.layouts.main")

@section("title", "Dashboard")

@section("page-content")

<div class="row">
    <div class="col-md-12">
        <div class="alert alert-success">
            <div class="d-flex justify-content-start">
                <span class="alert-icon m-r-20 font-size-30">
                    <i class="anticon anticon-check-circle"></i>
                </span>
                <div>
                    <h5 class="alert-heading">
                        Selamat Datang,
                        <strong>
                            {{ Auth::user()->name }}
                        </strong>
                    </h5>
                    <p>
                        Anda Login Sebagai
                        <strong>
                            {{ Auth::user()->role_id ? "Super Admin" : "Pegawai" }}
                        </strong>. Silahkan Pilih Menu Untuk Melanjutkan Program.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6 col-lg-3">
        <div class="card">
            <div class="card-body">
                <div class="media align-items-center">
                    <div class="avatar avatar-icon avatar-lg avatar-blue">
                        <i class="anticon anticon-dollar"></i>
                    </div>
                    <div class="m-l-15">
                        <h2 class="m-b-0">$23,523</h2>
                        <p class="m-b-0 text-muted">Profit</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div class="card">
            <div class="card-body">
                <div class="media align-items-center">
                    <div class="avatar avatar-icon avatar-lg avatar-cyan">
                        <i class="anticon anticon-line-chart"></i>
                    </div>
                    <div class="m-l-15">
                        <h2 class="m-b-0">+ 17.21%</h2>
                        <p class="m-b-0 text-muted">Growth</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div class="card">
            <div class="card-body">
                <div class="media align-items-center">
                    <div class="avatar avatar-icon avatar-lg avatar-gold">
                        <i class="anticon anticon-profile"></i>
                    </div>
                    <div class="m-l-15">
                        <h2 class="m-b-0">3,685</h2>
                        <p class="m-b-0 text-muted">Orders</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-3">
        <div class="card">
            <div class="card-body">
                <div class="media align-items-center">
                    <div class="avatar avatar-icon avatar-lg avatar-purple">
                        <i class="anticon anticon-user"></i>
                    </div>
                    <div class="m-l-15">
                        <h2 class="m-b-0">1,832</h2>
                        <p class="m-b-0 text-muted">Customers</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-body">
                <h4>Riwayat Login</h4>
                <div class="mt-25">
                    <div class="table table-responsive">
                        <table class="table table-bordered">

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
