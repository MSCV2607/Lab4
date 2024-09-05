<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NotasController extends Controller
{
    public function mostrarFormulario()
    {
        // Retorna la vista con el formulario en blanco
        return view('notas.formulario');
    }

    public function calcularPromedio(Request $request)
    {
        // Validar los campos para asegurarse de que sean numéricos
        $request->validate([
            'nota1' => 'required|numeric',
            'nota2' => 'required|numeric',
            'nota3' => 'required|numeric',
            'nota4' => 'required|numeric',
        ]);

        // Calcular el promedio
        $promedio = (
            $request->input('nota1') +
            $request->input('nota2') +
            $request->input('nota3') +
            $request->input('nota4')
        ) / 4;

        // Retornar la vista con el resultado del promedio
        return view('notas.resultado', compact('promedio'));
    }
}
