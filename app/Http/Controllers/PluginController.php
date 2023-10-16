<?php

namespace App\Http\Controllers;

use App\Models\Plugin;
use Illuminate\Http\Request;

class PluginController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $plugins = Plugin::all();

       return view ('plugins.create', compact ('plugins'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view ('plugins.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Plugin::create([
            'plugin_name' => $request->input('plugin_name'),
            'folder_plugin' => $request->input('folder'),
            'plugin_type' => $request->input('type'),
            'plugin_status' => $request->input('status'),
            'url' => $request->input('url'),
            'version' => $request->input('version'),
        ]);


        return redirect()->route('dashboard');
    }

    /**
     * Display the specified resource.
     */
    public function show(Plugin $plugin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Plugin $plugin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Plugin $plugin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Plugin $plugin)
    {
        //
    }
}
