@extends('layout.layout')

@section('judul')
    List FIlm
@endsection

@section('konten')
    <div class="row row-cols-3">
        @foreach ($films as $film)
            <div class="col">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('storage/gambar/'.$film->gambar) }}" class="card-img-top" alt="...">
                    <div class="card-body">
                      <h5 class="card-title">Judul Film : {{ $film->judul_film }}</h5>
                      <p class="card-text">Tahun Rilis : {{ $film->tahun_rilis }}</p>
                      <p class="card-text">Nama Sutradara: {{ $film->nama_sutradara }}</p>
                      <a href="{{ route('edit.film',$film->id)}}" class="btn btn-primary">Edit</a>
                      <a href="{{ route('delete.film',$film->id) }}" class="btn btn-info">Hapus</a>
                      <a href="{{ route('create.review',$film->id)}}" class="btn btn-secondary" style="margin-top: 12px">Tambahkan Review</a>
                      <a href="{{ route('all.review',$film->id) }}" class="btn btn-light" style="margin-top: 12px">Liat Semua Review</a>
                    </div>
                  </div>
            </div>
        @endforeach
    </div>
@endsection
