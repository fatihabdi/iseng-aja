@extends('layouts.layout')

@section('content')
<section id='form'>
    <div class="container">
      <h1 class="tambahh1">Tambah Mobil</h1>
      <p class="tambahp">Tambah Mobil Baru Anda Ke List Show Room</p>
      <form action="{{ url('addCar') }}" method="POST" enctype="multipart/form-data">
        @csrf
      
        <label for="nama">Nama Mobil</label>
        <input type="text" id="nama" name="name" placeholder="Masukkan Nama Mobil">
        <label for="merk">Brand</label>
        <input type="text" id="brand" name="brand" placeholder="Masukkan Merk Mobil">
        <label for="merk">Warna</label>
        <input type="text" id="warna" name="warna" placeholder="Masukkan Warna Mobil">
        <label for="merk">Tipe</label>
        <input type="text" id="tipe" name="tipe" placeholder="Masukkan Tipe Mobil">
        <label for="merk">Harga</label>
        <input type="number" id="harga" name="harga" placeholder="Masukkan Harga Mobil">
        <button type="submit" class="btn btn-primary" style="margin-top: 40px;">Selesai</button>
      </form>
    </div>
  </section>
@endsection