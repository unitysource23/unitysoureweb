<?php

namespace App\Repositories\Interface;

use App\Models\Team;
use Illuminate\Http\Request;

interface TeamInterface
{
    public function index();

    public function store(Request $request);

    public function update(Team $team, Request $request);

    public function delete(Team $team);
}
