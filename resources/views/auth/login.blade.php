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
                    <h4 class="card-title text-dark">Login</h4>
                    <p>Silakan Login atau buat akun</p>
                    <div class="row g-3 align-items-center">
                        <!-- email -->
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <input type="email" id="email" name="email" value="{{old('email') }}"
                                    autofocus class="form-control @error('email') is-invalid @enderror">
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
                            <!-- remember me -->
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="remember" name="remember">
                                <label class="form-check-label" for="remember">Remember me</label>
                            </div>
                            <button type="submit"
                                class="btn btn-primary align-items-center justify-content-center">Login</button>
                        </form>

                        <p class="text-center mt-3 mb-0">Belum punya akun?
                            <a href="{{ route('daftar') }}">Daftar di sini</a>
                    </div>
            </section>
        </div>
    </div>
</body>

</html>