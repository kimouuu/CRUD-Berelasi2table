<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Multi ROUTER</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>
{{-- <style>
    h1 {
      border: 1px solid grey ;
      border-radius: 20px;
      color: black;
      padding: 5px;
    }

    .btn {
      opacity: 20%;
    }

    .btn:hover{
      background-color:grey;
      border: 1px solid grey;
      opacity: 100%;
      transition-duration: 0.3s;
    }
  </style> --}}

<body>

    <div class="container mt-5">
        <h1 class="text-center mb-5">DATA Router</h1>
        <a href="{{ route('multiro.create') }}" class="btn btn-primary mb-3">TAMBAH DATA</a>
        @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{session('success')}}
        </div>
        @endif
        <div class="card">
            <div class="card-body">
                <table class="table">
                    <thead>
                        <th>ID</th>
                        <th>HOST</th>
                        <th>USERNAME</th>
                        <th>PASSWORD</th>
                        <th>ROUTER</th>
                        <th>SERVICE</th>
                        <th>Opsi</th>
                    </thead>
                    <tbody>
                        @foreach ($multiro as $key => $mltr)
                        <tr>
                            <th>{{ $mltr->id }}</th>
                            <td>{{ $mltr->host }}</td>
                            <td>{{ $mltr->username }}</td>
                            <td>{{ $mltr->password }}</td>
                            <td>{{ $mltr->router }}</td>
                            <td>{{ $mltr->service_id}}</td>
                            <td>{{ $mltr->opsi}}
                                <!-- <a href="{{route( 'multiro.edit', $mltr) }}" class="btn btn-success btn-sm">EDIT</a> -->
                                <b button class="btn btn-danger btn-sm">Connect</button>
                                    </form>

                            </td>
                            <!-- <td>
                                <a href="{{route('multiro.destroy', $mltr)}}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <a href="{{route( 'multiro.edit', $mltr) }}" class="btn btn-success btn-sm">EDIT</a>
                                    <b button class="btn btn-danger btn-sm">HAPUS</button>
                                        </form>
                            </td> -->

                        </tr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>