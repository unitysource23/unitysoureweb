<?php

namespace App\Http\Controllers;

use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TeamController extends Controller
{
    protected string $image_store_path = 'teams/image';

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.team.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.team.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $profile = $request->profile ? store_in_public(destination: $this->image_store_path, image: $request->profile) : null;

        $request                = $request->all();
        $request['profile']     = $profile;

        $team = Team::create($request);

        if ($team) {

            return redirect()->route('team')->with('success', 'Success');
        }

        return back()->with('error', 'Failed!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Team $team)
    {
        return view('backend.team.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Team $team)
    {
        $profile  = $team->profile;

        if ($request->hasFile('profile')) {

            File::delete(public_path($this->image_store_path . '/' . $profile));

            $profile = store_in_public(destination: $this->image_store_path, image: $request->profile);
        }

        $request = $request->all();

        $request['profile'] = $profile;

        $team->update($request);

        if ($team) {

            return redirect()->route('team')->with('success', 'Success!');
        }

        return back()->with('failed', 'Failed!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Team $team)
    {
        $profile  = $team->profile;

        if ($profile) {

            File::delete(public_path($this->image_store_path . '/' . $profile));
        }

        $team = $team->delete();

        if ($team) {

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
