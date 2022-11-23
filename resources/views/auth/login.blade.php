@extends('layouts.form')

@section('content')

<div class="form-holder">
    <div class="menu-holder">
        <ul class="main-links">
            <li><a class="normal-link" href="register">¿No tienes una cuenta?</a></li>
            <li><a class="sign-button" href="register">registrarse</a></li>
        </ul>
    </div>

<div class="signin-signup-form">
    <div class="form-items">
        <div class="form-title">Ingresa a tu Cuenta</div>
        <form role="form" method="POST" action="{{ route('login') }}">
            @csrf
            <form id="signinform">
                <div class="form-text">
                    <input type="text" name="username" placeholder="Correo" required name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                </div>
                <div class="form-text">
                    <input type="password" name="password" placeholder="Contraseña" required name="password" required autocomplete="current-password">
                </div>
                <div class="form-button">
                    <button id="submit" type="submit" class="ybtn ybtn-accent-color">INICIAR SESION</button>
                </div>
            </form>
        </form>

    </div>
</div>
@endsection
