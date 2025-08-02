@extends('layouts.app')

@section('title', 'Crear Cuenta')

@section('content')
<div class="form-container">
    <h2>Registro de Usuario</h2>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <label for="name">Nombre:</label>
        <input type="text" name="name" value="{{ old('name') }}" required>
        @error('name')
            <small style="color:red;">{{ $message }}</small>
        @enderror

        <label for="email">Correo electrónico:</label>
        <input type="email" name="email" value="{{ old('email') }}" required>
        @error('email')
            <small style="color:red;">{{ $message }}</small>
        @enderror

        <label for="password">Contraseña:</label>
        <input type="password" name="password" required
            pattern="(?=.*[A-Z])(?=.*\W).{8,}" 
            title="Debe contener al menos una letra mayúscula y un carácter especial">
        @error('password')
            <small style="color:red;">{{ $message }}</small>
        @enderror

        <label for="password_confirmation">Confirmar Contraseña:</label>
        <input type="password" name="password_confirmation" required>

        <input type="submit" value="Crear Cuenta">
    </form>

    <p style="text-align:center; margin-top:10px;">
        ¿Ya tienes cuenta? <a href="{{ route('login') }}">Inicia sesión</a>
    </p>
</div>
@endsection