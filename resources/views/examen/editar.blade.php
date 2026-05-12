<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Editar Teléfono</h1>
    
    <form id="formulario">
        <input type="hidden" id="id" value="{{ $id }}">
        <div class="form-group">
            <label>Marca:</label>
            <input type="text" id="marca" required>
        </div>
        <div class="form-group">
            <label>Modelo:</label>
            <input type="text" id="modelo" required>
        </div>
        <div class="form-group">
            <label>Precio:</label>
            <input type="number" id="precio" step="0.01" required>
        </div>
        <button type="submit">Actualizar</button>
    </form>
    
    <a href="/">← Volver al listado</a>
    <script src="/examen/editar.js"></script>
</body>
</html>