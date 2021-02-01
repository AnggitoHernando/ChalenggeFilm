<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Tambah Review</title>
</head>
<body>
    <div class="container">
        <h3>Tambah Review</h3>
            <form action="{{ route('store.review') }}" method="post" enctype="multipart/form-data" >
                @csrf
                <div class="input-group mb-3">
                    <img src="{{ asset('storage/gambar/'.$film->gambar) }}" class="card-img-top" alt="..." style="width: 400px">
                </div>
                <div class="input-group mb-3">
                    <p class="card-text">Tahun Rilis : {{ $film->tahun_rilis }}</p>
                </div>
                <div class="input-group mb-3">
                    <p class="card-text">Nama Sutradara: {{ $film->nama_sutradara }}</p>
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Nama</span>
                    <input type="text" class="form-control" placeholder="Masukkan Nama Anda" aria-describedby="basic-addon1" name="NamaReview">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Review</span>
                    <textarea name="Review" id="" cols="150" rows="10" placeholder="Tulis Review Disini"></textarea>
                    <input type="hidden" value="{{ $film->id }}" name="FilmId">
                </div>
                <div class="btn-submit">
                    <button class="btn btn-success" type="submit">Tulis Review</button>
                </div>
            </form>
    </div>
</body>
</html>
