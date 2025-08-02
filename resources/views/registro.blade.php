<!-- resources/views/registro.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Registro de Cliente - Hotel</title>
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}"> {{-- Enlace al CSS --}}
</head>
<body>
    <div class="form-container">
        <h2>Registro de Cliente</h2>
        @if(session('success'))
            <p style="color: green;">{{ session('success') }}</p>
        @endif
        <form method="POST" action="{{ route('clientes.store') }}">
            @csrf
            <label for="nombre">Nombre:</label>
            <input type="text" name="nombre" required>
            
            <label for="apellidos">Apellidos:</label>
            <input type="text" name="apellidos" required>
            
            <label for="correo">Correo Electrónico:</label>
            <input type="email" name="correo" required>
            
            <label for="contrasena">Contraseña:</label>
            <input type="password" name="contrasena" required>
            
            <label for="noches">Número de Noches:</label>
            <input type="number" name="noches" min="1" required>
            
            <label for="f_ingreso">Fecha de Check In:</label>
            <input type="date" name="f_ingreso" required>
            
            <label for="f_salida">Fecha de Check Out:</label>
            <input type="date" name="f_salida" required>
            
            <input type="submit" value="Registrar">
        </form>
    </div>
</body>
</html>