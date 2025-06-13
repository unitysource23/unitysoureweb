<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OurProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages/our_products');
    }
}
