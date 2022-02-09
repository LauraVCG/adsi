<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Administrador;


class ControllerAdministrador extends Controller
{ 
    public function index(){
        $admi = Administrador::latest()->paginate(4);  
        return view ('administrador.index', compact('admi'))
            ->with('i',(request()->input('page', 1)-1)*5); 
    }

    public function create(){
    	//
    	return view('administrador.create');
    }

    public function store(Request $request){
        $request->validate([
            'telefono'=>'required',
            'id_usuarios'=>'required'
        ]);

        Administrador::create($request->all());
        return redirect()->route('administrador.index')->with('success', 'Administrador created successfully');
    }

    public function show($id_administrador)
    {
        //  
        $administrador = Administrador::find($id_administrador);
        return view('administrador.show', compact('administrador'));
    }

    public function destroy($id_administrador)
    {
         $administrador = Administrador::findOrFail($id_administrador);
         $administrador->delete();

        return redirect()->route('administrador.index')
            ->with('success', 'Administrador eliminado satisfactoriamente.');
    }

    public function edit($id_administrador)
    {
        $administrador = Administrador::find($id_administrador);
        return view('administrador.edit', compact('administrador'));
    }

    public function update(Request $request, $id_administrador)
    {
        //
         $request->validate([
            'telefono'=>'required',
            'id_usuarios'=>'required'
        ]);

         $data = Administrador::findOrFail($id_administrador);
         $data->telefono = $request->telefono;
         $data->id_usuarios = $request->id_usuarios;
         $data->update();

        return redirect()->route('administrador.index')
            ->with('success', 'Administrador actualizado  con éxito.');
    }
}