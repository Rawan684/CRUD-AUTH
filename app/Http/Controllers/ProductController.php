<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products=Product::all();
        return view ('index',['products'=>$products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $data= $request->validate([
           'name'=>'required',
           'qty'=>'required|numeric',
           'price'=>'required',
           'description'=>'required'
        ]);
        Product::create($data);
        return redirect(route('products.index'));

    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view ('show',['product'=>$product]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view ('edit',['product'=>$product]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $data= $request->validate([
            'name'=>'required',
            'qty'=>'required|numeric',
            'price'=>'required',
            'description'=>'required'
         ]);
         $product->update($data) ;
         return redirect(route('products.index'))->with('success','product updated succesffuly');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(product $product)
    {
        $product->delete();
        return redirect(route('products.index'))->with('success','product deleted succesffuly') ;
    }
}