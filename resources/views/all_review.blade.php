<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <title>Semua Review</title>
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-header">
              Semua Riview Film {{ $review->judul_film }}
            </div>
            <div class="card-body text-center">
              <img src="{{ asset('storage/gambar/'.$review->gambar) }}" class="card-img-top" alt="..." style="width: 400px">
              <p class="card-text">Tahun Rilis : {{ $review->tahun_rilis }}</p>
              <p class="card-text">Nama Sutradara: {{ $review->nama_sutradara }}</p>
            </div>
            <div class="col-12">
                <h5>Review</h5>
            </div>
            <div class="col-12">
                @foreach ($review->review as $reviewes)
                <div class="col-12">
                    <label for=""> {{ $reviewes->nama_reviewer }}</label>

                </div>
                <textarea name="" id="" cols="150" rows="5" disabled> {{ $reviewes->reviewer }}</textarea>
                @endforeach
            </div>
          </div>
    </div>
</body>
</html>
