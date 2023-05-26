<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Fitur;
use App\Models\Karir;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $karirs = Karir::all();
        $about = About::first();
        $fiturs = Fitur::all();

        return view('home.index', compact(
            'karirs',
            'about',
            'fiturs'
        ));
    }
    public function about()
    {
        $about = About::first();

        return view('home.about', compact(
            'about'
        ));
    }
}
