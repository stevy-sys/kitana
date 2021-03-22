<?php

namespace App\Http\Controllers;

use App\Team;
use App\Service;
use App\Portfolio;
use App\Couverture;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function couverture()
    {
        $couvertures = Couverture::all();
        return view('pages.couverture',compact('couvertures'));
    }

    public function about()
    {
        return view('pages.about');
    }

    public function service()
    {
        $services = Service::all();
        return view('pages.service',compact('services'));
    }

    public function portfolio()
    {
        $portfolios = Portfolio::all();
        return view('pages.portfolio',compact('portfolios'));
    }

    public function team()
    {
        $teams = Team::all();
        return view('pages.team',compact('teams'));
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
