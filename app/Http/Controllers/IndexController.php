<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function couverture()
    {
        return view('pages.couverture');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function service()
    {
        return view('pages.service');
    }

    public function portfolio()
    {
        return view('pages.portfolio');
    }

    public function team()
    {
        return view('pages.team');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function competence()
    {
        return view('pages.competence');
    }

    public function blog()
    {
        return view('pages.blog');
    }
}
