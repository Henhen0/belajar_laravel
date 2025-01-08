<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
     @foreach($barangs as $brg)
        <p>{{ $brg->id}}</p>
        <p>{{ $brg->nama_barang}}</p>
        <p>{{ $brg->merk}}</p>
        <p>{{ $brg->harga}}</p>
        <hr>
    @endforeach

</body>
</html>