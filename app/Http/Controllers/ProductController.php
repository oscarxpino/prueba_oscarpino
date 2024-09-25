<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Listar todos los productos
    public function index()
    {
        return Product::all();
    }



    // Mostrar un producto específico por su id
    public function show($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json(['message' => 'Producto no encontrado'], 404);
        }

        return $product;
    }

    // Crear un nuevo producto
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'stock' => 'required|integer',
        ]);

        $product = Product::create($request->all());
        return response()->json($product, 201);
    }

    // Actualizar un producto existente
    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json(['message' => 'Producto no encontrado'], 404);
        }

        $request->validate([
            'name' => 'string',
            'description' => 'string',
            'price' => 'numeric',
            'stock' => 'integer',
        ]);

        $product->update($request->all());
        return response()->json($product);
    }

    // Eliminar un producto
    public function destroy($id)
    {
        $product = Product::find($id);

        if (!$product) {
            return response()->json(['message' => 'Producto no encontrado'], 404);
        }

        $product->delete();
        return response()->json(['message' => 'Producto eliminado'], 200);
    }
}
