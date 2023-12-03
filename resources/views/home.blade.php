@extends('layouts.layout')

@section('content')
<!-- Jumbotron -->
<section id="home">
    <div class="container">
        <div class="d-flex gap-5 wrap justify-content-between align-items-center">
            <div style="width: 900px">
                <h1>Welcome To<br> EAD Show Room</h1>
                <p class="mt-3">EAD Show Room is a most successful showroom<br>in this universe</p>
                <div class="d-flex  justify-content-lg-start mt-2">
                </div>
            </div>
            <div class="d-flex flex-column justify-content-between" style="">
                <h1>Our Car</h1>
                <div class="d-flex flex-wrap gap-2" style="overflow: auto; max-height: 400px; width: 600px">
                    @forelse ($mobil as $row)
                        <div class='card cardcontent' style='width: 18rem;'>
                            <img src='https://akcdn.detik.net.id/visual/2018/08/09/74d69c6a-18a4-4c16-8565-1c98f9f4388e_169.jpeg?w=650' class='card-img-top' alt='fotomobil' style='padding: 16px;'>
                            <div class='card-body'>
                                <h5 class='card-title'>{{ $row->nama_mobil }}</h5>
                                <p class='card-text'>Rp. {{ $row->harga_mobil }}</p>
                                <span class='d-flex gap-2'>
                                    <a href='' class='btn btn-primary' style='border-radius: 100px; width:140px; height: 36px;'>Detail</a>
                                </span>
                            </div>
                        </div>
                    @empty
                        <p>No car in the database.</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Jumbotron End -->
@endsection
