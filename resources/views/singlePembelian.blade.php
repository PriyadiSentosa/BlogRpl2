<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pembelian</title>
</head>
<body>
    <center><h1>Data Pembelian</h1></center>
       Nama Barang : {{$pembelian->nama_barang}} <br>
       Nama Supplier : {{$pembelian->nama_supplier}}<br>
       QTY : {{$pembelian->qty}}<br>
       Tanggal  : {{$pembelian->tgl}}<hr>
</body>
</html>
