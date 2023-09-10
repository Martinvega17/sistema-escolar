@extends('layouts.auth-master')

@section('content')
<form action="/login" method="POST" class="formulario">
  @csrf
  @include('layouts.partials.messages')
  <h1 class="text-center">Login</h1>
      <div class="form-body">
        <img src="{{ asset('assets/img/219983.png') }}">
        <p class="text">Bienvenido</p>
        <form class="login-form">
          <input type="text" name="username" placeholder="Usuario">
          <input type="password" name="password" placeholder="contraseña">
          <button>Iniciar sesion</button>
          <p class="count">¿No tienes cuenta? <a class="link" href="/register">Registrate</a></p>
          <p class="count">¿No tienes cuenta? <a class="link" href="{{ route('password.request') }}">Olvidaste tu contraseña?</a></p>
        </form>
      </div>
</form>
     
      
@endsection
