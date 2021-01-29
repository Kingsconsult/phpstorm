<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;


class ArtisanCommandController extends Controller
{
    public function migrate()
    {
        Artisan::call('migrate');
    }
}
