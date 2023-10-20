<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PluginResource;
use App\Models\Plugin;
use Illuminate\Http\Request;

class PluginController extends Controller
{
    public function index()
    {
        //get all posts
        $plugins = Plugin::all();

        //return collection of posts as a resource
        return new PluginResource(true, 'List Data Posts', $plugins);
    }
}
