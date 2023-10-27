<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PartnerController extends Controller
{
    protected string $image_store_path = 'partners/image';

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $parnters = Partner::paginate(10);

        return view('backend.partner.index', compact('parnters'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.partner.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $image = $request->logo ? store_in_public(destination: $this->image_store_path, image: $request->logo) : null;

        $request            = $request->all();
        $request['logo']    = $image;

        $partner = Partner::create($request);

        if ($partner) {

            return redirect()->route('partner')->with('success', 'Success');
        }

        return back()->with('error', 'Failed!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Partner $partner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Partner $partner)
    {
        return view('backend.partner.edit', compact('partner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Partner $partner)
    {
        $logo  = $partner->logo;

        if ($request->hasFile('logo')) {

            File::delete(public_path($this->image_store_path . '/' . $logo));

            $logo = store_in_public(destination: $this->image_store_path, image: $request->logo);
        }

        $request = $request->all();

        $request['logo'] = $logo;

        $partner->update($request);

        if ($partner) {

            return redirect()->route('partner')->with('success', 'Success!');
        }

        return back()->with('failed', 'Failed!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Partner $partner)
    {
        $logo  = $partner->logo;

        if ($logo) {

            File::delete(public_path($this->image_store_path . '/' . $logo));
        }

        $partner = $partner->delete();

        if ($partner) {

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
