<?php

namespace App\Repositories\Interface;

use App\Models\Product;
use Illuminate\Http\Request;

interface ProductInterface
{
    public function index();

    public function store(Request $request);

    public function update(Product $product, Request $request);

    public function delete(Product $product);
}
