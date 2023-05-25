@extends('pages.layouts.main')

@section('title', 'Data Administrator')

@section('css')

    <link href="{{ url('') }}/assets/vendors/datatables/dataTables.bootstrap.min.css" rel="stylesheet">

@endsection

@section('page-content')

    <div class="page-header">
        <h2 class="header-title">
            Akun Pegawai
        </h2>
        <div class="header-sub-title">
            <nav class="breadcrumb breadcrumb-dash">
                <a href="{{ url('/admin/dashboard') }}" class="breadcrumb-item">
                    <i class="anticon anticon-home m-r-5"></i>
                    Dashboard
                </a>
                <span class="breadcrumb-item active">
                    Pegawai
                </span>
            </nav>
        </div>
    </div>

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
                        <th class="text-center">NIP</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th class="text-center">Status</th>
                        <th class="text-center">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($pegawai as $data)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}.</td>
                            <td class="text-center">{{ $data["nip"] }}</td>
                            <td>{{ $data['name'] }}</td>
                            <td>{{ $data['email'] }}</td>
                            <td class="text-center">
                                @if ($data['active'] == 1)
                                    Super Admin
                                @elseif($data['active'] == 2)
                                    Pegawai
                                @endif
                            </td>
                            <td class="text-center">
                                <button type="button" class="btn btn-warning btn-sm" data-toggle="modal"
                                    data-target="#exampleModalEdit-{{ $data['id'] }}">
                                    Edit
                                </button>
                                <form action="{{ url('/admin/akun/pegawai/'.$data["id"]) }}" method="POST" style="display: inline;">
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
                <form action="{{ url('/admin/akun/pegawai') }}" method="POST">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name"> Nama Lengkap </label>
                            <input type="text" class="form-control" name="name" id="name"
                                placeholder="Masukkan Nama Lengkap">
                        </div>
                        <div class="form-group">
                            <label for="email"> Email </label>
                            <input type="email" class="form-control" name="email" id="email"
                                placeholder="Masukkan Email">
                        </div>
                        <div class="form-group">
                            <label for="nip"> NIP </label>
                            <input type="text" class="form-control" name="nip" id="nip"
                                placeholder="Masukkan NIP">
                        </div>
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
    @foreach ($pegawai as $data)
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
                <form action="{{ url('/admin/akun/pegawai/'.$data["id"]) }}" method="POST">
                    @csrf
                    @method("PUT")
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name"> Nama Lengkap </label>
                            <input type="text" class="form-control" name="name" id="name"
                                placeholder="Masukkan Nama Lengkap" value="{{ $data["name"] }}">
                        </div>
                        <div class="form-group">
                            <label for="email"> Email </label>
                            <input type="email" class="form-control" name="email" id="email"
                                placeholder="Masukkan Email" value="{{ $data["email"] }}">
                        </div>
                        <div class="form-group">
                            <label for="nip"> NIP </label>
                            <input type="text" class="form-control" name="nip" id="nip"
                                placeholder="Masukkan NIP" value="{{ $data["nip"] }}">
                        </div>
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
