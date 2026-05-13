<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\Project;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Project::all());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate(['nombre' => 'required', 
                            'descripcion' => 'required',
                            'fecha_inicio' => 'required',
                            'fecha_fin' => 'required']);
        
        $validated["user_id"] = 1;
        Project::create($validated);
        return response()->json(['message' => 'Proyecto añadido']);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $proyecto = Project::findOrFail($id);
        return response()->json($proyecto);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $proyecto = Project::findOrFail($id);
        $validated = $request->validate(['nombre' => 'required', 
                            'descripcion' => 'required',
                            'fecha_inicio' => 'required',
                            'fecha_fin' => 'required']);
        
        $validated["user_id"] = Auth::user()->id;
        $proyecto->update($validated);
        
        return response()->json(['message' => 'Proyecto actualizado correctamente',]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function mostrarUltimo()
    {
        $proyecto = Project::orderBy('fecha_inicio', 'desc')->first();
        return response()->json($proyecto);
    }
}
