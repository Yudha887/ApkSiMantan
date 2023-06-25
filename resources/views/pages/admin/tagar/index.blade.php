@extends('pages.layouts.main')

@section('title', 'Data Tagar')

@section('css')

    <link href="{{ url('') }}/assets/vendors/datatables/dataTables.bootstrap.min.css" rel="stylesheet">

@endsection

@section('page-content')

    <div class="page-header">
        <h2 class="header-title">
            Tagar
        </h2>
        <div class="header-sub-title">
            <nav class="breadcrumb breadcrumb-dash">
                <a href="{{ url('/admin/dashboard') }}" class="breadcrumb-item">
                    <i class="anticon anticon-home m-r-5"></i>
                    Dashboard
                </a>
                <span class="breadcrumb-item active">
                    Data Tagar
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

    <div class="card">
        <div class="card-header pt-2">
            <button type="button" class="btn btn-primary btn-sm float-right" data-toggle="modal"
                data-target="#exampleModal">
                Tambah
            </button>
        </div>
        <div class="card-body">
            <table id="data-table" class="table">
                <thead>
                    <tr>
                        <th class="text-center">No.</th>
                        <th class="text-center">Tagar</th
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tagar as $data)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}.</td>
                            <td class="text-center">{{ $data["name"] }}</td>
                            <td class="text-center">
                                <button type="button" class="btn btn-warning btn-sm" data-toggle="modal"
                                    data-target="#exampleModalEdit-{{ $data['id'] }}">
                                    Edit
                                </button>
                                <form action="{{ url('/admin/tagar/'.$data["id"]) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">
                                        Hapus
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <!-- Tambah Data -->
    <div class="modal fade" id="exampleModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        Tambah Data
                    </h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <i class="anticon anticon-close"></i>
                    </button>
                </div>
                <form action="{{ url('/admin/tagar') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name"> Nama Tagar </label>
                            <input type="text" class="form-control @error("name") {{ 'is-invalid' }} @enderror" name="name" id="name"
                                placeholder="Masukkan Nama Tagar" value="{{ old('name') }}">
                        </div>
                        @error("name")
                        <span class="text-danger">
                            {{ $message }}
                        </span>
                        @enderror
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-danger btn-sm">Kembali</button>
                        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- END -->

    <!-- Edit Data -->
    @foreach ($tagar as $data)
    <div class="modal fade" id="exampleModalEdit-{{ $data["id"] }}">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">
                        Edit Data
                    </h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <i class="anticon anticon-close"></i>
                    </button>
                </div>
                <form action="{{ url('/admin/tagar/'.$data["id"]) }}" method="POST">
                    @csrf
                    @method("PUT")
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name"> Nama Tagar </label>
                            <input type="text" class="form-control @error("name") {{ 'is-invalid' }} @enderror " name="name" id="name"
                                placeholder="Masukkan Tagar" value="{{ old('name') ?? $data["name"] ?? '' }}">
                        </div>
                        @error("name")
                            <span class="text-danger">
                                {{ $message }}
                            </span>
                        @enderror
                    </div>
                    <div class="modal-footer">
                        <button type="reset" class="btn btn-danger btn-sm">Kembali</button>
                        <button type="submit" class="btn btn-primary btn-sm">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    @endforeach
    <!-- END -->

@endsection

@section('javascript')

    <script src="{{ url('') }}/assets/vendors/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ url('') }}/assets/vendors/datatables/dataTables.bootstrap.min.js"></script>
    <script src="{{ url('') }}/assets/js/pages/datatables.js"></script>


@endsection
