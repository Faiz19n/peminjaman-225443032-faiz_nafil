<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
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

                        <form action="{{ route('daftar') }}" method="POST">
                            @csrf
                            <!-- nama -->
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nama</label>
                                <input type="text" id="name" name="name" value="{{ old('name') }}"
                                    class="form-control @error('name') is-invalid @enderror">
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- nim -->
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">NIM</label>
                                <input type="text" id="nim" name="nim" value="{{ old('nim')}}"
                                    class="form-control @error('nim') is-invalid @enderror">
                                @error('nim')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- email -->
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" id="email" name="email" value="{{ old('email') }}"
                                    class="form-control @error('email') is-invalid @enderror">
                                @error('email')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror

                            </div>

                            <!-- Password -->
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" id="password" name="password"
                                    class="form-control @error('password') is-invalid @enderror">
                                @error('password')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label">Ulangi Password</label>
                                <input type="password" id="password_confirmation" name="password_confirmation" class="form-control">
                            </div>

                            <button type="submit" class="btn btn-primary align-items-center justify-content-center">
                                Daftar
                            </button>

                            <p>Sudah punya akun?</p>
                            <a href="{{route('login')}}">Login</a>
                    </div>
                    </form>
            </section>
        </div>
    </div>
</body>

</html>