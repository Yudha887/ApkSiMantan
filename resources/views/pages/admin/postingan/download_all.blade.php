@php
    use Carbon\Carbon;
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>.: Semua Data Postingan :.</title>

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
            Data Laporan Postingan
        </div>
    </center>

    <br><br>
    <table style="width: 100%" border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th class="teks-tengah">No.</th>
                <th class="teks-tengah">Tagar</th>
                <th style="text-align: left;">Deskripsi</th>
                <th class="teks-tengah">Gambar</th>
                <th style="text-align: left;">User</th>
                <th class="teks-tengah">Tanggal Posting</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($postingan as $data)
                <tr>
                    <td class="teks-tengah">{{ $loop->iteration }}.</td>
                    <td class="teks-tengah">{{ $data["flags"]["name"] }}</td>
                    <td>{{ $data['description'] }}</td>
                    <td class="teks-tengah">
                        <img src="{{ $data["image"] }}" style="width: 100px">
                    </td>
                    <td>{{ $data['user']['name'] }}</td>
                    <td class="teks-tengah">
                        @php
                        $formated = Carbon::createFromFormat('Y-m-d H:i:s', $data["created_at"])->isoFormat('dddd, D MMMM YYYY HH:mm:ss');
                        echo $formated;
                        @endphp
                    </td>
                </tr>
                @endforeach
        </tbody>
    </table>
    
</body>
</html>