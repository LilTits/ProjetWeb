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

    // Products are now in ProductsController.php
    // public function product() {
    //     return view('pages.product')->with($product);
    // }

    public function event() {
        return view('pages.event');
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

    public function legale() {
        return view('pages.legale');
    }
    
    public function basket() {
        return view('pages.basket');
    }
    public function perso() {
        return view('pages.perso');
    }
    public function deconnexion() {
        auth()->logout();
        return view('pages.index');
    }


}
