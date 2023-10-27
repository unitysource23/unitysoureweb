<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    protected string $image_store_path = 'products/image';
    protected string $video_store_path = 'products/videos';

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::paginate(10);

        return view('backend.product.index',compact('products'));
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
        $image = $request->image ? store_in_public(destination: $this->image_store_path, image: $request->image) : null;

        $demo_video = $request->demo_video ? store_in_public(destination: $this->video_store_path, image: $request->demo_video) : null;

        $request                    = $request->all();
        $request['image']           = $image;
        $request['demo_video']      = $demo_video;

        $product = Product::create($request);

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
        $image      = $product->image;
        $demo_video = $product->demo_video;

        if ($request->hasFile('image')) {

            File::delete(public_path($this->image_store_path . '/' . $image));

            $image = store_in_public(destination: $this->image_store_path, image: $request->image);
        }

        if ($request->hasFile('demo_video')) {

            File::delete(public_path($this->video_store_path . '/' . $demo_video));

            $demo_video = store_in_public(destination: $this->video_store_path, image: $request->demo_video);
        }

        $request = $request->all();

        $request['logo']        = $image;
        $request['demo_video']  = $demo_video;

        $product->update($request);

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
        $image      = $product->image;
        $demo_video = $product->demo_video;

        if ($image) {

            File::delete(public_path($this->image_store_path . '/' . $image));
        }

        if ($demo_video) {

            File::delete(public_path($this->video_store_path . '/' . $demo_video));
        }

        $product = $product->delete();

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
