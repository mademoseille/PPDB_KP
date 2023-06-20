<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
    <form action="{{ route('ppdb.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="nama">Nama</label>
    <input type="text" name="nama" class="form-control">
    @error('nama')
        {{ $message }}
    @enderror
    <br>
    <label for="nim">Nim</label>
    <input type="text" name="nim" class="form-control">
    @error('nim')
        {{ $message }}
    @enderror
    <br>
    <label for="kelas">Kelas</label>
    <input type="text" name="kelas" class="form-control">
    @error('kelas')
        {{ $message }}
    @enderror
    <label for="image">Image</label>
    <input type="file" name="image" class="form-control">
    @error('image')
        {{ $message }}
    @enderror
    <input type="submit">
    </form>
</body>
</html>
