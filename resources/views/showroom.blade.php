@extends('layouts.layout')

@section('list', 'active')

@section('content')
<section id="list">
  <div class="container">
    <h1>My Show Room</h1>
    @if(count($mobil) > 0)
      <div class="table-responsive">
        <table class="table table-striped">
          <thead>
            <tr>
              <th>Name</th>
              <th>Brand</th>
              <th>Warna</th>
              <th>Tipe</th>
              <th>Harga</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($mobil as $row)
              <tr>
                <td>{{ $row->nama_mobil }}</td>
                <td>{{ $row->brand_mobil }}</td>
                <td>{{ $row->warna_mobil }}</td>
                <td>{{ $row->tipe_mobil }}</td>
                <td>{{ $row->harga_mobil }}</td>
              </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    @else
      <p>No cars in the showroom.</p>
    @endif
  </div>
</section>
@endsection
