<?php

namespace App\Http\Controllers;

use App\Models\CategoriaProducto;
use Illuminate\Http\Request;

/**
 * Class CategoriaProductoController
 * @package App\Http\Controllers
 */
class CategoriaProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categoriaProductos = CategoriaProducto::paginate();

        return view('categoria-producto.index', compact('categoriaProductos'))
            ->with('i', (request()->input('page', 1) - 1) * $categoriaProductos->perPage());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categoriaProducto = new CategoriaProducto();
        return view('categoria-producto.create', compact('categoriaProducto'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate(CategoriaProducto::$rules);

        $categoriaProducto = CategoriaProducto::create($request->all());

        return redirect()->route('categoria-productos.index')
            ->with('success', 'CategoriaProducto created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $categoriaProducto = CategoriaProducto::find($id);

        return view('categoria-producto.show', compact('categoriaProducto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categoriaProducto = CategoriaProducto::find($id);

        return view('categoria-producto.edit', compact('categoriaProducto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  CategoriaProducto $categoriaProducto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CategoriaProducto $categoriaProducto)
    {
        request()->validate(CategoriaProducto::$rules);

        $categoriaProducto->update($request->all());

        return redirect()->route('categoria-productos.index')
            ->with('success', 'CategoriaProducto updated successfully');
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
        $categoriaProducto = CategoriaProducto::find($id)->delete();

        return redirect()->route('categoria-productos.index')
            ->with('success', 'CategoriaProducto deleted successfully');
    }
}
