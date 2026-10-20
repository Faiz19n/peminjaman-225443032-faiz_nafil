<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <script type="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body class="bg-inverse text-dark">

    <div class="container min-vh-100 d-flex justify-content-center align-items-center">
        <div class="d-grid place-items-center ">
            <section class="card bg-inverse ml-3 mr-3" style="max-width: 320px">
            <div class="card-body ">
                <h4 class="card-title text-dark">Daftar</h4>
                <p>Buat akun untuk memulai</p>
                <div class="row g-3 align-items-center">
                    
                <!-- nama -->
                <form>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Nama</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <!-- nim -->
                <form>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">NIM</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <!-- email -->
                <form>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <!-- Password -->
                <div class="mb-3">
                    <label for="exampleInputPassword1" class="form-label">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1">
                </div>
                </form>
                <button type="submit" class="btn btn-primary align-items-center justify-content-center">Login</button>
                <p>Sudah punya akun?</p>
                <a href="{{route('login')}}">Login</a>
            </div>
            </section>
        </div>
    </div>
</body>
</html>