<?php

namespace App\Http\Controllers;

use App\Models\Team;
use App\Repositories\Interface\TeamInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TeamController extends Controller
{
    private $team_repository;

    public function __construct(TeamInterface $team_repository)
    {
        $this->team_repository = $team_repository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $teams = $this->team_repository->index();

        return view('backend.team.index', compact('teams'));
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
        $team = $this->team_repository->store(request: $request);

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
        $team = $this->team_repository->update(team: $team, request: $request);

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
        $team = $this->team_repository->delete(team: $team);

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
