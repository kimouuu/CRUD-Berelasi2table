<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Multiro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>

    <div class="container mt-5">
        <h1 class="text-center mb-5">Menambahkan Data</h1>
        <div class="card">
            <div class="card-body">
                <form action="{{ route('multiro.store')}}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label">Host</label>
                        <input type="text" class="form-control" name="host" id="host">
                    </div>

                    <div class="mb-3">
                        <label for="username" class="form-label">UserName</label>
                        <input type="text" class="form-control" name="username" id="username">
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" name="password" id="password">
                    </div>
                    <div class="mb-3">
                        <label for="router" class="form-label">Router</label>
                        <input type="text" class="form-control" name="router" id="router">
                    </div>

                    <div class="mb-3">
                        <label for="service_id" class="form-label">Service</label>
                        <select class="form-control" name="service_id" id="service">
                            @foreach ($nservice as $nsv)
                            <option value="{{$nsv->id}}">{{$nsv->service}}</option>
                            @endforeach
                        </select>

                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary ">Simpan</button>
                        <a href="{{route('multiro.index')}}" class="btn btn-default">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>