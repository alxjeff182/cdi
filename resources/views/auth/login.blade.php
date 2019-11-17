<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>CDI Facility Service</title>

        <!-- Fonts -->
        <link href="css/app.css" rel="stylesheet">

    </head>
    <body>
        <div class="body-container"> 
<div class="container my-10">
    <div class="row justify-content-center">
        <div class="col-sm-12 text-center mt-5">
            <p><img class="w-50" src="img/splash-screen.png" /></p>
            <p class="text-white font-weight-bold mt-4"> Silahkan log in</p>
        </div>
        <div class="col-sm-12 mt-5">   
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-sm-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-sm-7">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-sm-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-sm-7">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-sm-7 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-sm-8 offset-md-4">
                                <div class="row">
                                    <div class="col-sm-5">
                                <button type="submit" class="btn btn-primary btn-block">
                                    {{ __('Login') }}
                                </button>
                                    </div>
                                    <div class="col-sm-7">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link text-white font-weight-bold" href="{{ route('password.request') }}">
                                        {{ __('Lupa Password ?') }}
                                    </a>
                                @endif
                                </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div> 
        <script src="js/app.js"></script>
    </body>
</html>
