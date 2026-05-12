<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Telefono;

class TelefonosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Telefono::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate(['marca' => 'required|string|max:255', 
                            'modelo' => 'required|string|max:255',
                            'precio' => 'required|numeric|max:255']);
        Telefono::create($validated);
        return response()->json(['message' => 'Producto añadido']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $telefono = Telefono::findOrFail($id);
        return response()->json($telefono);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $telefono = Telefono::findOrFail($id);
        $validated = $request->validate([
            'marca' => 'string|max:255',   // 'sometimes' permite que sea opcional
            'modelo' => 'string|max:255',
            'precio' => 'numeric|min:0'
        ]);
        $telefono->update($validated);
        
        return response()->json(['message' => 'Producto actualizado correctamente',]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
