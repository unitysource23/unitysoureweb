<?php

namespace App\Repositories\Interface;

use App\Models\AppSettings;
use Illuminate\Http\Request;

interface AppSettingsInterface
{
    public function index();

    public function create(Request $request);

    public function update(AppSettings $app_settings, Request $request);

    public function delete(AppSettings $app_settings);
}
