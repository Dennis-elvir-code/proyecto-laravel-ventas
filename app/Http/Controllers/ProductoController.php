<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){ 
        $productos = Producto::all();//devuelve todos los registros de la DB
        return view('home', compact ('productos'));
    
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {   $nvProducto = new Producto();
        $nvProducto->codigoProducto = $request->input('codigoProducto');
        $nvProducto->nombre = $request->input('nombre');
        $nvProducto->precio = $request->input('precio');
        $nvProducto->stock= $request->input('stock');
        $nvProducto->save();
        $productos = Producto::all();
        return redirect('home');
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $producto = Producto::find($id);
        return view('edit', compact('producto'));
    }

    public function eliminar(string $id)
    {
        $producto = Producto::find($id);
        return view ('eliminar', compact ('producto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $nvProducto = Producto::find($id);
        $nvProducto->nombre = $request->input('nombre');
        $nvProducto->precio = $request->input('precio');
        $nvProducto->stock= $request->input('stock');
        $nvProducto->save();
        $productos = Producto::all();
        return redirect('home');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    
        public function destroy($id){
            $Producto = Producto::find($id);
            $Producto->delete();
            
        return redirect ('home');
    }
}
