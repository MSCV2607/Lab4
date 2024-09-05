<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Notas</title>
</head>
<body>
    <h1>Ingrese sus Notas</h1>
    <form action="{{ route('calcular.promedio') }}" method="POST">
        @csrf
        <label for="nota1">Nota 1:</label>
        <input type="number" name="nota1" step="0.01" required><br>

        <label for="nota2">Nota 2:</label>
        <input type="number" name="nota2" step="0.01" required><br>

        <label for="nota3">Nota 3:</label>
        <input type="number" name="nota3" step="0.01" required><br>

        <label for="nota4">Nota 4:</label>
        <input type="number" name="nota4" step="0.01" required><br>

        <button type="submit">Calcular Promedio</button>
    </form>
</body>
</html>
