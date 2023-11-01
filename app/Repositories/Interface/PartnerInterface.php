<?php

namespace App\Repositories\Interface;

use App\Models\Partner;
use Illuminate\Http\Request;

interface ParnterInterface
{
    public function index();

    public function store(Request $request);

    public function update(Partner $partner, Request $request);

    public function delete(Partner $partner);
}
