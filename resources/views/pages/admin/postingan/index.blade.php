@php
use Carbon\Carbon;
@endphp

@extends('pages.layouts.main')

@section('title', 'Data Postingan')

@section('css')

<link href="{{ url('') }}/assets/vendors/datatables/dataTables.bootstrap.min.css" rel="stylesheet">

@endsection

@section('page-content')

<div class="page-header">
    <h2 class="header-title">
        Postingan
    </h2>
    <div class="header-sub-title">
        <nav class="breadcrumb breadcrumb-dash">
            <a href="{{ url('/admin/dashboard') }}" class="breadcrumb-item">
                <i class="anticon anticon-home m-r-5"></i>
                Dashboard
            </a>
            <span class="breadcrumb-item active">
                Data Postingan
            </span>
        </nav>
    </div>
</div>

<div class="card">
    <div class="card-body">
        <table id="data-table" class="table">
            <thead>
                <tr>
                    <th class="text-center">No.</th>
                    <th class="text-center">Tagar</th>
                    <th>Deskripsi</th>
                    <th class="text-center">Gambar</th>
                    <th>User</th>
                    <th class="text-center">Tanggal Posting</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($postingan as $data)
                <tr>
                    <td class="text-center">{{ $loop->iteration }}.</td>
                    <td class="text-center">{{ $data["flags"]["name"] }}</td>
                    <td>{{ $data['description'] }}</td>
                    <td class="text-center">
                        <img src="{{ $data["image"] }}" style="width: 100px">
                    </td>
                    <td>{{ $data['user']['name'] }}</td>
                    <td class="text-center">
                        @php
                        $formated = Carbon::createFromFormat('Y-m-d H:i:s', $data["created_at"])->isoFormat('dddd, D MMMM YYYY HH:mm:ss');
                        echo $formated;
                        @endphp
                    </td>
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
