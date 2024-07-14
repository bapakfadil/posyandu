<!DOCTYPE html>
<html>
<head>
    <title>Laporan Imunisasi Anak</title>
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
    <h2>Laporan Imunisasi Anak</h2>
    <table class="no-border-table">
        <tr class="borderless">
            <td width="30%"><strong>Nama Lengkap</strong></td>
            <td width="70%">{{ $anak->nama_lengkap }}</td>
        </tr>
        <tr class="borderless">
            <td width="30%"><strong>Jenis Kelamin</strong></td>
            <td width="70%">{{ $anak->jenis_kelamin }}</td>
        </tr>
        <tr class="borderless">
            <td width="30%"><strong>Tanggal Lahir</strong></td>
            <td width="70%">{{ \Carbon\Carbon::parse($anak->tanggal_lahir)->translatedFormat('d F Y') }}</td>
        </tr>
        <tr class="borderless">
            <td width="30%"><strong>Nama Ayah</strong></td>
            <td width="70%">{{ $anak->nama_ayah }}</td>
        </tr>
        <tr class="borderless">
            <td width="30%"><strong>Nama Ibu</strong></td>
            <td width="70%">{{ $anak->nama_ibu }}</td>
        </tr>
        <tr class="borderless">
            <td width="30%"><strong>Alamat</strong></td>
            <td width="70%">{{ $anak->alamat }}</td>
        </tr>
    </table>

    <h3>Riwayat Imunisasi</h3>
    <table class="data-table">
        <thead>
            <tr>
                <th width="20%">Tanggal Imunisasi</th>
                <th width="20%">Jenis Imunisasi</th>
                <th width="60%">Keterangan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($riwayatImunisasi as $imunisasi)
                <tr>
                    <td>{{ \Carbon\Carbon::parse($imunisasi->tanggal_imunisasi)->translatedFormat('d F Y') }}</td>
                    <td>{{ $imunisasi->jenis_imunisasi }}</td>
                    <td>{{ $imunisasi->keterangan }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
