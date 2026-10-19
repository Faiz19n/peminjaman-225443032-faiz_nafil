<!DOCTYPE html>
<html lang="id">
<head>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
    rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/headers.css') }}">
    <!-- Sebelum </body> -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
 <meta charset="UTF-8">
 <title>SiPinjam | Home</title>
</head>
<body>
 @include ('nav')
<div class="p-5 mb-4 bg-body-tertiary rounded-3">
    <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">SiPinjam</h1>
        <p class="col-md-8 fs-4">
            Using a series of utilities, you can create this jumbotron, just
            like the one in previous versions of Bootstrap. Check out the
            examples below for how you can remix and restyle it to your
            liking.
        </p>
        <button class="btn btn-primary btn-lg" type="button">
            Example button
        </button>
    </div>
</div>

<ul>
    <li>
        <a href="{{ route('halamanbaru') }}">Ke halaman baru</a>
    </li>
    <li>
        <a href="{{ route('tentang') }}">Ke halaman tentang</a>
    </li>
    <li>
        <a href="{{ route('profil') }}">Ke halaman profil</a>
    </li>
    <li>
        <a href="{{ route('alat') }}">Ke halaman alat</a>
    </li>
    <li>
        <a href="{{ route('latihan-blade')}}">Ke halaman latihan-blade</a>
    </li>
    <li>
        <a href="{{ route('nav')}}">Ke halaman nav</a>
    </li>
</ul>


</body>
</html>
