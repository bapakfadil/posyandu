<!DOCTYPE html>
<html>
<head>
    <title>Laporan Periksa Kehamilan</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            font-size: 12px;
        }
        .no-border-table {
            width: 100%;
            border-collapse: collapse;
        }
        .no-border-table th, .no-border-table td {
            padding: 8px;
            text-align: left;
        }
        .borderless td {
            border: none;
        }
        .data-table {
            width: 100%;
            border-collapse: collapse;
        }
        .data-table th, .data-table td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        .data-table th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <h2>Laporan Periksa Kehamilan</h2>
    <table class="no-border-table">
        <tr class="borderless">
            <td width="30%"><strong>Nama Ibu Hamil:</strong></td>
            <td width="70%">{{ $ibuHamil->nama_lengkap }}</td>
        </tr>
        <tr class="borderless">
            <td width="30%"><strong>Nama Suami:</strong></td>
            <td width="70%">{{ $ibuHamil->nama_suami }}</td>
        </tr>
        <tr class="borderless">
            <td width="30%"><strong>Tempat, Tanggal Lahir:</strong></td>
            <td width="70%">{{ $ibuHamil->tempat_lahir }}, {{ \Carbon\Carbon::parse($ibuHamil->tanggal_lahir)->translatedFormat('d F Y') }}</td>
        </tr>
        <tr class="borderless">
            <td width="30%"><strong>Alamat:</strong></td>
            <td width="70%">{{ $ibuHamil->alamat }}</td>
        </tr>
    </table>

    <h3>Riwayat Periksa Kehamilan</h3>
    <table class="data-table">
        <thead>
            <tr>
                <th width="20%">Tanggal Periksa</th>
                <th width="10%">TB</th>
                <th width="10%">BB</th>
                <th width="10%">Tensi</th>
                <th width="50%">Keterangan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($riwayatPeriksa as $periksa)
                <tr>
                    <td>{{ \Carbon\Carbon::parse($periksa->tanggal_periksa)->translatedFormat('d F Y') }}</td>
                    <td>{{ $periksa->tinggi_badan }}</td>
                    <td>{{ $periksa->berat_badan }}</td>
                    <td>{{ $periksa->tensi_darah }}</td>
                    <td>{{ $periksa->keterangan }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
