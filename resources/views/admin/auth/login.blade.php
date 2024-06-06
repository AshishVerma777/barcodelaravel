<!DOCTYPE html>
<html>

<head>
    <title>Login Form</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
    <style>
        /* Reset CSS */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html,
        body {
            font-family: 'Roboto', sans-serif;
            background: linear-gradient(to top, #c4beb6c3 10%, #3a5d78 100%);
            background-size: cover;
            background-attachment: fixed;
        }

        h1 {
            font-size: 2em;
            text-align: center;
            color: #fff;
            text-transform: capitalize;
            letter-spacing: 2px;
            margin-bottom: 1em;
        }

        .main-w3layouts {
            padding: 3em 0 1em;
        }

        .main-agileinfo {
            width: 35%;
            margin: 3em auto;
            background: rgba(0, 0, 0, 0.18);
            padding: 3em;
            border-radius: 10px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            font-size: 0.9em;
            color: #fff;
            width: calc(100% - 3em);
            padding: 0.8em;
            margin-bottom: 1em;
            border: none;
            border: solid 1px rgba(255, 255, 255, 0.37);
            background: linear-gradient(to bottom, rgba(255, 255, 255, 0) 96%, #fff 4%);
            background-position: -800px 0;
            background-size: 100%;
            background-repeat: no-repeat;
        }

        input.email,
        input.text.w3lpass {
            margin: 2em 0;
        }

        input:focus,
        input:valid {
            background-position: 0 0;
        }

        ::-webkit-input-placeholder {
            color: #fff;
        }

        :-moz-placeholder {
            color: #fff;
        }

        ::-moz-placeholder {
            color: #fff;
        }

        :-ms-input-placeholder {
            color: #fff;
        }

        input[type="submit"] {
            font-size: 1.2em;
            color: #fff;
            background: #3a5d78bf;
            border: 1px solid #72808a;
            cursor: pointer;
            padding: 0.9em;
            width: 100%;
            margin-top: 1em;
            letter-spacing: 4px;
        }

        input[type="submit"]:hover {
            transition: 0.5s all;
            background: #8DC26F;
        }

        .logos {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 2em;
        }

        .logo img {
            background-color: #fff;
            height: 80px;
            width: 100px;
            margin: 14px;
        }

        .logoV {
            text-align: center;
        }

        .logoV img {
            height: 90px;
            width: 230px;
            margin-top: 10px;
        }

        .input-group {
            display: flex;
            align-items: center;
            margin-bottom: 1em;
        }

        .input-group input {
            flex-grow: 1;
            border-top-right-radius: 0;
            border-bottom-right-radius: 0;
        }

        .input-group .input-group-text {
            background-color: #3a5d78bf;
            border: 1px solid #72808a;
            border-left: none;
            padding: 0.8em;
            border-top-right-radius: 5px;
            border-bottom-right-radius: 5px;
        }

        .text-danger,
        .text-success {
            margin-bottom: 1em;
            color: red;
        }

        .icheck-primary {
            display: flex;
            align-items: center;
        }

        .icheck-primary input[type="checkbox"] {
            margin-right: 0.5em;
        }

        .icheck-primary label {
            color: #fff;
        }

        .row {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
    </style>
</head>

<body>
    <div class="main-w3layouts wrapper">
        <div class="logos">
            <div class="logo">
                <img src="/assets/barcode/New_logo-agio.png" alt="VidhyaGxp Logo">
            </div>
            <div class="logoV">
                <img src="/assets/barcode/New_vidyaGxp_logo.png" alt="Other Logo">
            </div>
        </div>
        <h1>Welcome to Warehouse and Labeling Management</h1>
        <div class="main-agileinfo">
            <div class="agileits-top">
                @if(session('error'))
                <div class="text-danger text-center">{{session('error')}}</div>
                @endif
                @if(session('success'))

                <div class="text-success text-center">{{session('success')}}</div>
                @endif
                <form action="{{route('postLogin')}}" method="post">
                    @csrf
                    <div class="input-group mb-1">
                        <input name="email" type="email" class="form-control" placeholder="Email" required>
                        <div class="input-group-append">
                            {{--  <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>  --}}
                        </div>
                    </div>
                    @error('email')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                    <div class="input-group mb-1">
                        <input name="password" type="password" class="form-control" placeholder="Password" required>
                        <div class="input-group-append">
                            {{--  <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>  --}}
                        </div>
                    </div>
                    @error('password')
                    <div class="text-danger">{{$message}}</div>
                    @enderror
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input name="remember" type="checkbox" id="remember">
                                <label for="remember">
                                    Remember Me
                                </label>
                            </div>
                        </div>
                    </div>
                    <input type="submit" value="Login">
                </form>
            </div>
        </div>
    </div>
</body>

</html>
