<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'ProductType' => 'required|alpha_num|max:3',
            'ProductCode' => 'required|alpha_num|max:6',
            'ProductName' => 'required|max:50',
            'Quantity' => 'required|numeric',
            'Note' => 'nullable|max:60',
        ]);

        Product::create($request->all());
        return redirect()->route('products.index')->with('success', 'Product created successfully.');
    }

    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $request->validate([
            'ProductType' => 'required|alpha_num|max:3',
            'ProductCode' => 'required|alpha_num|max:6',
            'ProductName' => 'required|max:50',
            'Quantity' => 'required|numeric',
            'Note' => 'nullable|max:60',
        ]);

        $product->update($request->all());
        return redirect()->route('products.index')->with('success', 'Product updated successfully.');
    }
    

}
