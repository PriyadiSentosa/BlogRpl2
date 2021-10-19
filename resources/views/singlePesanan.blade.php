<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pesanan</title>
</head>
<body>
    <center><h1>Data Pesanan</h1></center>
       Nama Pelanggan : {{$pesanan->nama_pelanggan}} <br>
       Nama Barang : {{$pesanan->nama_barang}}<br>
       QTY : {{$pesanan->qty}}<br>
       Tanggal Pesan : {{$pesanan->tgl_pesan}}<hr>
</body>
</html>
