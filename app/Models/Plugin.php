<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plugin extends Model
{
    use HasFactory;

    protected $fillable = [
        'plugin_name',
        'folder_plugin',
        'plugin_type',
        'plugin_status',
        'url',
        'version',
    ];
}
