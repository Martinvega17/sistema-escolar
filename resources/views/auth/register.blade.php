@extends('layouts.auth-master')

@section('content')
<form class="formulario" action="/register" method="POST">
@csrf
@include('layouts.partials.messages')
    <h1 class="text-center">Create account</h1>
    <div class="form-body">
      <img src="{{ asset('assets/img/219983.png') }}">
      <p class="text">Bienvenido</p>
        <form class="login-form">
          <input type="text" name="name" placeholder="Nombre completo">
          <input type="text" name="username" placeholder="Usuario">
          <input type="text" name="email" placeholder="correo electronico">
          <input type="password" name="password" placeholder="contraseña">
          <input type="password" name="password_confirmation" placeholder="Confirmar contraseña">
          <button>Registrate</button>
          <p class="count">¿Ya tienes cuenta? <a class="link" href="/login">Inicia sesion</a></p>
        </form>
      </div>
@endsection