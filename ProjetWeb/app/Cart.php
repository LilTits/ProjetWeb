<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public function products()
    {
        return $this->belongstoMany(Product::class, 'cart_product');
    }

    public function customer()
    {
        return $this->belongsTo('App\User');
    }

    // public $items = null;
    // public $totalQty = 0;
    // public $totalPrice = 0;

    // Constructor 
    // public function __construct($oldCart) {
    //     if ($oldCart) {
    //         $this->items = $oldCart->items;
    //         $this->totalQty = $oldCart->totalQty;
    //         $this->totalPrice = $oldCart->totalPrice;
    //     }
    // }

    // Add items to cart
    // public function add($item, $id) {
    //     $storedItem = [
    //         'qty' => 0,
    //         'price' => $item->price,
    //         'item' => $item
    //     ];
    //     if ($this->items) {
    //         if (array_key_exists($id, $this->items)) {
    //             $storedItem = $this->items[$id];
    //         }
    //     }
    //     $storedItem['qty']++;
    //     $storedItem['price'] = $item->price * $storedItem['qty'];
    //     $this->items[$id] = $storedItem;
    //     $this->totalQty++; 
    //     $this->totalPrice += $item->price;
    // }
}
