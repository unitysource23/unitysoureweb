<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Repositories\Interface\ClientInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ClientController extends Controller
{
    private $client_repository;

    public function __construct(ClientInterface $client_repository)
    {
        $this->client_repository = $client_repository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = $this->client_repository->index();

        return view('backend.client.index', compact('clients'));
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
        $client = $this->client_repository->store(request: $request);

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
        $client = $this->client_repository->update(client: $client, request: $request);

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
        $client = $this->client_repository->delete(client: $client);

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
