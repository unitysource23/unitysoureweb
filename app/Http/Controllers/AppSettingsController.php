<?php

namespace App\Http\Controllers;

use App\Models\AppSettings;
use Illuminate\Http\Request;

class AppSettingsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('backend.app_settings.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.app_settings.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $settings = AppSettings::create($request->all());

        if ($settings) {

            return redirect()->route('app-settings')->with('success', 'Success');
        }

        return back()->with('error', 'Failed!');
    }

    /**
     * Display the specified resource.
     */
    public function show(AppSettings $app_settings)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(AppSettings $app_settings)
    {
        return view('backend.app_settings.edit', compact('app_settings'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AppSettings $app_settings)
    {
        $app_settings->update($request->all());

        if ($app_settings) {

            return redirect()->route('app-settings')->with('success', 'Success!');
        }

        return back()->with('failed', 'Failed!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AppSettings $app_settings)
    {
        $app_settings = $app_settings->delete();

        if ($app_settings) {

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
