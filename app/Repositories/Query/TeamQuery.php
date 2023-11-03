<?php

namespace App\Repositories\Query;

use App\Models\Team;
use App\Repositories\Interface\TeamInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class TeamQuery implements TeamInterface
{
    protected string $image_store_path = 'teams/image';

    public function index()
    {
        return Team::orderByDesc('id')->paginate(10);
    }

    public function store(Request $request)
    {
        $profile = $request->profile ? store_in_public(destination: $this->image_store_path, image: $request->profile) : null;

        $request                = $request->all();
        $request['profile']     = $profile;

        return Team::create($request);
    }


    public function update(Team $team, Request $request)
    {
        if ($team) {

            $profile  = $team->profile;

            if ($request->hasFile('profile')) {

                File::delete(public_path($this->image_store_path . '/' . $profile));

                $profile = store_in_public(destination: $this->image_store_path, image: $request->profile);
            }

            $request = $request->all();

            $request['profile'] = $profile;

            $team->update($request);

            return $team;
        }

        return null;
    }

    public function delete(Team $team)
    {
        if ($team) {

            $logo  = $team->logo;

            if ($logo) {

                File::delete(public_path($this->image_store_path . '/' . $logo));
            }

            $team->delete();

            return true;
        }

        return false;
    }
}
