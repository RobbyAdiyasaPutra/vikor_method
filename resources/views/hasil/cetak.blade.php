<!DOCTYPE html>
<html>
<head>
    <title>Laporan Hasil VIKOR</title>
    <style>
        body {
            font-family: sans-serif;
            margin: 40px;
            position: relative;
        }

        .watermark {
            position: fixed;
            top: 30%;
            left: 20%;
            width: 100%;
            z-index: -1;
            opacity: 0.05;
            transform: rotate(-30deg);
        }

        .watermark-img {
            width: 400px;
        }


        .header {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
        }

        .logo {
            width: 80px;
        }

        .school-info {
            flex: 1;
            text-align: center;
            line-height: 1.3;
        }

        .school-info h2 {
            margin: 0;
            font-size: 20px;
        }

        .school-info p {
            margin: 0;
            font-size: 14px;
        }

        hr {
            border: 1px solid black;
            margin: 15px 0 30px;
        }

        h3 {
            text-align: center;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
            font-size: 14px;
        }

        th {
            background-color: #f2f2f2;
        }

        th, td {
            border: 1px solid #333;
            padding: 6px;
            text-align: center;
        }

        .note {
            margin-top: 30px;
            font-size: 14px;
        }

        .footer {
            margin-top: 60px;
            width: 100%;
        }

        .ttd {
            float: right;
            text-align: center;
            margin-right: 40px;
        }
    </style>
</head>
<body>
<div class="watermark">
    <img src="{{ public_path('assets/img/logo.png') }}" alt="Watermark" class="watermark-img">
</div>
    <div class="header">
        <img src="{{ public_path('assets/img/logo.png') }}" class="logo" alt="Logo Sekolah">
        <div class="school-info">
            <h2>SMK PRIMA UNGGUL</h2>
            <p>Jl. Pendidikan No.123, Jakarta | Telp: (021) 12345678</p>
        </div>
    </div>

    <hr>

    <h3>Laporan Hasil Akhir Metode VIKOR</h3>

    <table>
        <thead>
            <tr>
                <th>Alternatif</th>
                <th>Nilai S</th>
                <th>Nilai R</th>
                <th>Nilai Q</th>
                <th>Ranking</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($hasil as $item)
                <tr>
                    <td>{{ $item->alternatif->alternatif_name }}</td>
                    <td>{{ number_format($item->nilai_s, 4) }}</td>
                    <td>{{ number_format($item->nilai_r, 4) }}</td>
                    <td>{{ number_format($item->nilai_q, 4) }}</td>
                    <td>{{ $item->ranking }}</td>
                    <td>{{ $item->status }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="note">
        <strong>Catatan:</strong> Peserta dengan status <strong>Lulus</strong> dinyatakan <strong>berhak menerima beasiswa</strong> dari SMK Prima Unggul.
    </div>

    <div class="footer">
        <div class="ttd">
            <p>Jakarta, {{ date('d F Y') }}</p>
            <p><strong>Kepala Sekolah</strong></p>
            <br><br><br>
            <p><strong><u>Drs. ROBBY ADIYASA PUTRA</u></strong><br>NIP. 0000</p>
        </div>
    </div>

</body>
</html>
