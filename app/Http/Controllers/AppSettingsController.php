<?php

namespace App\Http\Controllers;

use App\Models\AppSettings;
use App\Repositories\Interface\AppSettingsInterface;
use Illuminate\Http\Request;

class AppSettingsController extends Controller
{
    private $app_settings_repository;

    public function __construct(AppSettingsInterface $app_settings_repository)
    {
        $this->app_settings_repository = $app_settings_repository;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $settings = $this->app_settings_repository->index();

        return view('backend.app_settings_repository.index', compact('settings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.app_settings_repository.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $settings = $this->app_settings_repository->create($request);

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
        $settings = $this->app_settings_repository->getByID($app_settings);

        return view('backend.app_settings_repository.edit', compact('settings'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, AppSettings $app_settings)
    {
        $settings = $this->app_settings_repository->update($app_settings, $request);

        if ($settings) {

            return redirect()->route('app-settings')->with('success', 'Success!');
        }

        return back()->with('failed', 'Failed!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AppSettings $app_settings)
    {
        $settings = $this->app_settings_repository->delete($app_settings);

        if ($settings) {

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
