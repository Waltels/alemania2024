<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Documento;
use Illuminate\Http\Request;

use RealRashid\SweetAlert\Facades\Alert;

class DocumentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $documentos = Documento::all();
        return view('admin.documentos.index', compact('documentos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.documentos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $role = Documento::create([
            'name'=> $request->name,
            'description'=> $request->description
        ]);
        Alert::success('BIEN!!', 'Su documento fue creado correctamente');
        return Redirect()->route('admin.documentos.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Documento $documento)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Documento $documento)
    {
        return view('admin.documentos.edit', compact('documento'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Documento $documento)
    {
        
        $documento->update([
            'name'=>$request->name,
            'description'=> $request->description
        ]);
        Alert::info('BIEN!!', 'Su documento fue editado correctamente');
        return Redirect()->route('admin.documentos.index', $documento);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Documento $documento)
    {
        $documento->delete();
        Alert::warning('ATENCION!!', 'Su documento fue eliminado correctamente');
        return Redirect()->route('admin.documentos.index');
    }
}
