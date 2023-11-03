<?php

namespace App\Repositories\Interface;

use App\Models\Client;
use Illuminate\Http\Request;

interface ClientInterface
{
    public function index();

    public function store(Request $request);

    public function update(Client $client, Request $request);

    public function delete(Client $client);
}
