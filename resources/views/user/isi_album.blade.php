
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@foreach ($album->foto as $foto)
            <img class="mb-2 " src="/postingan/{{ $foto->lokasi_file }}" alt="{{ $foto->deskripsi_foto }}">
        @endforeach

</body>
</html>