<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Iniciar Sessió</h1>
    
    @if($errors->any())
        <div style="color: red;">
            @foreach($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form method="POST" action="/login">
        @csrf
        <div>
            <label>Email:</label>
            <input type="email" name="email" required value="{{ old('email') }}">
        </div>
        <div>
            <label>Contrasenya:</label>
            <input type="password" name="password" required>
        </div>
        <button type="submit">Entrar</button>
    </form>
</body>
</html>