<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class ShowHomeController extends Controller
{
    public function __invoke(Request $request): RedirectResponse
    {
        return redirect('https://betfe.app/');
    }
}
