<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $title = 'Welcome';
        // return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);
    }

    public function product() {
        $product = array(
            'product' => [
                'product1' => [
                    'nom' => 'Pull',
                    'prix' => '100€',
                    'description' => 'Lorem ipsum'
                ],
                'product2' => [
                    'nom' => 'Chaussette',
                    'prix' => '1000€',
                    'description' => 'Lorem ipsum'
                ],
                'product3' => [
                    'nom' => 'Claquette',
                    'prix' => '10000000000€',
                    'description' => 'Lorem ipsum'
                ]
            ]
        );
        return view('pages.product')->with($product);
    }

    public function event() {
        $event = array(
            'title' => 'Our Events',
            'event' => [
                'Beer pong',
                'Lan CSGO',
                'Démontage de panneau'
            ]
        );
        return view('pages.event')->with($event );
    }

    public function login() {
        return view('pages.loginRe');
    }

    public function contact() {
        return view('pages.contact');
    }
    
    public function bonus() {
        return view('pages.bonus');
    }
    
    public function basket() {
        return view('pages.basket');
    }
}
