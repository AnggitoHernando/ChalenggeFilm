<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Tambah Film</title>
</head>
<body>
    <div class="container">
        <h3>Tambah Film</h3>
        <form action="{{ route('store.film') }}" method="post" enctype="multipart/form-data" >
            @csrf
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Judul Film</span>
                <input type="text" class="form-control" placeholder="Masukkan Judul Film" aria-label="Masukkan Judul Film" aria-describedby="basic-addon1" name="JudulFilm">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Tahun Rilis</span>
                <input type="text" class="form-control" placeholder="Masukan Tahun Rilis Film" aria-label="Masukan Tahun Rilis Film" aria-describedby="basic-addon1" name="TahunRilis">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Nama Sutradara</span>
                <input type="text" class="form-control" placeholder="Masukkan Nama Sutradara Film Tersebut" aria-label="Masukkan Nama Sutradara Film Tersebut" aria-describedby="basic-addon1" name="NamaSutradara">
            </div>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Gambar</span>
                <input type="file" class="form-control" aria-describedby="basic-addon1" name="gambar">
            </div>
            <div class="register-btn-submit">
                <button class="btn btn-success" type="submit">Tambahkan</button>
            </div>
        </form>
    </div>
</body>
</html>
