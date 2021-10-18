<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pesanan</title>
</head>
<body>
    <center>Data Pesanan</center>
    @foreach ($barang as $data)
       Nama Pelanggan : {{$data->nama_pelanggan}} <br>
       Nama Barang : {{$data->nama_barang}}<br>
       QTY : {{$data->qty}}<br>
       Tanggal Pesan : {{$data->tgl_pesan}}<hr>
    @endforeach
</body>
</html>
