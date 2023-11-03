<?php

namespace App\Http\Controllers;

use App\Models\Partner;
use App\Repositories\Interface\ParnterInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PartnerController extends Controller
{

    private $parnter_repository;

    public function __construct(ParnterInterface $parnter_repository)
    {
        $this->parnter_repository = $parnter_repository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $parnters = $this->parnter_repository->index();

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

        $parnter = $this->parnter_repository->store(request: $request);

        if ($parnter) {

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
        $partner = $this->parnter_repository->update(partner: $partner, request: $request);

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

        $partner = $this->parnter_repository->delete(partner: $partner);

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
