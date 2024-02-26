<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Venta;
use App\Models\Producto;

class VentaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Obtener todas las ventas con sus productos relacionados
    $ventas = Venta::with('producto')->get();

    // Calcular Subtotal, ISV y Total para cada venta
    foreach ($ventas as $venta) {
        // Obtener el precio del producto asociado a la venta
        $precioProducto = $venta->producto->precio;

        // Calcular Subtotal
        $subtotal = $venta->cantidad * $precioProducto;

        // Calcular ISV (Impuesto sobre Ventas)
        $isv = $subtotal * 0.15;

        // Calcular Total (Subtotal + ISV)
        $total = $subtotal + $isv;

        // Asignar los valores calculados a la venta
        $venta->subtotal = $subtotal;
        $venta->isv = $isv;
        $venta->total = $total;
    }

    // Pasar las ventas calculadas a la vista
    return view('ventas', compact('ventas'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('ventas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
     
    

    /**
     * Display the specified resource.
     */
    }
      public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
