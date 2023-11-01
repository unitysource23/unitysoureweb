<?php

namespace App\Repositories\Query;

use App\Models\Partner;
use App\Models\Product;
use App\Repositories\Interface\ProductInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductQuery implements ProductInterface
{
    protected string $image_store_path = 'products/image';
    protected string $video_store_path = 'products/videos';

    public function index()
    {
        return Product::orderByDesc('id')->paginate(10);
    }

    public function store(Request $request)
    {

        $image = $request->image ? store_in_public(destination: $this->image_store_path, image: $request->image) : null;

        $demo_video = $request->demo_video ? store_in_public(destination: $this->video_store_path, image: $request->demo_video) : null;

        $request                    = $request->all();
        $request['image']           = $image;
        $request['demo_video']      = $demo_video;

        return Product::create($request);
    }


    public function update(Product $product, Request $request)
    {
        if ($product) {

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

            return $product;
        }

        return null;
    }

    public function delete(Product $product)
    {
        if ($product) {

            $image      = $product->image;
            $demo_video = $product->demo_video;

            if ($image) {

                File::delete(public_path($this->image_store_path . '/' . $image));
            }

            if ($demo_video) {

                File::delete(public_path($this->video_store_path . '/' . $demo_video));
            }

            $product = $product->delete();

            return true;
        }

        return false;
    }
}
