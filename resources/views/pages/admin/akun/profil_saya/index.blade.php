@extends('pages.layouts.main')

@section("title", "Profil Saya")

@section('page-content')

<div class="page-header">
    <h2 class="header-title">
        Profil Saya
    </h2>
    <div class="header-sub-title">
        <nav class="breadcrumb breadcrumb-dash">
            <a href="{{ url('/admin/dashboard') }}" class="breadcrumb-item">
                <i class="anticon anticon-home m-r-5"></i>
                Dashboard
            </a>
            <span class="breadcrumb-item active">
                Ubah Profil
            </span>
        </nav>
    </div>
</div>

<div class="card">
    <form action="{{ url('/admin/akun/profil') }}" method="POST">
        @csrf
        @method('PUT')
        <div class="card-body">
            <div class="form-group">
                <label for="name"> Nama </label>
                <input type="text" class="form-control">
            </div>
        </div>
        <div class="card-footer">
            <button type="reset" class="btn btn-danger btn-sm">
                Batal
            </button>
            <button type="submit" class="btn btn-primary btn-sm">
                Simpan
            </button>
        </div>
    </form>
</div>
@endsection
