<?php

namespace App\Http\Controllers;

use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ClientController extends Controller
{
    protected string $image_store_path = 'clients/image';
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.client.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.client.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $image = $request->logo ? store_in_public(destination: $this->image_store_path, image: $request->logo) : null;

        $request            = $request->all();
        $request['logo']    = $image;

        $client = Client::create($request);

        if ($client) {

            return redirect()->route('client')->with('success', 'Success');
        }

        return back()->with('error', 'Failed!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Client $client)
    {
        return view('backend.client.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Client $client)
    {
        $logo  = $client->logo;

        if ($request->hasFile('logo')) {

            File::delete(public_path($this->image_store_path . '/' . $logo));

            $logo = store_in_public(destination: $this->image_store_path, image: $request->logo);
        }

        $request        = $request->all();

        $request['logo'] = $logo;

        $client->update($request);

        if ($client) {

            return redirect()->route('client')->with('success', 'Success!');
        }

        return back()->with('failed', 'Failed!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Client $client)
    {
        $logo  = $client->logo;

        if ($logo) {

            File::delete(public_path($this->image_store_path . '/' . $logo));
        }

        $client = $client->delete();

        if ($client) {

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
