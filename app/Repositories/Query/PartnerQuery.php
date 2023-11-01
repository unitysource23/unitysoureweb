<?php

namespace App\Repositories\Query;

use App\Models\Partner;
use App\Repositories\Interface\ParnterInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PartnerQuery implements ParnterInterface
{
    protected string $image_store_path = 'partners/image';

    public function index()
    {

        return Partner::orderByDesc('id')->paginate(10);
    }

    public function create(Request $request)
    {

        $image = $request->logo ? store_in_public(destination: $this->image_store_path, image: $request->logo) : null;

        $request            = $request->all();
        $request['logo']    = $image;

        return Partner::create($request);
    }


    public function update(Partner $partner, Request $request)
    {
        if ($partner) {

            $logo  = $partner->logo;

            if ($request->hasFile('logo')) {

                File::delete(public_path($this->image_store_path . '/' . $logo));

                $logo = store_in_public(destination: $this->image_store_path, image: $request->logo);
            }

            $request = $request->all();

            $request['logo'] = $logo;

            $partner->update($request);

            return $partner;
        }

        return null;
    }

    public function delete(Partner $partner)
    {
        if ($partner) {

            $logo  = $partner->logo;

            if ($logo) {

                File::delete(public_path($this->image_store_path . '/' . $logo));
            }

            $partner->delete();

            return true;
        }

        return false;
    }
}
