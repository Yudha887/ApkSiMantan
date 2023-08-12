@php
    use Carbon\Carbon;
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>.: Semua Data Pegawai :.</title>

    <style>
        body {
            margin: 0px;
            padding: 0px;
            font-family: Arial, Helvetica, sans-serif;
        }

        .heading {
            font-size: 18px;
            font-weight: bold;
            text-transform: uppercase;
        }

        .teks-tengah {
            text-align: center;
        }

    </style>

</head>
<body>
    
    <center>
        <div class="heading">
            Laporan Data Pegawai
        </div>
    </center>

    <br><br>
    <table style="width: 100%" border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th class="teks-tengah">No.</th>
                <th class="teks-tengah">NIP</th>
                <th style="text-align: left;">Nama</th>
                <th class="teks-tengah">Email</th>
                <th style="teks-tengah">Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pegawai as $data)
            <tr>
                <td class="teks-tengah">{{ $loop->iteration }}.</td>
                <td class="teks-tengah">{{ $data["nip"] }}</td>
                <td>{{ $data['name'] }}</td>
                <td class="teks-tengah">{{ $data['email'] }}</td>
                <td class="teks-tengah">
                    @if ($data['active'] == 1)
                    Aktif
                    @elseif($data['active'] == 0)
                    Tidak Aktif
                    @endif
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    
</body>
</html>