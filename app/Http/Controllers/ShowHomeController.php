<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View as ViewTemplate;

class ShowHomeController extends Controller
{
    public function __invoke(Request $request): View
    {
        return ViewTemplate::make('welcome');
    }
}
