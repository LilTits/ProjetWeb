<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductsController extends Controller
{
    /** 
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $products = Product::orderBy('id', 'desc')->get();
        // return view('products.index')->with('products', $products);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request, [
        //     'title' => 'required',
        //     'price' => 'required',
        //     'stock' => 'required',
        //     'description' => 'required'
        // ]);

        // // Create Product
        // $product = new Product();
        // $product->title = $request->input('title');
        // $product->price = $request->input('price');
        // $product->stock = $request->input('stock');
        // $product->description = $request->input('description');
        // $product->save();

        // return redirect('/products')->with('success', 'Produit créé');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data =  array();
        $data['product'] = Product::find($id);
        $data['reviews'] = Product::find($id)->comments;
        return view('product.show',compact("data"));;
    }

    /**
     * Show the form for creating the specified commsnets.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function addreview($id)
    {
        $product = Product::find($id);
        return view('product.addreview')->with('product', $product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $product =  Product::find($id);
        // return view('products.edit')->with('product', $product);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // $this->validate($request, [
        //     'title' => 'required',
        //     'price' => 'required',
        //     'stock' => 'required',
        //     'description' => 'required'
        // ]);

        // // Create Product
        // $product = Product::find($id);
        // $product->title = $request->input('title');
        // $product->price = $request->input('price');
        // $product->stock = $request->input('stock');
        // $product->description = $request->input('description');
        // $product->save();

        // return redirect('/products')->with('success', 'Produit mis à jour');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // $product = Product::find($id);
        // $product->delete();
        // return redirect('/products')->with('success', 'Produit supprimé');
    }
}
