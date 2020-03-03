<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Si Praktis</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <link href="{{URL::asset('vendors/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">

    <!-- Styles -->
    <style>
        html, body {
            background-color: white;
            color: #000307;
            font-family: 'Nunito', sans-serif;
            font-weight: 200;
            height: 100vh;
            margin: 0;
        }

        .full-height {
            height: 100vh;
        }

        .flex-right {
            align-items: center;
            display: flex;
            justify-content: center;
            margin-left: -400px;
        }

        .position-ref {
            position: relative;
        }

        .top-right {
            position: absolute;
            right: 10px;
            top: 18px;
        }

        .content {
            text-align: center;
        }

        .title {
            font-size: 84px;
        }

        .links > p {
            width: 600px;
            padding-left: 10px;

        }

        .links > a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .m-b-md {
            margin-bottom: 30px;
        }

        aside {
            position: absolute;
            height: 100%;
            width: 400px;
            background-color: #2A3F54;
            right: 0;

        }

        aside div {
            text-align: center;
        }

        aside > h3 {
            padding-left: 200px;
        }

        a {
            text-decoration: none;
            color: black;
            background: #4b657f;
            border-radius: 2em 2em 2em 2em;
        }

        aside a {
            padding: 30px 40px;
        }

        a:hover {
            background: #8b98a5;

        }

    </style>
</head>
<body>
<div class="flex-right position-ref full-height">

    <div class="content">
        <div class="title m-b-md">
            <img src="{{ asset('images/logo-pku.png') }}" alt="" width="300" height="300">
        </div>

        <div class="links">
            <h1>Hemodialisis - RSU PKU Muhammadiyah Bantul</h1>

        </div>
    </div>

    <aside>
        <div class="container" style="margin-top: 200px; width: 400px">
            <div class="card rounded shadow-lg" style="background-color: #3B5976">
                <div class="card-header" style="padding-top: 5px">
                    <h3 style="color: white"><b>Login</b></h3>
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label style="color: white" for="username"
                                   class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

                            <div class="col-md-6">
                                <input id="username" type="text"
                                       class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}"
                                       name="username" value="{{ old('username') }}" required autofocus>

                                @if ($errors->has('username'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('username') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" style="color: white"
                                   class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password"
                                       class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                       name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0" style="padding-bottom: 10px">
                            <div class="col-md-11 offset-md-1">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </aside>
</div>
</body>
</html>
