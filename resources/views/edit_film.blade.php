<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Edit Film</title>
</head>
<body>
    <div class="container">
        <h3>Edit Film</h3>
            <form action="{{ route('update.film',$films->id) }}" method="post" enctype="multipart/form-data" >
                @csrf
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Judul Film</span>
                    <input type="text" class="form-control" value="{{ $films->judul_film }}" aria-describedby="basic-addon1" name="JudulFilm" >
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Tahun Rilis</span>
                    <input type="text" class="form-control" value="{{ $films->tahun_rilis }}" aria-describedby="basic-addon1" name="TahunRilis">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Nama Sutradara</span>
                    <input type="text" class="form-control" value="{{ $films->nama_sutradara }}" aria-describedby="basic-addon1" name="NamaSutradara">
                </div>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="basic-addon1">Gambar</span>
                    <img src="{{ asset('storage/gambar/'.$films->gambar) }}" class="card-img-top" style="width: 300px">
                </div>
                <div class="input-group mb-3">
                    <input type="file" class="form-control" aria-describedby="basic-addon1" name="gambar">
                </div>
                <div class="register-btn-submit">
                    <button class="btn btn-success" type="submit">Update</button>
                </div>
            </form>
    </div>
</body>
</html>
