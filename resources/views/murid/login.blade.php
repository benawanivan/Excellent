@extends('layouts.app', [
    'namePage' => 'Login Murid',
    'class' => 'sidebar-mini',
    'activePage' => 'Login Murid',
    ])

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Login Murid</div>

                <div class="card-body">
                    
                    <form method="POST" action="">
                        @csrf

                        <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required  autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    {{-- <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label> --}}
                                </div>
                            </div>
                        </div>
                        @include('alerts.errors')
                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                {{-- @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif --}}
                            </div>
                        </div>
                    </form>
                    <div class="form-group row" style="justify-content: center;">
                        <p>Belum memiliki akun? <a href="http://api.whatsapp.com/send?phone=6283822837999&text=Halo%20saya%20ingin%20bertanya%20tentang%20program%20belajar%20di%20EXCELLENT">Hubungi Kami<a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection