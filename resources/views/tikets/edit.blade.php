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
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Tiket</div>

                    <div class="card-body">
                        <form action="{{ route('tikets.update', $tiket->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="tanggal_kunjungan">Tanggal Kunjungan:</label>
                                <input type="date" name="tanggal_kunjungan" class="form-control" value="{{ $tiket->tanggal_kunjungan }}" required>
                            </div>
                            <div class="form-group">
                                <label for="biaya">Biaya:</label>
                                <input type="text" name="biaya" class="form-control" value="{{ $tiket->biaya }}" required>
                            </div>
                            <div class="form-group">
                                <label for="jumlah_tiket">Jumlah Tiket:</label>
                                <input type="number" name="jumlah_tiket" class="form-control" value="{{ $tiket->jumlah_tiket }}" required>
                            </div>
                            <div class="form-group">
                                <label for="id_pengunjung">ID Pengunjung:</label>
                                <input type="text" name="id_pengunjung" class="form-control" value="{{ $tiket->id_pengunjung }}" required>
                            </div>
                            <div class="form-group">
                                <label for="id_petugas">ID Petugas:</label>
                                <input type="text" name="id_petugas" class="form-control" value="{{ $tiket->id_petugas }}" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>