<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    $user = User::find($userId); // Mengambil user berdasarkan ID
$posts = $user->posts; // Mengambil postingan yang dimiliki oleh user tersebut

// Loop melalui setiap postingan
foreach ($tiket as $tiket) {
    echo $tiket->title; // Contoh: Menampilkan judul postingan
}
</body>
</html>
