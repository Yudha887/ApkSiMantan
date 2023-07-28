@extends('pages.layouts.main')

@section('title', 'Data Suka Postingan')

@section('css')

    <link href="{{ url('') }}/assets/vendors/datatables/dataTables.bootstrap.min.css" rel="stylesheet">

@endsection

@section('page-content')

    <div class="page-header">
        <h2 class="header-title">
            Suka Postingan
        </h2>
        <div class="header-sub-title">
            <nav class="breadcrumb breadcrumb-dash">
                <a href="{{ url('/admin/dashboard') }}" class="breadcrumb-item">
                    <i class="anticon anticon-home m-r-5"></i>
                    Dashboard
                </a>
                <span class="breadcrumb-item active">
                    Data Suka Postingan
                </span>
            </nav>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <table id="data-table" class="table table-bordered">
                <thead>
                    <tr>
                        <th class="text-center">No.</th>
                        <th class="text-center">Tagar</th>
                        <th>Deskripsi</th>
                        <th class="text-center">Gambar</th>
                        <th>User</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($like as $data)
                        <tr>
                            <td class="text-center">{{ $loop->iteration }}.</td>
                            <td class="text-center">{{ $data["posts"]["flags"]["name"] }}</td>
                            <td>{{ $data["posts"]["description"] }}</td>
                            <td class="text-center">
                                <img src="{{ $data['posts']["image"] }}" style="width: 100px;">
                            </td>
                            <td>{{ $data["posts"]['user']['name'] }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection

@section('javascript')

    <script src="{{ url('') }}/assets/vendors/datatables/jquery.dataTables.min.js"></script>
    <script src="{{ url('') }}/assets/vendors/datatables/dataTables.bootstrap.min.js"></script>
    <script src="{{ url('') }}/assets/js/pages/datatables.js"></script>


@endsection
