<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Notas</title>
</head>
<body>
    <h1>Ingrese sus notas</h1>

    <form action="{{ route('calcularPromedio') }}" method="POST">
        @csrf
        <label for="nota1">Nota 1:</label>
        <input type="text" name="nota1" required><br>

        <label for="nota2">Nota 2:</label>
        <input type="text" name="nota2" required><br>

        <label for="nota3">Nota 3:</label>
        <input type="text" name="nota3" required><br>

        <label for="nota4">Nota 4:</label>
        <input type="text" name="nota4" required><br>

        <button type="submit">Calcular Promedio</button>
    </form>

    @if(isset($promedio))
        <h2>El promedio de tus notas es: {{ $promedio }}</h2>
    @endif
</body>
</html>
