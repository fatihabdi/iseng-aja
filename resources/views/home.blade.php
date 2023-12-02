<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
  <h1>Home</h1>
  <h1>List Mobil :</h1>
  @foreach ($mobil as $m)
    <h2>{{ $m->nama_mobil }}, {{ $m->brand_mobil }}, {{ $m->warna_mobil }}, {{ $m->tipe_mobil }}, Rp. {{ $m->harga_mobil }}</h2>
  @endforeach
</body>
</html>