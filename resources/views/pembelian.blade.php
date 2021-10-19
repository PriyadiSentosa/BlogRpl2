<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pembelian</title>
</head>
<body>
    <center>Data Pembelian</center>
    @foreach ($pembelian as $data)
       Nama Barang : {{$data->nama_barang}} <br>
       Nama Supplier : {{$data->nama_supplier}}<br>
       QTY : {{$data->qty}}<br>
       Tanggal  : {{$data->tgl}}<hr>
    @endforeach
</body>
</html>
