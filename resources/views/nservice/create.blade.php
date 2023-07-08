<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Service</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-5">
        <h1 class="text-center mb-5">Menambahkan Service</h1>
        <div class="card">
            <div class="card-body">
                <form action="{{ route('nservice.store')}}" method="POST">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Service</label>
                        <input type="text" class="form-control" id="service" placeholder="Name Service" name="service" value="{{$nsv->nama_service ?? old('nama_service')}}"> @error('Service') <span class="text-danger">{{$massage}}</span> @enderror
                    </div>

                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary ">Simpan</button>
                        <a href="{{route('nservice.index')}}" class="btn btn-default">
                    </div>
                </form>
            </div>
        </div>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>