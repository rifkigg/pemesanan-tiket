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
                    <div class="card-header">Buat Tiket Baru</div>
                    <div class="card-body">
                        <form action="{{ route('tikets.store') }}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label for="tanggal_kunjungan">Tanggal Kunjungan:</label>
                                <input type="date" name="tanggal_kunjungan" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="biaya">Biaya:</label>
                                <input type="number" name="biaya" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="jumlah_tiket">Jumlah Tiket:</label>
                                <input type="number" name="jumlah_tiket" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="id_pengunjung">ID Pengunjung:</label>
                                <input type="number" name="id_pengunjung" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="id_petugas">ID Petugas:</label>
                                <input type="number" name="id_petugas" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>