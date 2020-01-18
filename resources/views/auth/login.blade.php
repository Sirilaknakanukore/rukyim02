<body style="background-color: #fbf5e3;">
@extends('layouts.app')
@section('content')
    <br>
    <br>
    <br>
    <br>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card"style="border: none;" >
                <div class="card-body" style="border: none;">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right" style="font-family: 'Pridi', serif; ">{{ __('อีเมล') }}</label>

                            <div class="col-md-6">
                                <input style="font-family: 'Pridi', serif; " id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right" style="font-family: 'Pridi', serif; ">{{ __('รหัสผ่าน') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

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

                                    <label class="form-check-label" for="remember" style="font-family:'Pridi', serif; ">
                                        {{ __('จดจำฉันไว้') }}
                                    </label>
                                    <br>

                                </div>
                            </div>
                        </div>
                        <div class="form-group row mb-0">

                            <div class="col-md-8 offset-md-4">
                                <button type="submit" value="Submit" class="btn btn-secondary btn-dark btn-block" style="font-family:'Pridi', serif; background-color: #d98553; border: none; height: 50px;">
                                    {{ __('Login') }}
                                </button>
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}" style="color: #4c110f; font-family:'Pridi', serif;">
                                        {{ __('ลืมรหัสผ่าน ?') }}
                                    </a>
                                @endif


                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
</body>
