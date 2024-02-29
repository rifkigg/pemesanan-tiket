<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        Detail Tiket
                    </div>
                    <div class="card-body">
                        <p><strong>Id Tiket:</strong> {{ $tiket->id }}</p>
                        <p><strong>Tanggal Kunjungan:</strong> {{ $tiket->tanggal_kunjungan }}</p>
                        <p><strong>Biaya:</strong> {{ $tiket->biaya }}</p>
                        <p><strong>Jumlah Tiket:</strong> {{ $tiket->jumlah_tiket }}</p>
                        <p><strong>ID Pengunjung:</strong> {{ $tiket->id_pengunjung }}</p>
                        <p><strong>ID Petugas:</strong> {{ $tiket->id_petugas }}</p>
                        <!-- Tambahkan detail lainnya sesuai kebutuhan -->
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('tikets.index') }}" class="btn btn-primary">Kembali</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>