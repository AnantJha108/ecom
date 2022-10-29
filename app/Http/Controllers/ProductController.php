<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['products'] = Product::all();
        return view('admin.manageProducts',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['categories'] = Category::all();
        return view('admin.addProducts',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'prod_name' => 'required',
            'category_id' => 'required',
            'image' => 'required|image',
            'prod_price' => 'required',
            'prod_discount_price' => 'required',
            'prod_description' => 'required',
        ]);
        $filename = $request->image->getClientOriginalName();
        $request->image->move(public_path('images'),$filename);
        $data['image'] =$filename;

        Product::create($data);
        return redirect()->route('products.index')->with('msg','Product Insert SuccessFully');
     }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        $data['categories'] = Category::all();
        $data['product'] = $product;
        return view('admin.editProducts',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $request->validate([
            'prod_name' => 'required',
            'category_id' => 'required',
            'prod_price' => 'required',
            'prod_discount_price' => 'required',
            'prod_description' => 'required',
        ]);
        $product->prod_name = $request->prod_name;
        $product->category_id = $request->category_id;
        $product->prod_price = $request->prod_price;
        $product->prod_discount_price = $request->prod_discount_price;
        $product->prod_description = $request->prod_description;
        $product->save();
        return redirect()->route('products.index')->with('msg1','Product Updated SuccessFully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index')->with('msg2','Product Deleted SuccessFully');
    }
}
