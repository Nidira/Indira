
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <!--navbar-->
    @extends('layout.main')
    @push('cssjsexternal')
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js"
            integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    @endpush
    <!--/navbar-->
<div class="flex flex-wrap items-center flex-container">
@foreach ($album->foto as $foto)
                        <div class="flex mx-auto">
                                <div>
                                    <img src="/postingan/{{ $foto->lokasi_file }}" alt="{{ $foto->deskripsi_foto }}">
                                </div>
                        </div>
                        @endforeach
                        <!--end-->
                    </div>

</body>
</html>