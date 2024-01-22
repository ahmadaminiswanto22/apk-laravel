<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index() {
        return view('template.contact', [
            'title' => 'Kontak'
        ]);
    }

    public function store(Request $request){
        dd($request);
    }
}
