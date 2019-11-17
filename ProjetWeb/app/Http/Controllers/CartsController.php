<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cart as myCart;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\User;
use Auth;

class CartsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {  
        
        $cart = myCart::where('user_id', Auth::user()->id)->get();
        
        return view('carts.index')->with('cart', $cart);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $duplicateItems = Cart::search(function ($cardItem, $rowId) use ($request){
            return $cardItem->id === $request->id;
        });

        if ($duplicateItems->isNotEmpty()) {
            return redirect()->route('carts.index')->with('success', 'Le produit est déjà dans le panier');
        }

        // Cart::add($request->id, $request->name, 1, $request->price, $request->product_image)->associate('App\ProductType');
        Cart::add($request->id, $request->name, 1, $request->price)->associate('App\ProductType');

        return redirect()->route('products.index')->with('success', 'Article ajouté');
    }

    /**
     * Store the cart on the database
     * 
     */

    public function saveCart(Request $request) {

        $this->validate($request, [
            'id' => 'required'
        ]);

        // $cart = Cart::content();

        $saveCart = new myCart();
        $saveCart->user_id = auth()->user()->id;
        $saveCart->product_id = $request->input('id');
        $saveCart->quantity = 1;
        $saveCart->save();

        return redirect()->route('products.index')->with('success', 'Article ajouté au panier');
    }

    /**
     * 
     */

    // public function storeCart($identifier){ 
    //     Cart::store($identifier);
    // }

    /**
     * 
     */

    // public function restoreCart($identifier){ 
    //     Cart::restore($identifier); 
    // }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //     'id' => 'required'
        // ]);

        // $saveCart = myCart::find($id);
        // $saveCart->quantity = myCart::;
        // $saveCart->save();

        // return redirect()->route('products.index')->with('success', 'Article ajouté au panier');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Cart::remove($id);
        $cart = myCart::find($id);
        $cart->delete();

        return back()->with('success', 'Le produit a été supprimé du panier');
    }

   
}
