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
        $title = 'Our Products';
        return view('pages.product')->with('title', $title);
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
        return view('pages.event')->with($event);
    }

    public function login() {
        return view('pages.loginRe');
    }

    public function contact() {
        return view('pages.contact');
    }
}
