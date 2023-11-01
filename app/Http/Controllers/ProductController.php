<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Repositories\Interface\ProductInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    private $product_repository;

    public function __construct(ProductInterface $product_repository)
    {
        $this->product_repository = $product_repository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = $this->product_repository->index();

        return view('backend.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = $this->product_repository->store(request: $request);

        if ($product) {

            return redirect()->route('product')->with('success', 'Success');
        }

        return back()->with('error', 'Failed!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('backend.product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $product = $this->product_repository->update(product: $product, request: $request);

        if ($product) {

            return redirect()->route('product')->with('success', 'Success!');
        }

        return back()->with('failed', 'Failed!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product = $this->product_repository->delete(product: $product);

        if ($product) {

            return response()->json([
                'message' => 'The record has been deleted successfully.',
                'status' => 200,
            ], 200);
        } else {
            return response()->json([
                'error' => 'This record can\'t delete!',
                'status' => 500,
            ], 500);
        }
    }
}
