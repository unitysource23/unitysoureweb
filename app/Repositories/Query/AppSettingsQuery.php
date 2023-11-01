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

    public function create(Request $request)
    {

        return AppSettings::create($request->all());
    }

    public function getByID(AppSettings $app_settings)
    {

        return $app_settings;
    }

    public function update(AppSettings $app_settings, Request $request)
    {
        $app_settings = $this->getByID($app_settings);

        if ($app_settings) {

            $app_settings->update($request->all());

            return $app_settings;
        }

        return null;
    }

    public function delete($id)
    {

        $app_settings = $this->getByID($id);

        if ($app_settings) {

            $app_settings->delete();

            return true;
        }

        return false;
    }
}
