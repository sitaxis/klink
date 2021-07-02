<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLinkRequest;
use App\Models\Link;
use Illuminate\Http\Request;
use Inertia\Inertia;

class WelcomeController extends Controller
{
    public function index()
    {
        return Inertia::render('Welcome');
    }

    public function shorten(StoreLinkRequest $request)
    {
        $link = new Link($request->validated());

        if (auth()->check()) {
            auth()->user()->links()->associate($link);
        }

        $link->save();

        return redirect()->back()->with(['link' => $link]);
    }
}
