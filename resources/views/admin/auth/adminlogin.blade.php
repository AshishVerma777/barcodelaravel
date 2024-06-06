<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Log in</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('admin-assets/plugins/fontawesome-free/css/all.min.css') }}">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="{{ asset('admin-assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
    <!-- Theme style -->
    <link rel="stylesheet" href="{{ asset('admin-assets/dist/css/adminlte.min.css') }}">
</head>

@php
    $mainmenu = 'Admin Console';
    $submenu = 'Admin Console';
@endphp

<body class="hold-transition login-page"
    style="background-image: url('{{ asset('admin/images/dow9.avif') }}'); background-repeat: no-repeat; background-size: cover;">
    <div class="login-box">
        <!-- /.login-logo -->
        <div>
            <div class="card-body login-card-body">
                <div class="login-logo">
                    <div class="logo-container">
                        <div class="logo" style="display:flex;">
                            <img src="{{ asset('admin/images/vidyagxplogo.png') }}" alt="..." class="w-100 h-100" style="max-width: 300px">
                        </div>
                        <div class="logo">
                            <img src="{{ asset('admin/images/agio.jpg') }}" alt="..." class="w-100 h-100" style="transform: scale(0.6)">
                        </div>
                    </div>
                </div>
                <h2 class="text text-dark text-center">Welcome To Admin-Console</h2>

                <form action="{{ route('adminlogin') }}" method="POST">
                    @csrf
                    @if (session('error'))
                        <div class="alert alert-danger text-center">{{ session('error') }}</div>
                    @endif
                    @if (session('success'))
                        <div class="alert alert-success text-center">{{ session('success') }}</div>
                    @endif
                    @error('msg')
                        <div class="text-danger text-center">{{ $message }}</div>
                    @enderror
                    <div class="input-group mb-3">
                        <input type="email" name="email" value="admin@gmail.com" class="form-control" value="{{ old('email') }}" placeholder="Email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    @error('email')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <div class="input-group mb-3">
                        <input type="password" name="password" value="admin@123" class="form-control" placeholder="Password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    @error('password')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember" name="remember">
                                <label for="remember">
                                    Remember Me
                                </label>
                            </div>
                        </div>
                        <!-- /.col -->
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                        </div>
                        <!-- /.col -->
                    </div>
                </form>
            </div>
            <!-- /.login-card-body -->
        </div>
    </div>
    <!-- /.login-box -->

    <!-- jQuery -->
    <script src="{{ asset('admin-assets/plugins/jquery/jquery.min.js') }}"></script>
    <!-- Bootstrap 4 -->
    <script src="{{ asset('admin-assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <!-- AdminLTE App -->
    <script src="{{ asset('admin-assets/dist/js/adminlte.min.js') }}"></script>

    <style>
        .login-box {
            width: 450px;
        }

        .logo-container {
            display: flex;
            align-items: center;
            gap: 10px;
            padding-bottom: 10px;
        }

        .login-card-body {
            background-color: #fff;
            border-top: 0;
            color: #666;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 5px 10px 8px #888888;
        }
    </style>
</body>

</html>