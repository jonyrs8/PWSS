<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Brand;
use App\Models\Color;
use App\Models\Size;
use App\Models\Unit;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('product.index', [ 'products' => $products]);


    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        $brands = Brand::all();
        $colors = Color::all();
        $sizes = Size::all();
        $units = Unit::all();
        
        // Pass all variables in a single array
        return view('product.create', [
            'categories' => $categories,
            'brands' => $brands,
            'colors' => $colors,
            'sizes' => $sizes,
            'units' => $units
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request -> validate([
            'name' => 'required|max:255|min:2',
            'status' => 'required|in:active,inactive',
            'price' => 'required', 'numeric', 'min:0',
            'sale_price' => ['numeric', 'min:0', new ConvertToDecimal],
        ]);

        $product = new Product();
        $product -> sku = $request->input('sku');
        $product -> barcode = $request->input('barcode');
        $product -> description = $request->input('description');
        $product -> price = str_replace(',', '.', $request->input('price')); //TROCA VÍRGULA POR PONTO
        $product -> slug = $request->input('slug');
        $product->name = $request->input('name');
        $product->status = $request->input('status');
        $product -> sale = $request->input('sale');
        $product -> sale_price = $request->input('sale_price');
        $product->category_id = $request->input('category');
        $product->brand_id = $request->input('brand');
        $product->color_id = $request->input('color');
        $product->size_id = $request->input('size_id');
        $product->unit_id = $request->input('unit_id');
        $product -> stock = $request->input('stock');
        $product -> vat = $request->input('vat');
        $product -> weight = $request->input('weight');
        $product -> height = $request->input('height');
        $product -> length = $request->input('length');
        $product -> width = $request->input('width');
        $product->save();

        return redirect ()->route('product.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::find($id);
        return view('product.show', [ 'product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::find($id);
        return view('product.edit', [ 'product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::find($id);
        $product->name = $request->input('name');
        $product->status = $request->input('status');
        $product->save();
        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('product.index');
    }
}
