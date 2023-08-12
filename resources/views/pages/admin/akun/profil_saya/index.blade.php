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

@if (session("message"))
<div class="alert alert-primary">
    <div class="d-flex justify-content-start">
        <span class="alert-icon m-r-20 font-size-30">
            <i class="anticon anticon-info-circle"></i>
        </span>
        <div>
            <h5 class="alert-heading">Berhasil</h5>
            <p>
                {!! session("message") !!}
            </p>
        </div>
    </div>
</div>
@endif

<form action="{{ url('/admin/akun/profil') }}" method="POST" enctype="multipart/form-data">
    @csrf
    @method("PUT")
    @if (!empty(Auth::user()->image))
        <input type="hidden" name="gambarLama" value="{{ Auth::user()->image }}">
    @endif
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="image" class="control-labe"> Gambar </label>
                        @if (empty(Auth::user()->image))
                        <br>
                        <center>
                            <img src="{{ url('/assets/images/avatars/thumb-1.jpg') }}">    
                        </center>    
                        @else
                        <center>
                            <img src="{{ url('/storage/'.Auth::user()->image) }}" style="width: 100px; height: 100px">
                        </center>
                        @endif
                        <br>
                        <input type="file" class="form-control @error("foto") {{ 'is-invalid' }} @enderror" name="foto" id="foto">
                        @error("foto")
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="name" class="control-label"> Nama </label>
                        <input type="text" class="form-control @error("name") {{ 'is-invalid' }} @enderror" id="name" name="name" placeholder="Masukkan Nama Lengkap" value="{{ Auth::user()->name ?? old('name') ?? '' }}">
                        @error("name")
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="email" class="control-label"> Email </label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Masukkan Email" readonly value="{{ Auth::user()->email ?? old('email') ?? '' }}">
                    </div>
                    <div class="form-group">
                        <button type="reset" class="btn btn-danger btn-sm">
                            Batal
                        </button>
                        <button type="submit" class="btn btn-primary btn-sm">
                            Simpan
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

@endsection
