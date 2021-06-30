<?php

namespace App\Http\Controllers;

use App\Models\Link;
use Illuminate\Http\Request;
use Inertia\Inertia;

class RedirectController extends Controller
{
    public function __invoke(Request $request)
    {
        $link = Link::where('slug', $request->link)->first();

        if (!$link) {
            return Inertia::render('LinkNotFound');
        }

        return redirect($link->url);
    }
}
