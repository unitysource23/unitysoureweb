<?php

namespace App\Repositories\Query;

use App\Models\AppSettings;
use App\Repositories\Interface\AppSettingsInterface;
use Illuminate\Http\Request;

class AppSettingsQuery implements AppSettingsInterface
{

    public function index()
    {

        return AppSettings::orderByDesc('id')->paginate(10);
    }

    public function store(Request $request)
    {

        return AppSettings::create($request->all());
    }


    public function update(AppSettings $app_settings, Request $request)
    {
        if ($app_settings) {

            $app_settings->update($request->all());

            return $app_settings;
        }

        return null;
    }

    public function delete(AppSettings $app_settings)
    {
        if ($app_settings) {

            $app_settings->delete();

            return true;
        }

        return false;
    }
}
