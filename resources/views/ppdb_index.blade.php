<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
    <div class="container">
        <a href="{{ route('ppdb.create') }}" class="btn btn-primary mb-3 my-3 d-flex justify-content-center btn-sm">Tambah Data</a>

        <table class="table table-bordered">
            <thead class="thead-dark md-6">
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Nim</th>
                    <th scope="col">Kelas</th>
                </tr>
            </thead>
            <tbody class="bg-warning">
                @foreach ($data as $item)
              <tr>
                <th scope="row">{{ $loop->iteration }}</th>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->nim }}</td>
                <td>{{ $item->kelas }}</td>
                <td><a href="{{ route('ppdb.show',$item->id) }}">SHOW</a></td>
                <td><img src="{{ Storage::url($item->image) }}" alt="GAMBAR" width="20%"></td>
              </tr>
              @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
