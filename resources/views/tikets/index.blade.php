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
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Daftar Tiket</div>

                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>Id Tiket</th>
                                    <th>Tanggal Kunjungan</th>
                                    <th>Biaya</th>
                                    <th>Jumlah Tiket</th>
                                    <th>ID Pengunjung</th>
                                    <th>ID Petugas</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($tikets as $tiket)
                                    <tr>
                                        <td>{{ $tiket->id }}</td>
                                        <td>{{ $tiket->tanggal_kunjungan }}</td>
                                        <td>{{ $tiket->biaya }}</td>
                                        <td>{{ $tiket->jumlah_tiket }}</td>
                                        <td>{{ $tiket->id_pengunjung }}</td>
                                        <td>{{ $tiket->id_petugas }}</td>
                                        <td>
                                            <a href="{{ route('tikets.show', $tiket->id) }}" class="btn btn-info">Detail</a>
                                            <a href="{{ route('tikets.edit', $tiket->id) }}" class="btn btn-primary">Edit</a>
                                            <form action="{{ route('tikets.destroy', $tiket->id) }}" method="POST" style="display: inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus tiket ini?')">Hapus</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                <a href="/tikets/create" class="btn btn-success">Tambahkan Tiket</a>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>