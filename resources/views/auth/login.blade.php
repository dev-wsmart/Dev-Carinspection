@extends('layouts.app')

@section('content')

<div class="container-fluid">
    <div class="row justify-content-left" style="background-color:#052744;">

        <div class="col-md-3" style="margin-top:15%; margin-bottom:19%; background-color:#052744;">
            <div class="card">
                <div class="card-header" style="color:#000; background-color:#FFCA07;"><center><h3>{{ __('Login') }}</h3><center></div>

                <div class="card-body" >
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="login" class="col-sm-4 col-form-label text-md-right" style="color:#052744;">
                                <h4>{{ __('Username') }}</h4>
                            </label>
                        
                            <div class="col-md-6">
                                <input id="login" type="text"
                                    class="form-control{{ $errors->has('username') || $errors->has('email') ? ' is-invalid' : '' }}"
                                    name="login" value="{{ old('username') ?: old('email') }}" required autofocus
                                    style="border: 1px solid #FFCA07;">
                        
                                @if ($errors->has('username') || $errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('username') ?: $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" style="color:#052744;" class="col-md-4 col-form-label text-md-right"><h4>{{ __('Password') }}</h4></label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"  style="border: 1px solid #FFCA07;">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-1">
                            <div class="col-md-7 offset-md-6">
            
                                <button type="submit" class="btn btn-success" style="width:30%; font-weight:900;">
                                {{ __('Login') }}
                                </button>
                                <button type="reset" class="btn btn-outline-danger">Reset</button>

                                @if (Route::has('password.request'))
                                    <!-- <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a> -->
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-9">
<!-- <div class="text" style="position:absolute; z-index:9; color:#FFF; width:100%; height:1000px; background:rgb(2, 0, 76, 30%);"></div> -->
<div class="vdo" style="position: relative; top:0px;">
        <video width="100%" controls autoplay loop>
        <source src="vdo/In2.mp4" type="video/mp4">
        <source src="movie.ogg" type="video/ogg">
        </video>
</div>

        </div><!--  row   -->


</div>
@endsection
