<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ProductType;

class ProductTypesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = ProductType::orderBy('id', 'desc')->get();
        return view('products.index')->with('products', $product);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'stock' => 'required',
            'event_image' => 'image|nullable|max:1999'
        ]);

        // Images upload
        if ($request->hasFile('product_image')) {
            
            // Get image name with his extension
            $fileNameWithExt = $request->file('product_image')->getClientOriginalName();
            
            // Get just the name of the image
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            
            // Get just the extension
            $ext = $request->file('product_image')->getClientOriginalExtension();
            
            // Name of the image to store in the db
            $fileNameToStore = $fileName.'_'.time().'.'.$ext;

            // Upload the image
            $path = $request->file('product_image')->storeAs('public/products', $fileNameToStore);

            // Path of event images
            // $eventPath = 'public/events';
            // $x = $eventPath + $fileNameToStore;

        }   else {
            $fileNameToStore = 'therock.jpg';
        }

        // Create Product
        $product = new ProductType();
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->stock = $request->input('stock');
        $product->product_image = $fileNameToStore;
        $product->save();

        return redirect('/products')->with('success', 'Produit créé');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = ProductType::find($id);
        return view('products.show')->with('product', $product);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product =  ProductType::find($id);
        return view('products.edit')->with('product', $product);
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
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'price' => 'required',
            'stock' => 'required',
            'event_image' => 'image|nullable|max:1999'
        ]);

        // Images upload
        if ($request->hasFile('product_image')) {
            
            // Get image name with his extension
            $fileNameWithExt = $request->file('product_image')->getClientOriginalName();
            
            // Get just the name of the image
            $fileName = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            
            // Get just the extension
            $ext = $request->file('product_image')->getClientOriginalExtension();
            
            // Name of the image to store in the db
            $fileNameToStore = $fileName.'_'.time().'.'.$ext;

            // Upload the image
            $path = $request->file('product_image')->storeAs('public/products', $fileNameToStore);

            // Path of event images
            // $eventPath = 'public/events';
            // $x = $eventPath + $fileNameToStore;

        }

        // Create Product
        $product = ProductType::find($id);
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->stock = $request->input('stock');
        if ($request->hasFile('event_image')) {
            $product->product_image = $fileNameToStore;
        }
        $product->save();

        return redirect('/products')->with('success', 'Produit mis à jour');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = ProductType::find($id);
        $product->delete();
        return redirect('/products')->with('success', 'Produit supprimé');
    }
}
