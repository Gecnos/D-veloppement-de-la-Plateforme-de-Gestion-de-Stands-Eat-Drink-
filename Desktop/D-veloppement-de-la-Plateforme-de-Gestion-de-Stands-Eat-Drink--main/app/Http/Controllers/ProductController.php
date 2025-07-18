<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Stand;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index()
    {
        $stand = Auth::user()->stand;
        $products = $stand? $stand->products: [];
        return view('entrepreneur.produits.index', compact('products'));
}

    public function create()
    {
        return view('entrepreneur.produits.create');
}

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'description' => 'nullable|string',
            'prix' => 'required|numeric|min:0',
            'image' => 'nullable|image|max:2048',
        ]);

        $imagePath = $request->file('image')
? $request->file('image')->store('produits', 'public')
: null;

        $product = new Product();
        $product->nom = $request->nom;
        $product->description = $request->description;
        $product->prix = $request->prix;
        $product->image_url = $imagePath;
        $product->stand_id = Auth::user()->stand->id;
        $product->save();

        return redirect()->route('produits.index')->with('success', 'Produit ajouté avec succès.');
}

    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('entrepreneur.produits.edit', compact('product'));
}

    public function update(Request $request, $id)
    {
        $request->validate([
            'nom' => 'required|string|max:255',
            'description' => 'nullable|string',
            'prix' => 'required|numeric|min:0',
            'image' => 'nullable|image|max:2048',
        ]);

        $product = Product::findOrFail($id);

        if ($request->file('image')) {
            $product->image_url = $request->file('image')->store('produits', 'public');
}

        $product->nom = $request->nom;
        $product->description = $request->description;
        $product->prix = $request->prix;
        $product->save();

        return redirect()->route('produits.index')->with('success', 'Produit mis à jour.');
}

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('produits.index')->with('success', 'Produit supprimé.');
}
}
