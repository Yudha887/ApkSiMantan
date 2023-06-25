@php
use Carbon\Carbon;
@endphp

@extends('pages.layouts.main')

@section('title', 'Data Komentar')

@section('css')

<link href="{{ url('') }}/assets/vendors/datatables/dataTables.bootstrap.min.css" rel="stylesheet">

@endsection

@section('page-content')

<div class="page-header">
    <h2 class="header-title">
        Komentar
    </h2>
    <div class="header-sub-title">
        <nav class="breadcrumb breadcrumb-dash">
            <a href="{{ url('/admin/dashboard') }}" class="breadcrumb-item">
                <i class="anticon anticon-home m-r-5"></i>
                Dashboard
            </a>
            <span class="breadcrumb-item active">
                Data Komentar
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
                    <th>Postingan</th>
                    <th>Siapa Yang Berkomentar</th>
                    <th class="text-center">Tanggal Komentar</th>
                    <th>Pesan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($komentar as $data)
                <tr>
                    <td class="text-center">{{ $loop->iteration }}.</td>
                    <td>{{ $data["posts"]["description"] }}</td>
                    <td>{{ $data["user"]["name"] }}</td>
                    <td class="text-center">
                        @php
                        $formated = Carbon::createFromFormat('Y-m-d H:i:s', $data["created_at"])->isoFormat('dddd, D MMMM YYYY HH:mm:ss');
                        echo $formated;
                        @endphp
                    </td>
                    <td>{{ $data["message"] }}</td>
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
