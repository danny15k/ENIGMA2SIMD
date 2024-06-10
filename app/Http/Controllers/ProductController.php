<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $products = Product::all();

        return view('product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(('product.create'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required', 'description' => 'required', 'price' => 'required', 'image' => 'required|image',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $imageName = $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
        } else {
            unset($input['image']);
        }

        product::create($input);

        return redirect('/admin/product')->with('message', 'Data successfully added');

    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'title' => 'required', 'description' => 'required', 'price' => 'required', 'image' => 'required|image',
        ]);

        $input = $request->all();

        if ($image = $request->file('image')) {
            $destinationPath = 'image/';
            $imageName = $image->getClientOriginalName();
            $image->move($destinationPath, $imageName);
            $input['image'] = $imageName;
        }

        $product->update($input);

        return redirect('/admin/product')->with('message', 'Data successfully edited');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect('/admin/product')->with('message', 'Data successfully delete');
    }
}
