@extends('layouts.login', [
    'namePage' => 'Login Wali Murid',
    'class' => 'sidebar-mini',
    'activePage' => 'Login Ortu',
    ])

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <img src="{{ asset('images/logo.png') }}" alt="Logo Excellent" style="width:200px;padding-bottom:1rem"> 
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
        
            <div class="card">
                <div class="card-header">Login Orangtua/Wali</div>

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
                        <p>Belum memiliki akun? <a href="https://wa.link/es0oe7">Hubungi Kami<a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection