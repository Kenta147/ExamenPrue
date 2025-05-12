<?php

namespace App\Http\Controllers;

use App\Models\Empresas;
use Illuminate\Http\Request;

class EmpresasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $empresas = Empresas::all();
        return view('empresas.index', compact('empresas'));
    }
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('empresas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required',
            'direccion' => 'required',
        ]);

        Empresas::create($request->all());

        return redirect()->route('empresas.index')
                         ->with('success', 'Empresa creada con éxito.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Empresas $empresa)
    {
        return view('empresas.show', compact('empresa'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $empresa = Empresas::findOrFail($id); // Obtén la empresa por su ID
        return view('empresas.edit', compact('empresa')); // Pasa la empresa a la vista
    }
    

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Empresas $empresa)
    {
        $request->validate([
            'nombre' => 'required',
            'direccion' => 'required',
        ]);

        $empresa->update($request->all());

        return redirect()->route('empresas.index')
                         ->with('success', 'Empresa actualizada con éxito.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Empresas $empresa)
    {
        $empresa->delete();

        return redirect()->route('empresas.index')
                         ->with('success', 'Empresa eliminada con éxito.');
    }
}
