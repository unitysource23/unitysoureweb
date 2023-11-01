<?php

namespace App\Repositories\Query;

use App\Models\Client;
use App\Repositories\Interface\ClientInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ClientQuery implements ClientInterface
{
    protected string $image_store_path = 'clients/image';

    public function index()
    {
        return Client::orderByDesc('id')->paginate(10);
    }

    public function store(Request $request)
    {
        $image = $request->logo ? store_in_public(destination: $this->image_store_path, image: $request->logo) : null;

        $request            = $request->all();
        $request['logo']    = $image;

        return Client::create($request);
    }


    public function update(Client $client, Request $request)
    {
        if ($client) {

            $logo  = $client->logo;

            if ($request->hasFile('logo')) {

                File::delete(public_path($this->image_store_path . '/' . $logo));

                $logo = store_in_public(destination: $this->image_store_path, image: $request->logo);
            }

            $request        = $request->all();

            $request['logo'] = $logo;

            $client->update($request);

            return $client;
        }

        return null;
    }

    public function delete(Client $client)
    {
        if ($client) {

            $logo  = $client->logo;

            if ($logo) {

                File::delete(public_path($this->image_store_path . '/' . $logo));
            }

            $client->delete();

            return true;
        }

        return false;
    }
}
